<section class="frontpage-glitter">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide-wrapper slide1">
                    <h2>{{ $datas->glitter_first_slide["subtitle_black"] }} <span>{{ $datas->glitter_first_slide["subtitle_green"] }}</span></h2>

                    <h3>{{ $datas->glitter_first_slide["title_black"] }} <br><span>{{ $datas->glitter_first_slide["title_green"] }}</span></h3>
                    <div class="items">
                        @foreach ($datas->glitter_first_slide["description"] as $slide) 
                        <div class="item">
                            <div class="item-image">
                                <img src={{ $slide["image"] }}>
                            </div>
                            <p class="item-text">
                                {{ $slide["title"] }}
                            </p>
                        </div>
                        @endforeach

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
                                <img src={{ ($datas->glitter_slides[0])["illu_with_bbot"] }}>
                            </div>
                        </div>
                        <div class="without-bbot">
                            <p>Avec les autres</p>
                            <div class="without-bbot-image">
                                <img src={{ ($datas->glitter_slides[0])["illu_without_bbot"] }}>
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
                                <img src={{ ($datas->glitter_slides[1])["illu_with_bbot"] }}>
                            </div>
                        </div>
                        <div class="without-bbot">
                            <p>Avec les autres</p>
                            <div class="without-bbot-image">
                                <img src={{ ($datas->glitter_slides[1])["illu_without_bbot"] }}>
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
                                <img src={{ ($datas->glitter_slides[2])["illu_with_bbot"] }}>
                            </div>
                        </div>
                        <div class="without-bbot">
                            <p>Avec les autres</p>
                            <div class="without-bbot-image">
                                <img src={{ ($datas->glitter_slides[2])["illu_without_bbot"] }}>
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