const dropdown_Navbar = document.querySelector(".dropdown_Navbar");
const navnar_dropdown_options = document.querySelector(
    ".navnar_dropdown_options"
);

if (dropdown_Navbar) {
    dropdown_Navbar.addEventListener("click", (e) => {
        navnar_dropdown_options.classList.toggle("d-none");
    });
}

const searchHeaderInput = document.querySelector(".searchHeaderInput");

const citiesUlContainer = document.querySelector(".citiesUlContainer");

searchHeaderInput.addEventListener("input", async (e) => {
    let searchCity = e.target.value;
    citiesUlContainer.innerHTML = "";

    if (searchCity != "") {
        const url = "/moroccan-cities";

        const response = await fetch(url);
        const cities = await response.json();
        // console.log(cities);

        // Filter cities based on search term
        const filteredCities = cities.filter((city) =>
            city.toLowerCase().includes(searchCity.toLowerCase())
        );

        filteredCities.forEach((city) => {
            citiesUlContainer.innerHTML += `
            <li class="list-unstyled d-flex  align-items-center justify-content-between Pb-3" style="border-radius: 0px; height: 50px;background: #ffffff;">
            <a class="text-black list-unstyled" style="    FONT-SIZE: 19px;PADDING-LEFT: 30PX;" href="">${city}</a>
            <i class='bx bx-right-arrow-circle' style="font-size: 20px;PADDING-RIGHT: 40PX;
        "></i>
            </li>
            `;
        });
    }
});
