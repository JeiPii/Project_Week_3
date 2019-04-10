<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <!--<link href="../css/style.css" rel="stylesheet">-->
</head>

<body class="fixed-sn deep-purple-skin">
<?php 
//login check
require_once('../../logicTier/functions/loginCheck.php');
require_once('../../logicTier/functions/functionsPdo.php');

?>    
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="#"><img src="https://via.placeholder.com/250x90?text=Logo" class="img-fluid flex-center"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
                        <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Hoofd menu<i class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Hoofd menu<i class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Hoofd menu<i class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Hoofd menu<i class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Hoofd menu<i class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                    <li><a href="#" class="waves-effect">Sub item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Welkom, gebruiker</p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main>
        
        <div class="container-fluid text-center">

            <!--Card-->
            <div class="card card-cascade wider reverse my-4 pb-5">

                <!--Card image-->
                <div class="view view-cascade overlay wow fadeIn">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/2.jpg" class="img-fluid">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
                    <!--Title-->
                    <h4 class="card-title"><strong>My adventure</strong></h4>
                    <h5 class="blue-text"><strong>Photography</strong></h5>

                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>

                        <a class="btn btn-primary btn-lg">Primary button</a>
                        <a class="btn btn-secondary btn-lg">Secondary button</a>
                        <a class="btn btn-default btn-lg">Default button</a>

                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        
        </div>
        
    </main>
    <!--/Main layout-->
        <!--Footer-->
        <footer class="page-footer pt-4 mt-4 purple darken-2 text-center text-md-left mt-5">

            <!--Footer Links-->
            <div class="container">
                <div class="row">

                    <!--First column-->
                    <div class="col-md-3">
                        <h5 class="text-uppercase">Footer Content </h5>
                        <p>Here you can use rows and columns here to organize your footer content.</p>
                    </div>
                    <!--/.First column-->

                    <hr class="w-100 clearfix d-md-none">

                    <!--Second column-->
                    <div class="col-md-2 ml-auto">
                        <h5 class="text-uppercase">Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->

                    <hr class="w-100 clearfix d-md-none">

                    <!--Third column-->
                    <div class="col-md-2 ml-auto">
                        <h5 class="text-uppercase">Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Third column-->

                    <hr class="w-100 clearfix d-md-none">

                    <!--Fourth column-->
                    <div class="col-md-2 ml-auto">
                        <h5 class="text-uppercase">Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->

                </div>
            </div>

            <hr>

            <div class="container">
                <!--Grid row-->
                <div class="row mb-3">

                    <!--First column-->
                    <div class="col-md-12">

                        <ul class="list-unstyled d-flex justify-content-center mb-0 py-4 list-inline">
                            <li class="list-inline-item">
                              <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f white-text fa-lg"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text fa-lg"> </i></a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text fa-lg"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text fa-lg"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text fa-lg"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <a class="p-2 m-2 fa-lg pin-ic"><i class="fab fa-pinterest white-text fa-lg"></i></a>
                            </li>
                        </ul>

                    </div>
                    <!--/First column-->
                </div>
                <!--/Grid row-->
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class="footer-copyright py-3 text-center">
                <div class="container-fluid">
                    © 2019 Copyright: <a href="#"> Edu-chain.nl </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.js"></script>
</body>

</html>
