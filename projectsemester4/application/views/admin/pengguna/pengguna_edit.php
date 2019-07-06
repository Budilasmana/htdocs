<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark transparent1 static-top">

        <?php $this->load->view("admin/_partials/navbar.php") ?>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800 lobster">Edit Data Pengguna</h1>


                <!-- add form -->


                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/pengguna/') ?>"><i class="fas fa-arrow-left"></i>Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/pengguna/pengguna_edit') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_pengguna" value="<?php echo $pengguna->id_pengguna ?>" />
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" value="<?php echo $pengguna->nama ?>" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>





                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" value="<?php echo $pengguna->email ?>" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" value="<?php echo $pengguna->password ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>No. HP</label>
                                <input class="form-control" name='no_hp' maxlength='50' required autofocus value="<?php echo $pengguna->no_hp ?>" />
                            </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                    </div>



                    </form>
                </div>
            </div>
            <!-- end add form -->



            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>


            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <?php $this->load->view("admin/_partials/scrolltop.php") ?>

        <!-- Logout Modal-->
        <?php $this->load->view("admin/_partials/modal.php") ?>

        <!-- Bootstrap core JavaScript-->
        <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>