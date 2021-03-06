import Swiper, { Navigation, Pagination } from 'swiper';

export default {
  init() {
    this.initSliders()
    this.initFormSending()
    this.initFormButtonClicked()
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },

  initFormButtonClicked() {
    document.querySelectorAll('.button-form').forEach(button => {
      button.addEventListener('click', () => {
        document.querySelector('.contact-form').classList.add('contact-form-visible')
      })
    })

    document.querySelector('.cross').addEventListener('click', () => {
      document.querySelector('.contact-form').classList.remove('contact-form-visible')
    })
  },

  initFormSending() {
    document.querySelector('.contact-form-form').addEventListener('submit', (e) => {
      e.preventDefault()

      const email = document.querySelector('.contact-form-form #email').value || 'Non demandé'
      const firstname = document.querySelector('.contact-form-form #firstname').value || 'Non demandé'
      const lastname = document.querySelector('.contact-form-form #lastname').value || 'Non demandé'
      const tel = document.querySelector('.contact-form-form #phone').value || 'Non demandé'
      const company = document.querySelector('.contact-form-form #company').value || 'Non demandé'
      const company_role = document.querySelector('.contact-form-form #company_role').value || 'Non demandé'
      const city = document.querySelector('.contact-form-form #city').value || 'Non demandé'
      const nb_customers = document.querySelector('.contact-form-form #nb_customers').value || 'Non demandé'
      const shop_type = document.querySelector('.contact-form-form #shop_type').value || 'Non demandé'
      const buy_type = document.querySelector('.contact-form-form #buy_type').value || 'Non demandé'
      const where_com = document.querySelector('.contact-form-form #where_com').value || 'Non demandé'

      fetch('https://api.sendinblue.com/v3/smtp/email', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'api-key': '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',
        },
        body: `{"sender":{"name":"${firstname}", "email":"${email}"},"to":[{"email":"jeveuxune@b-bot.com"}],"replyTo":{"email":"jeveuxune@b-bot.com"},"templateId":4, "params": {"firstname":"${firstname}", "email":"${email}", "lastname":"${lastname}", "tel":"${tel}", "company":"${company}", "company_role":"${company_role}", "city":"${city}", "nb_customers":"${nb_customers}", "shop_type":"${shop_type}", "buy_type":"${buy_type}", "where_com":"${where_com}"}}`,
      }).then((res) => {
        console.warn(res)
        document.querySelector('.contact-form').classList.remove('contact-form-visible')

        document.querySelectorAll('.button-form').forEach(button => {
          button.innerHTML = 'Message envoyé ✅'
        })

        document.querySelector('.contact-form-form').reset()

        setTimeout(() => {
          document.querySelectorAll('.button-form').forEach(button => {
            button.innerHTML = 'Demander un devis'
          })
        }, 1500)
      });
    })
  },

  initSliders() {
    Swiper.use([Navigation, Pagination]);
    // eslint-disable-next-line no-unused-vars
    const sliderTestimonials = new Swiper('.btob-testimonials .swiper', {
      loop: false,
      slidesPerView: 1,
      breakpoints: {
        767: {
          slidesPerView: 3,
        },
      },
      spaceBetween: 60,
      centeredSlides: true,
      initialSlide : 1,
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
        slidesPerView: 1,
        breakpoints: {
          767: {
            slidesPerView: 3,
          },
        },
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