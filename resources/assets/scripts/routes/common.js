export default {
  init() {
    console.warn('listenquestio init')
    this.listenQuestionClicked();
    this.addSmoothScrolling();
    this.listenMobileNavClicked();
    this.listenSeeMoreClicked();
    this.listenAskQuestionClicked();
    this.listenPopupProjectClicked();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },

  listenPopupProjectClicked() {
    const popupProjectButton = document.querySelector('.button-popup-project');
    const popupProject = document.querySelector('.popup-project')
    const popupProjectContent = document.querySelector('.popup-project-content')
    const crossButton = document.querySelector('.popup-project .cross')
    const step1Buttons = document.querySelectorAll('.popup-project-content-step1 button')
    const step2Form = document.querySelector('.popup-project-content-step2 form')
    const step3Form = document.querySelector('.popup-project-content-step3 form')
    let currentFields = []

    if (step1Buttons) {
      step1Buttons.forEach(button => {
        button.addEventListener('click', () => {
          popupProjectContent.classList.add('step2')
          currentFields = button.dataset.fields

          document.querySelectorAll('.popup-project-content-step3 .contact-form-field').forEach((field) => {
            if (!currentFields.includes(field.id)) {
              field.removeAttribute('required')
            } else {
              field.classList.remove('contact-form-field-disabled');
              field.setAttribute('required', '')
            }
          })

          console.warn('**currentFields', currentFields)
        })
      })
    }

    if (step2Form) {
      step2Form.addEventListener('submit', (e) => {
        e.preventDefault()

        popupProjectContent.classList.add('step3')
      })
    }

    if (step3Form) {
      step3Form.addEventListener('submit', (e) => {
        e.preventDefault()

        popupProject.classList.remove('popup-project-visible')
        popupProjectButton.innerHTML = 'Demande<br> envoyée ✅'

        setTimeout(() => {
          popupProjectButton.innerHTML = 'Décrivez-nous<br> votre projet'
        }, 2000)
        

        setTimeout(() => {
          this.resetPopupProject();
        }, 500)
      })
    }
    
    if (popupProjectButton) {
      popupProjectButton.addEventListener('click', () => {
        popupProject.classList.add('popup-project-visible')
      })
    }

    if (crossButton) {
      crossButton.addEventListener('click', () => {
        popupProject.classList.remove('popup-project-visible')

        setTimeout(() => {
          this.resetPopupProject();
        }, 500)
      })
    }
  },

  resetPopupProject() {
    const step2Form = document.querySelector('.popup-project-content-step2 form')
    const step3Form = document.querySelector('.popup-project-content-step3 form')

    step2Form.reset()
    step3Form.reset()

    document.querySelectorAll('.popup-project-content-step3 .contact-form-field').forEach((field) => {
      field.classList.add('contact-form-field-disabled');
    })

    const popupProjectContent = document.querySelector('.popup-project-content')
    popupProjectContent.classList.remove('step2')
    popupProjectContent.classList.remove('step3')
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
