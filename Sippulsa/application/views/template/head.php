<!DOCTYPE html>
<html>
<head>
  <title> Sistem Informasi Penjualan Pulsa</title>


  <?php// $this->load->view("template/css.php") ?> 


</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistem Informasi Penjualan Pulsa</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
        <a href="<?php echo base_url() ?>transaksi" type="button" class="btn btn-success"><i class="badge"></i>Transaksi</a>
        <a href="<?php echo site_url('authentication/auth/logout'); ?>" type="submit" class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</a>
          </div>
      </div>
    </nav>