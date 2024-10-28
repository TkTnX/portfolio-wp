const mobileButton = document.querySelector("#mobileButton");
const mobileMenu = document.querySelector("#mobileMenu");
const mobileMenuItems = mobileMenu.querySelectorAll("li");
mobileButton.addEventListener("click", () => {
  mobileButton.classList.toggle("active");
  mobileMenu.classList.toggle("active");
  document.body.classList.toggle("scroll-hidden");

  mobileMenuItems.forEach((item) => {
    item.addEventListener("click", () => {
      mobileButton.classList.remove("active");
      mobileMenu.classList.remove("active");
      document.body.classList.remove("scroll-hidden");
    });
  });
});

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
