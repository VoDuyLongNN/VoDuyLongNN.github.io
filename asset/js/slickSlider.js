$(document).ready(function(){
   $(".slick-slide").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    draggable: false,
    dots: true,
    prevArrow:"<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    autoplay: true,
    autoplaySpeed: 1000,
   });
 });