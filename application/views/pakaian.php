<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>DATA PAKAIAN ADAT</h1>
            </div>

            <section class="content col-16">

                <a href="<?php echo base_url('pakaian/tambah') ?>"><button class="btn btn-primary "><i class="fa fa-plus"></i>
                        DATA PENINGGALAN</button></a>
                <div class="navbar-form navbar-right">
                    <br>
                </div>
                <table class="table jumbotron text-center" id="tampil">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pakaian</th>
                            <th scope="col">Daerah</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Foto</th>
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
                                <td><?= $ini['nama_pakaian'] ?></td>
                                <td><?= $ini['nama_daerah'] ?></td>
                                <td><?= $ini['keterangan'] ?></td>
                                <td><img class="imghover" src="<?php echo base_url('./gambar/') ?><?= $ini['foto']; ?>" width="100px" height="70px"></td>
                                <td>
                                    <a href=" <?php echo base_url() ?>pakaian/p_edit/<?php echo $ini['id_pakaian']; ?>" class="badge badge-white"><i class="fa fa-eye"></i></a>
                                    <a href=" <?php echo base_url() ?>pakaian/p_edit/<?php echo $ini['id_pakaian']; ?>" class="badge badge-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url() ?>pakaian/hapus/<?php echo $ini['id_pakaian']; ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </section>

    </div>
    <?php $this->load->view('template/footer') ?>
    <?php $this->load->view('template/js') ?>
</body>

</html>