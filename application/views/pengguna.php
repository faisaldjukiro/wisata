<?php $this->load->view('template/header') ?>

<body>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view('template/sidebar') ?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>DATA PENGGUNA</h1>
            </div>
            <section class="content col-16">

                <a href="<?php echo base_url('pengguna/tambah') ?>"><button class="btn btn-primary "><i class="fa fa-plus"></i>
                        DATA PENGGUNA</button></a>
                <div class="navbar-form navbar-right">
                    <br>
                </div>
                <table class="table jumbotron text-center" id="tampil">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Lahir</th>

                            <!-- <th scope="col">Password</th> -->
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
                                <td><?= $ini['nama'] ?></td>
                                <td><?= $ini['username'] ?></td>
                                <td><?= $ini['email'] ?></td>
                                <td><?= $ini['alamat'] ?></td>
                                <td><?= $ini['tgl_lahir'] ?></td>

                                <!-- <td><?= $ini['password'] ?></td> -->
                                <td>
                                    <a href=" <?php echo base_url() ?>pengguna/edit/<?php echo $ini['id_user']; ?>" class="badge badge-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo base_url() ?>pengguna/hapus/<?php echo $ini['id_user']; ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
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