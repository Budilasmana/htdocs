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
            </div>

            <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Data Transaksi</h1>


                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/pulsa/add') ?>"><i class="fas fa-plus"></i> Kirim Pulsa</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kode Trans</th>
                                        <th>Nomor</th>
                                        <th>Nominal</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pulsa as $pulsa) : ?>
                                        <tr>

                                            <td>
                                                <?php echo $pulsa->id_detail ?>
                                            </td>
                                            <td>
                                                <?php echo $pulsa->nomor ?>
                                            </td>
                                            <td>
                                                <?php echo $pulsa->nominal ?>
                                            </td>
                                            <td>
                                                <?php echo $pulsa->status ?>
                                                <!-- <td width="250">
                                                                    <a href="<?php echo site_url('admin/pulsa/edit/' . $pulsa->no) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/mahasiswa/delete/' . $pulsa->no) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                                </td> -->
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
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