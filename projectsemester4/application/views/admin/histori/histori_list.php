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
                    <h1 class="h3 mb-2 text-gray-800 lobster">Riwayat Transaksi</h1>


                    <!-- DataTales Example -->
                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Username Pengguna</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($histori as $histori) : ?>
                                            <tr>
                                                <td>
                                                    <?php echo $histori->nama ?>
                                                </td>
                                                <td>
                                                    <?php echo $histori->username ?>
                                                </td>
                                                <td>
                                                    <?php echo $histori->jumlah ?>
                                                </td>
                                                <td>
                                                    <?php echo $histori->status ?>
                                                </td>
                                                <td>
                                                    <?php echo $histori->tanggal ?>
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