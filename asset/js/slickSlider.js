$(document).ready(function(){
   $(".slick-slide").slick({
    infinite: true, //Chạy vô tận
    slidesToShow: 4, //Show mặt định 4 items
    slidesToScroll: 1,
    draggable: false, //không cho phép người dùng tác dụng với các items trong slide
    dots: true,
    prevArrow:"<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    // autoplay: true,
    // autoplaySpeed: 1000, //tự động chạy silde sau mỗi 1 giấy
   });
 });