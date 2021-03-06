<section class="btob-why" id="btob-why">
    <div class="wrap">

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper slide1">
                        <h2>Pourquoi choisir b:bot ?</h2>

                        <div class="swiper-slide-wrapper-bottom">
                            <div class="block">
                                <div class="block-title">
                                    <span><p>{{ ($datas->why_first_slide[0])["number"] }}</p></span> <p>{{ ($datas->why_first_slide[0])["title"] }}</p>
                                </div>
                                <div class="block-image" style="width: 120px">
                                    <img src={{ ($datas->why_first_slide[0])["image"] }}>
                                </div>
                            </div>
        
                            <div class="block">
                                <div class="block-title">
                                    <span><p>{{ ($datas->why_first_slide[1])["number"] }}</p></span> <p>{{ ($datas->why_first_slide[1])["title"] }}</p>
                                </div>
                                <div class="block-image" style="width: 311px">
                                    <img src={{ ($datas->why_first_slide[1])["image"] }}>
                                </div>
                            </div>
        
                            <div class="block">
                                <div class="block-title">
                                    <span><p>{{ ($datas->why_first_slide[2])["number"] }}</p></span> <p>{{ ($datas->why_first_slide[2])["title"] }}</p>
                                </div>
                                <div class="block-image" style="width: 222px">
                                    <img src={{ ($datas->why_first_slide[2])["image"] }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper slide2">
                        <div class="btob-why-slideItem">
                            <div class="btob-why-slideItem-title">
                                <span><p>1</p></span> <p>{{ ($datas->why_slides[0])["title"] }}</p>
                            </div>
                            <p class="btob-why-slideItem-desc">{{ ($datas->why_slides[0])["subtitle"] }}</p>
    
                            <div class="rows">
                                <div class="row">
                                    <img src={{ ($datas->why_slides[0])["illu1"] }}>
                                    <p>La machine la plus <span>??conomique</span> ?? l???achat.</p>
                                </div>
    
                                <div class="row">
                                    <p>La moins co??teuse en exploitation :<br>
                                        <span>moins de volume</span> donc moins de vidage,
                                        stockage et transport<br>
                                        La garantie d???une valorisation mati??re <span>plus ??lev??e.</span>
                                    </p>
                                    <img src='{{ ($datas->why_slides[0])["illu2"] }}'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper slide3">
                        <div class="btob-why-slideItem">
                            <div class="btob-why-slideItem-title">
                                <span><p>2</p></span> <p>{{ ($datas->why_slides[1])["title"] }}</p>
                            </div>
                            <p class="btob-why-slideItem-desc">{{ ($datas->why_slides[1])["subtitle"] }}</p>
    
                            <div class="items">
                                <div class="item">
                                    <img src={{ ($datas->why_slides[1])["illu1"] }} style="width: 160px">
                                    <p>Machine con??ue pour broyer <span>3500 bouteilles</span> dans 1m2.</p>
                                </div>
    
                                <div class="item">
                                    <img src={{ ($datas->why_slides[1])["illu2"] }} style="width: 330px">
                                    <p>Les paillettes : <span>10 fois moins de volume</span> que les bouteilles compact??es.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper slide4">
                        <div class="btob-why-slideItem">
                            <div class="btob-why-slideItem-title">
                                <span><p>3</p></span> <p>{{ ($datas->why_slides[2])["title"] }}</p>
                            </div>
                            <p  class="btob-why-slideItem-desc">{{ ($datas->why_slides[2])["subtitle"] }}</p>
    
                            <div class="items">
                                <div class="item">
                                    <img src={{ ($datas->why_slides[2])["illu1"] }}>
                                    <p><span>Ils voient les paillettes</span> tomber gr??ce au bac transparent</p>
                                </div>
    
                                <div class="item">
                                    <img src={{ ($datas->why_slides[2])["illu2"] }}>
                                    <p><span>??cran g??ant tactile : </span> Communication personnalisable, sondages, QCM, jeux concours</p>
                                </div>
    
                                <div class="item">
                                    <img src={{ ($datas->why_slides[2])["illu3"] }}>
                                    <p><span>Toutes bouteilles accept??es</span> m??me en plastique color??</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper slide5 slideEnd">
                        <div class="btob-why-slideItem">
                            <div class="btob-why-slideItem-title">
                                <p>{{ $datas->ask_bbot_text }}</p>
                            </div>
                            <div class="slideEnd-bottom">
                                <div class="slideEnd-bottom-buttons">
                                    <a class="slideEnd-bottom-buttons-button button-form">Demander un devis</a>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>


            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
</section>