let profile_input_image = document.querySelector(".profile_Image");

let profile_image = document.querySelector(".profile_Image_show");

console.log("linked");

profile_input_image.addEventListener("change", () => {
    console.log("re");
    profile_image.src = URL.createObjectURL(profile_input_image.files[0]);
});
