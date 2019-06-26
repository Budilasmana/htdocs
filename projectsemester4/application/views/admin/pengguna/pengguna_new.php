<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

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
                <h1 class="h3 mb-2 text-gray-800">Tambah Data Pelanggan</h1>


                <!-- add form -->


                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/pengguna/') ?>"><i class="fas fa-arrow-left"></i>Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/pengguna/add') ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="nama">Nama Pengguna</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Pengguna" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                                

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" placeholder="Email" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>






                            <div class="form-group">
                                <label for="password">Password</label>
<<<<<<< HEAD
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="password" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>
=======
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="password" name="password" placeholder="Password" maxlength="64" />
                            <div class="form-group">
>>>>>>> c094c7beb0588f12d6317117c4b3f371045dad14

                            <div class="form-group">
                                <label for="no_hp">No Hp</label>
                                <input class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" type="no_hp" name="no_hp" placeholder="No Hp" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_hp') ?>
<<<<<<< HEAD
=======
                                            </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                                        </div>
                                    </div>
>>>>>>> c094c7beb0588f12d6317117c4b3f371045dad14
                                </div>

                            </div>
<<<<<<< HEAD
                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
=======



                        </form>
>>>>>>> c094c7beb0588f12d6317117c4b3f371045dad14
                    </div>
                </div>
            </div>
        </div>



        </form>
    </div>
    </div>

    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>


    <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>
    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>