<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

</nav>

    <div id="wrapper">

        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <!-- Card  -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/pulsa/') ?>"><i class="fas fa-arrow-left"></i>
                            Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/pulsa/edit') ?>" method="post" enctype="multipart/form-data">



                            <div class="form-group">
                                <label for="no">Nomer Penerima</label>
                                <input class="form-control <?php echo form_error('no') ? 'is-invalid' : '' ?>" type="text" name="no" placeholder="Masukkan Nomer Penerima" value="<?php echo $pulsa->no ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pesan">Nominal</label>
                                <textarea class="form-control <?php echo form_error('pesan') ? 'is-invalid' : '' ?>" name="pesan" placeholder="pesan"><?php echo $pulsa->pesan ?></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('pesan') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>


                </div>
                <!-- /.container-fluid -->


                <!-- Sticky Footer -->
                <?php $this->load->view("admin/_partials/footer.php") ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html> 