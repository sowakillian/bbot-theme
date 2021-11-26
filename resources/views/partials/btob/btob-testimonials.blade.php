<section class="btob-testimonials">
    <div class="wrap">
        <h2>Témoignages</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($datas->testimonials as $testimonial)
                    <div class="card swiper-slide">
                        <div class="card-wrapper">
                            <img class="card-image" src={{ ($testimonial["photo"])["url"] }} />
                            <p>{{ $testimonial["name"] }}</p>
                            <p>{{ $testimonial["text"] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-prev">
                <img src="@asset('images/arrow_left_slider.png')">
            </div>
            <div class="swiper-button-next">
                <img src="@asset('images/arrow_right_slider.png')">
            </div>
        </div>
    </div>
</section>