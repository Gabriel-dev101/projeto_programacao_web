const profileBtn = document.querySelector(".profile")
const profileContainer = document.querySelector(".profileContainer")
const iconLists = document.querySelector(".iconLists")
const listsContainer = document.querySelector(".listsContainer")

profileBtn.addEventListener("click", () => {
    profileContainer.classList.toggle("active")
})

iconLists.addEventListener("click", () => {
    listsContainer.classList.toggle("active")
})