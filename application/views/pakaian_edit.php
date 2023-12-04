<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><i class="fa fa-edit"></i> EDIT PAKAIAN ADAT</h1>
            </div>
            <?php echo form_open_multipart('pakaian/proses_edit'); ?>

            <input type="hidden" name="id_pakaian" value="<?php echo $hasil['id_pakaian']; ?>">

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
                    <input type="text" class="form-control" name="nama_pakaian" value="<?php echo $hasil['nama_pakaian']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label">FOTO</label>
                <div class="col-sm-5">
                    <td><img class="imgedit" src="<?php echo base_url('./gambar/') ?><?= $hasil['foto']; ?>" width="100%"></td>
                    <input type="hidden" name="foto" value="<?= $hasil['foto'] ?>">
                    <input type="file" class="form-control" accept=".gif,.jpg,.jpeg,.png " name="userfile" required value="?php echo $hasil['foto'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="nama_daerah" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-5">
                    <textarea type="text" style="height:100px;" class="form-control" name="keterangan">"<?php echo $hasil['keterangan']; ?>"></textarea>
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