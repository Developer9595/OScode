<?php require "db.php"; 
if ( ! isset($_SESSION['logged_user'])) {
    header('Location: http://oscode.ru/login.php');
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo.png">
    <title>Личный кабинет</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="cabinet.php">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="assets/images/logo.png" width="128px" alt="LOGO" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/logo.png" width="128px" alt="LOGO" class="light-logo" />
                            </b>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>Русский</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                         
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" class="js-logout" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/dev-logo.png" alt="user" class="rounded-circle"
                                    width="40"></a>
                                    <?php if ( isset($_SESSION['logged_user'])) : ?> 
                                    <li class="header-menu__list-text">
                                    <div class="dropdown">
                                    <a class="btn btn- dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $_SESSION['logged_user']->name;?> <?php echo $_SESSION['logged_user']->surname;?>
                                    </a>
                                    <div class="dropdown-menu btn-username" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="index.php">Главная страница</a>
                                        <a class="dropdown-item" id="somewhere" href="logout.php">Выход</a>
                                    </div>
                                    </div>
                                    </li>
                                    <?php else : ?>
                                    <?php endif; ?>
                                </li>
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Меню</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="tutorials.php"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Видеоуроки
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="articles.php"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Статьи</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="books.php"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Книги</span></a></li>
                        
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                
                                
                                
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" id='logout' href="index.php"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Главная страница</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" id="somewhere" href="logout.php"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Выход</span></a></li>
                                    <script>
                                        (function(){
                                            var linkk = document.getElementById('somewhere');
                                            linkk.onclick = function goSomeWhere(){
                                                var val = confirm("Вы уверены что хотите выйти?");
                                                if(val == true){
                                                    window.location.href = "logout.php";
                                                }
                                                else{
                                                    return false;
                                                }
                                            }
                                            })();
                                    </script>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">На сайте добавлено:</h3>
                    </div>
                    <div class="col-5 align-self-center">
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Видеоуроков</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                            class="set-doller"></sup>417</h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Книг
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium">538</h2>
                                        
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Статьи</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 font-weight-medium">50</h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Языков программирования</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Sales Charts Section -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/go.png" alt="Go">
                            </div><!--//icon-holder-->
                            <h3 class="title">OpenEdge ABL</h3>
                            <p class="intro">OpenEdge ABL, - это язык разработки бизнес-приложений, созданный и поддерживаемый Progress Software Corporation</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/kotlin.png" alt="Kotlin">
                            </div><!--//icon-holder-->
                            <h3 class="title">Fortran</h3>
                            <p class="intro">Fortran — первый язык программирования высокого уровня, получивший практическое применение</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/csharpfinal.png" alt="C#">
                            </div><!--//icon-holder-->
                            <h3 class="title">Lua</h3>
                            <p class="intro">Lua — скриптовый язык программирования, разработанный в подразделении Tecgraf</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/php.png" alt="PHP">
                            </div><!--//icon-holder-->
                            <h3 class="title">VBScript</h3>
                            <p class="intro">VBScript — язык сценариев, созданный компанией Microsoft на основе языка Visual Basic</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/swift.png" alt="Swift">
                            </div><!--//icon-holder-->
                            <h3 class="title">Ada</h3>
                            <p class="intro">Ada — язык программирования, созданный в 1979—1980 годах в ходе проекта Министерством обороны США </p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/js.png" alt="JS">
                            </div><!--//icon-holder-->
                            <h3 class="title">Visual FoxPro</h3>
                            <p class="intro">Microsoft Visual FoxPro — среда разработки систем баз данных, включающая объектно-ориентированную реляционную СУБД</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/python.png" alt="Python">
                            </div><!--//icon-holder-->
                            <h3 class="title">ML</h3>
                            <p class="intro">ML — семейство строгих языков функционального программирования с развитой параметрически полиморфной системой типов и параметризуемыми модулями</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/java3.png" alt="Java">
                            </div><!--//icon-holder-->
                            <h3 class="title">LabVIEW</h3>
                            <p class="intro">LabVIEW — это среда разработки и платформа для выполнения программ</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                        <a class="card-body_a" href="#">
                            <div class="card-body">
                            <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/c-plus-plus-logo.png" alt="C++">
                            </div><!--//icon-holder-->
                            <h3 class="title">TypeScript</h3>
                            <p class="intro">TypeScript — язык программирования, представленный Microsoft в 2012 году и позиционируемый как средство разработки веб-приложений</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                            </div>
                        </a>
                        </div>
                    </div>
                    
                <!-- *************************************************************** -->
            </div>
            <nav aria-label="Навигация по страницам">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                        <a class="page-link" href="cabinet4.php" tabindex="-1">Предыдущая</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="cabinet.php">1</a></li>
                        <li class="page-item">
                        <a class="page-link" href="cabinet2.php">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="cabinet3.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="cabinet4.php">4</a></li>
                        <li class="page-item active"><a class="page-link" href="cabinet5.php">5</a></li>
                        <li class="page-item"><a class="page-link" href="cabinet6.php">6</a></li>
                        <li class="page-item">
                        <a class="page-link" href="cabinet6.php">Следующая</a>
                        </li>
                    </ul>
                </nav>
            </div>
                
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
            <small class="copyright">Амирджон Раджабов <i class="fa fa-heart"></i> 2020 <a href="#">OSCODE.RU</a> © Все права защищены</small>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>