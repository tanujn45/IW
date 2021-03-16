AOS.init({
  duration: 1000,
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
    animateIn: "animate__fadeIn",
    items: 1,
    loop: true,
    autoplay: true,
  });

  $(".steps-carousel").owlCarousel({
    animateOut: "animate__fadeOut",
    animateIn: "animate__fadeIn",
    items: 3,
    loop: true,
    autoplay: true,
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
