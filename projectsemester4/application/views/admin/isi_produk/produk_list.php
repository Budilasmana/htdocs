<!-- DataTables -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>


    <!-- DataTales Example -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('admin/produk/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Kategori</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($view_produk as $view_produk) : ?>
                            <tr>
                                <td>
                                    <?php echo $view_produk->id_produk ?>
                                </td>
                                <td>
                                    <?php echo $view_produk->kategori ?>
                                </td>
                                <td>
                                    <?php echo $view_produk->nama ?>
                                </td>
                                <td>
                                    Rp.<?php echo $view_produk->harga ?>,-
                                </td>
                                <td>
                                    <?php echo $view_produk->deskripsi ?>
                                </td>
                                <td>s
                                    <?php echo $view_produk->gambar_produk ?>
                                </td>

                                <td width="250">
                                    <a href="<?php echo site_url('admin/produk/edit/' . $view_produk->id_produk) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a onclick="deleteConfirm('<?php echo site_url('admin/produk/delete/' . $view_produk->id_produk) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>