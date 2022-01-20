<section class="frontpage-cycle" id="frontpage-cycle">
    <div class="frontpage-cycle-image">
        <img src={{ ($datas->cycle["photo"]) }}>
    </div>

    <div class="frontpage-cycle-desc">
        <h2><span>{{ $datas->cycle["green_title"] }}</span><br> {{ $datas->cycle["black_title"] }}</h2>

        <p class="how">{{ $datas->cycle["subtitle"] }}</p>
        {!! $datas->cycle["description"] !!}
        <div class="frontpage-cycle-desc-suit">
            {!! $datas->cycle["description_suite"] !!}
        </div>

        <button class="frontpage-cycle-desc-more">En savoir plus</button>
        </p>
    </div>
</div>