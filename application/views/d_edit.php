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

            <form method="post" action="<?php echo base_url('daerah/p_edit'); ?>">
                <input type="hidden" name="id_daerah" value="<?php echo $hasil['id_daerah']; ?>">
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label">NAMA DAERAH</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_daerah" value="<?php echo $hasil['nama_daerah']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button type="reset" class="btn btn-danger">Riset</button>
                    </div>
                </div>
            </form>
    </div>
    </section>
    </div>
    <?php $this->load->view('template/footer') ?>
    <?php $this->load->view('template/js') ?>
</body>

</html>