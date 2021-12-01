import Swiper, { Navigation, Pagination } from 'swiper';

export default {
  init() {
    this.initSliders()
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },

  initSliders() {
    Swiper.use([Navigation, Pagination]);
    // eslint-disable-next-line no-unused-vars
    const sliderTestimonials = new Swiper('.btob-testimonials .swiper', {
      loop: false,
      slidesPerView: 3,
      spaceBetween: 60,
      centeredSlides: true,
      initialSlide : 2,
      pagination: {
        el: '.btob-testimonials .swiper-pagination',
      },
      navigation: {
        nextEl: '.btob-testimonials .swiper-button-next',
        prevEl: '.btob-testimonials .swiper-button-prev',
      },
    });

    // eslint-disable-next-line no-unused-vars
    const sliderWhy = new Swiper('.btob-why .swiper', {
        loop: false,
        pagination: {
          el: '.btob-why .swiper-pagination',
        },
        navigation: {
          nextEl: '.btob-why .swiper-button-next',
          prevEl: '.btob-why .swiper-button-prev',
        },
      });

      // eslint-disable-next-line no-unused-vars
      const sliderThanks = new Swiper('.btob-thanks .swiper', {
        loop: false,
        slidesPerView: 3,
        spaceBetween: 60,
        centeredSlides: true,
        initialSlide: 1,
        navigation: {
          nextEl: '.btob-thanks .swiper-button-next',
          prevEl: '.btob-thanks .swiper-button-prev',
        },
      });

      // eslint-disable-next-line no-unused-vars
      const sliderServices = new Swiper('.btob-services .swiper', {
        loop: false,
        pagination: {
          el: '.btob-services .swiper-pagination',
        },
        navigation: {
          nextEl: '.btob-services .swiper-button-next',
          prevEl: '.btob-services .swiper-button-prev',
        },
      });
  },
};