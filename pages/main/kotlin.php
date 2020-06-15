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
    <title>Kotlin</title>
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
                        <h3>Язык программирования Kotlin</h3>
                        
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
<li class="toclevel-1 tocsection-2"><a href="#Синтаксис"><span class="tocnumber">2</span> <span class="toctext">Синтаксис</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Примеры_кода"><span class="tocnumber">3</span> <span class="toctext">Примеры кода</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Примечания"><span class="tocnumber">4</span> <span class="toctext">Примечания</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Литература"><span class="tocnumber">5</span> <span class="toctext">Литература</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Ссылки"><span class="tocnumber">6</span> <span class="toctext">Ссылки</span></a></li>
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
		
		<div id="mw-content-text" lang="ru" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><table class="infobox" style="" data-name="Язык программирования"><tbody><tr><th colspan="2" class="infobox-above" style="background:#cfe3ff;">Kotlin</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span class="wikidata-claim" data-wikidata-property-id="P154" data-wikidata-claim-id="Q3816639$252F2B1F-C89E-4847-8E9E-FDF04A1CF3E5"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Kotlin-logo.svg" class="image"><img alt="Kotlin-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Kotlin-logo.svg/80px-Kotlin-logo.svg.png" decoding="async" width="80" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/74/Kotlin-logo.svg/120px-Kotlin-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/74/Kotlin-logo.svg/160px-Kotlin-logo.svg.png 2x" data-file-width="512" data-file-height="512" /></a></span></span> </td></tr>
<tr>
<th class="plainlist">Класс языка</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P31" data-wikidata-claim-id="Q3816639$5352AA7A-9A04-4805-B61A-A3C52748C727"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Объектно-ориентированный язык программирования">объектно-ориентированный язык программирования</a></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P31" data-wikidata-claim-id="Q3816639$0658f273-49c4-55a2-ff1d-d17bff7e0564"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%AF%D0%B7%D1%8B%D0%BA+JVM&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q56062429&amp;preloadparams%5B%5D=%D0%AF%D0%B7%D1%8B%D0%BA+JVM&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">язык JVM</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q56062429" class="extiw" title="d:Q56062429">[d]</a></sup></span></span></td>
</tr>
<tr>
<th class="plainlist">Появился в</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P571">01.03.2017</span></td>
</tr>
<tr>
<th class="plainlist">Автор</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P287" data-wikidata-claim-id="Q3816639$c040ab52-755c-43cc-ab2b-067e0bce2cba"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/JetBrains" title="JetBrains">JetBrains</a></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A0%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8_%D1%84%D0%B0%D0%B9%D0%BB%D0%B0" title="Расширение имени файла">Расширение</a> файлов</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q3816639$e1e4dd2f-44b9-a3a1-0ba1-260e0c4bfc92"><span class="wikidata-snak wikidata-main-snak"><code>.kt</code></span></span> или <span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q3816639$2643373d-4fb9-d1ff-c78e-9ceee3ef61d4"><span class="wikidata-snak wikidata-main-snak"><code>.kts</code></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D1%82%D0%B0%D0%B4%D0%B8%D0%B8_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Стадии разработки программного обеспечения">Выпуск</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P348"><ul><li><span class="wikidata-claim" data-wikidata-property-id="P348" data-wikidata-claim-id="Q3816639$073694a7-46bb-69c6-b642-6d472d2d625a"><span class="wikidata-snak wikidata-main-snak">1.3.72</span> (<span class="wikidata-snak" data-wikidata-hash="e8dce10923127516d152ebf09029e6301e8875a5"><span class="nowrap"><a href="/wiki/15_%D0%B0%D0%BF%D1%80%D0%B5%D0%BB%D1%8F" title="15 апреля">15 апреля</a> <a href="/wiki/2020_%D0%B3%D0%BE%D0%B4" title="2020 год">2020</a></span></span>)<sup id="cite_ref-_cd157315fd25d9eb_1-0" class="reference"><a href="#cite_note-_cd157315fd25d9eb-1">&#91;1&#93;</a></sup></span></li></ul></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Система типов">Система типов</a></th>
<td class="plainlist">
<a href="/wiki/%D0%A1%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Статическая типизация">статическая</a></td>
</tr>
<tr>
<th class="plainlist">Испытал влияние</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P737"><a href="/wiki/Java" title="Java">Java</a>, <a href="/wiki/Scala_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Scala (язык программирования)">Scala</a>, <a href="/wiki/Groovy" title="Groovy">Groovy</a>, <a href="/wiki/Gosu" title="Gosu">Gosu</a>, <a href="/wiki/C_Sharp" title="C Sharp">C#</a><sup id="cite_ref-reaveled_2-0" class="reference"><a href="#cite_note-reaveled-2">&#91;2&#93;</a></sup>, <a href="/wiki/Python" title="Python">Python</a>, <a href="/wiki/ML" title="ML">ML</a></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_%D0%BD%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Лицензия на программное обеспечение">Лицензия</a></th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P275" data-wikidata-claim-id="Q3816639$64A1CB61-79FF-4B74-A245-235721DDBF06"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Apache_License_2.0" class="mw-redirect" title="Apache License 2.0">Apache License 2.0</a></span><sup id="cite_ref-_10fd99902cc8b923_3-0" class="reference"><a href="#cite_note-_10fd99902cc8b923-3">&#91;3&#93;</a></sup></span></td>
</tr>
<tr>
<th class="plainlist">Сайт</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P856" data-wikidata-claim-id="Q3816639$5F5D9BF8-6A04-4E3B-A4A3-0051D490D95C"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://kotlinlang.org/">kotlinlang.org</a>&#8203;&#160;<span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span></span></span></td>
</tr>
<tr>
<th class="plainlist">Платформа</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P400"><a href="/wiki/Java_Virtual_Machine" title="Java Virtual Machine">Java Virtual Machine</a></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Операционная система">ОС</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P306">любая, поддерживающая JVM</span></td>
</tr>
</tbody></table> <div class="dablink hatnote noprint">У этого термина существуют и другие значения, см. <a href="/wiki/%D0%9A%D0%BE%D1%82%D0%BB%D0%B8%D0%BD_(%D0%B7%D0%BD%D0%B0%D1%87%D0%B5%D0%BD%D0%B8%D1%8F)" class="mw-disambig" title="Котлин (значения)">Котлин</a>.</div>
<p><b>Kotlin</b> (Ко́тлин)&#160;— <a href="/wiki/%D0%A1%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Статическая типизация">статически типизированный</a>, объектно-ориентированный <a href="/wiki/%D0%AF%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Язык программирования">язык программирования</a>, работающий поверх <a href="/wiki/Java_Virtual_Machine" title="Java Virtual Machine">Java Virtual Machine</a> и разрабатываемый компанией <a href="/wiki/JetBrains" title="JetBrains">JetBrains</a>. Также компилируется в <a href="/wiki/JavaScript" title="JavaScript">JavaScript</a> и в <a href="/wiki/%D0%98%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D1%8F%D0%B5%D0%BC%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" class="mw-redirect" title="Исполняемый код">исполняемый код</a> ряда платформ через инфраструктуру <a href="/wiki/LLVM" title="LLVM">LLVM</a>.
Язык назван в честь <a href="/wiki/%D0%9A%D0%BE%D1%82%D0%BB%D0%B8%D0%BD" title="Котлин">острова Котлин</a> в <a href="/wiki/%D0%A4%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9_%D0%B7%D0%B0%D0%BB%D0%B8%D0%B2" title="Финский залив">Финском заливе</a>, на котором расположен город <a href="/wiki/%D0%9A%D1%80%D0%BE%D0%BD%D1%88%D1%82%D0%B0%D0%B4%D1%82" title="Кронштадт">Кронштадт</a><sup id="cite_ref-ospnews_4-0" class="reference"><a href="#cite_note-ospnews-4">&#91;4&#93;</a></sup>.
</p><p>Авторы ставили целью создать язык более лаконичный и типобезопасный, чем <a href="/wiki/Java" title="Java">Java</a>, и более простой, чем <a href="/wiki/Scala_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Scala (язык программирования)">Scala</a><sup id="cite_ref-ospnews_4-1" class="reference"><a href="#cite_note-ospnews-4">&#91;4&#93;</a></sup>. Следствием упрощения по сравнению со Scala стали также более быстрая <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%86%D0%B8%D1%8F_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Компиляция (программирование)">компиляция</a> и лучшая поддержка языка в <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D1%80%D0%B5%D0%B4%D0%B0_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8" title="Интегрированная среда разработки">IDE</a><sup id="cite_ref-5" class="reference"><a href="#cite_note-5">&#91;5&#93;</a></sup>. Язык полностью совместим с Java, что позволяет java-разработчикам постепенно перейти к его использованию; в частности, в <a href="/wiki/Android" title="Android">Android</a> язык встраивается с помощью <a href="/wiki/Gradle" title="Gradle">Gradle</a>, что позволяет для существующего android-приложения внедрять новые функции на Kotlin без переписывания приложения целиком.
</p>
<div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading">Содержание</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#История"><span class="tocnumber">1</span> <span class="toctext">История</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Синтаксис"><span class="tocnumber">2</span> <span class="toctext">Синтаксис</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Примеры_кода"><span class="tocnumber">3</span> <span class="toctext">Примеры кода</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Примечания"><span class="tocnumber">4</span> <span class="toctext">Примечания</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Литература"><span class="tocnumber">5</span> <span class="toctext">Литература</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Ссылки"><span class="tocnumber">6</span> <span class="toctext">Ссылки</span></a></li>
</ul>
</div>

<h2><span id=".D0.98.D1.81.D1.82.D0.BE.D1.80.D0.B8.D1.8F"></span><span class="mw-headline" id="История">История</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Kotlin&amp;veaction=edit&amp;section=1" class="mw-editsection-visualeditor" title="Редактировать раздел «История»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Kotlin&amp;action=edit&amp;section=1" title="Редактировать раздел «История»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Язык разрабатывается с 2010 года, представлен общественности в июле 2011<sup id="cite_ref-reaveled_2-1" class="reference"><a href="#cite_note-reaveled-2">&#91;2&#93;</a></sup>. Исходный код реализации языка открыт в феврале 2012<sup id="cite_ref-6" class="reference"><a href="#cite_note-6">&#91;6&#93;</a></sup>. В феврале выпущен milestone 1, включающий плагин для <a href="/wiki/IntelliJ_IDEA" title="IntelliJ IDEA">IDEA</a>. В июне&#160;— milestone 2 с поддержкой <a href="/wiki/Android" title="Android">Android</a><sup id="cite_ref-7" class="reference"><a href="#cite_note-7">&#91;7&#93;</a></sup>. В декабре 2012 года вышел milestone 4, включающий, в частности, поддержку Java 7<sup id="cite_ref-8" class="reference"><a href="#cite_note-8">&#91;8&#93;</a></sup>.
</p><p>В феврале 2016 года вышел официальный <a href="/wiki/%D0%92%D0%B5%D1%80%D1%81%D0%B8%D1%8F-%D0%BA%D0%B0%D0%BD%D0%B4%D0%B8%D0%B4%D0%B0%D1%82" class="mw-redirect" title="Версия-кандидат">релиз-кандидат</a> версии 1.0<sup id="cite_ref-9" class="reference"><a href="#cite_note-9">&#91;9&#93;</a></sup>, а 15 февраля 2016 года&#160;— релиз 1.0<sup id="cite_ref-10" class="reference"><a href="#cite_note-10">&#91;10&#93;</a></sup>. 1 марта 2017 вышел релиз 1.1<sup id="cite_ref-11" class="reference"><a href="#cite_note-11">&#91;11&#93;</a></sup>.
</p><p>В мае 2017 года компания <a href="/wiki/Google_(%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F)" title="Google (компания)">Google</a> сообщила, что инструменты языка Kotlin, основанные на <a href="/wiki/JetBrains" title="JetBrains">JetBrains</a> <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D1%80%D0%B5%D0%B4%D0%B0_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8" title="Интегрированная среда разработки">IDE</a>, будут по стандарту включены в <a href="/wiki/Android_Studio" title="Android Studio">Android Studio</a> 3.0&#160;— официальный инструмент разработки для ОС <a href="/wiki/Android" title="Android">Android</a><sup id="cite_ref-12" class="reference"><a href="#cite_note-12">&#91;12&#93;</a></sup>.
</p><p>На Google I/O 2019 было объявлено, что язык программирования Kotlin стал приоритетным в разработке под Android<sup id="cite_ref-13" class="reference"><a href="#cite_note-13">&#91;13&#93;</a></sup>.
</p>
<h2><span id=".D0.A1.D0.B8.D0.BD.D1.82.D0.B0.D0.BA.D1.81.D0.B8.D1.81"></span><span class="mw-headline" id="Синтаксис">Синтаксис</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Kotlin&amp;veaction=edit&amp;section=2" class="mw-editsection-visualeditor" title="Редактировать раздел «Синтаксис»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Kotlin&amp;action=edit&amp;section=2" title="Редактировать раздел «Синтаксис»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Синтаксис языка использует элементы из <a href="/wiki/%D0%9F%D0%B0%D1%81%D0%BA%D0%B0%D0%BB%D1%8C_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Паскаль (язык программирования)">Паскаля</a>, <a href="/wiki/TypeScript" title="TypeScript">TypeScript</a>, <a href="/wiki/Haxe" title="Haxe">Haxe</a>, <a href="/wiki/PL/SQL" title="PL/SQL">PL/SQL</a>, <a href="/wiki/F_Sharp" title="F Sharp">F#</a>, <a href="/wiki/Go" title="Go">Go</a> и <a href="/wiki/Scala_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Scala (язык программирования)">Scala</a>, <a href="/wiki/C%2B%2B" title="C++">C++</a>, <a href="/wiki/Java" title="Java">Java</a>, <a href="/wiki/C_Sharp" title="C Sharp">C#</a>, <a href="/wiki/Rust_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Rust (язык программирования)">Rust</a> и <a href="/wiki/D_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="D (язык программирования)">D</a>. При объявлении переменных и параметров типы данных указываются после названия (разделитель&#160;— двоеточие). Точка с запятой, как разделитель операторов, также необязательна (как в Scala и Groovy); в большинстве случаев перевода строки достаточно, чтобы компилятор понял, что выражение закончилось. Кроме объектно-ориентированного подхода, Kotlin также поддерживает процедурный стиль с использованием функций. Как и в <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a>, C++ и D, <a href="/wiki/%D0%A2%D0%BE%D1%87%D0%BA%D0%B0_%D0%B2%D1%85%D0%BE%D0%B4%D0%B0" title="Точка входа">точка входа</a> в программу&#160;— функция <code>main</code>, принимающая массив параметров командной строки. Программы на Kotlin также поддерживают <a href="/wiki/Perl" title="Perl">perl</a>- и <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%BD%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BE%D0%BB%D0%BE%D1%87%D0%BA%D0%B0_Unix" title="Командная оболочка Unix">shell</a>-стиль интерполяции строк (переменные, включённые в строку, заменяются на их содержимое). Также поддерживается <a href="/wiki/%D0%92%D1%8B%D0%B2%D0%BE%D0%B4_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Вывод типов">вывод типов</a>.
</p>
<h2><span id=".D0.9F.D1.80.D0.B8.D0.BC.D0.B5.D1.80.D1.8B_.D0.BA.D0.BE.D0.B4.D0.B0"></span><span class="mw-headline" id="Примеры_кода">Примеры кода</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Kotlin&amp;veaction=edit&amp;section=3" class="mw-editsection-visualeditor" title="Редактировать раздел «Примеры кода»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Kotlin&amp;action=edit&amp;section=3" title="Редактировать раздел «Примеры кода»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="mw-highlight mw-highlight-lang-kotlin mw-content-ltr" dir="ltr"><pre><span></span><span class="k">fun</span> <span class="nf">main</span><span class="p">()</span> <span class="p">{</span>
  <span class="k">val</span> <span class="py">scope</span> <span class="p">=</span> <span class="s">&quot;world&quot;</span>
  <span class="n">println</span><span class="p">(</span><span class="s">&quot;Hello, $scope!&quot;</span><span class="p">)</span>
<span class="p">}</span>
</pre></div><div class="mw-highlight mw-highlight-lang-kotlin mw-content-ltr" dir="ltr"><pre><span></span><span class="k">fun</span> <span class="nf">sayHello</span><span class="p">(</span><span class="n">maybe</span><span class="p">:</span> <span class="n">String</span><span class="p">?,</span> <span class="n">neverNull</span><span class="p">:</span> <span class="n">Int</span><span class="p">)</span> <span class="p">{</span>
   <span class="c1">// use of elvis operator</span>
   <span class="k">val</span> <span class="py">name</span><span class="p">:</span> <span class="n">String</span> <span class="p">=</span> <span class="n">maybe</span> <span class="o">?:</span> <span class="s">&quot;stranger&quot;</span>
   <span class="n">println</span><span class="p">(</span><span class="s">&quot;Hello $name&quot;</span><span class="p">)</span>
<span class="p">}</span>
</pre></div><div class="mw-highlight mw-highlight-lang-kotlin mw-content-ltr" dir="ltr"><pre><span></span>  <span class="c1">// returns null if foo is null, or bar() returns null, or baz() returns null</span>
  <span class="n">foo</span> <span class="o">?.</span> <span class="n">bar</span><span class="p">()</span> <span class="o">?.</span> <span class="n">baz</span><span class="p">()</span>
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