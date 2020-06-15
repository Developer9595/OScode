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
    <title>C#</title>
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
                        <h3>Язык программирования C#</h3>
                        
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
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Особенности_языка"><span class="tocnumber">1</span> <span class="toctext">Особенности языка</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Название_языка"><span class="tocnumber">2</span> <span class="toctext">Название языка</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Стандартизация"><span class="tocnumber">3</span> <span class="toctext">Стандартизация</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Версии"><span class="tocnumber">4</span> <span class="toctext">Версии</span></a>
<ul>
<li class="toclevel-2 tocsection-5"><a href="#Версия_1.0"><span class="tocnumber">4.1</span> <span class="toctext">Версия 1.0</span></a></li>
<li class="toclevel-2 tocsection-6"><a href="#Версия_2.0"><span class="tocnumber">4.2</span> <span class="toctext">Версия 2.0</span></a></li>
<li class="toclevel-2 tocsection-7"><a href="#Версия_3.0"><span class="tocnumber">4.3</span> <span class="toctext">Версия 3.0</span></a></li>
<li class="toclevel-2 tocsection-8"><a href="#Версия_4.0"><span class="tocnumber">4.4</span> <span class="toctext">Версия 4.0</span></a></li>
<li class="toclevel-2 tocsection-9"><a href="#Версия_5.0"><span class="tocnumber">4.5</span> <span class="toctext">Версия 5.0</span></a></li>
<li class="toclevel-2 tocsection-10"><a href="#Версия_6.0"><span class="tocnumber">4.6</span> <span class="toctext">Версия 6.0</span></a></li>
<li class="toclevel-2 tocsection-11"><a href="#Версия_7.0"><span class="tocnumber">4.7</span> <span class="toctext">Версия 7.0</span></a></li>
<li class="toclevel-2 tocsection-12"><a href="#Версия_8.0"><span class="tocnumber">4.8</span> <span class="toctext">Версия 8.0</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-13"><a href="#Пример_«Hello,_World!»"><span class="tocnumber">5</span> <span class="toctext">Пример «Hello, World!»</span></a></li>
<li class="toclevel-1 tocsection-14"><a href="#Реализации"><span class="tocnumber">6</span> <span class="toctext">Реализации</span></a></li>
<li class="toclevel-1 tocsection-15"><a href="#См._также"><span class="tocnumber">7</span> <span class="toctext">См. также</span></a></li>
<li class="toclevel-1 tocsection-16"><a href="#Примечания"><span class="tocnumber">8</span> <span class="toctext">Примечания</span></a></li>
<li class="toclevel-1 tocsection-17"><a href="#Литература"><span class="tocnumber">9</span> <span class="toctext">Литература</span></a></li>
<li class="toclevel-1 tocsection-18"><a href="#Ссылки"><span class="tocnumber">10</span> <span class="toctext">Ссылки</span></a></li>
</ul>
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
                
<table class="infobox" style="" data-name="Язык программирования"><tbody><tr><th colspan="2" class="infobox-above" style="background:#cfe3ff;">С#</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span class="no-wikidata" data-wikidata-property-id="P154"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:C_Sharp_wordmark.svg" class="image"><img alt="C Sharp wordmark.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/C_Sharp_wordmark.svg/150px-C_Sharp_wordmark.svg.png" decoding="async" width="150" height="150" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/C_Sharp_wordmark.svg/225px-C_Sharp_wordmark.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/0d/C_Sharp_wordmark.svg/300px-C_Sharp_wordmark.svg.png 2x" data-file-width="512" data-file-height="512" /></a></span> </td></tr>
<tr>
<th class="plainlist">Класс языка</th>
<td class="plainlist">
<div class="no-wikidata" data-wikidata-property-id="P31">
<p><a href="/wiki/%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BF%D0%B0%D1%80%D0%B0%D0%B4%D0%B8%D0%B3%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Мультипарадигмальный язык программирования">мультипарадигмальный</a>:<br />
<a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">объектно-ориентированный</a>, <br />
<a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Обобщённое программирование">обобщённый</a>, 
<a href="/wiki/%D0%9F%D1%80%D0%BE%D1%86%D0%B5%D0%B4%D1%83%D1%80%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Процедурное программирование">процедурный</a>,
<a href="/wiki/%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Функциональное программирование">функциональный</a>,
<a href="/wiki/%D0%A1%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D0%B9%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Событийно-ориентированное программирование">событийный</a>,  
</p>
<a href="/wiki/%D0%9E%D1%82%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Отражение (программирование)">рефлективный</a></div></td>
</tr>
<tr>
<th class="plainlist">Появился в</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P571">2000<span class="noprint">&#59;&#32;20&#160;лет&#32;назад</span><span style="display:none">&#160;(<span class="bday dtstart published updated">2000</span>)</span></span></td>
</tr>
<tr>
<th class="plainlist">Автор</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P287"><a href="/wiki/%D0%A5%D0%B5%D0%B9%D0%BB%D1%81%D0%B1%D0%B5%D1%80%D0%B3,_%D0%90%D0%BD%D0%B4%D0%B5%D1%80%D1%81" title="Хейлсберг, Андерс">Андерс Хейлсберг</a></span></td>
</tr>
<tr>
<th class="plainlist">Разработчик</th>
<td class="plainlist">
<a href="/wiki/Microsoft" title="Microsoft">Microsoft</a></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A0%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8_%D1%84%D0%B0%D0%B9%D0%BB%D0%B0" title="Расширение имени файла">Расширение</a> файлов</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q2370$564b9599-4cde-51df-4a90-ed8e163f8e2d"><span class="wikidata-snak wikidata-main-snak"><code>.cs</code></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D1%82%D0%B0%D0%B4%D0%B8%D0%B8_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Стадии разработки программного обеспечения">Выпуск</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P348"><span class="no-wikidata" data-wikidata-property-id="P348">8.0<sup id="cite_ref-1" class="reference"><a href="#cite_note-1">&#91;1&#93;</a></sup>&#160;(23&#160;сентября 2019<span class="noprint">&#59;&#32;8 месяцев назад</span><span style="display:none">&#160;(<span class="bday dtstart published updated">2019-09-23</span>)</span>)</span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Система типов">Система типов</a></th>
<td class="plainlist">
<a href="/wiki/%D0%A1%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Статическая типизация">статическая</a>, <a href="/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Динамическая типизация">динамическая</a>, <a href="/wiki/%D0%A1%D1%82%D1%80%D0%BE%D0%B3%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" class="mw-redirect" title="Строгая типизация">строгая</a>, <a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2#Типобезопасность_и_защита_адресации_памяти" title="Система типов">безопасная</a>, <a href="/wiki/%D0%92%D1%8B%D0%B2%D0%BE%D0%B4_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Вывод типов">вывод типов</a></td>
</tr>
<tr>
<th class="plainlist">Основные реализации</th>
<td class="plainlist">
<span class="nowrap"><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework</a></span>, <a href="/wiki/Mono" title="Mono">Mono</a>, <span class="nowrap"><a href="/wiki/.NET_Core" title=".NET Core">.NET Core</a></span>, <a href="/wiki/DotGNU" title="DotGNU">DotGNU (заморожен)</a>, <a href="/wiki/Universal_Windows_Platform" class="mw-redirect" title="Universal Windows Platform">Universal Windows Platform</a></td>
</tr>
<tr>
<th class="plainlist">Диалекты</th>
<td class="plainlist">
<a href="/wiki/C%CF%89" title="Cω">Cω</a>, <a href="/wiki/Spec_Sharp" title="Spec Sharp">Spec#</a>, <a href="https://en.wikipedia.org/wiki/Polyphonic_C_Sharp" class="extiw" title="en:Polyphonic C Sharp">Polyphonic C#</a>, <a rel="nofollow" class="external text" href="http://ecsharp.net">Enhanced C#</a></td>
</tr>
<tr>
<th class="plainlist">Испытал влияние</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P737"><a href="/wiki/C%2B%2B" title="C++">C++</a>, <a href="/wiki/Java" title="Java">Java</a><sup id="cite_ref-nash_2-0" class="reference"><a href="#cite_note-nash-2">&#91;2&#93;</a></sup><sup id="cite_ref-Shildt2003_3-0" class="reference"><a href="#cite_note-Shildt2003-3">&#91;3&#93;</a></sup><sup id="cite_ref-Shildt2004_4-0" class="reference"><a href="#cite_note-Shildt2004-4">&#91;4&#93;</a></sup>, <a href="/wiki/Delphi_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Delphi (язык программирования)">Delphi</a>, <a href="/wiki/%D0%9C%D0%BE%D0%B4%D1%83%D0%BB%D0%B0-3" title="Модула-3">Модула-3</a> и <a href="/wiki/Smalltalk" title="Smalltalk">Smalltalk</a></span></td>
</tr>
<tr>
<th class="plainlist">Повлиял на</th>
<td class="plainlist">
<a href="/wiki/C%CF%89" title="Cω">Cω</a>, <a href="/wiki/F_Sharp" title="F Sharp">F#</a>, <a href="/wiki/Nemerle" title="Nemerle">Nemerle</a>, <a href="/wiki/Vala" title="Vala">Vala</a>, <a href="/wiki/Windows_PowerShell" class="mw-redirect" title="Windows PowerShell">Windows PowerShell</a>, <a href="/wiki/Kotlin" title="Kotlin">Kotlin</a></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_%D0%BD%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Лицензия на программное обеспечение">Лицензия</a></th>
<td class="plainlist">
<div class="no-wikidata" data-wikidata-property-id="P275">
<p>Компилятор <a href="https://en.wikipedia.org/wiki/Roslyn_(compiler)" class="extiw" title="en:Roslyn (compiler)">Roslyn</a>: <a href="/wiki/Apache_License" class="mw-redirect" title="Apache License">Лицензия Apache 2.0</a><sup id="cite_ref-auto_5-0" class="reference"><a href="#cite_note-auto-5">&#91;5&#93;</a></sup><br />
<a href="/wiki/.NET_Core" title=".NET Core">.NET Core CLR</a>: <a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT" title="Лицензия MIT">MIT / X11</a><sup id="cite_ref-6" class="reference"><a href="#cite_note-6">&#91;6&#93;</a></sup>
</p><p>Компилятор <a href="/wiki/Mono_(software)" class="mw-redirect" title="Mono (software)">Mono</a>: dual <a href="/wiki/GPLv3" class="mw-redirect" title="GPLv3">GPLv3</a> and MIT/X11<br />
</p>
<a href="/wiki/DotGNU" title="DotGNU">DotGNU</a>: dual <a href="/wiki/GPL" class="mw-redirect" title="GPL">GPL</a> and <a href="/wiki/LGPL" class="mw-redirect" title="LGPL">LGPL</a></div></td>
</tr>
<tr>
<th class="plainlist">Сайт</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P856" data-wikidata-claim-id="Q2370$B55D9D59-6423-4FF5-B7F9-BFBEC2231B1C"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://docs.microsoft.com/en-us/dotnet/csharp/">docs.microsoft.com/…</a>&#8203;&#160;<span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span></span></span></td>
</tr>
<tr>
<th class="plainlist">Платформа</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P400"><a href="/wiki/Common_Language_Infrastructure" title="Common Language Infrastructure">Common Language Infrastructure</a></span></td>
</tr><tr><td colspan="2" class="infobox-below" style="background:#dcebff;;"><span class="wikidata-claim" data-wikidata-property-id="P373" data-wikidata-claim-id="q2370$67F75635-FD3B-433F-8DED-D5190F366ADD"><span class="wikidata-snak wikidata-main-snak"><a href="https://commons.wikimedia.org/wiki/Category:C_Sharp" title="commons:Category:C Sharp"><img alt="Commons-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/15px-Commons-logo.svg.png" decoding="async" width="15" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/23px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></a>&#160;<a href="https://commons.wikimedia.org/wiki/Category:C_Sharp" class="extiw" title="commons:Category:C Sharp">Медиафайлы на Викискладе</a></span></span></td></tr>
</tbody></table>
<p><b>C#</b> (произносится <i>си шарп</i>)&#160;— <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">объектно-ориентированный</a> <a href="/wiki/%D0%AF%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Язык программирования">язык программирования</a>. Разработан в <a href="/wiki/1998" class="mw-redirect" title="1998">1998</a>—<a href="/wiki/2001_%D0%B3%D0%BE%D0%B4" title="2001 год">2001 годах</a> группой инженеров компании <a href="/wiki/Microsoft" title="Microsoft">Microsoft</a> под руководством <a href="/wiki/%D0%A5%D0%B5%D0%B9%D0%BB%D1%81%D0%B1%D0%B5%D1%80%D0%B3,_%D0%90%D0%BD%D0%B4%D0%B5%D1%80%D1%81" title="Хейлсберг, Андерс">Андерса Хейлсберга</a> и Скотта Вильтаумота<sup id="cite_ref-7" class="reference"><a href="#cite_note-7">&#91;7&#93;</a></sup> как язык разработки приложений для платформы <a href="/wiki/.NET_Framework" title=".NET Framework">Microsoft .NET Framework</a>. Впоследствии был стандартизирован как <a href="/wiki/ECMA" class="mw-redirect" title="ECMA">ECMA</a>-334 и <a href="/wiki/ISO" class="mw-redirect" title="ISO">ISO</a>/<a href="/wiki/IEC" class="mw-redirect" title="IEC">IEC</a> 23270.
</p><p>C# относится к семье языков с <a href="/wiki/C-%D0%BF%D0%BE%D0%B4%D0%BE%D0%B1%D0%BD%D1%8B%D0%B9_%D1%81%D0%B8%D0%BD%D1%82%D0%B0%D0%BA%D1%81%D0%B8%D1%81" class="mw-redirect" title="C-подобный синтаксис">C-подобным синтаксисом</a>, из них его синтаксис наиболее близок к <a href="/wiki/C%2B%2B" title="C++">C++</a> и <a href="/wiki/Java" title="Java">Java</a>. Язык имеет <a href="/wiki/%D0%A1%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Статическая типизация">статическую типизацию</a>, поддерживает <a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%B8%D0%BC%D0%BE%D1%80%D1%84%D0%B8%D0%B7%D0%BC_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Полиморфизм (информатика)">полиморфизм</a>, <a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%BE%D0%B2" title="Перегрузка операторов">перегрузку операторов</a> (в том числе операторов явного и неявного приведения типа), <a href="/wiki/%D0%94%D0%B5%D0%BB%D0%B5%D0%B3%D0%B0%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Делегат (программирование)">делегаты</a>, атрибуты, <a href="/wiki/%D0%A1%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D0%B9%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Событийно-ориентированное программирование">события</a>, <a href="/wiki/%D0%A1%D0%B2%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Свойство (программирование)">свойства</a>, <a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Обобщённое программирование">обобщённые</a> типы и методы, <a href="/wiki/%D0%98%D1%82%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80" title="Итератор">итераторы</a>, <a href="/wiki/%D0%90%D0%BD%D0%BE%D0%BD%D0%B8%D0%BC%D0%BD%D0%B0%D1%8F_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D1%8F" title="Анонимная функция">анонимные функции</a> с поддержкой <a href="/wiki/%D0%97%D0%B0%D0%BC%D1%8B%D0%BA%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Замыкание (программирование)">замыканий</a>, <a href="/wiki/Language_Integrated_Query" title="Language Integrated Query">LINQ</a>, <a href="/wiki/%D0%9E%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0_%D0%B8%D1%81%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B9" title="Обработка исключений">исключения</a>, <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%B8_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Комментарии (программирование)">комментарии</a> в формате <a href="/wiki/XML" title="XML">XML</a>.
</p><p>Переняв многое от своих предшественников&#160;— языков <a href="/wiki/C%2B%2B" title="C++">C++</a>, <a href="/wiki/Delphi_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Delphi (язык программирования)">Delphi</a>, <a href="/wiki/%D0%9C%D0%BE%D0%B4%D1%83%D0%BB%D0%B0-2" title="Модула-2">Модула</a>, <a href="/wiki/Smalltalk" title="Smalltalk">Smalltalk</a> и, в особенности, <a href="/wiki/Java" title="Java">Java</a>&#160;— С#, опираясь на практику их использования, исключает некоторые модели, зарекомендовавшие себя как проблематичные при разработке программных систем, например, C# в отличие от C++ не поддерживает <a href="/wiki/%D0%9C%D0%BD%D0%BE%D0%B6%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BD%D0%B0%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Множественное наследование">множественное наследование</a> классов (между тем допускается <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_(%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)#Множественное_наследование_и_реализация_интерфейсов" title="Интерфейс (объектно-ориентированное программирование)">множественная реализация интерфейсов</a>).
</p>
<div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading">Содержание</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>

</div>

<h2><span id=".D0.9E.D1.81.D0.BE.D0.B1.D0.B5.D0.BD.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0"></span><span class="mw-headline" id="Особенности_языка">Особенности языка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=1" class="mw-editsection-visualeditor" title="Редактировать раздел «Особенности языка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=1" title="Редактировать раздел «Особенности языка»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>C# разрабатывался как язык программирования прикладного уровня для <a href="/wiki/Common_Language_Runtime" title="Common Language Runtime">CLR</a> и, как таковой, зависит, прежде всего, от возможностей самой CLR. Это касается, прежде всего, системы типов C#, которая отражает <a href="/wiki/Base_Class_Library" title="Base Class Library">BCL</a>. Присутствие или отсутствие тех или иных выразительных особенностей языка диктуется тем, может ли конкретная языковая особенность быть транслирована в соответствующие конструкции CLR. Так, с развитием CLR от версии 1.1 к 2.0 значительно обогатился и сам C#; подобного взаимодействия следует ожидать и в дальнейшем (однако, эта закономерность была нарушена с выходом C# 3.0, представляющего собой расширения языка, не опирающиеся на расширения платформы .NET). CLR предоставляет C#, как и всем другим <a href="/wiki/.NET_Framework" title=".NET Framework">.NET</a>-ориентированным языкам, многие возможности, которых лишены «классические» языки программирования. Например, <a href="/wiki/%D0%A1%D0%B1%D0%BE%D1%80%D0%BA%D0%B0_%D0%BC%D1%83%D1%81%D0%BE%D1%80%D0%B0" title="Сборка мусора">сборка мусора</a> не реализована в самом C#, а производится CLR для программ, написанных на C# точно так же, как это делается для программ на <a href="/wiki/Visual_Basic_.NET" title="Visual Basic .NET">VB.NET</a>, <a href="/wiki/Visual_J%E2%99%AF" class="mw-redirect" title="Visual J♯">J#</a> и др.
</p>
<h2><span id=".D0.9D.D0.B0.D0.B7.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0"></span><span class="mw-headline" id="Название_языка">Название языка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=2" class="mw-editsection-visualeditor" title="Редактировать раздел «Название языка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=2" title="Редактировать раздел «Название языка»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="thumb tright"><div class="thumbinner" style="width:92px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Treblecsharp5.svg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Treblecsharp5.svg/90px-Treblecsharp5.svg.png" decoding="async" width="90" height="75" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Treblecsharp5.svg/135px-Treblecsharp5.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Treblecsharp5.svg/180px-Treblecsharp5.svg.png 2x" data-file-width="274" data-file-height="228" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Treblecsharp5.svg" class="internal" title="Увеличить"></a></div><a href="/wiki/%D0%9D%D0%BE%D1%82%D0%B0_(%D0%BC%D1%83%D0%B7%D1%8B%D0%BA%D0%B0)" title="Нота (музыка)">Нота</a> <span class="iw plainlinks" data-title="До-диез" data-lang="en" data-lang-name="англ."><a href="/w/index.php?title=%D0%94%D0%BE-%D0%B4%D0%B8%D0%B5%D0%B7&amp;action=edit&amp;redlink=1" class="new" title="До-диез (страница отсутствует)">C♯</a><sup class="iw&#95;_note noprint" style="font-style:normal; font-weight:normal;"><a href="https://en.wikipedia.org/wiki/C%E2%99%AF_(musical_note)" class="extiw" title="en:C♯ (musical note)"><span class="iw&#95;_tooltip" title="C♯ (musical note) — версия статьи «До-диез» на английском языке">[en]</span></a></sup></span></div></div></div>
<p>Название «Си шарп» (от англ. sharp&#160;— диез) происходит от <a href="/wiki/%D0%91%D1%83%D0%BA%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F_%D0%BD%D0%BE%D1%82%D0%B0%D1%86%D0%B8%D1%8F" title="Буквенная нотация">буквенной музыкальной нотации</a>, где латинской букве <i>C</i> соответствует нота <a href="/wiki/%D0%94%D0%BE" title="До">До</a>, а знак <a href="/wiki/%D0%94%D0%B8%D0%B5%D0%B7" title="Диез">диез</a> (англ. sharp) означает повышение соответствующего ноте <a href="/wiki/%D0%97%D0%B2%D1%83%D0%BA" title="Звук">звука</a> на <a href="/wiki/%D0%9F%D0%BE%D0%BB%D1%83%D1%82%D0%BE%D0%BD" title="Полутон">полутон</a><sup id="cite_ref-8" class="reference"><a href="#cite_note-8">&#91;8&#93;</a></sup>, что аналогично названию языка <a href="/wiki/C%2B%2B" title="C++">C++</a>, где «++» обозначает <a href="/wiki/%D0%98%D0%BD%D0%BA%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D1%82" title="Инкремент">инкремент</a> <a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Переменная (программирование)">переменной</a>. Название также является игрой с цепочкой <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">C</a> → <a href="/wiki/C%2B%2B" title="C++">C++</a> → C++++(C#), так как символ «#» можно представить состоящим из 4 знаков «+»<sup id="cite_ref-9" class="reference"><a href="#cite_note-9">&#91;9&#93;</a></sup>.
</p><p>Из-за технических ограничений на отображение (стандартные шрифты, браузеры и&#160;т.&#160;д.) и того, что знак диеза ♯ не представлен на стандартной клавиатуре компьютера, при записи имени языка программирования используют <a href="/wiki/%D0%97%D0%BD%D0%B0%D0%BA_%D1%80%D0%B5%D1%88%D1%91%D1%82%D0%BA%D0%B8" title="Знак решётки">знак решётки</a> (#)<sup id="cite_ref-MS_CSharp_FAQ_10-0" class="reference"><a href="#cite_note-MS_CSharp_FAQ-10">&#91;10&#93;</a></sup>. Это соглашение отражено в Спецификации языка C# ECMA-334<sup id="cite_ref-ECMA-334_11-0" class="reference"><a href="#cite_note-ECMA-334-11">&#91;11&#93;</a></sup>. Тем не менее, на практике (например, при размещении рекламы и коробочном дизайне<sup id="cite_ref-12" class="reference"><a href="#cite_note-12">&#91;12&#93;</a></sup>), «Майкрософт» использует знак диеза.
</p><p>Названия языков программирования не принято переводить, поэтому язык называют, используя транскрипцию, — «Си шарп».
</p>
<h2><span id=".D0.A1.D1.82.D0.B0.D0.BD.D0.B4.D0.B0.D1.80.D1.82.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D1.8F"></span><span class="mw-headline" id="Стандартизация">Стандартизация</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=3" class="mw-editsection-visualeditor" title="Редактировать раздел «Стандартизация»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=3" title="Редактировать раздел «Стандартизация»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>C# стандартизирован в <a href="/wiki/Ecma_International" title="Ecma International">ECMA</a> (ECMA-334)<sup id="cite_ref-13" class="reference"><a href="#cite_note-13">&#91;13&#93;</a></sup> и <a href="/wiki/ISO" class="mw-redirect" title="ISO">ISO</a> (ISO/IEC 23270)<sup id="cite_ref-14" class="reference"><a href="#cite_note-14">&#91;14&#93;</a></sup>.
</p><p>Известно как минимум о трёх независимых реализациях C#, базирующихся на этой спецификации и находящихся в настоящее время на различных стадиях разработки:
</p>
<ul><li><a href="/wiki/Mono" title="Mono">Mono</a>, начата компанией <a href="/wiki/Ximian" title="Ximian">Ximian</a>, продолжена её покупателем и преемником <a href="/wiki/Novell" title="Novell">Novell</a>, а затем <a href="/wiki/Xamarin" title="Xamarin">Xamarin</a>.</li>
<li><a href="/wiki/DotGNU" title="DotGNU">dotGNU</a> и <a href="/wiki/Portable.NET" title="Portable.NET">Portable.NET</a>, разрабатываемые <a href="/wiki/Free_Software_Foundation" class="mw-redirect" title="Free Software Foundation">Free Software Foundation</a>.</li></ul>
<h2><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D0.B8"></span><span class="mw-headline" id="Версии">Версии</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=4" class="mw-editsection-visualeditor" title="Редактировать раздел «Версии»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=4" title="Редактировать раздел «Версии»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>На протяжении разработки языка C# было выпущено несколько его версий:
</p>
<table class="wikitable" border="1">

<tbody><tr>
<th rowspan="2">Версия
</th>
<th colspan="3">Спецификация языка
</th>
<th rowspan="2">Дата
</th>
<th rowspan="2"><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework</a>
</th>
<th rowspan="2"><a href="/wiki/Visual_Studio" class="mw-redirect" title="Visual Studio">Visual Studio</a>
</th></tr>
<tr>
<th><a href="/wiki/Ecma_International" title="Ecma International">ECMA</a>
</th>
<th><a href="/wiki/ISO/IEC_JTC1" title="ISO/IEC JTC1">ISO/IEC</a>
</th>
<th>Microsoft
</th></tr>
<tr>
<td>C# 1.0
</td>
<td rowspan="2"><a rel="nofollow" class="external text" href="http://www.ecma-international.org/publications/files/ECMA-ST-WITHDRAWN/ECMA-334,%202nd%20edition,%20December%202002.pdf">Декабрь 2002</a>
</td>
<td rowspan="2"><a rel="nofollow" class="external text" href="http://download.www.techstreet.com/cgi-bin/pdf/free/378672/ISO+IEC+23270-2003.pdf">Апрель 2003</a>&#160;<span class="ref-info">(недоступная ссылка)</span>
</td>
<td><a rel="nofollow" class="external text" href="http://download.microsoft.com/download/a/9/e/a9e229b9-fee5-4c3e-8476-917dee385062/CSharp%20Language%20Specification%20v1.0.doc">Январь 2002</a>
</td>
<td>Январь 2002
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 1.0</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio .NET (2002)</a>
</td></tr>
<tr>
<td>C# 1.2
</td>
<td><a rel="nofollow" class="external text" href="http://download.microsoft.com/download/5/e/5/5e58be0a-b02b-41ac-a4a3-7a22286214ff/csharp%20language%20specification%20v1.2.doc">Октябрь 2003</a>
</td>
<td>Апрель 2003
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 1.1</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio .NET 2003</a>
</td></tr>
<tr>
<td>C# 2.0
</td>
<td><a rel="nofollow" class="external text" href="https://web.archive.org/web/20121202194727/http://www.ecma-international.org/publications/files/ECMA-ST/Ecma-334.pdf">Июнь 2006</a>
</td>
<td><a rel="nofollow" class="external text" href="http://standards.iso.org/ittf/PubliclyAvailableStandards/c042926_ISO_IEC_23270_2006(E).zip">Сентябрь 2006</a>
</td>
<td><a rel="nofollow" class="external text" href="http://download.microsoft.com/download/9/8/f/98fdf0c7-2bbd-40d3-9fd1-5a4159fa8044/csharp%202.0%20specification_sept_2005.doc">Сентябрь 2005</a><sup id="cite_ref-note_15-0" class="reference"><a href="#cite_note-note-15">&#91;15&#93;</a></sup>
</td>
<td>Ноябрь 2005
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 2.0</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio 2005</a>
</td></tr>
<tr>
<td>C# 3.0
</td>
<td colspan="2" rowspan="2" style="background-color:#ff9090; color:black; vertical-align:middle; text-align:center;" class="table-no">Отсутствует<sup id="cite_ref-autogenerated1_16-0" class="reference"><a href="#cite_note-autogenerated1-16">&#91;16&#93;</a></sup>
</td>
<td><a rel="nofollow" class="external text" href="http://download.microsoft.com/download/3/8/8/388e7205-bc10-4226-b2a8-75351c669b09/CSharp%20Language%20Specification.doc">Август 2007</a>
</td>
<td>Ноябрь 2007
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 3.5</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio 2008</a>
</td></tr>
<tr>
<td>C# 4.0
</td>
<td><a rel="nofollow" class="external text" href="http://www.microsoft.com/downloads/details.aspx?displaylang=en&amp;FamilyID=dfbf523c-f98c-4804-afbd-459e846b268e">Апрель 2010</a>
</td>
<td>Апрель 2010
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 4</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio 2010</a>
</td></tr>
<tr>
<td>C# 5.0
</td>
<td><a rel="nofollow" class="external text" href="https://web.archive.org/web/20121202194727/http://www.ecma-international.org/publications/files/ECMA-ST/Ecma-334.pdf">Декабрь 2017</a>
</td>
<td style="background-color:#ff9090; color:black; vertical-align:middle; text-align:center;" class="table-no">Отсутствует<sup id="cite_ref-autogenerated1_16-1" class="reference"><a href="#cite_note-autogenerated1-16">&#91;16&#93;</a></sup>
</td>
<td><a rel="nofollow" class="external text" href="http://www.microsoft.com/en-us/download/details.aspx?id=7029">Июнь 2013</a>
</td>
<td>Август 2012
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 4.5</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio 2012</a>
</td></tr>
<tr>
<td>C# 6.0
</td>
<td colspan="2" style="background-color:#ff9090; color:black; vertical-align:middle; text-align:center;" class="table-no">Отсутствует
</td>
<td>Июль 2015
</td>
<td>Июль 2015
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 4.6</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio 2015</a>
</td></tr>
<tr>
<td>C# 7.0
</td>
<td colspan="2" style="background-color:#ff9090; color:black; vertical-align:middle; text-align:center;" class="table-no">Отсутствует
</td>
<td>Март 2017
</td>
<td>Март 2017
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 4.6.2</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio 2017</a>
</td></tr>
<tr>
<td>C# 8.0
</td>
<td colspan="2" style="background-color:#ff9090; color:black; vertical-align:middle; text-align:center;" class="table-no">Отсутствует
</td>
<td>
</td>
<td>Сентябрь 2019
</td>
<td><a href="/wiki/.NET_Framework" title=".NET Framework">.NET Framework 4.8</a>
</td>
<td><a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio 16.3.0</a>
</td></tr></tbody></table>
<table class="wikitable">
<caption>Общая информация по версиям
</caption>
<tbody><tr>
<th>Версия</th>
<th>Нововведения
</th></tr>
<tr>
<th>C# 2.0
</th>
<td>
<ul><li>Частичные типы</li></ul>
<ul><li>Обобщённые типы (<i>generics</i>)</li>
<li>Итераторы и ключевое слово <code>yield</code></li>
<li>Анонимные методы</li>
<li>Оператор <i>null</i>-объединения</li>
<li><i>Nullable</i>-типы</li></ul>
</td></tr>
<tr>
<th>C# 3.0
</th>
<td>
<ul><li>Запросы, интегрированные в язык (<i>LINQ</i>)</li>
<li>Инициализаторы объектов и коллекций</li>
<li>Лямбда-выражения</li>
<li>Деревья выражений</li>
<li>Неявная типизация и ключевое слово <code>var</code></li>
<li>Анонимные типы</li>
<li>Методы расширения</li>
<li>Автоматические свойства</li></ul>
</td></tr>
<tr>
<th>C# 4.0
</th>
<td>
<ul><li>Динамическое связывание и ключевое слово <code>dynamic</code></li>
<li>Именованные и опциональные аргументы</li>
<li>Обобщенная <a href="/wiki/%D0%9A%D0%BE%D0%B2%D0%B0%D1%80%D0%B8%D0%B0%D0%BD%D1%82%D0%BD%D0%BE%D1%81%D1%82%D1%8C_%D0%B8_%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D0%B2%D0%B0%D1%80%D0%B8%D0%B0%D0%BD%D1%82%D0%BD%D0%BE%D1%81%D1%82%D1%8C_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Ковариантность и контравариантность (программирование)">ковариантность и контрвариантность</a></li>
<li>Библиотека <i>TPL</i>, концепция задач и классы <code>Task</code>, <code>Parallel</code></li>
<li>Класс <code>MemoryCache</code></li>
<li>Классы параллельных коллекций</li></ul>
</td></tr>
<tr>
<th>C# 5.0
</th>
<td>
<ul><li>Шаблон <i>TAP</i></li>
<li>Асинхронные методы <code>async</code> и <code>await</code></li>
<li>Сведения о вызывающем объекте</li></ul>
</td></tr>
<tr>
<th>C# 6.0
</th>
<td>
<ul><li>Компилятор как сервис</li>
<li>Импорт членов статических типов в пространство имён</li>
<li>Фильтры исключений</li>
<li><code>await</code> в блоках <code>catch</code>/<code>finally</code></li>
<li>Инициализаторы автосвойств</li>
<li>Автосвойства только для чтения</li>
<li><i>null</i>-условные операции (<code>?.</code> и <code>?[]</code>)</li>
<li>Интерполяция строк</li>
<li>Оператор <code>nameof</code></li>
<li>Инициализатор словаря</li>
<li>Функции сжатые до выражений</li></ul>
</td></tr>
<tr>
<th>C# 7.0<sup id="cite_ref-seven_17-0" class="reference"><a href="#cite_note-seven-17">&#91;17&#93;</a></sup>
</th>
<td>
<ul><li><code>out</code>-переменные</li>
<li>Сопоставление с шаблоном</li>
<li>Шаблоны с <code>is</code></li>
<li>Шаблоны и выражение <code>switch</code></li>
<li>Кортежи</li>
<li>Распаковка кортежей (деконструкторы)</li>
<li>Локальные функции</li>
<li>Улучшения литералов</li>
<li>Локальные переменные и возвращаемые значения по ссылке</li>
<li>Расширение списка типов, возвращаемых асинхронными методами</li>
<li>Больше членов класса в виде выражений</li>
<li><code>throw</code> выражения</li></ul>
</td></tr>
<tr>
<th>C# 8.0
</th>
<td>
<ul><li>Члены только для чтения</li>
<li>Члены интерфейса по умолчанию</li>
<li>Улучшения сопоставления шаблонов</li>
<li>Объявления using</li>
<li>Статические локальные функции</li>
<li>Удаляемые ссылочные структуры</li>
<li>Ссылочные типы, допускающие значение NULL</li>
<li>Асинхронные потоки</li>
<li>Индексы и диапазоны</li>
<li>Присваивание объединения со значением NULL</li>
<li>Неуправляемые сконструированные типы</li>
<li>Выражения stackalloc во вложенных выражениях</li>
<li>Больше членов класса в виде выражений</li>
<li>Улучшения интерполированных строк</li></ul>
</td></tr></tbody></table>
<h3><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D1.8F_1.0"></span><span class="mw-headline" id="Версия_1.0">Версия 1.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=5" class="mw-editsection-visualeditor" title="Редактировать раздел «Версия 1.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=5" title="Редактировать раздел «Версия 1.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Проект C# был начат в декабре 1998 и получил кодовое название COOL (C-style Object Oriented Language). Версия 1.0 была анонсирована вместе с платформой .NET в июне <a href="/wiki/2000_%D0%B3%D0%BE%D0%B4" title="2000 год">2000 года</a>, тогда же появилась и первая общедоступная <a href="/wiki/%D0%91%D0%B5%D1%82%D0%B0-%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Бета-тестирование">бета-версия</a>; C# 1.0 окончательно вышел вместе с <a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Microsoft Visual Studio</a> .NET в феврале <a href="/wiki/2002_%D0%B3%D0%BE%D0%B4" title="2002 год">2002 года</a>.
</p><p>Первая версия C# напоминала по своим возможностям Java 1.4, несколько их расширяя: так, в C# имелись <i>свойства</i> (выглядящие в <a href="/wiki/%D0%98%D1%81%D1%85%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" title="Исходный код">коде</a> как <a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%B5_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0" title="Поле класса">поля</a> <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Объект (программирование)">объекта</a>, но на деле вызывающие при обращении к ним методы класса), индексаторы (подобные свойствам, но принимающие параметр как индекс массива), <a href="/wiki/%D0%A1%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D0%B9%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Событийно-ориентированное программирование">события</a>, <a href="/wiki/%D0%94%D0%B5%D0%BB%D0%B5%D0%B3%D0%B0%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Делегат (программирование)">делегаты</a>, <a href="/wiki/%D0%A6%D0%B8%D0%BA%D0%BB_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Цикл (программирование)">циклы</a> <code>foreach</code>, <a href="/wiki/%D0%A1%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Структура (программирование)">структуры</a>, передаваемые по значению, автоматическое преобразование встроенных типов в объекты при необходимости (<i>boxing</i>), атрибуты, встроенные средства взаимодействия с неуправляемым кодом (<a href="/wiki/DLL" class="mw-redirect" title="DLL">DLL</a>, <a href="/wiki/Component_Object_Model" title="Component Object Model">COM</a>) и прочее.
</p><p>Кроме того, в C# решено было перенести некоторые возможности C++, отсутствовавшие в Java: беззнаковые типы, <a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%BE%D0%B2" title="Перегрузка операторов">перегрузку операторов</a> (с некоторыми ограничениями, в отличие от <a href="/wiki/C%2B%2B" title="C++">C++</a>), передача параметров в <a href="/wiki/%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_(%D1%8F%D0%B7%D1%8B%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" class="mw-redirect" title="Метод (языки программирования)">метод</a> по <a href="/wiki/%D0%A1%D1%81%D1%8B%D0%BB%D0%BA%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Ссылка (программирование)">ссылке</a>, методы с переменным числом параметров, оператор <code><a href="/wiki/GOTO" class="mw-redirect" title="GOTO">goto</a></code> (с ограничениями). Также в C# оставили ограниченную возможность работы с <a href="/wiki/%D0%A3%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C_(%D1%82%D0%B8%D0%BF_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)" title="Указатель (тип данных)">указателями</a>&#160;— в местах кода, специально обозначенных словом <code>unsafe</code> и при указании специальной опции <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%82%D0%BE%D1%80" title="Компилятор">компилятору</a>.
</p>
<h3><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D1.8F_2.0"></span><span class="mw-headline" id="Версия_2.0">Версия 2.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=6" class="mw-editsection-visualeditor" title="Редактировать раздел «Версия 2.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=6" title="Редактировать раздел «Версия 2.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Проект спецификации C# 2.0 впервые был опубликован Microsoft в октябре <a href="/wiki/2003_%D0%B3%D0%BE%D0%B4" title="2003 год">2003 года</a>; в <a href="/wiki/2004_%D0%B3%D0%BE%D0%B4" title="2004 год">2004 году</a> выходили бета-версии (проект с кодовым названием Whidbey), C# 2.0 окончательно вышел <a href="/wiki/7_%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F" title="7 ноября">7 ноября</a> <a href="/wiki/2005_%D0%B3%D0%BE%D0%B4" title="2005 год">2005 года</a> вместе с <a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Visual Studio</a> 2005 и .NET 2.0.
</p>
<dl><dt>Новые возможности в версии 2.0</dt></dl>
<ul><li>Частичные типы (разделение реализации класса более чем на один <a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB" title="Файл">файл</a>).</li>
<li>Обобщённые, или параметризованные типы (<i>generics</i>). В отличие от <a href="/wiki/%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD%D1%8B_C%2B%2B" title="Шаблоны C++">шаблонов C++</a>, они поддерживают некоторые дополнительные возможности и работают на уровне <a href="/wiki/%D0%92%D0%B8%D1%80%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D0%B0" title="Виртуальная машина">виртуальной машины</a>. Вместе с тем, параметрами обобщённого типа не могут быть выражения, они не могут быть полностью или частично специализированы, не поддерживают шаблонных параметров по умолчанию, от шаблонного параметра нельзя наследоваться, и&#160;т.&#160;д.<sup id="cite_ref-18" class="reference"><a href="#cite_note-18">&#91;18&#93;</a></sup></li>
<li>Новая форма <a href="/wiki/%D0%98%D1%82%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80" title="Итератор">итератора</a>, позволяющая создавать <a href="/wiki/%D0%A1%D0%BE%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0" title="Сопрограмма">сопрограммы</a> с помощью ключевого слова <code>yield</code>, подобно <a href="/wiki/Python" title="Python">Python</a> и <a href="/wiki/Ruby" title="Ruby">Ruby</a>.</li>
<li>Анонимные методы, обеспечивающие функциональность <a href="/wiki/%D0%97%D0%B0%D0%BC%D1%8B%D0%BA%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Замыкание (программирование)">замыкания</a>.</li>
<li>Оператор <i>null</i>-объединения: '??': <code>return obj1&#160;?? obj2;</code> означает (в нотации C# 1.0) <code>return obj1!=null&#160;? obj1&#160;: obj2;</code>.</li>
<li>Обнуляемые (<i>nullable</i>) типы&#160;— значения (обозначаемые вопросительным знаком, например, <code>int? i = null;</code>), представляющие собой те же самые типы-значения, способные принимать также значение <code>null</code>. Такие типы позволяют улучшить взаимодействие с <a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F_%D0%B1%D0%B0%D0%B7%D0%B0%D0%BC%D0%B8_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="Система управления базами данных">базами данных</a> через язык <a href="/wiki/SQL" title="SQL">SQL</a>.</li>
<li>Возможность создавать хранимые процедуры, триггеры и даже типы данных на .Net языках (в том числе и на C#).</li>
<li>Поддержка 64-разрядных вычислений, что кроме всего прочего, позволяет увеличить адресное пространство и использовать 64-разрядные примитивные типы данных.</li></ul>
<h3><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D1.8F_3.0"></span><span class="mw-headline" id="Версия_3.0">Версия 3.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=7" class="mw-editsection-visualeditor" title="Редактировать раздел «Версия 3.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=7" title="Редактировать раздел «Версия 3.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В июне 2004 года <a href="/wiki/%D0%A5%D0%B5%D0%B9%D0%BB%D1%81%D0%B1%D0%B5%D1%80%D0%B3,_%D0%90%D0%BD%D0%B4%D0%B5%D1%80%D1%81" title="Хейлсберг, Андерс">Андерс Хейлсберг</a> впервые рассказал на сайте Microsoft о планируемых расширениях языка в C#3.0<sup id="cite_ref-19" class="reference"><a href="#cite_note-19">&#91;19&#93;</a></sup>. В сентябре 2005 года вышли проект спецификации C# 3.0 и бета-версия C# 3.0, устанавливаемая в виде дополнения к существующим Visual Studio 2005 и .NET 2.0. Окончательно эта версия языка вошла в Visual Studio 2008 и .NET 3.5.
</p>
<dl><dt>Новые возможности в версии 3.0</dt></dl>
<p>В C# 3.0 появились следующие радикальные добавления к языку:
</p>
<ul><li>ключевые слова <code>select, from, where</code>, позволяющие делать запросы из <a href="/wiki/XML" title="XML">XML</a> документов, коллекций <span class="nowrap">и т. п.</span> Эти запросы имеют сходство с запросами <a href="/wiki/SQL" title="SQL">SQL</a> и реализуются компонентом <a href="/wiki/Language_Integrated_Query" title="Language Integrated Query">LINQ</a>. (Сама фраза «language integrated query» переводится «запрос, интегрированный в язык».)</li>
<li>Инициализация объекта вместе с его свойствами:</li></ul>
<dl><dd><div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">Customer</span> <span class="n">c</span> <span class="p">=</span> <span class="k">new</span> <span class="n">Customer</span><span class="p">();</span> <span class="n">c</span><span class="p">.</span><span class="n">Name</span> <span class="p">=</span> <span class="s">&quot;James&quot;</span><span class="p">;</span> <span class="n">c</span><span class="p">.</span><span class="n">Age</span><span class="p">=</span><span class="m">30</span><span class="p">;</span>
</pre></div></dd>
<dd>можно записать как</dd>
<dd><div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">Customer</span> <span class="n">c</span> <span class="p">=</span> <span class="k">new</span> <span class="n">Customer</span> <span class="p">{</span> <span class="n">Name</span> <span class="p">=</span> <span class="s">&quot;James&quot;</span><span class="p">,</span> <span class="n">Age</span> <span class="p">=</span> <span class="m">30</span> <span class="p">};</span>
</pre></div></dd></dl>
<ul><li><a href="/wiki/%D0%9B%D1%8F%D0%BC%D0%B1%D0%B4%D0%B0-%D0%B2%D1%8B%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Лямбда-выражения">Лямбда-выражения</a>:</li></ul>
<dl><dd><div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">listOfFoo</span><span class="p">.</span><span class="n">Where</span><span class="p">(</span><span class="k">delegate</span><span class="p">(</span><span class="n">Foo</span> <span class="n">x</span><span class="p">)</span> <span class="p">{</span> <span class="k">return</span> <span class="n">x</span><span class="p">.</span><span class="n">size</span> <span class="p">&gt;</span> <span class="m">10</span><span class="p">;</span> <span class="p">});</span>
</pre></div></dd>
<dd>теперь можно записать как</dd>
<dd><div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">listOfFoo</span><span class="p">.</span><span class="n">Where</span><span class="p">(</span><span class="n">x</span> <span class="p">=&gt;</span> <span class="n">x</span><span class="p">.</span><span class="n">size</span> <span class="p">&gt;</span> <span class="m">10</span><span class="p">);</span>
</pre></div></dd></dl>
<ul><li>Деревья выражений:</li></ul>
<dl><dd>лямбда-выражения теперь могут представляться в виде структуры данных, доступной для обхода во время выполнения, тем самым позволяя транслировать строго типизированные C#-выражения в другие домены (например, выражения SQL).</dd></dl>
<ul><li>Неявная типизация: <a href="/wiki/%D0%92%D1%8B%D0%B2%D0%BE%D0%B4_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Вывод типов">Вывод типов</a> локальной переменной. Для неявной типизации вместо названия типа данных используется ключевое слово <code>var</code>. Затем уже при компиляции компилятор сам выводит тип данных исходя из присвоенного значения:<code>var x = "hello";</code> вместо <code>string x = "hello";</code></li>
<li>Анонимные типы: <code>var x = new { Name = "James" };</code></li>
<li>Методы расширения. Появилась возможность добавления новых методов в уже существующие классы. Реализуется с помощью ключевого слова <code>this</code> при первом параметре статической функции статического класса.</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="k">static</span> <span class="k">class</span> <span class="nc">StringExtensions</span>
<span class="p">{</span>
  <span class="k">public</span> <span class="k">static</span> <span class="kt">int</span> <span class="nf">ToInt32</span><span class="p">(</span><span class="k">this</span> <span class="kt">string</span> <span class="n">val</span><span class="p">)</span>
  <span class="p">{</span>
    <span class="k">return</span> <span class="n">Int32</span><span class="p">.</span><span class="n">Parse</span><span class="p">(</span><span class="n">val</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// ...</span>
<span class="kt">string</span> <span class="n">s</span> <span class="p">=</span> <span class="s">&quot;10&quot;</span><span class="p">;</span>
<span class="kt">int</span> <span class="n">x</span> <span class="p">=</span> <span class="n">s</span><span class="p">.</span><span class="n">ToInt32</span><span class="p">();</span>
</pre></div>
<ul><li>Автоматические свойства: компилятор сгенерирует закрытое (<i>private</i>) поле и соответствующие <i>аксессор</i> и <i>мутатор</i> для кода вида</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="kt">string</span> <span class="n">Name</span> <span class="p">{</span> <span class="k">get</span><span class="p">;</span> <span class="k">private</span> <span class="k">set</span><span class="p">;</span> <span class="p">}</span>
</pre></div>
<p>C# 3.0 совместим с C# 2.0 по генерируемому <a href="/wiki/Microsoft_Intermediate_Language" class="mw-redirect" title="Microsoft Intermediate Language">MSIL</a>-коду; улучшения в языке&#160;— чисто синтаксические и реализуются на этапе компиляции. Например, многие из интегрированных запросов LINQ можно осуществить, используя безымянные делегаты в сочетании с предикатными методами над контейнерами наподобие <code>List.FindAll</code> и <code>List.RemoveAll</code>.
</p>
<h3><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D1.8F_4.0"></span><span class="mw-headline" id="Версия_4.0">Версия 4.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=8" class="mw-editsection-visualeditor" title="Редактировать раздел «Версия 4.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=8" title="Редактировать раздел «Версия 4.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Превью C# 4.0 было представлено в конце 2008 года, вместе с CTP-версией Visual Studio 2010.
</p><p>Visual Basic 10.0 и C# 4.0 были выпущены в апреле 2010 года, одновременно с выпуском Visual Studio 2010.
</p>
<dl><dt>Новые возможности в версии 4.0<sup id="cite_ref-20" class="reference"><a href="#cite_note-20">&#91;20&#93;</a></sup></dt></dl>
<ul><li>Возможность использования позднего связывания, для использования:
<ul><li>с языками с динамической типизацией (<a href="/wiki/Python" title="Python">Python</a>, <a href="/wiki/Ruby" title="Ruby">Ruby</a>)</li>
<li>с COM-объектами</li>
<li>отражения (reflection)</li>
<li>объектов с изменяемой структурой (DOM). Появляется ключевое слово <code>dynamic</code>.</li></ul></li>
<li>Именованные и опциональные параметры</li>
<li>Новые возможности COM interop</li>
<li><a href="/wiki/%D0%9A%D0%BE%D0%B2%D0%B0%D1%80%D0%B8%D0%B0%D0%BD%D1%82%D0%BD%D0%BE%D1%81%D1%82%D1%8C_%D0%B8_%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D0%B2%D0%B0%D1%80%D0%B8%D0%B0%D0%BD%D1%82%D0%BD%D0%BE%D1%81%D1%82%D1%8C_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Ковариантность и контравариантность (программирование)">Ковариантность и контравариантность</a> обобщенных интерфейсов и делегатов</li>
<li><a href="/wiki/%D0%9A%D0%BE%D0%BD%D1%82%D1%80%D0%B0%D0%BA%D1%82%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Контрактное программирование">Контракты в коде</a> (Code Contracts)</li>
<li>Библиотека параллельных задач <i>TPL</i> (<i>Task Parallel Library</i>), концепция задач и классы <code>Task</code>, <code>TaskFactory</code>, <code>Parallel</code></li>
<li>Добавлен класс <code>MemoryCache</code>, который предназначен для кэширования контента. Он похож на класс <code>Cache</code> ASP.NET, но его можно использовать при написании веб- / графических / консольных приложений.</li>
<li>Добавлено пространство имен <i>System.Collections.Concurrent</i> и новые классы параллельных коллекций (<i>ConcurrentQueue</i>, <i>ConcurrentStack</i>, <i>ConcurrentBag</i>,…), которые предоставляют не только большую эффективность, но и более полную потокобезопасность.</li></ul>
<p>Примеры:
</p>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">dynamic</span> <span class="n">calc</span> <span class="p">=</span> <span class="n">GetCalculator</span><span class="p">();</span>
<span class="kt">int</span> <span class="n">sum</span> <span class="p">=</span> <span class="n">calc</span><span class="p">.</span><span class="n">Add</span><span class="p">(</span><span class="m">10</span><span class="p">,</span> <span class="m">20</span><span class="p">);</span> <span class="c1">// Динамический вызов</span>
</pre></div>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="k">void</span> <span class="nf">SomeMethod</span><span class="p">(</span><span class="kt">int</span> <span class="n">x</span><span class="p">,</span> <span class="kt">int</span> <span class="n">y</span> <span class="p">=</span> <span class="m">5</span><span class="p">,</span> <span class="kt">int</span> <span class="n">z</span> <span class="p">=</span> <span class="m">7</span><span class="p">);</span> <span class="c1">// Опциональные параметры</span>
</pre></div>
<h3><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D1.8F_5.0"></span><span class="mw-headline" id="Версия_5.0">Версия 5.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=9" class="mw-editsection-visualeditor" title="Редактировать раздел «Версия 5.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=9" title="Редактировать раздел «Версия 5.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><b>Новые возможности в версии 5.0</b>
</p>
<ul><li>Шаблон TAP (Task-based Asynchronous Pattern). TAP использует один метод для представления инициализации и завершения асинхронной операции.</li>
<li>Асинхронные методы (<code>async</code> и <code>await</code>)&#160;— как реализация шаблона TAP.</li>
<li>Сведения о вызывающем объекте</li></ul>
<h3><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D1.8F_6.0"></span><span class="mw-headline" id="Версия_6.0">Версия 6.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=10" class="mw-editsection-visualeditor" title="Редактировать раздел «Версия 6.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=10" title="Редактировать раздел «Версия 6.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><b>Новые возможности в версии 6.0</b>
</p>
<ul><li><i>null</i>-условные операторы. Добавлены новые операторы: <code>?.</code> и <code>?[]</code>:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">int?</span> <span class="n">length</span> <span class="p">=</span> <span class="n">customers</span><span class="p">?.</span><span class="n">Length</span><span class="p">;</span> <span class="c1">// null if customers is null</span>
<span class="n">Customer</span> <span class="n">first</span> <span class="p">=</span> <span class="n">customers</span><span class="p">?[</span><span class="m">0</span><span class="p">];</span>  <span class="c1">// null if customers is null</span>
</pre></div>
<ul><li>Функции сжатые до выражений (<i>expression-bodied functions</i>). Теперь определение метода может быть задано с использованием лямбда-синтаксиса:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="n">Point</span> <span class="nf">Move</span><span class="p">(</span><span class="kt">int</span> <span class="n">dx</span><span class="p">,</span> <span class="kt">int</span> <span class="n">dy</span><span class="p">)</span> <span class="p">=&gt;</span> <span class="k">new</span> <span class="n">Point</span><span class="p">(</span><span class="n">x</span> <span class="p">+</span> <span class="n">dx</span><span class="p">,</span> <span class="n">y</span> <span class="p">+</span> <span class="n">dy</span><span class="p">);</span>
</pre></div>
<ul><li>Инициализаторы автосвойств. Автосвойства теперь можно инициализировать при объявлении:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="kt">string</span> <span class="n">First</span> <span class="p">{</span> <span class="k">get</span><span class="p">;</span> <span class="k">set</span><span class="p">;</span> <span class="p">}</span> <span class="p">=</span> <span class="s">&quot;Jane&quot;</span><span class="p">;</span>
</pre></div>
<ul><li>Автосвойства только для чтения. Автосвойства теперь могут быть объявлены без сеттеров:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="kt">string</span> <span class="n">First</span> <span class="p">{</span> <span class="k">get</span><span class="p">;</span> <span class="p">}</span> <span class="p">=</span> <span class="s">&quot;Jane&quot;</span><span class="p">;</span>
</pre></div>
<ul><li>Инициализаторы индексов. Теперь можно инициализировать не только объекты и коллекции, но и словари:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">var</span> <span class="n">numbers</span> <span class="p">=</span> <span class="k">new</span> <span class="n">Dictionary</span><span class="p">&lt;</span><span class="kt">int</span><span class="p">,</span> <span class="kt">string</span><span class="p">&gt;</span> <span class="p">{</span>
<span class="na">    [7]</span> <span class="p">=</span> <span class="s">&quot;seven&quot;</span><span class="p">,</span>
<span class="na">    [9]</span> <span class="p">=</span> <span class="s">&quot;nine&quot;</span><span class="p">,</span>
<span class="na">    [13]</span> <span class="p">=</span> <span class="s">&quot;thirteen&quot;</span>
<span class="p">};</span>
</pre></div>
<ul><li>Интерполяция строк. Вместо использования конструкций с <code>String.Format()</code>, например:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">var</span> <span class="n">s</span> <span class="p">=</span> <span class="n">String</span><span class="p">.</span><span class="n">Format</span><span class="p">(</span><span class="s">&quot;{0} is {1} year{{s}} old&quot;</span><span class="p">,</span> <span class="n">p</span><span class="p">.</span><span class="n">Name</span><span class="p">,</span> <span class="n">p</span><span class="p">.</span><span class="n">Age</span><span class="p">);</span>
</pre></div>
<p>теперь можно размещать код прямо в строке:
</p>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">var</span> <span class="n">s</span> <span class="p">=</span> <span class="err">$</span><span class="s">&quot;{p.Name} is {p.Age} year{{s}} old&quot;</span><span class="p">;</span>
</pre></div>
<ul><li>Фильтры исключений. Появилась возможность задавать условия для блоков <code>catch</code>:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">try</span> <span class="p">{</span> <span class="err">…</span> <span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="n">Exception</span> <span class="n">e</span><span class="p">)</span> <span class="n">when</span> <span class="p">(</span><span class="n">Log</span><span class="p">(</span><span class="n">e</span><span class="p">))</span> <span class="p">{</span> <span class="err">…</span> <span class="p">}</span>
</pre></div>
<ul><li>Импорт статических функций типов. Теперь доступ к статическим членам типов возможен без указания полного имени этих членов:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">using</span> <span class="nn">static</span> <span class="n">System</span><span class="p">.</span><span class="n">Console</span><span class="p">;</span>
<span class="k">using</span> <span class="nn">static</span> <span class="n">System</span><span class="p">.</span><span class="n">Math</span><span class="p">;</span>
<span class="k">class</span> <span class="nc">Program</span>
<span class="p">{</span>
    <span class="k">static</span> <span class="k">void</span> <span class="nf">Main</span><span class="p">()</span>
    <span class="p">{</span>
        <span class="n">WriteLine</span><span class="p">(</span><span class="n">Sqrt</span><span class="p">(</span><span class="m">3</span><span class="p">*</span><span class="m">3</span> <span class="p">+</span> <span class="m">4</span><span class="p">*</span><span class="m">4</span><span class="p">));</span> 
    <span class="p">}</span>
<span class="p">}</span>
</pre></div>
<ul><li>Оператор <code>nameof</code>. Новый оператор, который возвращает компактное строковое представление для переданного в качестве аргумента типа:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">WriteLine</span><span class="p">(</span><span class="n">nameof</span><span class="p">(</span><span class="n">person</span><span class="p">.</span><span class="n">Address</span><span class="p">.</span><span class="n">ZipCode</span><span class="p">));</span> <span class="c1">// prints &quot;ZipCode&quot;</span>
</pre></div>
<ul><li>Для асинхронного программирования была добавлена возможность использования операторов <code>await</code> внутри блоков <code>catch</code> и <code>finally</code>:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">Resource</span> <span class="n">res</span> <span class="p">=</span> <span class="k">null</span><span class="p">;</span>
<span class="k">try</span>
<span class="p">{</span>
    <span class="n">res</span> <span class="p">=</span> <span class="k">await</span> <span class="n">Resource</span><span class="p">.</span><span class="n">OpenAsync</span><span class="p">(</span><span class="err">…</span><span class="p">);</span>       <span class="c1">// You could do this.</span>
<span class="p">}</span> 
<span class="k">catch</span><span class="p">(</span><span class="n">ResourceException</span> <span class="n">e</span><span class="p">)</span>
<span class="p">{</span>
    <span class="k">await</span> <span class="n">Resource</span><span class="p">.</span><span class="n">LogAsync</span><span class="p">(</span><span class="n">res</span><span class="p">,</span> <span class="n">e</span><span class="p">);</span>         <span class="c1">// Now you can do this …</span>
<span class="p">}</span>
<span class="k">finally</span>
<span class="p">{</span>
    <span class="k">if</span> <span class="p">(</span><span class="n">res</span> <span class="p">!=</span> <span class="k">null</span><span class="p">)</span> <span class="k">await</span> <span class="n">res</span><span class="p">.</span><span class="n">CloseAsync</span><span class="p">();</span> <span class="c1">// … and this.</span>
<span class="p">}</span>
</pre></div>
<h3><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D1.8F_7.0"></span><span class="mw-headline" id="Версия_7.0">Версия 7.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=11" class="mw-editsection-visualeditor" title="Редактировать раздел «Версия 7.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=11" title="Редактировать раздел «Версия 7.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><b>Новые возможности в версии 7.0</b><sup id="cite_ref-seven_17-1" class="reference"><a href="#cite_note-seven-17">&#91;17&#93;</a></sup>
</p>
<ul><li><code>out</code>-переменные, которые позволяют объявить переменные сразу в вызове метода (причем областью видимости для таких переменных является внешний блок):</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">p</span><span class="p">.</span><span class="n">GetCoordinates</span><span class="p">(</span><span class="k">out</span> <span class="kt">int</span> <span class="n">x</span><span class="p">,</span> <span class="k">out</span> <span class="kt">int</span> <span class="n">y</span><span class="p">);</span>
</pre></div>
<ul><li>Сопоставление с шаблоном. Вводится понятие шаблона (<code>pattern</code>), который представляет собой синтаксическую конструкцию, позволяющую проверить соответствие переменной определённой <i>форме</i> и извлечь из неё информацию.</li>
<li>Шаблоны с <code>is</code> (<code>is</code> теперь может использоваться не только с типом, но и с шаблоном&#160;— в качестве правого аргумента)</li>
<li>Шаблоны и выражение <code>switch</code>. Варианты использования <code>switch</code> были расширены, теперь можно:
<ul><li>использовать любые типы (не только примитивные);</li>
<li>использовать шаблоны в выражениях <code>case</code>;</li>
<li>добавлять дополнительные условия к выражениям <code>case</code> (используя ключевое слово <code>when</code>).</li></ul></li>
<li>Кортежи. Добавлен тип <i>кортеж значений</i> (структура <code>ValueTuple</code>) и синтаксис работы с данными этого типа:</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="p">(</span><span class="kt">string</span><span class="p">,</span> <span class="kt">string</span><span class="p">,</span> <span class="kt">string</span><span class="p">)</span> <span class="n">LookupName</span><span class="p">(</span><span class="kt">long</span> <span class="n">id</span><span class="p">)</span> <span class="c1">// возвращаемый тип - кортеж</span>
<span class="p">{</span>
    <span class="p">...</span> <span class="c1">// инициализируем данные</span>
    <span class="k">return</span> <span class="p">(</span><span class="n">first</span><span class="p">,</span> <span class="n">middle</span><span class="p">,</span> <span class="n">last</span><span class="p">);</span> <span class="c1">// литерал кортежа</span>
<span class="p">}</span>
</pre></div>
<ul><li>Распаковка кортежей. Была добавлена новая синтаксическая конструкция <i>деконструктор</i>, позволяющая извлечь кортеж, состоящий из членов класса.</li>
<li>Локальные функции. Теперь функцию, которая используется только в теле какого-либо метода, можно объявить прямо в теле этого метода.</li>
<li>Улучшения литералов. Были добавлены <i>бинарные литералы</i> и <i>символ разделителя </i>(<code>_</code>) в числовых литералах.</li>
<li>Локальные переменные и возвращаемые значения по ссылке. Расширена функциональность ключевого слова <code>ref</code>. Теперь можно возвратить данные из метода или сохранить их в локальной переменной по ссылке.</li>
<li>Расширение списка типов, возвращаемых асинхронными методами</li>
<li>Больше членов класса в виде выражений. Синтаксис функций, сжатых до выражений (<code>expression-bodied functions</code>), теперь применим для сеттеров, геттеров, конструкторов и деструкторов.</li>
<li><code>throw</code>-выражения. Теперь можно использовать <code>throw</code> в функциях, сжатых до выражений (<code>expression-bodied functions</code>):</li></ul>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="kt">string</span> <span class="nf">GetLastName</span><span class="p">()</span> <span class="p">=&gt;</span> <span class="k">throw</span> <span class="k">new</span> <span class="n">NotImplementedException</span><span class="p">();</span>
</pre></div><p><br />
</p><h3><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D1.8F_8.0"></span><span class="mw-headline" id="Версия_8.0">Версия 8.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=12" class="mw-editsection-visualeditor" title="Редактировать раздел «Версия 8.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=12" title="Редактировать раздел «Версия 8.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><b>Новые возможности в версии 8.0</b><sup id="cite_ref-21" class="reference"><a href="#cite_note-21">&#91;21&#93;</a></sup>
</p>
<ul><li>Модификатор <code>readonly</code>. Был создан для обозначения члена, который не изменит состояние.</li>
<li>Методы интерфейсов по умолчанию. Теперь при создании метода интерфейса можно объявить его реализацию по умолчанию, которую можно переопределить в классе, который реализует этот интерфейс.</li>
<li>Сопоставление шаблонов. Возможность позволяет работать с шаблонами в зависимости от формата в связанных, но различных типах данных.
<ul><li>Рекурсивные шаблоны. Является выражением шаблона, которое применяется к результатам другого выражения шаблона.</li>
<li>Выражения switch позволяют сократить количество case и break, а также фигурных скобок.<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="k">enum</span> <span class="n">Rainbow</span>
<span class="p">{</span>
    <span class="n">Red</span><span class="p">,</span>
    <span class="n">Orange</span><span class="p">,</span>
    <span class="n">Yellow</span><span class="p">,</span>
    <span class="n">Green</span><span class="p">,</span>
    <span class="n">Blue</span><span class="p">,</span>
    <span class="n">Indigo</span><span class="p">,</span>
    <span class="n">Violet</span>
<span class="p">}</span>

<span class="k">public</span> <span class="k">static</span> <span class="n">RGBColor</span> <span class="nf">FromRainbow</span><span class="p">(</span><span class="n">Rainbow</span> <span class="n">colorBand</span><span class="p">)</span> <span class="p">=&gt;</span>
    <span class="n">colorBand</span> <span class="k">switch</span>
    <span class="p">{</span>
        <span class="n">Rainbow</span><span class="p">.</span><span class="n">Red</span>    <span class="p">=&gt;</span> <span class="k">new</span> <span class="n">RGBColor</span><span class="p">(</span><span class="m">0</span><span class="n">xFF</span><span class="p">,</span> <span class="m">0</span><span class="n">x00</span><span class="p">,</span> <span class="m">0</span><span class="n">x00</span><span class="p">),</span>
        <span class="n">Rainbow</span><span class="p">.</span><span class="n">Orange</span> <span class="p">=&gt;</span> <span class="k">new</span> <span class="n">RGBColor</span><span class="p">(</span><span class="m">0</span><span class="n">xFF</span><span class="p">,</span> <span class="m">0</span><span class="n">x7F</span><span class="p">,</span> <span class="m">0</span><span class="n">x00</span><span class="p">),</span>
        <span class="n">Rainbow</span><span class="p">.</span><span class="n">Yellow</span> <span class="p">=&gt;</span> <span class="k">new</span> <span class="n">RGBColor</span><span class="p">(</span><span class="m">0</span><span class="n">xFF</span><span class="p">,</span> <span class="m">0</span><span class="n">xFF</span><span class="p">,</span> <span class="m">0</span><span class="n">x00</span><span class="p">),</span>
        <span class="n">Rainbow</span><span class="p">.</span><span class="n">Green</span>  <span class="p">=&gt;</span> <span class="k">new</span> <span class="n">RGBColor</span><span class="p">(</span><span class="m">0</span><span class="n">x00</span><span class="p">,</span> <span class="m">0</span><span class="n">xFF</span><span class="p">,</span> <span class="m">0</span><span class="n">x00</span><span class="p">),</span>
        <span class="n">Rainbow</span><span class="p">.</span><span class="n">Blue</span>   <span class="p">=&gt;</span> <span class="k">new</span> <span class="n">RGBColor</span><span class="p">(</span><span class="m">0</span><span class="n">x00</span><span class="p">,</span> <span class="m">0</span><span class="n">x00</span><span class="p">,</span> <span class="m">0</span><span class="n">xFF</span><span class="p">),</span>
        <span class="n">Rainbow</span><span class="p">.</span><span class="n">Indigo</span> <span class="p">=&gt;</span> <span class="k">new</span> <span class="n">RGBColor</span><span class="p">(</span><span class="m">0</span><span class="n">x4B</span><span class="p">,</span> <span class="m">0</span><span class="n">x00</span><span class="p">,</span> <span class="m">0</span><span class="n">x82</span><span class="p">),</span>
        <span class="n">Rainbow</span><span class="p">.</span><span class="n">Violet</span> <span class="p">=&gt;</span> <span class="k">new</span> <span class="n">RGBColor</span><span class="p">(</span><span class="m">0</span><span class="n">x94</span><span class="p">,</span> <span class="m">0</span><span class="n">x00</span><span class="p">,</span> <span class="m">0</span><span class="n">xD3</span><span class="p">),</span>
        <span class="n">_</span>              <span class="p">=&gt;</span> <span class="k">throw</span> <span class="k">new</span> <span class="n">ArgumentException</span><span class="p">(</span><span class="n">message</span><span class="p">:</span> <span class="s">&quot;invalid enum value&quot;</span><span class="p">,</span> <span class="n">paramName</span><span class="p">:</span> <span class="n">nameof</span><span class="p">(</span><span class="n">colorBand</span><span class="p">)),</span>
    <span class="p">};</span>
</pre></div></li>
<li>Шаблоны свойств. Позволяет сопоставлять свойства исследуемого объекта с помощью <code>{ variable&#160;: value } =&gt; ...</code> .</li>
<li>Шаблоны кортежей. Используется, если нужно работать с несколькими наборами входных данных. <code>(value1, value2,..) =&gt; ...</code></li></ul></li>
<li>Объявление <code>using</code>. Это объявление переменной, которому предшествует ключевое слово <code>using</code>. Оно сообщает компилятору, что объявляемая переменная должна быть удалена в конце области видимости.</li>
<li>Статический локальный метод. Теперь можно убедиться в том, что метод не охватывает какие-либо переменные из области видимости с помощью добавления к нему модификатора <code>static</code>.</li>
<li>Удаляемые ссылочные структуры. Ссылочные структуры не могут реализовать <code>IDisposable</code> (как и любые другие интерфейсы). Поэтому чтобы удалить <code>ref struct</code>, необходим доступный <code>void Dispose()</code>.</li>
<li>Ссылочные типы, допускающие значение <code>null</code>. Теперь, чтобы указать, что переменная ссылочного типа допускает значение <code>null</code>, необходимо поставить к имени типа <code>?</code></li>
<li>Асинхронные потоки. Это во-первых интерфейс <code>IAsyncEnumerable&lt;T&gt;</code>. А во-вторых конструкция <code>foreach</code> с <code>await</code>.<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">public</span> <span class="k">static</span> <span class="k">async</span> <span class="n">System</span><span class="p">.</span><span class="n">Collections</span><span class="p">.</span><span class="n">Generic</span><span class="p">.</span><span class="n">IAsyncEnumerable</span><span class="p">&lt;</span><span class="kt">int</span><span class="p">&gt;</span> <span class="n">GenerateSequence</span><span class="p">()</span>
<span class="p">{</span>
    <span class="k">for</span> <span class="p">(</span><span class="kt">int</span> <span class="n">i</span> <span class="p">=</span> <span class="m">0</span><span class="p">;</span> <span class="n">i</span> <span class="p">&lt;</span> <span class="m">20</span><span class="p">;</span> <span class="n">i</span><span class="p">++)</span>
    <span class="p">{</span>
        <span class="k">await</span> <span class="n">Task</span><span class="p">.</span><span class="n">Delay</span><span class="p">(</span><span class="m">100</span><span class="p">);</span>
        <span class="k">yield</span> <span class="k">return</span> <span class="n">i</span><span class="p">;</span>
    <span class="p">}</span>
<span class="p">}</span>
<span class="c1">// or</span>
<span class="k">await</span> <span class="nf">foreach</span> <span class="p">(</span><span class="kt">var</span> <span class="n">number</span> <span class="k">in</span> <span class="n">GenerateSequence</span><span class="p">())</span>
<span class="p">{</span>
    <span class="n">Console</span><span class="p">.</span><span class="n">WriteLine</span><span class="p">(</span><span class="n">number</span><span class="p">);</span>
<span class="p">}</span>
</pre></div></li>
<li>Асинхронные высвобождаемые типы. Начиная с C# 8.0 язык поддерживает асинхронные освобождаемые типы, реализующие интерфейс <code>System.IAsyncDisposable</code>. Операнд выражения <code>using</code> может реализовывать <code>IDisposable</code> или <code>IAsyncDisposable</code>. В случае <code>IAsyncDisposable</code> компилятор создает код для <code>await</code>, возвращенного <code>Task</code> из <code>IAsyncDisposable.DisposeAsync</code>.</li>
<li>Индексы и диапазоны. Диапазоны и индексы обеспечивают лаконичный синтаксис для доступа к отдельным элементам или диапазонам в последовательности. Нововведение включает в себя операторы <code>^</code> и <code>..</code> , а также <code>System.Index</code> и <code>System.Range</code></li>
<li>Оператор присваивания объединения с null. Оператор <code>??=</code> можно использовать для присваивания значения правого операнда левому операнду только в том случае, если левый операнд принимает значение <code>null</code>.<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">List</span><span class="p">&lt;</span><span class="kt">int</span><span class="p">&gt;</span> <span class="n">numbers</span> <span class="p">=</span> <span class="k">null</span><span class="p">;</span>
<span class="kt">int?</span> <span class="n">i</span> <span class="p">=</span> <span class="k">null</span><span class="p">;</span>

<span class="n">numbers</span> <span class="p">??=</span> <span class="k">new</span> <span class="n">List</span><span class="p">&lt;</span><span class="kt">int</span><span class="p">&gt;();</span>
<span class="n">numbers</span><span class="p">.</span><span class="n">Add</span><span class="p">(</span><span class="n">i</span> <span class="p">??=</span> <span class="m">17</span><span class="p">);</span>
<span class="n">numbers</span><span class="p">.</span><span class="n">Add</span><span class="p">(</span><span class="n">i</span> <span class="p">??=</span> <span class="m">20</span><span class="p">);</span>

<span class="n">Console</span><span class="p">.</span><span class="n">WriteLine</span><span class="p">(</span><span class="kt">string</span><span class="p">.</span><span class="n">Join</span><span class="p">(</span><span class="s">&quot; &quot;</span><span class="p">,</span> <span class="n">numbers</span><span class="p">));</span>  <span class="c1">// output: 17 17</span>
<span class="n">Console</span><span class="p">.</span><span class="n">WriteLine</span><span class="p">(</span><span class="n">i</span><span class="p">);</span>  <span class="c1">// output: 17</span>
</pre></div></li>
<li>Неуправляемые сконструированные типы. Начиная с C# 8.0, сконструированный тип значения является неуправляемым, если он содержит поля исключительно неуправляемых типов (например универсальный тип &lt;T&gt;).</li>
<li>Выражение stackalloc во вложенных выражениях. Теперь если результат выражения stackalloc имеет тип <code>System.Span&lt;T&gt;</code> или <code>System.ReadOnlySpan&lt;T&gt;</code>, то его можно использовать в других выражениях.<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="n">Span</span><span class="p">&lt;</span><span class="kt">int</span><span class="p">&gt;</span> <span class="n">numbers</span> <span class="p">=</span> <span class="k">stackalloc</span><span class="p">[]</span> <span class="p">{</span> <span class="m">1</span><span class="p">,</span> <span class="m">2</span><span class="p">,</span> <span class="m">3</span><span class="p">,</span> <span class="m">4</span><span class="p">,</span> <span class="m">5</span><span class="p">,</span> <span class="m">6</span> <span class="p">};</span>
<span class="kt">var</span> <span class="n">ind</span> <span class="p">=</span> <span class="n">numbers</span><span class="p">.</span><span class="n">IndexOfAny</span><span class="p">(</span><span class="k">stackalloc</span><span class="p">[]</span> <span class="p">{</span> <span class="m">2</span><span class="p">,</span> <span class="m">4</span><span class="p">,</span> <span class="m">6</span><span class="p">,</span> <span class="m">8</span> <span class="p">});</span>
<span class="n">Console</span><span class="p">.</span><span class="n">WriteLine</span><span class="p">(</span><span class="n">ind</span><span class="p">);</span>  <span class="c1">// output: 1</span>
</pre></div></li>
<li>Порядок маркеров <code>$</code> и <code>@</code> в интерполированных строках verbatim теперь может быть любым.</li></ul>
<h2><span id=".D0.9F.D1.80.D0.B8.D0.BC.D0.B5.D1.80_.C2.ABHello.2C_World.21.C2.BB"></span><span class="mw-headline" id="Пример_«Hello,_World!»">Пример «Hello, World!»</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=C_Sharp&amp;veaction=edit&amp;section=13" class="mw-editsection-visualeditor" title="Редактировать раздел «Пример «Hello, World!»»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=C_Sharp&amp;action=edit&amp;section=13" title="Редактировать раздел «Пример «Hello, World!»»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Ниже представлен код классической программы «<a href="/wiki/%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0_Hello_world" class="mw-redirect" title="Программа Hello world">Hello world</a>» на C# для консольного приложения:
</p>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="k">using</span> <span class="nn">System</span><span class="p">;</span>

<span class="k">namespace</span> <span class="nn">Example</span>
<span class="p">{</span>
    <span class="k">class</span> <span class="nc">Program</span>
    <span class="p">{</span>
        <span class="k">static</span> <span class="k">void</span> <span class="nf">Main</span><span class="p">()</span>
        <span class="p">{</span>
            <span class="n">Console</span><span class="p">.</span><span class="n">WriteLine</span><span class="p">(</span><span class="s">&quot;Hello World!&quot;</span><span class="p">);</span> <span class="c1">// Вывод заданного текста в консоль</span>
            <span class="n">Console</span><span class="p">.</span><span class="n">ReadKey</span><span class="p">();</span> <span class="c1">// Ожидание нажатия клавиши пользователем</span>
        <span class="p">}</span>
    <span class="p">}</span>
<span class="p">}</span>
</pre></div>
<p>и код этой же программы для приложения Windows Forms:
</p>
<div class="mw-highlight mw-highlight-lang-csharp mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// assembly: System.dll</span>
<span class="c1">// assembly: System.Drawing.dll</span>
<span class="c1">// assembly: System.Windows.Forms.dll</span>
<span class="k">using</span> <span class="nn">System</span><span class="p">;</span>
<span class="k">using</span> <span class="nn">System.Drawing</span><span class="p">;</span>
<span class="k">using</span> <span class="nn">System.Windows.Forms</span><span class="p">;</span>

<span class="k">namespace</span> <span class="nn">WindowsForms</span>
<span class="p">{</span>
    <span class="k">public</span> <span class="k">class</span> <span class="nc">Program</span>
    <span class="p">{</span>
<span class="na">        [STAThread]</span>
        <span class="k">public</span> <span class="k">static</span> <span class="k">void</span> <span class="nf">Main</span><span class="p">()</span>
        <span class="p">{</span>
            <span class="k">new</span> <span class="nf">DemoForm</span><span class="p">().</span><span class="n">ShowDialog</span><span class="p">();</span>
        <span class="p">}</span>
    <span class="p">}</span>

    <span class="k">public</span> <span class="k">class</span> <span class="nc">DemoForm</span> <span class="p">:</span> <span class="n">Form</span>
    <span class="p">{</span>
        <span class="n">Label</span> <span class="n">label</span> <span class="p">=</span> <span class="k">new</span> <span class="n">Label</span><span class="p">();</span>

        <span class="k">public</span> <span class="nf">DemoForm</span><span class="p">()</span>
        <span class="p">{</span>
            <span class="n">label</span><span class="p">.</span><span class="n">Text</span> <span class="p">=</span> <span class="s">&quot;Hello World!&quot;</span><span class="p">;</span>
            <span class="k">this</span><span class="p">.</span><span class="n">Controls</span><span class="p">.</span><span class="n">Add</span><span class="p">(</span><span class="n">label</span><span class="p">);</span>
            <span class="k">this</span><span class="p">.</span><span class="n">StartPosition</span> <span class="p">=</span> <span class="n">FormStartPosition</span><span class="p">.</span><span class="n">CenterScreen</span><span class="p">;</span>
            <span class="k">this</span><span class="p">.</span><span class="n">BackColor</span> <span class="p">=</span> <span class="n">Color</span><span class="p">.</span><span class="n">White</span><span class="p">;</span>
            <span class="k">this</span><span class="p">.</span><span class="n">FormBorderStyle</span> <span class="p">=</span> <span class="n">FormBorderStyle</span><span class="p">.</span><span class="n">Fixed3D</span><span class="p">;</span>
        <span class="p">}</span>
    <span class="p">}</span>
<span class="p">}</span>
</pre></div>
              
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