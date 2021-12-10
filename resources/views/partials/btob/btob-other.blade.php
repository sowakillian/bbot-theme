<div class="btob-collectivity">
    @include('partials.commons.popup-project')

    <div class="wrap">
        <div class="btob-collectivity-you">
            Vous êtes ...
        </div> 
        <h2>Un point de vente à l'étranger,<br> une entreprise, un aéroport, une gare, un évènement..</h2>
    
        <h1>{{ $datas->title }}</h1>
        {!! $datas->description !!}
    
        <div class="cta">
            Vous souhaitez devenir <span>partenaire de b:bot ?</span>
            <a class="button-popup-project">Décrivez-nous<br> votre projet ici</a>
        </div>
    </div>

</div>