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

// collapsing animations for the projects section using jquery

// Object containing buttons:cards
const detailsCards = {
    "#project-1-details": "#project-1-card",
    "#project-2-details": "#project-2-card",
    "#project-3-details": "#project-3-card",
    "#project-4-details": "#project-4-card",
    "#project-5-details": "#project-5-card",
    "#project-6-details": "#project-6-card",
}

for (const button in detailsCards) {
    $(detailsCards[button]).hide();

    $(button).click(() => {
        $(".projects-work").slideUp(350);
        $(detailsCards[button]).slideDown(350);
        loadCard($(detailsCards[button])); // function that forces the image to take up the height of the text container
    });

    $(detailsCards[button] + " .button.close-slide").click(() => {
        $(detailsCards[button]).slideUp(350);
        $(".projects-work").slideDown(350);
    });
}

function loadCard($card) {
    const $wrapper = $card.find(".details-wrapper");
    const $illustration = $card.find(".details-illustration");
    const $info = $card.find(".details-info ul");

    if ($wrapper.length && $illustration.length && $info.length) {
        const infoHeight = $info.outerHeight();
        $illustration.css({
            maxHeight: infoHeight + "px",
            overflowY: "auto"
        });
    }
}

// collapsing animations for coding examples using jquery

$(".details-to-show .slide").not(".details-to-show .show-by-default").hide();

$('.show-details-button').click(function () {
    let target = $(this).data('target');

// Slide up all contents first
    $('.slide').not(target).slideUp(350);

// Toggle the target content
    $(target).is(':visible') 
        ? $(target).slideUp(350)
        : $(target).slideDown(350);
});

// contact form validation

function validateForm() {
    
    let valid = true;

    // Get DOM elements
    const forename = document.getElementById('forename');
    const surname = document.getElementById('surname');
    const email = document.getElementById('email');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message'); 
    
    // Clear previous errors
    const error = document.querySelectorAll('.error')
    for (i = 0; i < error.length; i++) {
      error[i].classList.remove("error");
    }

    // Resets placeholders

    forename.placeholder = "Forename"
    email.placeholder = "Email"
    message.placeholder = "Message"

    if (forename.value.trim() === '') {
        valid = false;
        forename.classList.add("error")
        forename.placeholder += " - Required"
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.value.trim())) {
        valid = false;
        email.classList.add("error")
        email.placeholder += " - Must be valid"
    }

    if (message.value.trim() === '') {
        valid = false;
        message.classList.add("error")
        message.placeholder += " - Required"
    }
    
    return valid;
}

/* load particles.js
particlesJS.load parameters: DOM element it targets, object config, callback function.

particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

try {
    particlesJS('particles-js',
      
        {
            "particles": {
            "number": {
                "value": 100,
                "density": {
                "enable": true,
                "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                "width": 0,
                "color": "#000000"
                },
                "polygon": {
                "nb_sides": 5
                },
                "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
                }
            },
            "opacity": {
                "value": 1,
                "random": true,
                "anim": {
                "enable": true,
                "speed": 0.6,
                "opacity_min": 0.3,
                "sync": false
                }
            },
            "size": {
                "value": 1.5,
                "random": true,
                "anim": {
                "enable": false,
                "speed": 1,
                "size_min": 0.5,
                "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 0.1,
                "direction": "top",
                "random": true,
                "straight": true,
                "out_mode": "out",
                "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
                }
            }
            },
            "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                "enable": false,
                "mode": "repulse"
                },
                "onclick": {
                "enable": true,
                "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
                },
                "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
                },
                "repulse": {
                "distance": 200
                },
                "push": {
                "particles_nb": 1
                },
                "remove": {
                "particles_nb": 2
                }
            }
            },
            "retina_detect": true,
            "config_demo": {
            "hide_card": false,
            "background_color": "#b61924",
            "background_image": "",
            "background_position": "50% 50%",
            "background_repeat": "no-repeat",
            "background_size": "cover"
            }
        }
    
    );
}
catch {
    console.log("particlesJS not loaded")
}

// animejs to add animation to hero text
// function accepts value of a DOM element object and animates it

function floatBlock(element, translation, rotation) {
    function animateOnce() {
        anime({
            targets: element,  // Targeting the individual DOM object so it knows what to animate
            translateX: anime.random(-translation, translation),
            translateY: anime.random(-translation, translation),
            duration: anime.random(12000, 30000),
            easing: 'easeInOutSine',
            rotateZ: (Math.random() - 0.5) * rotation,
            direction: 'alternate',
            complete: animateOnce // Reruns the animation with new values on complete
        });
    }
    animateOnce();
}

const heroText = document.querySelectorAll(".hero-floating-text");

for (i = 0; i < heroText.length; i++) {
    floatBlock(heroText[i], 50, 30);
}

// event listeners to be able to close server side form validation feedback

$(".close").click((e) => {
    $(e.currentTarget.parentElement.parentElement).slideUp(200);
})

