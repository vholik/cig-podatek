let galleryCurrent;
let teamCurrentSlide = 1;
const totalSlides = 19;

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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
});

$(".gallery__inner").on("afterChange", function () {
  var dataId = $(".slick-current").attr("data-slick-index");
  currentSlide = parseInt(dataId) + 1;
  const progressBar = document.querySelector(".bar-progress");
  progressBar.style.width = (100 / totalSlides) * currentSlide + "%";
});

$(".team-slider").on(
  "beforeChange",
  function (event, slick, currentSlide, nextSlide) {
    var dataId = $(".slick-current").attr("data-slick-index");
    teamCurrentSlide = parseInt(currentSlide) + 1;
    const progressBar = document.querySelector(".team-bar-progress");
    progressBar.style.width = (100 / 19) * teamCurrentSlide + "%";
  }
);

const form = document.querySelector("#contact-form");

const formSent = () => {
  document.querySelector(".form-error").style.opacity = "0";
  document.querySelector(".form-success").style.opacity = "1";
  let fullName = (document.querySelector(".fullname-input").value = "");
  let phone = (document.querySelector(".tel-input").value = "");
  let message = (document.querySelector(".text-input").value = "");
  setTimeout(() => {
    document.querySelector(".form-success").style.opacity = "0";
  }, 5000);
};

const catchErrors = (err) => {
  document.querySelector(".form-error").style.opacity = "1";
  document.querySelector(".form-error h2").innerHTML =
    "Błąd: " + err.split(" ")[1];
  console.log(err),
    setTimeout(() => {
      document.querySelector(".form-error").style.opacity = "0";
    }, 5000);
};

const formHandler = async (e) => {
  e.preventDefault();
  // let email = "bjaskolski@gmail.com";
  let email = "kontakt@cig-podatek.pl";
  let fullName =
    document.querySelector(".fullname-input").value || "Nie podano telefonu";
  let phone =
    document.querySelector(".tel-input").value ||
    document.querySelector(".hero-input").value;
  let message =
    document.querySelector(".text-input").value || "Nie podano text";
  console.log(phone);
  try {
    if (phone.length === 0) throw new Error("Wpisz numer telefonu");
    if (phone.length !== 9) throw new Error("Niepoprawny numer telefonu");
    if (message.length > 150) throw new Error("Za dużo tekstu");
    if (fullName.length > 50) throw new Error("Za długa nazwa firmy");
    if (!/^\d+$/.test(phone)) throw new Error("Niepoprawny numer telefonu");
  } catch (error) {
    document.querySelector(".form-error").style.opacity = "1";
    document.querySelector(".form-error h2").innerHTML = String(error)
      .split(" ")
      .slice(1, -1)
      .join(" ");
    return setTimeout(() => {
      document.querySelector(".form-error").style.opacity = "0";
    }, 5000);
  }

  fetch(
    `https://weary-yoke.cyclic.app/message?message=${message}&email=${email}&phone=${phone}&fullName=${fullName}`
  )
    .then((response) => {
      if (response.status !== 200) throw new Error("Wystąpił bląd");

      formSent();
      return response;
    })
    .then(() => {
      const contactBtn = document.querySelector(".contact .btn");
      contactBtn.style.pointerEvents = "none";
      document.querySelector(".hero-button").style.pointerEvents = "none";
      document.querySelector(".hero-button").style.background =
        "var(--light-border)";

      document.querySelector(".hero-button").style.color = "var(--light)";
      contactBtn.style.border = "1px solid var(--light-border)";
      contactBtn.style.color = "var(--light-border)";
    })
    .catch(catchErrors);
};

form.addEventListener("submit", formHandler);

document.querySelector(".hero-button").addEventListener("click", formHandler);
