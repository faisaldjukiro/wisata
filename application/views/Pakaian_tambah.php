<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content ">
        <section class="section">
            <div class="section-header">
                <h1><i class="fa fa-plus"></i> PAKAIAN ADAT</h1>
            </div>

            <?php echo form_open_multipart('pakaian/proses'); ?>

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
                <label for="nama_pakaian" class="col-sm-2 col-form-label">NAMA PAKAIAN ADAT</label>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" name="nama_pakaian" required placeholder="Masukan Pakaian Adat">
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
                    <textarea type="text" style="height:100px;" class="form-control" name="keterangan" required placeholder="Masukan Keterangan"></textarea>
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