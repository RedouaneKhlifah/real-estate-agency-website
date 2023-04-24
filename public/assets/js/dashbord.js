const bx_menu = document.querySelector(".bx-menu");
const dashbar = document.querySelector(".col-lg-3.user-dash");

bx_menu.addEventListener("click", () => {
    dashbar.classList.toggle("d-block");

    if (dashbar.classList.contains("d-block")) {
        document.body.style.overflow = "hidden";
    } else {
        document.body.style.overflow = "auto";
    }
});
