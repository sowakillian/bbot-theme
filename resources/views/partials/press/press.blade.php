<div class="press">
    <div class="press-image">
        <img src="{{ $datas->photo["url"] }}">
    </div>

    <div class="press-desc">
        <p>{{ $datas->descriptive_text }}</p>
        <h2>On en parle ?</h2>

        <p>Contactez-nous</p>
        <p>{{ $datas->phone_number }}</p>
        <p>{{ $datas->email }}</p>
    </div>
</div>