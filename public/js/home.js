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
        navigation: {
          nextEl: '.swiper-button-next-lugares',
          prevEl: '.swiper-button-prev-lugares',
        },
        autoplay: {
            delay: 5000,
        },
        breakpoints: {
        // when window width is <= 320px
        650: {
          slidesPerView: 1
        },
        // when window width is <= 480px
        1000: {
          slidesPerView: 2
        },
        // when window width is <= 640px
        1450: {
          slidesPerView: 3
        },
        }
      })

  });