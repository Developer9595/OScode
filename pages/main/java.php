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
    <title>Java</title>
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
                        <h3>Язык программирования JAVA</h3>
                        
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

                        <ul>
<li class="toclevel-1 tocsection-1"><a href="#История_создания"><span class="tocnumber">1</span> <span class="toctext">История создания</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Основные_особенности_языка"><span class="tocnumber">2</span> <span class="toctext">Основные особенности языка</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#История_версий"><span class="tocnumber">3</span> <span class="toctext">История версий</span></a>
<ul>
<li class="toclevel-2 tocsection-4"><a href="#JDK_1.0"><span class="tocnumber">3.1</span> <span class="toctext">JDK 1.0</span></a></li>
<li class="toclevel-2 tocsection-5"><a href="#JDK_1.1"><span class="tocnumber">3.2</span> <span class="toctext">JDK 1.1</span></a></li>
<li class="toclevel-2 tocsection-6"><a href="#J2SE_1.2"><span class="tocnumber">3.3</span> <span class="toctext">J2SE 1.2</span></a></li>
<li class="toclevel-2 tocsection-7"><a href="#J2SE_1.3"><span class="tocnumber">3.4</span> <span class="toctext">J2SE 1.3</span></a></li>
<li class="toclevel-2 tocsection-8"><a href="#J2SE_1.4"><span class="tocnumber">3.5</span> <span class="toctext">J2SE 1.4</span></a></li>
<li class="toclevel-2 tocsection-9"><a href="#J2SE_5.0"><span class="tocnumber">3.6</span> <span class="toctext">J2SE 5.0</span></a></li>
<li class="toclevel-2 tocsection-10"><a href="#Java_SE_6"><span class="tocnumber">3.7</span> <span class="toctext">Java SE 6</span></a></li>
<li class="toclevel-2 tocsection-11"><a href="#Java_FX"><span class="tocnumber">3.8</span> <span class="toctext">Java FX</span></a></li>
<li class="toclevel-2 tocsection-12"><a href="#Java_ME_Embedded"><span class="tocnumber">3.9</span> <span class="toctext">Java ME Embedded</span></a></li>
<li class="toclevel-2 tocsection-13"><a href="#Java_SE_7"><span class="tocnumber">3.10</span> <span class="toctext">Java SE 7</span></a>
<ul>
<li class="toclevel-3 tocsection-14"><a href="#Список_нововведений"><span class="tocnumber">3.10.1</span> <span class="toctext">Список нововведений</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-15"><a href="#Java_SE_8"><span class="tocnumber">3.11</span> <span class="toctext">Java SE 8</span></a>
<ul>
<li class="toclevel-3 tocsection-16"><a href="#Список_нововведений_2"><span class="tocnumber">3.11.1</span> <span class="toctext">Список нововведений</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-17"><a href="#Java_SE_9"><span class="tocnumber">3.12</span> <span class="toctext">Java SE 9</span></a>
<ul>
<li class="toclevel-3 tocsection-18"><a href="#Список_нововведений_3"><span class="tocnumber">3.12.1</span> <span class="toctext">Список нововведений</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-19"><a href="#Java_SE_10"><span class="tocnumber">3.13</span> <span class="toctext">Java SE 10</span></a>
<ul>
<li class="toclevel-3 tocsection-20"><a href="#Список_нововведений_4"><span class="tocnumber">3.13.1</span> <span class="toctext">Список нововведений</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-21"><a href="#Java_SE_11"><span class="tocnumber">3.14</span> <span class="toctext">Java SE 11</span></a>
<ul>
<li class="toclevel-3 tocsection-22"><a href="#Список_нововведений_5"><span class="tocnumber">3.14.1</span> <span class="toctext">Список нововведений</span></a></li>
</ul>
</li>
</ul>
</li>
<li class="toclevel-1 tocsection-23"><a href="#Классификация_платформ_Java"><span class="tocnumber">4</span> <span class="toctext">Классификация платформ Java</span></a></li>
<li class="toclevel-1 tocsection-24"><a href="#Java_и_Microsoft"><span class="tocnumber">5</span> <span class="toctext">Java и Microsoft</span></a></li>
<li class="toclevel-1 tocsection-25"><a href="#Java_и_Android"><span class="tocnumber">6</span> <span class="toctext">Java и Android</span></a></li>
<li class="toclevel-1 tocsection-26"><a href="#Применения_платформы_Java"><span class="tocnumber">7</span> <span class="toctext">Применения платформы Java</span></a>
<ul>
<li class="toclevel-2 tocsection-27"><a href="#Производительность"><span class="tocnumber">7.1</span> <span class="toctext">Производительность</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-28"><a href="#Основные_возможности"><span class="tocnumber">8</span> <span class="toctext">Основные возможности</span></a></li>
<li class="toclevel-1 tocsection-29"><a href="#Основные_идеи"><span class="tocnumber">9</span> <span class="toctext">Основные идеи</span></a>
<ul>
<li class="toclevel-2 tocsection-30"><a href="#Примитивные_типы"><span class="tocnumber">9.1</span> <span class="toctext">Примитивные типы</span></a>
<ul>
<li class="toclevel-3 tocsection-31"><a href="#Преобразования_при_математических_операциях"><span class="tocnumber">9.1.1</span> <span class="toctext">Преобразования при математических операциях</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-32"><a href="#Объектные_переменные,_объекты,_ссылки_и_указатели"><span class="tocnumber">9.2</span> <span class="toctext">Объектные переменные, объекты, ссылки и указатели</span></a>
<ul>
<li class="toclevel-3 tocsection-33"><a href="#Дублирование_ссылок_и_клонирование"><span class="tocnumber">9.2.1</span> <span class="toctext">Дублирование ссылок и клонирование</span></a></li>
<li class="toclevel-3 tocsection-34"><a href="#Инициализация_переменных"><span class="tocnumber">9.2.2</span> <span class="toctext">Инициализация переменных</span></a></li>
<li class="toclevel-3 tocsection-35"><a href="#Сборка_мусора"><span class="tocnumber">9.2.3</span> <span class="toctext">Сборка мусора</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-36"><a href="#Классы_и_функции"><span class="tocnumber">9.3</span> <span class="toctext">Классы и функции</span></a>
<ul>
<li class="toclevel-3 tocsection-37"><a href="#Конструкторы"><span class="tocnumber">9.3.1</span> <span class="toctext">Конструкторы</span></a></li>
<li class="toclevel-3 tocsection-38"><a href="#Статические_методы_и_поля"><span class="tocnumber">9.3.2</span> <span class="toctext">Статические методы и поля</span></a></li>
<li class="toclevel-3 tocsection-39"><a href="#Завершённость_(final)"><span class="tocnumber">9.3.3</span> <span class="toctext">Завершённость (final)</span></a></li>
<li class="toclevel-3 tocsection-40"><a href="#Абстрактность"><span class="tocnumber">9.3.4</span> <span class="toctext">Абстрактность</span></a></li>
<li class="toclevel-3 tocsection-41"><a href="#Интерфейсы"><span class="tocnumber">9.3.5</span> <span class="toctext">Интерфейсы</span></a>
<ul>
<li class="toclevel-4 tocsection-42"><a href="#Маркерные_интерфейсы"><span class="tocnumber">9.3.5.1</span> <span class="toctext">Маркерные интерфейсы</span></a></li>
</ul>
</li>
<li class="toclevel-3 tocsection-43"><a href="#Шаблоны_в_Java_(generics)"><span class="tocnumber">9.3.6</span> <span class="toctext">Шаблоны в Java (generics)</span></a></li>
<li class="toclevel-3 tocsection-44"><a href="#Проверка_принадлежности_к_классу"><span class="tocnumber">9.3.7</span> <span class="toctext">Проверка принадлежности к классу</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-45"><a href="#Обработка_ошибок"><span class="tocnumber">9.4</span> <span class="toctext">Обработка ошибок</span></a></li>
<li class="toclevel-2 tocsection-46"><a href="#Пространство_имён"><span class="tocnumber">9.5</span> <span class="toctext">Пространство имён</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-47"><a href="#Примеры_программ"><span class="tocnumber">10</span> <span class="toctext">Примеры программ</span></a></li>
<li class="toclevel-1 tocsection-48"><a href="#Средства_разработки_ПО"><span class="tocnumber">11</span> <span class="toctext">Средства разработки ПО</span></a></li>
<li class="toclevel-1 tocsection-49"><a href="#См._также"><span class="tocnumber">12</span> <span class="toctext">См. также</span></a></li>
<li class="toclevel-1 tocsection-50"><a href="#Примечания"><span class="tocnumber">13</span> <span class="toctext">Примечания</span></a>
<ul>
<li class="toclevel-2 tocsection-51"><a href="#Комментарии"><span class="tocnumber">13.1</span> <span class="toctext">Комментарии</span></a></li>
<li class="toclevel-2 tocsection-52"><a href="#Документация"><span class="tocnumber">13.2</span> <span class="toctext">Документация</span></a></li>
<li class="toclevel-2 tocsection-53"><a href="#Источники"><span class="tocnumber">13.3</span> <span class="toctext">Источники</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-54"><a href="#Литература"><span class="tocnumber">14</span> <span class="toctext">Литература</span></a></li>
<li class="toclevel-1 tocsection-55"><a href="#Ссылки"><span class="tocnumber">15</span> <span class="toctext">Ссылки</span></a></li>
</ul>
                        
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
		<div id="mw-content-text" lang="ru" dir="ltr" class="mw-content-ltr"><div class="mw-parser-output"><table class="infobox" style="" data-name="Язык программирования"><tbody><tr><th colspan="2" class="infobox-above" style="background:#cfe3ff;">Java</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span class="no-wikidata" data-wikidata-property-id="P154"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Java_logo.svg" class="image"><img alt="Java logo.svg" src="//upload.wikimedia.org/wikipedia/ru/thumb/3/39/Java_logo.svg/43px-Java_logo.svg.png" decoding="async" width="43" height="80" srcset="//upload.wikimedia.org/wikipedia/ru/thumb/3/39/Java_logo.svg/65px-Java_logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/ru/thumb/3/39/Java_logo.svg/87px-Java_logo.svg.png 2x" data-file-width="300" data-file-height="550" /></a></span> </td></tr>
<tr>
<th class="plainlist">Класс языка</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P31" data-wikidata-claim-id="Q251$44cbdd15-4a22-004d-87eb-efe1972532c4"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9C%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BF%D0%B0%D1%80%D0%B0%D0%B4%D0%B8%D0%B3%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Мультипарадигмальный язык программирования">мультипарадигмальный язык программирования</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P31" data-wikidata-claim-id="Q251$19453917-41e0-f987-3108-049104b483eb"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%AF%D0%B7%D1%8B%D0%BA+JVM&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q56062429&amp;preloadparams%5B%5D=%D0%AF%D0%B7%D1%8B%D0%BA+JVM&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">язык JVM</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q56062429" class="extiw" title="d:Q56062429">[d]</a></sup></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P31" data-wikidata-claim-id="Q251$c511223f-4458-15c6-61de-c2c4439efed1"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%AF%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Язык программирования">язык программирования</a></span></span></td>
</tr>
<tr>
<th class="plainlist">Появился в</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P571" data-wikidata-claim-id="Q251$3657ba48-4edf-6a66-5273-5fa785e3e6c8"><span class="wikidata-snak wikidata-main-snak"><span class="nowrap"><a href="/wiki/23_%D0%BC%D0%B0%D1%8F" title="23 мая">23 мая</a> <a href="/wiki/1995_%D0%B3%D0%BE%D0%B4" title="1995 год">1995</a></span></span></span></td>
</tr>
<tr>
<th class="plainlist">Автор</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P287" data-wikidata-claim-id="q251$5c0c3e73-42b5-5d2b-2a12-565b67fc10bb"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%93%D0%BE%D1%81%D0%BB%D0%B8%D0%BD%D0%B3,_%D0%94%D0%B6%D0%B5%D0%B9%D0%BC%D1%81" title="Гослинг, Джеймс">Джеймс Гослинг</a></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P287" data-wikidata-claim-id="q251$33581cb9-47b2-d23a-5c05-8913c32f4057"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Sun_Microsystems" title="Sun Microsystems">Sun Microsystems</a></span></span></td>
</tr>
<tr>
<th class="plainlist">Разработчик</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="q251$D03E0133-2A59-41BB-9FBB-B7801506EA6A"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Sun_Microsystems" title="Sun Microsystems">Sun Microsystems</a></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="q251$e84f27d0-420f-420d-ea73-e179c370fdc3"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Oracle" title="Oracle">Oracle</a></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A0%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8_%D1%84%D0%B0%D0%B9%D0%BB%D0%B0" title="Расширение имени файла">Расширение</a> файлов</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q251$f5f4ba43-481e-392d-a8ad-b03661d4e67d"><span class="wikidata-snak wikidata-main-snak"><code>.java</code></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q251$891f3d61-4c4f-c5aa-2f52-9a86d2b4bb34"><span class="wikidata-snak wikidata-main-snak"><code>.class</code></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q251$9755a256-47cd-4c82-e471-3a515a599405"><span class="wikidata-snak wikidata-main-snak"><code>.jar</code></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q251$6c31a438-4f78-3185-2508-fc90262bb428"><span class="wikidata-snak wikidata-main-snak"><code>.jad</code></span></span> или <span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q251$82653ffb-4c54-a187-3c17-d3e4ae3c30fe"><span class="wikidata-snak wikidata-main-snak"><code>.jmod</code></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D1%82%D0%B0%D0%B4%D0%B8%D0%B8_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Стадии разработки программного обеспечения">Выпуск</a></th>
<td class="plainlist">
<ul><li><span class="wikidata-claim" data-wikidata-property-id="P348" data-wikidata-claim-id="Q251$f3850c03-46fc-d7a6-fa88-e05b324932d6"><span class="wikidata-snak wikidata-main-snak">Java Standard Edition 10</span><sup id="cite_ref-_255c477a7728c8e3_1-0" class="reference"><a href="#cite_note-_255c477a7728c8e3-1">&#91;1&#93;</a></sup></span></li></ul></td>
</tr>
<tr>
<th class="plainlist">Испытал влияние</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$57EA6E53-67C3-43DE-BED5-59F76A87C9CD"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/C%2B%2B" title="C++">C++</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$5A73B8E8-EF25-42D0-B6A7-42F8A1E3F5EC"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$EF037641-93D8-4563-9104-7EB540ADFFE8"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%90%D0%B4%D0%B0_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Ада (язык программирования)">Ада</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$8E7DF780-72BB-4652-A9C2-C74E86CEDA03"><span class="wikidata-snak wikidata-main-snak"><span class="iw" data-title="Simula 67">Simula 67<sup class="plainlinks noprint"><a class="external text" href="https://www.wikidata.org/wiki/Q10371720?uselang=ru">[d&#x5d;</a></sup></span></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$6ACEDF25-C2F7-4B76-A124-E05544615AB8"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Smalltalk" title="Smalltalk">Smalltalk</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$8503bd73-48c2-ffea-6643-e3a8cfee2696"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Objective-C" title="Objective-C">Objective-C</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$d6d4b282-4a16-8293-e2a5-38b8ff7c7e87"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Object_Pascal" title="Object Pascal">Object Pascal</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$aa02500a-4c5c-f037-0226-85d1002222db"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9E%D0%B1%D0%B5%D1%80%D0%BE%D0%BD_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Оберон (язык программирования)">Оберон</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$217c9d7d-4107-1d7a-7bf1-1a5e7ba90888"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Eiffel" title="Eiffel">Eiffel</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$292144d2-47ad-1c6a-4377-378ba3786792"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9C%D0%BE%D0%B4%D1%83%D0%BB%D0%B0-3" title="Модула-3">Модула-3</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$60007f14-43e6-80e0-7e31-27bbd1bb3542"><span class="wikidata-snak wikidata-main-snak"><span class="iw" data-title="Mesa">Mesa<sup class="plainlinks noprint"><a class="external text" href="https://www.wikidata.org/wiki/Q1042397?uselang=ru">[d&#x5d;</a></sup></span></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$ddc01ad8-455b-9986-5328-e83632c0b215"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A1%D0%B8%D0%BC%D1%83%D0%BB%D0%B0" title="Симула">Симула</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$04bff15a-ecb7-4f99-986b-9ad0ca31e72e"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/C_Sharp" title="C Sharp">C#</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$80dc9a8a-46f2-2f97-6e8d-ab07f3d43577"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/UCSD_Pascal" title="UCSD Pascal">UCSD Pascal</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$3580add1-7ab4-4e36-9f05-0ee5d58b1770"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9E%D0%B1%D1%91%D1%80%D1%82%D0%BA%D0%B0_(%D1%82%D0%B8%D0%BF_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)" title="Обёртка (тип данных)">обёртка</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$b773c9e1-7796-4647-8354-1f585f9cf42a"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%92%D0%B0%D1%80%D0%B8%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D1%8F" title="Вариативная функция">Вариативная функция</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$c5c7072e-f421-498c-b7f8-4418beab396d"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%90%D0%BD%D0%BD%D0%BE%D1%82%D0%B0%D1%86%D0%B8%D1%8F_(Java)" title="Аннотация (Java)">аннотация Java</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$86a78477-88cf-42b8-a6a5-b349e572892a"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%92%D0%B8%D1%80%D1%82,_%D0%9D%D0%B8%D0%BA%D0%BB%D0%B0%D1%83%D1%81" title="Вирт, Никлаус">Никлаус Вирт</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$04e96ac1-303a-465b-95f9-161a79a89c55"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=Patrick+Naughton&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q3369731&amp;preloadparams%5B%5D=Patrick+Naughton&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">Patrick Naughton</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q3369731" class="extiw" title="d:Q3369731">[d]</a></sup></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q251$465d55a9-45fc-48c8-a4a5-c32aa141f049"><span class="wikidata-snak wikidata-main-snak"><span class="iw" data-title="foreach">foreach<sup class="plainlinks noprint"><a class="external text" href="https://www.wikidata.org/wiki/Q3273595?uselang=ru">[d&#x5d;</a></sup></span></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_%D0%BD%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Лицензия на программное обеспечение">Лицензия</a></th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P275" data-wikidata-claim-id="q251$85096891-D4C1-4645-BD20-620DD0F28AC8"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/GNU_General_Public_License" title="GNU General Public License">GNU GPL</a></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P275" data-wikidata-claim-id="Q251$ff5b8620-406e-ec50-ac1b-b64eb75f90be"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Java_Community_Process" title="Java Community Process">Java Community Process</a></span></span></td>
</tr>
<tr>
<th class="plainlist">Сайт</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P856" data-wikidata-claim-id="Q251$a3b21a72-40c6-cffd-4607-2ee109373f8b"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://www.java.com/">java.com</a>&#8203;&#160;<span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span></span></span></td>
</tr><tr><td colspan="2" class="infobox-below" style="background:#dcebff;;"><span class="wikidata-claim" data-wikidata-property-id="P373" data-wikidata-claim-id="Q251$284D6796-0023-4F3B-BBF6-965CCBE39FDD"><span class="wikidata-snak wikidata-main-snak"><a href="https://commons.wikimedia.org/wiki/Category:Java_(programming_language)" title="commons:Category:Java (programming language)"><img alt="Commons-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/15px-Commons-logo.svg.png" decoding="async" width="15" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/23px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></a>&#160;<a href="https://commons.wikimedia.org/wiki/Category:Java_(programming_language)" class="extiw" title="commons:Category:Java (programming language)">Медиафайлы на Викискладе</a></span></span></td></tr>
</tbody></table>
<div class="hatnote rellink dabhide">Эта статья&#160;— о&#160;языке программирования. О&#160;прикладной платформе на основе данного языка см.&#160;<a href="/wiki/Java_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%B0%D1%8F_%D0%BF%D0%BB%D0%B0%D1%82%D1%84%D0%BE%D1%80%D0%BC%D0%B0)" title="Java (программная платформа)">Java (программная платформа)</a>.</div>
<p><b>Java</b><sup id="cite_ref-2" class="reference"><a href="#cite_note-2">&#91;прим. 1&#93;</a></sup>&#160;— <a href="/wiki/%D0%A1%D0%B8%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D0%B8_%D1%81%D0%BB%D0%B0%D0%B1%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Сильная и слабая типизация">строго</a> <a href="/wiki/%D0%A1%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Статическая типизация">типизированный</a> <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Объектно-ориентированный язык программирования">объектно-ориентированный язык программирования</a>, разработанный компанией <a href="/wiki/Sun_Microsystems" title="Sun Microsystems">Sun Microsystems</a> (в последующем приобретённой компанией <a href="/wiki/Oracle" title="Oracle">Oracle</a>). Разработка ведётся сообществом, организованным через <a href="/wiki/Java_Community_Process" title="Java Community Process">Java Community Process</a>, язык и основные реализующие его технологии распространяются по лицензии <a href="/wiki/GPL" class="mw-redirect" title="GPL">GPL</a>. Права на торговую марку принадлежат корпорации Oracle.
</p><p>Приложения Java обычно <a href="/wiki/%D0%A2%D1%80%D0%B0%D0%BD%D1%81%D0%BB%D1%8F%D1%82%D0%BE%D1%80" title="Транслятор">транслируются</a> в специальный <a href="/wiki/%D0%91%D0%B0%D0%B9%D1%82-%D0%BA%D0%BE%D0%B4" title="Байт-код">байт-код</a>, поэтому они могут работать на любой компьютерной архитектуре, для которой существует реализация <a href="/wiki/Java_Virtual_Machine" title="Java Virtual Machine">виртуальной Java-машины</a>. Дата официального выпуска&#160;— 23 мая 1995 года. На 2019 год Java&#160;— один из самых популярных языков программирования<sup id="cite_ref-3" class="reference"><a href="#cite_note-3">&#91;2&#93;</a></sup><sup id="cite_ref-4" class="reference"><a href="#cite_note-4">&#91;3&#93;</a></sup>.
</p>
<div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading">Содержание</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>

</div>

<h2><span id=".D0.98.D1.81.D1.82.D0.BE.D1.80.D0.B8.D1.8F_.D1.81.D0.BE.D0.B7.D0.B4.D0.B0.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="История_создания">История создания</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=1" class="mw-editsection-visualeditor" title="Редактировать раздел «История создания»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=1" title="Редактировать раздел «История создания»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Изначально язык назывался Oak («Дуб»), разрабатывался <a href="/wiki/%D0%93%D0%BE%D1%81%D0%BB%D0%B8%D0%BD%D0%B3,_%D0%94%D0%B6%D0%B5%D0%B9%D0%BC%D1%81" title="Гослинг, Джеймс">Джеймсом Гослингом</a> для программирования бытовых электронных устройств. Из-за того, что язык с таким названием уже существовал, Oak был переименован в Java<sup id="cite_ref-5" class="reference"><a href="#cite_note-5">&#91;4&#93;</a></sup>. Назван в честь марки <a href="/wiki/%D0%9A%D0%BE%D1%84%D0%B5" title="Кофе">кофе</a> Java, которая, в свою очередь, получила наименование одноимённого острова (<a href="/wiki/%D0%AF%D0%B2%D0%B0" title="Ява">Ява</a>), поэтому на официальной эмблеме языка изображена чашка с горячим кофе. Существует и другая версия происхождения названия языка, связанная с <a href="/wiki/%D0%90%D0%BB%D0%BB%D1%8E%D0%B7%D0%B8%D1%8F" title="Аллюзия">аллюзией</a> на кофе-машину как пример бытового устройства, для программирования которого изначально язык создавался. В соответствии с этимологией в русскоязычной литературе с конца двадцатого и до первых лет двадцать первого века название языка нередко переводилось как Ява, а не транскрибировалось.
</p><p>В результате работы проекта мир увидел принципиально новое устройство, <a href="/wiki/%D0%9A%D0%B0%D1%80%D0%BC%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80" title="Карманный персональный компьютер">карманный персональный компьютер</a> Star7, который опередил своё время более чем на 10 лет, но из-за большой стоимости в 50 долларов не смог произвести переворот в мире технологии и был забыт.
</p><p>Устройство Star7 не пользовалось популярностью в отличие от языка программирования Java и его окружения. Следующим этапом жизни языка стала разработка интерактивного телевидения. В 1994 году стало очевидным, что интерактивное телевидение было ошибкой.
</p><p>С середины 1990-х годов язык стал широко использоваться для написания клиентских приложений и <a href="/wiki/%D0%A1%D0%B5%D1%80%D0%B2%D0%B5%D1%80_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5)" title="Сервер (программное обеспечение)">серверного</a> программного обеспечения. Тогда же определённое распространение получила технология <a href="/wiki/Java-%D0%B0%D0%BF%D0%BF%D0%BB%D0%B5%D1%82" title="Java-апплет">Java-апплетов</a>&#160;— графических Java-приложений, встраиваемых в веб-страницы; с развитием возможностей динамических веб-страниц в 2000-е годы технология стала применяться редко.
</p><p>В веб-разработке применяется <a href="/wiki/Spring_Framework" title="Spring Framework">Spring Framework</a>, для документирования используется утилита <a href="/wiki/Javadoc" title="Javadoc">Javadoc</a>.
</p>
<h2><span id=".D0.9E.D1.81.D0.BD.D0.BE.D0.B2.D0.BD.D1.8B.D0.B5_.D0.BE.D1.81.D0.BE.D0.B1.D0.B5.D0.BD.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0"></span><span class="mw-headline" id="Основные_особенности_языка">Основные особенности языка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=2" class="mw-editsection-visualeditor" title="Редактировать раздел «Основные особенности языка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=2" title="Редактировать раздел «Основные особенности языка»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Программы на Java <a href="/wiki/%D0%A2%D1%80%D0%B0%D0%BD%D1%81%D0%BB%D1%8F%D1%82%D0%BE%D1%80" title="Транслятор">транслируются</a> в <a href="/wiki/%D0%91%D0%B0%D0%B9%D1%82-%D0%BA%D0%BE%D0%B4_Java" title="Байт-код Java">байт-код Java</a>, выполняемый <a href="/wiki/Java_Virtual_Machine" title="Java Virtual Machine">виртуальной машиной Java</a> (JVM)&#160;— программой, обрабатывающей байтовый код и передающей инструкции оборудованию как <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BF%D1%80%D0%B5%D1%82%D0%B0%D1%82%D0%BE%D1%80" title="Интерпретатор">интерпретатор</a>.
</p>
<div class="thumb tright"><div class="thumbinner" style="width:152px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Duke_(Java_mascot)_waving.svg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Duke_%28Java_mascot%29_waving.svg/150px-Duke_%28Java_mascot%29_waving.svg.png" decoding="async" width="150" height="270" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Duke_%28Java_mascot%29_waving.svg/225px-Duke_%28Java_mascot%29_waving.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Duke_%28Java_mascot%29_waving.svg/300px-Duke_%28Java_mascot%29_waving.svg.png 2x" data-file-width="226" data-file-height="407" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Duke_(Java_mascot)_waving.svg" class="internal" title="Увеличить"></a></div>Дюк — талисман Java</div></div></div>
<p>Достоинством подобного способа выполнения программ является полная независимость байт-кода от <a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Операционная система">операционной системы</a> и <a href="/wiki/%D0%90%D0%BF%D0%BF%D0%B0%D1%80%D0%B0%D1%82%D0%BD%D0%B0%D1%8F_%D0%BF%D0%BB%D0%B0%D1%82%D1%84%D0%BE%D1%80%D0%BC%D0%B0" class="mw-redirect" title="Аппаратная платформа">оборудования</a>, что позволяет выполнять Java-приложения на любом устройстве, для которого существует соответствующая виртуальная машина. Другой важной особенностью технологии Java является гибкая система безопасности, в рамках которой исполнение программы полностью контролируется виртуальной машиной. Любые операции, которые превышают установленные полномочия программы (например, попытка несанкционированного доступа к данным или соединения с другим компьютером), вызывают немедленное прерывание.
</p><p>Часто к недостаткам концепции виртуальной машины относят снижение производительности. Ряд усовершенствований несколько увеличил скорость выполнения программ на Java:
</p>
<ul><li>применение технологии трансляции байт-кода в машинный код непосредственно во время работы программы (<a href="/wiki/JIT" class="mw-redirect" title="JIT">JIT</a>-технология) с возможностью сохранения версий класса в машинном коде,</li>
<li>обширное использование <a href="/wiki/%D0%9F%D0%BB%D0%B0%D1%82%D1%84%D0%BE%D1%80%D0%BC%D0%B5%D0%BD%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" class="mw-redirect" title="Платформенно-ориентированный код">платформенно-ориентированного кода</a> (native-код) в стандартных библиотеках,</li>
<li>аппаратные средства, обеспечивающие ускоренную обработку байт-кода (например, технология <a href="/wiki/Jazelle" title="Jazelle">Jazelle</a>, поддерживаемая некоторыми процессорами <a href="/wiki/ARM_(%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D0%B0)" title="ARM (архитектура)">архитектуры ARM</a>).</li></ul>
<p>По данным сайта shootout.alioth.debian.org, для семи разных задач время выполнения на Java составляет в среднем в полтора-два раза больше, чем для C/C++, в некоторых случаях Java быстрее, а в отдельных случаях в 7 раз медленнее<sup id="cite_ref-slow_java_6-0" class="reference"><a href="#cite_note-slow_java-6">&#91;5&#93;</a></sup>. С другой стороны, для большинства из них потребление памяти Java-машиной было в 10—30 раз больше, чем программой на C/C++. Также примечательно исследование, проведённое компанией <a href="/wiki/Google_(%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F)" title="Google (компания)">Google</a>, согласно которому отмечается существенно более низкая производительность и бо́льшее потребление памяти в тестовых примерах на Java в сравнении с аналогичными программами на <a href="/wiki/C%2B%2B" title="C++">C++</a><sup id="cite_ref-7" class="reference"><a href="#cite_note-7">&#91;6&#93;</a></sup><sup id="cite_ref-8" class="reference"><a href="#cite_note-8">&#91;7&#93;</a></sup><sup id="cite_ref-9" class="reference"><a href="#cite_note-9">&#91;8&#93;</a></sup>.
</p><p>Идеи, заложенные в концепцию и различные реализации среды виртуальной машины Java, вдохновили множество энтузиастов на расширение перечня языков, которые могли бы быть использованы для создания программ, исполняемых на виртуальной машине<sup id="cite_ref-10" class="reference"><a href="#cite_note-10">&#91;9&#93;</a></sup>. Эти идеи нашли также выражение в спецификации общеязыковой инфраструктуры <a href="/wiki/Common_Language_Infrastructure" title="Common Language Infrastructure">CLI</a>, заложенной в основу платформы <a href="/wiki/.NET_Framework" title=".NET Framework">.NET</a> компанией <a href="/wiki/Microsoft" title="Microsoft">Microsoft</a>.
</p>
<h2><span id=".D0.98.D1.81.D1.82.D0.BE.D1.80.D0.B8.D1.8F_.D0.B2.D0.B5.D1.80.D1.81.D0.B8.D0.B9"></span><span class="mw-headline" id="История_версий">История версий</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=3" class="mw-editsection-visualeditor" title="Редактировать раздел «История версий»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=3" title="Редактировать раздел «История версий»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="hatnote">Основная статья: <b><a href="/wiki/%D0%98%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%8F_%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D0%B9_Java" class="mw-disambig" title="История версий Java">История версий Java</a></b></div>
<h3><span class="mw-headline" id="JDK_1.0">JDK 1.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=4" class="mw-editsection-visualeditor" title="Редактировать раздел «JDK 1.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=4" title="Редактировать раздел «JDK 1.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Разработка Java началась в 1990 году, первая официальная версия&#160;— Java 1.0,&#160;— была выпущена только 21 января 1996 года.
</p>
<h3><span class="mw-headline" id="JDK_1.1">JDK 1.1</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=5" class="mw-editsection-visualeditor" title="Редактировать раздел «JDK 1.1»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=5" title="Редактировать раздел «JDK 1.1»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Вторая версия была выпущена 19 февраля 1997 года<sup id="cite_ref-11" class="reference"><a href="#cite_note-11">&#91;10&#93;</a></sup>.
</p>
<ul><li>Библиотека Accessibility.</li>
<li>Java 2D.</li>
<li>Поддержка технологии <a href="/wiki/Drag-and-drop" title="Drag-and-drop">drag-and-drop</a>.</li>
<li>Полная поддержка <a href="/wiki/Unicode" class="mw-redirect" title="Unicode">Unicode</a>, включая поддержку ввода на японском, китайском и корейском языках.</li>
<li>Поддержка воспроизведения аудиофайлов нескольких популярных форматов.</li>
<li>Полная поддержка технологии <a href="/wiki/CORBA" title="CORBA">CORBA</a>.</li>
<li>JIT-компилятор, улучшенная производительность.</li>
<li>Усовершенствования инструментальных средств JDK, в том числе поддержка профилирования Java-программ.</li></ul>
<h3><span class="mw-headline" id="J2SE_1.2">J2SE 1.2</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=6" class="mw-editsection-visualeditor" title="Редактировать раздел «J2SE 1.2»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=6" title="Редактировать раздел «J2SE 1.2»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Дата выпуска 8 декабря 1998 года<sup id="cite_ref-12" class="reference"><a href="#cite_note-12">&#91;11&#93;</a></sup>. Кодовое имя Playground.
В данном случае встречается путаница. Выпускались книги, например, Beginning Java 2 by Ivor Horton (Mar 1999), фактически по J2SE 1.2 (бывшее название&#160;— Java 2). Вместе с тем по сей день такие книги публикуются, например: Х.&#160;М.&#160;Дейтел, П. Дж. Дейтел, С.&#160;И.&#160;Сантри. Технологии программирования на Java 2. Распределённые приложения (2011).
</p><p>В то время, когда, как известно, Java 2 была исторически заменена следующими релизами, подобные названия книг дезориентируют в понимании, о какой же версии Java они написаны на самом деле. Если J2SE 1.2 принято считать за Java 2, а авторы книг за Java 2 принимают JDK 7, это приводит к полной путанице.
</p>
<h3><span class="mw-headline" id="J2SE_1.3">J2SE 1.3</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=7" class="mw-editsection-visualeditor" title="Редактировать раздел «J2SE 1.3»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=7" title="Редактировать раздел «J2SE 1.3»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Дата выпуска 8 мая 2000 года. Кодовое имя Kestrel.
</p>
<h3><span class="mw-headline" id="J2SE_1.4">J2SE 1.4</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=8" class="mw-editsection-visualeditor" title="Редактировать раздел «J2SE 1.4»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=8" title="Редактировать раздел «J2SE 1.4»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Дата выпуска 6 февраля 2002 года. Кодовое имя Merlin.
</p>
<h3><span class="mw-headline" id="J2SE_5.0">J2SE 5.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=9" class="mw-editsection-visualeditor" title="Редактировать раздел «J2SE 5.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=9" title="Редактировать раздел «J2SE 5.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Спецификация Java 5.0 была выпущена 30 сентября 2004 года, кодовое имя Tiger. C этой версии изменена официальная индексация, вместо Java 1.5 правильнее называть Java 5.0. Внутренняя же индексация Sun осталась прежней&#160;— 1.x. Минорные изменения теперь включаются без изменения индексации, для этого используется слово «Update» или буква «u», например, Java Development Kit 5.0 Update 22. Предполагается, что в обновления могут входить как исправления ошибок, так и небольшие добавления в API, JVM.
</p><p>В данной версии разработчики внесли в язык целый ряд принципиальных дополнений:
</p>
<ul><li><a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D1%87%D0%B8%D1%81%D0%BB%D0%B8%D0%BC%D1%8B%D0%B9_%D1%82%D0%B8%D0%BF" class="mw-redirect" title="Перечислимый тип">Перечислимые типы</a> (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">enum</span>). Ранее отсутствовавшие в Java типы оформлены по аналогии с <a href="/wiki/C%2B%2B" title="C++">C++</a>, но при этом имеют ряд дополнительных возможностей.
<ul><li>Перечислимый тип является полноценным классом Java, то есть может иметь конструктор, поля, методы, в том числе скрытые и абстрактные.</li>
<li>Перечисление может реализовывать <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_(%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Интерфейс (объектно-ориентированное программирование)">интерфейсы</a>.</li>
<li>Для перечислений имеются встроенные методы, дающие возможность получения значений типа по имени, символьных значений, соответствующих именам, преобразования между номером и значением, проверки типа на то, что он является перечислимым.</li></ul></li>
<li><a href="/wiki/%D0%90%D0%BD%D0%BD%D0%BE%D1%82%D0%B0%D1%86%D0%B8%D1%8F_(Java)" title="Аннотация (Java)">Аннотации</a>&#160;— возможность добавления в текст программы метаданных, непосредственно не влияющих на выполнение кода, но допускающих использование для получения различных сведений о коде и его исполнении. Одновременно выпущен инструментарий для использования аннотированного кода. Одно из применений аннотаций&#160;— упрощение создания тестовых модулей для Java-кода.</li>
<li>Средства <a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Обобщённое программирование">обобщённого программирования</a> (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">generics</span>)&#160;— механизм, аналогичный средствам языков <a href="/wiki/%D0%90%D0%B4%D0%B0_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Ада (язык программирования)">Ada</a><sup id="cite_ref-13" class="reference"><a href="#cite_note-13">&#91;12&#93;</a></sup> и <a href="/wiki/Eiffel" title="Eiffel">Eiffel</a> (позже также появились и в C#, принципиально отличаются от шаблонов C++), дающий возможность создавать классы и методы с полями и параметрами произвольного объектного типа. С использованием данного механизма реализованы новые версии коллекций стандартной библиотеки Java.</li>
<li>Методы с неопределённым числом параметров.</li>
<li>Autoboxing/Unboxing&#160;— автоматическое преобразование между скалярными типами Java и соответствующими типами-обёртками (например, между int&#160;— Integer). Наличие такой возможности сокращает код, поскольку исключает необходимость выполнения явных преобразований типов в очевидных случаях.</li>
<li>Разрешён импорт статических полей и методов.</li>
<li>В язык введён цикл по коллекции объектов (итератор, <a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">foreach</span>).</li>
<li>Было введено использование <a href="/wiki/Javadoc" title="Javadoc">Javadoc</a>-комментариев, которые используются для автоматического оформления документации по комментариям в исходном коде.</li></ul>
<h3><span class="mw-headline" id="Java_SE_6">Java SE 6</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=10" class="mw-editsection-visualeditor" title="Редактировать раздел «Java SE 6»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=10" title="Редактировать раздел «Java SE 6»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Релиз версии состоялся 11 декабря 2006 года, кодовое имя Mustang. Изменена официальная индексация&#160;— вместо ожидаемой 6.0 версия значится как 6. Минорные изменения, как и в Java 5.0, вносятся в обычные обновления версии, например, Java Standard Edition Development Kit 6 Update 27. Внесены следующие изменения:
</p>
<ul><li>Коллекции&#160;— добавлены интерфейсы для организации очереди, работающей с двух сторон коллекции; организовывающие поиск по ближайшему соответствию; блокирующие себя во время ожидания элемента. Организованы новые классы, реализующие перечисленные интерфейсы.</li>
<li>Добавлена поддержка японского императорского календаря (наряду с уже существующими григорианским и буддийским календарями).</li>
<li>Доступны классы-потоки для чтения и передачи сжатых данных, с возможностью передачи их по сети. Сняты ограничения на количество файлов в архиве (ранее 64 Кб), длину названия файла (ранее 256 символов) и количество одновременно открытых файлов (ранее 2000 шт).</li>
<li>Организована система управления кэшем и добавлена поддержка параметра «no-cache» в HTTP-запросе.</li>
<li>JConsole, графический мониторинг JVM, стала официально поддерживаемой утилитой.</li>
<li>Java HTTP Server, позволяет создать полноценный HTTP-сервер, с минимально необходимыми функциональными свойствами.</li>
<li>Повысилась скорость вычислений на 70&#160;%, скорость операций ввода-вывода возросла в два раза<sup id="cite_ref-14" class="reference"><a href="#cite_note-14">&#91;13&#93;</a></sup>.</li>
<li>Swing&#160;— улучшена работоспособность OpenGL и DirectX; обработка текста на LCD; добавлен GifWriter, для работы с файлами формата <a href="/wiki/GIF" title="GIF">GIF</a>.</li>
<li>Исправлено большое количество ошибок.</li></ul>
<h3><span class="mw-headline" id="Java_FX">Java FX</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=11" class="mw-editsection-visualeditor" title="Редактировать раздел «Java FX»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=11" title="Редактировать раздел «Java FX»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Дата выпуска 8 октября 2013 года.
</p><p>JavaFX 2.2 вошёл в состав Java SE 7 update 6<sup id="cite_ref-15" class="reference"><a href="#cite_note-15">&#91;14&#93;</a></sup>. С 11-й версии модуль поставляется отдельно от JDK<sup id="cite_ref-16" class="reference"><a href="#cite_note-16">&#91;15&#93;</a></sup>.
</p>
<h3><span class="mw-headline" id="Java_ME_Embedded">Java ME Embedded</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=12" class="mw-editsection-visualeditor" title="Редактировать раздел «Java ME Embedded»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=12" title="Редактировать раздел «Java ME Embedded»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Дата выпуска 10 октября 2013 года. Кодовое имя Micro Edition.
</p>
<h3><span class="mw-headline" id="Java_SE_7">Java SE 7</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=13" class="mw-editsection-visualeditor" title="Редактировать раздел «Java SE 7»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=13" title="Редактировать раздел «Java SE 7»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Релиз версии состоялся 28 июля 2011 года, кодовое имя Dolphin<sup id="cite_ref-17" class="reference"><a href="#cite_note-17">&#91;16&#93;</a></sup>. В финальную версию Java Standard Edition 7 не были включены все ранее запланированные изменения. Согласно плану развития (план «Б»)<sup id="cite_ref-18" class="reference"><a href="#cite_note-18">&#91;17&#93;</a></sup>, включение нововведений будет разбито на две части: Java Standard Edition 7 (без <a href="/wiki/%D0%9B%D1%8F%D0%BC%D0%B1%D0%B4%D0%B0-%D0%B8%D1%81%D1%87%D0%B8%D1%81%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5" title="Лямбда-исчисление">лямбда-исчисления</a>, проекта Jigsaw, и части улучшений проекта Coin<sup id="cite_ref-19" class="reference"><a href="#cite_note-19">&#91;18&#93;</a></sup>) и Java Standard Edition 8 (все остальное), намеченный на конец 2012 года.
</p><p>В новой версии, получившей название Java Standard Edition 7 (Java Platform, Standard Edition 7), помимо исправления большого количества ошибок, было представлено несколько новшеств. Так, например, в качестве эталонной реализации Java Standard Edition 7 использован не проприетарный пакет <a href="/wiki/JDK" class="mw-redirect" title="JDK">JDK</a>, а его открытая реализация <a href="/wiki/OpenJDK" title="OpenJDK">OpenJDK</a>, а сам релиз новой версии платформы готовился при тесном сотрудничестве инженеров <a href="/wiki/Oracle" title="Oracle">Oracle</a> с участниками мировой экосистемы Java, комитетом <a href="/wiki/JCP" class="mw-redirect" title="JCP">JCP</a> (Java Community Process) и сообществом <a href="/wiki/OpenJDK" title="OpenJDK">OpenJDK</a>. Все поставляемые Oracle бинарные файлы эталонной реализации Java Standard Edition 7 собраны на основе кодовой базы <a href="/wiki/OpenJDK" title="OpenJDK">OpenJDK</a>, сама эталонная реализация полностью открыта под лицензией <a href="/wiki/GPLv2" class="mw-redirect" title="GPLv2">GPLv2</a> с исключениями <a href="/wiki/GNU" title="GNU">GNU</a> ClassPath, разрешающими динамическое связывание с проприетарными продуктами. К другим нововведениям относится интеграция набора небольших языковых улучшений Java, развиваемых в рамках проекта Coin, добавлена поддержка языков программирования с динамической типизацией, таких, как <a href="/wiki/Ruby" title="Ruby">Ruby</a>, <a href="/wiki/Python" title="Python">Python</a> и <a href="/wiki/JavaScript" title="JavaScript">JavaScript</a>, поддержка загрузки классов по <a href="/wiki/URL" title="URL">URL</a>, обновлённый <a href="/wiki/XML" title="XML">XML</a>-стек, включающий <a href="/wiki/JAXP" class="mw-redirect" title="JAXP">JAXP</a> 1.4, <a href="/wiki/JAXB" class="mw-redirect" title="JAXB">JAXB</a> 2.2a и <a href="/wiki/JAX-WS" class="mw-redirect" title="JAX-WS">JAX-WS</a> 2.2 и другие<sup id="cite_ref-20" class="reference"><a href="#cite_note-20">&#91;19&#93;</a></sup>.
</p><p>За 5 дней до выхода релиза Java Standard Edition 7 было обнаружено несколько серьёзных ошибок в горячей оптимизации циклов, которая включена по умолчанию и приводит виртуальную машину Java к краху. Специалисты Oracle найденные ошибки за столь короткий срок исправить не могли, но пообещали, что они будут исправлены во втором обновлении (Java 7 Update 2) и частично в первом<sup id="cite_ref-21" class="reference"><a href="#cite_note-21">&#91;20&#93;</a></sup>.
</p>
<h4><span id=".D0.A1.D0.BF.D0.B8.D1.81.D0.BE.D0.BA_.D0.BD.D0.BE.D0.B2.D0.BE.D0.B2.D0.B2.D0.B5.D0.B4.D0.B5.D0.BD.D0.B8.D0.B9"></span><span class="mw-headline" id="Список_нововведений">Список нововведений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=14" class="mw-editsection-visualeditor" title="Редактировать раздел «Список нововведений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=14" title="Редактировать раздел «Список нововведений»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li>Поддержка динамически-типизированных языков (InvokeDynamic)&#160;— расширение JVM (семантики байт-кода), языка Java<sup id="cite_ref-22" class="reference"><a href="#cite_note-22">&#91;21&#93;</a></sup> для поддержки динамически-типизированных языков.</li>
<li>Строгая проверка class-файлов&#160;— class-файлы версии 51 (Java Standard Edition 7) или более поздней версии должны быть проверены typechecking-верификатором; JVM не должна переключаться на старый верификатор.</li>
<li>Изменение синтаксиса языка Java (Project Coin)&#160;— частичные изменения в языке Java, предназначенные для упрощения общих задач программирования:
<ul><li>Использование класса <code>String</code><sup id="cite_ref-23" class="reference"><a href="#cite_note-23">&#91;док. 1&#93;</a></sup> в блоке <code>switch</code>.</li>
<li>Закрытие используемых ресурсов в блоке <code>try</code> (try-with-resources)&#160;— работает при использовании интерфейса <code>AutoClosable</code><sup id="cite_ref-24" class="reference"><a href="#cite_note-24">&#91;док. 2&#93;</a></sup>.</li>
<li>Объединённая обработка исключений в блоке <code>catch</code> (multi-catch exceptions)&#160;— перечисление обрабатываемых исключений в <code>catch</code> (… | … | …).</li>
<li>Повторное выбрасывание исключений (rethrowing exceptions)&#160;— передача возникшего исключения «вверх» по <a href="/wiki/%D0%A1%D1%82%D0%B5%D0%BA_%D0%B2%D1%8B%D0%B7%D0%BE%D0%B2%D0%BE%D0%B2" title="Стек вызовов">стеку вызовов</a>.</li>
<li>Подчёркивания в числовых литералах для лучшего восприятия больших чисел.</li>
<li>Изменение вывода типа в Java generic при создании объекта.</li>
<li>Использование двоичных чисел (binary literals)&#160;— <a href="/wiki/%D0%9F%D1%80%D0%B5%D1%84%D0%B8%D0%BA%D1%81_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" class="mw-redirect" title="Префикс (информатика)">префикс</a> <code>0b</code> укажет, что используется двоичное число.</li>
<li>Упрощение вызова методов varargs&#160;— уменьшение предупреждений при вызове метода с переменным числом входящих переменных.</li></ul></li>
<li>Модификация загрузчика классов (class-loader)&#160;— избежание тупиковых ситуаций в неиерархической топологии загрузки классов.</li>
<li>Закрытие ресурсов, открытых <code>URLClassLoader</code><sup id="cite_ref-25" class="reference"><a href="#cite_note-25">&#91;док. 3&#93;</a></sup>.</li>
<li>Обновление коллекций (JSR 166).</li>
<li>Поддержка Unicode 6.0.</li>
<li>Отделение языка пользователя и языка пользовательского интерфейса&#160;— обновление обработки языков для отделения локали от языка пользовательского интерфейса.</li>
<li>Новые интерфейсы I/O для платформы Java (nio.2).</li>
<li>Использование JDBC 4.1 и Rowset 1.1.</li>
<li>… (не закончено)</li></ul>
<h3><span class="mw-headline" id="Java_SE_8">Java SE 8</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=15" class="mw-editsection-visualeditor" title="Редактировать раздел «Java SE 8»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=15" title="Редактировать раздел «Java SE 8»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Релиз версии состоялся 19 марта 2014 года. Кодовое имя Octopus.
</p>
<h4><span id=".D0.A1.D0.BF.D0.B8.D1.81.D0.BE.D0.BA_.D0.BD.D0.BE.D0.B2.D0.BE.D0.B2.D0.B2.D0.B5.D0.B4.D0.B5.D0.BD.D0.B8.D0.B9_2"></span><span class="mw-headline" id="Список_нововведений_2">Список нововведений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=16" class="mw-editsection-visualeditor" title="Редактировать раздел «Список нововведений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=16" title="Редактировать раздел «Список нововведений»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li>Полноценная поддержка <a href="/wiki/%D0%9B%D1%8F%D0%BC%D0%B1%D0%B4%D0%B0-%D0%B2%D1%8B%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Лямбда-выражения">лямбда-выражений</a>.</li>
<li>Ключевое слово <code>default</code> в интерфейсах для поддержки функциональности по умолчанию.</li>
<li>Статические методы в интерфейсах.</li>
<li>Ссылки на методы и конструкторы<sup id="cite_ref-26" class="reference"><a href="#cite_note-26">&#91;22&#93;</a></sup><sup id="cite_ref-27" class="reference"><a href="#cite_note-27">&#91;23&#93;</a></sup>.</li>
<li>Функциональные интерфейсы (<a href="/wiki/%D0%9F%D1%80%D0%B5%D0%B4%D0%B8%D0%BA%D0%B0%D1%82" title="Предикат">предикаты</a>, поставщики и&#160;т.&#160;д.)</li>
<li>Потоки (stream) для работы с коллекциями.</li>
<li>Новый API для работы с датами.</li>
<li>… (не закончено)</li></ul>
<h3><span class="mw-headline" id="Java_SE_9">Java SE 9</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=17" class="mw-editsection-visualeditor" title="Редактировать раздел «Java SE 9»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=17" title="Редактировать раздел «Java SE 9»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В связи со сложностями в реализации модульной системы в рамках проекта Jigsaw, релиз версии, первоначально запланированный 22 сентября <a href="/wiki/2016_%D0%B3%D0%BE%D0%B4" title="2016 год">2016 года</a>, несколько раз откладывался: сначала дата была перенесена на 23 марта <a href="/wiki/2017_%D0%B3%D0%BE%D0%B4" title="2017 год">2017 года</a>, потом&#160;— на 27 июля 2017 года, а затем&#160;— на 21 сентября 2017 года<sup id="cite_ref-28" class="reference"><a href="#cite_note-28">&#91;24&#93;</a></sup><sup id="cite_ref-29" class="reference"><a href="#cite_note-29">&#91;25&#93;</a></sup><sup id="cite_ref-30" class="reference"><a href="#cite_note-30">&#91;26&#93;</a></sup>.
</p><p>Последняя дата стала официальной датой релиза версии<sup id="cite_ref-31" class="reference"><a href="#cite_note-31">&#91;27&#93;</a></sup>.
</p>
<h4><span id=".D0.A1.D0.BF.D0.B8.D1.81.D0.BE.D0.BA_.D0.BD.D0.BE.D0.B2.D0.BE.D0.B2.D0.B2.D0.B5.D0.B4.D0.B5.D0.BD.D0.B8.D0.B9_3"></span><span class="mw-headline" id="Список_нововведений_3">Список нововведений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=18" class="mw-editsection-visualeditor" title="Редактировать раздел «Список нововведений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=18" title="Редактировать раздел «Список нововведений»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li>Интеграция Jigsaw, в рамках которого разработана модульная система для платформы Java 9 и применена к JDK 9<sup id="cite_ref-32" class="reference"><a href="#cite_note-32">&#91;28&#93;</a></sup>.</li>
<li>Обновление Process API для улучшения взаимодействия с процессами операционной системы. Обновление мотивировано тем, что разработчикам зачастую приходилось писать платформозависимый код для таких задач<sup id="cite_ref-33" class="reference"><a href="#cite_note-33">&#91;29&#93;</a></sup>.</li>
<li>Временно экспериментальный<sup id="cite_ref-:0_34-0" class="reference"><a href="#cite_note-:0-34">&#91;30&#93;</a></sup><sup id="cite_ref-35" class="reference"><a href="#cite_note-35">&#91;31&#93;</a></sup> новый HTTP-клиент с поддержкой <a href="/wiki/HTTP/2" title="HTTP/2">HTTP/2</a> и веб-сокетов; предназначен заменить устаревший класс <code>HttpURLConnection</code><sup id="cite_ref-36" class="reference"><a href="#cite_note-36">&#91;док. 4&#93;</a></sup><sup id="cite_ref-:0_34-1" class="reference"><a href="#cite_note-:0-34">&#91;30&#93;</a></sup>.</li>
<li>Сжатые строки: если содержимое строки позволяет, она может кодироваться в <a href="/wiki/ISO_8859-1" title="ISO 8859-1">Latin-1</a> (один байт на символ); выбор кодировки конкретного экземпляра класса <code>String</code> отображается в значении переменной-<a href="/wiki/%D0%A4%D0%BB%D0%B0%D0%B3_(%D0%BA%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%BD%D0%B0%D1%8F_%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B0)" title="Флаг (компьютерная техника)">флага</a>, которая теперь есть у всех строк.<sup id="cite_ref-37" class="reference"><a href="#cite_note-37">&#91;32&#93;</a></sup></li>
<li>Поддержка указанных в <a rel="nofollow" class="external text" href="https://nvlpubs.nist.gov/nistpubs/FIPS/NIST.FIPS.202.pdf">NIST FIPS 202</a> алгоритмов хеширования <a href="/wiki/SHA-3" title="SHA-3">SHA-3</a>, кроме SHAKE128 и SHAKE256. Алгоритмы использования SHA-3 в качестве основы для других криптографических функций не реализованы в силу отсутствия соответствующих стандартов<sup id="cite_ref-38" class="reference"><a href="#cite_note-38">&#91;33&#93;</a></sup>.</li>
<li>Улучшены средства для пометки <a href="/wiki/Deprecation" title="Deprecation">устаревшего</a> API. В аннотацию <code>@Deprecated</code> добавлен параметр, позволяющий указывать версию программы, с которой использование отмеченного элемента не рекомендуется, а также&#160;— параметр, позволяющий указать, что запланировано удаление элемента в какой-либо из будущих версий<sup id="cite_ref-39" class="reference"><a href="#cite_note-39">&#91;34&#93;</a></sup>.</li>
<li>Поддержка GTK+ 3 на Linux<sup id="cite_ref-40" class="reference"><a href="#cite_note-40">&#91;35&#93;</a></sup>.</li></ul>
<h3><span class="mw-headline" id="Java_SE_10">Java SE 10</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=19" class="mw-editsection-visualeditor" title="Редактировать раздел «Java SE 10»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=19" title="Редактировать раздел «Java SE 10»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Дата релиза: 20 марта 2018 года.<sup id="cite_ref-Java-10-032018_41-0" class="reference"><a href="#cite_note-Java-10-032018-41">&#91;36&#93;</a></sup>
</p>
<h4><span id=".D0.A1.D0.BF.D0.B8.D1.81.D0.BE.D0.BA_.D0.BD.D0.BE.D0.B2.D0.BE.D0.B2.D0.B2.D0.B5.D0.B4.D0.B5.D0.BD.D0.B8.D0.B9_4"></span><span class="mw-headline" id="Список_нововведений_4">Список нововведений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=20" class="mw-editsection-visualeditor" title="Редактировать раздел «Список нововведений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=20" title="Редактировать раздел «Список нововведений»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Официальный частичный список нововведений и план релиза <a rel="nofollow" class="external text" href="http://openjdk.java.net/projects/jdk/10/">расположен на сайте OpenJDK</a>.
</p>
<ul><li><a href="/wiki/%D0%92%D1%8B%D0%B2%D0%BE%D0%B4_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Вывод типов">Вывод типов</a> локальных переменных, помеченных с помощью ключевого слова <code>var</code><sup id="cite_ref-42" class="reference"><a href="#cite_note-42">&#91;37&#93;</a></sup>.</li>
<li>Создание прозрачного интерфейса сборщика мусора для упрощения разработки новых сборщиков<sup id="cite_ref-43" class="reference"><a href="#cite_note-43">&#91;38&#93;</a></sup>.</li>
<li>Уменьшено время задержек многопоточного сборщика мусора G1 за счёт реализации параллельного полного цикла сборки мусора<sup id="cite_ref-44" class="reference"><a href="#cite_note-44">&#91;39&#93;</a></sup>.</li>
<li>Возможность выполнять <a href="/wiki/Callback_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Callback (программирование)">функции обратного вызова</a> на потоках, не делая глобальных блокировок<sup id="cite_ref-45" class="reference"><a href="#cite_note-45">&#91;40&#93;</a></sup> в рамках всех потоков<sup id="cite_ref-46" class="reference"><a href="#cite_note-46">&#91;41&#93;</a></sup>.</li>
<li>Поддержка символов из новых расширений Unicode: cu (тип валюты), fw (первый день недели), rg (двухбуквенные коды стран и регионов), tz (часовой пояс)<sup id="cite_ref-47" class="reference"><a href="#cite_note-47">&#91;42&#93;</a></sup>.</li>
<li><a href="/wiki/HotSpot" title="HotSpot">HotSpot VM</a> теперь может выделять память <a href="/wiki/%D0%9A%D1%83%D1%87%D0%B0_(%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C)" title="Куча (память)">кучи</a> для объектов на альтернативных устройствах <a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C" title="Оперативная память">оперативной памяти</a>, в том числе тех, которые обладают <a href="/wiki/%D0%AD%D0%BD%D0%B5%D1%80%D0%B3%D0%BE%D0%BD%D0%B5%D0%B7%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%B0%D1%8F_%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C" title="Энергонезависимая память">энергонезависимой памятью</a>, как, например, накопители <a href="/wiki/3D_XPoint" title="3D XPoint">Intel Optane Memory</a><sup id="cite_ref-48" class="reference"><a href="#cite_note-48">&#91;43&#93;</a></sup>.</li>
<li>Новый экспериментальный <a href="/wiki/JIT-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%86%D0%B8%D1%8F" title="JIT-компиляция">JIT-компилятор</a> Graal, предоставляющий возможности <a href="/wiki/AOT-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%86%D0%B8%D1%8F" title="AOT-компиляция">Ahead-of-Time</a> компиляции; по умолчанию отключён, работает только на Linux/x64<sup id="cite_ref-49" class="reference"><a href="#cite_note-49">&#91;44&#93;</a></sup>.</li>
<li>Обновление системы нумерации версий Java SE и JDK с целью приближения к схеме управления версиями по времени<sup id="cite_ref-50" class="reference"><a href="#cite_note-50">&#91;45&#93;</a></sup>.</li></ul>
<h3><span class="mw-headline" id="Java_SE_11">Java SE 11</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=21" class="mw-editsection-visualeditor" title="Редактировать раздел «Java SE 11»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=21" title="Редактировать раздел «Java SE 11»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Официальный частичный список нововведений и план релиза <a rel="nofollow" class="external text" href="http://openjdk.java.net/projects/jdk/11/">расположен на сайте OpenJDK</a>. Дата&#160;релиза&#160;— 25 сентября 2018 года.
</p>
<h4><span id=".D0.A1.D0.BF.D0.B8.D1.81.D0.BE.D0.BA_.D0.BD.D0.BE.D0.B2.D0.BE.D0.B2.D0.B2.D0.B5.D0.B4.D0.B5.D0.BD.D0.B8.D0.B9_5"></span><span class="mw-headline" id="Список_нововведений_5">Список нововведений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=22" class="mw-editsection-visualeditor" title="Редактировать раздел «Список нововведений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=22" title="Редактировать раздел «Список нововведений»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<ul><li>Обновление системы управления доступом, позволяющее вложенным классам обращаться к закрытым (private) методам и полям внешнего класса (и наоборот) без необходимости создания компилятором промежуточных методов с повышением уровня доступа<sup id="cite_ref-51" class="reference"><a href="#cite_note-51">&#91;46&#93;</a></sup>.</li>
<li>Epsilon&#160;— новый сборщик мусора, собственно сборкой мусора не занимающийся вообще; при использовании Epsilon превышение предела выделяемой памяти приводит к завершении работы JVM<sup id="cite_ref-52" class="reference"><a href="#cite_note-52">&#91;47&#93;</a></sup>.</li>
<li>Стандартизирован клиент HTTP с поддержкой HTTP/2, введённый в Java 9 как экспериментальный<sup id="cite_ref-53" class="reference"><a href="#cite_note-53">&#91;48&#93;</a></sup>.</li>
<li>Параметры <a href="/wiki/%D0%9B%D1%8F%D0%BC%D0%B1%D0%B4%D0%B0-%D0%B2%D1%8B%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5" title="Лямбда-выражение">лямбда-функций</a> могут быть <a href="/wiki/%D0%92%D1%8B%D0%B2%D0%BE%D0%B4_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Вывод типов">неявно типизированы</a> путём вывода типов через ключевое слово (<code>var</code>) для унификации с синтаксисом локальных переменных, введённым в JDK 10<sup id="cite_ref-54" class="reference"><a href="#cite_note-54">&#91;49&#93;</a></sup>.</li>
<li>Поддержка 10-й версии стандарта <a href="/wiki/%D0%AE%D0%BD%D0%B8%D0%BA%D0%BE%D0%B4#Версии_Юникода" title="Юникод">Unicode</a><sup id="cite_ref-55" class="reference"><a href="#cite_note-55">&#91;50&#93;</a></sup>.</li>
<li>Поддержка протокола <a href="/wiki/TLS" title="TLS">TLS 1.3</a><sup id="cite_ref-56" class="reference"><a href="#cite_note-56">&#91;51&#93;</a></sup>.</li>
<li>Экспериментальный масштабируемый сборщик мусора ZGC с низкими задержками. По умолчанию отключён, работает только на Linux/x64<sup id="cite_ref-57" class="reference"><a href="#cite_note-57">&#91;52&#93;</a></sup>.</li></ul>
<h2><span id=".D0.9A.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D1.8F_.D0.BF.D0.BB.D0.B0.D1.82.D1.84.D0.BE.D1.80.D0.BC_Java"></span><span class="mw-headline" id="Классификация_платформ_Java">Классификация платформ Java</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=23" class="mw-editsection-visualeditor" title="Редактировать раздел «Классификация платформ Java»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=23" title="Редактировать раздел «Классификация платформ Java»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Внутри Java существует несколько основных семейств технологий:
</p>
<ul><li><a href="/wiki/Java_SE" class="mw-redirect" title="Java SE">Java SE</a>&#160;— Java Standard Edition, основное издание Java, содержит компиляторы, API, <a href="/wiki/Java_Runtime_Environment" title="Java Runtime Environment">Java Runtime Environment</a>; подходит для создания пользовательских приложений, в первую очередь&#160;— для настольных систем.</li>
<li><a href="/wiki/Java_EE" class="mw-redirect" title="Java EE">Java EE</a>&#160;— Java Enterprise Edition, представляет собой набор спецификаций для создания программного обеспечения уровня предприятия. В 2017-м проект Java EE был передан <a href="/wiki/Eclipse_Foundation" title="Eclipse Foundation">Eclipse Foundation</a><sup id="cite_ref-58" class="reference"><a href="#cite_note-58">&#91;53&#93;</a></sup>, после чего был переименован в Jakarta EE<sup id="cite_ref-59" class="reference"><a href="#cite_note-59">&#91;54&#93;</a></sup>. Модули Java EE удалены из Java SE, начиная с 11-й версии<sup id="cite_ref-60" class="reference"><a href="#cite_note-60">&#91;55&#93;</a></sup>.</li>
<li><a href="/wiki/Java_ME" class="mw-redirect" title="Java ME">Java ME</a>&#160;— Java Micro Edition, создана для использования в устройствах, ограниченных по вычислительной мощности, например, в <a href="/wiki/%D0%9C%D0%BE%D0%B1%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD" class="mw-redirect" title="Мобильный телефон">мобильных телефонах</a>, <a href="/wiki/%D0%9A%D0%B0%D1%80%D0%BC%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80" title="Карманный персональный компьютер">КПК</a>, встроенных системах;</li>
<li><a href="/wiki/Java_Card" title="Java Card">Java Card</a>&#160;— технология предоставляет безопасную среду для приложений, работающих на смарт-картах и других устройствах с очень ограниченным объёмом памяти и возможностями обработки.</li></ul>
<h2><span id="Java_.D0.B8_Microsoft"></span><span class="mw-headline" id="Java_и_Microsoft">Java и Microsoft</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=24" class="mw-editsection-visualeditor" title="Редактировать раздел «Java и Microsoft»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=24" title="Редактировать раздел «Java и Microsoft»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Компанией <a href="/wiki/Microsoft" title="Microsoft">Microsoft</a> была разработана собственная реализация <a href="/wiki/JVM" class="mw-redirect" title="JVM">JVM</a> под названием <a href="https://en.wikipedia.org/wiki/Microsoft_Java_Virtual_Machine" class="extiw" title="en:Microsoft Java Virtual Machine">Microsoft Java Virtual Machine</a><span style="white-space: nowrap"><span class="noprint" style="font-size:95%; position: relative; top: .4em;">&#160;<span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span></span><span class="link-ru metadata noprint" style="font-size:80%; margin-left:-1.7em; position: relative; top: -.4em;"><a href="/w/index.php?title=Microsoft_Java_Virtual_Machine&amp;action=edit&amp;redlink=1" class="new" title="Microsoft Java Virtual Machine (страница отсутствует)">русск.</a></span></span> (MSJVM)<sup id="cite_ref-msjvm_61-0" class="reference"><a href="#cite_note-msjvm-61">&#91;56&#93;</a></sup>, включавшаяся в состав различных <a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Операционная система">операционных систем</a>, начиная с <a href="/wiki/Windows_98" title="Windows 98">Windows 98</a> (также входила в <a href="/wiki/Internet_Explorer" title="Internet Explorer">Internet Explorer</a> от версии 3 и выше, что позволяло использовать MSJVM в ОС <a href="/wiki/Windows_95" title="Windows 95">Windows 95</a> и <a href="/wiki/Windows_NT_4.0" title="Windows NT 4.0">Windows NT 4</a> после установки IE3+ на данные ОС).
</p><p>MSJVM имела существенные отличия от Sun Java, во многом ломающие основополагающую концепцию переносимости программ между разными платформами:
</p>
<ul><li>отсутствие поддержки <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F_%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B9" class="mw-redirect" title="Интерфейс программирования приложений">программного интерфейса</a> <a href="/wiki/Remote_Procedure_Call" class="mw-redirect" title="Remote Procedure Call">вызова удалённых методов</a> (<a href="/wiki/RMI" title="RMI">RMI</a>);</li>
<li>отсутствие поддержки технологии <a href="/wiki/JNI" class="mw-redirect" title="JNI">JNI</a>;</li>
<li>наличие нестандартных расширений, таких, как средства интеграции Java и <a href="/wiki/DCOM" title="DCOM">DCOM</a>, работающих только на платформе Windows.</li></ul>
<p>Тесная интеграция Java с DCOM и <a href="/wiki/Windows_API" title="Windows API">Win32</a> поставила под вопрос <a href="/wiki/%D0%9A%D1%80%D0%BE%D1%81%D1%81%D0%BF%D0%BB%D0%B0%D1%82%D1%84%D0%BE%D1%80%D0%BC%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Кроссплатформенность">кроссплатформенную</a> парадигму языка. Впоследствии это явилось поводом для судебных исков со стороны <a href="/wiki/Sun_Microsystems" title="Sun Microsystems">Sun Microsystems</a> к Microsoft. Суд принял сторону компании Sun Microsystems. В конечном счёте между двумя компаниями была достигнута договорённость о возможности продления срока официальной поддержки пользователей нестандартной Microsoft JVM до конца 2007 года<sup id="cite_ref-msjvm_61-1" class="reference"><a href="#cite_note-msjvm-61">&#91;56&#93;</a></sup>.
</p><p>В 2005 году компанией Microsoft для платформы <a href="/wiki/.NET_Framework" title=".NET Framework">.NET</a> был представлен Java-подобный язык <a href="/wiki/Visual_J_Sharp" title="Visual J Sharp">J#</a>, не соответствующий официальной спецификации языка Java и исключённый впоследствии из стандартного инструментария разработчика <a href="/wiki/Microsoft_Visual_Studio" title="Microsoft Visual Studio">Microsoft Visual Studio</a>, начиная с Visual Studio 2008<sup id="cite_ref-62" class="reference"><a href="#cite_note-62">&#91;57&#93;</a></sup>.
</p>
<h2><span id="Java_.D0.B8_Android"></span><span class="mw-headline" id="Java_и_Android">Java и Android</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=25" class="mw-editsection-visualeditor" title="Редактировать раздел «Java и Android»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=25" title="Редактировать раздел «Java и Android»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<div class="hatnote">Основная статья: <b><a href="/wiki/Android" title="Android">Android</a></b></div>
<p>Язык Java активно используется для создания мобильных приложений под операционную систему Android. При этом программы компилируются в нестандартный байт-код, для использования их виртуальной машиной <a href="/wiki/Dalvik_virtual_machine" class="mw-redirect" title="Dalvik virtual machine">Dalvik</a> (начиная с <a href="/wiki/Android_Lollipop" title="Android Lollipop">Android 5.0 Lollipop</a> виртуальная машина заменена на <a href="/wiki/Android_Runtime" title="Android Runtime">ART</a>). Для такой компиляции используется дополнительный инструмент, а именно Android SDK (<a href="/wiki/SDK" title="SDK">Software Development Kit</a>), разработанный компанией <a href="/wiki/Google_(%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F)" title="Google (компания)">Google</a>.
</p><p>Разработку приложений можно вести в среде <a href="/wiki/Android_Studio" title="Android Studio">Android Studio</a>, <a href="/wiki/NetBeans" title="NetBeans">NetBeans</a>, в среде <a href="/wiki/Eclipse_(%D1%81%D1%80%D0%B5%D0%B4%D0%B0_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8)" title="Eclipse (среда разработки)">Eclipse</a>, используя при этом плагин Android Development Tools (ADT), или в <a href="/wiki/IntelliJ_IDEA" title="IntelliJ IDEA">IntelliJ IDEA</a>. Версия JDK при этом должна быть 5.0 или выше.
</p><p>8 декабря 2014 года <a href="/wiki/Android_Studio" title="Android Studio">Android Studio</a> признана компанией <a href="/wiki/Google_(%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F)" title="Google (компания)">Google</a> официальной средой разработки под ОС Android.
</p>
<h2><span id=".D0.9F.D1.80.D0.B8.D0.BC.D0.B5.D0.BD.D0.B5.D0.BD.D0.B8.D1.8F_.D0.BF.D0.BB.D0.B0.D1.82.D1.84.D0.BE.D1.80.D0.BC.D1.8B_Java"></span><span class="mw-headline" id="Применения_платформы_Java">Применения платформы Java</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=26" class="mw-editsection-visualeditor" title="Редактировать раздел «Применения платформы Java»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=26" title="Редактировать раздел «Применения платформы Java»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Следующие успешные проекты реализованы с привлечением Java (<a href="/wiki/J2EE" class="mw-redirect" title="J2EE">J2EE</a>) технологий: <a href="/wiki/RuneScape" title="RuneScape">RuneScape</a>, <a href="/wiki/Amazon" title="Amazon">Amazon</a><sup id="cite_ref-63" class="reference"><a href="#cite_note-63">&#91;58&#93;</a></sup><sup id="cite_ref-64" class="reference"><a href="#cite_note-64">&#91;59&#93;</a></sup>, <a href="/wiki/EBay" title="EBay">eBay</a><sup id="cite_ref-65" class="reference"><a href="#cite_note-65">&#91;60&#93;</a></sup><sup id="cite_ref-66" class="reference"><a href="#cite_note-66">&#91;61&#93;</a></sup>, <a href="/wiki/LinkedIn" title="LinkedIn">LinkedIn</a><sup id="cite_ref-67" class="reference"><a href="#cite_note-67">&#91;62&#93;</a></sup>, <a href="/wiki/Yahoo!" title="Yahoo!">Yahoo!</a><sup id="cite_ref-68" class="reference"><a href="#cite_note-68">&#91;63&#93;</a></sup>.
</p><p>Следующие компании в основном фокусируются на Java (<a href="/wiki/J2EE" class="mw-redirect" title="J2EE">J2EE</a>) технологиях: <a href="/wiki/SAP" title="SAP">SAP</a>, <a href="/wiki/IBM" title="IBM">IBM</a>, <a href="/wiki/Oracle" title="Oracle">Oracle</a>. В частности, <a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F_%D0%B1%D0%B0%D0%B7%D0%B0%D0%BC%D0%B8_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="Система управления базами данных">СУБД</a> <a href="/wiki/Oracle_Database" title="Oracle Database">Oracle Database</a> включает JVM как свою составную часть, обеспечивающую возможность непосредственного программирования СУБД на языке Java, включая, например, <a href="/wiki/%D0%A5%D1%80%D0%B0%D0%BD%D0%B8%D0%BC%D0%B0%D1%8F_%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D0%B4%D1%83%D1%80%D0%B0" title="Хранимая процедура">хранимые процедуры</a><sup id="cite_ref-69" class="reference"><a href="#cite_note-69">&#91;64&#93;</a></sup>.
</p>
<h3><span id=".D0.9F.D1.80.D0.BE.D0.B8.D0.B7.D0.B2.D0.BE.D0.B4.D0.B8.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D0.BE.D1.81.D1.82.D1.8C"></span><span class="mw-headline" id="Производительность">Производительность</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=27" class="mw-editsection-visualeditor" title="Редактировать раздел «Производительность»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=27" title="Редактировать раздел «Производительность»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Программы, написанные на Java, имеют репутацию более медленных и занимающих больше оперативной памяти, чем написанные на языке C<sup id="cite_ref-slow_java_6-1" class="reference"><a href="#cite_note-slow_java-6">&#91;5&#93;</a></sup>. Тем не менее, скорость выполнения программ, написанных на языке Java, была существенно улучшена с выпуском в 1997—1998 годах так называемого JIT-компилятора в версии 1.1 в дополнение к другим особенностям языка для поддержки лучшего анализа кода (такие, как внутренние классы, класс <code>StringBuffer</code><sup id="cite_ref-70" class="reference"><a href="#cite_note-70">&#91;док. 5&#93;</a></sup>, упрощённые логические вычисления и&#160;так&#160;далее). Кроме того, была произведена оптимизация виртуальной машины Java&#160;— с 2000 года для этого используется виртуальная машина <a href="/wiki/HotSpot" title="HotSpot">HotSpot</a>. По состоянию на февраль 2012 года, код Java 7 приблизительно в 1,8 раза медленнее кода, написанного на языке Си<sup id="cite_ref-71" class="reference"><a href="#cite_note-71">&#91;65&#93;</a></sup>.
</p><p>Некоторые платформы предлагают аппаратную поддержку выполнения для Java<sup id="cite_ref-72" class="reference"><a href="#cite_note-72">&#91;66&#93;</a></sup>. К примеру, микроконтроллеры, выполняющие код Java на аппаратном обеспечении вместо программной JVM, а также основанные на ARM процессоры, которые поддерживают выполнение байткода Java через опцию Jazelle.
</p>
<h2><span id=".D0.9E.D1.81.D0.BD.D0.BE.D0.B2.D0.BD.D1.8B.D0.B5_.D0.B2.D0.BE.D0.B7.D0.BC.D0.BE.D0.B6.D0.BD.D0.BE.D1.81.D1.82.D0.B8"></span><span class="mw-headline" id="Основные_возможности">Основные возможности</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=28" class="mw-editsection-visualeditor" title="Редактировать раздел «Основные возможности»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=28" title="Редактировать раздел «Основные возможности»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<ul><li><a href="/wiki/%D0%A1%D0%B1%D0%BE%D1%80%D0%BA%D0%B0_%D0%BC%D1%83%D1%81%D0%BE%D1%80%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Сборка мусора (программирование)">Автоматическое управление памятью</a>.</li>
<li>Расширенные возможности обработки исключительных ситуаций.</li>
<li>Богатый набор средств фильтрации ввода-вывода.</li>
<li>Набор стандартных коллекций: <a href="/wiki/%D0%98%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B0%D1%81%D1%81%D0%B8%D0%B2" class="mw-redirect" title="Индексный массив">массив</a>, <a href="/wiki/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Список (информатика)">список</a>, <a href="/wiki/%D0%A1%D1%82%D0%B5%D0%BA" title="Стек">стек</a> и&#160;т.&#160;п.</li>
<li>Наличие простых средств создания сетевых приложений (в том числе с использованием <a href="/wiki/%D0%A1%D0%B5%D1%82%D0%B5%D0%B2%D0%BE%D0%B9_%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB" class="mw-redirect" title="Сетевой протокол">протокола</a> <a href="/wiki/RMI" title="RMI">RMI</a>).</li>
<li>Наличие классов, позволяющих выполнять <a href="/wiki/HTTP" title="HTTP">HTTP</a>-запросы и обрабатывать ответы.</li>
<li>Встроенные в язык средства создания многопоточных приложений, которые потом были портированы на многие языки (например <a href="/wiki/Python" title="Python">Python</a>).</li>
<li>Унифицированный доступ к <a href="/wiki/%D0%91%D0%B0%D0%B7%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="База данных">базам данных</a>:</li></ul>
<dl><dd><ul><li>на уровне отдельных <a href="/wiki/SQL" title="SQL">SQL</a>-запросов&#160;— на основе <a href="/wiki/JDBC" class="mw-redirect" title="JDBC">JDBC</a>, <a href="/wiki/SQLJ" title="SQLJ">SQLJ</a>;</li>
<li>на уровне концепции объектов, обладающих способностью к хранению в базе данных&#160;— на основе <a href="/w/index.php?title=Java_Data_Objects&amp;action=edit&amp;redlink=1" class="new" title="Java Data Objects (страница отсутствует)">Java Data Objects</a><span class="noprint" style="white-space:nowrap;font-size:85%"> (<a href="https://en.wikipedia.org/wiki/Java_Data_Objects" class="extiw" title="en:Java Data Objects"><span title="Версия статьи «Java Data Objects» на английском языке">англ.</span></a>)</span> и <a href="/wiki/Java_Persistence_API" title="Java Persistence API">Java Persistence API</a>.</li></ul></dd></dl>
<ul><li>Поддержка обобщений (начиная с версии 1.5).</li>
<li>Поддержка лямбд, замыканий, встроенные возможности функционального программирования (с 1.8).</li></ul>
<h2><span id=".D0.9E.D1.81.D0.BD.D0.BE.D0.B2.D0.BD.D1.8B.D0.B5_.D0.B8.D0.B4.D0.B5.D0.B8"></span><span class="mw-headline" id="Основные_идеи">Основные идеи</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=29" class="mw-editsection-visualeditor" title="Редактировать раздел «Основные идеи»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=29" title="Редактировать раздел «Основные идеи»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<h3><span id=".D0.9F.D1.80.D0.B8.D0.BC.D0.B8.D1.82.D0.B8.D0.B2.D0.BD.D1.8B.D0.B5_.D1.82.D0.B8.D0.BF.D1.8B"></span><span class="mw-headline" id="Примитивные_типы">Примитивные типы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=30" class="mw-editsection-visualeditor" title="Редактировать раздел «Примитивные типы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=30" title="Редактировать раздел «Примитивные типы»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В языке Java только 8 примитивных (скалярных, простых) <a href="/wiki/%D0%A2%D0%B8%D0%BF_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" title="Тип данных">типов</a>: <code><a href="/wiki/%D0%9B%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D1%82%D0%B8%D0%BF" title="Логический тип">boolean</a></code>, <code><a href="/wiki/%D0%91%D0%B0%D0%B9%D1%82" title="Байт">byte</a></code>, <code><a href="/wiki/%D0%A1%D0%B8%D0%BC%D0%B2%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%82%D0%B8%D0%BF" title="Символьный тип">char</a></code>, <code><a href="/w/index.php?title=Short&amp;action=edit&amp;redlink=1" class="new" title="Short (страница отсутствует)">short</a></code>, <code><a href="/wiki/%D0%A6%D0%B5%D0%BB%D1%8B%D0%B9_%D1%82%D0%B8%D0%BF" class="mw-redirect" title="Целый тип">int</a></code>, <code><a href="/w/index.php?title=Long_(%D1%82%D0%B8%D0%BF_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)&amp;action=edit&amp;redlink=1" class="new" title="Long (тип данных) (страница отсутствует)">long</a></code>, <code><a href="/wiki/%D0%A7%D0%B8%D1%81%D0%BB%D0%BE_%D0%BE%D0%B4%D0%B8%D0%BD%D0%B0%D1%80%D0%BD%D0%BE%D0%B9_%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D1%81%D1%82%D0%B8" title="Число одинарной точности">float</a></code>, <code><a href="/wiki/%D0%A7%D0%B8%D1%81%D0%BB%D0%BE_%D0%B4%D0%B2%D0%BE%D0%B9%D0%BD%D0%BE%D0%B9_%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D1%81%D1%82%D0%B8" title="Число двойной точности">double</a></code>. Существует также вспомогательный девятый примитивный тип&#160;— <code><a href="/wiki/Void" title="Void">void</a></code>, однако переменные и поля такого типа не могут быть объявлены в коде, а сам тип используется только для описания соответствующего ему класса, для использования при <a href="/wiki/%D0%9E%D1%82%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Отражение (программирование)">рефлексии</a>: например, с помощью класса <code>Void</code><sup id="cite_ref-73" class="reference"><a href="#cite_note-73">&#91;док. 6&#93;</a></sup> можно узнать, является ли определённый метод типа <code>void</code>: <code>Hello.class.getMethod("main", String[].class).getReturnType() == Void.TYPE</code>.
</p><p>Длины и диапазоны значений примитивных типов определяются стандартом, а не реализацией, и приведены в таблице. Тип char сделали двухбайтовым для удобства локализации (один из идеологических принципов Java): когда складывался стандарт, уже существовал <a href="/wiki/Unicode" class="mw-redirect" title="Unicode">Unicode</a>-16, но не Unicode-32. Поскольку в результате не осталось однобайтового типа, добавили новый тип byte, причём в Java, в отличие от других языков, он не является беззнаковым. Типы <code>float</code> и <code>double</code> могут иметь специальные значения <span class="mwe-math-element"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle +\infty }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo>+</mo>
        <mi mathvariant="normal">&#x221E;<!-- ∞ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle +\infty }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/bddbb0e4420a7e744cf71bd71216e11b0bf88831" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.505ex; width:4.132ex; height:2.176ex;" alt="+\infty "/></span>, <span class="mwe-math-element"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle -\infty }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo>&#x2212;<!-- − --></mo>
        <mi mathvariant="normal">&#x221E;<!-- ∞ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle -\infty }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ca2608c4b5fd3bffc73585f8c67e379b4e99b6f1" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.505ex; width:4.132ex; height:2.176ex;" alt="-\infty "/></span> и «не число» (<a href="/wiki/NaN" title="NaN">NaN</a>). Для типа double они обозначаются <code>Double.POSITIVE_INFINITY</code>, <code>Double.NEGATIVE_INFINITY</code>, <code>Double.NaN</code>; для типа <code>float</code>&#160;— так же, но с приставкой <code>Float</code> вместо <code>Double</code>. Минимальные и максимальные значения, принимаемые типами <code>float</code> и <code>double</code>, тоже стандартизованы.
</p>
<table class="wikitable">
<tbody><tr>
<th>Тип
</th>
<th>Длина (в байтах)</th>
<th>Диапазон или набор значений
</th></tr>
<tr>
<td>boolean</td>
<td>1 в массивах, 4 в переменных<sup id="cite_ref-74" class="reference"><a href="#cite_note-74">&#91;67&#93;</a></sup></td>
<td>true, false
</td></tr>
<tr>
<td>byte</td>
<td>1</td>
<td>−128..127
</td></tr>
<tr>
<td>char</td>
<td>2</td>
<td>0..2<sup>16</sup>−1, или 0..65535
</td></tr>
<tr>
<td>short</td>
<td>2</td>
<td>−2<sup>15</sup>..2<sup>15</sup>−1, или −32768..32767
</td></tr>
<tr>
<td>int</td>
<td>4</td>
<td>−2<sup>31</sup>..2<sup>31</sup>−1, или −2147483648..2147483647
</td></tr>
<tr>
<td>long</td>
<td>8</td>
<td>−2<sup>63</sup>..2<sup>63</sup>−1, или примерно −9.2·10<sup>18</sup>..9.2·10<sup>18</sup>
</td></tr>

<tr>
<td>float</td>
<td>4</td>
<td>-(2-2<sup>−23</sup>)·2<sup>127</sup>..(2-2<sup>−23</sup>)·2<sup>127</sup>, или примерно −3.4·10<sup>38</sup>..3.4·10<sup>38</sup>, а также <span class="mwe-math-element"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle -\infty }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo>&#x2212;<!-- − --></mo>
        <mi mathvariant="normal">&#x221E;<!-- ∞ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle -\infty }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ca2608c4b5fd3bffc73585f8c67e379b4e99b6f1" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.505ex; width:4.132ex; height:2.176ex;" alt="-\infty "/></span>, <span class="mwe-math-element"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \infty }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi mathvariant="normal">&#x221E;<!-- ∞ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \infty }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c26c105004f30c27aa7c2a9c601550a4183b1f21" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.338ex; width:2.324ex; height:1.676ex;" alt="\infty "/></span>, NaN
</td></tr>
<tr>
<td>double</td>
<td>8</td>
<td>-(2-2<sup>−52</sup>)·2<sup>1023</sup>..(2-2<sup>−52</sup>)·2<sup>1023</sup>, или примерно −1.8·10<sup>308</sup>..1.8·10<sup>308</sup>, а также <span class="mwe-math-element"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle -\infty }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo>&#x2212;<!-- − --></mo>
        <mi mathvariant="normal">&#x221E;<!-- ∞ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle -\infty }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ca2608c4b5fd3bffc73585f8c67e379b4e99b6f1" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.505ex; width:4.132ex; height:2.176ex;" alt="-\infty "/></span>, <span class="mwe-math-element"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML"  alttext="{\displaystyle \infty }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi mathvariant="normal">&#x221E;<!-- ∞ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \infty }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c26c105004f30c27aa7c2a9c601550a4183b1f21" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.338ex; width:2.324ex; height:1.676ex;" alt="\infty "/></span>, NaN
</td></tr></tbody></table>
<p>Такая жёсткая стандартизация была необходима, чтобы сделать язык платформенно-независимым, что является одним из идеологических требований к Java. Тем не менее, одна небольшая проблема с платформенной независимостью всё же осталась. Некоторые процессоры используют для промежуточного хранения результатов 10-байтовые <a href="/wiki/%D0%A0%D0%B5%D0%B3%D0%B8%D1%81%D1%82%D1%80_%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D1%80%D0%B0" title="Регистр процессора">регистры</a> или другими способами улучшают точность вычислений. Для того, чтобы сделать Java максимально совместимой между разными системами, в ранних версиях любые способы повышения точности вычислений были запрещены. Однако это приводило к снижению быстродействия. Выяснилось, что ухудшение точности ради платформенной независимости мало кому нужно, тем более если за это приходится платить замедлением работы программ. После многочисленных протестов этот запрет отменили, но добавили ключевое слово <code>strictfp</code>, запрещающее повышение точности.
</p>
<h4><span id=".D0.9F.D1.80.D0.B5.D0.BE.D0.B1.D1.80.D0.B0.D0.B7.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D1.8F_.D0.BF.D1.80.D0.B8_.D0.BC.D0.B0.D1.82.D0.B5.D0.BC.D0.B0.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D1.85_.D0.BE.D0.BF.D0.B5.D1.80.D0.B0.D1.86.D0.B8.D1.8F.D1.85"></span><span class="mw-headline" id="Преобразования_при_математических_операциях">Преобразования при математических операциях</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=31" class="mw-editsection-visualeditor" title="Редактировать раздел «Преобразования при математических операциях»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=31" title="Редактировать раздел «Преобразования при математических операциях»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>В языке Java действуют следующие правила:
</p>
<ol><li>Если один <a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D0%BD%D0%B4" title="Операнд">операнд</a> имеет тип <code>double</code>, другой тоже преобразуется к типу <code>double</code>.</li>
<li>Иначе, если один операнд имеет тип <code>float</code>, другой тоже преобразуется к типу <code>float</code>.</li>
<li>Иначе, если один операнд имеет тип <code>long</code>, другой тоже преобразуется к типу <code>long</code>.</li>
<li>Иначе оба операнда преобразуются к типу <code>int</code>.</li></ol>
<p>Данный способ неявного преобразования встроенных типов полностью совпадает с преобразованием типов в <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a>/<a href="/wiki/C%2B%2B" title="C++">C++</a><sup id="cite_ref-75" class="reference"><a href="#cite_note-75">&#91;68&#93;</a></sup>.
</p>
<h3><span id=".D0.9E.D0.B1.D1.8A.D0.B5.D0.BA.D1.82.D0.BD.D1.8B.D0.B5_.D0.BF.D0.B5.D1.80.D0.B5.D0.BC.D0.B5.D0.BD.D0.BD.D1.8B.D0.B5.2C_.D0.BE.D0.B1.D1.8A.D0.B5.D0.BA.D1.82.D1.8B.2C_.D1.81.D1.81.D1.8B.D0.BB.D0.BA.D0.B8_.D0.B8_.D1.83.D0.BA.D0.B0.D0.B7.D0.B0.D1.82.D0.B5.D0.BB.D0.B8"></span><span class="mw-headline" id="Объектные_переменные,_объекты,_ссылки_и_указатели">Объектные переменные, объекты, ссылки и указатели</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=32" class="mw-editsection-visualeditor" title="Редактировать раздел «Объектные переменные, объекты, ссылки и указатели»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=32" title="Редактировать раздел «Объектные переменные, объекты, ссылки и указатели»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В языке Java имеются только динамически создаваемые объекты. <a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Переменная (программирование)">Переменные</a> объектного типа и объекты в Java&#160;— совершенно разные сущности. Переменные объектного типа являются <a href="/wiki/%D0%A1%D1%81%D1%8B%D0%BB%D0%BA%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Ссылка (программирование)">ссылками</a>, то есть аналогами <a href="/wiki/%D0%A3%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C_(%D1%82%D0%B8%D0%BF_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)" title="Указатель (тип данных)">указателей</a> на динамически создаваемые объекты. Это подчёркивается <a href="/wiki/%D0%A1%D0%B8%D0%BD%D1%82%D0%B0%D0%BA%D1%81%D0%B8%D1%81_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Синтаксис (программирование)">синтаксисом</a> описания переменных. Так, код на <a href="/wiki/C%2B%2B" title="C++">C++</a> может выглядеть следующим образом:
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">double</span> <span class="n">a</span><span class="o">[</span><span class="mi">10</span><span class="o">][</span><span class="mi">20</span><span class="o">]</span><span class="p">;</span>
<span class="n">Foo</span> <span class="nf">b</span><span class="p">(</span><span class="mi">30</span><span class="p">);</span>
</pre></div>
<p>Но то же самое на Java будет выглядеть совсем по-другому:
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">double</span><span class="o">[][]</span> <span class="n">a</span> <span class="o">=</span> <span class="k">new</span> <span class="kt">double</span><span class="o">[</span><span class="mi">10</span><span class="o">][</span><span class="mi">20</span><span class="o">]</span><span class="p">;</span>
<span class="n">Foo</span> <span class="n">b</span> <span class="o">=</span> <span class="k">new</span> <span class="n">Foo</span><span class="p">(</span><span class="mi">30</span><span class="p">);</span>
</pre></div>
<p>При присваиваниях, передаче в <a href="/wiki/%D0%9F%D0%BE%D0%B4%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0" title="Подпрограмма">подпрограммы</a> и сравнениях объектные переменные ведут себя как указатели, то есть присваиваются, копируются и сравниваются <a href="/wiki/%D0%90%D0%B4%D1%80%D0%B5%D1%81_%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D0%B8" class="mw-redirect" title="Адрес памяти">адреса</a> объектов. А при доступе с помощью объектной переменной к полям данных или методам объекта не требуется никаких специальных операций <a href="/w/index.php?title=%D0%A0%D0%B0%D0%B7%D1%8B%D0%BC%D0%B5%D0%BD%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5&amp;action=edit&amp;redlink=1" class="new" title="Разыменование (страница отсутствует)">разыменовывания</a>&#160;— этот доступ осуществляется так, как если бы объектная переменная была самим объектом.
</p><p>Объектными являются переменные любого типа, кроме примитивного. Явных указателей в Java нет. В отличие от указателей C, C++ и других языков программирования, ссылки в Java в высокой степени безопасны благодаря жёстким ограничениям на их использование.
</p>
<ul><li>Нельзя преобразовывать объект типа <code>int</code> или любого другого примитивного типа в указатель или ссылку и наоборот.</li>
<li>Над ссылками запрещено выполнять операции <code>++</code>, <code>−−</code>, <code>+</code>, <code>−</code> или любые другие арифметические операции и логические операции(<code>&amp;&amp;</code>, <code>||</code>, <code>^^</code>).</li>
<li>Преобразование типов между ссылками жёстко регламентировано. За исключением ссылок на массивы, разрешено преобразовывать ссылки только между наследуемым типом и его наследником, причём преобразование наследуемого типа в наследующий должно быть явно задано, а во время выполнения производится проверка его осмысленности. Преобразования ссылок на массивы разрешены лишь тогда, когда разрешены преобразования их базовых типов, а также нет конфликтов размерности.</li>
<li>В Java нет операций взятия адреса (<code>&amp;</code>) или взятия объекта по адресу (<code>*</code>). <a href="/wiki/%D0%90%D0%BC%D0%BF%D0%B5%D1%80%D1%81%D0%B0%D0%BD%D0%B4#Прочие_применения" title="Амперсанд">Амперсанд</a> (<code>&amp;</code>) означает всего лишь «побитовое и» (двойной амперсанд&#160;— «логическое и»). Однако для булевых типов одиночный амперсанд означает «логическое и», отличающееся от двойного тем, что цепь проверок не прекращается при получении в выражении значения <code>false</code><sup id="cite_ref-76" class="reference"><a href="#cite_note-76">&#91;69&#93;</a></sup>. Например, <code>a == b &amp;&amp; foo() == bar()</code> не повлечёт вызовов <code>foo()</code> и <code>bar()</code> в случае, если <code>a&#160;!= b</code>, тогда как использование <code>&amp;</code>&#160;— повлечёт в любом случае.</li></ul>
<p>Благодаря таким специально введённым ограничениям в Java невозможно прямое манипулирование памятью на уровне физических адресов (хотя определено значение ссылки, не указывающей ни на что: <code>null</code>).
</p><p>Если нужен указатель на примитивный тип, используются классы-обёртки примитивных типов: <code>Boolean</code>, <code>Byte</code>, <code>Character</code>, <code>Short</code>, <code>Integer</code>, <code>Long</code>, <code>Float</code>, <code>Double</code>.
</p>
<h4><span id=".D0.94.D1.83.D0.B1.D0.BB.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5_.D1.81.D1.81.D1.8B.D0.BB.D0.BE.D0.BA_.D0.B8_.D0.BA.D0.BB.D0.BE.D0.BD.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Дублирование_ссылок_и_клонирование">Дублирование ссылок и клонирование</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=33" class="mw-editsection-visualeditor" title="Редактировать раздел «Дублирование ссылок и клонирование»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=33" title="Редактировать раздел «Дублирование ссылок и клонирование»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Из-за того, что объектные переменные являются ссылочными, при присваивании не происходит копирования объекта. Так, если написать
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="n">Foo</span> <span class="n">foo</span><span class="p">,</span> <span class="n">bar</span><span class="p">;</span>
<span class="err">…</span>
<span class="n">bar</span> <span class="o">=</span> <span class="n">foo</span><span class="p">;</span>
</pre></div>
<p>то произойдёт копирование адреса из переменной <code>foo</code> в переменную <code>bar</code>. То есть <code>foo</code> и <code>bar</code> будут указывать на одну и ту же область памяти, то есть на один и тот же объект; попытка изменить поля объекта, на который ссылается переменная <code>foo</code>, будет менять объект, с которым связана переменная <code>bar</code>, и наоборот. Если же необходимо получить именно ещё одну <i>копию</i> исходного объекта, пользуются или <a href="/wiki/%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_(%D1%8F%D0%B7%D1%8B%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" class="mw-redirect" title="Метод (языки программирования)">методом</a> (функцией-членом, в терминологии C++) <code>clone ()</code>, создающим копию объекта, или (реже) копирующим <a href="/wiki/%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80_(%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Конструктор (объектно-ориентированное программирование)">конструктором</a> (конструкторы в Java не могут быть виртуальными, поэтому экземпляр класса-потомка будет неправильно скопирован конструктором класса-предка; метод клонирования вызывает нужный конструктор и тем самым позволяет обойти это ограничение).
</p><p>Метод <code>clone()</code><sup id="cite_ref-77" class="reference"><a href="#cite_note-77">&#91;док. 7&#93;</a></sup> требует, чтобы класс реализовывал <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_(%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Интерфейс (объектно-ориентированное программирование)">интерфейс</a> <code>Cloneable</code><sup id="cite_ref-78" class="reference"><a href="#cite_note-78">&#91;док. 8&#93;</a></sup>. Если класс реализует интерфейс <code>Cloneable</code>, по умолчанию <code>clone()</code> копирует все поля (<i>мелкая копия</i>). Если требуется не копировать, а клонировать поля (а также их поля и так далее), надо переопределять метод <code>clone()</code>. Определение и использование метода <code>clone()</code> часто является нетривиальной задачей<sup id="cite_ref-79" class="reference"><a href="#cite_note-79">&#91;70&#93;</a></sup>.
</p>
<h4><span id=".D0.98.D0.BD.D0.B8.D1.86.D0.B8.D0.B0.D0.BB.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D1.8F_.D0.BF.D0.B5.D1.80.D0.B5.D0.BC.D0.B5.D0.BD.D0.BD.D1.8B.D1.85"></span><span class="mw-headline" id="Инициализация_переменных">Инициализация переменных</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=34" class="mw-editsection-visualeditor" title="Редактировать раздел «Инициализация переменных»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=34" title="Редактировать раздел «Инициализация переменных»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Все переменные или требуют явного определения, или автоматически заполняются нулями (0, <code>null</code>, <code>false</code>). Таким образом, исчезают <a href="/wiki/%D0%93%D0%B5%D0%B9%D0%B7%D0%B5%D0%BD%D0%B1%D0%B0%D0%B3" title="Гейзенбаг">гейзенбаги</a>, связанные со случайным использованием неинициализированной памяти, характерные для низкоуровневых языков вроде <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a>.
</p>
<h4><span id=".D0.A1.D0.B1.D0.BE.D1.80.D0.BA.D0.B0_.D0.BC.D1.83.D1.81.D0.BE.D1.80.D0.B0"></span><span class="mw-headline" id="Сборка_мусора">Сборка мусора</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=35" class="mw-editsection-visualeditor" title="Редактировать раздел «Сборка мусора»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=35" title="Редактировать раздел «Сборка мусора»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>В языке Java невозможно явное удаление объекта из памяти&#160;— вместо этого реализована <a href="/wiki/%D0%A1%D0%B1%D0%BE%D1%80%D0%BA%D0%B0_%D0%BC%D1%83%D1%81%D0%BE%D1%80%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Сборка мусора (программирование)">сборка мусора</a>. Традиционным приёмом, дающим сборщику мусора «намёк» на необходимость освобождения памяти, является присваивание переменной пустого значения <code>null</code>, что может оказаться эффективным при необходимости освободить более не требующийся объект, ссылка на который хранится в долгоживущем объекте<sup id="cite_ref-80" class="reference"><a href="#cite_note-80">&#91;71&#93;</a></sup>. Это, однако, не значит, что объект, заменённый значением <code>null</code>, будет непременно и немедленно удалён, но есть гарантия, что этот объект будет удалён именно в будущем. Данный приём всего лишь устраняет ссылку на объект, то есть отвязывает указатель от объекта в памяти. При этом следует учитывать, что объект не будет удалён сборщиком мусора, пока на него указывает хотя бы одна ссылка из используемых переменных или объектов. Существуют также методы для инициации принудительной сборки мусора, но не гарантируется, что они будут вызваны исполняющей средой, и их не рекомендуется использовать для обычной работы.
</p>
<h3><span id=".D0.9A.D0.BB.D0.B0.D1.81.D1.81.D1.8B_.D0.B8_.D1.84.D1.83.D0.BD.D0.BA.D1.86.D0.B8.D0.B8"></span><span class="mw-headline" id="Классы_и_функции">Классы и функции</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=36" class="mw-editsection-visualeditor" title="Редактировать раздел «Классы и функции»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=36" title="Редактировать раздел «Классы и функции»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Java не является процедурным языком: любая функция может существовать только внутри класса. Это подчёркивает терминология языка Java, где нет понятий «функция» или «функция-член» (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">member function</span>), а только <i>метод</i>. В методы превратились и стандартные функции. Например, в Java нет функции <code>sin()</code>, а есть метод <code>Math.sin()</code> класса <code>Math</code> (содержащего, кроме <code>sin()</code>, методы <code>cos()</code>, <code>exp()</code>, <code>sqrt()</code>, <code>abs()</code> и многие другие). Конструкторы в Java не считаются методами. Деструкторов в Java не существует, а метод <code>finalize()</code> ни в коем случае нельзя считать аналогом деструктора.
</p>
<h4><span id=".D0.9A.D0.BE.D0.BD.D1.81.D1.82.D1.80.D1.83.D0.BA.D1.82.D0.BE.D1.80.D1.8B"></span><span class="mw-headline" id="Конструкторы">Конструкторы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=37" class="mw-editsection-visualeditor" title="Редактировать раздел «Конструкторы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=37" title="Редактировать раздел «Конструкторы»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Конструктор&#160;— это специальный метод, который обязательно вызывается при создании нового объекта, то есть объект (экземпляр класса) не может быть создан без вызова конструктора класса. Не всегда удобно инициализировать все переменные класса при создании его экземпляра, поэтому переменные экземпляра часто объявляют внутри тела конструктора, а инициализируют как аргументы конструктора при создании экземпляра класса. Иногда проще, чтобы какие-то значения были бы созданы по умолчанию при создании объекта. В таком случае переменные объявляются и инициализируются внутри тела конструктора.
</p><p>
Конструктор инициализирует объект непосредственно во время создания. Имя конструктора совпадает с именем класса, включая регистр, а по синтаксису конструктор похож на метод без возвращаемого значения.</p><div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">private</span> <span class="kt">int</span> <span class="nf">Cat</span><span class="p">();</span>  <span class="c1">// так выглядит метод по имени Cat</span>
<span class="n">Cat</span><span class="p">();</span>              <span class="c1">// так выглядит конструктор класса Cat</span>
</pre></div><p>В отличие от метода, конструктор никогда ничего не возвращает.
</p><p>Конструктор определяет действия, выполняемые при создании объекта класса, и является важной частью класса. Как правило, программисты стараются явно указать конструктор. Если явного конструктора нет, то Java автоматически создаст его (пустым) для использования по умолчанию.
</p><p>
В качестве примера можно рассмотреть некий класс <code>Box</code>, представляющий собой описание коробки. Конструктор класса просто установит начальные размеры для коробки.</p><div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">class</span> <span class="nc">Box</span> <span class="p">{</span>
    <span class="kt">int</span> <span class="n">width</span><span class="p">;</span> <span class="c1">// ширина коробки</span>
    <span class="kt">int</span> <span class="n">height</span><span class="p">;</span> <span class="c1">// высота коробки</span>
    <span class="kt">int</span> <span class="n">depth</span><span class="p">;</span> <span class="c1">// глубина коробки</span>
	
    <span class="c1">// Конструктор</span>
    <span class="n">Box</span><span class="p">(</span><span class="kt">int</span> <span class="n">a</span><span class="p">,</span> <span class="kt">int</span> <span class="n">b</span><span class="p">)</span> <span class="p">{</span>
        <span class="n">width</span> <span class="o">=</span> <span class="n">a</span><span class="p">;</span>
        <span class="n">height</span> <span class="o">=</span> <span class="n">b</span><span class="p">;</span>
        <span class="n">depth</span> <span class="o">=</span> <span class="mi">10</span><span class="p">;</span>
    <span class="p">}</span>

    <span class="c1">// вычисляем объём коробки</span>
    <span class="kt">int</span> <span class="nf">getVolume</span><span class="p">()</span> <span class="p">{</span>
    	<span class="k">return</span> <span class="n">width</span> <span class="o">*</span> <span class="n">height</span> <span class="o">*</span> <span class="n">depth</span><span class="p">;</span>
    <span class="p">}</span>
<span class="p">}</span>
</pre></div>
<h4><span id=".D0.A1.D1.82.D0.B0.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B5_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D1.8B_.D0.B8_.D0.BF.D0.BE.D0.BB.D1.8F"></span><span class="mw-headline" id="Статические_методы_и_поля">Статические методы и поля</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=38" class="mw-editsection-visualeditor" title="Редактировать раздел «Статические методы и поля»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=38" title="Редактировать раздел «Статические методы и поля»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>В Java (как и в C++) используются <i>статические поля и</i> <i>статические методы</i> (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">static method</span>&#160;— в теории программирования их также называют методами класса), которые задаются при помощи ключевого слова <code>static</code>. Статические поля (переменные класса) имеют тот же смысл, что и в C++: каждое такое поле является собственностью класса, поэтому для доступа к статическим полям не требуется создавать экземпляры соответствующего класса.
</p><p>Например, математические функции, реализованные в классе <code>Math</code><sup id="cite_ref-81" class="reference"><a href="#cite_note-81">&#91;док. 9&#93;</a></sup>, представляют собой как раз статические методы данного класса. Поэтому их можно вызывать напрямую из класса, не создавая его экземпляра, например:
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">double</span> <span class="n">x</span> <span class="o">=</span> <span class="n">Math</span><span class="p">.</span><span class="na">sin</span><span class="p">(</span><span class="mi">1</span><span class="p">);</span>
</pre></div>
<p>Создание экземпляра статического класса запрещают с помощью приватного конструктора. Например, создание экземпляра класса <code>Math</code> приведёт к ошибке на этапе компиляции:
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="n">Math</span> <span class="n">m</span> <span class="o">=</span> <span class="k">new</span> <span class="n">Math</span><span class="p">();</span> <span class="c1">// Error: Math() has private access in java.lang.Math</span>
<span class="kt">double</span> <span class="n">x</span> <span class="o">=</span> <span class="n">m</span><span class="p">.</span><span class="na">sin</span><span class="p">(</span><span class="mi">1</span><span class="p">);</span> <span class="c1">// Метода sin у объекта не существовало бы, т. к. он статичный</span>
</pre></div>
<p>Поскольку статические методы существуют независимо от объектов (экземпляров класса), они не имеют доступа к обычным (не статическим) полям и методам данного класса. В частности, при реализации статического метода недопустимо использовать идентификатор <code>this</code>.
</p><p>Возможность статического импорта позволяет вызывать статические функции и константы без указания класса. Пример без статического импорта:
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="kt">double</span> <span class="n">x</span> <span class="o">=</span> <span class="n">Math</span><span class="p">.</span><span class="na">sin</span><span class="p">(</span><span class="n">Math</span><span class="p">.</span><span class="na">tan</span><span class="p">(</span><span class="n">Math</span><span class="p">.</span><span class="na">sqrt</span><span class="p">(</span><span class="n">y</span><span class="p">))</span> <span class="o">+</span> <span class="n">Math</span><span class="p">.</span><span class="na">floor</span><span class="p">(</span><span class="mf">24.5</span><span class="p">))</span> <span class="o">+</span> <span class="n">Math</span><span class="p">.</span><span class="na">cos</span><span class="p">(</span><span class="mi">42</span> <span class="o">*</span> <span class="n">Math</span><span class="p">.</span><span class="na">PI</span><span class="p">);</span>
</pre></div>
<p>Тот же пример, но со статическим импортом:
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="kn">import static</span> <span class="nn">java.lang.Math.*</span><span class="p">;</span>
<span class="p">...</span>
<span class="kt">double</span> <span class="n">x</span> <span class="o">=</span> <span class="n">sin</span><span class="p">(</span><span class="n">tan</span><span class="p">(</span><span class="n">sqrt</span><span class="p">(</span><span class="n">y</span><span class="p">))</span> <span class="o">+</span> <span class="n">floor</span><span class="p">(</span><span class="mf">24.5</span><span class="p">))</span> <span class="o">+</span> <span class="n">cos</span><span class="p">(</span><span class="mi">42</span> <span class="o">*</span> <span class="n">PI</span><span class="p">);</span>
</pre></div>
<h4><span id=".D0.97.D0.B0.D0.B2.D0.B5.D1.80.D1.88.D1.91.D0.BD.D0.BD.D0.BE.D1.81.D1.82.D1.8C_.28final.29"></span><span class="mw-headline" id="Завершённость_(final)">Завершённость (final)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=39" class="mw-editsection-visualeditor" title="Редактировать раздел «Завершённость (final)»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=39" title="Редактировать раздел «Завершённость (final)»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Ключевое слово <code>final</code> (финальный) имеет разные значения при описании поля, метода или класса.
</p>
<ol><li>Финальное <b>поле</b> класса инициализируется при описании или в конструкторе класса (а статическое поле&#160;— в статическом блоке инициализации). Впоследствии его значение не может быть изменено. Если статическое поле класса или переменная проинициализированы константным выражением, они рассматриваются компилятором как <a href="/wiki/%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%82%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Константа (программирование)">именованная константа</a>; в таком случае их значение может быть использовано в <a href="/wiki/Switch_(%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80)" class="mw-redirect" title="Switch (оператор)">операторах <code>switch</code></a> (для констант типа <code>int</code>), а также для условной компиляции (для констант типа <code>boolean</code>) при использовании с <a href="/wiki/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%BD%D1%8B%D0%B9_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80" class="mw-redirect" title="Условный оператор">оператором <code>if</code></a>.</li>
<li>Значения <b>локальных переменных</b>, а также <b>параметров метода</b>, помеченных ключевым словом <code>final</code>, не могут быть изменены после присвоения. При этом их значения могут использоваться внутри <a href="/wiki/%D0%92%D0%BD%D1%83%D1%82%D1%80%D0%B5%D0%BD%D0%BD%D0%B8%D0%B9_%D0%BA%D0%BB%D0%B0%D1%81%D1%81#Анонимные_(безымянные)_классы" title="Внутренний класс">анонимных классов</a>.</li>
<li><b>Метод</b> класса, отмеченный словом <code>final</code>, не может быть переопределён при наследовании.</li>
<li><a href="/wiki/%D0%9B%D0%B8%D1%81%D1%82%D0%BE%D0%B2%D0%BE%D0%B9_%D0%BA%D0%BB%D0%B0%D1%81%D1%81" title="Листовой класс">Финальный <b>класс</b></a> не может иметь наследников.</li></ol>
<h4><span id=".D0.90.D0.B1.D1.81.D1.82.D1.80.D0.B0.D0.BA.D1.82.D0.BD.D0.BE.D1.81.D1.82.D1.8C"></span><span class="mw-headline" id="Абстрактность">Абстрактность</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=40" class="mw-editsection-visualeditor" title="Редактировать раздел «Абстрактность»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=40" title="Редактировать раздел «Абстрактность»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>В Java методы, не объявленные явно как <code>static</code>, <code>final</code> или <code>private</code>, являются <a href="/wiki/%D0%92%D0%B8%D1%80%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B5%D1%82%D0%BE%D0%B4" title="Виртуальный метод">виртуальными</a> в терминологии C++: при вызове метода, по-разному определённого в базовом и наследующем классах, всегда производится проверка времени выполнения.
</p><p><a href="/wiki/%D0%90%D0%B1%D1%81%D1%82%D1%80%D0%B0%D0%BA%D1%82%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B5%D1%82%D0%BE%D0%B4" title="Абстрактный метод">Абстрактным методом</a> (модификатор <code>abstract</code>) в Java называется метод, для которого заданы параметры и тип возвращаемого значения, но не задано тело. Абстрактный метод определяется в классах-наследниках. Аналог абстрактного метода в C++&#160;— чисто виртуальная функция (pure virtual function). Для того чтобы в классе можно было описывать абстрактные методы, сам класс тоже должен быть описан как абстрактный. Объекты абстрактного класса создавать нельзя.
</p>
<h4><span id=".D0.98.D0.BD.D1.82.D0.B5.D1.80.D1.84.D0.B5.D0.B9.D1.81.D1.8B"></span><span class="mw-headline" id="Интерфейсы">Интерфейсы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=41" class="mw-editsection-visualeditor" title="Редактировать раздел «Интерфейсы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=41" title="Редактировать раздел «Интерфейсы»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Высшей степенью абстрактности в Java является интерфейс (модификатор <code>interface</code>). Все методы интерфейса абстрактны: описатель <code>abstract</code> даже не требуется. Интерфейс в Java не считается классом, хотя, по сути, является полностью абстрактным классом. Класс может наследовать/<i>расширять</i> (<code>extends</code>) другой класс или <i>реализовывать</i> (<code>implements</code>) интерфейс. Кроме того, интерфейс может наследовать/расширять (<code>extends</code>) другой интерфейс.
</p><p>В Java класс не может наследовать более одного класса, зато может реализовывать несколько интерфейсов. Множественное наследование интерфейсов не запрещено, то есть один интерфейс может наследоваться от нескольких.
</p><p>Интерфейсы можно использовать в качестве типов параметров методов. Нельзя создавать экземпляры интерфейсов.
</p>
<h5><span id=".D0.9C.D0.B0.D1.80.D0.BA.D0.B5.D1.80.D0.BD.D1.8B.D0.B5_.D0.B8.D0.BD.D1.82.D0.B5.D1.80.D1.84.D0.B5.D0.B9.D1.81.D1.8B"></span><span class="mw-headline" id="Маркерные_интерфейсы">Маркерные интерфейсы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=42" class="mw-editsection-visualeditor" title="Редактировать раздел «Маркерные интерфейсы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=42" title="Редактировать раздел «Маркерные интерфейсы»">править код</a><span class="mw-editsection-bracket">]</span></span></h5>
<p>В Java есть интерфейсы, которые не содержат методов для реализации, а специальным образом обрабатываются JVM: <code>Cloneable</code>, <code>Serializable</code>, <code>RandomAccess</code>, <code>Remote</code>.
</p>
<h4><span id=".D0.A8.D0.B0.D0.B1.D0.BB.D0.BE.D0.BD.D1.8B_.D0.B2_Java_.28generics.29"></span><span class="mw-headline" id="Шаблоны_в_Java_(generics)">Шаблоны в Java (generics)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=43" class="mw-editsection-visualeditor" title="Редактировать раздел «Шаблоны в Java (generics)»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=43" title="Редактировать раздел «Шаблоны в Java (generics)»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p><span id="generics"></span>
Начиная с версии Java 5.0 в языке появился механизм <a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Обобщённое программирование">обобщённого программирования</a>&#160;— шаблоны, внешне близкие к шаблонам C++. С помощью специального синтаксиса в описании классов и методов можно указать параметры-типы, которые внутри описания могут использоваться в качестве типов полей, параметров и возвращаемых значений методов.
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// Объявление обобщённого класса</span>
<span class="kd">class</span> <span class="nc">GenericClass</span><span class="o">&lt;</span><span class="n">E</span><span class="o">&gt;</span> <span class="p">{</span>
  <span class="n">E</span> <span class="nf">getFirst</span><span class="p">()</span> <span class="p">{</span> <span class="p">...</span> <span class="p">}</span>
  <span class="kt">void</span> <span class="nf">add</span><span class="p">(</span><span class="n">E</span> <span class="n">obj</span><span class="p">)</span> <span class="p">{</span> <span class="p">...</span> <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Использование обобщённого класса в коде</span>
<span class="n">GenericClass</span><span class="o">&lt;</span><span class="n">String</span><span class="o">&gt;</span> <span class="n">obj</span> <span class="o">=</span> <span class="k">new</span> <span class="n">GenericClass</span><span class="o">&lt;&gt;</span><span class="p">();</span>
<span class="n">obj</span><span class="p">.</span><span class="na">add</span><span class="p">(</span><span class="s">&quot;qwerty&quot;</span><span class="p">);</span>
<span class="n">String</span> <span class="n">p</span> <span class="o">=</span> <span class="n">obj</span><span class="p">.</span><span class="na">getFirst</span><span class="p">();</span>
</pre></div>
<p>Допускается обобщённое объявление классов, интерфейсов и методов. Кроме того, синтаксис поддерживает ограниченные объявления типов-параметров: указание в объявлении конструкции вида <code>&lt;T extends A &amp; B &amp; C...&gt;</code> требует, чтобы тип-параметр T реализовывал интерфейсы A, B, C и так далее.
</p><p>В отличие от шаблонов C#, шаблоны Java не поддерживаются средой исполнения&#160;— компилятор просто создаёт байт-код, в котором никаких шаблонов уже нет. Реализация шаблонов в Java принципиально отличается от реализации аналогичных механизмов в C++: компилятор не порождает для каждого случая использования шаблона отдельный вариант класса или метода-шаблона, а просто создаёт одну реализацию байт-кода, содержащую необходимые проверки и преобразования типов. Это приводит к ряду ограничений использования шаблонов в программах на Java.
</p>
<h4><span id=".D0.9F.D1.80.D0.BE.D0.B2.D0.B5.D1.80.D0.BA.D0.B0_.D0.BF.D1.80.D0.B8.D0.BD.D0.B0.D0.B4.D0.BB.D0.B5.D0.B6.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D0.BA_.D0.BA.D0.BB.D0.B0.D1.81.D1.81.D1.83"></span><span class="mw-headline" id="Проверка_принадлежности_к_классу">Проверка принадлежности к классу</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=44" class="mw-editsection-visualeditor" title="Редактировать раздел «Проверка принадлежности к классу»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=44" title="Редактировать раздел «Проверка принадлежности к классу»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>В Java можно явно проверить, к какому классу принадлежит объект. Выражение <code>foo instanceof Foo</code> равно <code>true</code>, если объект <code>foo</code> принадлежит классу <code>Foo</code> или его наследнику, или реализует интерфейс <code>Foo</code> (или, в общем виде, наследует класс, который реализует интерфейс, который наследует <code>Foo</code>).
</p><p>Далее функция <code>getClass()</code><sup id="cite_ref-82" class="reference"><a href="#cite_note-82">&#91;док. 10&#93;</a></sup>, определённая для всех объектов, выдаёт объект типа <code>Class&lt;?&gt;</code>. Для каждого класса создаётся не более одного описывающего его объекта типа <code>Class</code>, поэтому эти объекты можно сравнивать. Так, например, <code>foo.getClass() == bar.getClass()</code> будет истинно, если объекты <code>foo</code> и <code>bar</code> принадлежат к одному классу.
</p><p>Кроме того, объект типа <code>Class&lt;?&gt;</code> любого типа можно получить так: <code>Integer.class</code>, <code>Object.class</code>.
</p><p>Прямое сравнение классов не всегда является оптимальным средством проверки на принадлежность к классу. Зачастую вместо него используют функцию <code>isAssignableFrom()</code>. Эта функция определена у объекта типа <code>Class</code> и принимает объект типа <code>Class&lt;?&gt;</code> в качестве параметра. Таким образом, вызов <code>Foo.class.isAssignableFrom(Bar.class)</code> вернёт <code>true</code> в случае, если <code>Foo</code> является предком класса <code>Bar</code>. Так как все объекты являются потомками типа <code>Object</code>, вызов <code>Object.class.isAssignableFrom()</code> всегда вернёт <code>true</code>.
</p><p>В паре с упомянутыми функциями объекта типа <code>Class</code> используются также функции <code>isInstance</code><sup id="cite_ref-83" class="reference"><a href="#cite_note-83">&#91;док. 11&#93;</a></sup> (эквивалентно <code>instanceof</code>), а также <code>cast()</code> (преобразует параметр в объект выбранного класса).
</p>
<h3><span id=".D0.9E.D0.B1.D1.80.D0.B0.D0.B1.D0.BE.D1.82.D0.BA.D0.B0_.D0.BE.D1.88.D0.B8.D0.B1.D0.BE.D0.BA"></span><span class="mw-headline" id="Обработка_ошибок">Обработка ошибок</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=45" class="mw-editsection-visualeditor" title="Редактировать раздел «Обработка ошибок»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=45" title="Редактировать раздел «Обработка ошибок»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Обработка ошибок в Java похожа на обработку ошибок в <a href="/wiki/C%2B%2B" title="C++">C++</a>, за исключением необходимости в блоке <code>finally</code>. Данное отличие обусловлено тем, что Java не может придерживаться концепции <a href="/wiki/%D0%9F%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_%D1%80%D0%B5%D1%81%D1%83%D1%80%D1%81%D0%B0_%D0%B5%D1%81%D1%82%D1%8C_%D0%B8%D0%BD%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Получение ресурса есть инициализация">RAII</a> из-за наличия сборщика мусора, а автоматическое освобождение ресурсов в деструкторе может идти в непредсказуемом порядке через произвольные промежутки времени.
</p><p>Осуществляется обработка ошибок с помощью операторов <code>try</code>, <code>catch</code> и <code>finally</code>. Выбрасываемая ошибка описывается объектом определённого класса, наследующегося от <code>Throwable</code><sup id="cite_ref-84" class="reference"><a href="#cite_note-84">&#91;док. 12&#93;</a></sup> и соответствующего типу ошибки. Внутрь блока <code>try</code> помещается код, который может выбросить исключение, а блок <code>catch</code> отлавливает заданные программистом типы ошибок. При этом можно указывать более одного блока <code>catch</code> для обработки различных классов ошибок, или multi-catch для обработки нескольких ошибок. Блок <code>finally</code> является необязательным, но при наличии выполняется независимо от возникновения ошибки и предназначен для освобождения выделенных в ходе работы блока <code>try</code> ресурсов.
</p><p>Начиная с Java 7 поддерживается интерфейс <code>AutoCloseable</code><sup id="cite_ref-85" class="reference"><a href="#cite_note-85">&#91;док. 13&#93;</a></sup>, который позволяет реализовывать классы, автоматически освобождающие ресурсы. Объекты подобных классов требуется создавать в круглых скобках перед блоком <code>try</code>. Простым примером автоматического освобождения ресурсом может служить чтение содержимого файла:
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="lineno"> 1 </span><span class="kn">import</span> <span class="nn">java.io.*</span><span class="p">;</span>
<span class="lineno"> 2 </span>
<span class="lineno"> 3 </span><span class="kd">public</span> <span class="kd">class</span> <span class="nc">Main</span> <span class="p">{</span>
<span class="lineno"> 4 </span>    <span class="kd">public</span> <span class="kd">static</span> <span class="kt">void</span> <span class="nf">main</span><span class="p">(</span><span class="n">String</span><span class="o">[]</span> <span class="n">args</span><span class="p">)</span> <span class="kd">throws</span> <span class="n">IOException</span> <span class="p">{</span>
<span class="lineno"> 5 </span>        <span class="k">if</span> <span class="p">(</span><span class="n">args</span><span class="p">.</span><span class="na">length</span> <span class="o">&lt;</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span>
<span class="lineno"> 6 </span>            <span class="n">System</span><span class="p">.</span><span class="na">err</span><span class="p">.</span><span class="na">println</span><span class="p">(</span><span class="s">&quot;Не указано имя файла.&quot;</span><span class="p">);</span>
<span class="lineno"> 7 </span>            <span class="k">return</span><span class="p">;</span>
<span class="lineno"> 8 </span>        <span class="p">}</span>
<span class="lineno"> 9 </span>        <span class="n">String</span> <span class="n">filename</span> <span class="o">=</span> <span class="n">args</span><span class="o">[</span><span class="mi">1</span><span class="o">]</span><span class="p">;</span>
<span class="lineno">10 </span>        <span class="c1">// Открытый файл будет автоматически закрыт по ошибке</span>
<span class="lineno">11 </span>        <span class="k">try</span> <span class="p">(</span><span class="n">BufferedReader</span> <span class="n">reader</span> <span class="o">=</span> <span class="k">new</span> <span class="n">BufferedReader</span><span class="p">(</span><span class="k">new</span> <span class="n">FileReader</span><span class="p">(</span><span class="n">filename</span><span class="p">)))</span> <span class="p">{</span>
<span class="lineno">12 </span>            <span class="n">String</span> <span class="n">line</span><span class="p">;</span>
<span class="lineno">13 </span>            <span class="k">for</span> <span class="p">(</span><span class="kt">int</span> <span class="n">n</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span> <span class="p">(</span><span class="n">line</span> <span class="o">=</span> <span class="n">reader</span><span class="p">.</span><span class="na">readLine</span><span class="p">())</span> <span class="o">!=</span> <span class="kc">null</span><span class="p">;</span> <span class="o">++</span><span class="n">n</span><span class="p">)</span> <span class="p">{</span>
<span class="lineno">14 </span>                <span class="n">System</span><span class="p">.</span><span class="na">out</span><span class="p">.</span><span class="na">println</span><span class="p">(</span><span class="n">n</span> <span class="o">+</span> <span class="s">&quot;: &quot;</span> <span class="o">+</span> <span class="n">line</span><span class="p">);</span>
<span class="lineno">15 </span>            <span class="p">}</span>
<span class="lineno">16 </span>        <span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="n">FileNotFoundException</span> <span class="n">e</span><span class="p">)</span> <span class="p">{</span>
<span class="lineno">17 </span>            <span class="n">System</span><span class="p">.</span><span class="na">err</span><span class="p">.</span><span class="na">println</span><span class="p">(</span><span class="s">&quot;Указанный файл не найден.&quot;</span><span class="p">);</span>
<span class="lineno">18 </span>        <span class="p">}</span>
<span class="lineno">19 </span>        <span class="c1">// finnaly {</span>
<span class="lineno">20 </span>        <span class="c1">//     reader.close(); // автоматическое закрытие ресурса</span>
<span class="lineno">21 </span>        <span class="c1">// }</span>
<span class="lineno">22 </span>    <span class="p">}</span>
<span class="lineno">23 </span><span class="p">}</span>
</pre></div>
<p>Java придерживается концепции обязательного указания классов ошибок, которые может выбросить метод. Делается это с помощью ключевого слово <code>throws</code> после описания метода. Если в методе не указать класс исключения (или его предка), которое может быть выброшено из метода, то это вызовет ошибку компиляции. Концепция должна была позволить делать код самодокументируемым, обозначая, какие исключения может выбросить тот или иной метод, но на практике редко себя оправдывает, поскольку в силу разных обстоятельств программист может указать в качестве выбрасываемого исключения класс <code>Exception</code>, либо заключить проблемные части метода в блок <code>try</code>…<code>catch</code> для игнорирования отдельных ошибок, либо&#160;— в блок <code>try</code>…<code>finally</code>, скрывая все возможные ошибки. Недостатком концепции также является и то, что программист сам должен определять и прописывать исключения, которые может выбрасывать метод<sup id="cite_ref-86" class="reference"><a href="#cite_note-86">&#91;72&#93;</a></sup>.
</p>
<h3><span id=".D0.9F.D1.80.D0.BE.D1.81.D1.82.D1.80.D0.B0.D0.BD.D1.81.D1.82.D0.B2.D0.BE_.D0.B8.D0.BC.D1.91.D0.BD"></span><span class="mw-headline" id="Пространство_имён">Пространство имён</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=46" class="mw-editsection-visualeditor" title="Редактировать раздел «Пространство имён»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=46" title="Редактировать раздел «Пространство имён»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<table class="plainlinks metadata ambox ambox-style" role="presentation"><tbody><tr><td class="mbox-image"><div style="width:52px"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Broom_icon.svg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Broom_icon.svg/40px-Broom_icon.svg.png" decoding="async" width="40" height="40" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Broom_icon.svg/60px-Broom_icon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Broom_icon.svg/80px-Broom_icon.svg.png 2x" data-file-width="400" data-file-height="400" /></a></div></td><td class="mbox-text"><div class="mbox-text-div"><b>Стиль этого раздела неэнциклопедичен или нарушает нормы русского языка.</b></div><div class="mbox-textsmall-div hide-when-compact" style="font-size:85%">Следует исправить раздел согласно <a href="/wiki/%D0%92%D0%B8%D0%BA%D0%B8%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F:%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0_%D0%B8_%D1%83%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%D0%B8%D1%8F#Язык_и_стиль" title="Википедия:Правила и указания">стилистическим правилам Википедии</a>.</div></td></tr></tbody></table>
<div class="hatnote">Основная статья: <b><a href="/wiki/%D0%9F%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE_%D0%B8%D0%BC%D1%91%D0%BD_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Пространство имён (программирование)">Пространство имён (программирование)</a></b></div>
<p>Идея пространств имён воплощена в <a href="/wiki/Package_(Java)" title="Package (Java)">Java-пакетах</a>.
</p><p>Название Java-пакета&#160;— <a href="/wiki/%D0%9B%D0%B0%D1%82%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9_%D0%B0%D0%BB%D1%84%D0%B0%D0%B2%D0%B8%D1%82" title="Латинский алфавит">латиница</a> (нижний и верхний регистр) с <a href="/wiki/%D0%A6%D0%B8%D1%84%D1%80%D1%8B" title="Цифры">цифрами</a> (не первые в строке) и знаком подчёркивания (не первые и не последние), не являющаяся инструкциями языка (прим. <code>if</code>, <code>null</code>), разделённая точками.
</p><p>Правильные примеры названий:
</p>
<ul><li><code>project.types.net.media</code></li>
<li><code>a0.a_b.canrepeat.canrepeat.UPPERCASE.RaNdOmCaSe</code> (хотя нежелательно, из-за нечитабельности)</li></ul>
<p>Неправильные примеры названий:
</p>
<ul><li><code>doubledots..something</code> (две точки подряд)</li>
<li><code>нестандартный.язык</code> (не латиница)</li>
<li><code>0first.characret.is.number</code> (число в начале)</li>
<li><code>contains.white space</code> (пробел)</li>
<li><code>true.asd</code> (содержит <code>true</code>, см. выше)</li></ul>
<p>Пакеты содержат классы, интерфейсы, перечисления, аннотации (и&#160;т.&#160;д.), имена которых&#160;— латиница (нижний и верхний регистр) с цифрами (не первые в строке). Публичный класс интерфейс (и&#160;т.&#160;д.) к одном файлы может быть только один. Имя публичного класса, интерфейса (и&#160;т.&#160;д.) в файле должно совпадать с названием файла. Каждый класс имеет своё пространство имён для функций, переменных и подклассов, подинтерфейсов (и&#160;т.&#160;д.), причём получить подкласс класса можно с помощью <code>OuterClass.InnerClass</code>, а можно с помощью <code>OuterClass$InnerClass</code>, поэтому использование символа доллара в названии класса не рекомендуется.
</p>
<h2><span id=".D0.9F.D1.80.D0.B8.D0.BC.D0.B5.D1.80.D1.8B_.D0.BF.D1.80.D0.BE.D0.B3.D1.80.D0.B0.D0.BC.D0.BC"></span><span class="mw-headline" id="Примеры_программ">Примеры программ</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Java&amp;veaction=edit&amp;section=47" class="mw-editsection-visualeditor" title="Редактировать раздел «Примеры программ»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Java&amp;action=edit&amp;section=47" title="Редактировать раздел «Примеры программ»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Код программы <a href="/wiki/Hello,_world!" title="Hello, world!">«Hello World!»</a>.
</p>
<div class="mw-highlight mw-highlight-lang-java mw-content-ltr" dir="ltr"><pre><span></span><span class="lineno">1 </span><span class="kd">class</span> <span class="nc">HelloWorld</span> <span class="p">{</span>
<span class="lineno">2 </span>    <span class="kd">public</span> <span class="kd">static</span> <span class="kt">void</span> <span class="nf">main</span><span class="p">(</span><span class="n">String</span><span class="o">[]</span> <span class="n">args</span><span class="p">)</span> <span class="p">{</span>
<span class="lineno">3 </span>        <span class="n">System</span><span class="p">.</span><span class="na">out</span><span class="p">.</span><span class="na">println</span><span class="p">(</span><span class="s">&quot;Hello World!&quot;</span><span class="p">);</span>
<span class="lineno">4 </span>    <span class="p">}</span>
<span class="lineno">5 </span><span class="p">}</span>
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