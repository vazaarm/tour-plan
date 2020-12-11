var hotelSlider = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },
  speed: 1200,
  keyboard: {
          enabled: true,
          onlyInViewport: false,
        }
})

var reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
  speed: 1200,
  keyboard: {
          enabled: true,
          onlyInViewport: false,
        }
})

var menuButton = document.querySelector(".menu-button");
var noScroll = document.querySelector("body");
menuButton.addEventListener("click", function() {
  console.log("Клик по кнопке меню");
  document.querySelector(".navbar-bottom").classList.toggle("navbar-bottom--visible");
  noScroll.classList.toggle("scroll-hidden");
});
