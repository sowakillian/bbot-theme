<section class="frontpage-community">
    <img class="frontpage-community-bkg" src="@asset('images/commu_bkg.png')">
    <div class="wrap">
        <div class="frontpage-community-number">
            @foreach (array_map('intval', str_split($datas->bottle_number)) as $partner_number_item)
                <span>{{ $partner_number_item }}</span>
            @endforeach
        </div>
        <p class="frontpage-community-subtitle">bouteilles plastique recyclées !</p>
        <p class="frontpage-community-distance">L’équivalent de la distance entre Paris et Venise en nombre de bouteilles bout à bout.</p>
    
        <div class="frontpage-community-testimonials swiper">
            <div class="swiper-wrapper">
                @foreach ($datas->testimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper item">
                        <img src={{ ($testimonial["photo"])["url"] }} />
                        <p class="name">{{ $testimonial["name_age"] }}</p>
                        <p class="message">“ {{ $testimonial["message"] }} ”
                    </div>
                </div>
                @endforeach
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="frontpage-community-networks">
            <p>Rejoignez la communauté :</p>
            <div class="frontpage-community-networks-buttons">
                <img src="@asset('images/networks.png')">
            </div>
        </div>
    </div>
</section>