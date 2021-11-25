<section class="frontpage-map" id="frontpage-map">
    <div class="wrap">
        <img class="frontpage-map-arrow" src="@asset('images/arrow_scroll.png')"/>
        <h2>{{ $datas->map_title }}</h2>
        {{-- <input class="frontpage-map-input" type="text" placeholder="Code postal">

        geocoder
     --}}
     <div class="map-wrapper">
        <div id="geocoder" class="geocoder"></div>
        
        <div class="map" id="map" style="width: 1024px; height:500px;">
        </div>
     </div>

    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic293YWsiLCJhIjoiY2tjZzcydzM3MG1zcDJycGZ6eXRmcmxzMyJ9.DWmLAys54iV8ggzsGFGQfA';

        const bbotPlaces = [
            [7.289429, 43.675819],
            [2.130122, 48.801407],
            [2.349014, 	48.864716],
            [1.862801, 50.954468],
            [8.736900, 41.926701],
            [5.722387, 49.120277],
            [4.390300, 45.434700],
            [-1.552800, 47.218102],
            [-0.594, 44.8378],
        ];
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