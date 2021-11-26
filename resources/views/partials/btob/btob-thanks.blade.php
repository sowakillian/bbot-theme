<section class="btob-thanks">
    <div class="wrap">
        <h2>Merci pour votre confiance !</h2>
        <div class="btob-thanks-number">
            <div class="number">
                @foreach (array_map('intval', str_split($datas->partners_number)) as $partner_number_item)
                    <span>{{ $partner_number_item }}</span>
                @endforeach
            </div>

            <p>magasins déjà équipés</p>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($datas->partners as $partner)
                    <div class="swiper-slide">
                        <div class="partner-wrapper">
                            <img src={{ ($partner["logo"])["url"] }} />
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