<ul class="sidebar navbar-nav">
  <!-- <li class="nav-item active">
          <a class="nav-link" href="<?= site_url("profil") ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Profil</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url("charts") ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Kontak</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url("tables") ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Artikel</span></a>
        </li> -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('admin/pelanggan/index') ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Daftar Pelanggan</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('admin/produk/index') ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Produk</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('admin/transaksi/index') ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Riwayat Transaksi</span></a>
  </li>
</ul>