// import request from 'request'

export default {
    init() {
      this.initListClickListener();
      this.sendMail();
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

    initListClickListener() {
        document.querySelectorAll('.choices-list li').forEach(item => {
            console.warn(item)
            item.addEventListener('click', () => {
                document.querySelector('.contact-form h2').innerHTML = item.innerHTML;
                document.querySelector('.contact-form').classList.add('contact-form-visible')
            })
        })

        document.querySelector('.cross').addEventListener('click', () => {
            document.querySelector('.contact-form').classList.remove('contact-form-visible')
        })

        document.querySelector('.choices-list-title').addEventListener('click', () => {
          document.querySelector('.choices-list-choices').classList.toggle('choices-list-choices-visible')
          document.querySelector('.question-arrow').classList.toggle('question-arrow-clicked')
        })
    },
  };
  