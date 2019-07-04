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

          <!-- Breadcrumbs-->
         <?php $this->load->view("admin/-partials/profil_list.php") ?>

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