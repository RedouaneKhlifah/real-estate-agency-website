const selectBtn = document.querySelector(".select-btn"),
  items = document.querySelectorAll(".item");

let searchinput = document.querySelector(".searchInput");
let searchIcon = document.querySelector(".searchIcon");

const filterButtonArrow = document.querySelector(".dropdownContainer");

selectBtn.addEventListener("click", () => {
  selectBtn.classList.toggle("open");
  selectBtn.style.borderBottom =
    selectBtn.style.borderBottom === "none"
      ? "solid 1px rgba(0, 0, 0, 0.1)"
      : "none";
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

/// slide image
// const sliderImages = document.querySelector("#silde_Images_Proprety_Container");
// const prevButton = document.querySelector("#prev-button");
// const nextButton = document.querySelector("#next-button");

// console.log(sliderImages);

// let slideIndex = 0;

// function showSlides() {
//   const slides = sliderImages.querySelectorAll("img");
//   const centerSlide = Math.floor(slides.length / 2);
//   console.log(centerSlide);
//   for (let i = 0; i < slides.length; i++) {
//     const offset = (centerSlide + slideIndex) * 100;
//     slides[i].style.transform = `translateX(${offset}%)`;
//     console.log(offset);
//   }
// }

// showSlides();

// prevButton.addEventListener("click", () => {
//   slideIndex--;
//   if (slideIndex < 0) {
//     slideIndex =
//       sliderImages.querySelectorAll(".sildeImageProprety").length - 1;
//   }
//   showSlides();
// });

// nextButton.addEventListener("click", () => {
//   slideIndex++;
//   if (
//     slideIndex >= sliderImages.querySelectorAll(".sildeImageProprety").length
//   ) {
//     slideIndex = 0;
//   }
//   showSlides();
// });
