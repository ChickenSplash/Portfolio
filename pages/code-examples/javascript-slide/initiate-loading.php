const loader = document.querySelector(".loader");

function initiateLoading() {
    if (!loader.classList.contains("active")) { // if no loading animation present, run the fetch function (prevents spam)
        loader.classList.add("active")
        imgElement.classList.add("loading-blur")
        fetchImage();
    } else {
        showPopUp("Previous request still loading");
    }
}