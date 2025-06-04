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