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
    <title>Книги</title>
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
                                <img src="assets/images/logo.png" width="95px" alt="LOGO" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/logo.png" width="95px" alt="LOGO" class="light-logo" />
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
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Поиск по сайту" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/dev-logo.png" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Привет,</span> <span
                                        class="text-dark">Амрджон Раджабов</span>
                            </a>
                            
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
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
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> 	Java </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" id='box' href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> 	C </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> C# </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Python </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Visual Basic .NET </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> JavaScript </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Perl </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Assembly language </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> PHP</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Delphi/Object Pascal</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Ruby </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" id='box' href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Go </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Swift </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Visual Basic </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> R </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Dart </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Objective-C </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> MATLAB </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> PL/SQL	</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> SAS</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Scratch </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" id='box' href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> D </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> COBOL </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Groovy </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> F# </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Fortran </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Lua </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Prolog </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Scala</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Ada</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Transact-SQL </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" id='box' href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Lisp </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> LabVIEW </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Logo </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Scheme </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Haskell </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Q </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Apex </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Rust</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Bash</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> RPG  </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" id='box' href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Erlang </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Ladder Logic </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> MQL4	 </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Clojure </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Awk </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> Alice </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> VHDL </span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> HTML</span></a></li>
                                    <li class="sidebar-item"> <a class="sidebar-link_tree" href="#"
                                aria-expanded="false"><span
                                    class="hide-menu"><i data-feather="git-commit" class="feather-icon"></i> CSS</span></a></li>
                                    
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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Книги:</h3>
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
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="http://khizha.dp.ua/library/Benjamin_C_Pierce_-_Types_and_Programming_Languages_%5Bru%5D.pdf" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Типы в языках программирования</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="http://w2.ict.nsc.ru/jspui/handle/ICT/736" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Дисциплина программирования</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="http://www.academia.edu/download/33812425/Brian_Kernighan_Dennis_Ritchie-The_C_Programming_Language-RU.pdf" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Язык программирования СИ</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="ftp://ftp.vfose.ru/doc/python.pdf" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Язык программирования Python</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="https://books.google.com/books?hl=ru&lr=&id=VQfRAAAAQBAJ&oi=fnd&pg=PA19&dq=%D1%8F%D0%B7%D1%8B%D0%BA%D0%B8+%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F+%D0%BA%D0%BD%D0%B8%D0%B3%D0%B8&ots=qsjBc7QHSe&sig=u-DZULRL6UwOmzl88lT5-2bXv84" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Функциональное программирование на языке Haskell</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="http://sp.cs.msu.su/info/3/trlp.pdf" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Теория и реализация языков программирования</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="http://www.ict.nsc.ru/xmlui/handle/ICT/1241" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Систематическое программирование</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="http://it.kipk.kz/files/prepod/small.pdf" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Объектно-ориентированное программирование</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="http://elib.bsut.by/bitstream/handle/123456789/741/_ai_app_prog.pdf?sequence=1&isAllowed=y" target="_blank"><img src="assets/images/books.png" alt="C++" width="220px">
                                <p class="cn-lang_text">Программирование искусственного интеллекта в приложениях</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
            <nav aria-label="Навигация по страницам">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Предыдущая</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Следующая</a>
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