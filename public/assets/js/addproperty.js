const imagezone = document.querySelector(".imagezone");
const mulitiple_images = document.querySelector("#mulitiple_images");

let change = (e) => {
    imagezone.innerHTML = "";
    let files = e.target.files;
    console.log(files);

    // Loop through the selected files
    for (let i = 0; i < files.length; i++) {
        let file = files[i];

        // Create a new image element
        let img = document.createElement("img");
        img.src = URL.createObjectURL(file); // Set the source of the image to the file object
        img.style.width = "25%";

        // Append the image element to the ".imagezone" container
        imagezone.appendChild(img);
    }
};

mulitiple_images.addEventListener("change", change);
