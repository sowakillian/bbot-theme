<section class="contact-choices">
    <div class="wrap">
        <h2>{{ $datas->title }}</h2>
        
        <div class="choices-list">
            <div class="choices-list-title">
                <p>Faites votre choix<p>
                <div class="question-arrow">
                   <img src="@asset('images/arrow.png')">
                </div>
            </div>
            <ul class="choices-list-choices">
                @foreach ($datas->contact_goals as $contact_goal)
                    <li data-email="{{ $contact_goal["target_email"] }}" data-fields="{{ implode(",", $contact_goal["fields"]) }}">{{ $contact_goal["goal"] }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>