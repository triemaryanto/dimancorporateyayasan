$(document).ready(function () {
  $(".customer-logos").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });
});

var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

$('#myTab a[data-toggle="tab"]').on("show.bs.tab", function (e) {
  let target = $(e.target).data("target");
  $(target)
    .addClass("active show")
    .siblings(".tab-pane.active")
    .removeClass("active show");
});

window.addEventListener("load", function () {
  baguetteBox.run(".gallery", {
    captions: true,
    buttons: "auto",
    animation: "fadeIn",
  });
  baguetteBox.run(".figure", {
    captions: true,
    buttons: "auto",
    animation: "fadeIn",
  });
});
