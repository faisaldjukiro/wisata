<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>DATA DAERAH</h1>
            </div>
            <section class="content col-6">

                <a href="<?php echo base_url('daerah/tambah') ?>"><button class="btn btn-primary "><i class="fa fa-plus"></i>
                        DATA DAERAH</button></a>
                <div class="navbar-form navbar-right">
                    <br>
                </div>
                <table class="table jumbotron text-center" id="tampil">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Daerah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($hasil as $ini) {
                        ?>
                            <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $ini['nama_daerah'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>daerah/t_edit/<?php echo $ini['id_daerah']; ?>" class="badge badge-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url() ?>daerah/hapus/<?php echo $ini['id_daerah']; ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </section>


    </div>
    </section>
    </div>
    <?php $this->load->view('template/footer') ?>
    <?php $this->load->view('template/js') ?>
</body>

</html>