<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>testos - Bootstrap One Page Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('fancybox/fancybox.css');?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="prefetch" href="img/zoom.png">

  <!-- =======================================================
    Template Name: Munter
    Template URL: https://templatemag.com/munter-bootstrap-one-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navigation">

  <!-- Fixed navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#about-us">About Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portfolio">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#process">Process</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#clients">Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>

  <!-- === MAIN Background === -->
  <div class="slide story" id="intro" data-slide="1">
    <div class="container">
      <div id="home-row-1" class="row clearfix">
        <div class="col-12">
          <h1 class="font-semibold">MUNTER <span class="font-thin">DESIGN</span></h1>
          <h4 class="font-thin">We are an <span class="font-semibold">independent interactive agency</span> based in London.</h4>
          <br>
          <br>
        </div>
        <!-- /col-12 -->
      </div>
      <!-- /row -->
      <div id="home-row-2" class="row clearfix">

        <div class="col-12 col-sm-4">
          <a href="#portfolio" class="smoothscroll navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/s02.png"></div><span>PROFESSIONAL</span></a>
        </div>

        <div class="col-12 col-sm-4">
          <a href="#process" class="smoothscroll navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/s01.png"></div><span>FRIENDLY</span></a>
        </div>

        <div class="col-12 col-sm-4">
          <a href="#clients" class="smoothscroll navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/s03.png"></div><span>SUITABLE</span></a>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /slide1 -->

  <!-- === Slide 2 === -->
  <div class="slide story" id="about-us" data-slide="2">
    <div class="container">
      <div class="row title-row">
        <div class="col-12 font-thin">Contrary to popular belief, <span class="font-semibold">Lorem Ipsum</span> <br>is not simply random text.</div>
      </div>
      <!-- /row -->
      <div class="row line-row">
        <div class="hr">&nbsp;</div>
      </div>
      <!-- /row -->
      <div class="row subtitle-row">
        <div class="col-12 font-thin">This is what <span class="font-semibold">we do best</span></div>
      </div>
      <!-- /row -->
      <div class="row content-row">
        <div class="col-12 col-lg-3 col-sm-6">
          <p><i class="fa fa-eye"></i></p>
          <h2 class="font-thin">Visual <span class="font-semibold">Identity</span></h2>
          <h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-lg-3 col-sm-6">
          <p><i class="fa fa-laptop"></i></p>
          <h2 class="font-thin">Web <span class="font-semibold">Design</span></h2>
          <h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-lg-3 col-sm-6">
          <p><i class="fa fa-tablet"></i></p>
          <h2 class="font-thin">Mobile <span class="font-semibold">Apps</span></h2>
          <h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-lg-3 col-sm-6">
          <p><i class="fa fa-pencil"></i></p>
          <h2 class="font-semibold">Development</h2>
          <h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        </div>
        <!-- /col12 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /slide2 -->

  <!-- === SLide 3 - Portfolio -->
  <div class="slide story" id="portfolio" data-slide="3">
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p01-large.jpg"><img class="thumb" src="img/portfolio/p01-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p02-large.jpg"><img class="thumb" src="img/portfolio/p02-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p09-large.jpg"><img class="thumb" src="img/portfolio/p09-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p010-large.jpg"><img class="thumb" src="img/portfolio/p10-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p05-large.jpg"><img class="thumb" src="img/portfolio/p05-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p06-large.jpg"><img class="thumb" src="img/portfolio/p06-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p07-large.jpg"><img class="thumb" src="img/portfolio/p07-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p08-large.jpg"><img class="thumb" src="img/portfolio/p08-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p03-large.jpg"><img class="thumb" src="img/portfolio/p03-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p04-large.jpg"><img class="thumb" src="img/portfolio/p04-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p11-large.jpg"><img class="thumb" src="img/portfolio/p11-small.jpg" alt=""></a></div>
      <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="img/portfolio/p12-large.jpg"><img class="thumb" src="img/portfolio/p12-small.jpg" alt=""></a></div>
    </div>
    <!-- /row -->
  </div>
  <!-- /slide3 -->

  <!-- === Slide 4 - Process === -->
  <div class="slide story" id="process" data-slide="4">
    <div class="container">
      <div class="row title-row">
        <div class="col-12 font-thin">See us <span class="font-semibold">at work</span></div>
      </div>
      <!-- /row -->
      <div class="row line-row">
        <div class="hr">&nbsp;</div>
      </div>
      <!-- /row -->
      <div class="row subtitle-row">
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
        <div class="col-12 col-sm-10 font-light">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
      </div>
      <!-- /row -->
      <div class="row content-row">
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
        <div class="col-12 col-sm-2">
          <p><i class="fa fa-bolt"></i></p>
          <h2 class="font-thin">Listening to<br><span class="font-semibold" >your needs</span></h2>
          <h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2">
          <p><i class="fa fa-cog"></i></p>
          <h2 class="font-thin">Project<br><span class="font-semibold">discovery</span></h2>
          <h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2">
          <p><i class="fa fa-cloud"></i></p>
          <h2 class="font-thin">Storming<br><span class="font-semibold">our brains</span></h2>
          <h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2">
          <p><i class="fa fa-map-marker"></i></p>
          <h2 class="font-thin">Getting<br><span class="font-semibold">there</span></h2>
          <h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2">
          <p><i class="fa fa-gift"></i></p>
          <h2 class="font-thin">Delivering<br><span class="font-semibold">the product</span></h2>
          <h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
        </div>
        <!-- /col12 -->
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /slide4 -->

  <!-- === Slide 5 === -->
  <div class="slide story" id="clients" data-slide="5">
    <div class="container">
      <div class="row title-row">
        <div class="col-12 font-thin"><span class="font-semibold">Clients</span> we’ve worked with</div>
      </div>
      <!-- /row -->
      <div class="row line-row">
        <div class="hr">&nbsp;</div>
      </div>
      <!-- /row -->
      <div class="row subtitle-row">
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
        <div class="col-12 col-sm-10 font-light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. <br/><br/> The standard chunk of Lorem Ipsum used since the 1500s is reproduced
          below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero.</div>
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
      </div>
      <!-- /row -->
      <div class="row content-row">
        <div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
        <div class="col-12 col-sm-2"><img src="img/client01.png" alt=""></div>
        <div class="col-12 col-sm-2"><img src="img/client02.png" alt=""></div>
        <div class="col-12 col-sm-2"><img src="img/client03.png" alt=""></div>
        <div class="col-12 col-sm-2"><img src="img/client04.png" alt=""></div>
        <div class="col-12 col-sm-2"><img src="img/client05.png" alt=""></div>
        <div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /slide5 -->

  <!-- === Slide 6 / Contact === -->
  <div class="slide story" id="contact" data-slide="6">
    <div class="container">
      <div class="row title-row">
        <div class="col-12 font-light">Leave us a <span class="font-semibold">message</span></div>
      </div>
      <!-- /row -->
      <div class="row line-row">
        <div class="hr">&nbsp;</div>
      </div>
      <!-- /row -->
      <div class="row subtitle-row">
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
        <div class="col-12 col-sm-10 font-light">You can find us literally anywhere, just push a button and we’re there</div>
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
      </div>
      <!-- /row -->
      <div id="contact-row-4" class="row">
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-phone"></i></a></p>
          <span class="hover-text font-light ">+44 4839-4343</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-envelope"></i></a></p>
          <span class="hover-text font-light ">munter@example.com</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-home"></i></a></p>
          <span class="hover-text font-light ">London, England<br>zip code 98443</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></p>
          <span class="hover-text font-light ">facebook/TemplateMag</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></p>
          <span class="hover-text font-light ">@TemplateMag</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-md-8 col-md-offset-2">

          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <label for="contact-name">Your Name</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Your Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <label for="contact-message">Your Message</label>
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>testos</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/munter-bootstrap-one-page-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Munter template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/fancybox/fancybox.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>