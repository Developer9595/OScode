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
                        <h3>Язык программирования PHP</h3>
                        
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
<li class="toclevel-1 tocsection-1"><a href="#Область_применения"><span class="tocnumber">1</span> <span class="toctext">Область применения</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Дополнительные_возможности"><span class="tocnumber">2</span> <span class="toctext">Дополнительные возможности</span></a>
<ul>
<li class="toclevel-2 tocsection-3"><a href="#Создание_GUI-приложений"><span class="tocnumber">2.1</span> <span class="toctext">Создание GUI-приложений</span></a>
<ul>
<li class="toclevel-3 tocsection-4"><a href="#Расширения"><span class="tocnumber">2.1.1</span> <span class="toctext">Расширения</span></a></li>
<li class="toclevel-3 tocsection-5"><a href="#Среды_разработки_(IDE)"><span class="tocnumber">2.1.2</span> <span class="toctext">Среды разработки (IDE)</span></a></li>
<li class="toclevel-3 tocsection-6"><a href="#Подключение_PHP_к_проекту"><span class="tocnumber">2.1.3</span> <span class="toctext">Подключение PHP к проекту</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="toclevel-1 tocsection-7"><a href="#История"><span class="tocnumber">3</span> <span class="toctext">История</span></a>
<ul>
<li class="toclevel-2 tocsection-8"><a href="#PHP_7"><span class="tocnumber">3.1</span> <span class="toctext"><span></span>PHP 7</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-9"><a href="#Синтаксис"><span class="tocnumber">4</span> <span class="toctext">Синтаксис</span></a>
<ul>
<li class="toclevel-2 tocsection-10"><a href="#Типы_данных"><span class="tocnumber">4.1</span> <span class="toctext">Типы данных</span></a></li>
<li class="toclevel-2 tocsection-11"><a href="#Обращение_к_переменным_и_функциям"><span class="tocnumber">4.2</span> <span class="toctext">Обращение к переменным и функциям</span></a></li>
<li class="toclevel-2 tocsection-12"><a href="#Суперглобальные_массивы"><span class="tocnumber">4.3</span> <span class="toctext">Суперглобальные массивы</span></a></li>
<li class="toclevel-2 tocsection-13"><a href="#Объектно-ориентированное_программирование"><span class="tocnumber">4.4</span> <span class="toctext">Объектно-ориентированное программирование</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-14"><a href="#Особенности_интерпретатора"><span class="tocnumber">5</span> <span class="toctext">Особенности интерпретатора</span></a>
<ul>
<li class="toclevel-2 tocsection-15"><a href="#Расширения_2"><span class="tocnumber">5.1</span> <span class="toctext">Расширения</span></a></li>
<li class="toclevel-2 tocsection-16"><a href="#Параметры_настройки"><span class="tocnumber">5.2</span> <span class="toctext">Параметры настройки</span></a></li>
<li class="toclevel-2 tocsection-17"><a href="#Режимы_запуска_интерпретатора_(SAPI)"><span class="tocnumber">5.3</span> <span class="toctext">Режимы запуска интерпретатора (SAPI)</span></a></li>
<li class="toclevel-2 tocsection-18"><a href="#Пасхальные_яйца"><span class="tocnumber">5.4</span> <span class="toctext">Пасхальные яйца</span></a></li>
<li class="toclevel-2 tocsection-19"><a href="#Альтернативные_реализации"><span class="tocnumber">5.5</span> <span class="toctext">Альтернативные реализации</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-20"><a href="#Лицензирование"><span class="tocnumber">6</span> <span class="toctext">Лицензирование</span></a></li>
<li class="toclevel-1 tocsection-21"><a href="#Библиотека_PEAR"><span class="tocnumber">7</span> <span class="toctext">Библиотека PEAR</span></a></li>
<li class="toclevel-1 tocsection-22"><a href="#Интегрированные_среды_разработки_для_PHP"><span class="tocnumber">8</span> <span class="toctext">Интегрированные среды разработки для PHP</span></a></li>
<li class="toclevel-1 tocsection-23"><a href="#Стандарты_кодирования_PSR"><span class="tocnumber">9</span> <span class="toctext">Стандарты кодирования PSR</span></a></li>
<li class="toclevel-1 tocsection-24"><a href="#Критика"><span class="tocnumber">10</span> <span class="toctext">Критика</span></a>
<ul>
<li class="toclevel-2 tocsection-25"><a href="#Отсутствие_обратной_совместимости_между_версиями_языка"><span class="tocnumber">10.1</span> <span class="toctext">Отсутствие обратной совместимости между версиями языка</span></a></li>
<li class="toclevel-2 tocsection-26"><a href="#Отсутствие_поддержки_многобайтовых_кодировок_в_ядре_языка"><span class="tocnumber">10.2</span> <span class="toctext">Отсутствие поддержки многобайтовых кодировок в ядре языка</span></a></li>
<li class="toclevel-2 tocsection-27"><a href="#Отсутствие_поддержки_многопоточности"><span class="tocnumber">10.3</span> <span class="toctext">Отсутствие поддержки многопоточности</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-28"><a href="#См._также"><span class="tocnumber">11</span> <span class="toctext">См. также</span></a></li>
<li class="toclevel-1 tocsection-29"><a href="#Примечания"><span class="tocnumber">12</span> <span class="toctext">Примечания</span></a></li>
<li class="toclevel-1 tocsection-30"><a href="#Литература"><span class="tocnumber">13</span> <span class="toctext">Литература</span></a></li>
<li class="toclevel-1 tocsection-31"><a href="#Ссылки"><span class="tocnumber">14</span> <span class="toctext">Ссылки</span></a></li>
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
		
<table class="infobox" style="" data-name="Язык программирования"><tbody><tr><th colspan="2" class="infobox-above" style="background:#cfe3ff;">PHP</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span class="wikidata-claim" data-wikidata-property-id="P154" data-wikidata-claim-id="Q59$2a4aefbd-4343-710f-1bc9-41fe2926da94"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:PHP-logo.svg" class="image"><img alt="PHP-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/149px-PHP-logo.svg.png" decoding="async" width="149" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/223px-PHP-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/297px-PHP-logo.svg.png 2x" data-file-width="711" data-file-height="384" /></a></span></span> </td></tr>
<tr>
<th class="plainlist">Класс языка</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P31" data-wikidata-claim-id="Q59$163EF12B-13F5-4E8F-98B8-594BF35B9931"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BF%D1%80%D0%B5%D1%82%D0%B8%D1%80%D1%83%D0%B5%D0%BC%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Интерпретируемый язык программирования">интерпретируемый язык программирования</a></span></span></td>
</tr>
<tr>
<th class="plainlist">Появился в</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P571" data-wikidata-claim-id="Q59$e6be0d1c-469b-9e0b-a554-4aff68ebab50"><span class="wikidata-snak wikidata-main-snak"><span class="nowrap"><a href="/wiki/8_%D0%B8%D1%8E%D0%BD%D1%8F" title="8 июня">8 июня</a> <a href="/wiki/1995_%D0%B3%D0%BE%D0%B4" title="1995 год">1995</a></span></span><sup id="cite_ref-_d82c66e2400ac227_5-0" class="reference"><a href="#cite_note-_d82c66e2400ac227-5">&#91;5&#93;</a></sup><sup id="cite_ref-_f0fac410a56e0c0a_6-0" class="reference"><a href="#cite_note-_f0fac410a56e0c0a-6">&#91;6&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist">Автор</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P287" data-wikidata-claim-id="Q59$d82151f7-426a-88ca-64c0-1ee0df3fec40"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9B%D0%B5%D1%80%D0%B4%D0%BE%D1%80%D1%84,_%D0%A0%D0%B0%D1%81%D0%BC%D1%83%D1%81" title="Лердорф, Расмус">Лердорф, Расмус</a></span><sup id="cite_ref-_9778524bc3e9b087_3-1" class="reference"><a href="#cite_note-_9778524bc3e9b087-3">&#91;3&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist">Разработчик</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q59$2ef8882d-4a1d-bb4d-9fde-32a6b3981ef1"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9B%D0%B5%D1%80%D0%B4%D0%BE%D1%80%D1%84,_%D0%A0%D0%B0%D1%81%D0%BC%D1%83%D1%81" title="Лердорф, Расмус">Лердорф, Расмус</a></span><sup id="cite_ref-_791a0df46a04a50d_1-2" class="reference"><a href="#cite_note-_791a0df46a04a50d-1">&#91;1&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q59$41570924-4654-e276-029b-a2fa97b17e95"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%93%D1%83%D1%82%D0%BC%D0%B0%D0%BD%D1%81,_%D0%AD%D0%BD%D0%B4%D0%B8" title="Гутманс, Энди">Гутманс, Энди</a></span><sup id="cite_ref-_791a0df46a04a50d_1-3" class="reference"><a href="#cite_note-_791a0df46a04a50d-1">&#91;1&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q59$e8f1f1b5-4474-0a28-11df-7d2cd47fb4f2"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=PHP+Group&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q6055370&amp;preloadparams%5B%5D=PHP+Group&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">PHP Group</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q6055370" class="extiw" title="d:Q6055370">[d]</a></sup></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q59$113b1550-4481-ab4f-e60a-1f8d4f9165bd"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Zend_Technologies" title="Zend Technologies">Zend Technologies</a></span><sup id="cite_ref-_2a1aeda4dcdb34df_2-1" class="reference"><a href="#cite_note-_2a1aeda4dcdb34df-2">&#91;2&#93;</a></sup></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q59$eb7bd593-4d27-9c8c-d30a-1ec51cc76611"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A1%D1%83%D1%80%D0%B0%D1%81%D0%BA%D0%B8,_%D0%97%D0%B5%D0%B5%D0%B2" title="Сураски, Зеев">Сураски, Зеев</a></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A0%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8_%D1%84%D0%B0%D0%B9%D0%BB%D0%B0" title="Расширение имени файла">Расширение</a> файлов</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q59$4d097046-4f5d-80ea-5e12-924f4975722e"><span class="wikidata-snak wikidata-main-snak"><code>.php</code></span><sup id="cite_ref-_f12498613bd42bc5_7-0" class="reference"><a href="#cite_note-_f12498613bd42bc5-7">&#91;7&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D1%82%D0%B0%D0%B4%D0%B8%D0%B8_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Стадии разработки программного обеспечения">Выпуск</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P348"><ul><li><span class="wikidata-claim" data-wikidata-property-id="P348" data-wikidata-claim-id="Q59$e639ba98-4b75-d9ea-53c2-ccd86d616bcc"><span class="wikidata-snak wikidata-main-snak">7.4.6</span> (<span class="wikidata-snak" data-wikidata-hash="76d1b74d39e1e1f14e3967403d0ce0edbfff8d3d"><span class="nowrap"><a href="/wiki/14_%D0%BC%D0%B0%D1%8F" title="14 мая">14 мая</a> <a href="/wiki/2020_%D0%B3%D0%BE%D0%B4" title="2020 год">2020</a></span></span>)<sup id="cite_ref-_919265c942dd6e77_4-0" class="reference"><a href="#cite_note-_919265c942dd6e77-4">&#91;4&#93;</a></sup></span></li></ul></span></td>
</tr>
<tr>
<th class="plainlist">Испытал влияние</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q59$58926e44-4568-0442-82e1-21f9c2355b8d"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/C%2B%2B" title="C++">C++</a></span><sup id="cite_ref-_fd97aa823b617488_8-0" class="reference"><a href="#cite_note-_fd97aa823b617488-8">&#91;8&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q59$465679ED-B7A2-4DD3-BCB4-72623555D35F"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Perl" title="Perl">Perl</a></span><sup id="cite_ref-_42441d2a3c860419_9-0" class="reference"><a href="#cite_note-_42441d2a3c860419-9">&#91;9&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q59$C3B6FBD3-5E1D-4F9A-BD5F-9334CAEE58D7"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a></span><sup id="cite_ref-_42441d2a3c860419_9-1" class="reference"><a href="#cite_note-_42441d2a3c860419-9">&#91;9&#93;</a></sup><sup id="cite_ref-_535c220360d3b943_10-0" class="reference"><a href="#cite_note-_535c220360d3b943-10">&#91;10&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q59$BB88E102-24C9-4209-A3C3-CC3476D0807E"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Java" title="Java">Java</a></span><sup id="cite_ref-_42441d2a3c860419_9-2" class="reference"><a href="#cite_note-_42441d2a3c860419-9">&#91;9&#93;</a></sup></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q59$10CF039C-5D5A-4099-BBD3-79924B75FC5D"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Tcl" title="Tcl">Tcl</a></span><sup id="cite_ref-_a0a71102042afd48_11-0" class="reference"><a href="#cite_note-_a0a71102042afd48-11">&#91;11&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_%D0%BD%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Лицензия на программное обеспечение">Лицензия</a></th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P275" data-wikidata-claim-id="q59$038bddd4-479b-83f7-ffd8-9d09913663df"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/PHP_License" title="PHP License">PHP License</a></span><sup id="cite_ref-_3ce7a739d824d59f_12-0" class="reference"><a href="#cite_note-_3ce7a739d824d59f-12">&#91;12&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist">Сайт</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P856" data-wikidata-claim-id="Q59$EC9F293A-95C0-4DDF-AC34-25FC37ACBF6E"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://www.php.net">php.net</a></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Операционная система">ОС</a></th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q59$6d181382-4228-c720-eab5-35bcde8f93ca"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Unix-%D0%BF%D0%BE%D0%B4%D0%BE%D0%B1%D0%BD%D0%B0%D1%8F_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Unix-подобная операционная система">UNIX-подобные операционные системы</a></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q59$26e60ebb-490e-7885-3931-8416e7863df1"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Windows" title="Windows">Microsoft Windows</a></span></span></td>
</tr><tr><td colspan="2" class="infobox-below" style="background:#dcebff;;"><span class="wikidata-claim" data-wikidata-property-id="P373" data-wikidata-claim-id="q59$7A9626F7-AE0B-48D5-9808-226FEB986940"><span class="wikidata-snak wikidata-main-snak"><a href="https://commons.wikimedia.org/wiki/Category:PHP" title="commons:Category:PHP"><img alt="Commons-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/15px-Commons-logo.svg.png" decoding="async" width="15" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/23px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></a>&#160;<a href="https://commons.wikimedia.org/wiki/Category:PHP" class="extiw" title="commons:Category:PHP">Медиафайлы на Викискладе</a></span></span></td></tr>
</tbody></table>
<p><b>PHP</b> (<span class="IPA"><a href="/wiki/%D0%9C%D0%B5%D0%B6%D0%B4%D1%83%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D1%84%D0%BE%D0%BD%D0%B5%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BB%D1%84%D0%B0%D0%B2%D0%B8%D1%82" title="Международный фонетический алфавит">/pi:.eɪtʃ.pi:/</a></span> <a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">PHP: Hypertext Preprocessor</span>&#160;— «PHP: <a href="/wiki/%D0%9F%D1%80%D0%B5%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D1%80" title="Препроцессор">препроцессор</a> <a href="/wiki/%D0%93%D0%B8%D0%BF%D0%B5%D1%80%D1%82%D0%B5%D0%BA%D1%81%D1%82" title="Гипертекст">гипертекста</a>»; первоначально PHP/FI (Personal Home Page / Form Interpreter), а позже названный <span lang="en" style="font-style:italic;">Personal Home Page Tools</span><sup id="cite_ref-off_history_13-0" class="reference"><a href="#cite_note-off_history-13">&#91;13&#93;</a></sup>&#160;— «Инструменты для создания персональных веб-страниц»)&#160;— <a href="/wiki/%D0%A1%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D0%B2%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" class="mw-redirect" title="Скриптовый язык">скриптовый язык</a><sup id="cite_ref-14" class="reference"><a href="#cite_note-14">&#91;14&#93;</a></sup> общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время поддерживается подавляющим большинством <a href="/wiki/%D0%A5%D0%BE%D1%81%D1%82%D0%B8%D0%BD%D0%B3" title="Хостинг">хостинг-провайдеров</a> и является одним из лидеров среди языков, применяющихся для создания <a href="/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D1%81%D0%B0%D0%B9%D1%82" title="Динамический сайт">динамических веб-сайтов</a><sup id="cite_ref-tiobe_15-0" class="reference"><a href="#cite_note-tiobe-15">&#91;15&#93;</a></sup>.
</p><p>Язык и его интерпретатор (<a href="/wiki/Zend_Engine" title="Zend Engine">Zend Engine</a>) разрабатываются группой энтузиастов в рамках проекта с <a href="/wiki/%D0%9E%D1%82%D0%BA%D1%80%D1%8B%D1%82%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Открытое программное обеспечение">открытым кодом</a><sup id="cite_ref-16" class="reference"><a href="#cite_note-16">&#91;16&#93;</a></sup>. Проект распространяется под <a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_PHP" class="mw-redirect" title="Лицензия PHP">собственной лицензией</a>, несовместимой с <a href="/wiki/GNU_GPL" class="mw-redirect" title="GNU GPL">GNU GPL</a>.
</p>
<div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading">Содержание</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>

</div>

<h2><span id=".D0.9E.D0.B1.D0.BB.D0.B0.D1.81.D1.82.D1.8C_.D0.BF.D1.80.D0.B8.D0.BC.D0.B5.D0.BD.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Область_применения">Область применения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=1" class="mw-editsection-visualeditor" title="Редактировать раздел «Область применения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=1" title="Редактировать раздел «Область применения»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>В области веб-программирования, в частности серверной части, PHP&#160;— один из популярных <a href="/wiki/%D0%A1%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D0%B2%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" class="mw-redirect" title="Скриптовый язык">сценарных языков</a> (наряду с <a href="/wiki/JSP" class="mw-redirect" title="JSP">JSP</a>, <a href="/wiki/Perl" title="Perl">Perl</a> и языками, используемыми в <a href="/wiki/ASP.NET" title="ASP.NET">ASP.NET</a>).
</p><p>Популярность в области построения <a href="/wiki/%D0%92%D0%B5%D0%B1-%D1%81%D0%B0%D0%B9%D1%82" class="mw-redirect" title="Веб-сайт">веб-сайтов</a> определяется наличием большого набора встроенных средств и дополнительных модулей для разработки веб-приложений<sup id="cite_ref-17" class="reference"><a href="#cite_note-17">&#91;17&#93;</a></sup>. Основные из них:
</p>
<ul><li>автоматическое извлечение <a href="/wiki/HTTP#POST" title="HTTP">POST</a>- и <a href="/wiki/HTTP#GET" title="HTTP">GET</a>-параметров, а также переменных окружения веб-сервера в предопределённые массивы;</li>
<li>взаимодействие с большим количеством различных систем управления базами данных через дополнительные модули (<a href="/wiki/MySQL" title="MySQL">MySQL</a>, <a href="/wiki/MySQLi" title="MySQLi">MySQLi</a>, <a href="/wiki/SQLite" title="SQLite">SQLite</a>, <a href="/wiki/PostgreSQL" title="PostgreSQL">PostgreSQL</a>, <a href="/w/index.php?title=Oracle_(OCI8&amp;action=edit&amp;redlink=1" class="new" title="Oracle (OCI8 (страница отсутствует)">Oracle (OCI8</a>), <a href="/wiki/Oracle_(%D0%A1%D0%A3%D0%91%D0%94)" class="mw-redirect" title="Oracle (СУБД)">Oracle</a>, <a href="/wiki/Microsoft_SQL_Server" title="Microsoft SQL Server">Microsoft SQL Server</a>, <a href="/wiki/Sybase" title="Sybase">Sybase</a>, <a href="/wiki/ODBC" title="ODBC">ODBC</a>, <a href="/wiki/MSQL" title="MSQL">mSQL</a>, <a href="/wiki/IBM_DB2" class="mw-redirect" title="IBM DB2">IBM DB2</a>, <a href="/wiki/Cloudscape" class="mw-redirect" title="Cloudscape">Cloudscape</a> и <a href="/wiki/Apache_Derby" title="Apache Derby">Apache Derby</a>, <a href="/wiki/Informix" title="Informix">Informix</a>, <a href="/w/index.php?title=Ovrimos_SQL&amp;action=edit&amp;redlink=1" class="new" title="Ovrimos SQL (страница отсутствует)">Ovrimos SQL</a>, <a href="/wiki/Lotus_Notes" class="mw-redirect" title="Lotus Notes">Lotus Notes</a>, <a href="/w/index.php?title=DB%2B%2B&amp;action=edit&amp;redlink=1" class="new" title="DB++ (страница отсутствует)">DB++</a>, <a href="/wiki/DBM" title="DBM">DBM</a>, <a href="/wiki/DBase" title="DBase">dBase</a>, <a href="/w/index.php?title=DBX_(%D0%A1%D0%A3%D0%91%D0%94)&amp;action=edit&amp;redlink=1" class="new" title="DBX (СУБД) (страница отсутствует)">DBX</a>, <a href="/w/index.php?title=FrontBase&amp;action=edit&amp;redlink=1" class="new" title="FrontBase (страница отсутствует)">FrontBase</a>, <a href="/w/index.php?title=FilePro&amp;action=edit&amp;redlink=1" class="new" title="FilePro (страница отсутствует)">FilePro</a>, <a href="/w/index.php?title=Ingres_II&amp;action=edit&amp;redlink=1" class="new" title="Ingres II (страница отсутствует)">Ingres II</a>, <a href="/w/index.php?title=SESAM&amp;action=edit&amp;redlink=1" class="new" title="SESAM (страница отсутствует)">SESAM</a>, <a href="/wiki/Firebird" title="Firebird">Firebird</a> / <a href="/wiki/InterBase" class="mw-redirect" title="InterBase">InterBase</a>, <a href="/w/index.php?title=Paradox_File_Access&amp;action=edit&amp;redlink=1" class="new" title="Paradox File Access (страница отсутствует)">Paradox File Access</a>, <a href="/w/index.php?title=MaxDB&amp;action=edit&amp;redlink=1" class="new" title="MaxDB (страница отсутствует)">MaxDB</a>, <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81" title="Интерфейс">Интерфейс</a> <a href="/wiki/PDO" class="mw-redirect" title="PDO">PDO</a>), <a href="/wiki/Redis" title="Redis">Redis</a>;</li>
<li>автоматизированная отправка <a href="/wiki/%D0%97%D0%B0%D0%B3%D0%BE%D0%BB%D0%BE%D0%B2%D0%BA%D0%B8_HTTP" title="Заголовки HTTP">HTTP-заголовков</a>;</li>
<li>работа с HTTP-авторизацией;</li>
<li>работа с <a href="/wiki/Cookies" class="mw-redirect" title="Cookies">cookies</a> и сессиями;</li>
<li>работа с локальными и удалёнными файлами, <a href="/wiki/%D0%A1%D0%BE%D0%BA%D0%B5%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D1%8B%D0%B9_%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81)" title="Сокет (программный интерфейс)">сокетами</a>;</li>
<li>обработка файлов, загружаемых на сервер;</li>
<li>работа с <a href="/wiki/XForms" title="XForms">XForms</a>.</li></ul>
<p>В настоящее время PHP используется сотнями тысяч разработчиков. Согласно рейтингу корпорации TIOBE, базирующемуся на данных поисковых систем, в мае 2016 года PHP находился на 6 месте среди языков программирования<sup id="cite_ref-tiobe_15-1" class="reference"><a href="#cite_note-tiobe-15">&#91;15&#93;</a></sup>. К крупнейшим сайтам, использующим PHP, относятся <a href="/wiki/Facebook" title="Facebook">Facebook</a>, <a href="/wiki/Wikipedia" class="mw-redirect" title="Wikipedia">Wikipedia</a> и др.
</p><p>Входит в <a href="/wiki/LAMP" title="LAMP">LAMP</a>&#160;— распространённый набор программного обеспечения для создания и <a href="/wiki/%D0%A5%D0%BE%D1%81%D1%82%D0%B8%D0%BD%D0%B3" title="Хостинг">хостинга</a> <a href="/wiki/%D0%92%D0%B5%D0%B1-%D1%81%D0%B0%D0%B9%D1%82" class="mw-redirect" title="Веб-сайт">веб-сайтов</a> (<a href="/wiki/Linux" title="Linux">Linux</a>, <a href="/wiki/Apache_HTTP_Server" title="Apache HTTP Server">Apache</a>, <a href="/wiki/MySQL" title="MySQL">MySQL</a>, PHP).
</p>
<h2><span id=".D0.94.D0.BE.D0.BF.D0.BE.D0.BB.D0.BD.D0.B8.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D1.8B.D0.B5_.D0.B2.D0.BE.D0.B7.D0.BC.D0.BE.D0.B6.D0.BD.D0.BE.D1.81.D1.82.D0.B8"></span><span class="mw-headline" id="Дополнительные_возможности">Дополнительные возможности</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=2" class="mw-editsection-visualeditor" title="Редактировать раздел «Дополнительные возможности»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=2" title="Редактировать раздел «Дополнительные возможности»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Язык автоматически поддерживает HTTP Cookies в соответствии с стандартами Netscape. Это позволяет проводить установку и чтение небольших сегментов данных на стороне клиента. Работа с Cookies организована посредством сеансов (сессий). У сессий есть срок действия (после его истечения данные удаляются), в сессиях можно хранить и редактировать разные типы данных, в том числе сериализованные&#160;— пропущенные через serialize (процесс происходит автоматически), PHP-объекты.
</p>
<h3><span id=".D0.A1.D0.BE.D0.B7.D0.B4.D0.B0.D0.BD.D0.B8.D0.B5_GUI-.D0.BF.D1.80.D0.B8.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.B8.D0.B9"></span><span class="mw-headline" id="Создание_GUI-приложений">Создание GUI-приложений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=3" class="mw-editsection-visualeditor" title="Редактировать раздел «Создание GUI-приложений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=3" title="Редактировать раздел «Создание GUI-приложений»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>PHP не ориентирован на создание приложений, но есть потребность в создании интерфейсов для настройки серверов, беспрерывного выполнения, отладки скриптов (сценариев), управления локальными и тестовыми серверами, и&#160;т.&#160;п. Из-за этого и возникли решения данной проблемы.
</p>
<h4><span id=".D0.A0.D0.B0.D1.81.D1.88.D0.B8.D1.80.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Расширения">Расширения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=4" class="mw-editsection-visualeditor" title="Редактировать раздел «Расширения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=4" title="Редактировать раздел «Расширения»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Основное использование расширений&#160;— надстройки библиотек <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8F" title="Интерфейс пользователя">интерфейсов пользователя</a> (UI-библиотек).
</p><p>Расширения условно делятся на три группы:
</p>
<ul><li>Расширения PHP: <a rel="nofollow" class="external text" href="https://wxphp.org/">WxPHP</a> (<a href="/wiki/Microsoft_Windows" class="mw-redirect" title="Microsoft Windows">Windows</a>, <a href="/wiki/Linux" title="Linux">Linux</a>, <a href="/wiki/MacOS" title="MacOS">macOS</a>), <a rel="nofollow" class="external text" href="https://pecl.php.net/package/WinBinder"><s>Winbinder</s></a> (<a href="/wiki/Microsoft_Windows" class="mw-redirect" title="Microsoft Windows">Windows</a>).</li>
<li>Обёртки, использующие системные функции средствами FFI: <a rel="nofollow" class="external text" href="https://pecl.php.net/package/win32std"><s>Win32Std</s></a>, <a rel="nofollow" class="external text" href="https://pecl.php.net/package/tk"><s>Tk</s></a> (<a href="/wiki/Tkinter" title="Tkinter">реализация для Python</a>).</li>
<li><a href="/wiki/%D0%9A%D0%BE%D0%BD%D1%81%D0%BE%D0%BB%D1%8C" title="Консоль">Консольные</a> обёртки для использования командного интерфейса (CLI): <a rel="nofollow" class="external text" href="https://github.com/krakjoe/ui">PHP-UI</a>, <a rel="nofollow" class="external text" href="https://code.google.com/archive/p/php-xcb/"><s>PHP-XCB</s></a>.</li></ul>
<p>Разработаны расширения, такие, как двусторонняя обёртка для использования других языков при написании расширений PHP, и наоборот. Например, <a href="https://sourceforge.net/projects/psvlib" class="extiw" title="sourceforge:projects/psvlib">PSV Component Library</a>,&#160;— проект, состоящий из трёх подпроектов:
</p>
<ul><li><a rel="nofollow" class="external text" href="https://github.com/perevoznyk/php4delphi"><i>PHP4Delphi</i></a> реализует соединения PHP с программами, написанными на <a href="/wiki/Delphi_(%D1%81%D1%80%D0%B5%D0%B4%D0%B0_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8)" title="Delphi (среда разработки)">Delphi</a> средствами <a href="/wiki/Windows_API" title="Windows API">WinAPI</a>. Разрабатывался с 1999 года, но не обновлялся c 2009 года, из-за чего появились ответвления&#160;— <a href="/wiki/%D0%A4%D0%BE%D1%80%D0%BA" title="Форк">форки</a>&#160;— сторонние обновления, например, <a rel="nofollow" class="external text" href="https://github.com/rnapoles/PHP4Lazarus">PHP4Lazarus</a>.</li>
<li><i>PHP extensions development framework&#160;— средство создания расширений PHP, VCL-компоненты&#160;— неотъемлемая часть <a rel="nofollow" class="external text" href="https://github.com/perevoznyk/php4delphi">PHP4Delphi</a>, базовые компоненты которой нужны для создания приложений.</i></li>
<li><i>php4Applications</i>&#160;— расширение для использования PHP в других языках, базирующееся на PHP4Delphi, дающее доступ к <a href="/wiki/%D0%9C%D0%B0%D0%BA%D1%80%D0%BE%D1%81%D1%8B" class="mw-redirect" title="Макросы">макросам</a> и упрощающее использование PHP, избавляя от создания обёртки.</li></ul>
<h4><span id=".D0.A1.D1.80.D0.B5.D0.B4.D1.8B_.D1.80.D0.B0.D0.B7.D1.80.D0.B0.D0.B1.D0.BE.D1.82.D0.BA.D0.B8_.28IDE.29"></span><span class="mw-headline" id="Среды_разработки_(IDE)">Среды разработки (IDE)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=5" class="mw-editsection-visualeditor" title="Редактировать раздел «Среды разработки (IDE)»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=5" title="Редактировать раздел «Среды разработки (IDE)»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Есть место и полноценным средам разработки для GUI PHP:
</p>
<ul><li><b>DevPHP</b></li></ul>
<p>Первопроходцем в этой категории является студия <a href="https://sourceforge.net/projects/devphp/" class="extiw" title="sourceforge:projects/devphp/">DevPHP-IDE</a>, которая использовала <a href="/wiki/Kylix" title="Kylix">Kylix</a>(<a href="/wiki/Embarcadero_Delphi" class="mw-redirect" title="Embarcadero Delphi">Delphi</a>) в качестве основы интерфейса и php-<a href="/w/index.php?title=Command-line_interface&amp;action=edit&amp;redlink=1" class="new" title="Command-line interface (страница отсутствует)">cli</a> для создания пользовательских программ.
</p><p>Она включала в себя редактор кода, несколько инструментов и визуальный просмотр HTML-страниц.
</p><p>Впервые была представлена в 2002 году, сейчас имеет 3 стабильные версии, но разработка не продолжается&#160;— остановилась из-за гибели главного разработчика в автокатастрофе.
</p>
<ul><li><b>CodeGear Rad Studio (Расширение)</b></li></ul>
<p>После DevPHP IDE появилось расширение&#160;— набор компонентов для <a href="/w/index.php?title=CodeGear_Delphi&amp;action=edit&amp;redlink=1" class="new" title="CodeGear Delphi (страница отсутствует)">CodeGear Rad Studio 2009</a> на базе php4delphi с некоторыми улучшениями (веб-элементы, инспектор, отладчик), поддержка её длилась в течение четырёх версий, вторая из которых вошла в платное расширение <a href="/w/index.php?title=CodeGear_Delphi&amp;action=edit&amp;redlink=1" class="new" title="CodeGear Delphi (страница отсутствует)">Rad Studio 2010</a>: была возможность использовать скрипты, задавать стиль веб-компонентам, просматривать стили и веб-страницы до сборки программы, запускать локальный сервер, собирать программу, как отдельное приложение и отлаживать код. С выходом Delphi XE расширение получило название RADPHP Xe. Далее сама студия стала называться Embarcadero Delphi, и работа над данным расширением была приостановлена на неопределённый срок.
</p>
<ul><li><b>DevelStudio (RAD)</b></li></ul>
<p>В 2009 году на базе php4delphi началась разработка среды для создания графических PHP-приложений, к разработке которой позже присоединился Ростислав Романов. Среда получила название <a rel="nofollow" class="external text" href="https://web.archive.org/web/20190406154103/http://develstudio.org/">PHP DevelStudio</a>, первой опубликованной версией стала 0.1.7. DevelStudio имела небольшое количество компонентов в наборе инструментов и работала на устаревшем PHP 4. Во второй версии DevelStudio получила поддержку PHP 5. Были добавлены потоки, произведены множественные изменения и улучшения. Код сборки программ стал закрытым, предыдущие версии программы и сообщения на форуме были удалены с целью воспрепятствования злоумышленникам.
</p><p>Вторая версия DevelStudio так же получила набор компонентов <a rel="nofollow" class="external text" href="https://www.alphaskins.com">AlphaControls</a>, вследствие чего её стали использовать для создания <a href="/wiki/%D0%92%D1%80%D0%B5%D0%B4%D0%BE%D0%BD%D0%BE%D1%81%D0%BD%D0%B0%D1%8F_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0" title="Вредоносная программа">вредоносных программ</a> в силу её простоты и понятности. Популярные на то время антивирусы (MacAffee, <a href="/wiki/AVG_AntiVirus" title="AVG AntiVirus">AVG</a>, <a href="/wiki/Avira_Antivirus" title="Avira Antivirus">Avira</a>) стали распознавать любые скомпилированные в DevelStudio программы как вирусы.
</p><p>Через некоторое время автор AlphaControls обратился с жалобой к разработчикам DevelStudio, и набор компонентов был полностью удалён из среды, однако сохранился в уже существовавшей версии, удалить которую с форума в этот раз не представлялось возможным.
</p><p>На момент 2012 года вышла последняя версия среды&#160;— 3.0.2, где появился новый набор компонентов, в том числе браузер <a href="/wiki/Chromium" title="Chromium">Chromium</a> вместо <a href="/wiki/Internet_Explorer" title="Internet Explorer">IE</a>, что привлекло внимание веб-разработчиков и пользователей среды «Алгоритм». На тот момент компиляция программ в «Алгоритме» была платной, поэтому DevelStudio как новая и бесплатная среда разработки переманила на себя бо́льшую часть аудитории.
</p><p>В 2014 году начались первые попытки по восстановлению среды, в этот раз со стороны <a href="/wiki/%D0%A1%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D1%81%D1%82%D0%B2%D0%BE" title="Сообщество">сообщества</a>. В конце 2018 года исходный код был восстановлен и доступен в <a rel="nofollow" class="external text" href="https://github.com/kashaketcompany/soulengine">этом</a> <a href="/wiki/%D0%A0%D0%B5%D0%BF%D0%BE%D0%B7%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%B9" title="Репозиторий">репозитории</a> <a href="/wiki/GitHub" title="GitHub">GitHub</a>.
</p><p>В 2019 году сообщество обратилось к создателю DevelStudio с целью изменения политики распространения среды, вследствие чего она стала доступной для обновления и редактирования. Из-за жалоб на отсутствие ссылок на использованные библиотеки (DCEF, PHP4Delphi, TSizeCtrl, SynEdit) <a rel="nofollow" class="external text" href="https://web.archive.org/web/20190112115635/http://community.develstudio.org/">форум</a> был удалён, а одна из страниц с описанием среды была перенаправлена на главную страницу сайта. С этого момента DevelStudio официально принадлежит сообществу.
</p>
<ul><li><b>DevelNext (DN)</b></li></ul>
<p>Параллельно с этим главный разработчик DevelStudio начал создавать «реинкарнацию» предыдущей среды. Он взял за основу графическую библиотеку <a href="/wiki/JavaFX" title="JavaFX">JavaFX</a>, в результате вышла полностью новая среда, с поддержкой <a href="/wiki/CSS" title="CSS">CSS</a>, <b>но без полной поддержки PHP</b>&#160;— проект был основан на собственном языке jPHP. Его особенностью является <a href="/wiki/JIT" class="mw-redirect" title="JIT">JIT</a>-компилятор и работа на <a href="/wiki/JVM" class="mw-redirect" title="JVM">JVM</a>.
</p><p>В 16-й версии среда DevelNext получила поддержку php 7 и была расширена энтузиастами для разработки под платформу <a href="/wiki/OS_Android" class="mw-redirect" title="OS Android">OS Android</a>.
</p><p>На данный момент автор и энтузиасты трудятся над 19-й версией (ранее 17-я).
</p>
<ul><li><b>PHPQt</b></li></ul>
<p>В 2015 году Александр Казанцев начал изучать алгоритмы разработки интерфейсов и создал расширение <a rel="nofollow" class="external text" href="https://github.com/vjandrea/php-qt">php_qml</a>, что давало возможность использовать виджеты из библиотеки QT, но имело поддержку лишь одной платформы&#160;— Windows.
</p><p>С этого началась разработка <a rel="nofollow" class="external text" href="https://PHPQt.ru">PHPQt</a>, первые версии не обратили особого внимания со стороны веб-разработчиков, поэтому автор начал углублённо улучшать расширение.
</p><p>28 июля 2015 года был опубликован первый вариант компилятора проектов, на тот момент это был простой исполнитель скриптов(сценариев), который прикреплял php-код к стабу (подобно DevelStudio), и имел зависимость от Windows API, на этой стадии поддерживались уже почти все виджеты и многопоточность, была лёгкая оптимизация php-кода. С этого момента движок стали называть PQEngine,
</p><p>3 августа 2016 года вышла пятая версия компилятора приложений (PqBuilder), что перешёл на базу PlastiQ и имел поддержку уже новейшего, на тот момент, php 7, проекты получили более полноценный компилятор и уже не требовали наличия PqEngine.dll вблизи с исполняемым файлом, вместо этого визуальные библиотеки стали добавляться динамично&#160;— как файлы, а не вшиваться в PQEngine.dll. Такой шаг был предпринят для совместимости с другими системами и оригинальными библиотеками Qt.
</p><p>С появлением шестой версии проект стал дополнением для среды Qt Studio, а компилятор стал всего-навсего оптимизатором кода перед конечной сборкой программы. Появился полноценный редактор интерфейса, подсказки в редакторе кода и начала создаваться документация. С этого момента сделали анонс про создание среды PqStudio, но её разработка не зашла далеко.
</p>
<ul><li><b>WinForms PHP</b></li></ul>
<p>В 2018 году появился проект, объединяющий возможности Windows Forms (.NET Framework) и PHP 7.  Его разработка медленными темпами ведётся и сейчас. На текущий момент в движке доступны практически все функции для ООП. Среда находится на стадии приватной разработки. К исполняемому файлу по умолчанию прилагается php7ts.dll.
</p>
<h4><span id=".D0.9F.D0.BE.D0.B4.D0.BA.D0.BB.D1.8E.D1.87.D0.B5.D0.BD.D0.B8.D0.B5_PHP_.D0.BA_.D0.BF.D1.80.D0.BE.D0.B5.D0.BA.D1.82.D1.83"></span><span class="mw-headline" id="Подключение_PHP_к_проекту">Подключение PHP к проекту</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=6" class="mw-editsection-visualeditor" title="Редактировать раздел «Подключение PHP к проекту»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=6" title="Редактировать раздел «Подключение PHP к проекту»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Также существуют расширения и для геометрично-противоположного применения&#160;— подключения PHP к проекту на другом языке программирования:
</p><p><a rel="nofollow" class="external text" href="https://github.com/DEVSENSE/Phalanger">Phalanger</a> (C#)&#160;— php 5.4 по 7, <a rel="nofollow" class="external text" href="https://github.com/peachpiecompiler/peachpie">Peachpie</a> (C#)&#160;— php 7, <a rel="nofollow" class="external text" href="https://github.com/perevoznyk/php4delphi">PHP4Delphi</a> (Lazarus, Delphi, C#, C, C++)&#160;— php 5.6, <a rel="nofollow" class="external text" href="https://github.com/jphp-group/jphp">JPHP</a> (Java)&#160;— php 7.0, <a rel="nofollow" class="external text" href="https://github.com/viraptor/phply">PHPly</a> (Python)&#160;— php 5.6
</p>
<h2><span id=".D0.98.D1.81.D1.82.D0.BE.D1.80.D0.B8.D1.8F"></span><span class="mw-headline" id="История">История</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=7" class="mw-editsection-visualeditor" title="Редактировать раздел «История»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=7" title="Редактировать раздел «История»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="hatnote">Основная статья: <b><a href="/wiki/%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F_PHP" title="История PHP">История PHP</a></b></div>
<p>В <a href="/wiki/1994_%D0%B3%D0%BE%D0%B4" title="1994 год">1994 году</a> <a href="/wiki/%D0%94%D0%B0%D0%BD%D0%B8%D1%8F" title="Дания">датский</a> <a href="/wiki/%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%81%D1%82" title="Программист">программист</a> <a href="/wiki/%D0%9B%D0%B5%D1%80%D0%B4%D0%BE%D1%80%D1%84,_%D0%A0%D0%B0%D1%81%D0%BC%D1%83%D1%81" title="Лердорф, Расмус">Расмус Лердорф</a> разработал на <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">C</a><sup id="cite_ref-18" class="reference"><a href="#cite_note-18">&#91;18&#93;</a></sup> набор <a href="/wiki/CGI" title="CGI">CGI-скриптов</a> для учёта посетителей его <a href="/wiki/%D0%9E%D0%BD%D0%BB%D0%B0%D0%B9%D0%BD" class="mw-redirect" title="Онлайн">онлайн</a>-<a href="/wiki/%D0%A0%D0%B5%D0%B7%D1%8E%D0%BC%D0%B5" title="Резюме">резюме</a>, обрабатывающий шаблоны <a href="/wiki/HTML" title="HTML">HTML</a>-документов. Лердорф назвал набор <i>Personal Home Page Tools</i> (Инструменты для <i>личной домашней страницы</i>). Вскоре функциональности перестало хватать, и Лердорф разработал новый интерпретатор шаблонов <i>PHP/FI</i> (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">Personal Home Page / Forms Interpreter</span>&#160;— «персональная домашняя страница / интерпретатор форм»)<sup id="cite_ref-19" class="reference"><a href="#cite_note-19">&#91;19&#93;</a></sup>.
</p><p>8 июня 1995 года вышел Personal Home Page (PHP Tools) version 1.0&#160;— первый публичный релиз.
</p><p>В <a href="/wiki/1997_%D0%B3%D0%BE%D0%B4" title="1997 год">1997 году</a> после длительного <a href="/wiki/%D0%91%D0%B5%D1%82%D0%B0-%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Бета-тестирование">бета-тестирования</a> вышла вторая версия обработчика, написанного на <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">C</a>&#160;— PHP/FI 2.0. Её использовали около 1&#160;% (приблизительно 50 тысяч) всех <a href="/wiki/%D0%94%D0%BE%D0%BC%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D0%B8%D0%BC%D1%8F" title="Доменное имя">интернет-доменов</a> мира<sup id="cite_ref-off_history_13-1" class="reference"><a href="#cite_note-off_history-13">&#91;13&#93;</a></sup>.
</p><p>Версия <b>PHP 3.0</b> подверглась значительной переработке, определившей современный облик и стиль языка программирования. В 1997 году два израильских программиста, <a href="/wiki/%D0%93%D1%83%D1%82%D0%BC%D0%B0%D0%BD%D1%81,_%D0%AD%D0%BD%D0%B4%D0%B8" title="Гутманс, Энди">Энди Гутманс</a> и <a href="/wiki/%D0%A1%D1%83%D1%80%D0%B0%D1%81%D0%BA%D0%B8,_%D0%97%D0%B5%D0%B5%D0%B2" title="Сураски, Зеев">Зеев Сураски</a>, полностью переписали код интерпретатора. PHP 3.0 был официально выпущен в июне <a href="/wiki/1998_%D0%B3%D0%BE%D0%B4" title="1998 год">1998 года</a>.<sup id="cite_ref-off_history_13-2" class="reference"><a href="#cite_note-off_history-13">&#91;13&#93;</a></sup>
</p><p>Одной из сильнейших сторон PHP 3.0 была возможность расширения ядра дополнительными модулями. Впоследствии интерфейс написания расширений привлёк к PHP множество сторонних разработчиков, работающих над своими модулями, что дало PHP возможность работать с огромным количеством <a href="/wiki/%D0%91%D0%B0%D0%B7%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="База данных">баз данных</a>, <a href="/wiki/%D0%A1%D0%B5%D1%82%D0%B5%D0%B2%D0%BE%D0%B9_%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB" class="mw-redirect" title="Сетевой протокол">протоколов</a>, поддерживать большое число <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F_%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9" class="mw-redirect" title="Интерфейс программирования приложений">API</a>. Большое количество разработчиков привело к быстрому развитию языка и стремительному росту его популярности. С этой версии <a href="/wiki/%D0%90%D0%BA%D1%80%D0%BE%D0%BD%D0%B8%D0%BC" title="Акроним">акроним</a> <i>php</i> расшифровывается как «PHP: hypertext Preprocessor», вместо устаревшего «Personal Home Page».
</p><p>К зиме 1998 года, практически сразу после официального выхода PHP 3.0, Энди Гутманс и Зеев Сураски начали переработку ядра PHP. В задачи входило увеличение производительности сложных приложений и улучшение модульности базиса кода PHP. Новый движок, названный <a href="/wiki/Zend_Engine" title="Zend Engine">Zend Engine</a>, успешно справлялся с поставленными задачами и впервые был представлен в середине <a href="/wiki/1999_%D0%B3%D0%BE%D0%B4" title="1999 год">1999 года</a>.
<b>PHP 4.0</b>, основанный на этом движке и принёсший с собой набор дополнительных функций, официально вышел в мае <a href="/wiki/2000_%D0%B3%D0%BE%D0%B4" title="2000 год">2000 года</a>. В дополнение к улучшению производительности, PHP 4.0 имел ещё несколько ключевых нововведений, таких как поддержка сессий, <a href="/wiki/%D0%91%D1%83%D1%84%D0%B5%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Буферизация (информатика)">буферизация</a> вывода, более безопасные способы обработки вводимой пользователем информации и несколько новых языковых конструкций.
</p><p><b>Пятая версия PHP</b> была выпущена разработчиками <a href="/wiki/13_%D0%B8%D1%8E%D0%BB%D1%8F" title="13 июля">13 июля</a> <a href="/wiki/2004_%D0%B3%D0%BE%D0%B4" title="2004 год">2004 года</a>. Изменения включают обновление ядра Zend (<i>Zend Engine 2</i>), что существенно увеличило эффективность <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BF%D1%80%D0%B5%D1%82%D0%B0%D1%82%D0%BE%D1%80" title="Интерпретатор">интерпретатора</a>. Введена поддержка языка разметки <a href="/wiki/XML" title="XML">XML</a>. Полностью переработаны функции <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">ООП</a>, которые стали во многом схожи с моделью, используемой в <a href="/wiki/Java" title="Java">Java</a>. В частности, введён <a href="/wiki/%D0%94%D0%B5%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80" title="Деструктор">деструктор</a>, <a href="/wiki/%D0%98%D0%BD%D0%BA%D0%B0%D0%BF%D1%81%D1%83%D0%BB%D1%8F%D1%86%D0%B8%D1%8F_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Инкапсуляция (программирование)">открытые, закрытые и защищённые члены и методы</a>, окончательные члены и методы, <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_(%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Интерфейс (объектно-ориентированное программирование)">интерфейсы</a> и клонирование объектов.
В последующих версиях также были введены <a href="/wiki/%D0%9F%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE_%D0%B8%D0%BC%D1%91%D0%BD_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Пространство имён (программирование)">пространства имён</a>, <a href="/wiki/%D0%97%D0%B0%D0%BC%D1%8B%D0%BA%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Замыкание (программирование)">замыкания</a> и целый ряд достаточно серьёзных изменений, количественно и качественно сравнимых с теми, которые появились при переходе на PHP 5.0.
</p><p><b>Шестая версия PHP</b> разрабатывалась с <a href="/wiki/%D0%9E%D0%BA%D1%82%D1%8F%D0%B1%D1%80%D1%8C_2006_%D0%B3%D0%BE%D0%B4%D0%B0" title="Октябрь 2006 года">октября 2006</a> года<sup id="cite_ref-20" class="reference"><a href="#cite_note-20">&#91;20&#93;</a></sup>. Было сделано множество нововведений<sup id="cite_ref-21" class="reference"><a href="#cite_note-21">&#91;21&#93;</a></sup><sup id="cite_ref-22" class="reference"><a href="#cite_note-22">&#91;22&#93;</a></sup>, как, например, исключение из ядра регулярных выражений <a href="/wiki/POSIX" title="POSIX">POSIX</a> и «длинных» суперглобальных массивов, удаление директив <i>safe_mode</i>, <i>magic_quotes_gpc</i> и <i>register_globals</i> из конфигурационного файла php.ini. Одним из основных новшеств должна была стать поддержка <a href="/wiki/%D0%AE%D0%BD%D0%B8%D0%BA%D0%BE%D0%B4" title="Юникод">Юникода</a>.<sup id="cite_ref-newphp6_23-0" class="reference"><a href="#cite_note-newphp6-23">&#91;23&#93;</a></sup>. Однако в <a href="/wiki/%D0%9C%D0%B0%D1%80%D1%82_2010_%D0%B3%D0%BE%D0%B4%D0%B0" title="Март 2010 года">марте 2010</a> года разработка PHP6 была признана бесперспективной<sup id="cite_ref-24" class="reference"><a href="#cite_note-24">&#91;24&#93;</a></sup> из-за сложностей с поддержкой Юникода. Исходный код PHP6 перемещён на <a href="/wiki/%D0%92%D0%B5%D1%82%D0%B2%D1%8C_(%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%8F%D0%BC%D0%B8)" title="Ветвь (управление версиями)">ветвь</a>, а основной линией разработки стала версия 5.4.
</p>
<h3><span class="mw-headline" id="PHP_7"><span id="ZE3"><span id="NG"></span></span>PHP 7</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=8" class="mw-editsection-visualeditor" title="Редактировать раздел «PHP 7»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=8" title="Редактировать раздел «PHP 7»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В 2014 году было проведено голосование, по результатам которого следующая версия получила название PHP 7<sup id="cite_ref-25" class="reference"><a href="#cite_note-25">&#91;25&#93;</a></sup>. Выход новой версии планировался в середине октября 2015 года<sup id="cite_ref-26" class="reference"><a href="#cite_note-26">&#91;26&#93;</a></sup>. В марте 2015 года <a href="/wiki/Zend_Technologies" title="Zend Technologies">Zend</a> представили <a href="/wiki/%D0%98%D0%BD%D1%84%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%B0" title="Инфографика">инфографику</a>, в которой описаны основные нововведения PHP 7<sup id="cite_ref-27" class="reference"><a href="#cite_note-27">&#91;27&#93;</a></sup>.
</p><p><a href="/wiki/3_%D0%B4%D0%B5%D0%BA%D0%B0%D0%B1%D1%80%D1%8F" title="3 декабря">3 декабря</a> <a href="/wiki/2015_%D0%B3%D0%BE%D0%B4" title="2015 год">2015&#160;года</a> было объявлено о выходе PHP версии 7.0.0.<sup id="cite_ref-28" class="reference"><a href="#cite_note-28">&#91;28&#93;</a></sup>
</p><p>Новая версия основывается на экспериментальной <a href="/wiki/%D0%92%D0%B5%D1%82%D0%B2%D1%8C_(%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%8F%D0%BC%D0%B8)" title="Ветвь (управление версиями)">ветви</a> PHP, которая изначально называлась <i>phpng</i> (<i>PHP Next Generation&#160;— следующее поколение</i>), и разрабатывалась с упором на увеличение производительности и уменьшение потребления памяти<sup id="cite_ref-29" class="reference"><a href="#cite_note-29">&#91;29&#93;</a></sup>. В новой версии добавлена возможность указывать тип возвращаемых из функции данных<sup id="cite_ref-30" class="reference"><a href="#cite_note-30">&#91;30&#93;</a></sup>, добавлен контроль передаваемых типов для данных<sup id="cite_ref-31" class="reference"><a href="#cite_note-31">&#91;31&#93;</a></sup>, а также новые операторы.
</p><p>13 Июня 2019 вышла версия PHP 7.4. В ядро были добавлены типизированные свойства и стрелочные функции, а также ограниченная ковариация возвращаемого типа и контравариантность типа аргумента.<sup id="cite_ref-32" class="reference"><a href="#cite_note-32">&#91;32&#93;</a></sup>
</p><p>Выход версии 8.0 анонсирован на 3-е декабря 2020-го.<sup id="cite_ref-33" class="reference"><a href="#cite_note-33">&#91;33&#93;</a></sup> Главными нововведениями станут<sup id="cite_ref-34" class="reference"><a href="#cite_note-34">&#91;34&#93;</a></sup>: поддержка <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5_(%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)" title="Объединение (структура данных)">union-типов</a><sup id="cite_ref-35" class="reference"><a href="#cite_note-35">&#91;35&#93;</a></sup>, <a href="/wiki/JIT-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%86%D0%B8%D1%8F" title="JIT-компиляция">JIT-компиляция</a><sup id="cite_ref-36" class="reference"><a href="#cite_note-36">&#91;36&#93;</a></sup> и аттрибуты (также известны как аннотации).<sup id="cite_ref-37" class="reference"><a href="#cite_note-37">&#91;37&#93;</a></sup>
</p>
<h2><span id=".D0.A1.D0.B8.D0.BD.D1.82.D0.B0.D0.BA.D1.81.D0.B8.D1.81"></span><span class="mw-headline" id="Синтаксис">Синтаксис</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=9" class="mw-editsection-visualeditor" title="Редактировать раздел «Синтаксис»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=9" title="Редактировать раздел «Синтаксис»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="thumb tright"><div class="thumbinner" style="width:222px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:PHPCode_HelloWorld.svg" class="image"><img alt="PHPCode HelloWorld.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/PHPCode_HelloWorld.svg/220px-PHPCode_HelloWorld.svg.png" decoding="async" width="220" height="97" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5c/PHPCode_HelloWorld.svg/330px-PHPCode_HelloWorld.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5c/PHPCode_HelloWorld.svg/440px-PHPCode_HelloWorld.svg.png 2x" data-file-width="458" data-file-height="202" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:PHPCode_HelloWorld.svg" class="internal" title="Увеличить"></a></div></div></div></div>
<style data-mw-deduplicate="TemplateStyles:r104610261">.mw-parser-output .ts-Родственный_проект{background:#f8f9fa;border:1px solid #a2a9b1;clear:right;float:right;font-size:90%;margin:0 0 1em 1em;padding:.4em;max-width:23em;width:23em;line-height:1.5}.mw-parser-output .ts-Родственный_проект th,.mw-parser-output .ts-Родственный_проект td{padding:.2em 0;vertical-align:middle}.mw-parser-output .ts-Родственный_проект th+td{padding-left:.4em}@media(max-width:719px){.mw-parser-output .ts-Родственный_проект{box-sizing:border-box}}</style>
<table class="metadata plainlinks ts-Родственный_проект noprint ruwikiWikimediaNavigation">

<tbody><tr>
<th style="width: 10%"><img alt="Логотип Викиучебника" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Notification-icon-Wikibooks-logo.svg/40px-Notification-icon-Wikibooks-logo.svg.png" decoding="async" width="40" height="40" class="noviewer" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Notification-icon-Wikibooks-logo.svg/60px-Notification-icon-Wikibooks-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Notification-icon-Wikibooks-logo.svg/80px-Notification-icon-Wikibooks-logo.svg.png 2x" data-file-width="30" data-file-height="30" />
</th>
<td>Имеется <a href="/wiki/%D0%92%D0%B8%D0%BA%D0%B8%D1%83%D1%87%D0%B5%D0%B1%D0%BD%D0%B8%D0%BA" title="Викиучебник">викиучебник</a> по теме <span class="wikibooks-ref"><b>«<a href="https://ru.wikibooks.org/wiki/PHP" class="extiw" title="b:PHP">PHP</a>»</b></span>
</td></tr></tbody></table>
<p>Синтаксис PHP подобен синтаксису языка <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a>. Некоторые элементы, такие как <a href="/wiki/%D0%90%D1%81%D1%81%D0%BE%D1%86%D0%B8%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B0%D1%81%D1%81%D0%B8%D0%B2" title="Ассоциативный массив">ассоциативные массивы</a> и цикл <code>foreach</code>, заимствованы из <a href="/wiki/Perl" title="Perl">Perl</a>.
</p><p>Для написания простейшего скрипта не требуется описывать какие-либо переменные, используемые модули и&#160;т.&#160;п. Любой скрипт может начинаться непосредственно с оператора PHP.
</p><p>Простейшая <a href="/wiki/%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0_Hello_world" class="mw-redirect" title="Программа Hello world">программа Hello world</a> на PHP выглядит следующим образом:
</p>
<div class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr"><pre><span></span><span class="cp">&lt;?php</span>
  <span class="k">echo</span> <span class="s1">&#39;Hello, world!&#39;</span><span class="p">;</span> 
<span class="cp">?&gt;</span><span class="x"></span>
</pre></div>
<p>Также возможен более короткий вариант вывода строки:
</p>
<div class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr"><pre><span></span><span class="o">&lt;?=</span> <span class="s1">&#39;Hello, world!&#39;</span> <span class="cp">?&gt;</span><span class="x"></span>
</pre></div>
<p>Открывающий тег вида <code>&lt;?=</code> используется для сокращённой записи конструкций, используемых для вывода строки.
</p><p>PHP исполняет код, находящийся внутри ограничителей, таких как <code>&lt;?php&#160;?&gt;</code>. Всё, что находится вне ограничителей, выводится без изменений. В основном это используется для вставки PHP-кода в HTML-документ, например, так:
</p>
<div class="mw-highlight mw-highlight-lang-html mw-content-ltr" dir="ltr"><pre><span></span><span class="p">&lt;</span><span class="nt">html</span><span class="p">&gt;</span>
   <span class="p">&lt;</span><span class="nt">head</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">title</span><span class="p">&gt;</span>
         Тестируем PHP
      <span class="p">&lt;/</span><span class="nt">title</span><span class="p">&gt;</span>
   <span class="p">&lt;/</span><span class="nt">head</span><span class="p">&gt;</span>
   <span class="p">&lt;</span><span class="nt">body</span><span class="p">&gt;</span>
</pre></div>
<div class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr"><pre><span></span><span class="x">      </span><span class="cp">&lt;?php</span>
         <span class="k">echo</span> <span class="s2">&quot;Привет мир!&quot;</span><span class="p">;</span>
      <span class="cp">?&gt;</span><span class="x"></span>
</pre></div>
<div class="mw-highlight mw-highlight-lang-html mw-content-ltr" dir="ltr"><pre><span></span>   <span class="p">&lt;/</span><span class="nt">body</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">html</span><span class="p">&gt;</span>
</pre></div>
<p>Помимо ограничителей <code>&lt;?php&#160;?&gt;</code>, допускается использование сокращённого варианта <code>&lt;?&#160;?&gt;</code>. Кроме того, до версии 7.0 допускалось использование ограничителей <a href="/wiki/Active_Server_Pages" title="Active Server Pages">языка программирования ASP</a> <code>&lt;%&#160;%&gt;</code> и <code>&lt;script language="php"&gt; &lt;/script&gt;</code>. Работа сокращённых конструкций определяется в конфигурационном файле php<a href="/wiki/.ini" title=".ini">.ini</a>.
</p><p>Имена переменных начинаются с символа <code>$</code>, тип переменной объявлять не нужно. Имена переменных и констант чувствительны к регистру символов. Имена классов, методов классов и функций к регистру символов не чувствительны. Переменные обрабатываются в <a href="/wiki/%D0%A1%D1%82%D1%80%D0%BE%D0%BA%D0%BE%D0%B2%D1%8B%D0%B9_%D1%82%D0%B8%D0%BF" title="Строковый тип">строках</a>, заключённых в двойные кавычки, и <a href="/wiki/Heredoc" class="mw-redirect" title="Heredoc">heredoc</a>-строках (строках, созданных при помощи оператора &lt;&lt;&lt;). Переменные в строках, заключённых в одинарные кавычки, не обрабатываются.
</p><p>PHP рассматривает переход на новую строку как пробел, так же как HTML и другие языки со свободным форматом. Инструкции разделяются с помощью <i>точки с запятой</i> (<code>;</code>), за исключением некоторых случаев, после объявления конструкции if/else и циклов.
</p><p>Переменные в функцию можно передавать как по значению, так и по ссылке (используется знак <code>&amp;</code>).
</p><p>PHP поддерживает три типа комментариев: в стиле языка <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a> (ограниченные <code>/*&#160;*/</code>), <a href="/wiki/C%2B%2B" title="C++">C++</a> (начинающиеся с <code>//</code> и идущие до конца строки) и <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%BD%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BE%D0%BB%D0%BE%D1%87%D0%BA%D0%B0_UNIX" class="mw-redirect" title="Командная оболочка UNIX">оболочки UNIX</a> (с <code>#</code> до конца строки).
</p>
<h3><span id=".D0.A2.D0.B8.D0.BF.D1.8B_.D0.B4.D0.B0.D0.BD.D0.BD.D1.8B.D1.85"></span><span class="mw-headline" id="Типы_данных">Типы данных</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=10" class="mw-editsection-visualeditor" title="Редактировать раздел «Типы данных»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=10" title="Редактировать раздел «Типы данных»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>PHP является языком программирования с <a href="/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Динамическая типизация">динамической типизацией</a>, не требующим указания типа при объявлении переменных, равно как и самого объявления переменных. Преобразования между скалярными типами зачастую осуществляются неявно без дополнительных усилий (впрочем, PHP предоставляет широкие возможности и для явного преобразования типов).
</p><p>К скалярным типам данных относятся:
</p>
<ul><li><a href="/wiki/%D0%A6%D0%B5%D0%BB%D1%8B%D0%B9_%D1%82%D0%B8%D0%BF" class="mw-redirect" title="Целый тип">целочисленный тип</a> (integer)</li>
<li><a href="/wiki/%D0%A7%D0%B8%D1%81%D0%BB%D0%B0_%D1%81_%D0%BF%D0%BB%D0%B0%D0%B2%D0%B0%D1%8E%D1%89%D0%B5%D0%B9_%D0%B7%D0%B0%D0%BF%D1%8F%D1%82%D0%BE%D0%B9" class="mw-redirect" title="Числа с плавающей запятой">число с плавающей точкой</a> (float, double)</li>
<li><a href="/wiki/%D0%9B%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D1%82%D0%B8%D0%BF" title="Логический тип">логический тип</a> (boolean)</li>
<li><a href="/wiki/%D0%A1%D1%82%D1%80%D0%BE%D0%BA%D0%BE%D0%B2%D1%8B%D0%B9_%D1%82%D0%B8%D0%BF" title="Строковый тип">строковый тип</a> (string)</li></ul>
<p>К нескалярным типам относятся:
</p>
<ul><li><a href="/wiki/%D0%98%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B0%D1%81%D1%81%D0%B8%D0%B2" class="mw-redirect" title="Индексный массив">массив</a> (array)</li>
<li><a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Объект (программирование)">объект</a> (object)</li>
<li>внешний ресурс (resource)</li>
<li>неопределенное значение (null)</li></ul>
<p>К псевдотипам<sup id="cite_ref-38" class="reference"><a href="#cite_note-38">&#91;38&#93;</a></sup> относятся:
</p>
<ul><li><a href="/w/index.php?title=Mixed&amp;action=edit&amp;redlink=1" class="new" title="Mixed (страница отсутствует)">mixed</a> любой тип</li>
<li><a href="/w/index.php?title=Number&amp;action=edit&amp;redlink=1" class="new" title="Number (страница отсутствует)">number</a> число (integer либо float)</li>
<li><a href="/wiki/Callback_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Callback (программирование)">callback</a> (<a href="/wiki/%D0%97%D0%B0%D0%BC%D1%8B%D0%BA%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Замыкание (программирование)">анонимная функция</a>, string или массив)<sup id="cite_ref-:0_39-0" class="reference"><a href="#cite_note-:0-39">&#91;39&#93;</a></sup></li>
<li><a href="/wiki/Void" title="Void">void</a> отсутствие параметров</li></ul>
<p>Диапазон целых чисел (integer) в PHP зависит от <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%BF%D0%BB%D0%B0%D1%82%D1%84%D0%BE%D1%80%D0%BC%D0%B0" title="Компьютерная платформа">платформы</a> (обычно, это диапазон 32-битных знаковых целых чисел, то есть, от −2 147 483 648 до 2 147 483 647). Числа можно задавать в десятичной, <a href="/wiki/%D0%92%D0%BE%D1%81%D1%8C%D0%BC%D0%B5%D1%80%D0%B8%D1%87%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%81%D1%87%D0%B8%D1%81%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F" title="Восьмеричная система счисления">восьмеричной</a> и <a href="/wiki/%D0%A8%D0%B5%D1%81%D1%82%D0%BD%D0%B0%D0%B4%D1%86%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D1%87%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%81%D1%87%D0%B8%D1%81%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F" title="Шестнадцатеричная система счисления">шестнадцатеричной</a> системах счисления. Диапазон вещественных чисел (double) также зависит от платформы (для 32-битной архитектуры диапазон позволяет оперировать числами от ±1.7×10<sup>−308</sup> до ±1.7×10<sup>+308</sup>).
</p><p>PHP предоставляет разработчикам <a href="/wiki/%D0%9B%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D1%82%D0%B8%D0%BF" title="Логический тип">логический тип</a> (boolean), способный принимать только два значения <code>TRUE</code> («истина») и <code>FALSE</code> («ложь»). При преобразовании в логический тип число 0, пустая строка, ноль в строке «0», <code>NULL</code> и пустой массив считаются равными <code>FALSE</code>. Все остальные значения автоматически преобразуются в <code>TRUE</code>.
</p><p>Специальный тип null предназначен для переменных без определённого значения. Единственным значением данного типа является константа <code>NULL</code>. Тип null принимают неинициализированные переменные, переменные инициализированные константой <code>NULL</code>, а также переменные, удалённые при помощи конструкции <code>unset()</code>.
</p><p>Ссылки на внешние ресурсы имеют тип «ресурс» (resource). Переменные данного типа, как правило, представляют собой <a href="/wiki/%D0%94%D0%B5%D1%81%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D1%80_(%D1%8F%D0%B7%D1%8B%D0%BA%D0%B8_%D1%80%D0%B0%D0%B7%D0%BC%D0%B5%D1%82%D0%BA%D0%B8)" class="mw-redirect" title="Дескриптор (языки разметки)">дескриптор</a>, позволяющий управлять внешними объектами, такими как файлы, динамические изображения, результирующие таблицы базы данных и&#160;т.&#160;п.
</p><p><a href="/wiki/%D0%98%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B0%D1%81%D1%81%D0%B8%D0%B2" class="mw-redirect" title="Индексный массив">Массивы</a> (array) поддерживают числовые и строковые ключи и являются <a href="/wiki/%D0%98%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B0%D1%81%D1%81%D0%B8%D0%B2#Специфические_типы_массивов" class="mw-redirect" title="Индексный массив">гетерогенными</a>. Массивы могут содержать значения любых типов, включая другие массивы. Порядок элементов и их ключей сохраняется. Не совсем корректно называть php-массивы массивами, на самом деле это, скорее всего, упорядоченный <a href="/wiki/%D0%90%D1%81%D1%81%D0%BE%D1%86%D0%B8%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B0%D1%81%D1%81%D0%B8%D0%B2#PHP" title="Ассоциативный массив">хеш</a>. Возможно неожиданное поведение при использовании цикла <code>for</code> со счётчиком вместо <code>foreach</code>. Так, например, при сортировке массива с численными индексами функциями из стандартной библиотеки, сортируются и ключи тоже.
</p><p>Указатель на функцию в PHP может быть представлен замыканием или псевдотипом <a href="/wiki/Callback_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Callback (программирование)">callback</a>. Замыкание доступно с версии 5.3 и в коде выглядит как простое определение функции, в которую можно явно пробросить значения из контекста, например:
</p>
<div class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr"><pre><span></span> <span class="k">function</span><span class="p">(</span><span class="nv">$args</span><span class="p">,</span> <span class="nv">$argsN</span><span class="p">)</span> <span class="k">use</span> <span class="p">(</span><span class="nv">$ctxVar</span><span class="p">,</span> <span class="nv">$ctxVar1</span><span class="p">)</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
</pre></div>
<p>callback тип может быть представлен:
</p>
<ul><li>строкой (интерпретируется как название функции);</li>
<li>массивом где нулевой и первый элемент&#160;— строки (интерпретируется как название статической функции класса);</li>
<li>массивом где нулевой элемент&#160;— объект, а первый&#160;— строка (интерпретируется как метод у объекта).</li></ul>
<p>Для проверки является ли значение вызываемым следует использовать <code>is_callable($var)</code><sup id="cite_ref-:0_39-1" class="reference"><a href="#cite_note-:0-39">&#91;39&#93;</a></sup>
</p>
<h3><span id=".D0.9E.D0.B1.D1.80.D0.B0.D1.89.D0.B5.D0.BD.D0.B8.D0.B5_.D0.BA_.D0.BF.D0.B5.D1.80.D0.B5.D0.BC.D0.B5.D0.BD.D0.BD.D1.8B.D0.BC_.D0.B8_.D1.84.D1.83.D0.BD.D0.BA.D1.86.D0.B8.D1.8F.D0.BC"></span><span class="mw-headline" id="Обращение_к_переменным_и_функциям">Обращение к переменным и функциям</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=11" class="mw-editsection-visualeditor" title="Редактировать раздел «Обращение к переменным и функциям»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=11" title="Редактировать раздел «Обращение к переменным и функциям»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Обращение к переменным осуществляется с помощью символа <code>$</code>, за которым следует имя переменной. Данная конструкция может быть применена также для создания динамических переменных и функций.<sup id="cite_ref-40" class="reference"><a href="#cite_note-40">&#91;40&#93;</a></sup> Например:
</p>
<div class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr"><pre><span></span><span class="nv">$a</span> <span class="o">=</span> <span class="s1">&#39;I am a&#39;</span><span class="p">;</span> <span class="c1">// Запись значения в переменную $a</span>
<span class="k">echo</span> <span class="nv">$a</span><span class="p">;</span> <span class="c1">// Вывод переменной $а</span>

<span class="nv">$b</span> <span class="o">=</span> <span class="s1">&#39;a&#39;</span><span class="p">;</span>
<span class="k">echo</span> <span class="nv">$$b</span><span class="p">;</span> <span class="c1">// Вывод переменной $а (дополнительный $ перед переменной $b)</span>

<span class="k">echo</span> <span class="err">$</span><span class="p">{</span><span class="s1">&#39;a&#39;</span><span class="p">};</span> <span class="c1">// Вывод переменной $a</span>

<span class="nx">function_name</span><span class="p">();</span> <span class="c1">// Вызов функции function_name</span>
<span class="nv">$c</span> <span class="o">=</span> <span class="s1">&#39;function_name&#39;</span><span class="p">;</span>
<span class="nv">$c</span><span class="p">();</span> <span class="c1">//Вызов функции function_name</span>

<span class="nv">$d</span> <span class="o">=</span> <span class="s1">&#39;Class_name&#39;</span><span class="p">;</span>
<span class="nv">$obj</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Class_name</span><span class="p">;</span> <span class="c1">// Создание объекта класса Class_name</span>
<span class="nv">$obj</span> <span class="o">=</span> <span class="k">new</span> <span class="nv">$d</span><span class="p">();</span> <span class="c1">// Создание объекта класса Class_name</span>
<span class="nv">$obj</span><span class="o">-&gt;</span><span class="na">b</span><span class="p">;</span> <span class="c1">// Обращение к свойству b объекта</span>
<span class="nv">$obj</span><span class="o">-&gt;</span><span class="na">c</span><span class="p">();</span> <span class="c1">// Вызов метода c() объекта</span>

<span class="nv">$obj</span><span class="o">-&gt;</span><span class="nv">$b</span><span class="p">;</span> <span class="c1">// Обращение к свойству a объекта, так как $b = &#39;a&#39;</span>
<span class="nv">$obj</span><span class="o">-&gt;</span><span class="nv">$c</span><span class="p">();</span> <span class="c1">// Вызов метода function_name() объекта, так как $c = &#39;function_name&#39;</span>
</pre></div>
<p>В PHP <code>echo</code> и <code>print</code> не являются функциями<sup id="cite_ref-41" class="reference"><a href="#cite_note-41">&#91;41&#93;</a></sup> (хотя <code>print</code> имеет возвращаемое значение), а являются синтаксическими единицами. При их использовании можно опустить скобки.
</p>
<h3><span id=".D0.A1.D1.83.D0.BF.D0.B5.D1.80.D0.B3.D0.BB.D0.BE.D0.B1.D0.B0.D0.BB.D1.8C.D0.BD.D1.8B.D0.B5_.D0.BC.D0.B0.D1.81.D1.81.D0.B8.D0.B2.D1.8B"></span><span class="mw-headline" id="Суперглобальные_массивы">Суперглобальные массивы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=12" class="mw-editsection-visualeditor" title="Редактировать раздел «Суперглобальные массивы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=12" title="Редактировать раздел «Суперглобальные массивы»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Суперглобальными массивами (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">Superglobal arrays</span>) в PHP называются предопределённые массивы, имеющие глобальную область видимости без использования директивы <code>global</code>. Большая часть этих массивов содержит входные данные запроса пользователя (параметры <a href="/wiki/HTTP#GET" title="HTTP">GET</a>-запроса, поля форм при посылке методом <a href="/wiki/HTTP#POST" title="HTTP">POST</a>, <a href="/wiki/HTTP_cookie" class="mw-redirect" title="HTTP cookie">куки</a> и&#160;т.&#160;п.).
</p><p>Все суперглобальные массивы, кроме <code>$GLOBALS</code> и <code>$_REQUEST</code>, имеют устаревшие аналоги с длинными именами, которые доступны вплоть до версии 5.3. х (начиная с 5.4.0 были удалены). Таким образом, обращения <code>$_GET['year']</code> и <code>$HTTP_GET_VARS['year']</code> идентичны (за исключением области видимости: массивы с «длинными» именами не являются суперглобальными).
</p>
<dl><dt><code>$GLOBALS</code></dt>
<dd>Массив всех глобальных переменных (в том числе и пользовательских).</dd></dl>
<dl><dt><code>$_SERVER</code> (аналог для устаревшего&#160;— <code>$HTTP_SERVER_VARS</code>)</dt>
<dd>Содержит переменные окружения, которые операционная система передаёт серверу.</dd></dl>
<dl><dt><code>$_ENV</code> (уст. <code>$HTTP_ENV_VARS</code>)</dt>
<dd>Текущие <a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5_%D1%81%D1%80%D0%B5%D0%B4%D1%8B" class="mw-redirect" title="Переменные среды">переменные среды</a> (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">Environment variables</span>). Их набор специфичен для платформы, на которой выполняется скрипт.</dd></dl>
<dl><dt><code>$_GET</code> (уст. <code>$HTTP_GET_VARS</code>)</dt>
<dd>Содержит параметры GET-запроса, переданные в URI после знака вопроса «<code>?</code>».</dd></dl>
<dl><dt><code>$_POST</code> (уст. <code>$HTTP_POST_VARS</code>)</dt>
<dd>Ассоциативный массив значений полей HTML-формы при отправке методом POST. Индексы элементов соответствуют значению свойства <code>name</code> объектов (кнопки, формы, радио-кнопки, флажки и&#160;т.&#160;д.) HTML-формы.</dd></dl>
<dl><dt><code>$_FILES</code> (уст. <code>$HTTP_POST_FILES</code>)</dt>
<dd>Ассоциативный массив со сведениями об отправленных методом POST файлах. Каждый элемент имеет индекс, идентичный значению атрибута «name» в форме, и, в свою очередь, также является массивом со следующими элементами:
<ul><li><code>['name']</code>&#160;— исходное имя файла на компьютере пользователя.</li>
<li><code>['type']</code>&#160;— указанный агентом пользователя <a href="/wiki/MIME" title="MIME">MIME</a>-тип файла. PHP не проверяет его, и поэтому нет никаких гарантий, что указанный тип соответствует действительности.</li>
<li><code>['size']</code>&#160;— размер файла в байтах.</li>
<li><code>['tmp_name']</code>&#160;— полный путь к файлу во временной папке. Файл необходимо переместить оттуда функцией <code>move_uploaded_file</code>. Загруженные файлы из временной папки PHP удаляет самостоятельно.</li>
<li><code>['error']</code>&#160;— код ошибки. Если файл удачно загрузился, то этот элемент будет равен 0 (<code>UPLOAD_ERR_OK</code>).</li></ul></dd></dl>
<dl><dt><code>$_COOKIE</code> (уст. <code>$HTTP_COOKIE_VARS</code>)</dt>
<dd>Ассоциативный массив с переданными агентом пользователя значениями <a href="/wiki/HTTP_cookie" class="mw-redirect" title="HTTP cookie">куки</a>.</dd></dl>
<dl><dt><code>$_REQUEST</code></dt>
<dd>Содержит элементы из массивов <code>$_GET</code>, <code>$_POST</code>, <code>$_COOKIE</code>. С версии PHP 4.1 включает <code>$_FILES</code>.</dd></dl>
<dl><dt><code>$_SESSION</code> (уст. <code>$HTTP_SESSION_VARS</code>)</dt>
<dd>Содержит данные сессии.</dd></dl>
<h3><span id=".D0.9E.D0.B1.D1.8A.D0.B5.D0.BA.D1.82.D0.BD.D0.BE-.D0.BE.D1.80.D0.B8.D0.B5.D0.BD.D1.82.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.BD.D0.BE.D0.B5_.D0.BF.D1.80.D0.BE.D0.B3.D1.80.D0.B0.D0.BC.D0.BC.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Объектно-ориентированное_программирование">Объектно-ориентированное программирование</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=13" class="mw-editsection-visualeditor" title="Редактировать раздел «Объектно-ориентированное программирование»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=13" title="Редактировать раздел «Объектно-ориентированное программирование»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Ключевое слово <code>class</code> было зарезервировано ещё в третьей версии языка.
В четвёртой версии стало возможно создавать классы и объекты на их основе. Однако принципы ООП поддерживались лишь частично, так например, все члены (переменные и методы) были открыты. К тому же создание объектов было дорогой операцией и работали они медленно.
</p><p>Начиная с пятой версии PHP обладает полной поддержкой <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">ООП</a>. Работа с классами была оптимизирована и теперь такой код работает достаточно быстро.
</p><p><a href="/wiki/%D0%9A%D0%BB%D0%B0%D1%81%D1%81_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Класс (программирование)">Класс</a> в PHP объявляется с помощью ключевого слова <code>class</code>. Методы и свойства класса могут быть общедоступными (<code>public</code>, по умолчанию), защищёнными (<code>protected</code>) и скрытыми (<code>private</code>). PHP поддерживает все три основных механизма ООП&#160;— <a href="/wiki/%D0%98%D0%BD%D0%BA%D0%B0%D0%BF%D1%81%D1%83%D0%BB%D1%8F%D1%86%D0%B8%D1%8F_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Инкапсуляция (программирование)">инкапсуляцию</a>, <a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%B8%D0%BC%D0%BE%D1%80%D1%84%D0%B8%D0%B7%D0%BC_%D0%BF%D0%BE%D0%B4%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" class="mw-redirect" title="Полиморфизм подтипов">полиморфизм подтипов</a> и <a href="/wiki/%D0%9D%D0%B0%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Наследование (программирование)">наследование</a> (родительский класс указывается с помощью ключевого слова <code>extends</code> после имени класса). Поддерживаются <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_(%D0%9E%D0%9E%D0%9F)" class="mw-redirect" title="Интерфейс (ООП)">интерфейсы</a> (ставятся в соответствие с помощью <code>implements</code>). Разрешается объявление <a href="/wiki/%D0%9B%D0%B8%D1%81%D1%82%D0%BE%D0%B2%D0%BE%D0%B9_%D0%BA%D0%BB%D0%B0%D1%81%D1%81" title="Листовой класс">финальных</a>, <a href="/wiki/%D0%90%D0%B1%D1%81%D1%82%D1%80%D0%B0%D0%BA%D1%82%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B5%D1%82%D0%BE%D0%B4" title="Абстрактный метод">абстрактных методов</a> и классов. <a href="/wiki/%D0%9D%D0%B0%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)#Множественное_наследование" title="Наследование (программирование)">Множественное наследование</a> классов не поддерживается, однако класс может реализовывать несколько интерфейсов. Для обращения к методам родительского класса используется ключевое слово <code>parent</code>.
</p><p>Начиная с версии 5.4.0 множественное наследование может быть реализовано с помощью механизма <i>особенностей</i> (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">trait</span>). Особенности похожи на примеси (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">mixins</span>), за исключением того что для них нельзя напрямую создать экземпляр. Повторное использование кода заключено в использовании кода особенности в нескольких классах. Допускается использовать в одном классе несколько особенностей. Механизм особенностей имеет средства разрешения конфликтов имён. При запуске программы код особенности будет «вкомпилирован» в код содержащего его класса.
</p><p>Классы в PHP имеют ряд «магических» методов (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">magic methods</span>), начинающихся с двух символов подчёркивания&#160;— <a href="/wiki/%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80_(%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Конструктор (объектно-ориентированное программирование)">конструктор</a> (<code>__construct()</code>, в версиях до 5.0 конструктором служил метод, одноимённый с классом) и <a href="/wiki/%D0%94%D0%B5%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80" title="Деструктор">деструктор</a> (<code>__destruct()</code>), а также методы чтения (<code>__get()</code>) и записи (<code>__set()</code>), свёртывания (<code>__sleep()</code>) и развёртывания (<code>__wakeup()</code>), клонирования (<code>__clone()</code>) и др. Эти методы являются достаточно гибким инструментом: переопределяя их, можно добиться существенного изменения поведения объекта.
</p><p>Все функции-члены реализованы виртуальными и потому все они являются методами.
</p><p>Экземпляры класса создаются с помощью ключевого слова <code>new</code>, обращение к свойствам и методам объекта производится с использованием оператора <b><code>-&gt;</code></b>. Для доступа к членам класса из его методов используется переменная <code>$this</code>.
</p>
<div class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr"><pre><span></span><span class="k">class</span> <span class="nc">C1</span> <span class="k">extends</span> <span class="nx">C2</span> <span class="k">implements</span> <span class="nx">I1</span><span class="p">,</span> <span class="nx">I2</span>
<span class="p">{</span>
  <span class="k">private</span> <span class="nv">$a</span><span class="p">;</span>
  <span class="k">protected</span> <span class="nv">$b</span><span class="p">;</span>

  <span class="k">function</span> <span class="fm">__construct</span><span class="p">(</span><span class="nv">$a</span><span class="p">,</span> <span class="nv">$b</span><span class="p">)</span>
  <span class="p">{</span>
    <span class="k">parent</span><span class="o">::</span><span class="na">__construct</span><span class="p">(</span><span class="nv">$a</span><span class="p">,</span> <span class="nv">$b</span><span class="p">);</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">a</span> <span class="o">=</span> <span class="nv">$a</span><span class="p">;</span>
    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">b</span> <span class="o">=</span> <span class="nv">$b</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="k">public</span> <span class="k">function</span> <span class="nf">plus</span><span class="p">()</span>
  <span class="p">{</span>
    <span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">a</span> <span class="o">+</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">b</span><span class="p">;</span>
  <span class="p">}</span>
<span class="cm">/* ............... */</span>
<span class="p">}</span>

<span class="nv">$d</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">C1</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">);</span>
<span class="k">echo</span> <span class="nv">$d</span><span class="o">-&gt;</span><span class="na">plus</span><span class="p">();</span> <span class="c1">// 3</span>
</pre></div>
<p>Начиная с пятой версии PHP объекты передаются по ссылке:
</p>
<div class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr"><pre><span></span><span class="k">class</span> <span class="nc">a</span> 
<span class="p">{</span>
  <span class="k">public</span> <span class="nv">$color</span> <span class="o">=</span> <span class="s1">&#39;red&#39;</span><span class="p">;</span>
<span class="p">}</span>

<span class="nv">$a</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">a</span><span class="p">();</span>
<span class="k">echo</span> <span class="nv">$a</span> <span class="o">-&gt;</span> <span class="na">color</span><span class="p">;</span> <span class="c1">// red</span>
<span class="nv">$b</span> <span class="o">=</span> <span class="nv">$a</span><span class="p">;</span>
<span class="nv">$b</span> <span class="o">-&gt;</span> <span class="na">color</span> <span class="o">=</span> <span class="s1">&#39;blue&#39;</span><span class="p">;</span>
<span class="k">echo</span> <span class="nv">$a</span> <span class="o">-&gt;</span> <span class="na">color</span><span class="p">;</span> <span class="c1">// blue</span>
</pre></div>
<p><span id="Nekudotayim"></span>
<b>«Paamayim Nekudotayim»</b> (<a href="/wiki/%D0%98%D0%B2%D1%80%D0%B8%D1%82" title="Иврит">иврит</a>: פעמיים נקודתיים) или просто «двойное двоеточие». Используя эту <a href="/wiki/%D0%9B%D0%B5%D0%BA%D1%81%D0%B5%D0%BC%D0%B0_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" class="mw-redirect" title="Лексема (информатика)">лексему</a>, программист может обращаться к константам, статическим или перегруженным свойствам или методам класса.
При обращении к этим элементам извне класса программист должен использовать имя этого класса.
«Paamayim Nekudotayim» на первый взгляд может показаться странным словосочетанием для обозначения двойного двоеточия. Однако во время создания Zend Engine версии 0.5 (который входил в PHP3), Andi и Zeev выбрали<sup id="cite_ref-42" class="reference"><a href="#cite_note-42">&#91;42&#93;</a></sup> именно это обозначение. «Paamayim Nekudotayim» действительно значит «двойное двоеточие» (дословно: «два раза двоеточие») на иврите. Это обозначение не менялось ни разу в течение всего времени разработки PHP<sup id="cite_ref-43" class="reference"><a href="#cite_note-43">&#91;43&#93;</a></sup>.
</p>
<div class="mw-highlight mw-highlight-lang-php mw-content-ltr" dir="ltr"><pre><span></span><span class="cp">&lt;?php</span>
<span class="k">class</span> <span class="nc">MyClass</span> <span class="p">{</span>
  <span class="k">const</span> <span class="no">CONST_VALUE</span> <span class="o">=</span> <span class="s1">&#39;Значение константы&#39;</span><span class="p">;</span>
<span class="p">}</span>
<span class="c1">// Использование&#160;:: вне объявления класса</span>
<span class="k">echo</span> <span class="nx">MyClass</span><span class="o">::</span><span class="na">CONST_VALUE</span><span class="p">;</span>
<span class="cp">?&gt;</span><span class="x"></span>
</pre></div>
<h2><span id=".D0.9E.D1.81.D0.BE.D0.B1.D0.B5.D0.BD.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D0.B8.D0.BD.D1.82.D0.B5.D1.80.D0.BF.D1.80.D0.B5.D1.82.D0.B0.D1.82.D0.BE.D1.80.D0.B0"></span><span class="mw-headline" id="Особенности_интерпретатора">Особенности интерпретатора</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=14" class="mw-editsection-visualeditor" title="Редактировать раздел «Особенности интерпретатора»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=14" title="Редактировать раздел «Особенности интерпретатора»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>PHP-скрипты обычно обрабатываются <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BF%D1%80%D0%B5%D1%82%D0%B0%D1%82%D0%BE%D1%80" title="Интерпретатор">интерпретатором</a> в порядке, обеспечивающем <a href="/wiki/%D0%9A%D1%80%D0%BE%D1%81%D1%81%D0%BF%D0%BB%D0%B0%D1%82%D1%84%D0%BE%D1%80%D0%BC%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Кроссплатформенность">кроссплатформенность</a> разработанного приложения:
</p>
<ol><li><a href="/wiki/%D0%9B%D0%B5%D0%BA%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7" title="Лексический анализ">лексический анализ</a> <a href="/wiki/%D0%98%D1%81%D1%85%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" title="Исходный код">исходного кода</a> и генерация <a href="/wiki/%D0%9B%D0%B5%D0%BA%D1%81%D0%B5%D0%BC%D0%B0_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" class="mw-redirect" title="Лексема (информатика)">лексем</a>,</li>
<li><a href="/wiki/%D0%A1%D0%B8%D0%BD%D1%82%D0%B0%D0%BA%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BD%D0%B0%D0%BB%D0%B8%D0%B7" title="Синтаксический анализ">синтаксический анализ</a> полученных лексем,</li>
<li>генерация <a href="/wiki/%D0%91%D0%B0%D0%B9%D1%82-%D0%BA%D0%BE%D0%B4" title="Байт-код">байт-кода</a>,</li>
<li>выполнение байт-кода интерпретатором (без создания <a href="/w/index.php?title=%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D0%B5%D0%BC%D1%8B%D0%B9_%D1%84%D0%B0%D0%B9%D0%BB&amp;action=edit&amp;redlink=1" class="new" title="Исполняемый файл (страница отсутствует)">исполняемого файла</a>).</li></ol>
<p>Для увеличения быстродействия приложений возможно использование специального <a href="/wiki/%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Программное обеспечение">программного обеспечения</a>, так называемых <a href="/wiki/%D0%90%D0%BA%D1%81%D0%B5%D0%BB%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80_PHP" title="Акселератор PHP">акселераторов</a>. Принцип их работы заключается в <a href="/wiki/%D0%9A%D1%8D%D1%88%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" class="mw-redirect" title="Кэширование">кэшировании</a> однажды сгенерированного байт-кода в <a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C" title="Оперативная память">памяти</a> и/или на <a href="/wiki/%D0%96%D1%91%D1%81%D1%82%D0%BA%D0%B8%D0%B9_%D0%B4%D0%B8%D1%81%D0%BA" title="Жёсткий диск">диске</a>, таким образом, из процесса работы приложения исключаются этапы 1—3, что в общем случае ведёт к значительному ускорению работы.
</p><p>Важной особенностью является то, что разработчику нет необходимости заботиться о распределении и <a href="/wiki/%D0%A1%D0%B1%D0%BE%D1%80%D0%BA%D0%B0_%D0%BC%D1%83%D1%81%D0%BE%D1%80%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Сборка мусора (программирование)">освобождении</a> памяти. Ядро PHP реализует средства для автоматического управления памятью; вся выделенная память возвращается системе после завершения работы скрипта<sup id="cite_ref-44" class="reference"><a href="#cite_note-44">&#91;44&#93;</a></sup>.
</p>
<h3><span id=".D0.A0.D0.B0.D1.81.D1.88.D0.B8.D1.80.D0.B5.D0.BD.D0.B8.D1.8F_2"></span><span class="mw-headline" id="Расширения_2">Расширения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=15" class="mw-editsection-visualeditor" title="Редактировать раздел «Расширения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=15" title="Редактировать раздел «Расширения»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Интерпретатор состоит из <a href="/wiki/Zend_Engine" title="Zend Engine">ядра</a> и подключаемых <a href="/wiki/%D0%9C%D0%BE%D0%B4%D1%83%D0%BB%D1%8C_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Модуль (программирование)">модулей</a>, <i>«расширений»</i>, представляющих собой динамические <a href="/wiki/%D0%91%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE%D1%82%D0%B5%D0%BA%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Библиотека (программирование)">библиотеки</a>. Расширения позволяют дополнить базовые возможности языка, предоставляя возможности для работы с <a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F_%D0%B1%D0%B0%D0%B7%D0%B0%D0%BC%D0%B8_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="Система управления базами данных">базами данных</a>, <a href="/wiki/%D0%A1%D0%BE%D0%BA%D0%B5%D1%82_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D1%8B%D0%B9_%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81)" title="Сокет (программный интерфейс)">сокетами</a>, динамической <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D0%BA%D0%B0" title="Компьютерная графика">графикой</a>, <a href="/wiki/%D0%9A%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F" title="Криптография">криптографическими</a> библиотеками, документами формата <a href="/wiki/PDF" class="mw-redirect" title="PDF">PDF</a> и тому подобным. Любой желающий может разработать своё собственное расширение и подключить его. Существует огромное количество расширений, как стандартных, так и созданных сторонними компаниями и энтузиастами, однако в стандартную поставку входит лишь несколько десятков хорошо зарекомендовавших себя. Множество расширений доступно в репозитории <a href="/wiki/PECL" title="PECL">PECL</a>.
</p>
<h3><span id=".D0.9F.D0.B0.D1.80.D0.B0.D0.BC.D0.B5.D1.82.D1.80.D1.8B_.D0.BD.D0.B0.D1.81.D1.82.D1.80.D0.BE.D0.B9.D0.BA.D0.B8"></span><span class="mw-headline" id="Параметры_настройки">Параметры настройки</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=16" class="mw-editsection-visualeditor" title="Редактировать раздел «Параметры настройки»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=16" title="Редактировать раздел «Параметры настройки»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Интерпретатор PHP имеет специальный <a href="/wiki/%D0%9A%D0%BE%D0%BD%D1%84%D0%B8%D0%B3%D1%83%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D1%84%D0%B0%D0%B9%D0%BB" class="mw-redirect" title="Конфигурационный файл">конфигурационный файл</a>&#160;— <code>php.ini</code>, содержащий множество настроек, изменение которых влияет на поведение интерпретатора<sup id="cite_ref-45" class="reference"><a href="#cite_note-45">&#91;45&#93;</a></sup>. Имеется возможность отключить использование ряда функций, изменить ограничения на используемую скриптом оперативную память, время выполнения, объём загружаемых файлов, настроить журналирование ошибок, работу с сессиями и почтовыми сервисами, подключить дополнительные расширения, а также многое другое. Возможно дробление большого конфигурационного файла на части. Например, широко распространена практика вынесения настроек расширений в отдельные файлы. Параметры интерпретатора могут быть переопределены в файлах конфигурации <a href="/wiki/HTTP-%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80" class="mw-redirect" title="HTTP-сервер">HTTP-сервера</a> (например, <code>.htaccess</code> в <a href="/wiki/Apache_HTTP_Server" title="Apache HTTP Server">Apache</a>) или в самом скрипте во время выполнения при помощи команды <code>ini_set</code><sup id="cite_ref-46" class="reference"><a href="#cite_note-46">&#91;46&#93;</a></sup>.
</p>
<h3><span id=".D0.A0.D0.B5.D0.B6.D0.B8.D0.BC.D1.8B_.D0.B7.D0.B0.D0.BF.D1.83.D1.81.D0.BA.D0.B0_.D0.B8.D0.BD.D1.82.D0.B5.D1.80.D0.BF.D1.80.D0.B5.D1.82.D0.B0.D1.82.D0.BE.D1.80.D0.B0_.28SAPI.29"></span><span class="mw-headline" id="Режимы_запуска_интерпретатора_(SAPI)">Режимы запуска интерпретатора (SAPI)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=17" class="mw-editsection-visualeditor" title="Редактировать раздел «Режимы запуска интерпретатора (SAPI)»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=17" title="Редактировать раздел «Режимы запуска интерпретатора (SAPI)»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>SAPI&#160;— это внешний <a href="/wiki/%D0%A3%D1%80%D0%BE%D0%B2%D0%B5%D0%BD%D1%8C_%D0%B0%D0%B1%D1%81%D1%82%D1%80%D0%B0%D0%BA%D1%86%D0%B8%D0%B8_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Уровень абстракции (программирование)">уровень абстракции</a>, предназначенный для встраивания интерпретатора в другие приложения и отвечает за его работу (запуск, остановка, передача скриптов на исполнение, доступ к внешним данным). Существует несколько основных SAPI, определяющих способы запуска и использования PHP:
</p>
<ol><li>В качестве модуля к <a href="/wiki/%D0%92%D0%B5%D0%B1-%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80" title="Веб-сервер">веб-серверу</a> (например, для <a href="/wiki/Apache_HTTP_Server" title="Apache HTTP Server">Apache</a> модуль <code>mod_php</code>). В этом случае интерпретатор PHP выполняется в <a href="/w/index.php?title=%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%BA%D1%80%D1%83%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5&amp;action=edit&amp;redlink=1" class="new" title="Операционное окружение (страница отсутствует)">окружении</a> <a href="/wiki/%D0%9F%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Процесс (информатика)">процесса</a> веб-сервера. Веб-сервер управляет количеством запущенных процессов PHP и сообщает им, какие скрипты требуется исполнить.</li>
<li><a href="/wiki/CGI" title="CGI">CGI</a> SAPI. Использование CGI подразумевает запуск нового процесса для обработки каждого запроса. Для исполнения PHP-скрипта веб-сервер запускает <code>./php-cgi /path/to/script.php</code>. Сам принцип такого использования подразумевает, что интерпретатор PHP исполняет только один скрипт, после чего заканчивает свою работу. Затраты на запуск процесса интерпретатора и его инициализацию очень часто сопоставимы или даже превышают затраты на исполнение PHP ю-скрипта. Для решения этой проблемы в CGI SAPI был введён режим FastCGI. В этом режиме PHP-интерпретатор запускается как независимый сервер, обрабатывающий входящие запросы на исполнение PHP-скриптов по протоколу FastCGI, что позволяет ему работать с любым веб-сервером, поддерживающим этот протокол.</li>
<li>FPM SAPI, известный как php-fpm&#160;— это другая реализация протокола FastCGI. Создан изначально Андреем Нигматулиным как отдельный патч для использования в социальной сети Badoo. Данная реализация решала ряд проблем, которые мешали использованию CGI/FastCGI SAPI. В частности, появилась возможность перезапуска пула интерпретаторов PHP без потери запросов, запуск нескольких пулов под разными пользователями, аварийный перезапуск интерпретаторов в случае проблем с ними и ещё несколько приятных дополнений. В дальнейшем над патчем работали несколько человек, был добавлен режим динамического управления числом запущенных процессов PHP (по принципу управления числом процессов в веб-сервере Apache), и начиная с версии PHP 5.3.3 php-fpm был включён в PHP как отдельное SAPI.</li>
<li>В качестве <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BA%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%BD%D0%BE%D0%B9_%D1%81%D1%82%D1%80%D0%BE%D0%BA%D0%B8" title="Интерфейс командной строки">скрипта командной строки</a> (CLI SAPI), являющегося <a href="/w/index.php?title=%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D0%B5%D0%BC%D1%8B%D0%B9_%D1%84%D0%B0%D0%B9%D0%BB&amp;action=edit&amp;redlink=1" class="new" title="Исполняемый файл (страница отсутствует)">исполняемым файлом</a>, который вызывается пользователем из <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BA%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%BD%D0%BE%D0%B9_%D1%81%D1%82%D1%80%D0%BE%D0%BA%D0%B8" title="Интерфейс командной строки">командной строки</a>; скрипт выполняется в окружении вызвавшего пользователя. В этом случае возможно использование PHP для создания клиентских <a href="/wiki/GUI" class="mw-redirect" title="GUI">GUI</a>-приложений<sup id="cite_ref-47" class="reference"><a href="#cite_note-47">&#91;47&#93;</a></sup> и решения административных задач в <a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Операционная система">операционных системах</a> <a href="/wiki/UNIX" class="mw-redirect" title="UNIX">UNIX</a>, <a href="/wiki/Linux" title="Linux">Linux</a>, <a href="/wiki/Microsoft_Windows" class="mw-redirect" title="Microsoft Windows">Microsoft Windows</a>, <a href="/wiki/Mac_OS_X" class="mw-redirect" title="Mac OS X">Mac OS X</a> и <a href="/wiki/AmigaOS" title="AmigaOS">AmigaOS</a>. Однако в таком качестве он не получил распространения, отдавая пальму первенства <a href="/wiki/Perl" title="Perl">Perl</a>, <a href="/wiki/Python" title="Python">Python</a> и <a href="/wiki/VBScript" title="VBScript">VBScript</a>.</li></ol>
<p>Начиная с версии PHP 5.4.0 в CLI SAPI появилась возможность запуска PHP как отдельного HTTP-сервера. Однако этот режим предназначен исключительно для разработки, так как запускает только один процесс интерпретатора и выполняет все запросы исключительно последовательно.
</p>
<h3><span id=".D0.9F.D0.B0.D1.81.D1.85.D0.B0.D0.BB.D1.8C.D0.BD.D1.8B.D0.B5_.D1.8F.D0.B9.D1.86.D0.B0"></span><span class="mw-headline" id="Пасхальные_яйца">Пасхальные яйца</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=18" class="mw-editsection-visualeditor" title="Редактировать раздел «Пасхальные яйца»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=18" title="Редактировать раздел «Пасхальные яйца»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>PHP имеет несколько <a href="/wiki/%D0%9F%D0%B0%D1%81%D1%85%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D1%8F%D0%B9%D1%86%D0%BE_(%D0%B2%D0%B8%D1%80%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5)" title="Пасхальное яйцо (виртуальное)">пасхальных яиц</a> (шуток). Передача специальных GET-параметров любому php-скрипту приводит к выводу различных изображений.
</p><p>Например:
</p>
<pre>любой_сценарий.php?=PHPE9568F36-D428-11d2-A769-00AA001ACF42
</pre>
<p>при вводе этого значения в адресную строку браузера можно увидеть различные изображения, в зависимости от версии интерпретатора:
</p>
<ol><li>фотография <i>Thies Arntzen</i> (версии 4.1.2, 4.2.2)</li>
<li>фотография <a href="/wiki/%D0%A2%D0%B0%D0%BA%D1%81%D0%B0" title="Такса">таксы</a> (владелец <i>Stig Bakken</i>) (версии 4.3.2, 4.3.3, 4.3.8&#160;— 4.3.10)</li>
<li>фотография чёрного <a href="/wiki/%D0%A2%D0%B5%D1%80%D1%8C%D0%B5%D1%80" class="mw-redirect" title="Терьер">терьера</a> (владелец <i>Zeev Suraski</i>) (версии 4.3.11, 4.4.0&#160;— 4.4.4, 5.1.0, 5.1.2)</li>
<li>фотография <a href="/wiki/%D0%9A%D1%80%D0%BE%D0%BB%D0%B8%D0%BA" class="mw-redirect" title="Кролик">кролика</a> (версии 4.3.1, 5.0.0, 5.0.3)</li>
<li>искажённый логотип PHP (версии 5.1.3&#160;— 5.2.13)<sup id="cite_ref-0php_eeggs_48-0" class="reference"><a href="#cite_note-0php_eeggs-48">&#91;48&#93;</a></sup></li>
<li>фотография игрушечного синего слона с надписью PHP (начиная с версии 5.3.0)<sup id="cite_ref-0php_eeggs_48-1" class="reference"><a href="#cite_note-0php_eeggs-48">&#91;48&#93;</a></sup></li></ol>
<p>Следующие два значения позволят увидеть стандартный логотип PHP и ZEND, соответственно<sup id="cite_ref-0php_eeggs_48-2" class="reference"><a href="#cite_note-0php_eeggs-48">&#91;48&#93;</a></sup>:
</p><p>любой_сценарий.php?=PHPE9568F34-D428-11d2-A769-00AA001ACF42
</p>
<pre>любой_сценарий.php?=PHPE9568F35-D428-11d2-A769-00AA001ACF42
</pre>
<p>Эти значения можно получить и непосредственно в PHP-скрипте с помощью функций <code>php_logo_guid</code> и <code>zend_logo_guid</code> для логотипа Zend.
</p><p>Также имеется специальное значение для отображения списка всех авторов PHP (4,5)<sup id="cite_ref-0php_eeggs_48-3" class="reference"><a href="#cite_note-0php_eeggs-48">&#91;48&#93;</a></sup>:
</p><p>любой_сценарий.php?=PHPB8B5F2A0-3C92-11d3-A3A9-4C7B08C10000
</p>
<h3><span id=".D0.90.D0.BB.D1.8C.D1.82.D0.B5.D1.80.D0.BD.D0.B0.D1.82.D0.B8.D0.B2.D0.BD.D1.8B.D0.B5_.D1.80.D0.B5.D0.B0.D0.BB.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D0.B8"></span><span class="mw-headline" id="Альтернативные_реализации">Альтернативные реализации</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=19" class="mw-editsection-visualeditor" title="Редактировать раздел «Альтернативные реализации»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=19" title="Редактировать раздел «Альтернативные реализации»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В силу популярности языка PHP и желания увеличить быстродействие основанных на нём <a href="/wiki/%D0%92%D0%B5%D0%B1-%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5" title="Веб-приложение">веб-приложений</a> создано несколько альтернативных <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%82%D0%BE%D1%80" title="Компилятор">компиляторов</a>, близких к PHP-языку. Так в феврале <a href="/wiki/2010_%D0%B3%D0%BE%D0%B4" title="2010 год">2010&#160;года</a> компания <a href="/wiki/Facebook" title="Facebook">Facebook</a> открыла<sup id="cite_ref-49" class="reference"><a href="#cite_note-49">&#91;49&#93;</a></sup><sup id="cite_ref-50" class="reference"><a href="#cite_note-50">&#91;50&#93;</a></sup> свой компилятор PHP&#160;— <a href="/wiki/HipHop_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" class="mw-redirect" title="HipHop (информатика)">HipHop</a> (HPHP, Hyper-PHP) генерирующий код на <a href="/wiki/C%2B%2B" title="C++">C++</a>, с последующей компиляцией в машинный код с помощью <a href="/wiki/Gcc" class="mw-redirect" title="Gcc">gcc</a>. В июле 2013 года <a href="/wiki/%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F" title="Россия">российская</a> компания <a href="/wiki/%D0%92%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B5" title="ВКонтакте">ВКонтакте</a> анонсировала похожий продукт&#160;— <a href="/wiki/KPHP" title="KPHP">KPHP</a><sup id="cite_ref-хакер_51-0" class="reference"><a href="#cite_note-хакер-51">&#91;51&#93;</a></sup>.
</p><p>В таблице представлен список существующих на сегодняшний момент альтернативных реализаций.
</p>
<table class="standard">
<caption>
</caption>
<tbody><tr>
<th>Название
</th>
<th>Версия PHP (примерно)
</th>
<th>Лицензия
</th>
<th>Результат компиляции
</th></tr>
<tr>
<td><a href="/wiki/HipHop_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" class="mw-redirect" title="HipHop (информатика)">HipHop</a>
</td>
<td>5.4
</td>
<td><a href="/wiki/PHP_License" title="PHP License">PHP License</a>
</td>
<td><a href="/wiki/C%2B%2B" title="C++">C++</a>, <a href="/wiki/%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" title="Машинный код">машинный код</a>
</td></tr>
<tr>
<td><a href="/wiki/Roadsend_PHP" title="Roadsend PHP">Roadsend PHP</a>
</td>
<td>5.3
</td>
<td><a href="/wiki/GPL" class="mw-redirect" title="GPL">GPL</a>/<a href="/wiki/LGPL" class="mw-redirect" title="LGPL">LGPL</a>
</td>
<td><a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">C</a>, <a href="/wiki/%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" title="Машинный код">машинный код</a>
</td></tr>
<tr>
<td><a href="/wiki/Phalanger" title="Phalanger">Phalanger</a>
</td>
<td>5.5
</td>
<td>Ms SS-PL<sup id="cite_ref-52" class="reference"><a href="#cite_note-52">&#91;52&#93;</a></sup> (<a href="/wiki/Shared_source" class="mw-redirect" title="Shared source">Shared source</a>)
</td>
<td><a href="/wiki/MSIL" class="mw-redirect" title="MSIL">Microsoft IL</a>
</td></tr>
<tr>
<td><a rel="nofollow" class="external text" href="http://www.caucho.com/">Quercus</a> (в составе <a href="/wiki/%D0%92%D0%B5%D0%B1-%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80" title="Веб-сервер">веб-сервера</a> <a href="/wiki/Resin" title="Resin">Resin</a>)
</td>
<td>5.2
</td>
<td><a href="/wiki/GPL" class="mw-redirect" title="GPL">GPL</a> или коммерческая
</td>
<td><a href="/wiki/JVM" class="mw-redirect" title="JVM">JVM</a>
</td></tr>
<tr>
<td><a rel="nofollow" class="external text" href="http://www.phpcompiler.org/">PHC</a>
</td>
<td>5.2
</td>
<td><a href="/wiki/BSDL" class="mw-redirect" title="BSDL">BSDL</a>
</td>
<td><a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">C</a>, <a href="/wiki/%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" title="Машинный код">машинный код</a>
</td></tr>
<tr>
<td><a rel="nofollow" class="external text" href="https://web.archive.org/web/20100505214222/http://pipp.org/">Pipp</a><sup id="cite_ref-53" class="reference"><a href="#cite_note-53">&#91;53&#93;</a></sup>
</td>
<td>5.3
</td>
<td><a href="/w/index.php?title=Artistic_License&amp;action=edit&amp;redlink=1" class="new" title="Artistic License (страница отсутствует)">Artistic License</a> и <a href="/wiki/GNU_GPL" class="mw-redirect" title="GNU GPL">GNU GPL</a>
</td>
<td><a href="/wiki/Parrot" title="Parrot">Parrot</a>
</td></tr>
<tr>
<td><a rel="nofollow" class="external text" href="http://jphp.develnext.org">JPHP</a><sup id="cite_ref-54" class="reference"><a href="#cite_note-54">&#91;54&#93;</a></sup>
</td>
<td>5.6 (частично 7.0 и 7.1)<sup id="cite_ref-55" class="reference"><a href="#cite_note-55">&#91;55&#93;</a></sup>
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_Apache" title="Лицензия Apache">Apache 2.0</a>
</td>
<td><a href="/wiki/JVM" class="mw-redirect" title="JVM">JVM</a>
</td></tr>
<tr>
<td><a rel="nofollow" class="external text" href="https://github.com/ircmaxell/PHPPHP">PHPPHP</a>
</td>
<td>5.4
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT" title="Лицензия MIT">MIT</a>
</td>
<td>PHP
</td></tr>
<tr>
<td><a rel="nofollow" class="external text" href="http://ph7.symisc.net/">PH7</a>
</td>
<td>5.5
</td>
<td><a rel="nofollow" class="external text" href="http://symisc.net/spl.html">Своя (Symisc Public License)</a>
</td>
<td><a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">C</a>, <a href="/wiki/%D0%9C%D0%B0%D1%88%D0%B8%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" title="Машинный код">машинный код</a>
</td></tr>
<tr>
<td><a rel="nofollow" class="external text" href="http://hippyvm.baroquesoftware.com/">HippyVM</a>
</td>
<td>5.6
</td>
<td><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT" title="Лицензия MIT">MIT</a>
</td>
<td><a href="/wiki/PyPy" title="PyPy">RPython/PyPy</a>
</td></tr></tbody></table>
<p>На сайте phpclasses.org доступен сравнительный анализ некоторых компиляторов: <a rel="nofollow" class="external text" href="http://www.phpclasses.org/blog/post/117-PHP-compiler-performance.html">PHP compiler performance</a>.
</p>
<h2><span id=".D0.9B.D0.B8.D1.86.D0.B5.D0.BD.D0.B7.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Лицензирование">Лицензирование</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=20" class="mw-editsection-visualeditor" title="Редактировать раздел «Лицензирование»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=20" title="Редактировать раздел «Лицензирование»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="hatnote">Основная статья: <b><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_PHP" class="mw-redirect" title="Лицензия PHP">Лицензия PHP</a></b></div>
<h2><span id=".D0.91.D0.B8.D0.B1.D0.BB.D0.B8.D0.BE.D1.82.D0.B5.D0.BA.D0.B0_PEAR"></span><span class="mw-headline" id="Библиотека_PEAR">Библиотека PEAR</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=21" class="mw-editsection-visualeditor" title="Редактировать раздел «Библиотека PEAR»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=21" title="Редактировать раздел «Библиотека PEAR»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="hatnote">Основная статья: <b><a href="/wiki/PEAR" title="PEAR">PEAR</a></b></div>
<h2><span id=".D0.98.D0.BD.D1.82.D0.B5.D0.B3.D1.80.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.BD.D1.8B.D0.B5_.D1.81.D1.80.D0.B5.D0.B4.D1.8B_.D1.80.D0.B0.D0.B7.D1.80.D0.B0.D0.B1.D0.BE.D1.82.D0.BA.D0.B8_.D0.B4.D0.BB.D1.8F_PHP"></span><span class="mw-headline" id="Интегрированные_среды_разработки_для_PHP">Интегрированные среды разработки для PHP</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=22" class="mw-editsection-visualeditor" title="Редактировать раздел «Интегрированные среды разработки для PHP»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=22" title="Редактировать раздел «Интегрированные среды разработки для PHP»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<table class="standard">
<caption>
</caption>
<tbody><tr>
<th>Название
</th>
<th>Лицензия
</th>
<th>Сайт
</th></tr>
<tr>
<td><a href="/wiki/Codelobster" title="Codelobster">Codelobster</a>
</td>
<td><a href="/wiki/Freeware" class="mw-redirect" title="Freeware">Freeware</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.codelobster.com">http://www.codelobster.com</a>
</td></tr>
<tr>
<td><a href="/wiki/Komodo" class="mw-redirect" title="Komodo">Komodo</a>
</td>
<td><a href="/w/index.php?title=Mozilla_tri-license&amp;action=edit&amp;redlink=1" class="new" title="Mozilla tri-license (страница отсутствует)">Mozilla tri-license</a> (<a href="/wiki/Mozilla_Public_License" title="Mozilla Public License">MPL</a>/<a href="/wiki/GNU_LGPL" class="mw-redirect" title="GNU LGPL">LGPL</a>/<a href="/wiki/GNU_General_Public_License" title="GNU General Public License">GPL</a>)<sup id="cite_ref-56" class="reference"><a href="#cite_note-56">&#91;56&#93;</a></sup>
</td>
<td><a rel="nofollow" class="external free" href="http://www.activestate.com">http://www.activestate.com</a>
</td></tr>
<tr>
<td><a href="/wiki/JetBrains_PhpStorm" class="mw-redirect" title="JetBrains PhpStorm">JetBrains PhpStorm</a>
</td>
<td><a href="/wiki/Proprietary_software" class="mw-redirect" title="Proprietary software">Proprietary software</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.jetbrains.com/phpstorm/">http://www.jetbrains.com/phpstorm/</a>
</td></tr>
<tr>
<td><a href="/wiki/PHP_Development_Tools" title="PHP Development Tools">PHP Development Tools</a>
</td>
<td><a href="/wiki/Eclipse_Public_License" title="Eclipse Public License">Eclipse Public License</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.eclipse.org/pdt/">http://www.eclipse.org/pdt/</a>
</td></tr>
<tr>
<td><a href="/wiki/Zend_Studio" title="Zend Studio">Zend Studio</a>
</td>
<td><a href="/wiki/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%BD%D0%BE-%D0%B1%D0%B5%D1%81%D0%BF%D0%BB%D0%B0%D1%82%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Условно-бесплатное программное обеспечение">Shareware</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.zend.com/products/zend_studio/">http://www.zend.com/products/zend_studio/</a>
</td></tr>
<tr>
<td><a href="/wiki/Aptana_Studio" title="Aptana Studio">Aptana Studio</a>
</td>
<td><a href="/wiki/GNU_GPL" class="mw-redirect" title="GNU GPL">GNU GPL</a>
</td>
<td><a rel="nofollow" class="external free" href="https://web.archive.org/web/20141028160346/http://aptana.org/">https://web.archive.org/web/20141028160346/http://aptana.org/</a>
</td></tr>
<tr>
<td><a href="/w/index.php?title=PhpDesigner&amp;action=edit&amp;redlink=1" class="new" title="PhpDesigner (страница отсутствует)">phpDesigner</a>
</td>
<td><a href="/wiki/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%BD%D0%BE-%D0%B1%D0%B5%D1%81%D0%BF%D0%BB%D0%B0%D1%82%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Условно-бесплатное программное обеспечение">Shareware</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.mpsoftware.eu/">http://www.mpsoftware.eu/</a>
</td></tr>
<tr>
<td><a href="/wiki/PHP_Expert_Editor" title="PHP Expert Editor">PHP Expert Editor</a>
</td>
<td><a href="/wiki/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%BD%D0%BE-%D0%B1%D0%B5%D1%81%D0%BF%D0%BB%D0%B0%D1%82%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Условно-бесплатное программное обеспечение">Shareware</a><sup id="cite_ref-57" class="reference"><a href="#cite_note-57">&#91;57&#93;</a></sup>
</td>
<td><a rel="nofollow" class="external free" href="http://www.phpexperteditor.com/">http://www.phpexperteditor.com/</a>
</td></tr>
<tr>
<td><a href="/wiki/NetBeans_IDE" class="mw-redirect" title="NetBeans IDE">NetBeans IDE</a>
</td>
<td><a href="/wiki/CDDL" title="CDDL">CDDL</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.netbeans.org/">http://www.netbeans.org/</a>
</td></tr>
<tr>
<td><a href="/wiki/RadPHP_XE" class="mw-redirect" title="RadPHP XE">RadPHP XE</a>
</td>
<td><a href="/wiki/Trial" class="mw-redirect" title="Trial">Trial</a>
</td>
<td><a rel="nofollow" class="external free" href="https://web.archive.org/web/20101225190602/http://www.embarcadero.com/products/radphp">https://web.archive.org/web/20101225190602/http://www.embarcadero.com/products/radphp</a>
</td></tr>
<tr>
<td><a href="/wiki/NuSphere" title="NuSphere">NuSphere</a>
</td>
<td><a href="/wiki/Trial" class="mw-redirect" title="Trial">Trial</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.nusphere.com/">http://www.nusphere.com/</a>
</td></tr>
<tr>
<td><a href="/wiki/KDevelop" title="KDevelop">KDevelop</a><sup id="cite_ref-58" class="reference"><a href="#cite_note-58">&#91;58&#93;</a></sup>
</td>
<td><a href="/wiki/GNU_GPL" class="mw-redirect" title="GNU GPL">GNU GPL</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.kdevelop.org/">http://www.kdevelop.org/</a>
</td></tr>
<tr>
<td><a href="/w/index.php?title=Microsoft_WebMatrix&amp;action=edit&amp;redlink=1" class="new" title="Microsoft WebMatrix (страница отсутствует)">Microsoft WebMatrix</a>
</td>
<td><a href="/wiki/Freeware" class="mw-redirect" title="Freeware">Freeware</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.microsoft.com/web/webmatrix/">http://www.microsoft.com/web/webmatrix/</a>
</td></tr>
<tr>
<td><a href="/wiki/Notepad%2B%2B" title="Notepad++">Notepad++</a>
</td>
<td><a href="/wiki/GNU_GPL" class="mw-redirect" title="GNU GPL">GNU GPL</a>
</td>
<td><a rel="nofollow" class="external free" href="http://notepad-plus-plus.org/">http://notepad-plus-plus.org/</a>
</td></tr>
<tr>
<td><a href="/wiki/Sublime_Text" title="Sublime Text">Sublime Text</a>
</td>
<td><a href="/wiki/Proprietary_software" class="mw-redirect" title="Proprietary software">Proprietary software</a>
</td>
<td><a rel="nofollow" class="external free" href="http://www.sublimetext.com/">http://www.sublimetext.com/</a>
</td></tr>
<tr>
<td>VS.Php for Visual Studio
</td>
<td><a href="/wiki/Proprietary_software" class="mw-redirect" title="Proprietary software">Proprietary software</a>
</td>
<td><a rel="nofollow" class="external free" href="https://www.webcitation.org/6JdxGc36v?url=http://www.jcxsoftware.com/jcx/vsphp/home">https://www.webcitation.org/6JdxGc36v?url=http://www.jcxsoftware.com/jcx/vsphp/home</a>
</td></tr>
<tr>
<td>PHP Tools for Visual Studio
</td>
<td>Trial
</td>
<td><a rel="nofollow" class="external free" href="http://www.devsense.com">http://www.devsense.com</a>
</td></tr>
<tr>
<td><a href="/w/index.php?title=DevelNext&amp;action=edit&amp;redlink=1" class="new" title="DevelNext (страница отсутствует)">DevelNext</a>
</td>
<td><a href="/w/index.php?title=MPL-2.0&amp;action=edit&amp;redlink=1" class="new" title="MPL-2.0 (страница отсутствует)">MPL-2.0</a>
</td>
<td><a rel="nofollow" class="external free" href="http://develnext.org/">http://develnext.org/</a>
</td></tr>
<tr>
<td><a href="/wiki/JEdit" title="JEdit">jEdit</a>
</td>
<td><a href="/wiki/GNU_GPL" class="mw-redirect" title="GNU GPL">GNU GPL</a>-2.0
</td>
<td><a rel="nofollow" class="external free" href="http://jedit.org/">http://jedit.org/</a>
</td></tr>
</tbody><caption>
</caption></table>
<h2><span id=".D0.A1.D1.82.D0.B0.D0.BD.D0.B4.D0.B0.D1.80.D1.82.D1.8B_.D0.BA.D0.BE.D0.B4.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8F_PSR"></span><span class="mw-headline" id="Стандарты_кодирования_PSR">Стандарты кодирования PSR</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=23" class="mw-editsection-visualeditor" title="Редактировать раздел «Стандарты кодирования PSR»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=23" title="Редактировать раздел «Стандарты кодирования PSR»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Для улучшения читабельности кода в разных CMS и фреймворках решили придерживаться определенных стандартов. Разработкой стандартов занимается организация PHP-fig<sup id="cite_ref-59" class="reference"><a href="#cite_note-59">&#91;59&#93;</a></sup>
</p>
<h2><span id=".D0.9A.D1.80.D0.B8.D1.82.D0.B8.D0.BA.D0.B0"></span><span class="mw-headline" id="Критика">Критика</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=24" class="mw-editsection-visualeditor" title="Редактировать раздел «Критика»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=24" title="Редактировать раздел «Критика»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Сторонники языка PHP в качестве основных его преимуществ называют широкую распространённость, востребованность PHP-разработчиков на рынке труда и простоту изучения. К достоинствам языка относится и его достаточно быстрая эволюция. В то же время язык часто критикуют за несогласованный синтаксис функций и не<a href="/wiki/DRY" class="mw-redirect" title="DRY">ортогональность</a> дизайна. Такие претензии суммированы в известной блогозаписи «PHP: фрактал плохого дизайна»<sup id="cite_ref-60" class="reference"><a href="#cite_note-60">&#91;60&#93;</a></sup><sup id="cite_ref-61" class="reference"><a href="#cite_note-61">&#91;61&#93;</a></sup>, опубликованной в 2012 году. Её автор пишет, что «<i>Фактически каждая деталь PHP в какой-то мере поломана. Язык, структура, экосистема: всё плохо</i>». Среди недостатков языка он называет запутанную систему типов данных, основанную на <a href="/wiki/%D0%A1%D0%BB%D0%B0%D0%B1%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" class="mw-redirect" title="Слабая типизация">слабой типизации</a>, а в качестве причин всеобщей несогласованности называет отсутствие чёткой философии при разработке языка. Ранние версии PHP ориентировались на <a href="/wiki/Perl" title="Perl">Perl</a>, стандартная библиотека&#160;— на <a href="/wiki/%D0%AF%D0%B7%D1%8B%D0%BA_C" class="mw-redirect" title="Язык C">язык C</a>, а реализация <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">объектно-ориентированной парадигмы</a>&#160;— на <a href="/wiki/C%2B%2B" title="C++">C++</a> и <a href="/wiki/Java" title="Java">Java</a>. Эту критику признают отчасти справедливой (хотя и гипертрофированной) и некоторые участники сообщества PHP-разработчиков<sup id="cite_ref-love_and_hate_62-0" class="reference"><a href="#cite_note-love_and_hate-62">&#91;62&#93;</a></sup>.
</p>
<h3><span id=".D0.9E.D1.82.D1.81.D1.83.D1.82.D1.81.D1.82.D0.B2.D0.B8.D0.B5_.D0.BE.D0.B1.D1.80.D0.B0.D1.82.D0.BD.D0.BE.D0.B9_.D1.81.D0.BE.D0.B2.D0.BC.D0.B5.D1.81.D1.82.D0.B8.D0.BC.D0.BE.D1.81.D1.82.D0.B8_.D0.BC.D0.B5.D0.B6.D0.B4.D1.83_.D0.B2.D0.B5.D1.80.D1.81.D0.B8.D1.8F.D0.BC.D0.B8_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0"></span><span class="mw-headline" id="Отсутствие_обратной_совместимости_между_версиями_языка">Отсутствие обратной совместимости между версиями языка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=25" class="mw-editsection-visualeditor" title="Редактировать раздел «Отсутствие обратной совместимости между версиями языка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=25" title="Редактировать раздел «Отсутствие обратной совместимости между версиями языка»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В связи с развитием PHP и избавлением его от <span class="iw plainlinks" data-title="Устаревший код" data-lang="en" data-lang-name="англ."><a href="/w/index.php?title=%D0%A3%D1%81%D1%82%D0%B0%D1%80%D0%B5%D0%B2%D1%88%D0%B8%D0%B9_%D0%BA%D0%BE%D0%B4&amp;action=edit&amp;redlink=1" class="new" title="Устаревший код (страница отсутствует)">устаревшего наследия</a><sup class="iw&#95;_note noprint" style="font-style:normal; font-weight:normal;"><a href="https://en.wikipedia.org/wiki/legacy_code" class="extiw" title="en:legacy code"><span class="iw&#95;_tooltip" title="legacy code — версия статьи «Устаревший код» на английском языке">[en]</span></a></sup></span> ранних версий языка код, созданный для более ранних версий языка, зачастую не работает или работает некорректно с более поздними версиями языка<sup id="cite_ref-63" class="reference"><a href="#cite_note-63">&#91;63&#93;</a></sup>. В более поздних версиях исключаются конструкции, методики, функции, применявшиеся ранее. В результате приложения, созданные несколько лет назад, практически теряют работоспособность для современных версий языка и требуют значительной модификации. Такие изменения обусловлены двумя факторами: устранением несогласованного синтаксиса и устранением конструкций, поощряющих создание небезопасного кода.
</p><p>В версиях линейки 5.3.x большое количество функций было признано устаревшими, их поддержка не планируется в новых версиях языка<sup id="cite_ref-php_deprecated_functions_64-0" class="reference"><a href="#cite_note-php_deprecated_functions-64">&#91;64&#93;</a></sup>, что вызывает несовместимость со скриптами, которые используют устаревшие функции.
</p><p>Противоречие между обратной совместимостью и процессом развития&#160;— одна из ключевых проблем в разработке программного и аппаратного обеспечения. При работе над <a href="/wiki/%D0%A1%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D0%B2%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" class="mw-redirect" title="Скриптовый язык">скриптовыми языками</a> время от времени происходит резкая смена его <a href="/wiki/%D0%90%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Архитектура программного обеспечения">архитектуры</a> (а порой и <a href="/wiki/%D0%9F%D0%B0%D1%80%D0%B0%D0%B4%D0%B8%D0%B3%D0%BC%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Парадигма программирования">парадигмы</a>), обычно сопровождающаяся сменой первой цифры в номере версии. Так, в настоящее время идёт постепенный переход на новую ветвь языка Python&#160;— 3.x, в стадии тестирования находится <a href="/wiki/Perl_6" class="mw-redirect" title="Perl 6">Perl 6</a>, являющийся, по сути, новым perl-подобным языком. При этом принято выпускать переходные версии, в которых постепенно вводятся новые конструкции, а использование устаревших вызывает вывод предупреждений. К таким переходным версиям относится и PHP 5.3.
</p><p>7 марта 2013 года <a href="/wiki/Zend_Technologies" title="Zend Technologies">Zend Technologies</a> объявили, что в версию PHP 5.5, когда она будет выпущена, решено интегрировать Zend Optimizer+, который включает в себя кэш опкодов и оптимизатор кода.
</p>
<h3><span id=".D0.9E.D1.82.D1.81.D1.83.D1.82.D1.81.D1.82.D0.B2.D0.B8.D0.B5_.D0.BF.D0.BE.D0.B4.D0.B4.D0.B5.D1.80.D0.B6.D0.BA.D0.B8_.D0.BC.D0.BD.D0.BE.D0.B3.D0.BE.D0.B1.D0.B0.D0.B9.D1.82.D0.BE.D0.B2.D1.8B.D1.85_.D0.BA.D0.BE.D0.B4.D0.B8.D1.80.D0.BE.D0.B2.D0.BE.D0.BA_.D0.B2_.D1.8F.D0.B4.D1.80.D0.B5_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0"></span><span class="mw-headline" id="Отсутствие_поддержки_многобайтовых_кодировок_в_ядре_языка">Отсутствие поддержки многобайтовых кодировок в ядре языка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=26" class="mw-editsection-visualeditor" title="Редактировать раздел «Отсутствие поддержки многобайтовых кодировок в ядре языка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=26" title="Редактировать раздел «Отсутствие поддержки многобайтовых кодировок в ядре языка»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Поддержка <a href="/wiki/%D0%AE%D0%BD%D0%B8%D0%BA%D0%BE%D0%B4" title="Юникод">строк с многобайтовыми кодировками</a> (такими как <a href="/wiki/UTF-8" title="UTF-8">UTF-8</a>) реализуется через отдельные расширения <code>mbstring</code> и <code>iconv</code>, на уровне ядра поддержка отсутствует, однако с версии PHP 4.2.0 есть возможность переопределять стандартные функции работы со строками, подменяя их на аналоги из mbstring.
Поддержка многобайтовых кодировок во всех строковых функциях стала доступна с версии 5.4.0 (март 2012 года).
</p>
<h3><span id=".D0.9E.D1.82.D1.81.D1.83.D1.82.D1.81.D1.82.D0.B2.D0.B8.D0.B5_.D0.BF.D0.BE.D0.B4.D0.B4.D0.B5.D1.80.D0.B6.D0.BA.D0.B8_.D0.BC.D0.BD.D0.BE.D0.B3.D0.BE.D0.BF.D0.BE.D1.82.D0.BE.D1.87.D0.BD.D0.BE.D1.81.D1.82.D0.B8"></span><span class="mw-headline" id="Отсутствие_поддержки_многопоточности">Отсутствие поддержки многопоточности</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=PHP&amp;veaction=edit&amp;section=27" class="mw-editsection-visualeditor" title="Редактировать раздел «Отсутствие поддержки многопоточности»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=PHP&amp;action=edit&amp;section=27" title="Редактировать раздел «Отсутствие поддержки многопоточности»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В языке не предусмотрена возможность создания <a href="/wiki/%D0%9C%D0%BD%D0%BE%D0%B3%D0%BE%D0%BF%D0%BE%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Многопоточность">многопоточных</a> приложений и отсутствует поддержка синхронизированного доступа к ресурсам, однако реализуема при помощи расширения PCNTL<sup id="cite_ref-65" class="reference"><a href="#cite_note-65">&#91;65&#93;</a></sup>. Однако использование PCNTL или <b>P</b>rocess<b>C</b>o<b>nt</b>ro<b>l</b> не подходит для решения специфических задач.
</p><p>Хотя есть возможность установить расширение <a rel="nofollow" class="external text" href="http://php.net/manual/ru/book.pthreads.php">pthreads</a> для «честных» потоков, но для этого интерпретатор должен быть скомпилирован с флагом thread safety.
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