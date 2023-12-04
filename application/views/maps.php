<?php $this->load->view('template/header') ?>

<body>
    <!-- <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css"> -->
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>LOKASI</h1>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div id="map" style="width: 100%; height: 400px;"></div>
                    <!-- <div id='map' style='width: 400px; height: 300px;'></div> -->
                </div>
                <div class="col-sm-5">
                    <form action="http://localhost/wisata/peninggalan/tambah">
                        <div class="form-group">
                            <label>Latitude</label>
                            <input class="form-control" id="latitude" name="latitude">
                        </div>
                        <div class="form-group">
                            <label>Longitude</label>
                            <input class="form-control" id="longitude" name="longitude">
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input class="form-control" id="lokasi" name="lokasi">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>


    </div>
    </section>
    </div>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">
    <?php $this->load->view('template/footer') ?>
    <?php $this->load->view('template/js') ?>
</body>

</html>