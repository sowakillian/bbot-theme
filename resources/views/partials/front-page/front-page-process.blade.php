<section class="frontpage-process">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide-wrapper slide1">
                    <p class="slide-title">{{ $datas->process_first_slide["title_black"] }}  <br><span>{{ $datas->process_first_slide["title_green"] }} </span></p>

                    <div class="items">
                        <div class="item">
                            <div class="item-image">
                                <img src={{ ($datas->process_first_slide["description"][0])["image"] }}>
                            </div>
                            <p class="item-text">
                                Triez&nbsp;<br>à la maison
                            </p>
                        </div>
    
                        <div class="item">
                            <div class="item-image">
                                <img src={{ ($datas->process_first_slide["description"][1])["image"] }}>
                            </div>
                            <p class="item-text">
                                Apportez&nbsp;<br>vos bouteilles
                            </p>
                        </div>
    
                        <div class="item">
                            <div class="item-image">
                                <img src={{ ($datas->process_first_slide["description"][2])["image"] }}>
                            </div>
                            <p class="item-text">
                                Admirez&nbsp;<br>la paillette
                            </p>
                        </div>
    
                        <div class="item">
                            <div class="item-image">
                                <img src={{ ($datas->process_first_slide["description"][3])["image"] }}>
                            </div>
                            <p class="item-text">
                                Gagnez&nbsp;<br>des euros
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="swiper-slide-wrapper slide2">
                    <div class="items frontpage-process-header">
                        <div class="item">
                            <div class="item-image">
                                <img src={{ ($datas->process_first_slide["description"][0])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][1])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][2])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][3])["image"] }}>
                            </div>
                        </div>
                    </div>
    
                    <p class="slide-title">{{ ($datas->process_slides[0])["black_title"] }}<span> {{ ($datas->process_slides[0])["green_title"] }}</span></p>
                    <p>Pour vous simplifier la vie, déposez vos bouteilles vides directement dans vos sacs de course.</p>
                    <p class="frontpage-process-slide2-end">B:bot accepte toutes les bouteilles boissons en PET jusqu’à 2,5 litres, vides et avec leurs étiquettes pour 
                        avoir le code-barres qui permet de les reconnaître.<br><br>Afin de produire de la paillette 100% recyclable, b:bot refuse tout ce qui n’est pas en PET (Lait, produits d’entretien, cosmétiques). Car ce sont des plastiques qui ne sont pas recyclables ensemble.</p>
                    <button class="frontpage-process-slide2-more">En savoir plus</button>
    
                    <div class="row">
                        <div class="row-item row-item-check">
                            <img src={{ ($datas->process_slides[0])["illu1"] }}>
                            <p>Bouteille de boisson (sauf lait), vide, 
                                avec étiquette, non écrasée</p>
                        </div>
    
                        <div class="row-item row-item-cross">
                            <img src={{ ($datas->process_slides[0])["illu2"] }}>
                            <p>Bouteille pleine, écrasée, de lait, 
                                de shampooing et sans étiquette</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="swiper-slide-wrapper slide3">
                    <div class="items frontpage-process-header">
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][0])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image">
                                <img src={{ ($datas->process_first_slide["description"][1])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][2])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][3])["image"] }}>
                            </div>
                        </div>
                    </div>
    
                    <p class="slide-title">{{ ($datas->process_slides[1])["black_title"] }}<span> {{ ($datas->process_slides[1])["green_title"] }}</span></p>
                    <div class="row">
                        <div class="row-item">
                            <p class="question">Pourquoi j’ai besoin de scanner ma bouteille ?</p>
                            <p>Le code-barres permet à b:bot de vérifier que c’est une bouteille acceptée et d’identifier sa couleur. 
                                Les plastiques colorés ne se recyclent pas de la même manière que les plastiques transparents.</p>
                            <p class="green slide3-textdesktop">Petit conseil:<br>
                            Présentez bien le code-barres vers le haut et déposez après avoir entendu le bip.</p>
                        </div>
    
                        <div class="row-item row-item-cross slide3-imgdesktop">
                            <img style="width: 200px" src={{ ($datas->process_slides[1])["illu1"] }}>
                        </div>

                        <div class="slide3-imgmob">
                            <img src="@asset('images/frontpage-process/bbot_process3_imgmob.png')">
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="swiper-slide-wrapper slide4">
                    <div class="items frontpage-process-header">
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][0])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][1])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image">
                                <img src={{ ($datas->process_first_slide["description"][2])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][3])["image"] }}>
                            </div>
                        </div>
                    </div>
    
                    <p class="slide-title">{{ ($datas->process_slides[2])["black_title"] }}<span> {{ ($datas->process_slides[2])["green_title"] }}</span></p>
    
                    <div class="row">
                        <div class="row-item">
                            <img style="width: 150px" src={{ ($datas->process_slides[2])["illu1"] }}>
                        </div>
    
                        <div class="row-item">
                            <p>La seule chose à faire 
                                à ce moment là, c’est 
                                admirer votre chef-d’oeuvre 
                                “la bouteille qui se transforme 
                                en paillettes”. Vous pouvez être fier
                                de vous puisque vous venez
                                de réussir un “100% recyclé”.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-slide">
                <div class="swiper-slide-wrapper slide5">
                    <div class="items frontpage-process-header">
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][0])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][1])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image item-image-transparent">
                                <img src={{ ($datas->process_first_slide["description"][2])["image"] }}>
                            </div>
                        </div>
    
                        <img src="@asset('images/frontpage-process/arrow_right.png')">
    
                        <div class="item">
                            <div class="item-image">
                                <img src={{ ($datas->process_first_slide["description"][3])["image"] }}>
                            </div>
                        </div>
                    </div>
    
                    <p class="slide-title">{{ ($datas->process_slides[3])["black_title"] }}<br><span> {{ ($datas->process_slides[3])["green_title"] }}</span></p>
    
                    <p>En fonction des magasins, la récompense pour chaque bouteille est de 0,01 ou 0,02 euro que 
                        vous pouvez donner à une association ou utiliser en bon d’achat.</p>
    
                        <img class="slide5-img" src={{ ($datas->process_slides[3])["illu1"] }}>
                </div>
            </div>

            <div class="swiper-slide slide5">
                @include('partials.front-page.front-page-map3')
            </div>
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>