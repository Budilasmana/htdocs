<a class="navbar-brand mr-1" href="<?= site_url("admin") ?>">Jamur Bondowoso</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>


<!-- Navbar -->
<ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">

  <li class="nav-item dropdown no-arrow item active">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="far fa-user"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="<?= site_url("ubah_password") ?>">
        <i class="far fa-edit"></i>
        <span>Ubah Password</span></a>
      <a class="dropdown-item" href="<?php echo base_url('index.php/Login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>

  </li>
</ul>