<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>TAMBAH DARAH</h1>
            </div>

            <form method="post" action="<?php echo base_url('daerah/proses'); ?>">
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label">NAMA DAERAH</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama_daerah" placeholder="Masukan Daerah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">Tambah</button>
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