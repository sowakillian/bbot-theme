<section class="btob-services">
    <div class="wrap">

        <div class="swiper">
            <div class="slides swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper slide-1">
                        <h2>Derrière la machine, les services</h2>

                        <div class="swiper-slide-wrapper-bottom">
                            <div class="block">
                                <div class="block-title">
                                    <span><p>{{ ($datas->services_first_slide[0])["number"] }}</p></span> <p class="slide1-title">{{ ($datas->services_first_slide[0])["title"] }}</p>
                                </div>
                                <div class="block-image">
                                    <img src={{ ($datas->services_first_slide[0])["image"] }}>
                                </div>
                            </div>
            
                            <div class="block">
                                <div class="block-title">
                                    <span><p>{{ ($datas->services_first_slide[1])["number"] }}</p></span> <p class="slide1-title">{{ ($datas->services_first_slide[1])["title"] }}</p>
                                </div>
                                <div class="block-image">
                                    <img src={{ ($datas->services_first_slide[1])["image"] }}>
                                </div>
                            </div>
            
                            <div class="block">
                                <div class="block-title">
                                    <span><p>{{ ($datas->services_first_slide[2])["number"] }}</p></span> <p class="slide1-title">{{ ($datas->services_first_slide[2])["title"] }}</p>
                                </div>
                                <div class="block-image">
                                    <img src={{ ($datas->services_first_slide[2])["image"] }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper">
                        <div class="btob-why-slideItem">
                            <div class="btob-why-slideItem-title">
                                <span><p>1</p></span> <p>{{ ($datas->services_slides[0])["title"] }}</p>
                            </div>
                            <p class="btob-why-slideItem-desc">{{ ($datas->services_slides[0])["subtitle"] }}</p>

                            <div class="btob-services-slideItem-content">
                                <div class="btob-services-slideItem-content-img">
                                    <img src={{ ($datas->services_slides[0])["illu1"] }}>
                                </div>
                                <div class="btob-services-slideItem-content-desc">
                                    <p><span>Reprise</span> matière organisée pour s’intégrer à votre 
                                        logistique.
                                        <br><br>
                                        Objectif : utiliser les m3 dans des camions déjà 
                                        roulant plutôt que de mettre des camions 
                                        supplémentaires sur la route.
                                    </p>
                                    <br><br>
                                    <p><span>Rachat</span> matière à un prix indexé sur l’ICIS Recycled
                                        PET Europe, avec un minimum garanti.</p> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper">
                        <div class="btob-why-slideItem">
                            <div class="btob-why-slideItem-title">
                                <span><p>2</p></span> <p>{{ ($datas->services_slides[1])["title"] }}</p>
                            </div>
                            <p class="btob-why-slideItem-desc">{{ ($datas->services_slides[1])["subtitle"] }}</p>

                            <div class="btob-services-slideItem-content">
                                <div class="btob-services-slideItem-content-img">
                                    <img style="height: 300px;" src={{ ($datas->services_slides[1])["illu1"] }}>
                                </div>
                                <div class="btob-services-slideItem-content-desc">
                                    <p>• <span>Réduit les coûts</span> de logistique et maintenance.<br>
                                       • Suit les volumes et des <span>marques collectées.</span><br>
                                       • Reconnaît automatiquement <span>les nouvelles bouteilles.</span> <br>
                                       • Sa technologie est prête pour le <span>« sans ticket ».</span><br>
                                        • <span>Une app</span> prolonge et simplifie l’expérience utilisateur. Plus besoin de ticket pour collecter des bons d’achat 
                                        ou points de fidélité.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-slide-wrapper">
                        <div class="btob-why-slideItem btob-services-slideItem">
                            <div class="btob-why-slideItem-title">
                                <span><p>3</p></span> <p>{{ ($datas->services_slides[2])["title"] }}</p>
                            </div>
                            <p class="btob-why-slideItem-desc">{{ ($datas->services_slides[2])["subtitle"] }}</p>

                            <p class="teamDesc">• <span>Formation</span> de vos équipes.<br>
                                • <span>Hotline</span><br>
                                • <span>Monitoring à distance</span> en temps réel (8-20h 6/7j). <br>
                                • <span>Maintenance sur site</span> préventive (toutes les 100k bouteilles) et curative (j+1).</p>

                            <div class="btob-services-slideItem-content">
                                <div class="btob-services-slideItem-content-img">
                                    <img style="height: 175px" src={{ ($datas->services_slides[2])["illu1"] }}>
                                </div>
                                <div class="btob-services-slideItem-content-desc">
                                    <p>Nous accompagnons votre <span>communication : </span></p>
                                    <img class="btob-services-slideItem-kakemono" src={{ ($datas->services_slides[2])["illu2"] }}>
                                    <p><span>Affichages, kakemonos, stop-rayons, stickers...</span></p>
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