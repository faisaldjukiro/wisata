<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>TAMBAH PENGGUNA</h1>
            </div>

            <form method="post" action="<?php echo base_url('pengguna/proses'); ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">NAMA LENGKAP</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama" required placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">EMAIL</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" required placeholder="Masukan Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="alamat" required placeholder="Masukan Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="tgl_lahir" required placeholder="Masukan Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">USERNAME</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" required placeholder="Masukan Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">PASSWORD</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="myInput" name="password" required placeholder="Masukan Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-5">
                        <input type="checkbox" onclick="myFunction()"> Lihat Password
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