<section class="frontpage-map">
    <div class="wrap">
        <h2>Entrez votre code postal et trouvez la b:bot près de chez vous</h2>
        <input type="text" placeholder="Code postal">
    
        <div class="map" id="map" style="width: 1024px; height:500px;"></div>
    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic293YWsiLCJhIjoiY2tjZzcydzM3MG1zcDJycGZ6eXRmcmxzMyJ9.DWmLAys54iV8ggzsGFGQfA';
        var map = new mapboxgl.Map({
        container: 'map',
        center: [2.00, 46.00],
        zoom: 4.5,
        style: 'mapbox://styles/mapbox/streets-v11'
        });
    </script>
</div>