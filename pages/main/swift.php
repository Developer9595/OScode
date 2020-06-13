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
    <title>Личный кабинет</title>
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
                        <h3>Язык программирования Swift</h3>
                        
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
<li class="toclevel-1 tocsection-1"><a href="#История"><span class="tocnumber">1</span> <span class="toctext">История</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Описание"><span class="tocnumber">2</span> <span class="toctext">Описание</span></a>
<ul>
<li class="toclevel-2 tocsection-3"><a href="#Репозитории_Swift"><span class="tocnumber">2.1</span> <span class="toctext">Репозитории Swift</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-4"><a href="#Пример_кода"><span class="tocnumber">3</span> <span class="toctext">Пример кода</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#См._также"><span class="tocnumber">4</span> <span class="toctext">См. также</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Примечания"><span class="tocnumber">5</span> <span class="toctext">Примечания</span></a></li>
<li class="toclevel-1 tocsection-7"><a href="#Ссылки"><span class="tocnumber">6</span> <span class="toctext">Ссылки</span></a></li>
</ul>`
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
                <div class="mw-indicators mw-body-content">
</div>

	
<table class="infobox" style="" data-name="Язык программирования"><tbody><tr><th colspan="2" class="infobox-above" style="background:#cfe3ff;">Swift</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span class="no-wikidata" data-wikidata-property-id="P154"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Swift_logo_with_text.svg" class="image"><img alt="Swift logo with text.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Swift_logo_with_text.svg/220px-Swift_logo_with_text.svg.png" decoding="async" width="220" height="69" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/20/Swift_logo_with_text.svg/330px-Swift_logo_with_text.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/20/Swift_logo_with_text.svg/440px-Swift_logo_with_text.svg.png 2x" data-file-width="160" data-file-height="50" /></a></span> </td></tr>
<tr>
<th class="plainlist">Класс языка</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P31"><a href="/wiki/%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BF%D0%B0%D1%80%D0%B0%D0%B4%D0%B8%D0%B3%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Мультипарадигмальный язык программирования">мультипарадигмальный</a> (протоколо-ориентированный, <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Объектно-ориентированный язык программирования">объектно-ориентированный</a>, <a href="/wiki/%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Функциональное программирование">функциональный</a>, <a href="/wiki/%D0%98%D0%BC%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Императивное программирование">императивный</a>)</span></td>
</tr>
<tr>
<th class="plainlist">Появился в</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P571">2014</span></td>
</tr>
<tr>
<th class="plainlist">Автор</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P287" data-wikidata-claim-id="Q17118377$B654C590-6ECA-4014-B578-9C0A84299F73"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%9A%D1%80%D0%B8%D1%81+%D0%9B%D0%B0%D1%82%D1%82%D0%BD%D0%B5%D1%80&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q2964778&amp;preloadparams%5B%5D=%D0%9A%D1%80%D0%B8%D1%81+%D0%9B%D0%B0%D1%82%D1%82%D0%BD%D0%B5%D1%80&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">Крис Латтнер</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q2964778" class="extiw" title="d:Q2964778">[d]</a></sup></span></span></td>
</tr>
<tr>
<th class="plainlist">Разработчик</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q17118377$f6b0d73b-4621-1b4a-4ada-be6f902021a5"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%9A%D1%80%D0%B8%D1%81+%D0%9B%D0%B0%D1%82%D1%82%D0%BD%D0%B5%D1%80&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q2964778&amp;preloadparams%5B%5D=%D0%9A%D1%80%D0%B8%D1%81+%D0%9B%D0%B0%D1%82%D1%82%D0%BD%D0%B5%D1%80&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">Крис Латтнер</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q2964778" class="extiw" title="d:Q2964778">[d]</a></sup></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q17118377$631abf52-45c0-9b53-0f51-d68fa45909e0"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Apple" title="Apple">Apple</a></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A0%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8_%D1%84%D0%B0%D0%B9%D0%BB%D0%B0" title="Расширение имени файла">Расширение</a> файлов</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P1195"><code>.swift</code></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D1%82%D0%B0%D0%B4%D0%B8%D0%B8_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Стадии разработки программного обеспечения">Выпуск</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P348"><span class="no-wikidata" data-wikidata-property-id="P348">5.2.2<sup id="cite_ref-1" class="reference"><a href="#cite_note-1">&#91;1&#93;</a></sup>&#160;(16&#160;апреля 2020<span class="noprint">&#59;&#32;57 дней назад</span><span style="display:none">&#160;(<span class="bday dtstart published updated">2020-04-16</span>)</span>)</span></span></td>
</tr>
<tr>
<th class="plainlist">Основные реализации</th>
<td class="plainlist">
<a href="/wiki/Low_Level_Virtual_Machine" class="mw-redirect" title="Low Level Virtual Machine">LLVM</a></td>
</tr>
<tr>
<th class="plainlist">Испытал влияние</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P737"><a href="/wiki/Objective-C" title="Objective-C">Objective-C</a>, <a href="/wiki/C%2B%2B" title="C++">C++</a>, <a href="/wiki/Java" title="Java">Java</a><sup id="cite_ref-cybers-1_2-0" class="reference"><a href="#cite_note-cybers-1-2">&#91;2&#93;</a></sup>, <a href="/wiki/Rust_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Rust (язык программирования)">Rust</a>, <a href="/wiki/Scala_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Scala (язык программирования)">Scala</a>, <a href="/wiki/Python" title="Python">Python</a>, <a href="/wiki/Ruby" title="Ruby">Ruby</a>, <a href="/wiki/Smalltalk" title="Smalltalk">Smalltalk</a>, <a href="/wiki/Groovy" title="Groovy">Groovy</a><sup id="cite_ref-3" class="reference"><a href="#cite_note-3">&#91;3&#93;</a></sup>, <a href="/wiki/D_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="D (язык программирования)">язык D</a><sup id="cite_ref-swift_blog_4-0" class="reference"><a href="#cite_note-swift_blog-4">&#91;4&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_%D0%BD%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Лицензия на программное обеспечение">Лицензия</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P275">с версии 2.2 <a href="/wiki/%D0%9E%D1%82%D0%BA%D1%80%D1%8B%D1%82%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Открытое программное обеспечение">Open Source</a> (<a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_Apache" title="Лицензия Apache">Apache 2.0</a> with a Runtime Library Exception<sup id="cite_ref-5" class="reference"><a href="#cite_note-5">&#91;5&#93;</a></sup><sup id="cite_ref-6" class="reference"><a href="#cite_note-6">&#91;6&#93;</a></sup>)</span></td>
</tr>
<tr>
<th class="plainlist">Сайт</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P856"><a rel="nofollow" class="external text" href="https://swift.org">swift.org</a></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Операционная система">ОС</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P306"><a href="/wiki/MacOS" title="MacOS">macOS</a>, <a href="/wiki/IOS" title="IOS">iOS</a>, <a href="/wiki/TvOS" title="TvOS">tvOS</a>, <a href="/wiki/WatchOS" title="WatchOS">watchOS</a>, <a href="/wiki/Linux" title="Linux">Linux</a></span></td>
</tr><tr><td colspan="2" class="infobox-below" style="background:#dcebff;;"><span class="wikidata-claim" data-wikidata-property-id="P373" data-wikidata-claim-id="Q17118377$641a320c-4e91-044d-6d1d-8fedab45b473"><span class="wikidata-snak wikidata-main-snak"><a href="https://commons.wikimedia.org/wiki/Category:Swift_(programming_language)" title="commons:Category:Swift (programming language)"><img alt="Commons-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/15px-Commons-logo.svg.png" decoding="async" width="15" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/23px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></a>&#160;<a href="https://commons.wikimedia.org/wiki/Category:Swift_(programming_language)" class="extiw" title="commons:Category:Swift (programming language)">Медиафайлы на Викискладе</a></span></span></td></tr>
</tbody></table>
<p><b>Swift</b> — <a href="/wiki/%D0%9E%D1%82%D0%BA%D1%80%D1%8B%D1%82%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Открытое программное обеспечение">открытый</a> <a href="/wiki/%D0%9F%D0%B0%D1%80%D0%B0%D0%B4%D0%B8%D0%B3%D0%BC%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Парадигма программирования">мультипарадигмальный</a> <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D0%B8%D1%80%D1%83%D0%B5%D0%BC%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Компилируемый язык программирования">компилируемый язык программирования</a> общего назначения. Создан компанией <a href="/wiki/Apple" title="Apple">Apple</a> в первую очередь для разработчиков <a href="/wiki/IOS" title="IOS">iOS</a> и <a href="/wiki/MacOS" title="MacOS">macOS</a>. Swift работает с фреймворками <a href="/wiki/Cocoa" title="Cocoa">Cocoa</a> и <a href="/wiki/Cocoa_Touch" title="Cocoa Touch">Cocoa Touch</a> и совместим с основной кодовой базой Apple, написанной на <a href="/wiki/Objective-C" title="Objective-C">Objective-C</a>. Swift задумывался как более лёгкий для чтения и устойчивый к ошибкам программиста язык, нежели предшествовавший ему Objective-C<sup id="cite_ref-3dnews-1_7-0" class="reference"><a href="#cite_note-3dnews-1-7">&#91;7&#93;</a></sup>. Программы на Swift компилируются при помощи <a href="/wiki/LLVM" title="LLVM">LLVM</a>, входящей в <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D1%80%D0%B5%D0%B4%D0%B0_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8" title="Интегрированная среда разработки">интегрированную среду разработки</a> <a href="/wiki/Xcode#Xcode_6" title="Xcode">Xcode 6</a> и выше. Swift может использовать <a href="/wiki/%D0%A0%D0%B0%D0%BD%D1%82%D0%B0%D0%B9%D0%BC" class="mw-redirect" title="Рантайм">рантайм</a> Objective-C, что делает возможным использование обоих языков (а также <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">С</a>) в рамках одной программы.
</p>
<div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading">Содержание</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>

</div>

<h2><span id=".D0.98.D1.81.D1.82.D0.BE.D1.80.D0.B8.D1.8F"></span><span class="mw-headline" id="История">История</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Swift_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)&amp;veaction=edit&amp;section=1" class="mw-editsection-visualeditor" title="Редактировать раздел «История»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Swift_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)&amp;action=edit&amp;section=1" title="Редактировать раздел «История»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Старший вице-президент по <a href="/wiki/%D0%A0%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Разработка программного обеспечения">разработке программного обеспечения</a> Apple <a href="/wiki/%D0%A4%D0%B5%D0%B4%D0%B5%D1%80%D0%B8%D0%B3%D0%B8,_%D0%9A%D1%80%D0%B5%D0%B9%D0%B3" title="Федериги, Крейг">Крейг Федериги</a> во время анонса этого продукта заявил, что язык программирования Swift был заложен ещё в платформе <a href="/wiki/NeXT" title="NeXT">NeXT</a> (<a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Операционная система">ОС</a> <a href="/wiki/NeXTSTEP" title="NeXTSTEP">NeXTSTEP</a> выпускалась в <a href="/wiki/1989_%D0%B3%D0%BE%D0%B4" title="1989 год">1989</a>—<a href="/wiki/1995_%D0%B3%D0%BE%D0%B4" title="1995 год">1995 годах</a>), которая стала основой для современной macOS, а затем и iOS<sup id="cite_ref-3dnews-12_8-0" class="reference"><a href="#cite_note-3dnews-12-8">&#91;8&#93;</a></sup>.
</p><p>Разработка текущего варианта языка Swift была начата в <a href="/wiki/2010_%D0%B3%D0%BE%D0%B4" title="2010 год">2010 году</a> <span class="iw plainlinks" data-title="Латтнер, Крис" data-lang="en" data-lang-name="англ."><a href="/w/index.php?title=%D0%9B%D0%B0%D1%82%D1%82%D0%BD%D0%B5%D1%80,_%D0%9A%D1%80%D0%B8%D1%81&amp;action=edit&amp;redlink=1" class="new" title="Латтнер, Крис (страница отсутствует)">Крисом Латтнером</a><sup class="iw&#95;_note noprint" style="font-style:normal; font-weight:normal;"><a href="https://en.wikipedia.org/wiki/Chris_Lattner" class="extiw" title="en:Chris Lattner"><span class="iw&#95;_tooltip" title="Chris Lattner — версия статьи «Латтнер, Крис» на английском языке">[en]</span></a></sup></span>, руководителем отдела разработки инструментов для создания программного обеспечения Apple и одним из основных разработчиков LLVM. Swift заимствовал идеи из «Objective-C, <a href="/wiki/Rust_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Rust (язык программирования)">Rust</a>, <a href="/wiki/Haskell" title="Haskell">Haskell</a>, <a href="/wiki/Ruby" title="Ruby">Ruby</a>, <a href="/wiki/Python" title="Python">Python</a>, <a href="/wiki/C_Sharp" title="C Sharp">C#</a>, <a href="/wiki/CLU" class="mw-redirect" title="CLU">CLU</a>, и ещё из стольких многих языков, что сложно перечислить»<sup id="cite_ref-lattner_2014_info_1_9-0" class="reference"><a href="#cite_note-lattner_2014_info_1-9">&#91;9&#93;</a></sup>. Первоначально для нового языка использовали название Shiny<sup id="cite_ref-10" class="reference"><a href="#cite_note-10">&#91;10&#93;</a></sup>.
</p><p><a href="/wiki/2_%D0%B8%D1%8E%D0%BD%D1%8F" title="2 июня">2 июня</a> <a href="/wiki/2014_%D0%B3%D0%BE%D0%B4" title="2014 год">2014 года</a> на конференции <a href="/wiki/Worldwide_Developers_Conference" title="Worldwide Developers Conference">WWDC</a> Swift был официально представлен вместе с бесплатным руководством по использованию языка объёмом в 500 страниц, доступным на сервисе «iBook Store»<sup id="cite_ref-11" class="reference"><a href="#cite_note-11">&#91;11&#93;</a></sup>.
</p><p><a href="/wiki/8_%D0%B8%D1%8E%D0%BD%D1%8F" title="8 июня">8 июня</a> <a href="/wiki/2015_%D0%B3%D0%BE%D0%B4" title="2015 год">2015 года</a> компания Apple объявила о выпуске новой версии Swift 2.0, которая получила более высокую производительность, новое API обработки ошибок, улучшения синтаксиса языка, а также функцию проверки доступности функций Swift для целевых ОС<sup id="cite_ref-12" class="reference"><a href="#cite_note-12">&#91;12&#93;</a></sup>.
</p><p><a href="/wiki/3_%D0%B4%D0%B5%D0%BA%D0%B0%D0%B1%D1%80%D1%8F" title="3 декабря">3 декабря</a> 2015 года была выпущена бета версия Swift 3.0 с поддержкой операционных систем <a href="/wiki/OS_X" class="mw-redirect" title="OS X">OS X</a>, iOS и <a href="/wiki/Linux" title="Linux">Linux</a> и лицензированная под <a href="/wiki/%D0%9E%D1%82%D0%BA%D1%80%D1%8B%D1%82%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Открытое программное обеспечение">открытой</a> лицензией <a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_Apache" title="Лицензия Apache">Apache 2.0 license with a Runtime Library Exception</a><sup id="cite_ref-13" class="reference"><a href="#cite_note-13">&#91;13&#93;</a></sup><sup id="cite_ref-14" class="reference"><a href="#cite_note-14">&#91;14&#93;</a></sup>. Версия 3.0 обратно не совместима с более ранними версиями языка; начиная с нативной среды разработки XCode версии 9 более версии языка Swift-2 и ранее не поддерживаются.
</p><p>В начале апреля 2016 неназванный источник СМИ в корпорации Google сообщил, что компания рассматривает возможность перевода языка Swift в язык «первого класса» для платформы Android<sup id="cite_ref-15" class="reference"><a href="#cite_note-15">&#91;15&#93;</a></sup>. Ранее уже предъявлялись прототипы Swift компилятора для Android<sup id="cite_ref-16" class="reference"><a href="#cite_note-16">&#91;16&#93;</a></sup><sup id="cite_ref-17" class="reference"><a href="#cite_note-17">&#91;17&#93;</a></sup><sup id="cite_ref-18" class="reference"><a href="#cite_note-18">&#91;18&#93;</a></sup>.
</p><p><a href="/wiki/19_%D1%81%D0%B5%D0%BD%D1%82%D1%8F%D0%B1%D1%80%D1%8F" title="19 сентября">19 сентября</a> <a href="/wiki/2017_%D0%B3%D0%BE%D0%B4" title="2017 год">2017 года</a> была выпущена версия Swift 4.0.
</p><p>В сентябре <a href="/wiki/2018_%D0%B3%D0%BE%D0%B4" title="2018 год">2018 года</a>, вместе с новой версией <a href="/wiki/IOS_12" title="IOS 12">iOS 12</a>, была выпущена новая стабильная версия языка Swift 4.2, и появилась бета-версия Swift 5.0. В версии 5.0 заявлена, наконец, стабильная работа <a href="/wiki/ABI" class="mw-redirect" title="ABI">ABI</a> со стандартными библиотеками (Swift Dynamic Library), поддержка регулярных выражений и первоклассное решение для <a href="/wiki/%D0%9F%D0%B0%D1%80%D0%B0%D0%BB%D0%BB%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%B2%D1%8B%D1%87%D0%B8%D1%81%D0%BB%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B#Параллелизм_данных" title="Параллельные вычислительные системы">параллельной обработки данных</a> с <a href="/wiki/%D0%90%D1%81%D0%B8%D0%BD%D1%85%D1%80%D0%BE%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D1%8C#Асинхронность_в_информатике" class="mw-disambig" title="Асинхронность">асинхронным</a> режимом обработки async/await<sup id="cite_ref-19" class="reference"><a href="#cite_note-19">&#91;19&#93;</a></sup>.
</p><p><a rel="nofollow" class="external text" href="https://swift.org/blog/swift-5-1-released/">20 сентября 2019</a> Swift 5.1 — это следующий крупный релиз Swift, и его задача наконец обеспечить стабильность ABI.
</p>
<h2><span id=".D0.9E.D0.BF.D0.B8.D1.81.D0.B0.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Описание">Описание</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Swift_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)&amp;veaction=edit&amp;section=2" class="mw-editsection-visualeditor" title="Редактировать раздел «Описание»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Swift_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)&amp;action=edit&amp;section=2" title="Редактировать раздел «Описание»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Swift заимствовал довольно многое из Objective-C, однако он определяется не указателями, а типами переменных, которые обрабатывает <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%82%D0%BE%D1%80" title="Компилятор">компилятор</a>. По аналогичному принципу работают многие скриптовые языки. В то же время, он предоставляет разработчикам многие функции, которые прежде были доступны в <a href="/wiki/C%2B%2B" title="C++">C++</a> и <a href="/wiki/Java" title="Java">Java</a>, такие как определяемые наименования, <a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Обобщённое программирование">обобщения</a> и <a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%BE%D0%B2" title="Перегрузка операторов">перегрузка операторов</a>.
</p><p>Часть функций языка выполняется быстрее по сравнению с другими языками программирования. Например, сортировка комплексных объектов выполняется в 3,9 раз быстрее, чем в Python, и почти в 1,5 раза быстрее, чем в Objective-C<sup id="cite_ref-20" class="reference"><a href="#cite_note-20">&#91;20&#93;</a></sup><span style="background: #ffeaea; color: #444444;"></span><sup class="noprint" style="white-space: nowrap">&#91;<i><a href="/wiki/%D0%92%D0%B8%D0%BA%D0%B8%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F:%D0%90%D0%B2%D1%82%D0%BE%D1%80%D0%B8%D1%82%D0%B5%D1%82%D0%BD%D1%8B%D0%B5_%D0%B8%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%B8%D0%BA%D0%B8" title="Википедия:Авторитетные источники"><span title="утверждение основано на неавторитетном источнике (18 мая 2016)" style="">неавторитетный источник?</span></a></i>&#93;</sup><sup id="cite_ref-21" class="reference"><a href="#cite_note-21">&#91;21&#93;</a></sup>.
</p><p>Код, написанный на Swift, может работать вместе с кодом, написанным на языках программирования C и Objective-C в рамках одного и того же проекта<sup id="cite_ref-cybers-1_2-1" class="reference"><a href="#cite_note-cybers-1-2">&#91;2&#93;</a></sup>.
</p>
<h3><span id=".D0.A0.D0.B5.D0.BF.D0.BE.D0.B7.D0.B8.D1.82.D0.BE.D1.80.D0.B8.D0.B8_Swift"></span><span class="mw-headline" id="Репозитории_Swift"><a href="/wiki/%D0%A0%D0%B5%D0%BF%D0%BE%D0%B7%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%B9" title="Репозиторий">Репозитории</a> Swift</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Swift_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)&amp;veaction=edit&amp;section=3" class="mw-editsection-visualeditor" title="Редактировать раздел «Репозитории Swift»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Swift_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)&amp;action=edit&amp;section=3" title="Редактировать раздел «Репозитории Swift»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Apple разделила код Swift на несколько открытых репозиториев.
</p>
<ul><li>Компилятор и стандартная библиотека:
<ul><li>Swift: основной Swift репозиторий, который содержит исходный код для компилятора Swift, стандартная библиотека и SourceKit;</li>
<li>Swift-Evolution: документы, относящиеся к продолжающемуся развитию Swift, включая цели для предстоящих выпусков, предложения для изменений и расширений Swift;</li></ul></li>
<li>Библиотеки ядра:
<ul><li>Swift corelibs-foundation: исходный код для Foundation, который предоставляет общую функциональность для всех приложений;</li>
<li>Swift corelibs-libdispatch: исходный код для libdispatch, который предоставляет примитивы параллелизма для работы на многоядерном <a href="/wiki/%D0%90%D0%BF%D0%BF%D0%B0%D1%80%D0%B0%D1%82%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Аппаратное обеспечение">аппаратном обеспечении</a>;</li>
<li>Swift corelibs-xctest: исходный код для XCTest, который обеспечивает фундаментальную инфраструктуру тестирования для Swift-приложений и библиотек;</li></ul></li>
<li>Менеджер пакетов:
<ul><li>Swift package-manager: исходный код для менеджера пакетов Swift;</li>
<li>Swift llbuild: исходный код для llbuild, система низкого уровня, который использует Swift package-manager;</li></ul></li>
<li>Клонированные репозитории:
<ul><li>Swift опирается на несколько других проектов с открытым кодом, особенно на компилятор LLVM.</li>
<li>Swift llvm: исходный код LLVM, с кусочками Swift-дополнений;</li>
<li>Swift clang: исходный код для Clang, с кусочками Swift дополнений;</li>
<li>Swift lldb: исходный код Swift-версии LLDB, для отладки Swift программ;</li></ul></li></ul>
<h2><span id=".D0.9F.D1.80.D0.B8.D0.BC.D0.B5.D1.80_.D0.BA.D0.BE.D0.B4.D0.B0"></span><span class="mw-headline" id="Пример_кода">Пример кода</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Swift_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)&amp;veaction=edit&amp;section=4" class="mw-editsection-visualeditor" title="Редактировать раздел «Пример кода»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Swift_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)&amp;action=edit&amp;section=4" title="Редактировать раздел «Пример кода»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="mw-highlight mw-highlight-lang-objc mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// Переменные</span>
<span class="n">var</span> <span class="n">implicitInteger</span> <span class="o">=</span> <span class="mi">70</span>
<span class="n">var</span> <span class="n">implicitDouble</span> <span class="o">=</span> <span class="mf">70.0</span>
<span class="n">var</span> <span class="nl">explicitDouble</span><span class="p">:</span> <span class="n">Double</span> <span class="o">=</span> <span class="mi">70</span>
</pre></div>
<div class="mw-highlight mw-highlight-lang-objc mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// Константы</span>
<span class="n">let</span> <span class="n">numberOfApples</span> <span class="o">=</span> <span class="mi">3</span>
<span class="n">let</span> <span class="n">numberOfOranges</span> <span class="o">=</span> <span class="mi">5</span>
<span class="n">let</span> <span class="n">appleSummary</span> <span class="o">=</span> <span class="s">&quot;I have \(numberOfApples) apples.&quot;</span>
<span class="n">let</span> <span class="n">fruitSummary</span> <span class="o">=</span> <span class="s">&quot;I have \(numberOfApples + numberOfOranges) pieces of fruit.&quot;</span>
</pre></div>
<div class="mw-highlight mw-highlight-lang-objc mw-content-ltr" dir="ltr"><pre><span></span><span class="n">print</span><span class="p">(</span><span class="s">&quot;Hello, world&quot;</span><span class="p">)</span>

<span class="n">let</span> <span class="n">people</span> <span class="o">=</span> <span class="p">[</span><span class="s">&quot;Anna&quot;</span><span class="o">:</span> <span class="mi">67</span><span class="p">,</span> <span class="s">&quot;Beto&quot;</span><span class="o">:</span> <span class="mi">8</span><span class="p">,</span> <span class="s">&quot;Jack&quot;</span><span class="o">:</span> <span class="mi">33</span><span class="p">,</span> <span class="s">&quot;Sam&quot;</span><span class="o">:</span> <span class="mi">25</span><span class="p">]</span>
<span class="k">for</span> <span class="p">(</span><span class="n">name</span><span class="p">,</span> <span class="n">age</span><span class="p">)</span> <span class="k">in</span> <span class="n">people</span> <span class="p">{</span>
    <span class="n">print</span><span class="p">(</span><span class="s">&quot;\(name) is \(age) years old.&quot;</span><span class="p">)</span>
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