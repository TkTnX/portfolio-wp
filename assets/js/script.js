console.log("qwe");

const swiper = new Swiper(".swiper", {
  spaceBetween: 30,
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
  },

  pagination: {
    el: ".swiper-pagination",
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
