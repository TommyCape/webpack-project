import Swiper from 'swiper';
import swipebox from 'swipebox';
//import 'swiper/dist/css/swiper.min.css';
jQuery(document).ready(function( $ ) {
  var mySwiperOfSlide = new Swiper ('.off-slider', {
       direction: 'horizontal',
       speed: 1300,
       spaceBetween: 45,
       autoplay: {
         delay: 800,
       },
       effect: 'slide',
       loop: true,
       slidesPerView: 1,
       breakpoints: {
          // when window width is <= 1000px
          1000: {
            slidesPerView: 2
          },
          750: {
            slidesPerView: 1
          }
        },
        pagination: {
          clickable: true,
          el: '.off-slider .swiper-pagination',
          type: 'bullets',
        }
        });

        $(".swipebox").swipebox();

        $('#datepicker').datepicker();
});
