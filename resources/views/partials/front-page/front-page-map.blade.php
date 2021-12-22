<section class="frontpage-map" id="frontpage-map">
    <div class="wrap">
        <img class="frontpage-map-arrow" src="@asset('images/arrow_scroll.png')"/>
        <h2>{{ $datas->map_title }}</h2>
        {{-- <input class="frontpage-map-input" type="text" placeholder="Code postal">

        geocoder
     --}}
     <div class="map-wrapper">
        @foreach ($datas->map_points as $map_point)
            <span 
            class="map_point" 
            data-name={{(str_replace(' ', '_', $map_point["positions"])["name"])}}
            data-enseigne={{(str_replace(' ', '_', $map_point["positions"])["enseigne"])}}
            data-latitude={{($map_point["positions"])["latitude"]}} 
            data-longitude={{($map_point["positions"])["longitude"]}}
            data-address={{(str_replace(' ', '_', $map_point["positions"])["address"])}}
            data-link={{($map_point["positions"])["gmaps_link"]}}
            data-bottleprice={{($map_point["positions"])["bottle_price"]}}
            >
        </span>
        @endforeach
        <div id="geocoder" class="geocoder"></div>
        
        <div class="map" id="map" style="width: 1024px; height:500px;">
            <div class="frontpage-map-overlay">
                <span class="cross">X</span>
                <div class="frontpage-map-overlay-wrapper">
                    <p class="frontpage-map-overlay-wrapper-title">{{ $datas->map_overlay["title"] }}</p><br>
                
                    {!! $datas->map_overlay["description"] !!}

                    <form class="frontpage-map-overlay-form">
                        <input type="text" placeholder="Adresse mail" id="email" name="email">
                        <input type="text" placeholder="Code postal" class="zipcode" id="zipcode" name="zipcode">
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            </div>
        </div>
     </div>

    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic293YWsiLCJhIjoiY2tjZzcydzM3MG1zcDJycGZ6eXRmcmxzMyJ9.DWmLAys54iV8ggzsGFGQfA';
        let bbotPlaces = [];

        function haversine_distance(mk1, mk2) {
            var R = 3958.8; // Radius of the Earth in miles
            var rlat1 = mk1[1] * (Math.PI/180); // Convert degrees to radians
            var rlat2 = mk2[1] * (Math.PI/180); // Convert degrees to radians
            var difflat = rlat2-rlat1; // Radian difference (latitudes)
            var difflon = (mk2[0]-mk1[0]) * (Math.PI/180); // Radian difference (longitudes)

            var d = 2 * R * Math.asin(Math.sqrt(Math.sin(difflat/2)*Math.sin(difflat/2)+Math.cos(rlat1)*Math.cos(rlat2)*Math.sin(difflon/2)*Math.sin(difflon/2)));
            return d;
        }

        document.querySelectorAll(".map_point").forEach(point => {
            bbotPlaces.push({name: point.dataset.name, bottleprice: point.dataset.bottleprice, link: point.dataset.link, address: point.dataset.address, enseigne: point.dataset.enseigne, lngLat: [point.dataset.longitude, point.dataset.latitude]});
        })

        document.querySelector(".frontpage-map-overlay .cross").addEventListener("click", () => {
            document.querySelector(".frontpage-map-overlay").classList.remove("frontpage-map-overlay-visible")
        })

        var map = new mapboxgl.Map({
        container: 'map',
        center: [2.00, 46.00],
        zoom: 4.7,
        style: 'mapbox://styles/mapbox/streets-v11'
        });

        map.addControl(new mapboxgl.NavigationControl());

        const geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            placeholder: 'Code postal',
            marker: false,
            countries: 'FR',
            flyTo: {
                zoom: 9
            }
        });

        geocoder.on('result', function(e) {
			console.warn(e);
            console.warn(bbotPlaces[1].lngLat)
            let distancesArray = []
            bbotPlaces.forEach(place => {
                distancesArray.push(haversine_distance(place.lngLat, e.result.center));
            })


            if (Math.min(...distancesArray) > 15) {
                document.querySelector(".frontpage-map-overlay").classList.add("frontpage-map-overlay-visible")
            } else {
                document.querySelector(".frontpage-map-overlay").classList.remove("frontpage-map-overlay-visible")
            }
		});

        geocoder.on('clear', function(e) {
			document.querySelector(".frontpage-map-overlay").classList.remove("frontpage-map-overlay-visible")
		});

        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

        bbotPlaces.forEach(place => {
            const marker = new mapboxgl.Marker({ color: '#1d9699' })
            .setLngLat(place.lngLat)
            .setPopup(
                new mapboxgl.Popup({ offset: 25 }) // add popups
            .setHTML( `<h3>${place.enseigne.replaceAll("_", " ")}</h3><p>${place.name.replaceAll("_", " ")}</p><p class="bold">${place.bottleprice}€ la bouteille</p><a target=_blank href='${place.link}'><p>${place.address.replaceAll("_", " ")}</p></a>`)
  )
            .addTo(map);
        })
    </script>
</div>