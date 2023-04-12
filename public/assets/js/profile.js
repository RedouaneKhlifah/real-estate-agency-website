// let adreesUpdatePen = $("#adreesUpdatePen");
// let IconProfileType = $(".IconProfileType");
// let saveicon = $(".fa-floppy-disk");

// IconProfileType.on("click", function (e) {
//     const parentElement = $(this).parent();
//     const inputElement = $("<input>")
//         .attr("type", "text")
//         .val()
//         .css("width", "300px")
//         .addClass("adress")
//         .attr("name", "adress");

//     parentElement.find(".m-0").html("").append(inputElement);
//     let user_id = $(this).data("id");
//     let csrf_token = $('meta[name="csrf-token"]').attr("content");

//     if (IconProfileType.html().includes("fa-pen-to-square")) {
//         IconProfileType.html(
//             `<i class="fa-solid fa-floppy-disk" style="color: #ff385c;"></i>`
//         );
//     } else {
//         IconProfileType.html(
//             `<i id="adreesUpdatePen" class="fa-solid fa-pen-to-square" style="color: #ff385c;"></i>`
//         );
//         console.log($(".adress").val());
//         $.ajax({
//             url: "profile", // Replace with your server-side endpoint
//             type: "POST",
//             data: { user_id: user_id, adress: inputElement.value },
//             headers: {
//                 "X-CSRF-TOKEN": csrf_token,
//             },
//             success: function (response) {
//                 console.log(response);
//             },
//             error: function (error) {
//                 console.error("Failed to update icon:", error);
//             },
//         });
//     }

//     // Use jQuery AJAX to toggle between different icons
// });
