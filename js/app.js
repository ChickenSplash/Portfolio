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

const projectCards = document.querySelector(".projects-work");
const cardCloseButton = document.querySelectorAll(".details-header .button");

const moreDetailsButtons = document.querySelectorAll(`
    #netmatters-details,
    #project-2-details,
    #project-3-details,
    #project-4-details,
    #project-5-details,
    #project-6-details
`);

const moreDetailsCards = document.querySelectorAll(`
    #netmatters-card,
    #project-2-card,
    #project-3-card,
    #project-4-card,
    #project-5-card,
    #project-6-card    
`)

for (let i = 0; i < moreDetailsButtons.length; i++) {
    moreDetailsButtons[i].addEventListener("click", () => {
        moreDetailsCards[i].style.display = "";
        projectCards.style.display = "none";
    });
}

for (let i = 0; i < cardCloseButton.length; i++) {
    cardCloseButton[i].addEventListener("click", () => {
        moreDetailsCards[i].style.display = "none";
        projectCards.style.display = "";        
    });
}