import Swiper, { Navigation, Pagination } from 'swiper';

export default {
  init() {
    console.warn('weshqui')
    this.initSliders();
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },

  initSliders() {
    Swiper.use([Navigation, Pagination]);
    document.querySelectorAll('.job-type').forEach((item) => {
        let membersCount = item.querySelectorAll('.team-member').length

        //eslint-disable-next-line no-unused-vars
        const sliderTeamGroup = new Swiper(item.querySelector('.swiper'), {
            loop: false,
            slidesPerView: 1,

            breakpoints: {
                600: {
                  slidesPerView: membersCount > 1 ? 2 : 1,
                },
                900: {
                  slidesPerView: membersCount > 2 ? 3 : membersCount > 1 ? 2 : 1,
                },
            },
            pagination: {
              el: item.querySelector('.swiper-pagination'),
            },
            navigation: {
              nextEl: item.querySelector('.swiper-button-next'),
              prevEl: item.querySelector('.swiper-button-prev'),
            },
          });
    })


    // // eslint-disable-next-line no-unused-vars
    // const sliderProcess = new Swiper('.frontpage-process .swiper', {
    //   loop: false,
    //   pagination: {
    //     el: '.frontpage-process .swiper-pagination',
    //   },
    //   navigation: {
    //     nextEl: '.frontpage-process .swiper-button-next',
    //     prevEl: '.frontpage-process .swiper-button-prev',
    //   },
    // });
  },
};
