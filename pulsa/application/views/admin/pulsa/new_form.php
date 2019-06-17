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



                <!-- DataTables -->
                <div class="container-fluid">

                    <!-- Alert untuk mengetahui status transaksi -->
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('danger')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('danger'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pembelian</h1>


                    <!-- add form -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/pulsa/') ?>"><i class="fas fa-arrow-left"></i> Laporan</a>
                        </div>
                        <div class="card-body">

                            <form action="<?php base_url('admin/pulsa/add') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="operator">Operator</label>
                                    <input class="form-control" type="text" name="operator" id="operator" placeholder="operator" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('operator') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nomor">Nomor</label>
                                    <input class="form-control" type="text" name="nomor" id="nomor" placeholder="Nomor HP" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nomor') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nominal">Nominal</label>
                                    <input class="form-control" type="nimber" name="nominal" id="nominal" placeholder="Nominal" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nominal') ?>
                                    </div>
                                </div>

                                <input class="btn btn-success" type="submit" name="btn" id="save" value="Save" />
                            </form>
                        </div>
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
        <script>
            function deleteConfirm(url) {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>
</body>

</html>