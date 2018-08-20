<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700');
    .logo {
        font-family: 'Open Sans Condensed', sans-serif; 
    };
    </style>
</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <b><img src="images/logo_brisa.png" style="height: 90px" alt="homepage" class="dark-logo" /></b>
                        <span style="font-size: 35px; position: absolute; top: 23px;" class="logo">Sica</span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/8.png" style="width: 50px;" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav" style="padding-top: 20px">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label"></li>
                        <li><a href="index.php" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Início</span></a></li>
                        <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Agendamento</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.html">Instalação</a></li>
                                <li><a href="email-read.html">Suporte</a></li>
                                <li><a href="email-inbox.html">Produção</a></li>
                            </ul>
                        </li>
                        <li> <a href="index.php" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Pontuação</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        
        <!--    Conteúdo    -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center" style="padding-top: 10%">
                    <div align="right" class="col-lg-6">
                        <img height="300px" src="images/logo_brisa.png">
                    </div>
                    <div alig class="col-lg-6"></div>
                </div>
                <div class="row justify-content-center">
                        <h3 class="logo">Seja Bem-Vindo(a)!</h3>
                </div>

            </div>
        </div>

    <script src="js/lib/jquery/jquery.min.js"></script>
    
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="js/jquery.slimscroll.js"></script>
    
    <script src="js/sidebarmenu.js"></script>
    
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

     <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/dashboard1-init.js"></script>

	<script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="js/lib/calendar-2/pignose.init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/custom.min.js"></script>

</body>
</html>