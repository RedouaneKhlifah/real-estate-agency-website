const dropdown_Navbar = document.querySelector(".dropdown_Navbar");
const navnar_dropdown_options = document.querySelector(
    ".navnar_dropdown_options"
);

dropdown_Navbar.addEventListener("click", (e) => {
    navnar_dropdown_options.classList.toggle("d-none");
});
