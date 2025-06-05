// Navigation bar animations and controllers

const navAnimation = [
    ".sidebar",
    ".hamburger",
    ".nav-overlay",
];

$(".hamburger").on("click", () => {
    for (i = 0; i < navAnimation.length; i++) {
        if ($(navAnimation[i]).hasClass("translate-nav")) {
            $(navAnimation[i]).removeClass("translate-nav")
        }
        else {
            $(navAnimation[i]).addClass("translate-nav")
        }
    }
});

$(".nav-overlay").on("click", () => {
    if ($(".sidebar").hasClass("translate-nav")) {
        for (i = 0; i < navAnimation.length; i++) {
            $(navAnimation[i]).removeClass("translate-nav")
        }
    }
});

// Projects section

const netmattersButton = document.querySelector("#netmatters-details");
const netmattersCard = document.querySelector("#netmatters-card");
const projectCards = document.querySelector(".projects-work");
const cardCloseButton = document.querySelectorAll(".details-header .button");

cardCloseButton[0].addEventListener("click", () => {
    netmattersCard.style.display = "none"
    projectCards.style.display = ""
})

netmattersButton.addEventListener("click", () => {
    netmattersCard.style.display = ""
    projectCards.style.display = "none"
})
