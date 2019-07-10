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
                    <div class="allerts" role="alert">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                <?php endif; ?>

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800 lobster">Ubah Password</h1>


                <!-- add form -->


                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/cUbahPassword/') ?>"><i class=""></i></a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/cUbahPassword/add') ?>" method="post" enctype="multipart/form-data">


                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" placeholder="Email" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password Lama</label>
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="Password" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password1">Password Baru</label>
                                <input class="form-control <?php echo form_error('password1') ? 'is-invalid' : '' ?>" type="password" name="password1" placeholder="Password Baru" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password1') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password2">Konfirmasi Password Baru</label>
                                <input class="form-control <?php echo form_error('password2') ? 'is-invalid' : '' ?>" type="password" name="password2" placeholder="Konfirmasi Password Baru" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password2') ?>
                                </div>
                            </div>


                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>
                    </div>
                </div>
                <!-- end add form -->



                <!-- /.container-fluid -->

                <!-- Sticky Footer -->


                <!-- /.content-wrapper -->

            </div>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>