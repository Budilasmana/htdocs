<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <?php $this->load->view("admin/_partials/navbar.php") ?>

  </nav>

  <div id="wrapper" style="background-color:rgb(192, 192, 192);">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <div class="container5">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header">Ubah Password</div>
            <div class="card-body">
              <form action="<?php echo base_url('###'); ?>" method="post">
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="email" name="Username" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                    <label for="inputEmail">Email address</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password Lama" required="required">
                    <label for="inputPassword">Password Lama</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password Lama" required="required">
                    <label for="inputPassword">Password Baru</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password Lama" required="required">
                    <label for="inputPassword">Password Baru</label>
                  </div>
                </div>
                <td><input type="submit" class="btn btn-primary btn-block" value="Ubah Password"></td>
              </form>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->

          </div>
          <!-- /.content-wrapper -->
          <?php $this->load->view("admin/_partials/footer.php") ?>

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