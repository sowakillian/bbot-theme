<div class="contact-form">
    <div class="cross">
        <img src="@asset('images/icon_cross.png')">
    </div>
    
    <div class="wrap">
        <h2 id="contact-goal">Je souhaite devenir partenaire de b:bot</h2>
        <form class="contact-form-form">
            <div class="contact-form-row">
                <input required class="contact-form-field" type="text" placeholder="Nom*" name="lastname" id="lastname"/>
                <input required type="text" placeholder="Prénom*" name="firstname" id="firstname"/>
            </div>

            <div class="contact-form-row">
                <input required class="contact-form-field" type="email" placeholder="Email*" name="email" id="email"/>
                <input required class="contact-form-field" type="phone" placeholder="Téléphone*" name="phone" id="phone"/>
            </div>
            
            <div class="contact-form-row">
                <input required class="contact-form-field" type="text" placeholder="Organisme représenté*" name="company" id="company"/>
                <input required class="contact-form-field" type="text" placeholder="Poste au sein de l'organisme*" name="company_role" id="company_role"/>
            </div>

            <div class="contact-form-row">
                <select class="contact-form-field" name="where_come" id="where_com">
                    <option value="">Où avez-vous entendu parler de nous ?</option>
                    <option value="press">Presse</option>
                    <option value="medias">Réseaux sociaux</option>
                    <option value="bouche">Bouche à oreille</option>
                    <option value="other">Autre</option>
                </select>
            </div>

            <div class="contact-form-row contact-form-row-right">
                <input class="contact-form-send" type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</div>