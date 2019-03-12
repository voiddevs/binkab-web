$(document).ready(function () {
    var SwiperHome = new Swiper ('.swiper-container-home', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        effect: 'fade',
        autoplay: {
            delay: 5000,
        },   
        pagination: {
          el: '.swiper-pagination',
        },
      })
  });