<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="<?php echo base_url(); ?>./bg/icon.png" type="image/gif">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background-image: url(<?php echo base_url('./bg/gorontalo.jpg') ?>);background-size:cover;background-repeat:no-repeat">
    <div class="row bg-dangr" style="height: 100vh;">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="text-center">LOGIN</h2><br>
                    <?php if (validation_errors()) { ?>
                        <div class="alert alert-danger">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php
                    } ?>
                    <?php echo $this->session->flashdata('pemberitahuan'); ?>
                    <form method="post" action="<?php echo base_url() ?>login">
                        <div class="form-group form-group-lg ">
                            <label>Username:</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                        </div>
                        <div class="form-group form-group-lg">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password" id="myInput" placeholder="Masukan Password">
                        </div>
                        <div class="form-group form-group-lg">
                            <input type="checkbox" onclick="myFunction()"> Lihat Password

                        </div>
                        <div class="form-group form-group-lg">
                            <input type="submit" class="btn btn-primary" name="tombol_login" value="Login">

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>