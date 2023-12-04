<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>PROFIL</h1>
            </div>
            <div class="jumbotron text-center">
                <p>Nama : <?php echo $nama; ?></p>
                <p>Email : <?php echo $email; ?></p>
                <p>Alamat : <?php echo $alamat; ?></p>
                <p>Tanggal Lahir : <?php echo $tgl_lahir; ?></p>
                <p>Username : <?php echo $username; ?></p>

                <a href="<?php echo base_url() ?>/login/logout_proses" class="btn btn-danger" role="button">Keluar</a>
            </div>


    </div>
    </section>
    </div>
    <?php $this->load->view('template/footer') ?>
    <?php $this->load->view('template/js') ?>
</body>

</html>