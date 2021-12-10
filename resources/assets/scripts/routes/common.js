export default {
  init() {
    console.warn('listenquestio init')
    this.listenQuestionClicked();
    this.addSmoothScrolling();
    this.listenMobileNavClicked();
    this.listenSeeMoreClicked();
    this.listenAskQuestionClicked();
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

  listenSeeMoreClicked() {
    const videosMoreButton = document.querySelector('.videos-reviews-more');
    const videosReviewsVideos = document.querySelector('.videos-reviews-videos');
    let isOpened = false;

    if (videosMoreButton) {
      videosMoreButton.addEventListener('click', () => {
        isOpened = !isOpened
        videosMoreButton.innerHTML = isOpened ? 'Refermer' : 'Voir plus'
        videosReviewsVideos.classList.toggle('videos-reviews-videos-opened')
      })
    }
  },

  listenAskQuestionClicked() {
    const questionButton = document.querySelector('.question-button');
    const crossButton = document.querySelector('.popup-ask .cross')
    const questionPopup = document.querySelector('.popup-ask');
    const questionForm = document.querySelector('.popup-ask-form');

    if (questionButton) {
      questionButton.addEventListener('click', () => {
        questionPopup.classList.add('popup-ask-visible')
      })
    }

    if (crossButton) {
      crossButton.addEventListener('click', () => {
        document.querySelector('.popup-ask').classList.remove('popup-ask-visible')
      })
    }

    if (questionForm) {
      questionForm.addEventListener('submit', (e) => {
        e.preventDefault()
        document.querySelector('.popup-ask').classList.remove('popup-ask-visible')
        questionButton.innerHTML = 'Message envoyé ✅'

        setTimeout(() => {
          questionButton.innerHTML = 'Posez votre question'
        }, 2500)

        document.querySelector('.popup-ask-form').reset()
      })
    }
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
