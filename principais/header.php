<?php
 if (session_status() === PHP_SESSION_NONE) {
     session_start();
 }
 $cartCount = 0;
 if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
     foreach ($_SESSION['cart'] as $item) {
         $cartCount += isset($item['quantidade']) ? (int)$item['quantidade'] : 0;
     }
 }
 ?>

  <div class="headerContainer">
            <header>
                <div class="logo">
                  <h1>BASED</h1>
                </div>
                
                <ul>
              <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                 <li><a href="produtos.php">Produtos</a></li>
                 <li><a href="contato.php">Fale conosco</a></li>


                </ul>

                <div class="iconLists">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <a href="/projeto_programacao_web/carrinho.php" class="cartLink">
                    <div class="cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <?php if ($cartCount > 0): ?>
                        <span class="cart-badge"><?php echo $cartCount; ?></span>
                        <?php endif; ?>
                    </div>
                </a>

                <div class="profile">
                    <i class="fa-regular fa-user"></i>
                </div>
               
            </header> 
            <div class="blur"></div>
            <div class="listsContainer">
                 <ul>
                    <li>Início</li>
                    <li>Sobre</li>
                    <li>Produtos</li>
                    <li>Contato</li>
                </ul>
            </div>
            <?php if (isset($_SESSION['user_nome'])): ?>
            <div class="profileContainer">
                    <ul>
                        <li><?php echo htmlspecialchars($_SESSION['user_nome']); ?></li>
                        <li><a href="/projeto_programacao_web/logout.php">Sair</a></li>
                    </ul>
                </div>
            <?php else: ?>
            <div class="profileContainer">
                    <ul>
                        <li><a href="/projeto_programacao_web/register.php">Registre-se</a></li>
                        <li><a href="/projeto_programacao_web/login.php">Login</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

           <script src="../script.js"></script>