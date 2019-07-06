<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title><?php echo SITE_NAME . " - " . ucfirst($this->uri->segment(1)) . " . " . ucfirst($this->uri->segment(2)) ?></title>
<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>

<?php $this->load->view("admin/_partials/css.php") ?>
<style>
    body {
        background-color: #f1c40f;
        -webkit-animation: color 5s ease-in 0s infinite alternate running;
        -moz-animation: color 5s linear 0s infinite alternate running;
        animation: color 5s linear 0s infinite alternate running;
    }

    /* Animasi + Prefix untuk browser */
    @-webkit-keyframes color {
        0% {
            background-color: #f1c40f;
        }

        32% {
            background-color: #e74c3c;
        }

        55% {
            background-color: #9b59b6;
        }

        76% {
            background-color: #16a085;
        }

        100% {
            background-color: #2ecc71;
        }
    }

    @-moz-keyframes color {
        0% {
            background-color: #f1c40f;
        }

        32% {
            background-color: #e74c3c;
        }

        55% {
            background-color: #9b59b6;
        }

        76% {
            background-color: #16a085;
        }

        100% {
            background-color: #2ecc71;
        }
    }

    @keyframes color {
        0% {
            background-color: #f1c40f;
        }

        32% {
            background-color: #e74c3c;
        }

        55% {
            background-color: #9b59b6;
        }

        76% {
            background-color: #16a085;
        }

        100% {
            background-color: #2ecc71;
        }
    }

    .lobster {
        font-family: 'Lobster', cursive;
    }

    .transparent1 {
        background: rgba(2, 2, 2, .5);
        width: 100%;
        height: 50px;
        padding: 10px;
        margin: 0px auto;
        color: #fff;
    }

    .transparent2 {
        background: rgba(2, 2, 2, .5);
        width: 100%;

        padding: 10px;
        margin: 0px auto;
        color: #fff;
    }

    .transparent3 {
        background: rgba(2, 2, 2, .5);
        height: 50px;
        padding: 10px;
        margin: 0px auto;
        color: #fff;
        position: absolute;
        bottom: 0px;
        width: 100%;


    }
</style>