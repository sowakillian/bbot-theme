<section class="btob-solutions">
    <div class="wrap">
        <h2>3 solutions possibles</h2>

        <div class="cards">
            <div class="card">
                <div>
                    <p class="card-title">{{ $datas->solutions["block1"]["title"] }}</p>

                    {!! $datas->solutions["block1"]["description"] !!}
                </div>

                <img src="@asset('images/bbot_solution.png')" style="width: 153px;">

                <a target="_blank" href="{{ $datas->solutions["block1"]["pdf_file"]["url"] }}" class="fiche">
                    <p>Fiche technique</p>
                    <p>{{ $datas->solutions["block1"]["title"] }}</p>
                </a>
            </div>

            <div class="card card-green">
                <div>
                    <p class="card-title">{{ $datas->solutions["block2"]["title"] }}</p>
                    
                    {!! $datas->solutions["block2"]["description"] !!}
                </div>

                <img src="@asset('images/bbot_solution_xl.png')">

                <a target=_blank href="{{ $datas->solutions["block2"]["pdf_file"]["url"] }}" class="fiche">
                    <p>Fiche technique</p>
                    <p>{{ $datas->solutions["block2"]["title"] }}</p>
                </a>
            </div>

            <div class="card">
                <div>
                    <p class="card-title">{{ $datas->solutions["block3"]["title"] }}</p>

                    {!! $datas->solutions["block3"]["description"] !!}
                </div>

                <img src="@asset('images/bbot_solution_xxl.png')">

                <a target=_blank href="{{ $datas->solutions["block3"]["pdf_file"]["url"] }}" class="fiche">
                    <p>Fiche technique</p>
                    <p>{{ $datas->solutions["block3"]["title"] }}</p>
                </a>
            </div>
        </div>
    </div>
</section>