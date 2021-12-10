<div class="popup-ask">
    <div class="cross">
        <img src="@asset('images/icon_cross.png')">
    </div>

    <div class="wrap">
        <div class="popup-ask-header">
            <h2>Posez-nous votre question !</h2>
            <p>Nous vous répondrons par mail, et ajouterons la question à la liste dans la FAQ pour aider d'autres personnes</p>
        </div>
    
        <form class="contact-form-form popup-ask-form">
            <div class="contact-form-row">
                <input class="contact-form-field" type="text" placeholder="Votre prénom*" name="firstname" id="firstname" required/>
                <input class="contact-form-field" type="text" placeholder="Votre adresse mail*" name="email" id="email" required/>
            </div>
    
            <div class="contact-form-row">
                <input class="contact-form-field" type="text" placeholder="Votre question*" name="question" id="question" required/>
            </div>
    
            <div class="contact-form-row contact-form-row-right">
                <input class="contact-form-send" type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</div>