<section class="btob-testimonials">
    <div class="wrap">
        <h2>Témoignages</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($datas->testimonials as $testimonial)
                    <div class="card swiper-slide">
                        <img class="card-image" src="" />
                        <p>{{ $testimonial["name"] }}</p>
                        <p>{{ $testimonial["text"] }}</p>
                    </div>
                @endforeach

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>