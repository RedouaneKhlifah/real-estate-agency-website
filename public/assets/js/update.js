// JavaScript
const imageInput = document.querySelector("#mulitiple_images");
const dropZone = document.querySelector(".dropzone");
const emptyDropZone = document.querySelector(".emptydropzone");
const images = [];

if (emptyDropZone) {
    emptyDropZone.addEventListener("click", () => {
        imageInput.click();
    });
}

// const change = (e) => {
//     emptyDropZone.style.display = "none";
//     dropZone.classList.add("d-flex", "justify-content-around");
//     const newImages = Array.from(e.target.files);

//     newImages.forEach((image) => {
//         let imageSrc = URL.createObjectURL(image);

//         const imageContainer = document.createElement("div");
//         imageContainer.style.position = "relative";

//         const removeIcon = document.createElement("i");
//         removeIcon.className = "bx bx-x-circle";
//         removeIcon.style.position = "absolute";
//         removeIcon.style.right = "10px";
//         removeIcon.style.zIndex = "200";
//         removeIcon.addEventListener("click", () => {
//             const index = images.indexOf(image);
//             console.log(index);
//             console.log(imageInput.files);

//             imageContainer.remove();
//             images.splice(index, 1);
//             updateEmptyDropZoneVisibility();
//         });

//         const img = document.createElement("img");
//         img.src = imageSrc;
//         img.className = "ml-2 h-12";
//         img.style.width = "190px";

//         imageContainer.appendChild(removeIcon);
//         imageContainer.appendChild(img);
//         dropZone.appendChild(imageContainer);
//         images.push(image);
//     });

//     updateEmptyDropZoneVisibility();
// };

// const updateEmptyDropZoneVisibility = () => {
//     if (dropZone.childElementCount === 1) {
//         console.log(dropZone.childElementCount);
//         emptyDropZone.style.display = "flex";
//     } else {
//         emptyDropZone.style.display = "none";
//     }
// };

// imageInput.addEventListener("change", change);
