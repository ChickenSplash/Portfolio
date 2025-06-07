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

// Enables the functionality of the "view more" button

const moreDetailsButtons = [
    "#netmatters-details",
    "#project-2-details",
    "#project-3-details",
    "#project-4-details",
    "#project-5-details",
    "#project-6-details",
];

const moreDetailsCards = [
    "#netmatters-card",
    "#project-2-card",
    "#project-3-card",
    "#project-4-card",
    "#project-5-card",
    "#project-6-card",
];

// collapsing animations using jquery


for (let i = 0; i < moreDetailsButtons.length; i++) {
    $(moreDetailsCards[i]).hide();

    $(moreDetailsButtons[i]).click(() => {
        $(".projects-work").slideUp(350);
        $(moreDetailsCards[i]).slideDown(350);
    });

    $(".project-details .button").click(() => {
        $(moreDetailsCards[i]).slideUp(350);
        $(".projects-work").slideDown(350);
    });
}

// Remove the blur effect upon user scrolling scrollable elements

function onScroll(event) {
  const target = event.target;
  target.classList.remove("scroll-me");
  target.removeEventListener("scroll", onScroll);
}

const scrollable = document.querySelectorAll(".scroll-me");

for (let i = 0; i < scrollable.length; i++) {
  scrollable[i].addEventListener("scroll", onScroll)
}



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

    forename.placeholder = "Forename"
    surname.placeholder = "Surname"
    email.placeholder = "Email"
    subject.placeholder = "Subject"
    message.placeholder = "Message"

    if (forename.value.trim() === '') {
        valid = false;
        forename.classList.add("error")
        forename.placeholder += " - Required"
    }

    if (surname.value.trim() === '') {
        valid = false;
        surname.classList.add("error")
        surname.placeholder += " - Required"
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.value.trim())) {
        valid = false;
        email.classList.add("error")
        email.placeholder += " - Must be valid"
    }
    
    if (subject.value.trim() === '') {
        valid = false;
        subject.classList.add("error")
        subject.placeholder += " - Required"
    }

    if (message.value.trim() === '') {
        valid = false;
        message.classList.add("error")
        message.placeholder += " - Required"
    }
    
    return valid;
}

// loads particles js, particles config currently shoved in there, ideally to be offloaded on a seperate json file
// particlesJS parameters: DOM element it targets, object config, callback function.

/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

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

// animejs to add animation to hero text

const heroText = document.querySelectorAll(".floating-text");

// function accepts value of a DOM object and animates it

function floatBlock(element) {
    function animateOnce() {
        anime({
            targets: element,  // Targeting the individual DOM object so it knows what to animate
            translateX: anime.random(-50, 50),
            translateY: anime.random(-50, 50),
            duration: anime.random(12000, 30000),
            easing: 'easeInOutSine',
            rotateZ: (Math.random() - 0.5) * 45,
            direction: 'alternate',
            complete: animateOnce // Reruns the animation with new values on complete
        });
    }
    animateOnce();
}

for (i = 0; i < heroText.length; i++) {
    floatBlock(heroText[i]);
}