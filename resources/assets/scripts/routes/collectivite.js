export default {
  init() {
    this.initFormSending()
    this.initFormButtonClicked()
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },

  initFormButtonClicked() {
    document.querySelector('.button-form').addEventListener('click', () => {
        document.querySelector('.contact-form').classList.add('contact-form-visible')
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
      const where_com = document.querySelector('.contact-form-form #where_com').value || 'Non demandé'

      fetch('https://api.sendinblue.com/v3/smtp/email', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'api-key': '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',
        },
        body: `{"sender":{"name":"${firstname}", "email":"${email}"},"to":[{"email":"jeveuxune@b-bot.com"}],"replyTo":{"email":"jeveuxune@b-bot.com"},"templateId":5, "params": {"firstname":"${firstname}", "email":"${email}", "lastname":"${lastname}", "tel":"${tel}", "company":"${company}", "company_role":"${company_role}", "where_com":"${where_com}"}}`,
      }).then((res) => {
        console.warn(res)
        document.querySelector('.contact-form').classList.remove('contact-form-visible')

        document.querySelectorAll('.button-form').forEach(button => {
          button.innerHTML = 'Message envoyé ✅'
        })

        document.querySelector('.contact-form-form').reset()

        setTimeout(() => {
          document.querySelectorAll('.button-form').forEach(button => {
            button.innerHTML = 'Décrivez-nous<br> votre projet ici'
          })
        }, 1500)
      });
    })
  },
};