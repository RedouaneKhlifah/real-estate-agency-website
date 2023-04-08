const selectBtn = document.querySelectorAll(".select-btn"),
    items = document.querySelectorAll(".item");

let searchinput = document.querySelector(".searchInput");
let searchIcon = document.querySelector(".searchIcon");

const filterButtonArrow = document.querySelector(".dropdownContainer");

selectBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        btn.classList.toggle("open");
        btn.style.borderBottom =
            btn.style.borderBottom === "none"
                ? "solid 1px rgba(0, 0, 0, 0.1)"
                : "none";
    });
});

items.forEach((item) => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");

        let checked = document.querySelectorAll(".checked"),
            btnText = document.querySelector(".btn-text");

        if (checked && checked.length > 0) {
            btnText.innerText = `${checked.length} Selected`;
        } else {
            btnText.innerText = "Select Language";
        }

        
        item.querySelector("input[type='checkbox']").click();
    });
});

searchinput.addEventListener("none", () => {
    searchIcon.style.display =
        searchIcon.style.display === "none" ? "block" : "none";
    console.log("re");
});

// filter arrow button toggle
filterButtonArrow.addEventListener("click", () => {
    filterButtonArrow.classList.toggle("active");
    console.log("re");
});
