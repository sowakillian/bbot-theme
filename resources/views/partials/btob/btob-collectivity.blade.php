<div class="btob-collectivity">

    <div class="wrap">
        <div class="btob-collectivity-you">
            Vous êtes ...
        </div> 
        <h2>Une collectivité locale</h2>
    
        <h1>{{ $datas->title }}</h1>
        {!! $datas->description !!}
    
        <div class="cta">
            Vous souhaitez devenir <span>partenaire de b:bot ?</span>
            <a href="{{ home_url('/') }}contact">Décrivez-nous<br> votre projet ici</a>
        </div>
    </div>

</div>