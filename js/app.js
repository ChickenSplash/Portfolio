$(".hamburger").on("click", () => {
    if ($(".sidebar").hasClass("translate-nav")) {
        $(".sidebar").removeClass("translate-nav")
    }
    else {
        $(".sidebar").addClass("translate-nav")
    }
    
    if ($(".hamburger").hasClass("translate-nav")) {
        $(".hamburger").removeClass("translate-nav")
    }
    else {
        $(".hamburger").addClass("translate-nav")
    }
    
    if ($(".nav-overlay").hasClass("translate-nav")) {
        $(".nav-overlay").removeClass("translate-nav")
    }
    else {
        $(".nav-overlay").addClass("translate-nav")
    }
});

$(".nav-overlay").on("click", () => {
    if ($(".sidebar").hasClass("translate-nav")) {
        $(".sidebar").removeClass("translate-nav")
        $(".hamburger").removeClass("translate-nav")
        $(".nav-overlay").removeClass("translate-nav")
    }
});