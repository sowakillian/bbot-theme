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

                <div class="fiche">
                    <p>Fiche technique</p>
                    <p>{{ $datas->solutions["block1"]["title"] }}</p>
                </div>
            </div>

            <div class="card card-green">
                <div>
                    <p class="card-title">{{ $datas->solutions["block2"]["title"] }}</p>
                    
                    {!! $datas->solutions["block2"]["description"] !!}
                </div>

                <img src={{ $datas->solutions["block2"]["image"]["url"] }}>

                <div class="fiche">
                    <p>Fiche technique</p>
                    <p>{{ $datas->solutions["block2"]["title"] }}</p>
                </div>
            </div>

            <div class="card">
                <div>
                    <p class="card-title">{{ $datas->solutions["block3"]["title"] }}</p>

                    {!! $datas->solutions["block3"]["description"] !!}
                </div>

                <img src="@asset('images/bbot_solution_xxl.png')">

                <div class="fiche">
                    <p>Fiche technique</p>
                    <p>{{ $datas->solutions["block3"]["title"] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>