export default {
    init() {
      console.warn('contacttbrow')
      this.initListClickListener();
    },
    finalize() {
      // JavaScript to be fired on the home page, after the init JS
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
    },
  };
  