<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>EDIT PENGGUNA</h1>
            </div>

            <form method="post" action="<?php echo base_url('pengguna/p_edit'); ?>">
                <input type="hidden" name="id_user" value="<?php echo $hasil['id_user']; ?>">
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label">NAMA LENGKAP</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama" value="<?php echo $hasil['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label">EMAIL</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" value="<?php echo $hasil['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="alamat" value="<?php echo $hasil['alamat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $hasil['tgl_lahir']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label">USERNAME</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" value="<?php echo $hasil['username']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_daerah" class="col-sm-2 col-form-label">PASSWORD</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" id="myInput" value="<?php echo $hasil['password']; ?>">
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