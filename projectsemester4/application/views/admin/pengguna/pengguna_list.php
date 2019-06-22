<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <?php $this->load->view("admin/_partials/navbar.php") ?>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->

                <div class="container-fluid">
                    <!-- DataTables -->
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>


                    <!-- DataTales Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/pengguna/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>No HP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pengguna as $pengguna) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $pengguna->nama ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengguna->email ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengguna->password ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengguna->no_hp ?>
                                                </td>



                                                <td width="250">
                                                    <a href="<?php echo site_url('admin/pengguna/edit/' . $pengguna->id_pengguna) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="deleteConfirm" href=" <?php echo site_url('admin/pengguna/delete/' . $pengguna->id_pengguna) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
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

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>