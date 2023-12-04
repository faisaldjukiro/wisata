<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content ">
        <section class="section">
            <div class="section-header">
                <h1>TAMBAH PENINGGALAN</h1>
            </div>

            <?php echo form_open_multipart('peninggalan/proses'); ?>
            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label">LOKASI</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" readonly placeholder="Masukan Lokasi" name="lokasi" value="<?php echo $_GET['lokasi'] ?? '' ?>">
                    <input type="hidden" class="form-control" readonly name="latitude" value="<?php echo $_GET['latitude'] ?? '' ?>">
                    <input type="hidden" class="form-control" readonly name="longitude" value="<?php echo $_GET['longitude'] ?? '' ?>">
                    <a href="<?php echo base_url('peninggalan/getlokasi') ?>">KLIK</a>
                </div>
            </div>
            <div class="form-group row ">
                <label for="id_daerah" class="col-sm-2 col-form-label">DAERAH</label>
                <div class="col-sm-5">
                    <select name="id_daerah" class="form-control" required>
                        <option value="">Pilih Derah</option>
                        <?php foreach ($hasil->result() as $ini) {
                            echo "<option value=" . $ini->id_daerah . ">" . $ini->nama_daerah . "</option>";
                        } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_peninggalan" class="col-sm-2 col-form-label">NAMA PENINGGALAN</label>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" name="nama_peninggalan" required placeholder="Masukan Nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label">FOTO</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" accept=".gif,.jpg,.jpeg,.png" name="userfile" required placeholder="Masukan Gambar">
                </div>
            </div>

            <div class="form-group row">
                <label for="keterangan" class="col-sm-2 col-form-label">KETERANGAN</label>
                <div class="col-sm-5">
                    <textarea type="text" class="form-control" style="height:100px;" name="keterangan" required placeholder="Masukan Keterangan"></textarea>

                    <!-- <textarea type="text" class="form-control" name="keterangan" required placeholder="Masukan Keterangan"></textarea> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="reset" class="btn btn-danger">Riset</button>
                </div>
            </div>
            <?= form_close(); ?>
    </div>
    </section>
    </div>
    <?php $this->load->view('template/footer') ?>
    <?php $this->load->view('template/js') ?>
</body>

</html>