<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?precisa_login=1");
    exit;
}

require_once "conexao/connect.php";

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$mensagem = "";
$erro = "";

$acao = isset($_POST['acao']) ? $_POST['acao'] : '';
$produto_id = isset($_POST['produto_id']) ? (int)$_POST['produto_id'] : 0;

function carregarProduto($conn, $id) {
    $sql = "SELECT * FROM produtos WHERE id = " . (int)$id . " LIMIT 1";
    $res = mysqli_query($conn, $sql);
    if ($res && mysqli_num_rows($res) === 1) {
        return mysqli_fetch_assoc($res);
    }
    return null;
}

if ($acao === 'add' && $produto_id > 0) {
    $produto = carregarProduto($conn, $produto_id);
    if ($produto) {
        $estoque = (int)$produto['estoque'];
        $atual = isset($_SESSION['cart'][$produto_id]) ? (int)$_SESSION['cart'][$produto_id]['quantidade'] : 0;
        if ($estoque <= $atual) {
            $erro = "Não há estoque suficiente para este produto.";
        } else {
            $_SESSION['cart'][$produto_id] = [
                'id' => $produto['id'],
                'titulo' => $produto['title'],
                'preco' => (float)$produto['price'],
                'quantidade' => $atual + 1
            ];
            $mensagem = "Produto adicionado ao carrinho.";
        }
    } else {
        $erro = "Produto não encontrado.";
    }
}

if ($acao === 'update' && $produto_id > 0 && isset($_POST['delta'])) {
    $delta = (int)$_POST['delta'];
    if (isset($_SESSION['cart'][$produto_id])) {
        $produto = carregarProduto($conn, $produto_id);
        if ($produto) {
            $estoque = (int)$produto['estoque'];
            $atual = (int)$_SESSION['cart'][$produto_id]['quantidade'];
            $novaQtd = $atual + $delta;
            if ($novaQtd <= 0) {
                unset($_SESSION['cart'][$produto_id]);
            } else {
                if ($novaQtd > $estoque) {
                    $erro = "Quantidade solicitada excede o estoque disponível.";
                } else {
                    $_SESSION['cart'][$produto_id]['quantidade'] = $novaQtd;
                }
            }
        }
    }
}

if ($acao === 'remove' && $produto_id > 0) {
    if (isset($_SESSION['cart'][$produto_id])) {
        unset($_SESSION['cart'][$produto_id]);
    }
}

if ($acao === 'finalizar' && !empty($_SESSION['cart'])) {
    $pagamento = isset($_POST['pagamento']) ? $_POST['pagamento'] : '';
    if ($pagamento === '') {
        $erro = "Selecione uma forma de pagamento.";
    } else {
        foreach ($_SESSION['cart'] as $item) {
            $produto = carregarProduto($conn, $item['id']);
            if (!$produto) {
                $erro = "Um dos produtos do carrinho não foi encontrado.";
                break;
            }
            $estoque = (int)$produto['estoque'];
            $qtd = (int)$item['quantidade'];
            if ($qtd > $estoque) {
                $erro = "Estoque insuficiente para o produto " . $produto['title'] . ".";
                break;
            }
        }

        if ($erro === '') {
            foreach ($_SESSION['cart'] as $item) {
                $qtd = (int)$item['quantidade'];
                $id = (int)$item['id'];
                $updateSql = "UPDATE produtos SET estoque = estoque - $qtd WHERE id = $id";
                mysqli_query($conn, $updateSql);
            }

            $totalCompra = 0;
            foreach ($_SESSION['cart'] as $item) {
                $totalCompra += ((float)$item['preco']) * (int)$item['quantidade'];
            }

            if (isset($_SESSION['user_id'])) {
                $userId = (int)$_SESSION['user_id'];
                $totalCompraValor = (float)$totalCompra;
                $updateUserSql = "UPDATE users SET gastos = gastos + $totalCompraValor WHERE id = $userId";
                mysqli_query($conn, $updateUserSql);
            }

            $_SESSION['cart'] = [];
            $mensagem = "Compra finalizada com sucesso!";
        }
    }
}

$totalGeral = 0;
foreach ($_SESSION['cart'] as $item) {
    $totalGeral += $item['preco'] * $item['quantidade'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Carrinho</title>
</head>
<body>
<div class="all">
    <?php include("principais/header.php"); ?>
    <div class="container">
        <div class="textContainer">
            <h1>Seu Carrinho</h1>
            <?php if ($erro !== '') { ?>
                <p><?php echo $erro; ?></p>
            <?php } ?>
            <?php if ($mensagem !== '') { ?>
                <p><?php echo $mensagem; ?></p>
            <?php } ?>

            <?php if (empty($_SESSION['cart'])) { ?>
                <p>Seu carrinho está vazio. Veja nossos produtos em <a href="produtos.php">Produtos</a>.</p>
            <?php } else { ?>
                <table class="cartTable">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Subtotal</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($_SESSION['cart'] as $item) { 
                        $subtotal = $item['preco'] * $item['quantidade'];
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['titulo']); ?></td>
                            <td>R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></td>
                            <td>
                                <form method="post" action="carrinho.php" style="display:inline;">
                                    <input type="hidden" name="acao" value="update">
                                    <input type="hidden" name="produto_id" value="<?php echo $item['id']; ?>">
                                    <button type="submit" name="delta" value="-1">-</button>
                                </form>
                                <?php echo $item['quantidade']; ?>
                                <form method="post" action="carrinho.php" style="display:inline;">
                                    <input type="hidden" name="acao" value="update">
                                    <input type="hidden" name="produto_id" value="<?php echo $item['id']; ?>">
                                    <button type="submit" name="delta" value="1">+</button>
                                </form>
                            </td>
                            <td>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></td>
                            <td>
                                <form method="post" action="carrinho.php">
                                    <input type="hidden" name="acao" value="remove">
                                    <input type="hidden" name="produto_id" value="<?php echo $item['id']; ?>">
                                    <button type="submit">Remover</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <h2>Total: R$ <?php echo number_format($totalGeral, 2, ',', '.'); ?></h2>

                <div class="cartActions">
                    <a href="produtos.php" class="btnContainer">Continuar comprando</a>

                    <form method="post" action="carrinho.php">
                        <input type="hidden" name="acao" value="finalizar">
                        <label for="pagamento">Forma de pagamento:</label>
                        <select name="pagamento" id="pagamento" required>
                            <option value="">Selecione</option>
                            <option value="pix">Pix</option>
                            <option value="debito">Débito</option>
                            <option value="credito">Crédito</option>
                        </select>
                        <button type="submit" class="btnContainer">Finalizar compra</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>
