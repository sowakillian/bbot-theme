import Swiper, { Navigation, Pagination } from 'swiper';

export default {
  init() {
    console.warn('weshh')
    this.initSliders()
    this.initKnowMoreClicked()
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },

  initKnowMoreClicked() {
    const buttonKnowMore = document.querySelector('.frontpage-cycle-desc-more')
    const divCycleSuit = document.querySelector('.frontpage-cycle-desc-suit')
    buttonKnowMore.addEventListener('click', () => {
      divCycleSuit.classList.toggle('frontpage-cycle-desc-suit-visible')
    })
  },

  initSliders() {
    Swiper.use([Navigation, Pagination]);
    // eslint-disable-next-line no-unused-vars
    const sliderGlitter = new Swiper('.frontpage-glitter .swiper', {
      loop: false,
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
      loop: false,
      pagination: {
        el: '.frontpage-process .swiper-pagination',
      },
      navigation: {
        nextEl: '.frontpage-process .swiper-button-next',
        prevEl: '.frontpage-process .swiper-button-prev',
      },
    });

    // eslint-disable-next-line no-unused-vars
    const sliderTestimonials = new Swiper('.frontpage-community .swiper', {
      loop: false,
      slidesPerView: 1,
      breakpoints: {
        700: {
          slidesPerView: 2,
        },
      },
      pagination: {
        el: '.frontpage-community .swiper-pagination',
      },
    });
  },
};
