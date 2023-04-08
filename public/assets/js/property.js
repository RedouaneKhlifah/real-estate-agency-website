const arrowdown = document.querySelectorAll("#propertyinfo_arrow");

const saveBtn = document.querySelector(".saveIconContainer");
const heartIcon = document.querySelector(".fa-heart");

console.log(saveBtn);
console.log(heartIcon);
console.log(arrowdown);
arrowdown.forEach((arrow) => {
    arrow.addEventListener("click", () => {
        arrow.classList.toggle("arrowDr");

        const propertyInfo = arrow.parentElement.parentElement.querySelector(
            ".propertyInfoListing"
        );

        propertyInfo.classList.toggle("propertyInfostate");
    });
});

$(".saveIconContainer").on("click", function () {
    console.log("Clicked on .saveIconContainer");
    let property_id = $(this).data("id");
    let csrf_token = $('meta[name="csrf-token"]').attr("content");
    let heartIcon = $(this).find(".fa-heart");
    $(this).prop("disabled", true);
    $.ajax({
        url: "/Favourites",
        type: "POST",
        data: { property_id: property_id },
        headers: {
            "X-CSRF-TOKEN": csrf_token,
        },

        success: (response) => {
            console.log(response);
            heartIcon.addClass("fa-solid");
        },
        error: (error) => {
            heartIcon.removeClass("fa-solid");
        },
        complete: () => {
            $(this).prop("disabled", false);
        },
    });
});
