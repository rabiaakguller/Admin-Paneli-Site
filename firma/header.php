<?php
require_once   'panel/islem/baglanti.php';

$ayar = $baglanti->prepare("SELECT * from ayar where ayarid=:id");
$ayar->execute(array(
    'id' => 1
));
[$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC)];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">

    <title>Vizyonlu Vizon</title>
    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="css/colorbox.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="body-inner">

    <div style="background-color: black" id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <ul class="top-info">
                        <li style="color:white"><i class="fa fa-map-marker">&nbsp;</i>
                            <p class="info-text"><?php echo $ayarcek['adres'] ?></p>
                        </li>
                    </ul>
                </div>
                <!--/ Top info end -->

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
                    <ul class="unstyled">
                        <li>
                            <a title="Facebook" href="<?php echo $ayarcek['facebook'] ?>" target="_blank">
                                <span style="color:white"  class="social-icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Twitter" href="<?php echo $ayarcek['twitter'] ?>" target="_blank">
                                <span style="color:white"  class="social-icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Instagram" href="<?php echo $ayarcek['instagram'] ?> " target="_blank">
                                <span style="color:white"  class="social-icon"><i class="fa fa-instagram"></i></span>
                            </a>
                            <a title="Youtube" href="<?php echo $ayarcek['youtube'] ?>" target="_blank">
                                <span style="color:white" class="social-icon"> <i class="fa fa-youtube"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/ Top social end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
    <!-- Header start -->
    <header id="header" class="header-one">
        <div class="container">
            <div class="row">
                <div class="logo-area clearfix">
                    <div class="logo col-xs-12 col-md-3">
                        <a href="index.php">
                            <img style="width: 150px; height: 150px" src="panel/resimler/logo/<?php echo $ayarcek['ayarlogo'] ?>" alt="">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-xs-12 col-md-9 header-right">
                        <br>
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Telefon</p>
                                        <p class="info-box-subtitle"><?php echo $ayarcek['telefon'] ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Email</p>
                                        <p class="info-box-subtitle"><?php echo $ayarcek['email'] ?></p>
                                    </div>
                                </div>
                            </li>
                            <li class="last">
                                <div class="info-box last">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Adres</p>
                                        <p class="info-box-subtitle"><?php echo $ayarcek['adres'] ?></p>
                                    </div>
                                </div>
                            </li>

                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->
            </div><!-- Row end -->
        </div><!-- Container end -->

        <nav style="background-color: black" class="site-navigation navigation navdown">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="site-nav-inner pull-left">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse navbar-responsive-collapse">
                                <ul class="nav navbar-nav">
                                    <li style="margin-left: 20px"><a href="index.php">ANA SAYFA</a></li>
                                    <li style="margin-left: 20px"><a href="hakkimizda.php">HAKKIMIZDA</a></li>

                                </ul>
                                <!--/ Nav ul end -->
                            </div>
                            <!--/ Collapse end -->
                        </div><!-- Site Navbar inner end -->
                    </div>
                    <!--/ Col end -->
                </div>
                <!--/ Row end -->

                <div class="nav-search">
                    <span id="search"><i class="fa fa-search"></i></span>
                </div><!-- Search end -->

                <div class="search-block" style="display: none;">
                    <input type="text" class="form-control" placeholder="Type what you want and enter">
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->
            </div>
            <!--/ Container end -->
        </nav>
        <!--/ Navigation end -->
    </header>