<section class="frontpage-map" id="frontpage-map">
    <div class="wrap">
        <img class="frontpage-map-arrow" src="@asset('images/arrow_scroll.png')"/>
        <h2>{{ $datas->map_title }}</h2>
        {{-- <input class="frontpage-map-input" type="text" placeholder="Code postal">

        geocoder
     --}}
     <div class="map-wrapper">
        @foreach ($datas->map_points as $map_point)
            <span class="map_point" data-latitude={{($map_point["positions"])["latitude"]}} data-longitude={{($map_point["positions"])["longitude"]}}></span>
        @endforeach
        <div id="geocoder" class="geocoder"></div>
        
        <div class="map" id="map" style="width: 1024px; height:500px;">
        </div>
     </div>

    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic293YWsiLCJhIjoiY2tjZzcydzM3MG1zcDJycGZ6eXRmcmxzMyJ9.DWmLAys54iV8ggzsGFGQfA';
        let bbotPlaces = [];

        document.querySelectorAll(".map_point").forEach(point => {
            bbotPlaces.push([point.dataset.longitude, point.dataset.latitude])
        })

        var map = new mapboxgl.Map({
        container: 'map',
        center: [2.00, 46.00],
        zoom: 4.5,
        style: 'mapbox://styles/mapbox/streets-v11'
        });

        const geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            placeholder: 'Code postal'
        });

        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

        bbotPlaces.forEach(place => {
            const marker = new mapboxgl.Marker({ color: '#1d9699' })
            .setLngLat(place)
            .addTo(map);
        })
    </script>
</div>