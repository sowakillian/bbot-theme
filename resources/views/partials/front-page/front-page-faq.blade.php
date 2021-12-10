<section class="frontpage-faq">
    @include('partials.commons.popup-ask')

    <div class="frontpage-faq-bkg">
        <img src="@asset('images/bkg_why.png')">
    </div>

    <h2>F.A.Q</h2>
    
    <div class="questions">
        <ul>
            @foreach ($datas->faq_questions as $faq_question)
            <li class="question">
                <div class="question-ask">
                    <p>{{ $faq_question["question"] }}</p>
                    <div class="question-arrow">
                        <img src="@asset('images/arrow.png')">
                    </div>
                </div>
                <p class="question-answer">{{ $faq_question["answer"] }}</p>
            </li>
            @endforeach
        </ul>
    </div>

    <button class="subtitle question-button">Posez votre question</button>
</section>