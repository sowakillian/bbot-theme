<div class="press">
    <div class="press-image">
        <img src="{{ $datas->photo["url"] }}">
    </div>

    <div class="press-desc">
        <p>{{ $datas->descriptive_text }}</p>
        <h2>On en parle ?</h2>

        <p class="green subtitle">Contactez-nous</p>
        <p class="green">{{ $datas->phone_number }}</p>
        <p class="green">{{ $datas->email }}</p>
    </div>
</div>