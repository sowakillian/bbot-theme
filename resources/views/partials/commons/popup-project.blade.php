<div class="popup-project">
    <div class="cross">
        <img src="@asset('images/icon_cross.png')">
    </div>

    <div class="wrap">
        <div class="popup-project-header">
            <h2>Décrivez-nous votre projet</h2>
        </div>
    
        <div class="popup-project-content">
            <div class="popup-project-content-step popup-project-content-step1">
                <div class="popup-project-content-step-wrapper">
                    <p>Vous représentez</p>

                    <div class="popup-project-content-step1-buttons">
                        @foreach ($datas->company_types as $company_type)
                            <button data-fields="{{ implode(",", $company_type["fields"]) }}">{{ $company_type["title"] }}</button>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="popup-project-content-step popup-project-content-step2">
                <div class="popup-project-content-step-wrapper">
                <p>Quelques infos pour continuer..</p>

                <form class="contact-form-form popup-ask-form">
                    <div class="contact-form-row">
                        <input class="contact-form-field" type="text" placeholder="Société représentée*" name="company" id="company" required/>
                        <input class="contact-form-field" type="text" placeholder="Adresse de celle-ci*" name="address" id="address" required/>
                    </div>
            
                    <div class="contact-form-row">
                        <input class="contact-form-field" type="text" placeholder="Prénom*" name="firstname" id="firstname" required/>
                        <input class="contact-form-field" type="text" placeholder="Nom*" name="lastname" id="lastname" required/>
                    </div>

                    <div class="contact-form-row">
                        <input class="contact-form-field" type="text" placeholder="Votre rôle au sein de cet organisme*" name="role" id="role" required/>
                    </div>
            
                    <div class="contact-form-row contact-form-row-right">
                        <input class="contact-form-send" type="submit" value="Continuer">
                    </div>
                </form>
            </div>
            </div>

            <div class="popup-project-content-step popup-project-content-step3">
                <div class="popup-project-content-step-wrapper">
                <p>Et pour finir, le plus important !</p>

                <form class="contact-form-form popup-ask-form">
                    <div class="contact-form-row">
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Surface de vente*" name="surface" id="surface"/>
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Nb caddies moyen/semaine*" name="nb_caddies" id="nb_caddies"/>
                    </div>
            
                    <div class="contact-form-row">
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Boissons eau/sodas/jus vendus/semaine*" name="nb_cols" id="nb_cols"/>
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Solution pour l’intérieur du magasin ou le parking ?*" name="inte_exte" id="inte_exte"/>
                    </div>

                    <div class="contact-form-row">
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Trafic moyen passagers par mois*" name="trafic" id="trafic"/>
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Nb de terminaux dans l'aéroport*" name="terminals" id="terminals"/>
                    </div>

                    <div class="contact-form-row">
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Combien de terminaux à équiper ?*" name="how_much_terminals" id="how_much_terminals"/>
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Volume boissons vendues/jour*" name="drinks" id="drinks"/>
                    </div>

                    <div class="contact-form-row">
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Nb de quais*" name="nb_quais" id="nb_quais"/>
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Combien de b:bot à installer ?*" name="how_much" id="how_much"/>
                    </div>

                    <div class="contact-form-row">
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Nb personnes en moyenne par jour*" name="people_day" id="people_day"/>
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Disposez-vous d'une cantine ?*" name="cantine" id="cantine"/>
                    </div>

                    <div class="contact-form-row">
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Date/durée de l'évènement ?*" name="date_duration" id="date_duration"/>
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Lieu de l'évènement*" name="place" id="place"/>
                    </div>

                    <div class="contact-form-row">
                        <input class="contact-form-field contact-form-field-disabled" type="text" placeholder="Trafic prévisonnel*" name="previsional_trafic" id="previsional_trafic"/>
                    </div>
            
                    <div class="contact-form-row contact-form-row-right">
                        <input class="contact-form-send" type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
            </div>
        </div>



    </div>
</div>