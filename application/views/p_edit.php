<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>EDIT DARAH</h1>
            </div>
            <?php echo form_open_multipart('peninggalan/proses_edit'); ?>

            <input type="hidden" name="id_peninggalan" value="<?php echo $hasil['id_peninggalan']; ?>">

            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label">NAMA DAERAH</label>
                <div class="col-sm-5">

                    <select name="id_daerah" class="form-control" required>
                        <option value="">Pilih</option>
                        <?php foreach ($hasill->result() as $ini) {
                            if ($ini->id_daerah == $hasil['id_daerah']) {
                                echo "<option value=" . $ini->id_daerah . " selected>" . $ini->nama_daerah . "</option>";
                            } else {
                                echo "<option value=" . $ini->id_daerah . ">" . $ini->nama_daerah . "</option>";
                            }
                        } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label">NAMA PENINGGALAN</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_peninggalan" value="<?php echo $hasil['nama_peninggalan']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label">FOTO</label>
                <div class="col-sm-5">
                    <td><img class="imgedit" src="<?php echo base_url('./gambar/') ?><?= $hasil['foto']; ?>" width="100%"></td>
                    <input type="hidden" name="foto" value="<?= $hasil['foto'] ?>">
                    <input type="file" class="form-control" accept=".gif,.jpg,.jpeg,.png " name="userfile" required value="<?php echo $hasil['foto']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" oninput="replaceHash()" id="lokasi" readonly name="lokasi" value="<?php echo $_GET['lokasi'] ?? $hasil['lokasi'] ?? '' ?>" autocomplete="off">
                    <input type="hidden" class="form-control" readonly name="latitude" value="<?php echo $_GET['latitude'] ?? '' ?>">
                    <input type="hidden" class="form-control" readonly name="longitude" value="<?php echo $_GET['longitude'] ?? '' ?>">
                    <a href="<?php echo base_url() ?>peninggalan/editlokasi/<?php echo $hasil['id_peninggalan']; ?>">KLIK</a>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-5">
                    <textarea type="text" class="form-control" style="height:200px;" id="keterangan" name="keterangan"> <?php echo $hasil['keterangan']; ?></textarea>


                    <!-- <textarea type="text" id="content" class="form-control" name="keterangan" value="<?php echo $hasil['keterangan']; ?>"></textarea> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary">Ubah</button>
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