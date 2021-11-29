<section class="contact-choices">
    <div class="wrap">
        <h2>{{ $datas->title }}</h2>
        
        <div class="choices-list">
            <p class="choices-list-title">Faites votre choix</p>
            <ul class="choices-list-choices">
                @foreach ($datas->contact_goals as $contact_goal)
                    <li>{{ $contact_goal }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>