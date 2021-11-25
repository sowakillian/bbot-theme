<section class="frontpage-faq">
    <h2>F.A.Q</h2>

    <p class="subtitle">Posez votre question</p>
    
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
</section>