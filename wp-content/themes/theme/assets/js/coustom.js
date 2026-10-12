function toggleNavbar() {
  const navbarLinks = document.getElementById("navbar-links");
  const navbarcloseLinks = document.getElementById("navbar-close");
  const overlay = document.querySelector(".overlay");

  navbarLinks.classList.toggle("navbar-show");

  overlay.classList.toggle("show-overlay");
  navbarcloseLinks.classList.toggle("navbar-show");
}

const overlay = document.querySelector(".overlay");
overlay.addEventListener("click", toggleNavbar);

$(document).ready(function () {
  $(".banner-carousel").owlCarousel({
    loop: true,
    dots: false,
    nav: false,
    margin: 100,
    navText: [
      "<i class='fa-solid fa-circle-chevron-left'></i>",
      "<i class='fa-solid fa-circle-chevron-right'></i>",
    ],
    items: 1,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
  });
});

$(document).ready(function () {
  $(".video-carousel").owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    navText: [
      "<i class='fa-solid fa-circle-chevron-left'></i>",
      "<i class='fa-solid fa-circle-chevron-right'></i>",
    ],
    margin: 30,
    items: 1,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      764: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

$(document).ready(function () {
  $(".newtestimonial-carousel").owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    margin: 30,
    items: 1,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      764: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});
