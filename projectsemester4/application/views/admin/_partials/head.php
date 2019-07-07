<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url('./assets/img/favicon.ico'); ?>" type="image/x-icon" />
<title><?php echo SITE_NAME . " | " . ucfirst($this->uri->segment(2)) ?>
</title>
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

    .lobster {
        font-family: 'Lobster', cursive;
    }

    .transparent1 {
        background: rgba(2, 2, 2, .5);
        width: 100% auto;
        height: 50px;
        padding: 10px;
        margin: 0px auto;
        color: #fff;
    }

    .transparent2 {
        background: rgba(2, 2, 2, .5);
        width: 100%;
        bottom: 0px;
        padding: 10px;
        margin: 0px auto;
        height: 100% auto;
        color: #fff;
    }

    .transparent3 {
        background: rgba(2, 2, 2, .5);
        height: 100%;
        padding: 10px;
        margin: 0px auto;
        color: #fff;

        top: absolute;
        width: 100% auto;


    }

    .transparent4 {
        background: rgba(2, 2, 2, .0);
        height: 100% auto;
        padding: 10px;
        margin: 0px auto;
        color: #fff;
        position: absolute;
        bottom: 0%;
        width: 100% auto;


    }
</style>