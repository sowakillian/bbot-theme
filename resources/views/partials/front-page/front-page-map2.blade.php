<section class="frontpage-map frontpage-map2" id="frontpage-map">
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
            >
        </span>
        @endforeach
        <div id="geocoder2" class="geocoder"></div>
        
        <div class="map" id="map2" style="width: 1024px; height:500px;">
            <div class="frontpage-map-overlay frontpage-map2-overlay">
                <span class="cross">X</span>
                <div class="frontpage-map-overlay-wrapper">
                    <p class="frontpage-map-overlay-wrapper-title">Zuuut !</p><br>
                
                    Il n’y a pas encore de B:bot à moins de 30km de chez vous. Mais pas de panique, nous arrivons bientôt !<br><br>
    
                    Saisissez votre adresse mail et votre code postal, nous vous préviendrons dès qu’une B:bot débarque près de chez vous !

                    <form class="frontpage-map-overlay-form">
                        <input type="text" placeholder="Adresse mail">
                        <input type="text" placeholder="Code postal" class="zipcode">
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            </div>
        </div>
     </div>

    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic293YWsiLCJhIjoiY2tjZzcydzM3MG1zcDJycGZ6eXRmcmxzMyJ9.DWmLAys54iV8ggzsGFGQfA';

        function haversine_distance(mk1, mk2) {
            var R = 3958.8; // Radius of the Earth in miles
            var rlat1 = mk1[1] * (Math.PI/180); // Convert degrees to radians
            var rlat2 = mk2[1] * (Math.PI/180); // Convert degrees to radians
            var difflat = rlat2-rlat1; // Radian difference (latitudes)
            var difflon = (mk2[0]-mk1[0]) * (Math.PI/180); // Radian difference (longitudes)

            var d = 2 * R * Math.asin(Math.sqrt(Math.sin(difflat/2)*Math.sin(difflat/2)+Math.cos(rlat1)*Math.cos(rlat2)*Math.sin(difflon/2)*Math.sin(difflon/2)));
            return d;
        }

            document.querySelector(".frontpage-map2-overlay .cross").addEventListener("click", () => {
            document.querySelector(".frontpage-map2-overlay").classList.remove("frontpage-map-overlay-visible")
        })

        var map2 = new mapboxgl.Map({
        container: 'map2',
        center: [2.00, 46.00],
        zoom: 4.7,
        style: 'mapbox://styles/mapbox/streets-v11'
        });

        map2.addControl(new mapboxgl.NavigationControl());

        const geocoder2 = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            placeholder: 'Code postal',
            marker: false,
            country: 'FR',
            flyTo: {
                zoom: 9
            }
        });

        geocoder2.on('result', function(e) {
            let distancesArray = []
            bbotPlaces.forEach(place => {
                distancesArray.push(haversine_distance(place.lngLat, e.result.center));
            })


            if (Math.min(...distancesArray) > 15) {
                document.querySelector(".frontpage-map2 .frontpage-map-overlay").classList.add("frontpage-map-overlay-visible")
            } else {
                document.querySelector(".frontpage-map2 .frontpage-map-overlay").classList.remove("frontpage-map-overlay-visible")
            }
		});

        geocoder2.on('clear', function(e) {
			document.querySelector(".frontpage-map2 .frontpage-map-overlay").classList.remove("frontpage-map-overlay-visible")
		});

        document.getElementById('geocoder2').appendChild(geocoder2.onAdd(map2));

        bbotPlaces.forEach(place => {
            const marker = new mapboxgl.Marker({ color: '#1d9699' })
            .setLngLat(place.lngLat)
            .setPopup(
                new mapboxgl.Popup({ offset: 25 }) // add popups
            .setHTML( `<h3>${place.enseigne.replaceAll("_", " ")}</h3><p>${place.name.replaceAll("_", " ")}</p><a target=_blank href='${place.link}'><p>${place.address.replaceAll("_", " ")}</p></a>`)
  )
            .addTo(map2);
        })
    </script>
</div>