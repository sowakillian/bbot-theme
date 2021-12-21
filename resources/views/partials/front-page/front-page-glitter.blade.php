<section class="frontpage-glitter">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide-wrapper slide1">
                    <h2>{{ $datas->glitter_first_slide["subtitle_black"] }} <span>{{ $datas->glitter_first_slide["subtitle_green"] }}</span></h2>

                    <h3>{{ $datas->glitter_first_slide["title_black"] }} <br><span>{{ $datas->glitter_first_slide["title_green"] }}</span></h3>
                    <div class="items">
                        <div class="item">
                            <div class="item-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter1_1.png')">
                            </div>
                            <p class="item-text">
                                {{ ($datas->glitter_first_slide["description"][0])["title"] }}
                            </p>
                        </div>
    
                        <div class="item">
                            <div class="item-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter1_2.png')">
                            </div>
                            <p class="item-text">
                                {{ ($datas->glitter_first_slide["description"][1])["title"] }}
                            </p>
                        </div>
    
                        <div class="item">
                            <div class="item-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter1_3.png')">
                            </div>
                            <p class="item-text">
                                {{ ($datas->glitter_first_slide["description"][2])["title"] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide2">
                <div class="frontpage-glitter-slideHeader">
                    <h3>{{ ($datas->glitter_slides[0])["black_title"] }} <br><span>{{ ($datas->glitter_slides[0])["green_title"] }}</span></h3>
                    <p>{!! ($datas->glitter_slides[0])["description"] !!}</p>
                </div>

                    <div class="frontpage-glitter-comparison">
                        <div class="with-bbot">
                            <p>Avec la b:bot</p>
                            <div class="with-bbot-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter2_left.png')">
                            </div>
                        </div>
                        <div class="without-bbot">
                            <p>Avec la poubelle de tri</p>
                            <div class="without-bbot-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter2_right.png')">
                            </div>
                        </div>
                    </div>
            </div>

            <div class="swiper-slide slide3">
                <div class="frontpage-glitter-slideHeader">
                    <h3>{{ ($datas->glitter_slides[1])["black_title"] }}<br><span>{{ ($datas->glitter_slides[1])["green_title"] }}</span></h3>
                    <p>{!! ($datas->glitter_slides[1])["description"] !!}</p>
                </div>

                    <div class="frontpage-glitter-comparison">
                        <div class="with-bbot">
                            <p>Avec la b:bot</p>
                            <div class="with-bbot-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter3_left.png')">
                            </div>
                        </div>
                        <div class="without-bbot">
                            <p>Avec la poubelle de tri</p>
                            <div class="without-bbot-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter3_right.png')">
                            </div>
                        </div>
                    </div>
            </div>

            <div class="swiper-slide slide4">
                <div class="frontpage-glitter-slideHeader">
                    <h3>{{ ($datas->glitter_slides[2])["black_title"] }}<br><span>{{ ($datas->glitter_slides[2])["green_title"] }}</span></h3>
                    <p>{!! ($datas->glitter_slides[2])["description"] !!}</p>
                </div>

                    <div class="frontpage-glitter-comparison">
                        <div class="with-bbot">
                            <p>Avec la b:bot</p>
                            <div class="with-bbot-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter4_left.png')">
                            </div>
                        </div>
                        <div class="without-bbot">
                            <p>Avec la poubelle de tri</p>
                            <div class="without-bbot-image">
                                <img src="@asset('images/frontpage-glitter/bbot_glitter4-right.png')">
                            </div>
                        </div>
                    </div>
            </div>

            <div class="swiper-slide slide5">
                @include('partials.front-page.front-page-map2')
            </div>
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>