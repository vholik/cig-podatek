let galleryCurrent;
let teamCurrentSlide = 1;

jQuery(document).ready(function ($) {
  $(document).ready(function () {
    $(".gallery__inner").slick({
      infinite: true,
      prevArrow: $(".prev"),
      nextArrow: $(".next"),
      dots: false,
      autoplay: true,
      autoplaySpeed: 3000,
    });

    $(".team-slider").slick({
      infinite: true,
      prevArrow: $(".team-prev"),
      nextArrow: $(".team-next"),
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 650,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  });

  $(".team-slider").on(
    "beforeChange",
    function (event, slick, currentSlide, nextSlide) {
      teamCurrentSlide = parseInt(currentSlide) + 1;
      const progressBar = document.querySelector(".team-bar-progress");
      progressBar.style.width =
        (nextSlide / (slick.slideCount - 1)) * 100 + "%";
    }
  );
  $(".gallery__inner").on(
    "beforeChange",
    function (event, slick, currentSlide, nextSlide) {
      teamCurrentSlide = parseInt(currentSlide) + 1;
      const progressBar = document.querySelector(
        ".gallery .bottom .bar .bar-progress"
      );
      progressBar.style.width =
        (nextSlide / (slick.slideCount - 1)) * 100 + "%";
    }
  );
  
  
  $(".company-slider").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    arrows:false,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 851,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 850,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 650,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
    ],
  });
  
  $(".company-slider").on(
  "beforeChange",
  function (event, slick, currentSlide, nextSlide) {
    var dataId = $(".slick-current").attr("data-slick-index");
    teamCurrentSlide = parseInt(currentSlide) + 1;
    const progressBar = document.querySelector(".team-bar-progress");
    progressBar.style.width = (100 / 19) * teamCurrentSlide + "%";
  }
);
  
  
  
});
