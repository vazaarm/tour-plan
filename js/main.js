var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },
  speed: 1200,
  simulateTouch: false,

  keyboard: {
          enabled: true,
          onlyInViewport: false,
        }
})