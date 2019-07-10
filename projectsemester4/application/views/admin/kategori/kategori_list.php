<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark transparent1 static-top">

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

                    <h1 class="h3 mb-2 text-gray-800 lobster">Data Kategori</h1>


                    <!-- DataTales Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/kategori/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>Id Kategori</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($kategori as $kategori) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $kategori->id_kategori ?>
                                                </td>
                                                <td>
                                                    <?php echo $kategori->kategori ?>
                                                </td>
                                                <td>
                                                    <img src="<?php echo base_url('assets/img/kategori/' . $kategori->gambar) ?>" width="64" />
                                                </td>

                                                <td width="250">
                                                    <a href="<?php echo site_url('admin/kategori/edit/' . $kategori->id_kategori) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                    <a onclick="deleteConfirm" href=" <?php echo site_url('admin/kategori/delete/' . $kategori->id_kategori) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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

        </div>
        <!-- /.content-wrapper -->

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