<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url('./assets/img/favicon.ico'); ?>" type="image/x-icon" />
  <title>Jamur-BWS</title>
  <link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>

  <?php $this->load->view("admin/_partials/css.php") ?>
  <style>
    body {
      background: linear-gradient(45deg, #f22613, #f89406, #26a65b, #5868ec, #f54e80, #f7ca18, #d2527f);
      background-size: 500% 500%;
      -webkit-animation: ignielGradient 12s ease infinite;
      -moz-animation: ignielGradient 12s ease infinite;
      animation: ignielGradient 12s ease infinite;
    }

    @-webkit-keyframes ignielGradient {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    @-moz-keyframes ignielGradient {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    @keyframes ignielGradient {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    h1 {
      margin: 0;
      text-transform: uppercase;
      font-family: 'halvetica', sans-serif;
      color: #ecf0f1;
      font-size: 30pt;
      text-align: center;
      line-height: 350px;
      letter-spacing: 0.2em
    }

    p {
      text-align: center;
    }

    a {
      text-decoration: none;
      color: #333;
    }

    .transparent1 {
      background: rgba(2, 2, 2, 0.0);
      width: 50%;
      height: 350px;
      padding: 10px;
      margin: 0px auto;
      color: #fff;
    }

    .transparent2 {
      background: rgba(255, 255, 255, 0.5);
      width: 100%;
      height: 50px;
      padding: 10px;
      margin: 0px auto;
      color: #fff;
    }

    .transparent3 {
      background: rgba(255, 255, 255, 0.0);
      width: 100%;
      height: 50px;
      padding: 10px;
      margin: 0px auto;
      color: #fff;
    }

    .allerts {

      width: 50%;
      height: 50px;
      padding: 10px;
      margin: 0px auto;

    }


    input {
      background: rgba(255, 255, 255, 0.2);
    }

    input {
      border: 0px;
      width: 100%;
    }

    .lobster {
      font-family: 'Lobster', cursive;
    }
  </style>

</head>

<body>

  <div class="container">
    <div class=" card-login mx-auto mb-2 mt-5  allerts">
      <?= $this->session->flashdata('message'); ?>
    </div>
    <div class=" card-login mx-auto transparent1">
      <div class="text-center ">
        <h3 class="h2 text-gray-900 lobster">Jamur Bondowoso</h3>
      </div>
      <div class="card-body">
        <form action="<?php echo base_url('index.php/Login/aksi_login'); ?>" method="post">
          <div class="form-group">
            <div class="form-label-group ">
              <input type="email" name="email" id="inputEmail" class="text-white" placeholder="Email address" required="required" autofocus="autofocus">
              <label class="text-light" for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="text-white" placeholder="Password" required="required">
              <label class="text-light" for="inputPassword">Password</label>
            </div>
          </div>

          <td><input type="submit" class="btn btn-light btn-block transparent3" value="Login"></td>
        </form>


        <!-- Bootstrap core JavaScript-->
        <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>