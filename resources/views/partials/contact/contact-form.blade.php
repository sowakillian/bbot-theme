<div class="contact-form">
    <div class="cross">
        <img src="@asset('images/icon_cross.png')">
    </div>
    
    <div class="wrap">
        <h2 id="contact-goal">Je veux devenir partenaire de b:bot</h2>
        <form class="contact-form-form">
            <div class="contact-form-row">
                <input class="contact-form-field" type="text" placeholder="Nom*" name="lastname" id="lastname"/>
                <input type="text" placeholder="Prénom*" name="firstname" id="firstname"/>
            </div>

            <div class="contact-form-row">
                <input class="contact-form-field" type="email" placeholder="Email*" name="email" id="email"/>
                <input class="contact-form-field" type="phone" placeholder="Téléphone*" name="phone" id="phone"/>
            </div>
            
            <div class="contact-form-row">
                <input class="contact-form-field" type="text" placeholder="Organisme représenté*" name="company" id="company"/>
                <input class="contact-form-field" type="text" placeholder="Poste au sein de l'organisme*" name="company_role" id="company_role"/>
            </div>

            <div class="contact-form-row">
                <input class="contact-form-field" type="text" placeholder="Domaine d'activité*" name="activity_domain" id="activity_domain"/>
            </div>

            <div class="contact-form-row">
                <input class="contact-form-field" type="text" placeholder="Ville*" name="city" id="city"/>
                <input class="contact-form-field" type="text" placeholder="Nb moy. de passages en caisse/jour*" name="nb_customers" id="nb_customers"/>
            </div>

            <div class="contact-form-row">
                <select class="contact-form-field" name="shop_type" id="shop_type">
                    <option value="">Type de point de vente*</option>
                    <option value="press">Hypermarché</option>
                    <option value="medias">Supermarché</option>
                    <option value="bouche">Point de vente de proximité</option>
                    <option value="other">Autres</option>
                </select>

                <select class="contact-form-field" name="buy_type" id="buy_type">
                    <option value="">Souhaitez-vous plutôt* :</option>
                    <option value="press">Louer sur 60 mois (520€/mois)</option>
                    <option value="medias">Acheter (26500€)</option>
                    <option value="bouche">Evenementiel 1 mois minimum (sur devis)</option>
                </select>
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