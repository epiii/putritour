<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tour & Travel</title>
	  <link rel="shortcut icon" href="img/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.css?1422792965" rel="stylesheet" />
    <link href="css/materialadmin.css" rel="stylesheet" />-->
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-logo js-scroll-trigger" href="javascript:;">
          <img src="img/logo.png" />
        </a>

        <a class="navbar-brand js-scroll-trigger" href="javascript:;">
          <div class="navbar-brand-top"> Tour & Travel </div>
          <div class="navbar-brand-bottom"> PT. Hijau Tumbuh Kembang Indonesia </div>
        </a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./">Beranda</a>
            </li>

            <!-- nyamm : static page (href)-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#tentang" xid="Xtentang">Tentang Kami </a>
            </li>

            <!-- nyamm : static page (href)-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#unggul" xid="Xtentang">Unggulan HTKI </a>
            </li>

            <!-- nyamm : static page (href)-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#paketumroh">Paket Umroh</a>
              <!-- <a class="nav-link js-scroll-trigger" href="#services">Paket Umroh</a> -->
            </li>

            <li class="nav-item">
              <!-- nyamm : static page (href)-->
              <a class="nav-link js-scroll-trigger" href="#portfolio" xid="program">Program</a>
        			  <div class="ab">
                  <ul class="navbar-nav ml-auto-child">
                    <li class="nav-item">
                      <!-- nyamm : dynamic page (href,target)-->
                      <a class="nav-link js-scroll-trigger"  target="_blank" href="tabungan-umroh">Tabungan Umroh</a>
                    </li>
                    <li class="nav-item">
                      <!-- nyamm : dynamic page (href,target)-->
                      <a class="nav-link js-scroll-trigger"  target="_blank" href="talangan-umroh">Talangan Umroh</a>
                    </li>
                    <li class="nav-item">
                      <!-- nyamm : dynamic page (href,target)-->
                      <a class="nav-link js-scroll-trigger"  target="_blank" href="peluang-usaha">Peluang Usaha</a>
                    </li>
                  </ul>
                </div>
              </li>

            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li> -->

          </ul>
        </div>
      </div>
    </nav>

    <!-- main content (dynamic) -->
    <div XXclass="container">
      <?php
        // nyamm : dynamic page
        if(isset($_GET['page'])){
          $page = $_GET['page'];

          switch ($page) {
            case 'PaketUmroh':
              include "halaman/PaketUmroh.php";
            break;
            case 'TabunganUmroh':
              include "halaman/TabunganUmroh.php";
            break;
            case 'TalanganUmroh':
              include "halaman/TalanganUmroh.php";
            break;
            case 'PeluangUsaha':
              include "halaman/PeluangUsaha.php";
            break;
            case 'TentangKami':
              include "halaman/TentangKami.php";
            break;
            default:
              echo "
              <center>
                <h3>Maaf. Halaman tidak di temukan !</h3>
              </center>";
            break;
          }
        }else{
          include "halaman/Beranda.php";
          // include "index.html";
        }
      ?>
    </div>
    <!-- end of :  main content -->

    <!-- <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
