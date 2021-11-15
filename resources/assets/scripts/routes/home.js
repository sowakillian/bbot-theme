import Swiper, { Navigation, Pagination } from 'swiper';

export default {
  init() {
    console.warn('weshh')
    this.initSliders()
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },

  initSliders() {
    Swiper.use([Navigation, Pagination]);
    // eslint-disable-next-line no-unused-vars
    const sliderGlitter = new Swiper('.frontpage-glitter .swiper', {
      loop: true,
      pagination: {
        el: '.frontpage-glitter .swiper-pagination',
      },
      navigation: {
        nextEl: '.frontpage-glitter .swiper-button-next',
        prevEl: '.frontpage-glitter .swiper-button-prev',
      },
    });

    // eslint-disable-next-line no-unused-vars
    const sliderProcess = new Swiper('.frontpage-process .swiper', {
      loop: true,
      pagination: {
        el: '.frontpage-process .swiper-pagination',
      },
      navigation: {
        nextEl: '.frontpage-process .swiper-button-next',
        prevEl: '.frontpage-process .swiper-button-prev',
      },
    });
  },
};
