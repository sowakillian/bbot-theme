// import request from 'request'

export default {
    init() {
      this.initListClickListener();
      this.initFormSending();
    },
    finalize() {
      // JavaScript to be fired on the home page, after the init JS
    },

    initFormSending() {
      document.querySelector('.contact-form-form').addEventListener('submit', (e) => {
        e.preventDefault()

        const goal = document.querySelector('#contact-goal').value || 'Non demandé'
        const email = document.querySelector('.contact-form-form #email').value || 'Non demandé'
        const firstname = document.querySelector('.contact-form-form #firstname').value || 'Non demandé'
        const lastname = document.querySelector('.contact-form-form #lastname').value || 'Non demandé'
        const tel = document.querySelector('.contact-form-form #phone').value || 'Non demandé'
        const company = document.querySelector('.contact-form-form #company').value || 'Non demandé'
        const company_role = document.querySelector('.contact-form-form #company_role').value || 'Non demandé'
        const activity_domain = document.querySelector('.contact-form-form #activity_domain').value || 'Non demandé'
        const city = document.querySelector('.contact-form-form #city').value || 'Non demandé'
        const nb_customers = document.querySelector('.contact-form-form #nb_customers').value || 'Non demandé'
        const shop_type = document.querySelector('.contact-form-form #shop_type').value || 'Non demandé'
        const buy_type = document.querySelector('.contact-form-form #buy_type').value || 'Non demandé'
        const where_com = document.querySelector('.contact-form-form #where_com').value || 'Non demandé'
        const message = document.querySelector('.contact-form-form #message').value || 'Non demandé'


        fetch('https://api.sendinblue.com/v3/smtp/email', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'api-key': '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',
          },
          body: `{"sender":{"name":"${firstname}", "email":"${email}"},"to":[{"email":"info@b-bot.com"}],"replyTo":{"email":"info@b-bot.com"},"templateId":3, "params": {"goal":"${goal}", "firstname":"${firstname}", "email":"${email}", "message": "${message}", "lastname":"${lastname}", "tel":"${tel}", "company":"${company}", "company_role":"${company_role}", "activity_domain":"${activity_domain}", "city":"${city}", "nb_customers":"${nb_customers}", "shop_type":"${shop_type}", "buy_type":"${buy_type}", "where_com":"${where_com}"}}`,
        }).then((res) => {
          console.warn(res)
          document.querySelector('.contact-form').classList.remove('contact-form-visible')
          document.querySelector('.contact-choices h2').innerHTML = 'Message envoyé ✅'
        });

        document.querySelector('.contact-form-form').reset()
        this.resetFormFields()
      })
    },

    initListClickListener() {
        document.querySelectorAll('.choices-list li').forEach(item => {
            item.addEventListener('click', (e) => {
                const fields = e.target.dataset.fields

                document.querySelectorAll('.contact-form-field').forEach((field) => {
                  if (!fields.includes(field.id)) {
                    field.classList.add('contact-form-field-disabled');
                    field.removeAttribute('required')
                  } else {
                    field.setAttribute('required', '')
                  }
                })

                document.querySelector('.contact-form h2').innerHTML = item.innerHTML;
                document.querySelector('.contact-choices h2').innerHTML = 'Contact en cours..'
                document.querySelector('.contact-form').classList.add('contact-form-visible')
            })
        })

        document.querySelector('.cross').addEventListener('click', () => {
            document.querySelector('.contact-form').classList.remove('contact-form-visible')
            this.resetFormFields()
            document.querySelector('.contact-choices h2').innerHTML = 'Que cherchez-vous ?'
        })

        document.querySelector('.choices-list-title').addEventListener('click', () => {
          document.querySelector('.choices-list-choices').classList.toggle('choices-list-choices-visible')
          document.querySelector('.question-arrow').classList.toggle('question-arrow-clicked')
        })
    },

    resetFormFields() {
      setTimeout(() => {
        document.querySelectorAll('.contact-form-field').forEach((field) => {
          field.classList.remove('contact-form-field-disabled');
        })
      }, 500)
    },
  };
  