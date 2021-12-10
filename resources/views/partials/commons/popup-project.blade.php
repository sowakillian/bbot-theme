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
                        <input class="contact-form-field" type="text" placeholder="Société représentée*" name="firstname" id="firstname" required/>
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
                        <input class="contact-form-field" type="text" placeholder="Société représentée*" name="firstname" id="firstname" required/>
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
                        <input class="contact-form-send" type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
            </div>
        </div>



    </div>
</div>