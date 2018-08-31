<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SICA</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <style>
    @import url('https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c');
    .logo {
        font-family: 'M PLUS Rounded 1c', sans-serif;
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
                    <a class="navbar-brand" href="index.php ">
                        <b><img src="images/logo_brisa.png" style="height: 50px" alt="homepage" class="dark-logo" /></b>
                        <span style="font-size: 25px; position: absolute; top: 9px;" class="logo">Sica</span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Pedro França </span><img src="images/users/8.png" style="width: 35px;" alt="user" class="profile-pic" /></a>
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
                <nav class="sidebar-nav">
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
                        <li> <a href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Pontuação</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->        
        <!--    CONTEÚDO    -->
        <div class="page-wrapper">
        <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-calendar f-s-20 color-dark"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h5>Agendadas</h5>
                                    <p class="m-b-0">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-check f-s-20 color-info"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h5>Instaladas</h5>
                                    <p class="m-b-0">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-exclamation f-s-20 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h5>Pendentes</h5>
                                    <p class="m-b-0">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-window-close f-s-20 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h5>Canceladas</h5>
                                    <p class="m-b-0">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-4">
                    <div class="card">
								<div class="card-title">
									<h4>Avisos Fixos</h4>
								</div>
								<div class="recent-comment">
                                    <div class="media">
										<div class="media-left">
											<a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">Welisson</h4>
											<p>Ei, pessoal! Façam silêncio por favor!!</p>
											<p class="comment-date">23 de agosto, 2018</p>
										</div>
									</div>
                                    
									<div class="media">
										<div class="media-left">
											<a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
										</div>
										<div class="media-body">
											<h4 class="media-heading">SICA</h4>
											<p>Este é o SICA - Sistema de Controle de Agendamentos. Aqui você deve registrar todas as informações de agendamento substituindo suas antigas planilhas.</p>
											<p class="comment-date">22 de agosto, 2018</p>
										</div>
									</div>
								</div>
							</div>
                </div>
            </div>
            
        </div>
<!--
            <footer>
                <img style="margin-left:-40px; position:absolute; bottom:-2%;" width="250px" src="images/Imagem2.png">
            </footer>
-->
        
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>