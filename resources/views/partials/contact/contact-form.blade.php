<div class="contact-form">
    <div class="cross">
        <img src="@asset('images/icon_cross.png')">
    </div>
    
    <div class="wrap">
        <h2>Je veux devenir partenaire de b:bot</h2>
        <form class="contact-form-form">
            <div class="contact-form-row">
                <input class="contact-form-field" type="text" placeholder="Nom*" name="lastname" id="lastname"/>
                <input type="text" placeholder="Prénom*" name="firstname" id="firstname"/>
            </div>

            <div class="contact-form-row">
                <input class="contact-form-field" type="email" placeholder="Email*" name="email" id="email"/>
                <input type="text" placeholder="Organisme représenté*" name="company" id="company"/>
            </div>

            <div class="contact-form-row">
                <input class="contact-form-field" type="phone" placeholder="Téléphone*" name="phone" id="phone"/>
            </div>

            <div class="contact-form-row">
                <textarea class="contact-form-field" rows="5" placeholder="Votre message ici*" name="message" id="message"></textarea>
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