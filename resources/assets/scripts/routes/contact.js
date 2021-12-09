// import request from 'request'

export default {
    init() {
      this.initListClickListener();
      this.initFormSending();
      //this.sendMail();
    },
    finalize() {
      // JavaScript to be fired on the home page, after the init JS
    },

    sendMail() {
      console.warn('I sent an email')
      
      fetch('https://api.sendinblue.com/v3/smtp/email', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'api-key': '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',
        },
        body: '{"sender":{"email":"ksowa@outlook.fr"},"to":[{"email":"ksowa@outlook.fr"}],"replyTo":{"email":"ksowa@outlook.fr"},"templateId":1, "params": {"firstname":"Jacky", "lastname":"Lefou"}}',
      }).then(res => {
        console.log('Request complete! response:', res);
      });

    },

    initFormSending() {
      document.querySelector('.contact-form-form').addEventListener('submit', (e) => {
        e.preventDefault()
        document.querySelector('.contact-form').classList.remove('contact-form-visible')
        document.querySelector('.contact-choices h2').innerHTML = 'Message envoyé ✅'
        document.querySelector('.contact-form-form').reset()
        this.resetFormFields()
      })
    },

    initListClickListener() {
        document.querySelectorAll('.choices-list li').forEach(item => {
            item.addEventListener('click', (e) => {
                const fields = e.target.dataset.fields

                document.querySelectorAll('.contact-form-field').forEach((field) => {
                  if (!fields.includes(field.id) && field.id !== 'message') {
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
  