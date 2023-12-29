/**
 * IntersectionObserver
 * détecte un élément HTML apparaît dans la fenêtre de
 * visualisation de l'utilisateur et appliquer une classe CSS
 * "appear" pour ajouter un effet d'apparition.
 *
 * { threshold: };,  1 signifie que
 * l'élément doit être entièrement visible dans
 * la fenêtre pour être détecté.
 */

// FALL-IN ANIMATION SUR SECTION

const ratio = 0.5;
const appearOptions = {
  threshold: 1,
};


// ANIMATION NUAGE

const cloudIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.add("movingcloud");
      observer.unobserve(entry.target);
    }
  });
};
const cloudObserver = new IntersectionObserver(cloudIntersect, appearOptions);
document.querySelectorAll(".clouds").forEach(function (r) {
  cloudObserver.observe(r);
});

// FADEIN - TEXT

const fadeIn = document.querySelectorAll(".fadeIn");

function scrollAppear() {
  fadeIn.forEach((element) => {
    const elementPosition = element.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.2;

    if (elementPosition < screenPosition) {
      element.classList.add("appear");
    }
  });
}

window.addEventListener("scroll", scrollAppear);


// CROIX MENU HAMBURGER

const menuToggle = document.querySelector(".menu-toggle");
menuToggle.addEventListener("click", function () {
  this.classList.toggle("active");
});

// AFFICHER MENU CONTAINER

const button = document.querySelector(".menu-toggle");
const menuContainer = document.querySelector(".menu_container");

button.addEventListener("click", () => {
  menuContainer.classList.toggle("open");
});

// Swiper: Slider
let swiper = new Swiper(".swiper-container", {
  effect: "coverflow",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  slidesPerView: 3,
  grabCursor: true,
  breakpoints: {
    1920: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1028: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
  },
});
