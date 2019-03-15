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
    var SwiperLugares = new Swiper ('.swiper-container-lugares', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 4,
        effect: 'slide',
        grabCursor:	true,
        autoplay: {
            delay: 5000,
        },
        breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1
        },
        // when window width is <= 480px
        480: {
          slidesPerView: 1
        },
        // when window width is <= 640px
        640: {
          slidesPerView: 2
        },
        }
      })

  });