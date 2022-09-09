const hamMenu = document.querySelector(".hamMenu");
const navMenu = document.querySelector(".nav-menu");


hamMenu.addEventListener("click", () => {
    navMenu.classList.toggle("active");
});

const navItems = document.querySelectorAll(".nav-item");

navItems.forEach(n => n.addEventListener("click", () => {
    navMenu.classList.remove("active"); 
}));
