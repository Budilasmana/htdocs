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
                <h1 class="h3 mb-2 text-gray-800 lobster">Edit Data Kategori</h1>


                <!-- add form -->


                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/kategori/') ?>"><i class="fas fa-arrow-left"></i>Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/kategori/edit') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_kategori" value="<?php echo $kategori->id_kategori ?>" />
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <input class="form-control <?php echo form_error('kategori') ? 'is-invalid' : '' ?>" type="text" name="kategori" value="<?php echo $kategori->kategori ?>" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('kategori') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar" value="<?php echo $kategori->gambar ?>">
                                                <label class="custom-file-label" for="gambar">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
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
    <!-- /#wrapper -->

    <?php $this->load->view("admin/_partials/footer.php") ?>

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>