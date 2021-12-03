export default {
  init() {
    console.warn('listenquestio init')
    this.listenQuestionClicked();
    this.addSmoothScrolling();
    this.listenMobileNavClicked();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },

  listenMobileNavClicked () {
    document.querySelector('.button-mobile').addEventListener('click', () => {
      document.querySelector('.nav-mobile').classList.toggle('nav-mobile-visible')
    })
  },

  listenQuestionClicked () {
    document.querySelectorAll('.question').forEach(item => {
        item.addEventListener('click', () => {
            item.querySelector('.question-answer').classList.toggle('question-answer-visible')
            item.querySelector('.question-arrow').classList.toggle('question-arrow-clicked')
        })
    })
  },

  addSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();
  
          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth',
          });
      });
  });
  },
};
