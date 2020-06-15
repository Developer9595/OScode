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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/logo.png">
    <title>JavaScript</title>
    <!-- Custom CSS -->
    <link href="../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../dist/css/style.css" rel="stylesheet">
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
                        <a href="/">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../../assets/images/logo.png" width="128px" alt="LOGO" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../../assets/images/logo.png" width="128px" alt="LOGO" class="light-logo" />
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
                        <h3>Язык программирования JavaScript</h3>
                        
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
                                                                     
                                    <li class="header-menu__list-text">
                                    <div class="dropdown">
                                    <a class="btn btn- dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   
                                    </a>
                                    <div class="dropdown-menu btn-username" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="index.php">Главная страница</a>
                                        <a class="dropdown-item" id="somewhere" href="logout.php">Выход</a>
                                    </div>
                                    </div>
                                    </li>
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
                        <li class="nav-small-cap"><span class="hide-menu"></span></li>

                        <div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading">Меню</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>
                        <ul>
<li class="toclevel-1 tocsection-1"><a href="#История"><span class="tocnumber">1</span> <span class="toctext">История</span></a>
<ul>
<li class="toclevel-2 tocsection-2"><a href="#Предпосылки"><span class="tocnumber">1.1</span> <span class="toctext">Предпосылки</span></a></li>
<li class="toclevel-2 tocsection-3"><a href="#JavaScript"><span class="tocnumber">1.2</span> <span class="toctext">JavaScript</span></a></li>
<li class="toclevel-2 tocsection-4"><a href="#Популярность"><span class="tocnumber">1.3</span> <span class="toctext">Популярность</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-5"><a href="#Возможности_языка"><span class="tocnumber">2</span> <span class="toctext">Возможности языка</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Семантика_и_синтаксис"><span class="tocnumber">3</span> <span class="toctext">Семантика и синтаксис</span></a>
<ul>
<li class="toclevel-2 tocsection-7"><a href="#Структура_языка"><span class="tocnumber">3.1</span> <span class="toctext">Структура языка</span></a>
<ul>
<li class="toclevel-3 tocsection-8"><a href="#Ядро"><span class="tocnumber">3.1.1</span> <span class="toctext">Ядро</span></a></li>
<li class="toclevel-3 tocsection-9"><a href="#Объектная_модель_браузера"><span class="tocnumber">3.1.2</span> <span class="toctext">Объектная модель браузера</span></a></li>
<li class="toclevel-3 tocsection-10"><a href="#Объектная_модель_документа"><span class="tocnumber">3.1.3</span> <span class="toctext">Объектная модель документа</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-11"><a href="#Встраивание_в_веб-страницы"><span class="tocnumber">3.2</span> <span class="toctext">Встраивание в веб-страницы</span></a>
<ul>
<li class="toclevel-3 tocsection-12"><a href="#Расположение_внутри_страницы"><span class="tocnumber">3.2.1</span> <span class="toctext">Расположение внутри страницы</span></a></li>
<li class="toclevel-3 tocsection-13"><a href="#Расположение_внутри_тега"><span class="tocnumber">3.2.2</span> <span class="toctext">Расположение внутри тега</span></a></li>
<li class="toclevel-3 tocsection-14"><a href="#Вынесение_в_отдельный_файл"><span class="tocnumber">3.2.3</span> <span class="toctext">Вынесение в отдельный файл</span></a></li>
<li class="toclevel-3 tocsection-15"><a href="#Атрибуты_элемента_script"><span class="tocnumber">3.2.4</span> <span class="toctext">Атрибуты элемента script</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="toclevel-1 tocsection-16"><a href="#Область_применения"><span class="tocnumber">4</span> <span class="toctext">Область применения</span></a>
<ul>
<li class="toclevel-2 tocsection-17"><a href="#Веб-приложения"><span class="tocnumber">4.1</span> <span class="toctext">Веб-приложения</span></a>
<ul>
<li class="toclevel-3 tocsection-18"><a href="#AJAX"><span class="tocnumber">4.1.1</span> <span class="toctext">AJAX</span></a></li>
<li class="toclevel-3 tocsection-19"><a href="#Comet"><span class="tocnumber">4.1.2</span> <span class="toctext">Comet</span></a></li>
<li class="toclevel-3 tocsection-20"><a href="#Браузерные_операционные_системы"><span class="tocnumber">4.1.3</span> <span class="toctext">Браузерные операционные системы</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-21"><a href="#Букмарклеты"><span class="tocnumber">4.2</span> <span class="toctext">Букмарклеты</span></a></li>
<li class="toclevel-2 tocsection-22"><a href="#Пользовательские_скрипты_в_браузере"><span class="tocnumber">4.3</span> <span class="toctext">Пользовательские скрипты в браузере</span></a></li>
<li class="toclevel-2 tocsection-23"><a href="#Серверные_приложения"><span class="tocnumber">4.4</span> <span class="toctext">Серверные приложения</span></a></li>
<li class="toclevel-2 tocsection-24"><a href="#Мобильные_приложения"><span class="tocnumber">4.5</span> <span class="toctext">Мобильные приложения</span></a></li>
<li class="toclevel-2 tocsection-25"><a href="#Виджеты"><span class="tocnumber">4.6</span> <span class="toctext">Виджеты</span></a></li>
<li class="toclevel-2 tocsection-26"><a href="#Прикладное_программное_обеспечение"><span class="tocnumber">4.7</span> <span class="toctext">Прикладное программное обеспечение</span></a></li>
<li class="toclevel-2 tocsection-27"><a href="#Манипуляция_объектами_приложений"><span class="tocnumber">4.8</span> <span class="toctext">Манипуляция объектами приложений</span></a></li>
<li class="toclevel-2 tocsection-28"><a href="#Офисные_приложения"><span class="tocnumber">4.9</span> <span class="toctext">Офисные приложения</span></a>
<ul>
<li class="toclevel-3 tocsection-29"><a href="#Microsoft_Office"><span class="tocnumber">4.9.1</span> <span class="toctext">Microsoft Office</span></a></li>
<li class="toclevel-3 tocsection-30"><a href="#OpenOffice.org"><span class="tocnumber">4.9.2</span> <span class="toctext">OpenOffice.org</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-31"><a href="#Обучение_информатике"><span class="tocnumber">4.10</span> <span class="toctext">Обучение информатике</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-32"><a href="#Версии"><span class="tocnumber">5</span> <span class="toctext">Версии</span></a></li>
<li class="toclevel-1 tocsection-33"><a href="#Библиотеки_JavaScript"><span class="tocnumber">6</span> <span class="toctext">Библиотеки JavaScript</span></a></li>
<li class="toclevel-1 tocsection-34"><a href="#Отладка"><span class="tocnumber">7</span> <span class="toctext">Отладка</span></a></li>
<li class="toclevel-1 tocsection-35"><a href="#Средства_тестирования"><span class="tocnumber">8</span> <span class="toctext">Средства тестирования</span></a></li>
<li class="toclevel-1 tocsection-36"><a href="#Связь_с_другими_языками"><span class="tocnumber">9</span> <span class="toctext">Связь с другими языками</span></a>
<ul>
<li class="toclevel-2 tocsection-37"><a href="#Взаимное_влияние"><span class="tocnumber">9.1</span> <span class="toctext">Взаимное влияние</span></a>
<ul>
<li class="toclevel-3 tocsection-38"><a href="#JavaScript_и_Java"><span class="tocnumber">9.1.1</span> <span class="toctext">JavaScript и Java</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-39"><a href="#Реализация"><span class="tocnumber">9.2</span> <span class="toctext">Реализация</span></a></li>
<li class="toclevel-2 tocsection-40"><a href="#Взаимодействие"><span class="tocnumber">9.3</span> <span class="toctext">Взаимодействие</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-41"><a href="#Поддержка_браузерами"><span class="tocnumber">10</span> <span class="toctext">Поддержка браузерами</span></a>
<ul>
<li class="toclevel-2 tocsection-42"><a href="#Наборы_тестов"><span class="tocnumber">10.1</span> <span class="toctext">Наборы тестов</span></a></li>
<li class="toclevel-2 tocsection-43"><a href="#Безопасность"><span class="tocnumber">10.2</span> <span class="toctext">Безопасность</span></a>
<ul>
<li class="toclevel-3 tocsection-44"><a href="#Межсайтовые_уязвимости"><span class="tocnumber">10.2.1</span> <span class="toctext">Межсайтовые уязвимости</span></a></li>
<li class="toclevel-3 tocsection-45"><a href="#Неуместное_доверие_на_стороне_клиента"><span class="tocnumber">10.2.2</span> <span class="toctext">Неуместное доверие на стороне клиента</span></a></li>
<li class="toclevel-3 tocsection-46"><a href="#Ошибки_в_браузере,_плагинах_и_расширениях"><span class="tocnumber">10.2.3</span> <span class="toctext">Ошибки в браузере, плагинах и расширениях</span></a></li>
<li class="toclevel-3 tocsection-47"><a href="#Ошибки_реализации_песочницы"><span class="tocnumber">10.2.4</span> <span class="toctext">Ошибки реализации песочницы</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="toclevel-1 tocsection-48"><a href="#Литература"><span class="tocnumber">11</span> <span class="toctext">Литература</span></a></li>
<li class="toclevel-1 tocsection-49"><a href="#См._также"><span class="tocnumber">12</span> <span class="toctext">См. также</span></a></li>
<li class="toclevel-1 tocsection-50"><a href="#Примечания"><span class="tocnumber">13</span> <span class="toctext">Примечания</span></a>
<ul>
<li class="toclevel-2 tocsection-51"><a href="#Спецификации"><span class="tocnumber">13.1</span> <span class="toctext">Спецификации</span></a></li>
<li class="toclevel-2 tocsection-52"><a href="#Комментарии"><span class="tocnumber">13.2</span> <span class="toctext">Комментарии</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-53"><a href="#Ссылки"><span class="tocnumber">14</span> <span class="toctext">Ссылки</span></a>
<ul>
<li class="toclevel-2 tocsection-54"><a href="#Документация"><span class="tocnumber">14.1</span> <span class="toctext">Документация</span></a></li>
<li class="toclevel-2 tocsection-55"><a href="#Справочники"><span class="tocnumber">14.2</span> <span class="toctext">Справочники</span></a></li>
<li class="toclevel-2 tocsection-56"><a href="#Тематические_ресурсы"><span class="tocnumber">14.3</span> <span class="toctext">Тематические ресурсы</span></a></li>
<li class="toclevel-2 tocsection-57"><a href="#Блоги_известных_авторов_книг_по_JavaScript"><span class="tocnumber">14.4</span> <span class="toctext">Блоги известных авторов книг по JavaScript</span></a></li>
</ul>
</li>
</ul>
</div>
                        
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                
                                
                                
                                    <ul aria-expanded="false" class="collapse second-level base-level-line">
                                        
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="list-divider"></li>
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
                <div id="bodyContent" class="mw-body-content">
<table class="infobox" style="" data-name="Язык программирования"><tbody><tr><th colspan="2" class="infobox-above" style="background:#cfe3ff;">JavaScript</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span class="no-wikidata" data-wikidata-property-id="P154"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Unofficial_JavaScript_logo_2.svg" class="image"><img alt="Unofficial JavaScript logo 2.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/80px-Unofficial_JavaScript_logo_2.svg.png" decoding="async" width="80" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/120px-Unofficial_JavaScript_logo_2.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/160px-Unofficial_JavaScript_logo_2.svg.png 2x" data-file-width="512" data-file-height="512" /></a></span> </td></tr>
<tr>
<th class="plainlist">Класс языка</th>
<td class="plainlist">
<div class="no-wikidata" data-wikidata-property-id="P31">
<p><a href="/wiki/%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BF%D0%B0%D1%80%D0%B0%D0%B4%D0%B8%D0%B3%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Мультипарадигмальный язык программирования">мультипарадигмальный</a>:
<a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">объектно-ориентированное</a> (<a href="/wiki/%D0%9F%D1%80%D0%BE%D1%82%D0%BE%D1%82%D0%B8%D0%BF%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Прототипное программирование">прототипное</a>),
<a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Обобщённое программирование">обобщённое</a>,
<a href="/wiki/%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Функциональное программирование">функциональное</a>,
<a href="/wiki/%D0%98%D0%BC%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Императивное программирование">императивное</a>,
<a href="/wiki/%D0%90%D1%81%D0%BF%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Аспектно-ориентированное программирование">аспектно-ориентированное</a>,
</p>
<a href="/wiki/%D0%A1%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D0%B9%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Событийно-ориентированное программирование">событийно-ориентированное</a> программирование</div></td>
</tr>
<tr>
<th class="plainlist">Тип исполнения</th>
<td class="plainlist">
интерпретация, трансляция в <a href="/wiki/%D0%91%D0%B0%D0%B9%D1%82-%D0%BA%D0%BE%D0%B4" title="Байт-код">байт-код</a> Java<sup id="cite_ref-1" class="reference"><a href="#cite_note-1">&#91;1&#93;</a></sup>, JIT в машинные коды<sup id="cite_ref-2" class="reference"><a href="#cite_note-2">&#91;2&#93;</a></sup></td>
</tr>
<tr>
<th class="plainlist">Появился в</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P571"><a href="/wiki/1995" class="mw-redirect" title="1995">1995</a></span></td>
</tr>
<tr>
<th class="plainlist">Автор</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P287"><a href="/wiki/%D0%AD%D0%B9%D1%85,_%D0%91%D1%80%D0%B5%D0%BD%D0%B4%D0%B0%D0%BD" title="Эйх, Брендан">Брендан Эйх</a></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A0%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8_%D1%84%D0%B0%D0%B9%D0%BB%D0%B0" title="Расширение имени файла">Расширение</a> файлов</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P1195"><code>.js</code></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D1%82%D0%B0%D0%B4%D0%B8%D0%B8_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Стадии разработки программного обеспечения">Выпуск</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P348"><span class="no-wikidata" data-wikidata-property-id="P348">ECMAScript 2019<sup id="cite_ref-3" class="reference"><a href="#cite_note-3">&#91;Спецификация 1&#93;</a></sup></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Система типов">Система типов</a></th>
<td class="plainlist">
<a href="/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Динамическая типизация">динамическая</a>, <a href="/wiki/%D0%A3%D1%82%D0%B8%D0%BD%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Утиная типизация">утиная</a></td>
</tr>
<tr>
<th class="plainlist">Основные реализации</th>
<td class="plainlist">
<a href="/wiki/SpiderMonkey" title="SpiderMonkey">SpiderMonkey</a>, <a href="/wiki/Rhino" title="Rhino">Rhino</a>, <a href="/w/index.php?title=KJS_(JavaScript)&amp;action=edit&amp;redlink=1" class="new" title="KJS (JavaScript) (страница отсутствует)">KJS (JavaScript)</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/KDE%27s_JavaScript_engine" class="extiw" title="en:KDE&#39;s JavaScript engine"><span title="Версия статьи «KJS (JavaScript)» на английском языке">англ.</span></a>)</span>, <a href="/wiki/WebKit#JavaScriptCore" title="WebKit">JavaScriptCore</a>, <a href="/wiki/V8_(%D0%B4%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA_JavaScript)" title="V8 (движок JavaScript)">V8</a></td>
</tr>
<tr>
<th class="plainlist">Испытал влияние</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P737"><a href="/wiki/Lua" title="Lua">Lua</a>, <a href="/wiki/Self" title="Self">Self</a><sup id="cite_ref-speaking_js_influences_4-0" class="reference"><a href="#cite_note-speaking_js_influences-4">&#91;3&#93;</a></sup>, <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a>, <a href="/wiki/Scheme" title="Scheme">Scheme</a><sup id="cite_ref-speaking_js_influences_4-1" class="reference"><a href="#cite_note-speaking_js_influences-4">&#91;3&#93;</a></sup>, <a href="/wiki/Perl" title="Perl">Perl</a><sup id="cite_ref-speaking_js_influences_4-2" class="reference"><a href="#cite_note-speaking_js_influences-4">&#91;3&#93;</a></sup>, <a href="/wiki/Python" title="Python">Python</a>, <a href="/wiki/Java" title="Java">Java</a><sup id="cite_ref-speaking_js_influences_4-3" class="reference"><a href="#cite_note-speaking_js_influences-4">&#91;3&#93;</a></sup>, <a href="/wiki/AWK" title="AWK">AWK</a><sup id="cite_ref-speaking_js_influences_4-4" class="reference"><a href="#cite_note-speaking_js_influences-4">&#91;3&#93;</a></sup>, <a href="/wiki/HyperTalk" title="HyperTalk">HyperTalk</a><sup id="cite_ref-speaking_js_influences_4-5" class="reference"><a href="#cite_note-speaking_js_influences-4">&#91;3&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist">Повлиял на</th>
<td class="plainlist">
<a href="/wiki/Objective-J" title="Objective-J">Objective-J</a>, <a href="/wiki/Dart" title="Dart">Dart</a>, <a href="/wiki/TypeScript" title="TypeScript">TypeScript</a></td>
</tr><tr><td colspan="2" class="infobox-below" style="background:#dcebff;;"><span class="wikidata-claim" data-wikidata-property-id="P373" data-wikidata-claim-id="q2005$875DC3DA-72C3-4862-A3DB-E897E2444619"><span class="wikidata-snak wikidata-main-snak"><a href="https://commons.wikimedia.org/wiki/Category:JavaScript" title="commons:Category:JavaScript"><img alt="Commons-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/15px-Commons-logo.svg.png" decoding="async" width="15" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/23px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></a>&#160;<a href="https://commons.wikimedia.org/wiki/Category:JavaScript" class="extiw" title="commons:Category:JavaScript">Медиафайлы на Викискладе</a></span></span></td></tr>
</tbody></table>
<table class="infobox" style="" data-name="Файловый формат"><tbody><tr><th colspan="2" class="infobox-above" style="background:#cfe3ff;">JavaScript</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span class="wikidata-claim" data-wikidata-property-id="P154" data-wikidata-claim-id="Q2005$ED865DAF-FAA6-40FF-B822-EA0D01D85F07"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Unofficial_JavaScript_logo_2.svg" class="image"><img alt="Unofficial JavaScript logo 2.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/80px-Unofficial_JavaScript_logo_2.svg.png" decoding="async" width="80" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/120px-Unofficial_JavaScript_logo_2.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/160px-Unofficial_JavaScript_logo_2.svg.png 2x" data-file-width="512" data-file-height="512" /></a></span></span> </td></tr>
<tr>
<td colspan="2" class="plainlist" style="text-align:center;">
<span class="no-wikidata" data-wikidata-property-id="P2910"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Crystal_source.svg" class="image"><img alt="Crystal source.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Crystal_source.svg/80px-Crystal_source.svg.png" decoding="async" width="80" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Crystal_source.svg/120px-Crystal_source.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Crystal_source.svg/160px-Crystal_source.svg.png 2x" data-file-width="64" data-file-height="64" /></a></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/MIME" title="MIME">MIME</a>-тип</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P1163">text/javascript, application/javascript<sup id="cite_ref-rfc4329_5-0" class="reference"><a href="#cite_note-rfc4329-5">&#91;4&#93;</a></sup><sup id="cite_ref-HTML4.01script_group=Спецификация_6-0" class="reference"><a href="#cite_note-HTML4.01script_group=Спецификация-6">&#91;5&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist">Тип формата</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P31"><a href="/wiki/%D0%A2%D0%B5%D0%BA%D1%81%D1%82%D0%BE%D0%B2%D1%8B%D0%B9_%D1%84%D0%B0%D0%B9%D0%BB" title="Текстовый файл">текстовый файл</a> с <a href="/wiki/%D0%98%D1%81%D1%85%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" title="Исходный код">исходным кодом</a></span></td>
</tr>
<tr>
<th class="plainlist">Расширен из</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P144"><a href="/wiki/ECMAScript" title="ECMAScript">ECMAScript</a></span></td>
</tr><tr><td colspan="2" class="infobox-below" style="background:#dcebff;;"><span class="wikidata-claim" data-wikidata-property-id="P373" data-wikidata-claim-id="q2005$875DC3DA-72C3-4862-A3DB-E897E2444619"><span class="wikidata-snak wikidata-main-snak"><a href="https://commons.wikimedia.org/wiki/Category:JavaScript" title="commons:Category:JavaScript"><img alt="Commons-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/15px-Commons-logo.svg.png" decoding="async" width="15" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/23px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></a>&#160;<a href="https://commons.wikimedia.org/wiki/Category:JavaScript" class="extiw" title="commons:Category:JavaScript">Медиафайлы на Викискладе</a></span></span></td></tr>
</tbody></table>
<p><b>JavaScript</b> (<span class="nowrap"><span class="IPA"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка">/</a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="/ˈ/ primary stress follows" style="border-bottom:1px dotted">ˈ</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="/dʒ/ &#39;j&#39; in &#39;jam&#39;" style="border-bottom:1px dotted">dʒ</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="/ɑː/ &#39;a&#39; in &#39;father&#39;" style="border-bottom:1px dotted">ɑː</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="&#39;v&#39; in &#39;vie&#39;" style="border-bottom:1px dotted">v</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="/ɑː/ &#39;a&#39; in &#39;father&#39;" style="border-bottom:1px dotted">ɑː</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="/ˌ/ secondary stress follows" style="border-bottom:1px dotted">ˌ</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="&#39;s&#39; in &#39;sigh&#39;" style="border-bottom:1px dotted">s</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="&#39;k&#39; in &#39;kind&#39;" style="border-bottom:1px dotted">k</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="&#39;r&#39; in &#39;rye&#39;" style="border-bottom:1px dotted">r</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="/ɪ/ &#39;i&#39; in &#39;kit&#39;" style="border-bottom:1px dotted">ɪ</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="&#39;p&#39; in &#39;pie&#39;" style="border-bottom:1px dotted">p</span></a></span><span class="IPA nopopups"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка"><span title="&#39;t&#39; in &#39;tie&#39;" style="border-bottom:1px dotted">t</span></a></span><span class="IPA"><a href="/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%9C%D0%A4%D0%90_%D0%B4%D0%BB%D1%8F_%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%BE%D0%B3%D0%BE_%D1%8F%D0%B7%D1%8B%D0%BA%D0%B0" title="Таблица МФА для английского языка">/</a></span></span>; аббр. <b>JS</b> <span class="IPA"><a href="/wiki/%D0%9C%D0%B5%D0%B6%D0%B4%D1%83%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D1%84%D0%BE%D0%BD%D0%B5%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BB%D1%84%D0%B0%D0%B2%D0%B8%D1%82" title="Международный фонетический алфавит">/ˈdʒeɪ.ɛs./</a></span>)&#160;— <a href="/wiki/%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BF%D0%B0%D1%80%D0%B0%D0%B4%D0%B8%D0%B3%D0%BC%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Мультипарадигменное программирование">мультипарадигменный</a> <a href="/wiki/%D0%AF%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Язык программирования">язык программирования</a>. Поддерживает <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">объектно-ориентированный</a>, <a href="/wiki/%D0%98%D0%BC%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Императивное программирование">императивный</a> и <a href="/wiki/%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Функциональное программирование">функциональный</a> стили. Является реализацией стандарта <a href="/wiki/ECMAScript" title="ECMAScript">ECMAScript</a> (стандарт ECMA-262<sup id="cite_ref-ECMA-262_7-0" class="reference"><a href="#cite_note-ECMA-262-7">&#91;6&#93;</a></sup>).
</p><p>JavaScript обычно используется как встраиваемый язык для программного доступа к объектам <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0" title="Компьютерная программа">приложений</a>. Наиболее широкое применение находит в <a href="/wiki/%D0%91%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80" title="Браузер">браузерах</a> как язык сценариев для придания <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B0%D0%BA%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Интерактивность">интерактивности</a> <a href="/wiki/%D0%92%D0%B5%D0%B1-%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0" title="Веб-страница">веб-страницам</a><sup id="cite_ref-8" class="reference"><a href="#cite_note-8">&#91;7&#93;</a></sup>.
</p><p>Основные архитектурные черты: <a href="/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Динамическая типизация">динамическая типизация</a>, <a href="/wiki/%D0%A1%D0%BB%D0%B0%D0%B1%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" class="mw-redirect" title="Слабая типизация">слабая типизация</a>, <a href="/wiki/%D0%A1%D0%B1%D0%BE%D1%80%D0%BA%D0%B0_%D0%BC%D1%83%D1%81%D0%BE%D1%80%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Сборка мусора (программирование)">автоматическое управление памятью</a>, <a href="/wiki/%D0%9F%D1%80%D0%BE%D1%82%D0%BE%D1%82%D0%B8%D0%BF%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Прототипное программирование">прототипное программирование</a>, функции как <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82_%D0%BF%D0%B5%D1%80%D0%B2%D0%BE%D0%B3%D0%BE_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0" title="Объект первого класса">объекты первого класса</a>.
</p><p>На JavaScript оказали влияние многие языки, при разработке была цель сделать язык похожим на Java. Языком JavaScript не владеет какая-либо компания или организация, что отличает его от ряда языков программирования, используемых в веб-разработке<sup id="cite_ref-9" class="reference"><a href="#cite_note-9">&#91;~ 1&#93;</a></sup><sup id="cite_ref-10" class="reference"><a href="#cite_note-10">&#91;8&#93;</a></sup>.
</p><p>Название «JavaScript» является зарегистрированным <a href="/wiki/%D0%A2%D0%BE%D0%B2%D0%B0%D1%80%D0%BD%D1%8B%D0%B9_%D0%B7%D0%BD%D0%B0%D0%BA" title="Товарный знак">товарным знаком</a> корпорации <a href="/wiki/Oracle" title="Oracle">Oracle</a> в США<sup id="cite_ref-11" class="reference"><a href="#cite_note-11">&#91;9&#93;</a></sup>.
</p>
<div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading">Содержание</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>

</div>

<h2><span id=".D0.98.D1.81.D1.82.D0.BE.D1.80.D0.B8.D1.8F"></span><span class="mw-headline" id="История">История</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=1" class="mw-editsection-visualeditor" title="Редактировать раздел «История»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=1" title="Редактировать раздел «История»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<h3><span id=".D0.9F.D1.80.D0.B5.D0.B4.D0.BF.D0.BE.D1.81.D1.8B.D0.BB.D0.BA.D0.B8"></span><span class="mw-headline" id="Предпосылки">Предпосылки</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=2" class="mw-editsection-visualeditor" title="Редактировать раздел «Предпосылки»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=2" title="Редактировать раздел «Предпосылки»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В <a href="/wiki/1992_%D0%B3%D0%BE%D0%B4" title="1992 год">1992 году</a> компания <span lang="en" style="font-style:italic;">Nombas</span> (впоследствии приобретённая <span class="iw plainlinks" data-title="Openwave" data-lang="en" data-lang-name="англ."><a href="/w/index.php?title=Openwave&amp;action=edit&amp;redlink=1" class="new" title="Openwave (страница отсутствует)">Openwave</a><sup class="iw&#95;_note noprint" style="font-style:normal; font-weight:normal;"><a href="https://en.wikipedia.org/wiki/Openwave" class="extiw" title="en:Openwave"><span class="iw&#95;_tooltip" title="Версия статьи «Openwave» на английском языке">[en]</span></a></sup></span>) начала разработку встраиваемого скриптового языка <span lang="en" style="font-style:italic;">Cmm</span> (Си-минус-минус), который, по замыслу разработчиков, должен был стать достаточно мощным, чтобы заменить <a href="/wiki/%D0%9C%D0%B0%D0%BA%D1%80%D0%BE%D1%81" class="mw-redirect" title="Макрос">макросы</a>, сохраняя при этом схожесть с Си, чтобы разработчикам не составляло труда изучить его<sup id="cite_ref-nombasHistory_12-0" class="reference"><a href="#cite_note-nombasHistory-12">&#91;10&#93;</a></sup>. Главным отличием от Си была работа с памятью. В новом языке всё управление памятью осуществлялось автоматически: не было необходимости создавать <a href="/wiki/%D0%91%D1%83%D1%84%D0%B5%D1%80_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Буфер (информатика)">буфера</a>, объявлять переменные, осуществлять преобразование типов. В остальном языки сильно походили друг на друга: в частности, <span lang="en" style="font-style:italic;">Cmm</span> поддерживал стандартные функции и операторы Си<sup id="cite_ref-13" class="reference"><a href="#cite_note-13">&#91;11&#93;</a></sup>. <span lang="en" style="font-style:italic;">Cmm</span> был переименован в <span lang="en" style="font-style:italic;">ScriptEase</span>, поскольку исходное название звучало слишком негативно, а упоминание в нём Си «отпугивало» людей<sup id="cite_ref-nombasHistory_12-1" class="reference"><a href="#cite_note-nombasHistory-12">&#91;10&#93;</a></sup><sup id="cite_ref-14" class="reference"><a href="#cite_note-14">&#91;12&#93;</a></sup>.
На основе этого языка был создан <a href="/wiki/%D0%9F%D1%80%D0%BE%D0%BF%D1%80%D0%B8%D0%B5%D1%82%D0%B0%D1%80%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Проприетарное программное обеспечение">проприетарный продукт</a> <span lang="en" style="font-style:italic;">CEnvi</span>. В конце ноября <a href="/wiki/1995_%D0%B3%D0%BE%D0%B4" title="1995 год">1995 года</a> <span lang="en" style="font-style:italic;">Nombas</span> разработала версию <span lang="en" style="font-style:italic;">CEnvi</span>, внедряемую в веб-страницы. Страницы, которые можно было изменять с помощью скриптового языка, получили название <span lang="en" style="font-style:italic;">Espresso Pages</span>&#160;— они демонстрировали использование скриптового языка для создания игры, проверки пользовательского ввода в формы и создания анимации. <span lang="en" style="font-style:italic;">Espresso Pages</span> позиционировались как <a href="/wiki/%D0%94%D0%B5%D0%BC%D0%BE%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%8F" title="Демоверсия">демоверсия</a>, призванная помочь представить, что случится, если в браузер будет внедрён язык <span lang="en" style="font-style:italic;">Cmm</span>. Работали они только в 16-битовом <a href="/wiki/Netscape_Navigator" title="Netscape Navigator">Netscape Navigator</a> под управлением Windows<sup id="cite_ref-15" class="reference"><a href="#cite_note-15">&#91;13&#93;</a></sup>.
</p>
<h3><span class="mw-headline" id="JavaScript">JavaScript</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=3" class="mw-editsection-visualeditor" title="Редактировать раздел «JavaScript»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=3" title="Редактировать раздел «JavaScript»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<div class="thumb tright"><div class="thumbinner" style="width:127px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:BEich.jpg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/BEich.jpg/125px-BEich.jpg" decoding="async" width="125" height="158" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/09/BEich.jpg/188px-BEich.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/0/09/BEich.jpg 2x" data-file-width="249" data-file-height="314" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:BEich.jpg" class="internal" title="Увеличить"></a></div>Брендан Эйх<sup id="cite_ref-16" class="reference"><a href="#cite_note-16">&#91;14&#93;</a></sup></div></div></div>
<p>Перед <a href="/wiki/%D0%AD%D0%B9%D1%85,_%D0%91%D1%80%D0%B5%D0%BD%D0%B4%D0%B0%D0%BD" title="Эйх, Брендан">Бренданом Эйхом</a>, нанятым в компанию <a href="/wiki/Netscape_Communications" title="Netscape Communications">Netscape</a> 4 апреля <a href="/wiki/1995_%D0%B3%D0%BE%D0%B4" title="1995 год">1995 года</a><sup id="cite_ref-cwHistory_17-0" class="reference"><a href="#cite_note-cwHistory-17">&#91;15&#93;</a></sup>, была поставлена задача внедрить язык программирования <a href="/wiki/Scheme" title="Scheme">Scheme</a> или что-то похожее в браузер Netscape. Поскольку требования были размыты, Эйха перевели в группу, ответственную за серверные продукты, где он проработал месяц, занимаясь улучшением протокола <a href="/wiki/HTTP" title="HTTP">HTTP</a><sup id="cite_ref-cwHistory_17-1" class="reference"><a href="#cite_note-cwHistory-17">&#91;15&#93;</a></sup>. В мае разработчик был переброшен обратно, в команду, занимающуюся клиентской частью (браузером), где он немедленно начал разрабатывать концепцию нового языка программирования. Менеджмент разработки браузера, включая Тома Пакина (Tom Paquin), <a href="/w/index.php?title=%D0%A2%D0%BE%D0%B9,_%D0%9C%D0%B8%D1%85%D0%B0%D1%8D%D0%BB%D1%8C&amp;action=edit&amp;redlink=1" class="new" title="Той, Михаэль (страница отсутствует)">Михаэля Тоя</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Michael_Toy" class="extiw" title="en:Michael Toy"><span title="Версия статьи «Той, Михаэль» на английском языке">англ.</span></a>)</span>, Рика Шелла (Rick Schell), был убеждён, что Netscape должен поддерживать язык программирования, встраиваемый в <a href="/wiki/HTML" title="HTML">HTML</a>-код страницы<sup id="cite_ref-eichPopularity_18-0" class="reference"><a href="#cite_note-eichPopularity-18">&#91;16&#93;</a></sup>.
</p>
<div class="thumb tleft"><div class="thumbinner" style="width:127px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Marc_Andreessen.jpg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/75/Marc_Andreessen.jpg/125px-Marc_Andreessen.jpg" decoding="async" width="125" height="138" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/75/Marc_Andreessen.jpg/188px-Marc_Andreessen.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/75/Marc_Andreessen.jpg/250px-Marc_Andreessen.jpg 2x" data-file-width="317" data-file-height="350" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Marc_Andreessen.jpg" class="internal" title="Увеличить"></a></div>Марк Андрессен</div></div></div>
<div class="thumb tright"><div class="thumbinner" style="width:127px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Bill_Joy_at_World_Economic_Forum_(Davos),_2003-01_(cropped).jpg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bill_Joy_at_World_Economic_Forum_%28Davos%29%2C_2003-01_%28cropped%29.jpg/125px-Bill_Joy_at_World_Economic_Forum_%28Davos%29%2C_2003-01_%28cropped%29.jpg" decoding="async" width="125" height="156" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bill_Joy_at_World_Economic_Forum_%28Davos%29%2C_2003-01_%28cropped%29.jpg/188px-Bill_Joy_at_World_Economic_Forum_%28Davos%29%2C_2003-01_%28cropped%29.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bill_Joy_at_World_Economic_Forum_%28Davos%29%2C_2003-01_%28cropped%29.jpg/250px-Bill_Joy_at_World_Economic_Forum_%28Davos%29%2C_2003-01_%28cropped%29.jpg 2x" data-file-width="415" data-file-height="519" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Bill_Joy_at_World_Economic_Forum_(Davos),_2003-01_(cropped).jpg" class="internal" title="Увеличить"></a></div>Билл Джой</div></div></div>
<p>Помимо Брендана Эйха, в разработке участвовали<sup id="cite_ref-cwHistory_17-2" class="reference"><a href="#cite_note-cwHistory-17">&#91;15&#93;</a></sup> сооснователь<sup id="cite_ref-19" class="reference"><a href="#cite_note-19">&#91;17&#93;</a></sup> <a href="/wiki/Netscape_Communications" title="Netscape Communications">Netscape Communications</a> <a href="/wiki/%D0%90%D0%BD%D0%B4%D1%80%D0%B5%D1%81%D1%81%D0%B5%D0%BD,_%D0%9C%D0%B0%D1%80%D0%BA" class="mw-redirect" title="Андрессен, Марк">Марк Андрессен</a> и сооснователь <a href="/wiki/Sun_Microsystems" title="Sun Microsystems">Sun Microsystems</a> <a href="/wiki/%D0%94%D0%B6%D0%BE%D0%B9,_%D0%91%D0%B8%D0%BB%D0%BB" title="Джой, Билл">Билл Джой</a>: чтобы успеть закончить работы над языком к релизу браузера, компании заключили соглашение о сотрудничестве в разработке<sup id="cite_ref-zakasHistory_20-0" class="reference"><a href="#cite_note-zakasHistory-20">&#91;18&#93;</a></sup>. Они ставили перед собой цель обеспечить «язык для склеивания» составляющих частей веб-ресурса: изображений, плагинов, Java-апплетов, который был бы удобен для веб-дизайнеров и программистов, не обладающих высокой квалификацией<sup id="cite_ref-cwHistory_17-3" class="reference"><a href="#cite_note-cwHistory-17">&#91;15&#93;</a></sup>.
</p><p>Первоначально язык назывался Mocha<sup id="cite_ref-21" class="reference"><a href="#cite_note-21">&#91;19&#93;</a></sup><sup id="cite_ref-22" class="reference"><a href="#cite_note-22">&#91;20&#93;</a></sup><sup id="cite_ref-Phrasebook_23-0" class="reference"><a href="#cite_note-Phrasebook-23">&#91;21&#93;</a></sup>, затем он был переименован в LiveScript<sup id="cite_ref-Phrasebook_23-1" class="reference"><a href="#cite_note-Phrasebook-23">&#91;21&#93;</a></sup><sup id="cite_ref-24" class="reference"><a href="#cite_note-24">&#91;22&#93;</a></sup> и предназначался как для программирования на стороне клиента, так и для программирования на стороне сервера (там он должен был называться LiveWire)<sup id="cite_ref-zakasHistory_20-1" class="reference"><a href="#cite_note-zakasHistory-20">&#91;18&#93;</a></sup>. На синтаксис оказали влияние языки <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a> и <a href="/wiki/Java" title="Java">Java</a>, и, поскольку Java в то время было <a href="/wiki/%D0%9C%D0%BE%D0%B4%D0%BD%D1%8B%D0%B5_%D1%81%D0%BB%D0%BE%D0%B2%D0%B0" title="Модные слова">модным словом</a><sup id="cite_ref-cwHistory_17-4" class="reference"><a href="#cite_note-cwHistory-17">&#91;15&#93;</a></sup><sup id="cite_ref-zakasHistory_20-2" class="reference"><a href="#cite_note-zakasHistory-20">&#91;18&#93;</a></sup>, 4 декабря 1995 года LiveScript переименовали в JavaScript<sup id="cite_ref-25" class="reference"><a href="#cite_note-25">&#91;23&#93;</a></sup>, получив соответствующую лицензию у <a href="/wiki/Sun_Microsystems" title="Sun Microsystems">Sun</a>. Анонс JavaScript со стороны представителей Netscape и Sun состоялся накануне выпуска второй <a href="/wiki/%D0%91%D0%B5%D1%82%D0%B0-%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Бета-тестирование">бета-версии</a> Netscape Navigator<sup id="cite_ref-cwHistory_17-5" class="reference"><a href="#cite_note-cwHistory-17">&#91;15&#93;</a></sup>. В нём декларируется, что 28 лидирующих ИТ-компаний выразили намерение использовать в своих будущих продуктах JavaScript как объектный скриптовый язык с открытым стандартом<sup id="cite_ref-26" class="reference"><a href="#cite_note-26">&#91;24&#93;</a></sup>.
</p><p>В <a href="/wiki/1996_%D0%B3%D0%BE%D0%B4" title="1996 год">1996 году</a> компания <a href="/wiki/Microsoft" title="Microsoft">Microsoft</a> выпустила аналог языка JavaScript, названный <a href="/wiki/Microsoft_JScript" class="mw-redirect" title="Microsoft JScript">JScript</a>. Анонсирован этот язык был 18 июля 1996 года<sup id="cite_ref-27" class="reference"><a href="#cite_note-27">&#91;25&#93;</a></sup>. Первым браузером, поддерживающим эту реализацию, был <a href="/wiki/Internet_Explorer" title="Internet Explorer">Internet Explorer</a> 3.0.
</p><p>По инициативе компании Netscape<sup id="cite_ref-28" class="reference"><a href="#cite_note-28">&#91;26&#93;</a></sup><sup id="cite_ref-29" class="reference"><a href="#cite_note-29">&#91;27&#93;</a></sup> была проведена стандартизация языка ассоциацией <a href="/wiki/ECMA_International" class="mw-redirect" title="ECMA International">ECMA</a>. Стандартизированная версия имеет название <a href="/wiki/ECMAScript" title="ECMAScript">ECMAScript</a>, описывается стандартом <a href="/wiki/ECMA-262" class="mw-redirect" title="ECMA-262">ECMA-262</a>. Первой версии спецификации соответствовал JavaScript версии 1.1, а также языки JScript и <a href="/w/index.php?title=ScriptEasy&amp;action=edit&amp;redlink=1" class="new" title="ScriptEasy (страница отсутствует)">ScriptEasy</a><sup id="cite_ref-nombasHistory_12-2" class="reference"><a href="#cite_note-nombasHistory-12">&#91;10&#93;</a></sup><sup id="cite_ref-zakasHistory_20-3" class="reference"><a href="#cite_note-zakasHistory-20">&#91;18&#93;</a></sup>.
</p>
<h3><span id=".D0.9F.D0.BE.D0.BF.D1.83.D0.BB.D1.8F.D1.80.D0.BD.D0.BE.D1.81.D1.82.D1.8C"></span><span class="mw-headline" id="Популярность">Популярность</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=4" class="mw-editsection-visualeditor" title="Редактировать раздел «Популярность»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=4" title="Редактировать раздел «Популярность»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В статье «The World’s Most Misunderstood Programming Language Has Become the World’s Most Popular Programming Language»<sup id="cite_ref-mostMisunderstood_30-0" class="reference"><a href="#cite_note-mostMisunderstood-30">&#91;28&#93;</a></sup> (с&#160;<span style="font-style:normal"><a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a></span><span class="nowrap">&#8201;—</span>&#8201;«Самый неправильно понятый язык программирования в мире стал самым популярным в мире языком программирования») <a href="/wiki/%D0%9A%D1%80%D0%BE%D0%BA%D1%84%D0%BE%D1%80%D0%B4,_%D0%94%D1%83%D0%B3%D0%BB%D0%B0%D1%81" title="Крокфорд, Дуглас">Дуглас Крокфорд</a> утверждает, что лидирующую позицию JavaScript занял в связи с развитием <a href="/wiki/AJAX" title="AJAX">AJAX</a>, поскольку браузер стал превалирующей системой доставки приложений. Он также констатирует растущую популярность JavaScript, то, что этот язык встраивается в приложения, отмечает значимость языка.
</p><p>Согласно <a href="/wiki/TIOBE_Index" class="mw-redirect" title="TIOBE Index">TIOBE Index</a>, базирующемуся на данных поисковых систем <a href="/wiki/Google_(%D0%BF%D0%BE%D0%B8%D1%81%D0%BA%D0%BE%D0%B2%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0)" title="Google (поисковая система)">Google</a>, <a href="/wiki/MSN" title="MSN">MSN</a>, <a href="/wiki/Yahoo!" title="Yahoo!">Yahoo!</a>, <a href="/wiki/%D0%92%D0%B8%D0%BA%D0%B8%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F" title="Википедия">Википедия</a> и <a href="/wiki/YouTube" title="YouTube">YouTube</a>, в апреле 2015 года JavaScript находился на 6-м месте (год назад&#160;— на 9-м)<sup id="cite_ref-31" class="reference"><a href="#cite_note-31">&#91;29&#93;</a></sup>.
</p><p>По данным <a href="/w/index.php?title=Black_Duck_Software&amp;action=edit&amp;redlink=1" class="new" title="Black Duck Software (страница отсутствует)">Black Duck Software</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Black_Duck_Software" class="extiw" title="en:Black Duck Software"><span title="Версия статьи «Black Duck Software» на английском языке">англ.</span></a>)</span><sup id="cite_ref-32" class="reference"><a href="#cite_note-32">&#91;30&#93;</a></sup>, в разработке <a href="/wiki/%D0%9E%D1%82%D0%BA%D1%80%D1%8B%D1%82%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Открытое программное обеспечение">открытого программного обеспечения</a> доля использования JavaScript росла. 36&#160;% проектов, выпуски которых состоялись с августа 2008 по август 2009&#160;гг., включают JavaScript, наиболее часто используемый язык программирования с быстрорастущей популярностью. 80&#160;% открытого программного обеспечения использует Си, C++, Java, <a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%BB%D0%BE%D1%87%D0%BA%D0%B0_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%D0%B9_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B" title="Оболочка операционной системы">Shell</a> и JavaScript. При этом JavaScript&#160;— единственный из этих языков, чья доля использования увеличилась (более чем на 2 процента, если считать в строках кода)<sup id="cite_ref-33" class="reference"><a href="#cite_note-33">&#91;31&#93;</a></sup>.
</p><p>JavaScript является самым популярным языком программирования, используемым для разработки веб-приложений <a href="/w/index.php?title=%D0%A1%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D0%B0_%D0%BA%D0%BB%D0%B8%D0%B5%D0%BD%D1%82%D0%B0&amp;action=edit&amp;redlink=1" class="new" title="Сторона клиента (страница отсутствует)">на стороне клиента</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Client-side" class="extiw" title="en:Client-side"><span title="Версия статьи «Сторона клиента» на английском языке">англ.</span></a>)</span><sup id="cite_ref-34" class="reference"><a href="#cite_note-34">&#91;32&#93;</a></sup><sup id="cite_ref-35" class="reference"><a href="#cite_note-35">&#91;33&#93;</a></sup>.
</p>
<h2><span id=".D0.92.D0.BE.D0.B7.D0.BC.D0.BE.D0.B6.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0"></span><span class="mw-headline" id="Возможности_языка">Возможности языка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=5" class="mw-editsection-visualeditor" title="Редактировать раздел «Возможности языка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=5" title="Редактировать раздел «Возможности языка»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>JavaScript является <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">объектно-ориентированным</a> языком, но используемое в языке <a href="/wiki/%D0%9F%D1%80%D0%BE%D1%82%D0%BE%D1%82%D0%B8%D0%BF%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Прототипное программирование">прототипирование</a><sup id="cite_ref-36" class="reference"><a href="#cite_note-36">&#91;34&#93;</a></sup><sup id="cite_ref-37" class="reference"><a href="#cite_note-37">&#91;35&#93;</a></sup> обуславливает отличия в работе с объектами по сравнению с традиционными класс-ориентированными языками. Кроме того, JavaScript имеет ряд свойств, присущих <a href="/wiki/%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Функциональное программирование">функциональным языкам</a>&#160;— функции как <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82_%D0%BF%D0%B5%D1%80%D0%B2%D0%BE%D0%B3%D0%BE_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0" title="Объект первого класса">объекты первого класса</a>, объекты как списки, <a href="/wiki/%D0%9A%D0%B0%D1%80%D1%80%D0%B8%D0%BD%D0%B3" class="mw-redirect" title="Карринг">карринг</a>, <a href="/wiki/%D0%90%D0%BD%D0%BE%D0%BD%D0%B8%D0%BC%D0%BD%D1%8B%D0%B5_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B8" class="mw-redirect" title="Анонимные функции">анонимные функции</a>, <a href="/wiki/%D0%97%D0%B0%D0%BC%D1%8B%D0%BA%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Замыкание (программирование)">замыкания</a><sup id="cite_ref-38" class="reference"><a href="#cite_note-38">&#91;36&#93;</a></sup>&#160;— что придаёт языку дополнительную гибкость.
</p><p>Несмотря на схожий с Си синтаксис, JavaScript по сравнению с языком <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a> имеет коренные отличия:
</p>
<ul><li><a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Объект (программирование)">объекты</a> с возможностью <a href="/wiki/%D0%98%D0%BD%D1%82%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%86%D0%B8%D1%8F_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Интроспекция (программирование)">интроспекции</a>;</li>
<li>функции как <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82_%D0%BF%D0%B5%D1%80%D0%B2%D0%BE%D0%B3%D0%BE_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0" title="Объект первого класса">объекты первого класса</a>;</li>
<li>автоматическое <a href="/wiki/%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" class="mw-redirect" title="Приведение типов">приведение типов</a>;</li>
<li>автоматическая <a href="/wiki/%D0%A1%D0%B1%D0%BE%D1%80%D0%BA%D0%B0_%D0%BC%D1%83%D1%81%D0%BE%D1%80%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Сборка мусора (программирование)">сборка мусора</a>;</li>
<li><a href="/wiki/%D0%90%D0%BD%D0%BE%D0%BD%D0%B8%D0%BC%D0%BD%D1%8B%D0%B5_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B8" class="mw-redirect" title="Анонимные функции">анонимные функции</a>.</li></ul>
<p>В языке отсутствуют такие полезные вещи<sup id="cite_ref-39" class="reference"><a href="#cite_note-39">&#91;37&#93;</a></sup>, как:
</p>
<ul><li><a href="/wiki/%D0%A1%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%D0%BD%D0%B0%D1%8F_%D0%B1%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE%D1%82%D0%B5%D0%BA%D0%B0" title="Стандартная библиотека">стандартная библиотека</a>: в частности, отсутствует <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F_%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9" class="mw-redirect" title="Интерфейс программирования приложений">интерфейс программирования приложений</a> по работе с файловой системой, управлению потоками ввода-вывода, базовых типов для <a href="/wiki/%D0%94%D0%B2%D0%BE%D0%B8%D1%87%D0%BD%D1%8B%D0%B9_%D1%84%D0%B0%D0%B9%D0%BB" title="Двоичный файл">бинарных данных</a>;</li>
<li>стандартные <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81" title="Интерфейс">интерфейсы</a> к <a href="/wiki/%D0%92%D0%B5%D0%B1-%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80" title="Веб-сервер">веб-серверам</a> и <a href="/wiki/%D0%91%D0%B0%D0%B7%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="База данных">базам данных</a>;</li>
<li><a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F_%D0%BF%D0%B0%D0%BA%D0%B5%D1%82%D0%B0%D0%BC%D0%B8" title="Система управления пакетами">система управления пакетами</a><sup id="cite_ref-40" class="reference"><a href="#cite_note-40">&#91;~ 2&#93;</a></sup>, которая бы отслеживала зависимости и автоматически устанавливала их.</li></ul>
<h2><span id=".D0.A1.D0.B5.D0.BC.D0.B0.D0.BD.D1.82.D0.B8.D0.BA.D0.B0_.D0.B8_.D1.81.D0.B8.D0.BD.D1.82.D0.B0.D0.BA.D1.81.D0.B8.D1.81"></span><span class="mw-headline" id="Семантика_и_синтаксис">Семантика и синтаксис</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=6" class="mw-editsection-visualeditor" title="Редактировать раздел «Семантика и синтаксис»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=6" title="Редактировать раздел «Семантика и синтаксис»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p><a href="/wiki/%D0%A1%D0%B8%D0%BD%D1%82%D0%B0%D0%BA%D1%81%D0%B8%D1%81" title="Синтаксис">Синтаксис</a> языка JavaScript во многом напоминает синтаксис Си и <a href="/wiki/Java" title="Java">Java</a>, <a href="/wiki/%D0%A1%D0%B5%D0%BC%D0%B0%D0%BD%D1%82%D0%B8%D0%BA%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Семантика (программирование)">семантически</a> же язык гораздо ближе к <a href="/wiki/Self" title="Self">Self</a>, <a href="/wiki/Smalltalk" title="Smalltalk">Smalltalk</a> или даже <a href="/wiki/%D0%9B%D0%B8%D1%81%D0%BF" title="Лисп">Лиспу</a><sup id="cite_ref-mostMisunderstood_30-1" class="reference"><a href="#cite_note-mostMisunderstood-30">&#91;28&#93;</a></sup><sup id="cite_ref-41" class="reference"><a href="#cite_note-41">&#91;38&#93;</a></sup><sup id="cite_ref-42" class="reference"><a href="#cite_note-42">&#91;Спецификация 2&#93;</a></sup>.
</p><p>В JavaScript:
</p>
<ul><li>все <a href="/wiki/%D0%98%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%D0%BE%D1%80" title="Идентификатор">идентификаторы</a> регистрозависимы,</li>
<li>в названиях переменных можно использовать <a href="/wiki/%D0%91%D1%83%D0%BA%D0%B2%D0%B0" title="Буква">буквы</a>, <a href="/wiki/%D0%9F%D0%BE%D0%B4%D1%87%D1%91%D1%80%D0%BA%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Подчёркивание">подчёркивание</a>, <a href="/wiki/%D0%A1%D0%B8%D0%BC%D0%B2%D0%BE%D0%BB_%D0%B4%D0%BE%D0%BB%D0%BB%D0%B0%D1%80%D0%B0" title="Символ доллара">символ доллара</a>, <a href="/wiki/%D0%90%D1%80%D0%B0%D0%B1%D1%81%D0%BA%D0%B8%D0%B5_%D1%86%D0%B8%D1%84%D1%80%D1%8B" title="Арабские цифры">арабские цифры</a>,</li>
<li>названия переменных не могут начинаться с цифры,</li>
<li>для оформления однострочных <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%B8_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Комментарии (программирование)">комментариев</a> используются <code>//</code>, многострочные и внутристрочные комментарии начинаются с <code>/*</code> и заканчиваются <code>*/</code>.</li></ul>
<h3><span id=".D0.A1.D1.82.D1.80.D1.83.D0.BA.D1.82.D1.83.D1.80.D0.B0_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0"></span><span class="mw-headline" id="Структура_языка">Структура языка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=7" class="mw-editsection-visualeditor" title="Редактировать раздел «Структура языка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=7" title="Редактировать раздел «Структура языка»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Структурно JavaScript можно представить в виде объединения трёх чётко различимых друг от друга частей<sup id="cite_ref-zakasPage3_43-0" class="reference"><a href="#cite_note-zakasPage3-43">&#91;39&#93;</a></sup><sup id="cite_ref-webDef_44-0" class="reference"><a href="#cite_note-webDef-44">&#91;40&#93;</a></sup><sup id="cite_ref-chapmanBOM_45-0" class="reference"><a href="#cite_note-chapmanBOM-45">&#91;41&#93;</a></sup><sup id="cite_ref-46" class="reference"><a href="#cite_note-46">&#91;42&#93;</a></sup>:
</p>
<ul><li>ядро (ECMAScript),</li>
<li>объектная модель браузера (<a href="/w/index.php?title=Browser_Object_Model&amp;action=edit&amp;redlink=1" class="new" title="Browser Object Model (страница отсутствует)">Browser Object Model или BOM</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Browser_Object_Model" class="extiw" title="en:Browser Object Model"><span title="Версия статьи «Browser Object Model» на английском языке">англ.</span></a>)</span>),</li>
<li>объектная модель документа (<a href="/wiki/Document_Object_Model" title="Document Object Model">Document Object Model или DOM</a>).</li></ul>
<p>Если рассматривать JavaScript в отличных от браузера окружениях, то объектная модель браузера и объектная модель документа могут не поддерживаться<sup id="cite_ref-chapmanBOM_45-1" class="reference"><a href="#cite_note-chapmanBOM-45">&#91;41&#93;</a></sup>.
</p><p>Объектную модель документа иногда рассматривают как отдельную от JavaScript сущность<sup id="cite_ref-47" class="reference"><a href="#cite_note-47">&#91;43&#93;</a></sup><sup id="cite_ref-48" class="reference"><a href="#cite_note-48">&#91;44&#93;</a></sup><sup id="cite_ref-49" class="reference"><a href="#cite_note-49">&#91;Спецификация 3&#93;</a></sup>, что согласуется с определением DOM как независимого от языка интерфейса документа<sup id="cite_ref-50" class="reference"><a href="#cite_note-50">&#91;45&#93;</a></sup><sup id="cite_ref-51" class="reference"><a href="#cite_note-51">&#91;~ 3&#93;</a></sup>. В противоположность этому ряд авторов находит BOM и DOM тесно взаимосвязанными<sup id="cite_ref-52" class="reference"><a href="#cite_note-52">&#91;46&#93;</a></sup><sup id="cite_ref-53" class="reference"><a href="#cite_note-53">&#91;47&#93;</a></sup>.
</p>
<h4><span id=".D0.AF.D0.B4.D1.80.D0.BE"></span><span class="mw-headline" id="Ядро">Ядро</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=8" class="mw-editsection-visualeditor" title="Редактировать раздел «Ядро»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=8" title="Редактировать раздел «Ядро»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<div class="hatnote">Основная статья: <b><a href="/wiki/ECMAScript" title="ECMAScript">ECMAScript</a></b></div>
<p>ECMAScript не является браузерным языком и в нём не определяются методы ввода и вывода информации<sup id="cite_ref-zakasPage3_43-1" class="reference"><a href="#cite_note-zakasPage3-43">&#91;39&#93;</a></sup>. Это, скорее, основа для построения скриптовых языков. Спецификация ECMAScript описывает типы данных, инструкции, ключевые и <a href="/wiki/%D0%97%D0%B0%D1%80%D0%B5%D0%B7%D0%B5%D1%80%D0%B2%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D1%81%D0%BB%D0%BE%D0%B2%D0%BE" title="Зарезервированное слово">зарезервированные</a> слова, <a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Оператор (программирование)">операторы</a>, объекты, <a href="/wiki/%D0%A0%D0%B5%D0%B3%D1%83%D0%BB%D1%8F%D1%80%D0%BD%D1%8B%D0%B5_%D0%B2%D1%8B%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F" title="Регулярные выражения">регулярные выражения</a>, не ограничивая авторов производных языков в расширении их новыми составляющими.
</p>
<h4><span id=".D0.9E.D0.B1.D1.8A.D0.B5.D0.BA.D1.82.D0.BD.D0.B0.D1.8F_.D0.BC.D0.BE.D0.B4.D0.B5.D0.BB.D1.8C_.D0.B1.D1.80.D0.B0.D1.83.D0.B7.D0.B5.D1.80.D0.B0"></span><span class="mw-headline" id="Объектная_модель_браузера">Объектная модель браузера</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=9" class="mw-editsection-visualeditor" title="Редактировать раздел «Объектная модель браузера»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=9" title="Редактировать раздел «Объектная модель браузера»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Объектная модель браузера&#160;— браузер-специфичная часть языка<sup id="cite_ref-chapmanBOM_45-2" class="reference"><a href="#cite_note-chapmanBOM-45">&#91;41&#93;</a></sup><sup id="cite_ref-54" class="reference"><a href="#cite_note-54">&#91;48&#93;</a></sup>, являющаяся прослойкой между ядром и объектной моделью документа<sup id="cite_ref-BOMKoch_55-0" class="reference"><a href="#cite_note-BOMKoch-55">&#91;49&#93;</a></sup>. Основное предназначение объектной модели браузера&#160;— управление окнами браузера и обеспечение их взаимодействия. Каждое из окон браузера представляется объектом <code>window</code>, центральным объектом DOM. Объектная модель браузера на данный момент не стандартизирована<sup id="cite_ref-chapmanBOM_45-3" class="reference"><a href="#cite_note-chapmanBOM-45">&#91;41&#93;</a></sup><sup id="cite_ref-BOMZakas_56-0" class="reference"><a href="#cite_note-BOMZakas-56">&#91;50&#93;</a></sup>, однако спецификация находится в разработке <a href="/wiki/WHATWG" title="WHATWG">WHATWG</a><sup id="cite_ref-BOMKoch_55-1" class="reference"><a href="#cite_note-BOMKoch-55">&#91;49&#93;</a></sup><sup id="cite_ref-57" class="reference"><a href="#cite_note-57">&#91;Спецификация 4&#93;</a></sup> и <a href="/wiki/W3C" class="mw-redirect" title="W3C">W3C</a><sup id="cite_ref-webDef_44-1" class="reference"><a href="#cite_note-webDef-44">&#91;40&#93;</a></sup><sup id="cite_ref-58" class="reference"><a href="#cite_note-58">&#91;Спецификация 5&#93;</a></sup>.
</p><p>Помимо управления окнами, в рамках объектной модели браузера, браузерами обычно обеспечивается поддержка следующих сущностей<sup id="cite_ref-BOMKoch_55-2" class="reference"><a href="#cite_note-BOMKoch-55">&#91;49&#93;</a></sup><sup id="cite_ref-BOMZakas_56-1" class="reference"><a href="#cite_note-BOMZakas-56">&#91;50&#93;</a></sup>:
</p>
<ul><li>управление <a href="/wiki/%D0%A4%D1%80%D0%B5%D0%B9%D0%BC_(HTML)" title="Фрейм (HTML)">фреймами</a>,</li>
<li>поддержка задержки в исполнении кода и зацикливания с задержкой,</li>
<li>системные диалоги,</li>
<li>управление адресом открытой страницы,</li>
<li>управление информацией о браузере,</li>
<li>управление информацией о параметрах <a href="/wiki/%D0%9C%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80_(%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE)" title="Монитор (устройство)">монитора</a>,</li>
<li>ограниченное управление историей просмотра страниц,</li>
<li>поддержка работы с <a href="/wiki/HTTP_cookie" class="mw-redirect" title="HTTP cookie">HTTP cookie</a>.</li></ul>
<h4><span id=".D0.9E.D0.B1.D1.8A.D0.B5.D0.BA.D1.82.D0.BD.D0.B0.D1.8F_.D0.BC.D0.BE.D0.B4.D0.B5.D0.BB.D1.8C_.D0.B4.D0.BE.D0.BA.D1.83.D0.BC.D0.B5.D0.BD.D1.82.D0.B0"></span><span class="mw-headline" id="Объектная_модель_документа">Объектная модель документа</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=10" class="mw-editsection-visualeditor" title="Редактировать раздел «Объектная модель документа»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=10" title="Редактировать раздел «Объектная модель документа»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<div class="hatnote">Основная статья: <b><a href="/wiki/Document_Object_Model" title="Document Object Model">Document Object Model</a></b></div>
<p>Объектная модель документа&#160;— <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F_%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9" class="mw-redirect" title="Интерфейс программирования приложений">интерфейс программирования приложений</a> для HTML и <a href="/wiki/XML" title="XML">XML</a>-документов<sup id="cite_ref-DOMZakas_59-0" class="reference"><a href="#cite_note-DOMZakas-59">&#91;51&#93;</a></sup>. Согласно DOM, документ (например, веб-страница) может быть представлен в виде дерева объектов, обладающих рядом свойств, которые позволяют производить с ним различные манипуляции:
</p>
<ul><li>генерация и добавление узлов,</li>
<li>получение узлов,</li>
<li>изменение узлов,</li>
<li>изменение связей между узлами,</li>
<li>удаление узлов.</li></ul>
<h3><span id=".D0.92.D1.81.D1.82.D1.80.D0.B0.D0.B8.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5_.D0.B2_.D0.B2.D0.B5.D0.B1-.D1.81.D1.82.D1.80.D0.B0.D0.BD.D0.B8.D1.86.D1.8B"></span><span class="mw-headline" id="Встраивание_в_веб-страницы">Встраивание в веб-страницы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=11" class="mw-editsection-visualeditor" title="Редактировать раздел «Встраивание в веб-страницы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=11" title="Редактировать раздел «Встраивание в веб-страницы»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<h4><span id=".D0.A0.D0.B0.D1.81.D0.BF.D0.BE.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.B8.D0.B5_.D0.B2.D0.BD.D1.83.D1.82.D1.80.D0.B8_.D1.81.D1.82.D1.80.D0.B0.D0.BD.D0.B8.D1.86.D1.8B"></span><span class="mw-headline" id="Расположение_внутри_страницы">Расположение внутри страницы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=12" class="mw-editsection-visualeditor" title="Редактировать раздел «Расположение внутри страницы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=12" title="Редактировать раздел «Расположение внутри страницы»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Для добавления JavaScript-кода на страницу можно использовать теги &lt;script&gt;&lt;/script&gt;<sup id="cite_ref-60" class="reference"><a href="#cite_note-60">&#91;Спецификация 6&#93;</a></sup>, которые рекомендуется, но не обязательно, помещать внутри контейнера &lt;head&gt;. Контейнеров &lt;script&gt; в одном документе может быть сколько угодно. Атрибут «type='text/javascript'» указывать необязательно, данное значение используется по умолчанию<sup id="cite_ref-HTML5script_group=Спецификация_61-0" class="reference"><a href="#cite_note-HTML5script_group=Спецификация-61">&#91;52&#93;</a></sup>.
</p><p>Скрипт, выводящий <a href="/wiki/%D0%9C%D0%BE%D0%B4%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BE%D0%BA%D0%BD%D0%BE" title="Модальное окно">модальное окно</a> с классической надписью «Hello, World!» внутри браузера:
</p>
<div class="mw-highlight mw-highlight-lang-javascript mw-content-ltr" dir="ltr"><pre><span></span>      <span class="o">&lt;</span><span class="nx">script</span> <span class="nx">type</span><span class="o">=</span><span class="s2">&quot;application/javascript&quot;</span><span class="o">&gt;</span>
         <span class="nx">alert</span><span class="p">(</span><span class="s1">&#39;Hello, World!&#39;</span><span class="p">);</span>
      <span class="o">&lt;</span><span class="err">/script&gt;</span>
</pre></div>
<h4><span id=".D0.A0.D0.B0.D1.81.D0.BF.D0.BE.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.B8.D0.B5_.D0.B2.D0.BD.D1.83.D1.82.D1.80.D0.B8_.D1.82.D0.B5.D0.B3.D0.B0"></span><span class="mw-headline" id="Расположение_внутри_тега">Расположение внутри тега</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=13" class="mw-editsection-visualeditor" title="Редактировать раздел «Расположение внутри тега»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=13" title="Редактировать раздел «Расположение внутри тега»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Спецификация HTML описывает набор атрибутов, используемых для задания обработчиков событий<sup id="cite_ref-62" class="reference"><a href="#cite_note-62">&#91;Спецификация 7&#93;</a></sup>. Пример использования:
</p>
<div class="mw-highlight mw-highlight-lang-html mw-content-ltr" dir="ltr"><pre><span></span>      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&quot;delete.php&quot;</span> <span class="na">onclick</span><span class="o">=</span><span class="s">&quot;return confirm(&#39;Вы уверены?&#39;); return false;&quot;</span><span class="p">&gt;</span>
         Удалить
      <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
</pre></div>
<p>В приведённом примере при нажатии на ссылку функция <code>confirm('Вы уверены?');</code> вызывает модальное окно с надписью «Вы уверены?», а <code>return false;</code> блокирует переход по ссылке. Разумеется, этот код будет работать только если в браузере есть и включена поддержка JavaScript, иначе переход по ссылке произойдёт без предупреждения.
</p><p>Использование кода JavaScript в контексте разметки страницы расценивается в рамках <a href="/wiki/%D0%9D%D0%B5%D0%BD%D0%B0%D0%B2%D1%8F%D0%B7%D1%87%D0%B8%D0%B2%D1%8B%D0%B9_JavaScript" title="Ненавязчивый JavaScript">ненавязчивого JavaScript</a> как плохая практика. Аналогом (при условии снабжения ссылки идентификатором alertLink)
</p>
<div class="mw-highlight mw-highlight-lang-html mw-content-ltr" dir="ltr"><pre><span></span>      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&quot;delete.php&quot;</span> <span class="na">id</span><span class="o">=</span><span class="s">&quot;alertLink&quot;</span><span class="p">&gt;</span>
         Удалить
      <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
</pre></div>
<p>приведённого примера может являться, например, следующий фрагмент JavaScript:
</p>
<div class="mw-highlight mw-highlight-lang-javascript mw-content-ltr" dir="ltr"><pre><span></span><span class="nb">window</span><span class="p">.</span><span class="nx">onload</span> <span class="o">=</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
    <span class="kd">var</span> <span class="nx">linkWithAlert</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s2">&quot;alertLink&quot;</span><span class="p">);</span>
    <span class="nx">linkWithAlert</span><span class="p">.</span><span class="nx">onclick</span> <span class="o">=</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
        <span class="k">return</span> <span class="nx">confirm</span><span class="p">(</span><span class="s1">&#39;Вы уверены?&#39;</span><span class="p">);</span> 
    <span class="p">};</span>
<span class="p">};</span>
</pre></div>
<h4><span id=".D0.92.D1.8B.D0.BD.D0.B5.D1.81.D0.B5.D0.BD.D0.B8.D0.B5_.D0.B2_.D0.BE.D1.82.D0.B4.D0.B5.D0.BB.D1.8C.D0.BD.D1.8B.D0.B9_.D1.84.D0.B0.D0.B9.D0.BB"></span><span class="mw-headline" id="Вынесение_в_отдельный_файл">Вынесение в отдельный файл</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=14" class="mw-editsection-visualeditor" title="Редактировать раздел «Вынесение в отдельный файл»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=14" title="Редактировать раздел «Вынесение в отдельный файл»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Есть и третья возможность подключения JavaScript&#160;— написать скрипт в отдельном файле, а потом подключить его с помощью конструкции
</p>
<div class="mw-highlight mw-highlight-lang-html mw-content-ltr" dir="ltr"><pre><span></span>   <span class="p">&lt;</span><span class="nt">head</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">script</span> <span class="na">type</span><span class="o">=</span><span class="s">&quot;application/javascript&quot;</span> <span class="na">src</span><span class="o">=</span><span class="s">&quot;http://Путь_к_файлу_со_скриптом&quot;</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">script</span><span class="p">&gt;</span>
   <span class="p">&lt;/</span><span class="nt">head</span><span class="p">&gt;</span>
</pre></div>
<h4><span id=".D0.90.D1.82.D1.80.D0.B8.D0.B1.D1.83.D1.82.D1.8B_.D1.8D.D0.BB.D0.B5.D0.BC.D0.B5.D0.BD.D1.82.D0.B0_script"></span><span class="mw-headline" id="Атрибуты_элемента_script">Атрибуты элемента script</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=15" class="mw-editsection-visualeditor" title="Редактировать раздел «Атрибуты элемента script»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=15" title="Редактировать раздел «Атрибуты элемента script»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Элемент script, широко используемый для подключения к странице JavaScript, имеет несколько атрибутов.
</p>
<ul><li>необязательный<sup id="cite_ref-HTML5script_63-0" class="reference"><a href="#cite_note-HTML5script-63">&#91;Спецификация 8&#93;</a></sup> атрибут <code>type</code> для указания <a href="/wiki/MIME" title="MIME">MIME-типа</a> содержимого.</li></ul>
<p><style data-mw-deduplicate="TemplateStyles:r106630606">.mw-parser-output .ts-Начало_цитаты-quote{padding:0.25em 1em;border:thin solid #eaecf0}.mw-parser-output .ts-Начало_цитаты-source{margin:1em 0 0 5%}.mw-parser-output .ts-Начало_цитаты-quote .ts-oq{margin:0 -1em -0.25em}.mw-parser-output .ts-Начало_цитаты-quote .ts-oq .NavFrame{padding:0}.mw-parser-output .ts-Начало_цитаты-quote .ts-oq .NavHead,.mw-parser-output .ts-Начало_цитаты-quote .ts-oq .NavContent{padding-left:1.052632em;padding-right:1.052632em}</style>
</p>
<p class="ts-Начало_цитаты-source"><cite>В <a href="/wiki/RFC" title="RFC">запросе комментариев</a> RFC-4329, определяющем<sup id="cite_ref-64" class="reference"><a href="#cite_note-64">&#91;53&#93;</a></sup> MIME-тип, соответствующий JavaScript, указано</cite>:</p><blockquote class="ts-Начало_цитаты-quote">
<p><sup id="cite_ref-rfc4329_5-1" class="reference"><a href="#cite_note-rfc4329-5">&#91;4&#93;</a></sup>
</p><p>Медиатипы
</p>
<ul><li><code>application/javascript</code>,</li>
<li><code>application/ecmascript</code>,</li></ul>
<p>которые также определяются в этом документе, предназначены для практического использования, им следует отдавать предпочтение.
</p>
<style data-mw-deduplicate="TemplateStyles:r104610287">.mw-parser-output .ts-oq{overflow:auto;font-style:normal}.mw-parser-output .ts-oq .ref-info{font-size:100%}.mw-parser-output .ts-oq .NavToggle{float:none;position:static;right:auto;text-align:left;margin-left:1em}</style><div class="ts-oq"><div class="NavFrame collapsibleBox collapsed" style="border:none;"><div class="NavHead collapsibleBox-title collapsibleBox-title-leftTitle collapsibleBox-title-rightHideLink" style="text-align:left;background-color:#eaecf0; color:#72777d;">Оригинальный текст&#160;<span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span></div><div class="NavContent" style="">
<div lang="en" style="font-style:italic;">Use of the "text" top-level type for this kind of content is known to be problematic.  This document thus defines <code>text/javascript</code> and <code>text/ecmascript</code> but marks them as "obsolete".  Use of experimental and unregistered media types, as listed in part above, is discouraged.
<p>The media types,
</p>
<ul><li><code>application/javascript</code></li>
<li><code>application/ecmascript</code></li></ul>
which are also defined in this document, are intended for common use and should be used instead.</div>
</div></div></div>
<style data-mw-deduplicate="TemplateStyles:r104610272">.mw-parser-output .ts-Конец_цитаты-source{margin:0.357143em 2em 0 0;text-align:right}</style></blockquote>
<ul><li>необязательный атрибут <code>src</code>, принимающий в качестве значения адрес к файлу со скриптом.</li>
<li>необязательный атрибут <code>charset</code>, используемый вместе с <code>src</code> для указания используемой кодировки внешнего файла.</li>
<li>необязательный атрибут <code>defer</code> указывает, что получение скрипта происходит асинхронно, но выполнение следует отложить до тех пор, пока страница не будет загружена целиком.</li>
<li>необязательный атрибут <code>async</code> указывает, что получение скрипта происходит асинхронно, а выполнение будет произведено сразу по завершении скачивания. Очерёдность выполнения скриптов не гарантируется.</li></ul>
<p>При этом атрибут language (<code>language="JavaScript"</code>), несмотря на его активное использование (в 2008 году этот атрибут был наиболее часто используемым у тега <code>&lt;script&gt;</code><sup id="cite_ref-65" class="reference"><a href="#cite_note-65">&#91;54&#93;</a></sup>), относится к не рекомендуемым (deprecated), отсутствует в <a href="/wiki/DTD" title="DTD">DTD</a>, поэтому считается некорректным<sup id="cite_ref-attrHTML4.01_group=Спецификация_66-0" class="reference"><a href="#cite_note-attrHTML4.01_group=Спецификация-66">&#91;55&#93;</a></sup>.
</p>
<h2><span id=".D0.9E.D0.B1.D0.BB.D0.B0.D1.81.D1.82.D1.8C_.D0.BF.D1.80.D0.B8.D0.BC.D0.B5.D0.BD.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Область_применения">Область применения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=16" class="mw-editsection-visualeditor" title="Редактировать раздел «Область применения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=16" title="Редактировать раздел «Область применения»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<h3><span id=".D0.92.D0.B5.D0.B1-.D0.BF.D1.80.D0.B8.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Веб-приложения">Веб-приложения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=17" class="mw-editsection-visualeditor" title="Редактировать раздел «Веб-приложения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=17" title="Редактировать раздел «Веб-приложения»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<div class="hatnote">Основная статья: <b><a href="/wiki/%D0%92%D0%B5%D0%B1-%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5" title="Веб-приложение">Веб-приложение</a></b></div>
<p>JavaScript используется в клиентской части веб-приложений: клиент-серверных программ, в котором клиентом является браузер, а сервером&#160;— веб-сервер, имеющих распределённую между сервером и клиентом логику. Обмен информацией в веб-приложениях происходит по сети. Одним из преимуществ такого подхода является тот факт, что клиенты не зависят от конкретной операционной системы пользователя, поэтому веб-приложения являются кроссплатформенными сервисами.
</p>
<h4><span class="mw-headline" id="AJAX">AJAX</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=18" class="mw-editsection-visualeditor" title="Редактировать раздел «AJAX»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=18" title="Редактировать раздел «AJAX»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<div class="hatnote">Основная статья: <b><a href="/wiki/AJAX" title="AJAX">AJAX</a></b></div>
<style data-mw-deduplicate="TemplateStyles:r104610277">.mw-parser-output .ts-Родственные_проекты{width:19em;box-sizing:border-box;margin:0 0 .5em 1em;padding:.4em;background:#f8f9fa;border:1px solid #a2a9b1;font-size:90%}.mw-parser-output .ts-Родственные_проекты-header{margin-bottom:.2em;padding:.2em .6em;font-size:110%}.mw-parser-output .ts-Родственные_проекты ul li{display:flex;padding:.2em .6em}.mw-parser-output .ts-Родственные_проекты ul li .image{min-width:24px;display:inline-block;margin-right:.4em;flex:none;vertical-align:top;text-align:center}.mw-parser-output .ts-Родственные_проекты ul li .image img{vertical-align:middle}.mw-parser-output .ts-Родственные_проекты ul li .label{align-self:center}.mw-parser-output .ts-Родственные_проекты ul li hr{width:100%;margin:0}@media(max-width:719px){.mw-parser-output .ts-Родственные_проекты{width:auto;margin-left:0;margin-right:0}}</style><div class="ts-Родственные_проекты tright metadata plainlinks plainlist ruwikiWikimediaNavigation"><div class="ts-Родственные_проекты-header"><b>В&#160;родственных проектах</b></div><ul><li><span class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Notification-icon-Wikibooks-logo.svg/24px-Notification-icon-Wikibooks-logo.svg.png" decoding="async" width="24" height="24" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Notification-icon-Wikibooks-logo.svg/36px-Notification-icon-Wikibooks-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Notification-icon-Wikibooks-logo.svg/48px-Notification-icon-Wikibooks-logo.svg.png 2x" data-file-width="30" data-file-height="30" /></span><span class="label wikibooks-ref"><a href="https://ru.wikibooks.org/wiki/AJAX" class="extiw" title="b:AJAX">Книги в&#160;Викиучебнике</a></span></li><li><span class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/76/Notification-icon-Commons-logo.svg/24px-Notification-icon-Commons-logo.svg.png" decoding="async" width="24" height="24" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/76/Notification-icon-Commons-logo.svg/36px-Notification-icon-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/76/Notification-icon-Commons-logo.svg/48px-Notification-icon-Commons-logo.svg.png 2x" data-file-width="30" data-file-height="30" /></span><span class="label commons-ref"><a href="https://commons.wikimedia.org/wiki/Category:JavaScript" class="extiw" title="commons:Category:JavaScript">Медиафайлы на&#160;Викискладе</a></span></li></ul></div>
<p>JavaScript используется в <a href="/wiki/AJAX" title="AJAX">AJAX</a>, популярном подходе к построению интерактивных пользовательских интерфейсов веб-приложений, заключающемся в «фоновом» асинхронном обмене данными браузера с веб-сервером. В результате, при обновлении данных веб-страница не перезагружается полностью и интерфейс веб-приложения становится быстрее, чем это происходит при традиционном подходе (без применения AJAX).
</p>
<h4><span class="mw-headline" id="Comet">Comet</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=19" class="mw-editsection-visualeditor" title="Редактировать раздел «Comet»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=19" title="Редактировать раздел «Comet»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<div class="hatnote">Основная статья: <b><a href="/wiki/Comet_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Comet (программирование)">Comet (программирование)</a></b></div>
<p>Comet&#160;— широкое понятие, описывающее механизм работы веб-приложений, использующих постоянные HTTP-соединения, что позволяет веб-серверу отправлять данные браузеру без дополнительного запроса со стороны браузера. Для таких приложений используются технологии, непосредственно поддерживаемые браузерами. В частности, в них широко используется JavaScript.
</p>
<h4><span id=".D0.91.D1.80.D0.B0.D1.83.D0.B7.D0.B5.D1.80.D0.BD.D1.8B.D0.B5_.D0.BE.D0.BF.D0.B5.D1.80.D0.B0.D1.86.D0.B8.D0.BE.D0.BD.D0.BD.D1.8B.D0.B5_.D1.81.D0.B8.D1.81.D1.82.D0.B5.D0.BC.D1.8B"></span><span class="mw-headline" id="Браузерные_операционные_системы">Браузерные операционные системы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=20" class="mw-editsection-visualeditor" title="Редактировать раздел «Браузерные операционные системы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=20" title="Редактировать раздел «Браузерные операционные системы»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<div class="hatnote">Основная статья: <b><a href="/wiki/WebOS" title="WebOS">WebOS</a></b></div>
<div class="thumb tright"><div class="thumbinner" style="width:222px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:EyeOSinfo.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/ru/thumb/d/de/EyeOSinfo.png/220px-EyeOSinfo.png" decoding="async" width="220" height="144" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/ru/thumb/d/de/EyeOSinfo.png/330px-EyeOSinfo.png 1.5x, //upload.wikimedia.org/wikipedia/ru/thumb/d/de/EyeOSinfo.png/440px-EyeOSinfo.png 2x" data-file-width="640" data-file-height="418" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:EyeOSinfo.png" class="internal" title="Увеличить"></a></div>Пример сеанса eyeOS</div></div></div>
<p>JavaScript широко используется в <a href="/wiki/WebOS" title="WebOS">браузерных операционных системах</a>. Так, например, исходный код <a href="/w/index.php?title=IndraDesktop_WebOS&amp;action=edit&amp;redlink=1" class="new" title="IndraDesktop WebOS (страница отсутствует)">IndraDesktop WebOS</a> на 75&#160;% состоит из JavaScript<sup id="cite_ref-67" class="reference"><a href="#cite_note-67">&#91;56&#93;</a></sup>, код браузерной операционной системы <a href="/w/index.php?title=IntOS&amp;action=edit&amp;redlink=1" class="new" title="IntOS (страница отсутствует)">IntOS</a>&#160;— на 70&#160;%<sup id="cite_ref-68" class="reference"><a href="#cite_note-68">&#91;57&#93;</a></sup>. Доля JavaScript в исходном коде <a href="/wiki/EyeOS" title="EyeOS">eyeOS</a>&#160;— 5&#160;%<sup id="cite_ref-69" class="reference"><a href="#cite_note-69">&#91;58&#93;</a></sup>, однако и в рамках этой операционной системы JavaScript играет важную роль, участвуя в визуализации на клиенте и являясь необходимым механизмом для коммуницирования клиента и сервера<sup id="cite_ref-70" class="reference"><a href="#cite_note-70">&#91;59&#93;</a></sup>.
</p>
<h3><span id=".D0.91.D1.83.D0.BA.D0.BC.D0.B0.D1.80.D0.BA.D0.BB.D0.B5.D1.82.D1.8B"></span><span class="mw-headline" id="Букмарклеты">Букмарклеты</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=21" class="mw-editsection-visualeditor" title="Редактировать раздел «Букмарклеты»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=21" title="Редактировать раздел «Букмарклеты»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<div class="hatnote">Основная статья: <b><a href="/wiki/%D0%91%D1%83%D0%BA%D0%BC%D0%B0%D1%80%D0%BA%D0%BB%D0%B5%D1%82" title="Букмарклет">Букмарклет</a></b></div>
<p>JavaScript используется для создания небольших программ, размещаемых в закладки браузера. При этом используются URL-адреса со спецификатором <code>javascript:</code><sup id="cite_ref-71" class="reference"><a href="#cite_note-71">&#91;60&#93;</a></sup>.
</p>
<h3><span id=".D0.9F.D0.BE.D0.BB.D1.8C.D0.B7.D0.BE.D0.B2.D0.B0.D1.82.D0.B5.D0.BB.D1.8C.D1.81.D0.BA.D0.B8.D0.B5_.D1.81.D0.BA.D1.80.D0.B8.D0.BF.D1.82.D1.8B_.D0.B2_.D0.B1.D1.80.D0.B0.D1.83.D0.B7.D0.B5.D1.80.D0.B5"></span><span class="mw-headline" id="Пользовательские_скрипты_в_браузере">Пользовательские скрипты в браузере</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=22" class="mw-editsection-visualeditor" title="Редактировать раздел «Пользовательские скрипты в браузере»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=22" title="Редактировать раздел «Пользовательские скрипты в браузере»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Пользовательские скрипты в браузере&#160;— это программы, написанные на JavaScript, выполняемые в браузере пользователя при загрузке страницы. Они позволяют автоматически заполнять формы, переформатировать страницы, скрывать нежелательное содержимое и встраивать желательное для отображения содержимое, изменять поведение клиентской части веб-приложений, добавлять элементы управления на страницу и&#160;т.&#160;д.
</p><p>Для управления пользовательскими скриптами в <a href="/wiki/Mozilla_Firefox" title="Mozilla Firefox">Mozilla Firefox</a> используется расширение <a href="/wiki/Greasemonkey" title="Greasemonkey">Greasemonkey</a>; <a href="/wiki/Opera" title="Opera">Opera</a><sup id="cite_ref-72" class="reference"><a href="#cite_note-72">&#91;61&#93;</a></sup><sup id="cite_ref-73" class="reference"><a href="#cite_note-73">&#91;62&#93;</a></sup><sup id="cite_ref-74" class="reference"><a href="#cite_note-74">&#91;63&#93;</a></sup> и <a href="/wiki/Google_Chrome" title="Google Chrome">Google Chrome</a><sup id="cite_ref-75" class="reference"><a href="#cite_note-75">&#91;64&#93;</a></sup> предоставляют средства поддержки пользовательских скриптов и возможности для выполнения ряда скриптов Greasemonkey.
</p>
<h3><span id=".D0.A1.D0.B5.D1.80.D0.B2.D0.B5.D1.80.D0.BD.D1.8B.D0.B5_.D0.BF.D1.80.D0.B8.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Серверные_приложения">Серверные приложения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=23" class="mw-editsection-visualeditor" title="Редактировать раздел «Серверные приложения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=23" title="Редактировать раздел «Серверные приложения»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Приложения, написанные на JavaScript, могут исполняться на серверах, использующих <a href="/wiki/Java" title="Java">Java</a> 6 и более поздних версий<sup id="cite_ref-java6rn_76-0" class="reference"><a href="#cite_note-java6rn-76">&#91;65&#93;</a></sup>. Это обстоятельство используется для построения серверных приложений, позволяющих обрабатывать JavaScript на стороне сервера.
</p><p>Помимо Java 6, существует ряд платформ, использующих существующие движки (интерпретаторы) JavaScript для исполнения серверных приложений. (Как правило, речь идёт о повторном использовании движков, ранее созданных для исполнения кода JavaScript в браузерах WWW.)
</p>
<table class="standard">
<caption>Платформы исполнения серверных приложений на JavaScript
</caption>
<tbody><tr>
<th>Название
</th>
<th>Используемый движок JavaScript
</th>
<th>Языки, на&#160;которых написан движок и&#160;платформа
</th>
<th>Лицензия
</th></tr>
<tr>
<td>Jaxer<sup id="cite_ref-77" class="reference"><a href="#cite_note-77">&#91;66&#93;</a></sup>
</td>
<td><a href="/wiki/SpiderMonkey" title="SpiderMonkey">SpiderMonkey</a><sup id="cite_ref-78" class="reference"><a href="#cite_note-78">&#91;67&#93;</a></sup>
</td>
<td>C++, C<sup id="cite_ref-79" class="reference"><a href="#cite_note-79">&#91;68&#93;</a></sup>
</td>
<td><a href="/wiki/GNU_General_Public_License#GPL_v3" title="GNU General Public License">GPL 3</a><sup id="cite_ref-80" class="reference"><a href="#cite_note-80">&#91;69&#93;</a></sup>
</td></tr>
<tr>
<td>persevere-framework<sup id="cite_ref-81" class="reference"><a href="#cite_note-81">&#91;70&#93;</a></sup>
</td>
<td><a href="/wiki/Rhino" title="Rhino">Rhino</a>
</td>
<td>Java<sup id="cite_ref-82" class="reference"><a href="#cite_note-82">&#91;71&#93;</a></sup>
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD" title="Лицензия BSD">Модифицированная лицензия BSD</a><sup id="cite_ref-83" class="reference"><a href="#cite_note-83">&#91;72&#93;</a></sup>
</td></tr>
<tr>
<td>Helma<sup id="cite_ref-84" class="reference"><a href="#cite_note-84">&#91;73&#93;</a></sup>
</td>
<td><a href="/wiki/Rhino" title="Rhino">Rhino</a>
</td>
<td>Java, JavaScript<sup id="cite_ref-85" class="reference"><a href="#cite_note-85">&#91;74&#93;</a></sup>
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD#.D0.9B.D0.B8.D1.86.D0.B5.D0.BD.D0.B7.D0.B8.D0.B8_.D1.82.D0.B8.D0.BF.D0.B0_BSD" title="Лицензия BSD">BSD-подобная</a> Helma License 2.0<sup id="cite_ref-86" class="reference"><a href="#cite_note-86">&#91;75&#93;</a></sup>
</td></tr>
<tr>
<td>v8cgi
</td>
<td><a href="/wiki/V8_(%D0%B4%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA_JavaScript)" title="V8 (движок JavaScript)">V8</a>
</td>
<td>C++, JavaScript<sup id="cite_ref-87" class="reference"><a href="#cite_note-87">&#91;76&#93;</a></sup>
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD" title="Лицензия BSD">Лицензия BSD</a><sup id="cite_ref-88" class="reference"><a href="#cite_note-88">&#91;77&#93;</a></sup>
</td></tr>
<tr>
<td><a href="/wiki/Node.js" title="Node.js">node.js</a>
</td>
<td><a href="/wiki/V8_(%D0%B4%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA_JavaScript)" title="V8 (движок JavaScript)">V8</a>
</td>
<td>C++<sup id="cite_ref-89" class="reference"><a href="#cite_note-89">&#91;78&#93;</a></sup>
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT" title="Лицензия MIT">Лицензия MIT</a><sup id="cite_ref-90" class="reference"><a href="#cite_note-90">&#91;79&#93;</a></sup>
</td></tr>
<tr>
<td>gopherjs
</td>
<td><a href="/wiki/Go" title="Go">Go</a>
</td>
<td><a href="/wiki/Go" title="Go">Go</a>
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD" title="Лицензия BSD">Лицензия BSD</a>
</td></tr>
</tbody></table>
<p>JavaScript на стороне сервера используется в проектах <a href="/wiki/Google_(%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F)" title="Google (компания)">Google</a><sup id="cite_ref-91" class="reference"><a href="#cite_note-91">&#91;80&#93;</a></sup>. Так например, <a href="/wiki/Google_Sites" class="mw-redirect" title="Google Sites">Google Sites</a> допускает подстройку с помощью JavaScript-сценариев, исполняемых движком Rhino<sup id="cite_ref-92" class="reference"><a href="#cite_note-92">&#91;81&#93;</a></sup>.
</p>
<h3><span id=".D0.9C.D0.BE.D0.B1.D0.B8.D0.BB.D1.8C.D0.BD.D1.8B.D0.B5_.D0.BF.D1.80.D0.B8.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Мобильные_приложения">Мобильные приложения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=24" class="mw-editsection-visualeditor" title="Редактировать раздел «Мобильные приложения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=24" title="Редактировать раздел «Мобильные приложения»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Перевод мобильных устройств <a href="/wiki/Palm_(%D0%9A%D0%9F%D0%9A)" title="Palm (КПК)">Palm</a> на использование <a href="/wiki/Palm_webOS" class="mw-redirect" title="Palm webOS">Palm webOS</a> в качестве операционной системы с <a href="/w/index.php?title=Mojo_SDK&amp;action=edit&amp;redlink=1" class="new" title="Mojo SDK (страница отсутствует)">Mojo SDK</a> в качестве <a href="/wiki/SDK" title="SDK">комплекта средств разработки</a><sup id="cite_ref-93" class="reference"><a href="#cite_note-93">&#91;82&#93;</a></sup> позволяет использовать JavaScript в качестве языка разработки мобильных приложений<sup id="cite_ref-94" class="reference"><a href="#cite_note-94">&#91;83&#93;</a></sup><sup id="cite_ref-95" class="reference"><a href="#cite_note-95">&#91;84&#93;</a></sup>.
</p>
<h3><span id=".D0.92.D0.B8.D0.B4.D0.B6.D0.B5.D1.82.D1.8B"></span><span class="mw-headline" id="Виджеты">Виджеты</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=25" class="mw-editsection-visualeditor" title="Редактировать раздел «Виджеты»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=25" title="Редактировать раздел «Виджеты»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<div class="hatnote">Основная статья: <b><a href="/wiki/%D0%AD%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82_%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81%D0%B0" title="Элемент интерфейса">Элемент интерфейса</a></b></div>
<p>Виджет&#160;— вспомогательная мини-программа, графический модуль которой размещается в рабочем пространстве соответствующей <a href="/w/index.php?title=%D0%94%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA_%D0%B2%D0%B8%D0%B4%D0%B6%D0%B5%D1%82%D0%BE%D0%B2&amp;action=edit&amp;redlink=1" class="new" title="Движок виджетов (страница отсутствует)">родительской программы</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Widget_engine" class="extiw" title="en:Widget engine"><span title="Версия статьи «Движок виджетов» на английском языке">англ.</span></a>)</span>, служащая для украшения рабочего пространства, развлечения, решения отдельных рабочих задач или быстрого получения информации из интернета без помощи веб-браузера. JavaScript используется как для реализации виджетов, так и для реализации движков виджетов. В частности, при помощи JavaScript реализованы <a href="/wiki/Apple_Dashboard" class="mw-redirect" title="Apple Dashboard">Apple Dashboard</a>, <a href="/w/index.php?title=Microsoft_Gadgets&amp;action=edit&amp;redlink=1" class="new" title="Microsoft Gadgets (страница отсутствует)">Microsoft Gadgets</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Microsoft_Gadgets" class="extiw" title="en:Microsoft Gadgets"><span title="Версия статьи «Microsoft Gadgets» на английском языке">англ.</span></a>)</span>, <a href="/w/index.php?title=Yahoo!_Widgets&amp;action=edit&amp;redlink=1" class="new" title="Yahoo! Widgets (страница отсутствует)">Yahoo!_Widgets</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Yahoo!_Widgets" class="extiw" title="en:Yahoo! Widgets"><span title="Версия статьи «Yahoo!_Widgets» на английском языке">англ.</span></a>)</span>, <a href="/w/index.php?title=Google_Gadgets&amp;action=edit&amp;redlink=1" class="new" title="Google Gadgets (страница отсутствует)">Google Gadgets</a>, <a href="/w/index.php?title=Klipfolio_Dashboard&amp;action=edit&amp;redlink=1" class="new" title="Klipfolio Dashboard (страница отсутствует)">Klipfolio Dashboard</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Klipfolio_Dashboard" class="extiw" title="en:Klipfolio Dashboard"><span title="Версия статьи «Klipfolio Dashboard» на английском языке">англ.</span></a>)</span>.
</p>
<h3><span id=".D0.9F.D1.80.D0.B8.D0.BA.D0.BB.D0.B0.D0.B4.D0.BD.D0.BE.D0.B5_.D0.BF.D1.80.D0.BE.D0.B3.D1.80.D0.B0.D0.BC.D0.BC.D0.BD.D0.BE.D0.B5_.D0.BE.D0.B1.D0.B5.D1.81.D0.BF.D0.B5.D1.87.D0.B5.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Прикладное_программное_обеспечение">Прикладное программное обеспечение</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=26" class="mw-editsection-visualeditor" title="Редактировать раздел «Прикладное программное обеспечение»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=26" title="Редактировать раздел «Прикладное программное обеспечение»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<div class="thumb tright"><div class="thumbinner" style="width:402px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Seed._JavaScript_in_ruwiki.png" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Seed._JavaScript_in_ruwiki.png/400px-Seed._JavaScript_in_ruwiki.png" decoding="async" width="400" height="207" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Seed._JavaScript_in_ruwiki.png/600px-Seed._JavaScript_in_ruwiki.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/99/Seed._JavaScript_in_ruwiki.png/800px-Seed._JavaScript_in_ruwiki.png 2x" data-file-width="1257" data-file-height="652" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Seed._JavaScript_in_ruwiki.png" class="internal" title="Увеличить"></a></div>Исходный код и скриншот JavaScript-программы, выполняемой с помощью Seed</div></div></div>
<p>JavaScript используется для написания <a href="/wiki/%D0%9F%D1%80%D0%B8%D0%BA%D0%BB%D0%B0%D0%B4%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Прикладное программное обеспечение">прикладного ПО</a>. Например, <b>16,4&#160;%</b> исходного кода <a href="/wiki/Mozilla_Firefox" title="Mozilla Firefox">Mozilla Firefox</a> написано на JavaScript<sup id="cite_ref-Анализ_кода_Firefox_96-0" class="reference"><a href="#cite_note-Анализ_кода_Firefox-96">&#91;85&#93;</a></sup>.
</p><p><a href="/wiki/Google_Chrome_OS" class="mw-redirect" title="Google Chrome OS">Google Chrome OS</a> в качестве прикладного ПО использует <a href="/wiki/%D0%92%D0%B5%D0%B1-%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5" title="Веб-приложение">веб-приложения</a><sup id="cite_ref-97" class="reference"><a href="#cite_note-97">&#91;86&#93;</a></sup>.
</p><p>В окружении рабочего стола <a href="/wiki/GNOME" title="GNOME">GNOME</a> имеется возможность создавать на JavaScript программы, оперирующие с библиотеками GNOME при помощи <a href="/w/index.php?title=Gjs&amp;action=edit&amp;redlink=1" class="new" title="Gjs (страница отсутствует)">Gjs</a>, <a href="/w/index.php?title=Seed&amp;action=edit&amp;redlink=1" class="new" title="Seed (страница отсутствует)">Seed</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Seed_(programming)" class="extiw" title="en:Seed (programming)"><span title="Версия статьи «Seed» на английском языке">англ.</span></a>)</span><sup id="cite_ref-98" class="reference"><a href="#cite_note-98">&#91;87&#93;</a></sup>.
</p>
<h3><span id=".D0.9C.D0.B0.D0.BD.D0.B8.D0.BF.D1.83.D0.BB.D1.8F.D1.86.D0.B8.D1.8F_.D0.BE.D0.B1.D1.8A.D0.B5.D0.BA.D1.82.D0.B0.D0.BC.D0.B8_.D0.BF.D1.80.D0.B8.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.B8.D0.B9"></span><span class="mw-headline" id="Манипуляция_объектами_приложений">Манипуляция объектами приложений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=27" class="mw-editsection-visualeditor" title="Редактировать раздел «Манипуляция объектами приложений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=27" title="Редактировать раздел «Манипуляция объектами приложений»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>JavaScript также находит применение в качестве скриптового языка доступа к объектам приложений. Платформа Mozilla (<a href="/wiki/XUL" title="XUL">XUL</a>/<a href="/wiki/Gecko_(%D0%B4%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA)" class="mw-redirect" title="Gecko (движок)">Gecko</a>) использует JavaScript. Среди сторонних продуктов, например, <a href="/wiki/Sun_Java_Runtime_Environment" class="mw-redirect" title="Sun Java Runtime Environment">Java</a>, начиная с версии 6, содержит встроенный интерпретатор JavaScript на базе <a href="/wiki/Rhino" title="Rhino">Rhino</a><sup id="cite_ref-java6rn_76-1" class="reference"><a href="#cite_note-java6rn-76">&#91;65&#93;</a></sup>. Сценарии JavaScript поддерживаются в таких приложениях Adobe, как <a href="/wiki/Adobe_Photoshop" title="Adobe Photoshop">Adobe Photoshop</a>, <a href="/wiki/Adobe_Dreamweaver" title="Adobe Dreamweaver">Adobe Dreamweaver</a>, <a href="/wiki/Adobe_Illustrator" title="Adobe Illustrator">Adobe Illustrator</a> и <a href="/wiki/Adobe_InDesign" title="Adobe InDesign">Adobe InDesign</a>.
</p>
<h3><span id=".D0.9E.D1.84.D0.B8.D1.81.D0.BD.D1.8B.D0.B5_.D0.BF.D1.80.D0.B8.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Офисные_приложения">Офисные приложения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=28" class="mw-editsection-visualeditor" title="Редактировать раздел «Офисные приложения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=28" title="Редактировать раздел «Офисные приложения»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>JavaScript используется в <a href="/wiki/%D0%9E%D1%84%D0%B8%D1%81%D0%BD%D1%8B%D0%B9_%D0%BF%D0%B0%D0%BA%D0%B5%D1%82" title="Офисный пакет">офисных приложениях</a> для автоматизации рутинных действий, написания <a href="/wiki/%D0%9C%D0%B0%D0%BA%D1%80%D0%BE%D1%81" class="mw-redirect" title="Макрос">макросов</a>, организации доступа со стороны веб-служб.
</p>
<h4><span class="mw-headline" id="Microsoft_Office">Microsoft Office</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=29" class="mw-editsection-visualeditor" title="Редактировать раздел «Microsoft Office»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=29" title="Редактировать раздел «Microsoft Office»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>В <a href="/wiki/SharePoint" title="SharePoint">Excel Services</a> 2010 добавились<sup id="cite_ref-introJsExcel_99-0" class="reference"><a href="#cite_note-introJsExcel-99">&#91;88&#93;</a></sup> два новых интерфейса программирования приложений: <a href="/wiki/REST" title="REST">REST</a> API и JavaScript Object Model (<a href="/w/index.php?title=JSOM&amp;action=edit&amp;redlink=1" class="new" title="JSOM (страница отсутствует)">JSOM</a>).
</p>
<ul><li>Excel Services 2010 REST API позволяет<sup id="cite_ref-restExcel_100-0" class="reference"><a href="#cite_note-restExcel-100">&#91;89&#93;</a></sup> осуществлять доступ к объектам рабочих книг, таким как таблицы, диаграммы и именованные серии данных; получать изображения, HTML, <a href="/wiki/Atom" title="Atom">Atom</a>, рабочие книги; устанавливать значения и обновлять вычисления перед запрашиванием элементов<sup id="cite_ref-restExcel_100-1" class="reference"><a href="#cite_note-restExcel-100">&#91;89&#93;</a></sup>.</li>
<li>JSOM даёт возможность реагировать на действия пользователя в отношении Excel Web Access (<a href="/w/index.php?title=EWA&amp;action=edit&amp;redlink=1" class="new" title="EWA (страница отсутствует)">EWA</a>), программно взаимодействовать с составляющими EWA. Использование JSOM осуществляется при помощи помещения кода JavaScript на страницу, содержащую компоненты EWA<sup id="cite_ref-introJsExcel_99-1" class="reference"><a href="#cite_note-introJsExcel-99">&#91;88&#93;</a></sup>.</li></ul>
<h4><span class="mw-headline" id="OpenOffice.org">OpenOffice.org</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=30" class="mw-editsection-visualeditor" title="Редактировать раздел «OpenOffice.org»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=30" title="Редактировать раздел «OpenOffice.org»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>JavaScript&#160;— один из языков программирования, используемых для написания макросов в приложениях, входящих в состав OpenOffice.org<sup id="cite_ref-101" class="reference"><a href="#cite_note-101">&#91;90&#93;</a></sup>. В OpenOffice.org интегрирован интерпретатор JavaScript Rhino<sup id="cite_ref-devguide_102-0" class="reference"><a href="#cite_note-devguide-102">&#91;91&#93;</a></sup>. По состоянию на декабрь 2009 года поддержка JavaScript носила ограниченный характер. Ограничения, присущие<sup id="cite_ref-devguide_102-1" class="reference"><a href="#cite_note-devguide-102">&#91;91&#93;</a></sup> разработке макросов OpenOffice.org на JavaScript:
</p>
<ul><li>среда выполнения JavaScript поддерживает загрузку лишь тех классов Java, которые развёрнуты сценарием JavaScript;</li>
<li>среда выполнения JavaScript не предоставляет сообщения об ошибках, произошедших во время выполнения скрипта;</li>
<li>ещё не реализована поддержка интерактивной разработки JavaScript-сценариев.</li></ul>
<p>В OpenOffice.org имеется редактор и отладчик JavaScript-сценариев<sup id="cite_ref-103" class="reference"><a href="#cite_note-103">&#91;92&#93;</a></sup>.
</p>
<h3><span id=".D0.9E.D0.B1.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D0.B5_.D0.B8.D0.BD.D1.84.D0.BE.D1.80.D0.BC.D0.B0.D1.82.D0.B8.D0.BA.D0.B5"></span><span class="mw-headline" id="Обучение_информатике">Обучение информатике</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=31" class="mw-editsection-visualeditor" title="Редактировать раздел «Обучение информатике»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=31" title="Редактировать раздел «Обучение информатике»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>JavaScript обладает <a href="/wiki/%D0%9F%D1%80%D0%BE%D0%BF%D0%B5%D0%B4%D0%B5%D0%B2%D1%82%D0%B8%D0%BA%D0%B0" title="Пропедевтика">пропедевтической</a> ценностью, позволяя сочетать при обучении <a href="/wiki/%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0" title="Информатика">информатике</a> интенсивную практику программирования и широту используемых технологий<sup id="cite_ref-104" class="reference"><a href="#cite_note-104">&#91;93&#93;</a></sup>. Преподавание данного языка в школе позволяет создать базу для изучения <a href="/wiki/%D0%92%D0%B5%D0%B1-%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Веб-программирование">веб-программирования</a>, использовать на уроках творческие проекты<sup id="cite_ref-105" class="reference"><a href="#cite_note-105">&#91;94&#93;</a></sup>. Соответствующий курс позволяет обеспечить углублённый уровень изучения информатики и его имеет смысл включать в <a href="/wiki/%D0%90%D0%BA%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Активное обучение">элективные</a> курсы углублённого уровня подготовки<sup id="cite_ref-106" class="reference"><a href="#cite_note-106">&#91;95&#93;</a></sup>.
</p><p>JavaScript&#160;— подходящий язык для обучения <a href="/wiki/%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%B8%D0%B3%D1%80" title="Программирование игр">программированию игр</a>. По сравнению с альтернативами, он функционально достаточен, прост в изучении и в применении, снижает сложность для обучения, мотивирует обучаемых делиться своими играми с другими<sup id="cite_ref-107" class="reference"><a href="#cite_note-107">&#91;96&#93;</a></sup>.
</p><p>Не включённые в книгу <a href="/w/index.php?title=%D0%97%D0%B0%D0%BA%D0%B0%D1%81,_%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D1%81&amp;action=edit&amp;redlink=1" class="new" title="Закас, Николас (страница отсутствует)">Николаса Закаса</a> «Professional JavaScript for Web Developers» части о реализации на JavaScript классических <a href="/wiki/%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC" title="Алгоритм">алгоритмов</a>, техник, <a href="/wiki/%D0%A1%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="Структура данных">структур данных</a>, послужили<sup id="cite_ref-108" class="reference"><a href="#cite_note-108">&#91;97&#93;</a></sup> началу проекта <i>Computer science in JavaScript</i><sup id="cite_ref-109" class="reference"><a href="#cite_note-109">&#91;~ 4&#93;</a></sup>.
</p>
<h2><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D0.B8"></span><span class="mw-headline" id="Версии">Версии</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=32" class="mw-editsection-visualeditor" title="Редактировать раздел «Версии»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=32" title="Редактировать раздел «Версии»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="wikitable">
<tbody><tr>
<th>JavaScript
</th>
<th>Соответствующая версия JScript
</th>
<th>Существенные изменения
</th></tr>
<tr>
<td>1.0 (<a href="/wiki/Netscape_Navigator" title="Netscape Navigator">Netscape</a> 2.0, март 1996)
</td>
<td>1.0 (ранние версии <a href="/wiki/Microsoft_Internet_Explorer" class="mw-redirect" title="Microsoft Internet Explorer">IE</a> 3.0, август 1996)
</td>
<td>Оригинальная версия языка JavaScript.
</td></tr>
<tr>
<td>1.1 (Netscape 3.0, август 1996)
</td>
<td>2.0 (поздние версии IE 3.0, январь 1997)
</td>
<td>В данной версии был реализован объект <code>Array</code> и устранены наиболее серьёзные ошибки.
</td></tr>
<tr>
<td>1.2 (Netscape 4.0, июнь 1997)
</td>
<td>
</td>
<td>Реализован переключатель <code>switch</code>, регулярные выражения. Практически приведён в соответствии с первой редакцией спецификации ECMA-262.
</td></tr>
<tr>
<td>1.3 (Netscape 4.5, октябрь 1998)
</td>
<td>3.0 (IE 4.0, октябрь 1997)
</td>
<td>Совместим с первой редакцией ECMA-262.
</td></tr>
<tr>
<td>1.4 (только Netscape Server)
</td>
<td>4.0 (<a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio</a> 6, нет версии IE)
</td>
<td>Применяется только в серверных продуктах Netscape.
</td></tr>
<tr>
<td>
</td>
<td>5.0 (IE 5.0, март 1999)
</td>
<td>
</td></tr>
<tr>
<td>
</td>
<td>5.1 (IE 5.01)
</td>
<td>
</td></tr>
<tr>
<td>1.5 (Netscape 6.0, ноябрь 2000; также <br />поздние версии Netscape и <a href="/wiki/Mozilla" title="Mozilla">Mozilla</a>)
</td>
<td>5.5 (IE 5.5, июль 2000)
</td>
<td>Редакция 3 (декабрь 1999). Совместим с третьей редакцией спецификации ECMA-262.
</td></tr>
<tr>
<td>
</td>
<td>5.6 (IE 6.0, октябрь 2001)
</td>
<td>
</td></tr>
<tr>
<td>1.6 (<a href="/wiki/Gecko_(%D0%B4%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA)" class="mw-redirect" title="Gecko (движок)">Gecko</a> 1.8, <a href="/wiki/Mozilla_Firefox" title="Mozilla Firefox">Firefox</a> 1.5, ноябрь 2005)
</td>
<td>
</td>
<td>Редакция 3 с некоторыми совместимыми улучшениями: <a href="/wiki/ECMAScript_for_XML" class="mw-redirect" title="ECMAScript for XML">E4X</a>, дополнения к <code>Array</code> (например, <code>Array.prototype.forEach</code>), упрощения для <code>Array</code> и <code>String</code><sup id="cite_ref-110" class="reference"><a href="#cite_note-110">&#91;98&#93;</a></sup>
</td></tr>
<tr>
<td>1.7 (Gecko 1.8.1, Firefox 2.0, осень 2006), расширение JavaScript 1.6
</td>
<td>
</td>
<td>Редакция 3, с добавлением всех улучшений из JavaScript 1.6, <a href="/wiki/%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Генератор (программирование)">генераторов</a> и <a href="/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BA%D0%BE%D0%B2%D0%BE%D0%B5_%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Списковое включение">списочных выражений</a> (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">list comprehensions</span>, <code>[a*a for (a in iter)]</code>) из <a href="/wiki/Python_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" class="mw-redirect" title="Python (язык программирования)">Python</a>, блоковых областей с использованием <code>let</code> и деструктурирующего присваивания (<code>var [a, b] = [1, 2]</code>)<sup id="cite_ref-111" class="reference"><a href="#cite_note-111">&#91;99&#93;</a></sup>.
</td></tr>
<tr>
<td>
</td>
<td><a href="/wiki/Microsoft_JScript_.NET" class="mw-redirect" title="Microsoft JScript .NET">JScript .NET</a> (<a href="/wiki/Microsoft_ASP.NET" class="mw-redirect" title="Microsoft ASP.NET">ASP.NET</a>; нет версии IE)
</td>
<td>(Считается, что JScript .NET разработан при участии других членов <a href="/wiki/ECMA" class="mw-redirect" title="ECMA">ECMA</a>)
</td></tr>
<tr>
<td>1.8 (Gecko 1.9, Firefox 3.0, осень 2008), расширение JavaScript 1.7
</td>
<td>
</td>
<td>Новая форма записи для функций, сходная с типичными <a href="/wiki/%D0%9B%D1%8F%D0%BC%D0%B1%D0%B4%D0%B0-%D0%B2%D1%8B%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Лямбда-выражения">лямбда-выражениями</a>, <a href="/wiki/%D0%93%D0%B5%D0%BD%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Генератор (программирование)">генераторы</a>, новые методы итеративной обработки массивов <code>reduce()</code> и <code>reduceRight()</code><sup id="cite_ref-112" class="reference"><a href="#cite_note-112">&#91;100&#93;</a></sup>.
</td></tr>
<tr>
<td>1.8.1 (Gecko 1.9.1, Firefox 3.5)
</td>
<td>
</td>
<td>Встроенная поддержка JSON, метод <code>getPrototypeOf()</code> у <code>Object</code>, методы <a href="/wiki/Trim_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Trim (программирование)"><code>trim()</code></a>, <code>trimLeft()</code>, <code>trimRight()</code> у <code>String</code><sup id="cite_ref-113" class="reference"><a href="#cite_note-113">&#91;101&#93;</a></sup>
</td></tr>
<tr>
<td>2.0
</td>
<td>
</td>
<td>Редакция 4 (разработка не закончена<sup id="cite_ref-anonsECMA262-5_114-0" class="reference"><a href="#cite_note-anonsECMA262-5-114">&#91;102&#93;</a></sup>, название зарезервировано ECMA, но не было использовано для публикации<sup id="cite_ref-115" class="reference"><a href="#cite_note-115">&#91;Спецификация 9&#93;</a></sup>)
</td></tr>
<tr>
<td>
</td>
<td>
</td>
<td>Редакция 5 (ранее известная под названием ECMAScript 3.1<sup id="cite_ref-anonsECMA262-5_114-1" class="reference"><a href="#cite_note-anonsECMA262-5-114">&#91;102&#93;</a></sup>. Финальная версия принята 3 декабря 2009 года<sup id="cite_ref-116" class="reference"><a href="#cite_note-116">&#91;103&#93;</a></sup><sup id="cite_ref-117" class="reference"><a href="#cite_note-117">&#91;104&#93;</a></sup>.)
</td></tr></tbody></table>
<h2><span id=".D0.91.D0.B8.D0.B1.D0.BB.D0.B8.D0.BE.D1.82.D0.B5.D0.BA.D0.B8_JavaScript"></span><span class="mw-headline" id="Библиотеки_JavaScript">Библиотеки JavaScript</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=33" class="mw-editsection-visualeditor" title="Редактировать раздел «Библиотеки JavaScript»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=33" title="Редактировать раздел «Библиотеки JavaScript»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="hatnote">Основная статья: <b><a href="/wiki/%D0%91%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE%D1%82%D0%B5%D0%BA%D0%B0_JavaScript" title="Библиотека JavaScript">Библиотека JavaScript</a></b></div>
<p>Для обеспечения высокого <a href="/wiki/%D0%A1%D0%BB%D0%BE%D0%B9_%D0%B0%D0%B1%D1%81%D1%82%D1%80%D0%B0%D0%B3%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Слой абстрагирования">уровня абстракции</a> и достижения приемлемой степени <a href="/wiki/%D0%9A%D1%80%D0%BE%D1%81%D1%81-%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Кросс-браузерность">кросс-браузерности</a> при разработке веб-приложений используются библиотеки JavaScript. Они представляют собой набор многократно используемых объектов и функций. Среди известных JavaScript библиотек можно отметить <a href="/wiki/React.js" class="mw-redirect" title="React.js">React.js</a>, <a href="/wiki/Vue.js" title="Vue.js">Vue.js</a>, <a href="/wiki/Ember.js" title="Ember.js">Ember.js</a>, <a href="/wiki/Spry" title="Spry">Adobe Spry</a>, <a href="/wiki/AngularJS" title="AngularJS">AngularJS</a>, <a href="/wiki/Dojo" title="Dojo">Dojo</a>, <a href="/wiki/Extjs" class="mw-redirect" title="Extjs">Extjs</a>, <a href="/wiki/JQuery" title="JQuery">jQuery</a>, <a href="/wiki/Mootools" class="mw-redirect" title="Mootools">Mootools</a>, <a href="/wiki/Prototype_(%D1%84%D1%80%D0%B5%D0%B9%D0%BC%D0%B2%D0%BE%D1%80%D0%BA)" title="Prototype (фреймворк)">Prototype</a>, <a href="/w/index.php?title=Qooxdoo&amp;action=edit&amp;redlink=1" class="new" title="Qooxdoo (страница отсутствует)">Qooxdoo</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Qooxdoo" class="extiw" title="en:Qooxdoo"><span title="Версия статьи «Qooxdoo» на английском языке">англ.</span></a>)</span>, <a href="/wiki/Underscore" title="Underscore">Underscore</a> и <a href="/wiki/Node.js" title="Node.js">Node.js</a>.
</p>
<h2><span id=".D0.9E.D1.82.D0.BB.D0.B0.D0.B4.D0.BA.D0.B0"></span><span class="mw-headline" id="Отладка">Отладка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=34" class="mw-editsection-visualeditor" title="Редактировать раздел «Отладка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=34" title="Редактировать раздел «Отладка»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>В JavaScript доступ к <a href="/wiki/%D0%9E%D1%82%D0%BB%D0%B0%D0%B4%D1%87%D0%B8%D0%BA" title="Отладчик">отладчикам</a> становится особенно полезным при разработке крупных нетривиальных программ из-за различий в реализациях разных браузеров (в частности, в отношении <a href="/wiki/Document_Object_Model" title="Document Object Model">объектной модели документа</a>). Во многих браузерах есть встроенный отладчик.
</p><p>Internet Explorer имеет три отладчика: <a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Microsoft Visual Studio</a>&#160;— самый полный из них, за ним следует <span class="iw plainlinks" data-title="Microsoft Script Editor" data-lang="en" data-lang-name="англ."><a href="/w/index.php?title=Microsoft_Script_Editor&amp;action=edit&amp;redlink=1" class="new" title="Microsoft Script Editor (страница отсутствует)">Microsoft Script Editor</a><sup class="iw&#95;_note noprint" style="font-style:normal; font-weight:normal;"><a href="https://en.wikipedia.org/wiki/Microsoft_Script_Editor" class="extiw" title="en:Microsoft Script Editor"><span class="iw&#95;_tooltip" title="Версия статьи «Microsoft Script Editor» на английском языке">[en]</span></a></sup></span> (компонент <a href="/wiki/Microsoft_Office" title="Microsoft Office">Microsoft Office</a><sup id="cite_ref-118" class="reference"><a href="#cite_note-118">&#91;105&#93;</a></sup>), и, наконец, свободный Microsoft Script Debugger, гораздо более простой, чем два других. Бесплатный Microsoft Visual Web Developer Express предоставляет ограниченную версию с отладочной функцией JavaScript в Microsoft Visual Studio. В восьмой версии в IE вместе с инструментами для разработчиков появился встроенный отладчик.
</p><p>В Opera также имеется собственный отладчик&#160;— <a href="/wiki/Opera_Dragonfly" class="mw-redirect" title="Opera Dragonfly">Opera Dragonfly</a><sup id="cite_ref-119" class="reference"><a href="#cite_note-119">&#91;106&#93;</a></sup>.
</p><p>Разрабатываемые веб-приложения в <a href="/wiki/Firefox" class="mw-redirect" title="Firefox">Firefox</a> можно отлаживать при помощи встроенных инструментов Firefox Developer Tools.
</p><p>В Safari входит отладчик JavaScript <a href="/w/index.php?title=WebKit_Web_Inspector&amp;action=edit&amp;redlink=1" class="new" title="WebKit Web Inspector (страница отсутствует)">WebKit Web Inspector</a><sup id="cite_ref-120" class="reference"><a href="#cite_note-120">&#91;107&#93;</a></sup>. Этот же отладчик доступен и в других браузерах, использующих <a href="/wiki/WebKit" title="WebKit">WebKit</a>: Google Chrome, <a href="/wiki/Arora" title="Arora">Arora</a>, <a href="/wiki/Rekonq" title="Rekonq">Rekonq</a>, <a href="/wiki/Midori_(%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80)" title="Midori (браузер)">Midori</a> и др.
</p>
<h2><span id=".D0.A1.D1.80.D0.B5.D0.B4.D1.81.D1.82.D0.B2.D0.B0_.D1.82.D0.B5.D1.81.D1.82.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Средства_тестирования">Средства тестирования</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=35" class="mw-editsection-visualeditor" title="Редактировать раздел «Средства тестирования»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=35" title="Редактировать раздел «Средства тестирования»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Большинство <a href="/w/index.php?title=%D0%A4%D1%80%D0%B5%D0%B9%D0%BC%D0%B2%D0%BE%D1%80%D0%BA_%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D0%B7%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F&amp;action=edit&amp;redlink=1" class="new" title="Фреймворк автоматизированного тестирования (страница отсутствует)">фреймворков автоматизированного тестирования</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Test_automation_framework" class="extiw" title="en:Test automation framework"><span title="Версия статьи «Фреймворк автоматизированного тестирования» на английском языке">англ.</span></a>)</span> JavaScript-кода предполагают запуск тестов в браузере. Это осуществляется при помощи HTML-страницы, являющейся <a href="/w/index.php?title=%D0%9A%D0%BE%D0%BD%D1%82%D0%B5%D0%BA%D1%81%D1%82_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F&amp;action=edit&amp;redlink=1" class="new" title="Контекст тестирования (страница отсутствует)">контекстом тестирования</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Test_fixture" class="extiw" title="en:Test fixture"><span title="Версия статьи «Контекст тестирования» на английском языке">англ.</span></a>)</span>, которая, в свою очередь загружает всё необходимое для осуществления тестирования. Первыми такими фреймворками были <a href="/w/index.php?title=JsUnit&amp;action=edit&amp;redlink=1" class="new" title="JsUnit (страница отсутствует)">JsUnit</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/JSUnit" class="extiw" title="en:JSUnit"><span title="Версия статьи «JsUnit» на английском языке">англ.</span></a>)</span> (создан в 2001 году), <a href="/wiki/Selenium" title="Selenium">Selenium</a> (создан в 2004 году)<sup id="cite_ref-121" class="reference"><a href="#cite_note-121">&#91;108&#93;</a></sup>. Альтернатива&#160;— запуск тестов из командной строки. В этом случае используются окружения, отличные от браузера, например, Rhino<sup id="cite_ref-122" class="reference"><a href="#cite_note-122">&#91;109&#93;</a></sup>. Одним из первых инструментов такого рода является Crosscheck, позволяющий тестировать код, эмулируя поведение Internet Explorer 6 и Firefox версий 1.0 и 1.5<sup id="cite_ref-123" class="reference"><a href="#cite_note-123">&#91;110&#93;</a></sup>. Другой пример фреймворка автоматизированного тестирования JavaScript-кода, не использующего браузер для запуска тестов&#160;— библиотека env.js, созданная Джоном Резигом. Она использует Rhino и при этом содержит эмуляцию окружения браузера и DOM<sup id="cite_ref-124" class="reference"><a href="#cite_note-124">&#91;111&#93;</a></sup>.
</p><p>Blue Ridge, плагин к фреймворку веб-приложений <a href="/wiki/Ruby_on_Rails" title="Ruby on Rails">Ruby on Rails</a>, позволяет осуществлять <a href="/wiki/%D0%9C%D0%BE%D0%B4%D1%83%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Модульное тестирование">модульное тестирование</a> JavaScript-кода как в браузере, так и вне его. Это достигается за счёт использования фреймворка автоматизированного тестирования Screw.Unit и Rhino с env.js<sup id="cite_ref-125" class="reference"><a href="#cite_note-125">&#91;112&#93;</a></sup>.
</p><p>Главная проблема систем тестирования, не использующих браузеры, в том, что они используют эмуляции, а не реальные окружения, в которых выполняется код. Это приводит к тому, что успешное прохождение тестов не гарантирует того, что код корректно отработает в браузере<sup id="cite_ref-126" class="reference"><a href="#cite_note-126">&#91;113&#93;</a></sup><sup id="cite_ref-127" class="reference"><a href="#cite_note-127">&#91;114&#93;</a></sup>. Проблемой систем тестирования, использующих браузер, является сложность работы с ними, необходимость осуществления рутинных неавтоматизированных действий<sup id="cite_ref-128" class="reference"><a href="#cite_note-128">&#91;115&#93;</a></sup>. Для решения этого JsTestDriver, фреймворк автоматизированного тестирования, разрабатываемый Google, использует сервер, взаимодействующий с браузерами для осуществления тестирования<sup id="cite_ref-129" class="reference"><a href="#cite_note-129">&#91;116&#93;</a></sup>. Сходным образом ведёт себя Selenium Remote Control, входящий во фреймворк автоматизированного тестирования Selenium: он включает в себя сервер, запускающий и завершающий браузеры и действующий как HTTP-прокси для запросов к ним<sup id="cite_ref-130" class="reference"><a href="#cite_note-130">&#91;117&#93;</a></sup>. Кроме того, в Selenium содержится Selenium Grid, позволяющий осуществлять одновременное тестирование JavaScript-кода на разных компьютерах с разными окружениями, уменьшая время выполнения тестов<sup id="cite_ref-131" class="reference"><a href="#cite_note-131">&#91;118&#93;</a></sup>. Testswarm, имеющее поддержку фреймворков автоматизированного тестирования JavaScript-кода QUnit (библиотека <a href="/wiki/JQuery" title="JQuery">jQuery</a>), UnitTestJS (библиотека <a href="/wiki/Prototype_(%D1%84%D1%80%D0%B5%D0%B9%D0%BC%D0%B2%D0%BE%D1%80%D0%BA)" title="Prototype (фреймворк)">Prototype</a>), JSSpec (библиотека <a href="/wiki/MooTools" title="MooTools">MooTools</a>), JsUnit, Selenium и Dojo Objective Harness, представляет собой распределённое средство поддержки <a href="/wiki/%D0%9D%D0%B5%D0%BF%D1%80%D0%B5%D1%80%D1%8B%D0%B2%D0%BD%D0%B0%D1%8F_%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D1%8F" title="Непрерывная интеграция">непрерывной интеграции</a><sup id="cite_ref-132" class="reference"><a href="#cite_note-132">&#91;119&#93;</a></sup>.
</p><p>Негативное свойство, которым может обладать фреймворк автоматизированного тестирования JavaScript-кода&#160;— наличие зависимостей. Это создаёт риск отказа в работе тестируемого кода, успешно проходящего тесты, в среде с отсутствием этих зависимостей. Например, исходная версия JsUnitTest, фреймворка, созданного и использовавшегося для тестирования библиотеки Prototype, зависела от самой Prototype, изменяющего свойства объектов в глобальной области видимости<sup id="cite_ref-133" class="reference"><a href="#cite_note-133">&#91;120&#93;</a></sup>. Включение в <a href="/wiki/%D0%91%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE%D1%82%D0%B5%D0%BA%D0%B0_JavaScript" title="Библиотека JavaScript">библиотеку JavaScript</a> инструмента тестирования&#160;— распространённая практика. Так YUI Test 3 является частью <a href="/wiki/Yahoo!_UI_Library" title="Yahoo! UI Library">Yahoo! UI Library</a> и может быть безопасно использован для тестирования произвольного JavaScript-кода<sup id="cite_ref-134" class="reference"><a href="#cite_note-134">&#91;121&#93;</a></sup>. QUnit&#160;— фреймворк автоматизированного тестирования, созданный разработчиками jQuery<sup id="cite_ref-135" class="reference"><a href="#cite_note-135">&#91;122&#93;</a></sup>.
</p>
<h2><span id=".D0.A1.D0.B2.D1.8F.D0.B7.D1.8C_.D1.81_.D0.B4.D1.80.D1.83.D0.B3.D0.B8.D0.BC.D0.B8_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0.D0.BC.D0.B8"></span><span class="mw-headline" id="Связь_с_другими_языками">Связь с другими языками</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=36" class="mw-editsection-visualeditor" title="Редактировать раздел «Связь с другими языками»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=36" title="Редактировать раздел «Связь с другими языками»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<h3><span id=".D0.92.D0.B7.D0.B0.D0.B8.D0.BC.D0.BD.D0.BE.D0.B5_.D0.B2.D0.BB.D0.B8.D1.8F.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Взаимное_влияние">Взаимное влияние</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=37" class="mw-editsection-visualeditor" title="Редактировать раздел «Взаимное влияние»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=37" title="Редактировать раздел «Взаимное влияние»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Стандартизация JavaScript потребовала уйти от проблем с торговыми марками, поэтому стандарт ECMA 262 называет язык ECMAScript, три редакции которого были опубликованы с начала работы над ним в ноябре 1996 года.
</p><p><a href="/wiki/Objective-J" title="Objective-J">Objective-J</a>&#160;— это строгое компактное надмножество JavaScript, в котором к JavaScript добавлено:
</p>
<ul><li>традиционное наследование,</li>
<li><a href="/w/index.php?title=%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%B4%D0%B8%D1%81%D0%BF%D0%B5%D1%82%D1%87%D0%B5%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F_%D0%BC%D0%B5%D1%82%D0%BE%D0%B4%D0%BE%D0%B2&amp;action=edit&amp;redlink=1" class="new" title="Динамическая диспетчеризация методов (страница отсутствует)">динамическая диспетчеризация методов</a> в стиле <a href="/wiki/Smalltalk" title="Smalltalk">Smalltalk</a>/<a href="/wiki/Objective-C" title="Objective-C">Objective-C</a>,</li>
<li>псевдостатичная типизация.</li></ul>
<p><a href="/wiki/VBScript" title="VBScript">VBScript</a> от <a href="/wiki/Microsoft" title="Microsoft">Microsoft</a>, подобно JavaScript, может выполняться на стороне клиента в веб-страницах. VBScript имеет синтаксис, производный от <a href="/wiki/Visual_Basic" title="Visual Basic">Visual Basic</a> и поддерживается только в <a href="/wiki/Internet_Explorer" title="Internet Explorer">Internet Explorer</a>.
</p><p><a href="/wiki/JSON" title="JSON">JSON</a>, или объектная нотация JavaScript, это формат обмена данными общего назначения, определённый как подмножество JavaScript.
</p><p><a href="/wiki/Scheme" title="Scheme">Scheme</a> также является родственным JavaScript языком, поскольку оба представляют богатые возможности функционального программирования: JavaScript является динамическим языком, поддерживает гибкие массивы, может легко симулировать s-выражения, имеет поддержку <a href="/wiki/%D0%9B%D1%8F%D0%BC%D0%B1%D0%B4%D0%B0-%D0%B2%D1%8B%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Лямбда-выражения">лямбда-выражений</a><sup id="cite_ref-136" class="reference"><a href="#cite_note-136">&#91;123&#93;</a></sup>.
</p>
<h4><span id="JavaScript_.D0.B8_Java"></span><span class="mw-headline" id="JavaScript_и_Java">JavaScript и Java</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=38" class="mw-editsection-visualeditor" title="Редактировать раздел «JavaScript и Java»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=38" title="Редактировать раздел «JavaScript и Java»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Общим заблуждением является то, что JavaScript аналогичен или тесно связан с <a href="/wiki/Java" title="Java">Java</a>, это не так<sup id="cite_ref-mostMisunderstood_30-2" class="reference"><a href="#cite_note-mostMisunderstood-30">&#91;28&#93;</a></sup>. Оба языка имеют C-подобный синтаксис, являются объектно-ориентированными и как правило широко используются в клиентских веб-приложениях. Из важных различий можно отметить:
</p>
<ul><li>Java реализует ООП подход, основанный на <a href="/wiki/%D0%9A%D0%BB%D0%B0%D1%81%D1%81_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Класс (программирование)">классах</a>, JavaScript&#160;— на <a href="/wiki/%D0%9F%D1%80%D0%BE%D1%82%D0%BE%D1%82%D0%B8%D0%BF%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Прототипное программирование">прототипах</a>;</li>
<li>Java имеет <a href="/wiki/%D0%A1%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Статическая типизация">статическую типизацию</a>, JavaScript&#160;— <a href="/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Динамическая типизация">динамическую типизацию</a>;</li>
<li>Java загружается из скомпилированного байт-кода; JavaScript интерпретируется напрямую из файла (но часто с незаметной <a href="/wiki/JIT" class="mw-redirect" title="JIT">JIT</a>-компиляцией).</li></ul>
<h3><span id=".D0.A0.D0.B5.D0.B0.D0.BB.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D1.8F"></span><span class="mw-headline" id="Реализация">Реализация</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=39" class="mw-editsection-visualeditor" title="Редактировать раздел «Реализация»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=39" title="Редактировать раздел «Реализация»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>На JavaScript реализованы интерпретаторы ряда языков программирования, что позволяет использовать для них как среду выполнения веб-браузер. Им можно найти применение, например, в образовательных целях<sup id="cite_ref-137" class="reference"><a href="#cite_note-137">&#91;124&#93;</a></sup>.
</p><p>HotRuby&#160;— <a href="/wiki/%D0%A1%D0%B2%D0%BE%D0%B1%D0%BE%D0%B4%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Свободное программное обеспечение">свободная</a> реализация виртуальной машины <a href="/wiki/Ruby" title="Ruby">Ruby</a> на JavaScript и <a href="/wiki/Adobe_Flash" title="Adobe Flash">Flash</a>. Позволяет выполнять <a href="/wiki/%D0%91%D0%B0%D0%B9%D1%82%D0%BA%D0%BE%D0%B4" class="mw-redirect" title="Байткод">байткод</a>, полученный в результате компиляции <a href="/wiki/YARV" title="YARV">YARV</a>. Реализует большую часть грамматики Ruby. Пока не реализован механизм исключений и большая часть встроенных функций и классов<sup id="cite_ref-138" class="reference"><a href="#cite_note-138">&#91;125&#93;</a></sup>. При помощи HotRuby на веб-страницах можно использовать ruby-скрипты. Для этого ruby-код следует поместить в блок:
</p>
<div class="mw-highlight mw-highlight-lang-html mw-content-ltr" dir="ltr"><pre><span></span><span class="p">&lt;</span><span class="nt">script</span> <span class="na">type</span><span class="o">=</span><span class="s">&quot;text/ruby&quot;</span><span class="p">&gt;</span> <span class="err">…</span> <span class="p">&lt;/</span><span class="nt">script</span><span class="p">&gt;</span>
</pre></div>
<p>HotRuby выделит его, пошлёт на компиляцию удалённому скрипту и затем отобразит результаты работы на странице<sup id="cite_ref-139" class="reference"><a href="#cite_note-139">&#91;126&#93;</a></sup>. Данная реализация позволяет осуществлять доступ из Ruby к объектам JavaScript<sup id="cite_ref-140" class="reference"><a href="#cite_note-140">&#91;127&#93;</a></sup>.
</p>
<table class="standard">
<caption>Таблица реализаций языков программирования на JavaScript
</caption>
<tbody><tr>
<th>Язык
</th>
<th>Название реализации
</th>
<th>Основные авторы
</th>
<th>Лицензия
</th></tr>
<tr>
<td>JavaScript
</td>
<td>s-mr<sup id="cite_ref-141" class="reference"><a href="#cite_note-141">&#91;128&#93;</a></sup>
</td>
<td>Andrei Formiga
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D0%B8_BSD" class="mw-redirect" title="Лицензии BSD">New BSD</a>
</td></tr>
<tr>
<td><a href="/wiki/PostScript" title="PostScript">PostScript</a>
</td>
<td rowspan="2">WPS<sup id="cite_ref-142" class="reference"><a href="#cite_note-142">&#91;129&#93;</a></sup>
</td>
<td rowspan="2">Tom Hlavaty
</td>
<td rowspan="2">?
</td></tr>
<tr>
<td><a href="/wiki/PDF" class="mw-redirect" title="PDF">PDF</a>
</td></tr>
<tr>
<td><a href="/wiki/%D0%AF%D0%B7%D1%8B%D0%BA_%D0%B0%D1%81%D1%81%D0%B5%D0%BC%D0%B1%D0%BB%D0%B5%D1%80%D0%B0" title="Язык ассемблера">Ассемблер</a> для <a href="/wiki/MOS_Technology_6502" title="MOS Technology 6502">MOS Technology 6502</a>
</td>
<td>6502asm<sup id="cite_ref-143" class="reference"><a href="#cite_note-143">&#91;130&#93;</a></sup>
</td>
<td>Stian Soreng
</td>
<td><a href="/wiki/GPL" class="mw-redirect" title="GPL">GPL</a>
</td></tr>
<tr>
<td><a href="/wiki/Objective-J" title="Objective-J">Objective-J</a>
</td>
<td>Cappuccino<sup id="cite_ref-144" class="reference"><a href="#cite_note-144">&#91;131&#93;</a></sup>
</td>
<td>Ross Boucher
</td>
<td><a href="/wiki/LGPL" class="mw-redirect" title="LGPL">LGPL</a>
</td></tr>
<tr>
<td><a href="/wiki/Haskell" title="Haskell">Haskell</a>
</td>
<td>ycr2js<sup id="cite_ref-145" class="reference"><a href="#cite_note-145">&#91;132&#93;</a></sup>
</td>
<td>Tom Shackell, Neil Mitchell, Andrew Wilkinson, Mike Dodds, Bob Davie, Dimitry Golubovsky
</td>
<td>simple permissive license
</td></tr>
<tr>
<td rowspan="2"><a href="/wiki/Prolog" class="mw-redirect" title="Prolog">Prolog</a>
</td>
<td>Monash Toy Prolog<sup id="cite_ref-146" class="reference"><a href="#cite_note-146">&#91;133&#93;</a></sup>
</td>
<td>Lloyd Allison
</td>
<td>?
</td></tr>
<tr>
<td>ioctl<sup id="cite_ref-147" class="reference"><a href="#cite_note-147">&#91;134&#93;</a></sup>
</td>
<td>Jan Grant
</td>
<td>?
</td></tr>
<tr>
<td><a href="/wiki/Cat_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Cat (язык программирования)">Cat</a>
</td>
<td>Cat Interpreter<sup id="cite_ref-148" class="reference"><a href="#cite_note-148">&#91;135&#93;</a></sup>
</td>
<td>Christopher Diggins
</td>
<td><a href="/wiki/%D0%9E%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D0%B4%D0%BE%D1%81%D1%82%D0%BE%D1%8F%D0%BD%D0%B8%D0%B5" title="Общественное достояние">Общественное достояние</a>
</td></tr>
<tr>
<td><a href="/wiki/Scheme" title="Scheme">Scheme</a>
</td>
<td>BiwaScheme<sup id="cite_ref-149" class="reference"><a href="#cite_note-149">&#91;136&#93;</a></sup>
</td>
<td>Yutaka Hara
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D0%B8_MIT" class="mw-redirect" title="Лицензии MIT">MIT</a>
</td></tr>
<tr>
<td><a href="/wiki/BASIC" class="mw-redirect" title="BASIC">BASIC</a>
</td>
<td>Quite BASIC<sup id="cite_ref-150" class="reference"><a href="#cite_note-150">&#91;137&#93;</a></sup>
</td>
<td>Nikko Strom
</td>
<td><a href="/wiki/Freeware" class="mw-redirect" title="Freeware">бесплатная</a> <a href="/wiki/%D0%9F%D1%80%D0%BE%D0%BF%D1%80%D0%B8%D0%B5%D1%82%D0%B0%D1%80%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Проприетарное программное обеспечение">проприетарная</a>
</td></tr>
<tr>
<td><a href="/w/index.php?title=Lily&amp;action=edit&amp;redlink=1" class="new" title="Lily (страница отсутствует)">Lily</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Lily_(software)" class="extiw" title="en:Lily (software)"><span title="Версия статьи «Lily» на английском языке">англ.</span></a>)</span>
</td>
<td>Lily<sup id="cite_ref-151" class="reference"><a href="#cite_note-151">&#91;138&#93;</a></sup>
</td>
<td>Bill Orcutt
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D0%B8_MIT" class="mw-redirect" title="Лицензии MIT">MIT</a>
</td></tr>
<tr>
<td><a href="/wiki/Forth" class="mw-redirect" title="Forth">Forth</a>
</td>
<td>wForth<sup id="cite_ref-152" class="reference"><a href="#cite_note-152">&#91;139&#93;</a></sup>
</td>
<td>K Jacobson
</td>
<td>?
</td></tr>
<tr>
<td><a href="/wiki/PHP" title="PHP">PHP</a>
</td>
<td>phype<sup id="cite_ref-153" class="reference"><a href="#cite_note-153">&#91;140&#93;</a></sup>
</td>
<td>casperbp, hjelmen0
</td>
<td><a href="/w/index.php?title=Artistic_license&amp;action=edit&amp;redlink=1" class="new" title="Artistic license (страница отсутствует)">Artistic license</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Artistic_license" class="extiw" title="en:Artistic license"><span title="Версия статьи «Artistic license» на английском языке">англ.</span></a>)</span><sup id="cite_ref-154" class="reference"><a href="#cite_note-154">&#91;141&#93;</a></sup>
</td></tr>
<tr>
<td><a href="/wiki/Python" title="Python">Python 3</a>
</td>
<td>Brython<sup id="cite_ref-155" class="reference"><a href="#cite_note-155">&#91;142&#93;</a></sup>
</td>
<td>?
</td>
<td>?
</td></tr>
<tr>
<td><a href="/wiki/%D0%9E%D0%B1%D0%B5%D1%80%D0%BE%D0%BD_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Оберон (язык программирования)">Oberon 07</a>
</td>
<td>oberonjs<sup id="cite_ref-156" class="reference"><a href="#cite_note-156">&#91;143&#93;</a></sup>
</td>
<td>Vlad Folts
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D0%B8_MIT" class="mw-redirect" title="Лицензии MIT">MIT</a>
</td></tr></tbody></table>
<h3><span id=".D0.92.D0.B7.D0.B0.D0.B8.D0.BC.D0.BE.D0.B4.D0.B5.D0.B9.D1.81.D1.82.D0.B2.D0.B8.D0.B5"></span><span class="mw-headline" id="Взаимодействие">Взаимодействие</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=40" class="mw-editsection-visualeditor" title="Редактировать раздел «Взаимодействие»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=40" title="Редактировать раздел «Взаимодействие»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В некоторых языках программирования существуют средства поддержки взаимодействия с JavaScript-кодом.
</p>
<ul><li>Для <a href="/wiki/PHP" title="PHP">PHP</a> имеется пакет HTML Javascript, предоставляющий интерфейс создания простых JavaScript-программ<sup id="cite_ref-157" class="reference"><a href="#cite_note-157">&#91;144&#93;</a></sup>.</li>
<li>Соответствующий пакет для <a href="/wiki/Tcl" title="Tcl">Tcl</a> называется&#160;::javascript. Он предоставляет команды генерации кода HTML и JavaScript<sup id="cite_ref-158" class="reference"><a href="#cite_note-158">&#91;145&#93;</a></sup>.</li>
<li>Пакет для <a href="/wiki/Perl" title="Perl">Perl</a> Data::JavaScript позволяет переносить структуры данных Perl в JavaScript-код<sup id="cite_ref-159" class="reference"><a href="#cite_note-159">&#91;146&#93;</a></sup>.</li></ul>
<h2><span id=".D0.9F.D0.BE.D0.B4.D0.B4.D0.B5.D1.80.D0.B6.D0.BA.D0.B0_.D0.B1.D1.80.D0.B0.D1.83.D0.B7.D0.B5.D1.80.D0.B0.D0.BC.D0.B8"></span><span class="mw-headline" id="Поддержка_браузерами">Поддержка браузерами</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=41" class="mw-editsection-visualeditor" title="Редактировать раздел «Поддержка браузерами»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=41" title="Редактировать раздел «Поддержка браузерами»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="plainlinks metadata ambox ambox-content" role="presentation"><tbody><tr><td class="mbox-image"><div style="width:52px"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Ambox_outdated_serious.svg" class="image"><img alt="Ambox outdated serious.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Ambox_outdated_serious.svg/40px-Ambox_outdated_serious.svg.png" decoding="async" width="40" height="40" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Ambox_outdated_serious.svg/60px-Ambox_outdated_serious.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Ambox_outdated_serious.svg/80px-Ambox_outdated_serious.svg.png 2x" data-file-width="620" data-file-height="620" /></a></div></td><td class="mbox-text"><div class="mbox-text-div"><b>Информация в этом разделе устарела.</b></div><div class="mbox-textsmall-div hide-when-compact" style="font-size:85%">Вы можете помочь проекту, <a class="external text" href="https://ru.wikipedia.org/w/index.php?title=JavaScript&amp;action=edit">обновив его</a> и убрав после этого данный шаблон.</div></td></tr></tbody></table>
<p>На сегодняшний день поддержку JavaScript обеспечивают современные версии всех наиболее часто используемых браузеров. В <a href="/wiki/Internet_Explorer" title="Internet Explorer">Internet Explorer</a>, <a href="/wiki/Opera" title="Opera">Opera</a>, <a href="/wiki/Mozilla_Firefox" title="Mozilla Firefox">Mozilla Firefox</a>, <a href="/wiki/Safari" title="Safari">Safari</a>, <a href="/wiki/Google_Chrome" title="Google Chrome">Google Chrome</a>, имеется полная поддержка третьей редакции ECMA-262. При этом в Mozilla Firefox предпринята попытка осуществления поддержки четвёртой редакции спецификации, а первым браузером, в котором появилась неполная поддержка спецификации 3.1, явился Internet Explorer 8<sup id="cite_ref-160" class="reference"><a href="#cite_note-160">&#91;147&#93;</a></sup>.
</p><p>Допущенные разработчиками популярных браузеров ошибки в реализации спецификации, как правило, незначительны<sup id="cite_ref-161" class="reference"><a href="#cite_note-161">&#91;148&#93;</a></sup>. По состоянию на ноябрь 2009 года объектная модель документа имеет более ограниченную поддержку<sup id="cite_ref-162" class="reference"><a href="#cite_note-162">&#91;149&#93;</a></sup>.
</p><p>По мнению создателя языка, поддержка в Internet Explorer компанией Microsoft одного из существующих и применяющихся в других браузерах быстрых <a href="/wiki/%D0%94%D0%B2%D0%B8%D0%B6%D0%BE%D0%BA_JavaScript" title="Движок JavaScript">движков JavaScript</a> способно привести к появлению приложений, работающих с <a href="/wiki/%D0%A2%D1%80%D1%91%D1%85%D0%BC%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%B0" title="Трёхмерная графика">трёхмерной графикой</a>, написанных на JavaScript 3D-игр, использованию JavaScript в задачах, в которых ранее применялась технология <a href="/wiki/Adobe_Flash" title="Adobe Flash">Adobe Flash</a><sup id="cite_ref-163" class="reference"><a href="#cite_note-163">&#91;150&#93;</a></sup>.
</p>
<h3><span id=".D0.9D.D0.B0.D0.B1.D0.BE.D1.80.D1.8B_.D1.82.D0.B5.D1.81.D1.82.D0.BE.D0.B2"></span><span class="mw-headline" id="Наборы_тестов">Наборы тестов</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=42" class="mw-editsection-visualeditor" title="Редактировать раздел «Наборы тестов»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=42" title="Редактировать раздел «Наборы тестов»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><a href="/wiki/%D0%A0%D0%B5%D0%B3%D1%80%D0%B5%D1%81%D1%81%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%D0%B5_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Регрессионное тестирование">Регрессионное тестирование</a> соответствия браузеров третьей редакции спецификации ECMA-262 может осуществляться<sup id="cite_ref-164" class="reference"><a href="#cite_note-164">&#91;151&#93;</a></sup><sup id="cite_ref-165" class="reference"><a href="#cite_note-165">&#91;152&#93;</a></sup> с помощью разработанного Google инструмента для тестирования соответствия спецификации ECMAScript <span class="iw plainlinks" data-title="Sputnik (тест)" data-lang="en" data-lang-name="англ."><a href="/w/index.php?title=Sputnik_(%D1%82%D0%B5%D1%81%D1%82)&amp;action=edit&amp;redlink=1" class="new" title="Sputnik (тест) (страница отсутствует)">Sputnik</a><sup class="iw&#95;_note noprint" style="font-style:normal; font-weight:normal;"><a href="https://en.wikipedia.org/wiki/Sputnik_(JavaScript_conformance_test)" class="extiw" title="en:Sputnik (JavaScript conformance test)"><span class="iw&#95;_tooltip" title="Sputnik (JavaScript conformance test) — версия статьи «Sputnik (тест)» на английском языке">[en]</span></a></sup></span>, включающего более пяти тысяч <a href="/wiki/%D0%92%D0%B0%D1%80%D0%B8%D0%B0%D0%BD%D1%82_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Вариант тестирования">вариантов тестирования</a><sup id="cite_ref-sputnikIntro_166-0" class="reference"><a href="#cite_note-sputnikIntro-166">&#91;153&#93;</a></sup> и получившего название по имени российской команды Google<sup id="cite_ref-sputnikIntro_166-1" class="reference"><a href="#cite_note-sputnikIntro-166">&#91;153&#93;</a></sup>, а также написанной Юрием Зайцевым оболочки sputniktests-webrunner<sup id="cite_ref-167" class="reference"><a href="#cite_note-167">&#91;154&#93;</a></sup> или сервиса Google<sup id="cite_ref-168" class="reference"><a href="#cite_note-168">&#91;155&#93;</a></sup>. Варианты тестирования, входящие в Sputnik обновляются в связи с выходом пятой редакции спецификации ECMA-262, отражая изменения по сравнению с её предыдущей редакцией<sup id="cite_ref-169" class="reference"><a href="#cite_note-169">&#91;156&#93;</a></sup>.
</p><p>ECMAScript 5 Conformance Suite<sup id="cite_ref-170" class="reference"><a href="#cite_note-170">&#91;157&#93;</a></sup> представляет собой набор тестов, выпущенный Microsoft под <a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D0%B8_BSD" class="mw-redirect" title="Лицензии BSD">лицензией BSD</a><sup id="cite_ref-171" class="reference"><a href="#cite_note-171">&#91;158&#93;</a></sup>, для проверки соответствия реализации языка ECMAScript его пятой редакции спецификации. По состоянию на 12 марта 2010 года в пакете насчитывалось 1236 вариантов тестирования, он имел версию 0.2 <a href="/wiki/%D0%90%D0%BB%D1%8C%D1%84%D0%B0-%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" class="mw-redirect" title="Альфа-тестирование">альфа</a> и количество загрузок за три месяца составляло 178<sup id="cite_ref-172" class="reference"><a href="#cite_note-172">&#91;159&#93;</a></sup>.
</p><p>Для проверки корректности реализаций JavaScript имеется набор тестов JavaScript Test Suite, выпущенных Mozilla<sup id="cite_ref-173" class="reference"><a href="#cite_note-173">&#91;160&#93;</a></sup><sup id="cite_ref-174" class="reference"><a href="#cite_note-174">&#91;161&#93;</a></sup>.
</p>
<h3><span id=".D0.91.D0.B5.D0.B7.D0.BE.D0.BF.D0.B0.D1.81.D0.BD.D0.BE.D1.81.D1.82.D1.8C"></span><span class="mw-headline" id="Безопасность">Безопасность</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=43" class="mw-editsection-visualeditor" title="Редактировать раздел «Безопасность»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=43" title="Редактировать раздел «Безопасность»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>JavaScript позволяет потенциальным авторам вредоносного кода запускать его на любом компьютере сети: для этого достаточно открыть на нём веб-страницу. Это обуславливает наличие двух принципиальных ограничений:
</p>
<ul><li>JavaScript-программы выполняются в <a href="/wiki/%D0%9F%D0%B5%D1%81%D0%BE%D1%87%D0%BD%D0%B8%D1%86%D0%B0_(%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D1%8C)" title="Песочница (безопасность)">песочнице</a>, в которой они могут выполнять только ограниченный круг действий, а не задачи программирования общего назначения (например, создание файлов, работа с <a href="/wiki/%D0%A1%D0%BE%D0%BA%D0%B5%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D1%8B%D0%B9_%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81)" title="Сокет (программный интерфейс)">сокетами</a>)<sup id="cite_ref-flanSandbox_175-0" class="reference"><a href="#cite_note-flanSandbox-175">&#91;162&#93;</a></sup>,</li>
<li>для JavaScript-кода применяется <i>политика общего происхождения</i>, в соответствии с которой скрипт, встроенный в страницу, не может получить доступ к ряду свойств объектов другой страницы (в частности, к большинству свойств объекта <code>document</code>) при отличии в <a href="/wiki/%D0%9F%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%D1%8B_%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B8_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" class="mw-redirect" title="Протоколы передачи данных">протоколе</a>, <a href="/wiki/%D0%A5%D0%BE%D1%81%D1%82" title="Хост">хосте</a> и номере <a href="/wiki/%D0%9F%D0%BE%D1%80%D1%82_(TCP/IP)" class="mw-redirect" title="Порт (TCP/IP)">порта</a> этих страниц<sup id="cite_ref-176" class="reference"><a href="#cite_note-176">&#91;163&#93;</a></sup>.</li></ul>
<p>Помимо этого, разработчики браузеров вносят дополнительные ограничения в ответ на имеющие место злоупотребления. Так появился, в частности, запрет на открытие окна, размер одной стороны которого меньше ста <a href="/wiki/%D0%9F%D0%B8%D0%BA%D1%81%D0%B5%D0%BB" class="mw-redirect" title="Пиксел">пикселей</a><sup id="cite_ref-flanSandbox_175-1" class="reference"><a href="#cite_note-flanSandbox-175">&#91;162&#93;</a></sup>.
</p>
<h4><span id=".D0.9C.D0.B5.D0.B6.D1.81.D0.B0.D0.B9.D1.82.D0.BE.D0.B2.D1.8B.D0.B5_.D1.83.D1.8F.D0.B7.D0.B2.D0.B8.D0.BC.D0.BE.D1.81.D1.82.D0.B8"></span><span class="mw-headline" id="Межсайтовые_уязвимости">Межсайтовые уязвимости</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=44" class="mw-editsection-visualeditor" title="Редактировать раздел «Межсайтовые уязвимости»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=44" title="Редактировать раздел «Межсайтовые уязвимости»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<div class="hatnote">Основные статьи: <b><a href="/wiki/%D0%9C%D0%B5%D0%B6%D1%81%D0%B0%D0%B9%D1%82%D0%BE%D0%B2%D1%8B%D0%B9_%D1%81%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%B8%D0%BD%D0%B3" title="Межсайтовый скриптинг">Межсайтовый скриптинг</a></b> и <b><a href="/wiki/%D0%9F%D0%BE%D0%B4%D0%B4%D0%B5%D0%BB%D0%BA%D0%B0_%D0%BC%D0%B5%D0%B6%D1%81%D0%B0%D0%B9%D1%82%D0%BE%D0%B2%D1%8B%D1%85_%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%BE%D0%B2" class="mw-redirect" title="Подделка межсайтовых запросов">Подделка межсайтовых запросов</a></b></div>
<p>Общая проблема, касающаяся JavaScript&#160;— <a href="/wiki/%D0%9C%D0%B5%D0%B6%D1%81%D0%B0%D0%B9%D1%82%D0%BE%D0%B2%D1%8B%D0%B9_%D1%81%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%B8%D0%BD%D0%B3" title="Межсайтовый скриптинг">межсайтовый скриптинг</a> или XSS, нарушение политики общего происхождения. Уязвимости XSS имеют место в ситуациях, когда злоумышленник имеет возможность поместить скрипт на страницу, демонстрирующуюся пользователю. В этом случае скрипт получает доступ к сайту с правами этого пользователя, что в ряде случаев открывает возможность отсылки конфиденциальной информации, осуществление нежелательных <a href="/wiki/%D0%A2%D1%80%D0%B0%D0%BD%D0%B7%D0%B0%D0%BA%D1%86%D0%B8%D1%8F_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Транзакция (информатика)">транзакций</a>.
</p><p>Уязвимости XSS также происходят из-за ошибок, допущенных разработчиками браузеров<sup id="cite_ref-177" class="reference"><a href="#cite_note-177">&#91;164&#93;</a></sup>.
</p><p>Другим типом межсайтовой уязвимости является подделка межсайтовых запросов или CSRF. Она заключается в возможности сайта злоумышленника заставить браузер пользователя осуществить нежелательное действие на целевом сайте (например, банковский перевод денег). Такая возможность имеется, если целевой сайт полагается только на <a href="/wiki/HTTP_cookie" class="mw-redirect" title="HTTP cookie">HTTP cookie</a> или запросы авторизации. В этом случае запросы, инициализированные кодом сайта злоумышленника выполняются так же как запросы пользователя, если он <a href="/wiki/%D0%90%D0%B2%D1%82%D0%BE%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Авторизация">авторизован</a> на целевом сайте. Одним из средств защиты от CSRF является осуществление <a href="/wiki/%D0%90%D1%83%D1%82%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F" title="Аутентификация">аутентификации</a> при любом запросе, который приводит к необратимым последствиям. Также может помочь анализ <a href="/wiki/HTTP_referer" title="HTTP referer">HTTP referer</a>.
</p>
<h4><span id=".D0.9D.D0.B5.D1.83.D0.BC.D0.B5.D1.81.D1.82.D0.BD.D0.BE.D0.B5_.D0.B4.D0.BE.D0.B2.D0.B5.D1.80.D0.B8.D0.B5_.D0.BD.D0.B0_.D1.81.D1.82.D0.BE.D1.80.D0.BE.D0.BD.D0.B5_.D0.BA.D0.BB.D0.B8.D0.B5.D0.BD.D1.82.D0.B0"></span><span class="mw-headline" id="Неуместное_доверие_на_стороне_клиента">Неуместное доверие на стороне клиента</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=45" class="mw-editsection-visualeditor" title="Редактировать раздел «Неуместное доверие на стороне клиента»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=45" title="Редактировать раздел «Неуместное доверие на стороне клиента»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Разработчики клиентских приложений, вне зависимости от того, используют они JavaScript или нет, должны осознавать, что последние могут находиться под контролем злоумышленников. Поэтому любая проверка на стороне клиента может быть обойдена, JavaScript может быть как запущен, так и нет. Код, подвергнувшийся <a href="/wiki/%D0%9E%D0%B1%D1%84%D1%83%D1%81%D0%BA%D0%B0%D1%86%D0%B8%D1%8F" class="mw-redirect" title="Обфускация">обфускации</a> может стать объектом <a href="/wiki/%D0%9E%D0%B1%D1%80%D0%B0%D1%82%D0%BD%D0%B0%D1%8F_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0" title="Обратная разработка">обратной разработки</a>; данные формы могут быть посланы на сервер, минуя <a href="/wiki/%D0%92%D0%B0%D0%BB%D0%B8%D0%B4%D0%B0%D1%86%D0%B8%D1%8F" title="Валидация">валидацию</a>, осуществляемую с помощью JavaScript; скрипты могут быть отключены частично, поэтому, например, надёжную защиту от сохранения изображений с помощью JavaScript осуществить нельзя<sup id="cite_ref-178" class="reference"><a href="#cite_note-178">&#91;165&#93;</a></sup>; чрезвычайно неосмотрительно внедрять пароль в JavaScript, исполняемый на клиенте, где он может быть найден злоумышленником.
</p>
<h4><span id=".D0.9E.D1.88.D0.B8.D0.B1.D0.BA.D0.B8_.D0.B2_.D0.B1.D1.80.D0.B0.D1.83.D0.B7.D0.B5.D1.80.D0.B5.2C_.D0.BF.D0.BB.D0.B0.D0.B3.D0.B8.D0.BD.D0.B0.D1.85_.D0.B8_.D1.80.D0.B0.D1.81.D1.88.D0.B8.D1.80.D0.B5.D0.BD.D0.B8.D1.8F.D1.85"></span><span class="mw-headline" id="Ошибки_в_браузере,_плагинах_и_расширениях">Ошибки в браузере, плагинах и расширениях</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=46" class="mw-editsection-visualeditor" title="Редактировать раздел «Ошибки в браузере, плагинах и расширениях»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=46" title="Редактировать раздел «Ошибки в браузере, плагинах и расширениях»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>JavaScript предоставляет интерфейс к широкому спектру возможностей браузера, некоторые из которых могут содержать ошибки, приводящие, например, к <a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B1%D1%83%D1%84%D0%B5%D1%80%D0%B0" title="Переполнение буфера">переполнению буфера</a>. Это позволяет писать скрипты, приводящие к исполнению произвольного кода на пользовательской системе.
</p><p>Подобные ошибки выявлялись у часто используемых браузеров, включая Mozilla Firefox<sup id="cite_ref-179" class="reference"><a href="#cite_note-179">&#91;166&#93;</a></sup>, Internet Explorer<sup id="cite_ref-180" class="reference"><a href="#cite_note-180">&#91;167&#93;</a></sup>, Safari<sup id="cite_ref-181" class="reference"><a href="#cite_note-181">&#91;168&#93;</a></sup>. При выявлении потенциально опасных ошибок в браузере и наличия сведений о реализованных <a href="/wiki/%D0%AD%D0%BA%D1%81%D0%BF%D0%BB%D0%BE%D0%B9%D1%82" title="Эксплойт">эксплойтах</a> фирма-производитель и эксперты по безопасности рекомендуют отключать JavaScript до выхода <a href="/wiki/%D0%9F%D0%B0%D1%82%D1%87" title="Патч">патча</a><sup id="cite_ref-182" class="reference"><a href="#cite_note-182">&#91;169&#93;</a></sup><sup id="cite_ref-183" class="reference"><a href="#cite_note-183">&#91;170&#93;</a></sup>.
</p><p><a href="/wiki/%D0%9F%D0%BB%D0%B0%D0%B3%D0%B8%D0%BD" title="Плагин">Плагины</a>, такие как <a href="/wiki/%D0%9F%D0%BB%D0%B5%D0%B5%D1%80" title="Плеер">плееры</a>, <a href="/wiki/Macromedia_Flash" class="mw-redirect" title="Macromedia Flash">Macromedia Flash</a> и ряд <a href="/wiki/ActiveX" title="ActiveX">ActiveX</a> компонент, доступных по умолчанию в Internet Explorer, могут также содержать ошибки, эксплуатируемые с помощью JavaScript, что уже случалось ранее<sup id="cite_ref-184" class="reference"><a href="#cite_note-184">&#91;171&#93;</a></sup><sup id="cite_ref-185" class="reference"><a href="#cite_note-185">&#91;172&#93;</a></sup>.
</p><p><a href="/wiki/%D0%A0%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_(Mozilla)" title="Расширение (Mozilla)">Расширения Mozilla Firefox</a> не изолированы друг от друга: одно расширение может исправлять другое, что может использоваться злоумышленниками. На конференции <i>SecurityByte &amp; Owasp AppSec Asia 2009</i> Роберто Сагги Ливерани (Roberto Suggi Liverani) и Ник Фримэн (Nick Freeman) продемонстрировали три <a href="/wiki/%D0%AD%D0%BA%D1%81%D0%BF%D0%BB%D0%BE%D0%B9%D1%82" title="Эксплойт">эксплойта</a> в популярных расширениях Firefox, загруженные с сайта более 30 миллионов раз<sup id="cite_ref-186" class="reference"><a href="#cite_note-186">&#91;173&#93;</a></sup>.
</p>
<h4><span id=".D0.9E.D1.88.D0.B8.D0.B1.D0.BA.D0.B8_.D1.80.D0.B5.D0.B0.D0.BB.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D0.B8_.D0.BF.D0.B5.D1.81.D0.BE.D1.87.D0.BD.D0.B8.D1.86.D1.8B"></span><span class="mw-headline" id="Ошибки_реализации_песочницы">Ошибки реализации песочницы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=JavaScript&amp;veaction=edit&amp;section=47" class="mw-editsection-visualeditor" title="Редактировать раздел «Ошибки реализации песочницы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=JavaScript&amp;action=edit&amp;section=47" title="Редактировать раздел «Ошибки реализации песочницы»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Браузеры могут запускать JavaScript вне песочницы с привилегиями, необходимыми, например, для создания и удаления файлов. Однако такие привилегии не должны даваться коду из веба.
</p><p>Неправильное наделение привилегиями JavaScript из веба служило причиной уязвимостей как Internet Explorer<sup id="cite_ref-187" class="reference"><a href="#cite_note-187">&#91;174&#93;</a></sup>, так и Mozilla Firefox<sup id="cite_ref-188" class="reference"><a href="#cite_note-188">&#91;175&#93;</a></sup>.
</p><p><a href="/wiki/Microsoft_Windows" class="mw-redirect" title="Microsoft Windows">Microsoft Windows</a> позволяет файлам с кодом JavaScript запускаться как обычным программам без того, чтобы быть помещёнными в песочницу. Это делает возможным создание <a href="/wiki/%D0%A2%D1%80%D0%BE%D1%8F%D0%BD%D1%81%D0%BA%D0%B0%D1%8F_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0" title="Троянская программа">троянских программ</a><sup id="cite_ref-189" class="reference"><a href="#cite_note-189">&#91;176&#93;</a></sup>.
</p>
              
                <!-- *************************************************************** -->
            </div>
            
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
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../../dist/js/app-style-switcher.js"></script>
    <script src="../../dist/js/feather.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>