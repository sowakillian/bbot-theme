<section class="btob-who">
    <div class="wrap">
        <div class="btob-who-header">
            <img src="@asset('images/bbot-who.png')">
            <h2>Et vous, qui êtes-vous ?</h2>
        </div>

        <div class="blocks">
            <a href="./pdv" class="block">
                <p class="block-title">{{ $datas->who["block1"]["title"] }}</p>
                <p>{{ $datas->who["block1"]["description"] }}</p>
            </a>

            <a href="./collectivite" class="block">
                <p class="block-title">{{ $datas->who["block2"]["title"] }}</p>
                <p>{{ $datas->who["block2"]["description"] }}</p>
            </a>

            <a href="./autre" class="block">
                <p class="block-title">{{ $datas->who["block3"]["title"] }}</p>
                <p>{{ $datas->who["block2"]["description"] }}</p>
            </a>
        </div>
    </div>
</section>