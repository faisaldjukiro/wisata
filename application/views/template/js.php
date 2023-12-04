!-- General JS Scripts -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
<script src="<?php echo base_url('assets/template/node_modules/jquery/dist/') ?>jquery.min.js"></script>
<script src="<?php echo base_url('assets/template/node_modules/bootstrap/dist/js/') ?>bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?php echo base_url('assets/template') ?>/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?php echo base_url('assets/template') ?>/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
<script src="<?php echo base_url('assets/template') ?>/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="<?php echo base_url('assets/template') ?>/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/template') ?>/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url('assets/template') ?>/node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="<?php echo base_url('assets/template') ?>/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Template JS File -->
<script src="<?php echo base_url('assets/template') ?>/assets/js/scripts.js"></script>
<script src="<?php echo base_url('assets/template') ?>/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('assets/template') ?>/assets/js/page/index-0.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugin/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>


<!-- <script>
    $(document).ready(function() {
        $('#tampil').DataTable();
    });
</script> -->
<script>
    $.noConflict();
    jQuery(document).ready(function($) {
        $('#tampil').DataTable();
    });
</script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFpc2FsZGp1a2lybyIsImEiOiJja3l2NjlwY20wZHhmMm90NHJnOG15Z2w3In0.AayC7HZFK4ApwHA5I69wuw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [123.058563, 0.543342],
        zoom: 13
    });
    //search
    map.addControl(
        new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl
        })
    );
    // navigasi
    map.addControl(new mapboxgl.NavigationControl());

    var map = L.map('map').setView([0.5573477387451805, 123.06378662713281], 13);

    // var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

    // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
    //     'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     id: 'mapbox/streets-v11',
    //     tileSize: 512,
    //     zoomOffset: -1
    // }).addTo(map);

    //get location
    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");
    var lokasiInput = document.querySelector("[name=lokasi]");

    var curLocation = [0.5573477387451805, 123.06378662713281];

    map.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
        draggable: 'true'
    });
    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $("#latitude").val(position.lat);
        $("#longitude").val(position.lng);
        // $("#lokasi").val(`${position.lat} ${position.lng}`);
    });
    map.addLayer(marker);

    map.on("click", function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);
        } else {
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
        $("#lokasi").val(`${lat} ${lng}`);
        console.log(lat);
    });
</script>
<!-- replace -->
<script>
    function replaceHash() {
        var name = $('#name').val();
        name = name.replace("#", "-");
        $('#name').val(name);
    }
</script>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>