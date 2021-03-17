AOS.init({
  duration: 1000,
  once: "true",
  mirror: "false",
});

$(document).ready(function () {
  $(".popup-youtube").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });

  $(".testimonial-carousel").owlCarousel({
    animateOut: "animate__fadeOut",
    autoplay: true,
    autoplayTimeout: 6000,
    animateIn: "animate__fadeIn",
    items: 1,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    dots: true,
  });

  $(".steps-carousel").owlCarousel({
    animateOut: "animate__fadeOut",
    animateIn: "animate__fadeIn",
    items: 3,
    loop: true,
    nav: true,
    autoplayHoverPause: true,
    navText: ["", ""],
    autoplay: true,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1024: {
        items: 3,
      },
    },
  });
});
