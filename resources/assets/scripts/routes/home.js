import Swiper, { Navigation, Pagination } from 'swiper';

export default {
  init() {
    console.warn('weshh')
    this.initSliders()
    this.initKnowMoreClicked()
    this.initAskForm()
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },

  initAskForm() {
    const bbotAskForm = document.querySelector('.frontpage-map-overlay-form')
    bbotAskForm.addEventListener('submit', (e) => {
      e.preventDefault()

      const email = document.querySelector('.frontpage-map-overlay-form #email').value
      const zipcode = document.querySelector('.frontpage-map-overlay-form #zipcode').value

      fetch('https://api.sendinblue.com/v3/smtp/email', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'api-key': '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',
        },
        body: `{"sender":{"email":"${email}"},"to":[{"email":"bbotteur@b-bot.com"}],"replyTo":{"email":"bbotteur@b-bot.com"}, "templateId":2, "params": {"email":"${email}", "zipcode": "${zipcode}"}}`,
      }).then((res) => {
        console.warn(res)
      });

      document.querySelector('.frontpage-map-overlay').classList.remove('frontpage-map-overlay-visible')
    })
  },

  initKnowMoreClicked() {
    let isOpened = false
    const buttonKnowMore = document.querySelector('.frontpage-cycle-desc-more')
    const divCycleSuit = document.querySelector('.frontpage-cycle-desc-suit')
    buttonKnowMore.addEventListener('click', () => {
      isOpened = !isOpened

      buttonKnowMore.innerHTML = isOpened ? 'Refermer' : 'En savoir plus'
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
      navigation: {
        nextEl: '.frontpage-community .swiper-button-next',
        prevEl: '.frontpage-community .swiper-button-prev',
      },
    });
  },
};
