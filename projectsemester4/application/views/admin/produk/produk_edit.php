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
                <h1 class="h3 mb-2 text-gray-800">Tambah Data Produk</h1>


                <!-- add form -->


                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/produk/') ?>"><i class="fas fa-arrow-left"></i>Kembali</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/produk/edit') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_produk" value="<?php echo $produk->id_produk ?>" />
                            <div class="form-group">
                                <label for="nama">Nama Produk</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" value="<?php echo $produk->nama ?>" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="id_kategori">Kategori</label><br>
                                <select class="form-control" name="id_kategori" id="id_kategori" value="<?php echo $produk->id_kategori ?>" required>
                                    <option value="">--Pilih Kategori--</option>
                                    <?php
                                    $servername = "localhost";
                                    $database = "mitrajamur";
                                    $username = "root";
                                    $password = "";
                                    $conn = mysqli_connect($servername, $username, $password, $database);
                                    $sql_akses = mysqli_query($conn, "SELECT * FROM kategori") or die(mysqli_error($conn));
                                    while ($data_kategori = mysqli_fetch_array($sql_akses)) {
                                        echo '<option value="' . $data_kategori['id_kategori'] . '">' . $data_kategori['kategori'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_kategori') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="text" name="harga" value="<?php echo $produk->harga ?>" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('harga') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" type="text" name="deskripsi" value="<?php echo $produk->deskripsi ?>" maxlength="64" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('deskripsi') ?>
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
                                                <input type="file" class="custom-file-input" id="gambar" name="gambar" value="<?php echo $produk->gambar ?>">
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