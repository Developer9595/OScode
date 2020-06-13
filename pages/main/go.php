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
                        <h3>Язык программирования GO</h3>
                        
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
                        <div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading"></h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Название"><span class="tocnumber">1</span> <span class="toctext">Название</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Назначение,_идеология"><span class="tocnumber">2</span> <span class="toctext">Назначение, идеология</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Основные_возможности_языка"><span class="tocnumber">3</span> <span class="toctext">Основные возможности языка</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Синтаксис"><span class="tocnumber">4</span> <span class="toctext">Синтаксис</span></a>
<ul>
<li class="toclevel-2 tocsection-5"><a href="#Алфавит"><span class="tocnumber">4.1</span> <span class="toctext">Алфавит</span></a></li>
<li class="toclevel-2 tocsection-6"><a href="#Пакеты"><span class="tocnumber">4.2</span> <span class="toctext">Пакеты</span></a></li>
<li class="toclevel-2 tocsection-7"><a href="#Модули"><span class="tocnumber">4.3</span> <span class="toctext">Модули</span></a></li>
<li class="toclevel-2 tocsection-8"><a href="#Комментарии_и_точки_с_запятой"><span class="tocnumber">4.4</span> <span class="toctext">Комментарии и точки с запятой</span></a></li>
<li class="toclevel-2 tocsection-9"><a href="#Встроенные_типы_данных"><span class="tocnumber">4.5</span> <span class="toctext">Встроенные типы данных</span></a>
<ul>
<li class="toclevel-3 tocsection-10"><a href="#Целые_числа"><span class="tocnumber">4.5.1</span> <span class="toctext">Целые числа</span></a></li>
<li class="toclevel-3 tocsection-11"><a href="#Числа_с_плавающей_запятой"><span class="tocnumber">4.5.2</span> <span class="toctext">Числа с плавающей запятой</span></a></li>
<li class="toclevel-3 tocsection-12"><a href="#Числовые_типы_с_неограниченной_точностью"><span class="tocnumber">4.5.3</span> <span class="toctext">Числовые типы с неограниченной точностью</span></a></li>
<li class="toclevel-3 tocsection-13"><a href="#Комплексные_числа"><span class="tocnumber">4.5.4</span> <span class="toctext">Комплексные числа</span></a></li>
<li class="toclevel-3 tocsection-14"><a href="#Логические_значения"><span class="tocnumber">4.5.5</span> <span class="toctext">Логические значения</span></a></li>
<li class="toclevel-3 tocsection-15"><a href="#Строки"><span class="tocnumber">4.5.6</span> <span class="toctext">Строки</span></a></li>
</ul>
</li>
<li class="toclevel-2 tocsection-16"><a href="#Объявление_типов"><span class="tocnumber">4.6</span> <span class="toctext">Объявление типов</span></a></li>
<li class="toclevel-2 tocsection-17"><a href="#Объявление_переменных"><span class="tocnumber">4.7</span> <span class="toctext">Объявление переменных</span></a></li>
<li class="toclevel-2 tocsection-18"><a href="#Автоматический_вывод_типов"><span class="tocnumber">4.8</span> <span class="toctext">Автоматический вывод типов</span></a></li>
<li class="toclevel-2 tocsection-19"><a href="#Присваивания"><span class="tocnumber">4.9</span> <span class="toctext">Присваивания</span></a></li>
<li class="toclevel-2 tocsection-20"><a href="#Аргументы_функций_и_методов"><span class="tocnumber">4.10</span> <span class="toctext">Аргументы функций и методов</span></a></li>
<li class="toclevel-2 tocsection-21"><a href="#Функции_могут_возвращать_несколько_значений"><span class="tocnumber">4.11</span> <span class="toctext">Функции могут возвращать несколько значений</span></a></li>
<li class="toclevel-2 tocsection-22"><a href="#Псевдопеременная_«_»"><span class="tocnumber">4.12</span> <span class="toctext">Псевдопеременная «_»</span></a></li>
<li class="toclevel-2 tocsection-23"><a href="#Механизм_отложенного_вызова_defer"><span class="tocnumber">4.13</span> <span class="toctext">Механизм отложенного вызова defer</span></a></li>
<li class="toclevel-2 tocsection-24"><a href="#Условия_циклов_и_ветвлений"><span class="tocnumber">4.14</span> <span class="toctext">Условия циклов и ветвлений</span></a></li>
<li class="toclevel-2 tocsection-25"><a href="#Циклы"><span class="tocnumber">4.15</span> <span class="toctext">Циклы</span></a></li>
<li class="toclevel-2 tocsection-26"><a href="#Оператор_множественного_выбора."><span class="tocnumber">4.16</span> <span class="toctext">Оператор множественного выбора.</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-27"><a href="#Особенности_архитектуры"><span class="tocnumber">5</span> <span class="toctext">Особенности архитектуры</span></a>
<ul>
<li class="toclevel-2 tocsection-28"><a href="#Обработка_ошибок_и_исключительных_ситуаций"><span class="tocnumber">5.1</span> <span class="toctext">Обработка ошибок и исключительных ситуаций</span></a></li>
<li class="toclevel-2 tocsection-29"><a href="#Многопоточность"><span class="tocnumber">5.2</span> <span class="toctext">Многопоточность</span></a></li>
<li class="toclevel-2 tocsection-30"><a href="#Объектно-ориентированное_программирование"><span class="tocnumber">5.3</span> <span class="toctext">Объектно-ориентированное программирование</span></a></li>
<li class="toclevel-2 tocsection-31"><a href="#Рефлексия"><span class="tocnumber">5.4</span> <span class="toctext">Рефлексия</span></a></li>
<li class="toclevel-2 tocsection-32"><a href="#Низкоуровневое_программирование"><span class="tocnumber">5.5</span> <span class="toctext">Низкоуровневое программирование</span></a></li>
<li class="toclevel-2 tocsection-33"><a href="#Интерфейс_с_кодом_на_других_языках"><span class="tocnumber">5.6</span> <span class="toctext">Интерфейс с кодом на других языках</span></a></li>
<li class="toclevel-2 tocsection-34"><a href="#Интерфейс_пользователя"><span class="tocnumber">5.7</span> <span class="toctext">Интерфейс пользователя</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-35"><a href="#Критика"><span class="tocnumber">6</span> <span class="toctext">Критика</span></a>
<ul>
<li class="toclevel-2 tocsection-36"><a href="#Отсутствие_возможностей"><span class="tocnumber">6.1</span> <span class="toctext">Отсутствие возможностей</span></a></li>
<li class="toclevel-2 tocsection-37"><a href="#Архитектура"><span class="tocnumber">6.2</span> <span class="toctext">Архитектура</span></a></li>
<li class="toclevel-2 tocsection-38"><a href="#«Подводные_камни»_(неудачная_реализация_некоторых_средств)"><span class="tocnumber">6.3</span> <span class="toctext">«Подводные камни» (неудачная реализация некоторых средств)</span></a></li>
<li class="toclevel-2 tocsection-39"><a href="#Другие_особенности"><span class="tocnumber">6.4</span> <span class="toctext">Другие особенности</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-40"><a href="#Распространение_и_перспективы"><span class="tocnumber">7</span> <span class="toctext">Распространение и перспективы</span></a></li>
<li class="toclevel-1 tocsection-41"><a href="#Версии"><span class="tocnumber">8</span> <span class="toctext">Версии</span></a>
<ul>
<li class="toclevel-2 tocsection-42"><a href="#Нумерация_и_принципы_совместимости_версий"><span class="tocnumber">8.1</span> <span class="toctext">Нумерация и принципы совместимости версий</span></a></li>
<li class="toclevel-2 tocsection-43"><a href="#Go_1"><span class="tocnumber">8.2</span> <span class="toctext">Go 1</span></a></li>
<li class="toclevel-2 tocsection-44"><a href="#Go_2.0"><span class="tocnumber">8.3</span> <span class="toctext">Go 2.0</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-45"><a href="#Реализации"><span class="tocnumber">9</span> <span class="toctext">Реализации</span></a></li>
<li class="toclevel-1 tocsection-46"><a href="#Средства_разработки"><span class="tocnumber">10</span> <span class="toctext">Средства разработки</span></a></li>
<li class="toclevel-1 tocsection-47"><a href="#Примеры"><span class="tocnumber">11</span> <span class="toctext">Примеры</span></a></li>
<li class="toclevel-1 tocsection-48"><a href="#Примечания"><span class="tocnumber">12</span> <span class="toctext">Примечания</span></a></li>
<li class="toclevel-1 tocsection-49"><a href="#Пояснения"><span class="tocnumber">13</span> <span class="toctext">Пояснения</span></a></li>
<li class="toclevel-1 tocsection-50"><a href="#Литература"><span class="tocnumber">14</span> <span class="toctext">Литература</span></a></li>
<li class="toclevel-1 tocsection-51"><a href="#Ссылки"><span class="tocnumber">15</span> <span class="toctext">Ссылки</span></a></li>
</ul>
</div>
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
		
<table class="infobox" style="" data-name="Язык программирования"><tbody><tr><th colspan="2" class="infobox-above" style="background:#cfe3ff;">Go</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span class="wikidata-claim" data-wikidata-property-id="P154" data-wikidata-claim-id="Q37227$655c72c3-4148-2231-f14e-581fe73aefc8"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Go_Logo_Blue.svg" class="image"><img alt="Go Logo Blue.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Go_Logo_Blue.svg/215px-Go_Logo_Blue.svg.png" decoding="async" width="215" height="80" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Go_Logo_Blue.svg/322px-Go_Logo_Blue.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Go_Logo_Blue.svg/429px-Go_Logo_Blue.svg.png 2x" data-file-width="512" data-file-height="191" /></a></span></span> </td></tr>
<tr>
<th class="plainlist">Класс языка</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P31"><a href="/wiki/%D0%9F%D0%B0%D1%80%D0%B0%D0%BB%D0%BB%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%B2%D1%8B%D1%87%D0%B8%D1%81%D0%BB%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B" title="Параллельные вычислительные системы">многопоточный</a>, <a href="/wiki/%D0%98%D0%BC%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Императивное программирование">императивный</a>, <a href="/wiki/%D0%A1%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Структурное программирование">структурированный</a></span></td>
</tr>
<tr>
<th class="plainlist">Тип исполнения</th>
<td class="plainlist">
<a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%82%D0%BE%D1%80" title="Компилятор">компилируемый</a></td>
</tr>
<tr>
<th class="plainlist">Появился в</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P571" data-wikidata-claim-id="Q37227$ce313459-4653-3879-e284-895b78da183a"><span class="wikidata-snak wikidata-main-snak"><span class="nowrap"><a href="/wiki/10_%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F" title="10 ноября">10 ноября</a> <a href="/wiki/2009_%D0%B3%D0%BE%D0%B4" title="2009 год">2009</a></span></span></span></td>
</tr>
<tr>
<th class="plainlist">Автор</th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P287"><a href="/w/index.php?title=%D0%93%D1%80%D0%B8%D0%B7%D0%BC%D0%B5%D1%80,_%D0%A0%D0%BE%D0%B1%D0%B5%D1%80%D1%82&amp;action=edit&amp;redlink=1" class="new" title="Гризмер, Роберт (страница отсутствует)">Роберт Гризмер</a>, <a href="/wiki/%D0%9F%D0%B0%D0%B9%D0%BA,_%D0%A0%D0%BE%D0%B1" title="Пайк, Роб">Роб Пайк</a> и <a href="/wiki/%D0%A2%D0%BE%D0%BC%D0%BF%D1%81%D0%BE%D0%BD,_%D0%9A%D0%B5%D0%BD" title="Томпсон, Кен">Кен Томпсон</a></span></td>
</tr>
<tr>
<th class="plainlist">Разработчик</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="q37227$47750EE2-D016-4EC2-8C38-81338B68AB79"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Google_(%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F)" title="Google (компания)">Google</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q37227$6b21e859-4d69-70ff-c574-1c757263d472"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9F%D0%B0%D0%B9%D0%BA,_%D0%A0%D0%BE%D0%B1" title="Пайк, Роб">Роб Пайк</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q37227$d9770b9d-4627-1342-342e-ba9fe78ff7ab"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A2%D0%BE%D0%BC%D0%BF%D1%81%D0%BE%D0%BD,_%D0%9A%D0%B5%D0%BD" title="Томпсон, Кен">Кен Томпсон</a></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P178" data-wikidata-claim-id="Q37227$fd4902a4-400a-b9f8-65bb-ee3027d2f29e"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=The+Go+Authors&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q66022953&amp;preloadparams%5B%5D=The+Go+Authors&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">The Go Authors</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q66022953" class="extiw" title="d:Q66022953">[d]</a></sup></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A0%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%B8%D0%B5_%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8_%D1%84%D0%B0%D0%B9%D0%BB%D0%B0" title="Расширение имени файла">Расширение</a> файлов</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P1195" data-wikidata-claim-id="Q37227$5eeca5cb-417f-f47e-e752-2768efa2169f"><span class="wikidata-snak wikidata-main-snak"><code>.go</code></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D1%82%D0%B0%D0%B4%D0%B8%D0%B8_%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F" title="Стадии разработки программного обеспечения">Выпуск</a></th>
<td class="plainlist">
<span class="no-wikidata" data-wikidata-property-id="P348"><span class="no-wikidata" data-wikidata-property-id="P348">1.14.1 ( 10 марта 2020)</span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%A1%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Система типов">Система типов</a></th>
<td class="plainlist">
<a href="/wiki/%D0%A1%D1%82%D1%80%D0%BE%D0%B3%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" class="mw-redirect" title="Строгая типизация">строгая</a>, <a href="/wiki/%D0%A1%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Статическая типизация">статическая</a>, <a href="/wiki/%D0%92%D1%8B%D0%B2%D0%BE%D0%B4_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Вывод типов">с&#160;выводом типов</a></td>
</tr>
<tr>
<th class="plainlist">Испытал влияние</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$996b4ba0-4f0e-3d48-9458-8eed982a6107"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a></span><sup id="cite_ref-_1911eb470d5ac6c3_1-0" class="reference"><a href="#cite_note-_1911eb470d5ac6c3-1">&#91;1&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$1e603c79-465f-b07d-09bc-67763758551f"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Python" title="Python">Python</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$05d8ee26-4c9b-e8dd-36ea-7d31fa258f39"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9E%D0%B1%D0%B5%D1%80%D0%BE%D0%BD-2_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Оберон-2 (язык программирования)">Оберон-2</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$d57ddc3d-463c-1c73-4e44-b39622c932c7"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Limbo" title="Limbo">Limbo</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$95911dba-44ad-a3f2-759a-d61b0603d7fa"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Active_Oberon" title="Active Oberon">Active Oberon</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$a7cd8764-437a-394d-20b3-18cd49cb49d5"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%92%D0%B7%D0%B0%D0%B8%D0%BC%D0%BE%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D1%83%D1%8E%D1%89%D0%B8%D0%B5_%D0%BF%D0%BE%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D1%8B" title="Взаимодействующие последовательные процессы">теория взаимодействия последовательных процессов</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$23b4d4eb-4c8c-4a3b-3e98-89bca80055e4"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9F%D0%B0%D1%81%D0%BA%D0%B0%D0%BB%D1%8C_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Паскаль (язык программирования)">Паскаль</a></span><sup id="cite_ref-_1911eb470d5ac6c3_1-1" class="reference"><a href="#cite_note-_1911eb470d5ac6c3-1">&#91;1&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$eb819df5-41e1-7655-1ecb-ddc8046891b4"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9E%D0%B1%D0%B5%D1%80%D0%BE%D0%BD_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Оберон (язык программирования)">Оберон</a></span><sup id="cite_ref-_1911eb470d5ac6c3_1-2" class="reference"><a href="#cite_note-_1911eb470d5ac6c3-1">&#91;1&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$b4ef4c44-48ef-408d-71ed-d3989aa757f8"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Smalltalk" title="Smalltalk">Smalltalk</a></span><sup id="cite_ref-_b60436fdf1662f0d_2-0" class="reference"><a href="#cite_note-_b60436fdf1662f0d-2">&#91;2&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$ef096864-406b-e39a-30ae-0dc925f702db"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=Newsqueak&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q262003&amp;preloadparams%5B%5D=Newsqueak&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">Newsqueak</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q262003" class="extiw" title="d:Q262003">[d]</a></sup></span><sup id="cite_ref-_7df95e4fb39c406f_3-0" class="reference"><a href="#cite_note-_7df95e4fb39c406f-3">&#91;3&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$38286b97-4d66-b685-1e09-7630136f54fa"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9C%D0%BE%D0%B4%D1%83%D0%BB%D0%B0-2" title="Модула-2">Модула-2</a></span><sup id="cite_ref-_7df95e4fb39c406f_3-1" class="reference"><a href="#cite_note-_7df95e4fb39c406f-3">&#91;3&#93;</a></sup></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$ba511a46-3807-4145-8e3d-981aeff83bc8"><span class="wikidata-snak wikidata-main-snak"><span class="plainlinks"><a class="external text" href="https://ru.wikipedia.org/w/index.php?title=Alef&amp;action=edit&amp;editintro=T:Нет_статьи/editintro&amp;preload=T:Нет_статьи/preload&amp;preloadparams%5B%5D=Q1895587&amp;preloadparams%5B%5D=Alef&amp;preloadparams%5B%5D=Универсальная_карточка"><span style="color: #ba0000; text-decoration: inherit; -moz-text-decoration-color: #ba0000; text-decoration-color: #ba0000;">Alef</span></a></span><sup><a href="https://www.wikidata.org/wiki/Q1895587" class="extiw" title="d:Q1895587">[d]</a></sup></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$8efc4dc6-c396-4bc3-9856-dde447be68cf"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/APL_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="APL (язык программирования)">APL</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$33442c1d-1b21-4cb6-ad41-e8410b0ff042"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/BCPL" title="BCPL">BCPL</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$f09165d1-3ed0-43bf-9590-a08ab9579e30"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9C%D0%BE%D0%B4%D1%83%D0%BB%D0%B0" title="Модула">Модула</a></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P737" data-wikidata-claim-id="Q37227$bb66e2f2-4319-4eea-95a6-ee0e493e6e09"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Occam" title="Occam">Оккам</a></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_%D0%BD%D0%B0_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B5" title="Лицензия на программное обеспечение">Лицензия</a></th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P275" data-wikidata-claim-id="Q37227$5db33785-4a77-653a-1cca-756c135cc1db"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_BSD" title="Лицензия BSD">BSD</a></span></span></td>
</tr>
<tr>
<th class="plainlist">Сайт</th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P856" data-wikidata-claim-id="Q37227$FE834604-C9AE-4CA1-8520-2A48B325EC58"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://golang.org">golang.org</a></span></span><br /><span class="wikidata-claim" data-wikidata-property-id="P856" data-wikidata-claim-id="Q37227$f3f28ec3-49ce-934b-a380-032b228d4b9f"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://go.dev">go.dev</a></span></span></td>
</tr>
<tr>
<th class="plainlist"><a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Операционная система">ОС</a></th>
<td class="plainlist">
<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$a1d5acc5-456f-253f-d82e-5a4e6e77071c"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/DragonFly_BSD" title="DragonFly BSD">DragonFly BSD</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$1e51d1e5-4155-3ab2-ce9c-42ae00834229"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/FreeBSD" title="FreeBSD">FreeBSD</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$b2693240-4f63-4932-486a-294202d38a2f"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Linux" title="Linux">Linux</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$2f3d0fbf-4473-7cbf-55bb-c1d154067839"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/MacOS" title="MacOS">macOS</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$ac38b242-408b-ca3d-69d9-75fcb7f7c62e"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/NetBSD" title="NetBSD">NetBSD</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$f54f7b1c-4240-64f0-b338-5a8345b1bb05"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/OpenBSD" title="OpenBSD">OpenBSD</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$b1e60d6b-485b-1547-98bf-0c390939f9ba"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Plan_9" title="Plan 9">Plan 9</a></span></span>,&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$45700c4e-4678-a3a7-a191-fd48268b4db8"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Solaris" title="Solaris">Solaris</a></span></span>&#32;и&#32;<span class="wikidata-claim" data-wikidata-property-id="P306" data-wikidata-claim-id="Q37227$6e1fbde2-41e5-0b8e-437f-659f57cdc3d5"><span class="wikidata-snak wikidata-main-snak"><a href="/wiki/Windows" title="Windows">Microsoft Windows</a></span></span></td>
</tr><tr><td colspan="2" class="infobox-below" style="background:#dcebff;;"><span class="wikidata-claim" data-wikidata-property-id="P373" data-wikidata-claim-id="Q37227$1E4EB23F-5E87-44EE-AA33-CCA786ECA378"><span class="wikidata-snak wikidata-main-snak"><a href="https://commons.wikimedia.org/wiki/Category:Go_(programming_language)" title="commons:Category:Go (programming language)"><img alt="Commons-logo.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/15px-Commons-logo.svg.png" decoding="async" width="15" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/23px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></a>&#160;<a href="https://commons.wikimedia.org/wiki/Category:Go_(programming_language)" class="extiw" title="commons:Category:Go (programming language)">Медиафайлы на Викискладе</a></span></span></td></tr>
</tbody></table>
<p><b>Go</b> (часто также <b>Golang</b>)&#160;— <a href="/wiki/%D0%9A%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D0%B8%D1%80%D1%83%D0%B5%D0%BC%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Компилируемый язык программирования">компилируемый</a> <a href="/wiki/%D0%9F%D0%B0%D1%80%D0%B0%D0%BB%D0%BB%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%B2%D1%8B%D1%87%D0%B8%D1%81%D0%BB%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B" title="Параллельные вычислительные системы">многопоточный</a> <a href="/wiki/%D0%AF%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" title="Язык программирования">язык программирования</a>, разработанный внутри компании <a href="/wiki/Google_(%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F)" title="Google (компания)">Google</a><sup id="cite_ref-4" class="reference"><a href="#cite_note-4">&#91;4&#93;</a></sup>. Разработка Go началась в сентябре 2007 года, его непосредственным проектированием занимались <a href="/w/index.php?title=%D0%93%D1%80%D0%B8%D0%B7%D0%BC%D0%B5%D1%80,_%D0%A0%D0%BE%D0%B1%D0%B5%D1%80%D1%82&amp;action=edit&amp;redlink=1" class="new" title="Гризмер, Роберт (страница отсутствует)">Роберт Гризмер</a>, <a href="/wiki/%D0%9F%D0%B0%D0%B9%D0%BA,_%D0%A0%D0%BE%D0%B1" title="Пайк, Роб">Роб Пайк</a> и <a href="/wiki/%D0%A2%D0%BE%D0%BC%D0%BF%D1%81%D0%BE%D0%BD,_%D0%9A%D0%B5%D0%BD" title="Томпсон, Кен">Кен Томпсон</a><sup id="cite_ref-langfaq_5-0" class="reference"><a href="#cite_note-langfaq-5">&#91;5&#93;</a></sup>, занимавшиеся до этого проектом разработки операционной системы <a href="/wiki/Inferno_(%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0)" title="Inferno (операционная система)">Inferno</a>. Официально язык был представлен в ноябре <a href="/wiki/2009_%D0%B3%D0%BE%D0%B4" title="2009 год">2009 года</a>. На данный момент поддержка официального компилятора, разрабатываемого создателями языка, осуществляется для операционных систем <a href="/wiki/FreeBSD" title="FreeBSD">FreeBSD</a>, <a href="/wiki/OpenBSD" title="OpenBSD">OpenBSD</a>, <a href="/wiki/Linux" title="Linux">Linux</a>, <a href="/wiki/MacOS" title="MacOS">macOS</a>, <a href="/wiki/Windows" title="Windows">Windows</a>, <a href="/wiki/DragonFly_BSD" title="DragonFly BSD">DragonFly BSD</a>, <a href="/wiki/Plan_9" title="Plan 9">Plan 9</a>, <a href="/wiki/Solaris" title="Solaris">Solaris</a>, <a href="/wiki/Android" title="Android">Android</a>, <a href="/wiki/AIX" title="AIX">AIX</a>.<sup id="cite_ref-6" class="reference"><a href="#cite_note-6">&#91;6&#93;</a></sup>. Также Go поддерживается набором компиляторов <a href="/wiki/Gcc" class="mw-redirect" title="Gcc">gcc</a>, существует несколько независимых реализаций. Ведётся разработка второй версии языка.
</p>


<h2><span id=".D0.9D.D0.B0.D0.B7.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Название">Название</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=1" class="mw-editsection-visualeditor" title="Редактировать раздел «Название»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=1" title="Редактировать раздел «Название»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Название языка, выбранное компанией Google, практически совпадает с названием языка программирования <a href="/wiki/Go!" title="Go!">Go!</a>, созданного Ф. Джи. МакКейбом и К.&#160;Л.&#160;Кларком в 2003 году<sup id="cite_ref-goAndGo_7-0" class="reference"><a href="#cite_note-goAndGo-7">&#91;7&#93;</a></sup>. Обсуждение названия ведётся на странице, посвящённой Go<sup id="cite_ref-goAndGo_7-1" class="reference"><a href="#cite_note-goAndGo-7">&#91;7&#93;</a></sup>.
</p><p>На домашней странице языка и вообще в Интернет-публикациях часто используется альтернативное название&#160;— «golang».
</p>
<h2><span id=".D0.9D.D0.B0.D0.B7.D0.BD.D0.B0.D1.87.D0.B5.D0.BD.D0.B8.D0.B5.2C_.D0.B8.D0.B4.D0.B5.D0.BE.D0.BB.D0.BE.D0.B3.D0.B8.D1.8F"></span><span class="mw-headline" id="Назначение,_идеология">Назначение, идеология</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=2" class="mw-editsection-visualeditor" title="Редактировать раздел «Назначение, идеология»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=2" title="Редактировать раздел «Назначение, идеология»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Язык Go разрабатывался как язык программирования для создания высокоэффективных программ, работающих на современных распределённых системах и многоядерных процессорах. Он может рассматриваться как попытка создать замену языкам <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a> и <a href="/wiki/C%2B%2B" title="C++">C++</a> с учётом изменившихся компьютерных технологий и накопленного опыта разработки крупных систем<sup id="cite_ref-design_8-0" class="reference"><a href="#cite_note-design-8">&#91;8&#93;</a></sup>. По словам Роба Пайка<sup id="cite_ref-design_8-1" class="reference"><a href="#cite_note-design-8">&#91;8&#93;</a></sup>, «Go был разработан для решения реальных проблем, возникающих при разработке программного обеспечения в Google». В качестве основных таких проблем он называет:
</p>
<ul><li>медленную сборку программ;</li>
<li>неконтролируемые зависимости;</li>
<li>использование разными программистами разных подмножеств языка;</li>
<li>затруднения с пониманием программ, вызванные неудобочитаемостью кода, плохим документированием и так далее;</li>
<li>дублирование разработок;</li>
<li>высокую стоимость обновлений;</li>
<li>несинхронные обновления при дублировании кода;</li>
<li>сложность разработки инструментария;</li>
<li>проблемы межъязыкового взаимодействия.</li></ul>
<p>Основными требованиями к языку стали<sup id="cite_ref-9" class="reference"><a href="#cite_note-9">&#91;9&#93;</a></sup>:
</p>
<ul><li>Ортогональность. Язык должен предоставлять небольшое число средств, не повторяющих функциональность друг друга.</li>
<li>Простая и регулярная грамматика. Минимум ключевых слов, простая, легко разбираемая грамматическая структура, легко читаемый код.</li>
<li>Простая работа с типами. Типизация должна обеспечивать безопасность, но не превращаться в бюрократию, лишь увеличивающую код. Отказ от иерархии типов, но с сохранением объектно-ориентированных возможностей.</li>
<li>Отсутствие неявных преобразований.</li>
<li>Сборка мусора.</li>
<li>Встроенные средства распараллеливания, простые и эффективные.</li>
<li>Поддержка строк, ассоциативных массивов и коммуникационных каналов.</li>
<li>Чёткое разделение интерфейса и реализации.</li>
<li>Эффективная система пакетов с явным указанием зависимостей, обеспечивающая быструю сборку.</li></ul>
<p>Go создавался в расчёте на то, что программы на нём будут транслироваться в объектный код и исполняться непосредственно, не требуя <a href="/wiki/%D0%92%D0%B8%D1%80%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D0%B0" title="Виртуальная машина">виртуальной машины</a>, поэтому одним из критериев выбора архитектурных решений была возможность обеспечить быструю компиляцию в эффективный объектный код и отсутствие чрезмерных требований к динамической поддержке.
</p><p>В результате получился язык, «который не стал прорывом, но тем не менее явился отличным инструментом для разработки крупных программных проектов»<sup id="cite_ref-design_8-2" class="reference"><a href="#cite_note-design-8">&#91;8&#93;</a></sup>.
</p><p>Хотя для Go доступен и <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%BF%D1%80%D0%B5%D1%82%D0%B0%D1%82%D0%BE%D1%80" title="Интерпретатор">интерпретатор</a>, практически в нём нет большой потребности, так как скорость компиляции достаточно высока для обеспечения интерактивной разработки.
</p>
<h2><span id=".D0.9E.D1.81.D0.BD.D0.BE.D0.B2.D0.BD.D1.8B.D0.B5_.D0.B2.D0.BE.D0.B7.D0.BC.D0.BE.D0.B6.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0"></span><span class="mw-headline" id="Основные_возможности_языка">Основные возможности языка</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=3" class="mw-editsection-visualeditor" title="Редактировать раздел «Основные возможности языка»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=3" title="Редактировать раздел «Основные возможности языка»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Основные возможности языка Go<sup id="cite_ref-langfaq_5-1" class="reference"><a href="#cite_note-langfaq-5">&#91;5&#93;</a></sup>:
</p>
<ul><li>Go&#160;— язык со строгой <a href="/wiki/%D0%A1%D1%82%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Статическая типизация">статической типизацией</a>. Доступен автоматический вывод типов, для пользовательских типов&#160;— «<a href="/wiki/%D0%A3%D1%82%D0%B8%D0%BD%D0%B0%D1%8F_%D1%82%D0%B8%D0%BF%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Утиная типизация">утиная типизация</a>».</li>
<li>Полноценная поддержка указателей, но без возможности применять к ним арифметические операции, в отличие от <a href="/wiki/C_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" class="mw-redirect" title="C (язык программирования)">C</a>/<a href="/wiki/C%2B%2B" title="C++">C++</a>/<a href="/wiki/D_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="D (язык программирования)">D</a>.</li>
<li>Строковый тип со встроенной поддержкой <a href="/wiki/%D0%AE%D0%BD%D0%B8%D0%BA%D0%BE%D0%B4" title="Юникод">юникода</a>.</li>
<li>Использование <a href="/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%BC%D0%B0%D1%81%D1%81%D0%B8%D0%B2" title="Динамический массив">динамических</a> <a href="/wiki/%D0%9C%D0%B0%D1%81%D1%81%D0%B8%D0%B2_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Массив (программирование)">массивов</a>, <a href="/wiki/%D0%A5%D0%B5%D1%88-%D1%82%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0" title="Хеш-таблица">хеш-таблиц</a> (словарей), срезов (слайсов), вариант цикла для обхода коллекции.</li>
<li>Средства <a href="/wiki/%D0%A4%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Функциональное программирование">функционального программирования</a>: неименованные функции, замыкания, передача функций в параметрах и возврат функциональных значений.</li>
<li>Автоматическое управление памятью со <a href="/wiki/%D0%A1%D0%B1%D0%BE%D1%80%D0%BA%D0%B0_%D0%BC%D1%83%D1%81%D0%BE%D1%80%D0%B0_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Сборка мусора (программирование)">сборщиком мусора</a>.</li>
<li>Средства <a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">объектно-ориентированного программирования</a>, но без поддержки наследования реализации (наследуются только интерфейсы). По большому счёту, Go является процедурным языком с поддержкой интерфейсов.</li>
<li>Средства параллельного программирования: встроенные в язык потоки (go routines), взаимодействие потоков через <a href="/wiki/%D0%9A%D0%B0%D0%BD%D0%B0%D0%BB_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Канал (программирование)">каналы</a> и другие средства организации многопоточных программ.</li>
<li>Достаточно лаконичный и простой синтаксис, основанный на Си, но существенно доработанный, с большим количеством <a href="/wiki/%D0%A1%D0%B8%D0%BD%D1%82%D0%B0%D0%BA%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D1%81%D0%B0%D1%85%D0%B0%D1%80" title="Синтаксический сахар">синтаксического сахара</a>.</li></ul>
<p>Go не содержит целого ряда популярных синтаксических средств, доступных в других современных языках прикладного программирования. Во многих случаях это вызвано сознательным решением разработчиков. Краткие обоснования выбранных проектных решений можно найти в «Часто задаваемых вопросах»<sup id="cite_ref-langfaq_5-2" class="reference"><a href="#cite_note-langfaq-5">&#91;5&#93;</a></sup> по языку, более подробные&#160;— в опубликованных на сайте языка статьях и обсуждениях, рассматривающих различные варианты дизайна. В частности:
</p>
<ul><li>Структурная запись <a href="/wiki/%D0%9E%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0_%D0%B8%D1%81%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B9" title="Обработка исключений">обработчиков исключений</a> сочтена провоцирующей на пропуск ошибок или неадекватную их обработку. К тому же поддержка исключений серьёзно усложняется в приложениях с параллельно работающими частями. Вместо неё предлагается проверка кодов возврата с использованием многозначных функций и специального интерфейса error, а также применение отложенных (deferred) функций для перехвата исключительных ситуаций.</li>
<li><a href="/wiki/%D0%9D%D0%B0%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Наследование (программирование)">Наследование</a> реализации, как считают авторы, приводит к созданию кода с неявными зависимостями, избыточно сложного в поддержке. Аналогичные возможности, но без свойственных наследованию нежелательных эффектов, обеспечиваются поддержкой вложения типов и свободно определяемыми интерфейсами.</li>
<li><a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Обобщённое программирование">Обобщённое программирование</a>. Авторы воздержались от его включения в первую версию языка, поскольку, по их словам<sup id="cite_ref-langfaq_5-3" class="reference"><a href="#cite_note-langfaq-5">&#91;5&#93;</a></sup>, предоставляемые им возможности не окупают требуемого усложнения компилятора и runtime-библиотек, а уже имеющиеся в языке средства (пустые интерфейсы, «утиная типизация» и рефлексия) позволяют создавать обобщённый код без специальных синтаксических механизмов. Тем не менее, обсуждается вопрос о включении таких средств в проектируемую вторую версию языка<style data-mw-deduplicate="TemplateStyles:r104609042">.mw-parser-output .ts-Переход img{margin-left:.285714em}</style><span class="ts-Переход noprint" title="#Go 2.0"><sup><a href="#Go_2.0">[⇨]</a></sup></span>.</li>
<li>Использование <a href="/wiki/%D0%A3%D1%82%D0%B2%D0%B5%D1%80%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Утверждение (программирование)">утверждений (assertion)</a> было сочтено ненужным.</li>
<li><a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%BE%D0%BF%D1%80%D0%B5%D0%B4%D0%B5%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D0%BC%D0%B5%D1%82%D0%BE%D0%B4%D0%B0" title="Переопределение метода">Переопределение методов и функций</a> было исключено из соображений надёжности и эффективности компиляции: требование различного именования всех методов на одном уровне видимости устраняет необходимость сопоставлять списки параметров при компиляции вызовов функций и методов и исключает ошибочный вызов другого одноимённого метода; при этом сама возможность переопределения есть не более чем <a href="/wiki/%D0%A1%D0%B8%D0%BD%D1%82%D0%B0%D0%BA%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D1%81%D0%B0%D1%85%D0%B0%D1%80" title="Синтаксический сахар">синтаксический сахар</a>.</li>
<li>Ряд операций над массивами и срезами (например, вставка элемента в середину) не включен в язык, поскольку они достаточно затратны. Возможность их выполнения одной простой командой провоцировала бы программиста на создание неэффективного кода, отсутствие таких команд в языке, напротив, является стимулом для рассмотрения альтернативных решений.</li>
<li>Поддержка отрицательных индексов,<sup id="cite_ref-10" class="reference"><a href="#cite_note-10">&#91;10&#93;</a></sup> доступная в ряде популярных языков, может стать причиной труднообнаруживаемых ошибок: появление отрицательного индекса из-за ошибки в коде вместо того, чтобы привести к фатальному сбою, вызовет внешне корректное обращение не к тем элементам массива, что проявится только в неверных результатах и может быть обнаружено далеко не сразу.</li>
<li>Принцип «любое выражение возвращает значение» провоцирует программиста на создание сложных, трудно воспринимаемых и чреватых неочевидными ошибками выражений (вроде копирования строки на Си командой из трёх слов: <code> while (*ptr1++ = *ptr2++);</code>). При этом современные технологии оптимизации обеспечат одинаковый объектный код и для экстремально сокращённого выражения, и для аналогичного ему фрагмента, написанного безо всяких ухищрений.</li></ul>
<h2><span id=".D0.A1.D0.B8.D0.BD.D1.82.D0.B0.D0.BA.D1.81.D0.B8.D1.81"></span><span class="mw-headline" id="Синтаксис">Синтаксис</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=4" class="mw-editsection-visualeditor" title="Редактировать раздел «Синтаксис»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=4" title="Редактировать раздел «Синтаксис»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Синтаксис языка Go схож с синтаксисом языка <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a>, с отдельными элементами, заимствованными из <a href="/wiki/%D0%9E%D0%B1%D0%B5%D1%80%D0%BE%D0%BD_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Оберон (язык программирования)">Оберона</a> и <a href="/wiki/%D0%A1%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D0%B2%D1%8B%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" class="mw-redirect" title="Скриптовый язык">скриптовых языков</a>.
</p>
<h3><span id=".D0.90.D0.BB.D1.84.D0.B0.D0.B2.D0.B8.D1.82"></span><span class="mw-headline" id="Алфавит">Алфавит</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=5" class="mw-editsection-visualeditor" title="Редактировать раздел «Алфавит»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=5" title="Редактировать раздел «Алфавит»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Go&#160;— регистрозависимый язык с полной поддержкой Юникода в строках и идентификаторах.
</p><p>Идентификатор традиционно может быть любой непустой последовательностью, включающей буквы, цифры и знак подчёркивания, начинающийся с буквы и не совпадающий ни с одним из ключевых слов языка Go. При этом под «буквами» понимаются все символы Юникода, относящиеся к категориям «Lu» (буквы верхнего регистра), «Ll» (буквы нижнего регистра), «Lt» (заглавные буквы), «Lm» (буквы-модификаторы) или «Lo» (прочие буквы), под «цифрами»&#160;— все символы из категории «Nd» (числа, десятичные цифры). Таким образом, ничто не мешает использовать в идентификаторах, например, кириллицу.
</p><p>Идентификаторы, различающиеся только регистром букв, являются различными. В языке существует ряд соглашений об использовании заглавных и строчных букв. В частности, в именах пакетов используются только строчные буквы. Все ключевые слова Go пишутся в нижнем регистре.
</p><p>В строковых литералах могут использоваться все символы <a href="/wiki/%D0%AE%D0%BD%D0%B8%D0%BA%D0%BE%D0%B4" title="Юникод">Юникода</a> без ограничений. Строки представляются как последовательности символов в кодировке <a href="/wiki/UTF-8" title="UTF-8">UTF-8</a>.
</p>
<h3><span id=".D0.9F.D0.B0.D0.BA.D0.B5.D1.82.D1.8B"></span><span class="mw-headline" id="Пакеты">Пакеты</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=6" class="mw-editsection-visualeditor" title="Редактировать раздел «Пакеты»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=6" title="Редактировать раздел «Пакеты»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Любая программа на Go включает один или несколько пакетов. Пакет, к которому относится файл исходного кода, задаётся описанием package в начале файла. Имена пакетов имеют те же ограничения, что и идентификаторы, но могут содержать буквы только нижнего регистра. Система пакетов go-среды имеет древовидную структуру, аналогичную дереву каталогов. Любые глобальные объекты (переменные, типы, интерфейсы, функции, методы, элементы структур и интерфейсов) доступны без ограничений в пакете, в котором они объявлены. Глобальные объекты, имена которых начинаются на заглавную букву, являются экспортируемыми.
</p><p>Для использования в файле кода Go объектов, экспортированных другим пакетом, пакет должен быть импортирован, для чего применяется конструкция <code>import</code>.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kn">package</span> <span class="nx">main</span>
<span class="cm">/* Импорт */</span>
<span class="kn">import</span> <span class="p">(</span>
	<span class="s">&quot;fmt&quot;</span>           <span class="c1">// Стандартный пакет для форматированного вывода</span>
	<span class="s">&quot;database/sql&quot;</span>  <span class="c1">// Импорт вложенного пакета</span>
	<span class="nx">w</span> <span class="s">&quot;os&quot;</span>          <span class="c1">// Импорт с псевдонимом</span>
	<span class="p">.</span> <span class="s">&quot;math&quot;</span>        <span class="c1">// Импорт без квалификации при использовании</span>
	<span class="nx">_</span> <span class="s">&quot;gopkg.in/goracle.v2&quot;</span>  <span class="c1">// Пакет не имеет явных обращений в коде</span>
<span class="p">)</span>

<span class="kd">func</span> <span class="nx">main</span><span class="p">()</span> <span class="p">{</span>
    <span class="k">for</span> <span class="nx">_</span><span class="p">,</span> <span class="nx">arg</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">w</span><span class="p">.</span><span class="nx">Args</span> <span class="p">{</span> <span class="c1">// Обращение к массиву Args, объявленному в пакете &quot;os&quot;, через псевдоним</span>
        <span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">arg</span><span class="p">)</span>  <span class="c1">// Обращение к функции Println(), объявленной в пакете &quot;fmt&quot;, с именем пакета</span>
    <span class="p">}</span>
    <span class="nx">db</span> <span class="o">*</span><span class="nx">sql</span><span class="p">.</span><span class="nx">DB</span> <span class="p">=</span> <span class="nx">sql</span><span class="p">.</span><span class="nx">Open</span><span class="p">(</span><span class="nx">driver</span><span class="p">,</span> <span class="nx">dataSource</span><span class="p">)</span>  <span class="c1">// Имена из вложенного пакета квалифицируются </span>
                                               <span class="c1">// только именем самого пакета (sql)</span>
    <span class="nx">x</span> <span class="o">:=</span> <span class="nx">Sin</span><span class="p">(</span><span class="mf">1.0</span><span class="p">)</span> <span class="c1">// вызов math.Sin() - квалификация именем пакета math не нужна,</span>
                  <span class="c1">// так как он импортирован без имени</span>
    <span class="c1">// Обращений к пакету &quot;goracle.v2&quot; в коде нет, но он будет импортирован. </span>
<span class="p">}</span>
</pre></div>
<p>В ней перечисляются пути к импортируемым пакетам от каталога src в дереве исходных текстов, положение которого задаётся переменной среды <code>GOPATH</code>, а для стандартных пакетов достаточно указать имя. Перед строкой, идентифицирующей пакет, может быть указан псевдоним, тогда он будет использоваться в коде вместо имени пакета. Импортированные объекты доступны в импортирующем их файле с полной квалификацией вида «<code>пакет.Объект</code>». Если при импорте пакета вместо псевдонима указывается точка, то все экспортируемые им имена будут доступны без квалификации. Эта возможность используется некоторыми системными утилитами, однако её применение программистом не рекомендуется, так как явная квалификация обеспечивает защиту от коллизий имён и «незаметного» изменения поведения кода. Невозможно импортировать без квалификации два пакета, экспортирующих одно и то же имя.
</p><p>Импорт пакетов в Go строго контролируется: если пакет импортирован модулем, то в коде данного модуля должно использоваться хотя бы одно экспортируемое этим пакетом имя. Компилятор Go считает импорт неиспользуемого пакета ошибкой; такое решение вынуждает разработчика постоянно поддерживать актуальность списков импорта. Затруднений это не создаёт, так как средства поддержки программирования на Go (редакторы, IDE), как правило, обеспечивают автоматическую проверку и актуализацию списков импорта.
</p><p>Когда пакет содержит код, используемый только посредством <a href="/wiki/%D0%98%D0%BD%D1%82%D1%80%D0%BE%D1%81%D0%BF%D0%B5%D0%BA%D1%86%D0%B8%D1%8F_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Интроспекция (программирование)">интроспекции</a>, возникает проблема: импорт такого пакета необходим для включения его в состав программы, но не будет разрешён компилятором, так как к нему не обращаются напрямую. Для таких случаев предусмотрен анонимный импорт: в качестве псевдонима указывается «<b><code>_</code></b>» (одиночный знак подчёркивания); пакет, импортированный таким образом, будет откомпилирован и включён в состав программы при отсутствии явных ссылок на него в коде. Такой пакет, однако, не может быть использован явно; это не позволяет обойти контроль импорта, импортируя все пакеты как анонимные.
</p><p>Исполняемая программа на Go обязательно содержит пакет с именем main, в котором обязательно должна быть функция <code>main()</code> без параметров и возвращаемого значения. Функция <code>main.main()</code> является «телом программы»&#160;— её код запускается, когда программа стартует. Любой пакет может содержать функцию <code>init()</code>&#160;— она будет запущена при загрузке программы перед началом её исполнения, до вызова любой функции в данном пакете и в любом пакете, импортирующем данный. Инициализация пакета main всегда происходит последней, и все инициализации выполняются до начала исполнения функции <code>main.main()</code>.
</p>
<h3><span id=".D0.9C.D0.BE.D0.B4.D1.83.D0.BB.D0.B8"></span><span class="mw-headline" id="Модули">Модули</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=7" class="mw-editsection-visualeditor" title="Редактировать раздел «Модули»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=7" title="Редактировать раздел «Модули»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Система пакетов Go была разработана в предположении, что вся экосистема разработки существует в виде единого файлового дерева, содержащего актуальные версии всех пакетов, а при появлении новых версий она целиком перекомпилируется. Для прикладного программирования с использованием сторонних библиотек это достаточно сильное ограничение. В реальности часто возникают ограничения по версиям пакетов, используемых тем или иным кодом, а также ситуации, когда разные версии (ветви) одного проекта используют разные версии библиотечных пакетов.
</p><p>Начиная с версии 1.11 в Go поддерживаются так называемые <i>модули</i>. Модуль&#160;— это специальным образом описанный пакет, содержащий информацию о своей версии. При импорте модуля фиксируется версия, которая была использована. Это позволяет системе сборки контролировать, удовлетворены ли все зависимости, автоматически обновлять импортированные модули, когда автор вносит в них совместимые изменения, и блокировать обновление до версий, не обеспечивающих обратной совместимости. Предполагается, что модули станут решением (или значительно облегчат решение) проблемы с контролем зависимостей.
</p>
<h3><span id=".D0.9A.D0.BE.D0.BC.D0.BC.D0.B5.D0.BD.D1.82.D0.B0.D1.80.D0.B8.D0.B8_.D0.B8_.D1.82.D0.BE.D1.87.D0.BA.D0.B8_.D1.81_.D0.B7.D0.B0.D0.BF.D1.8F.D1.82.D0.BE.D0.B9"></span><span class="mw-headline" id="Комментарии_и_точки_с_запятой">Комментарии и точки с запятой</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=8" class="mw-editsection-visualeditor" title="Редактировать раздел «Комментарии и точки с запятой»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=8" title="Редактировать раздел «Комментарии и точки с запятой»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Go использует оба типа комментариев в стиле Си: строчные (начинающиеся с // …) и блочные (/* … */). Строчный комментарий рассматривается компилятором как перевод строки. Блочный, располагающийся на одной строке&#160;— как пробел, на нескольких строках&#160;— как перевод строки.
</p><p><a href="/wiki/%D0%A2%D0%BE%D1%87%D0%BA%D0%B0_%D1%81_%D0%B7%D0%B0%D0%BF%D1%8F%D1%82%D0%BE%D0%B9" title="Точка с запятой">Точка с запятой</a> в Go используется в качестве обязательного разделителя в некоторых операциях (if, for, switch).
Формально также она должна завершать каждую команду, но практически ставить такую точку с запятой в конце строки нет необходимости, так как компилятор в процессе обработки кода сам добавляет точки с запятой в конец каждой строки, которая, без учёта пустых символов, завершается идентификатором, числом, символьным литералом, строкой, ключевыми словами break, continue, fallthrough, return, командой инкремента или декремента (++ или --) или закрывающей круглой, квадратной или фигурной скобкой (важное исключение&#160;— запятая в приведённый список не входит). Из этого следует две особенности:
</p>
<ul><li>Практически точка с запятой нужна только в некоторых форматах операторов if, for, switch и для разделения команд, расположенных на одной строке. Поэтому в коде на Go точек с запятой очень мало.</li>
<li>Побочным эффектом автоматической расстановки точек с запятой компилятором стало то, что не в любом месте программы, где допустим пробел, можно использовать перенос строки. В частности, в описаниях, командах инициализации и конструкциях if, for, switch нельзя переносить открывающуюся фигурную скобку на следующую строку:</li></ul>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">g</span><span class="p">()</span> <span class="c1">//&#160;!</span>
<span class="p">{</span>        <span class="c1">// НЕВЕРНО</span>
<span class="p">}</span>

<span class="k">if</span> <span class="nx">x</span> <span class="p">{</span>
<span class="p">}</span>      <span class="c1">//&#160;!</span>
<span class="k">else</span> <span class="p">{</span> <span class="c1">// НЕВЕРНО</span>
<span class="p">}</span>

<span class="kd">func</span> <span class="nx">g</span><span class="p">(){</span> <span class="c1">// ВЕРНО</span>
<span class="p">}</span>

<span class="k">if</span> <span class="nx">x</span> <span class="p">{</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span> <span class="c1">// ВЕРНО</span>
<span class="p">}</span>
</pre></div></dd></dl>
<dl><dd>Здесь в двух первых случаях компилятор вставит точку с запятой в строке, помеченной комментарием с восклицательным знаком, так как строка заканчивается (без учёта пробелов и комментария), соответственно, на круглую и фигурную закрывающиеся скобки. В результате будет нарушен синтаксис объявления функции в первом случае и условного оператора&#160;— во втором.</dd></dl>
<dl><dd>Аналогично нельзя в списке элементов, разделённых запятыми, переносить запятую на следующую строку:</dd></dl>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">f</span><span class="p">(</span><span class="nx">i</span>      <span class="c1">//&#160;!</span>
     <span class="p">,</span> <span class="nx">k</span> <span class="kt">int</span>  <span class="c1">//&#160;!</span>
     <span class="p">,</span> <span class="nx">s</span>      <span class="c1">//&#160;!</span>
     <span class="p">,</span> <span class="nx">t</span> <span class="kt">string</span><span class="p">)</span> <span class="kt">string</span> <span class="p">{</span> <span class="c1">// НЕВЕРНО</span>
<span class="p">}</span>

<span class="kd">func</span> <span class="nx">f</span><span class="p">(</span><span class="nx">i</span><span class="p">,</span>      
       <span class="nx">k</span> <span class="kt">int</span><span class="p">,</span> 
       <span class="nx">s</span><span class="p">,</span> 
       <span class="nx">t</span> <span class="kt">string</span><span class="p">)</span> <span class="kt">string</span> <span class="p">{</span> <span class="c1">// ВЕРНО</span>
<span class="p">}</span>
</pre></div></dd></dl>
<dl><dd>При переносе запятой на следующую строку текущая строка заканчивается идентификатором и в её конце автоматически ставится точка с запятой, что нарушает синтаксис списка (запятая, как уже говорилось выше&#160;— исключение из правила, после неё точка с запятой компилятором не добавляется).</dd></dl>
<dl><dd>Таким образом, язык диктует определённый стиль записи кода. В комплект компилятора Go входит утилита gofmt, обеспечивающая правильное и единообразное форматирование исходных текстов. Все тексты стандартной библиотеки Go отформатированы этой утилитой.</dd></dl>
<h3><span id=".D0.92.D1.81.D1.82.D1.80.D0.BE.D0.B5.D0.BD.D0.BD.D1.8B.D0.B5_.D1.82.D0.B8.D0.BF.D1.8B_.D0.B4.D0.B0.D0.BD.D0.BD.D1.8B.D1.85"></span><span class="mw-headline" id="Встроенные_типы_данных">Встроенные типы данных</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=9" class="mw-editsection-visualeditor" title="Редактировать раздел «Встроенные типы данных»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=9" title="Редактировать раздел «Встроенные типы данных»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Язык содержит достаточно стандартный набор простых встроенных типов данных: целые числа, числа с плавающей запятой, символы, строки, логические значения, а также несколько специальных типов.
</p>
<h4><span id=".D0.A6.D0.B5.D0.BB.D1.8B.D0.B5_.D1.87.D0.B8.D1.81.D0.BB.D0.B0"></span><span class="mw-headline" id="Целые_числа">Целые числа</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=10" class="mw-editsection-visualeditor" title="Редактировать раздел «Целые числа»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=10" title="Редактировать раздел «Целые числа»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Имеется 11 целочисленных типов:
</p>
<ul><li>Целые числа со знаком фиксированного размера&#160;— <code>int8</code>, <code>int16</code>, <code>int32</code>, <code>int64</code>. Это целые числа со знаком, представленные в <a href="/wiki/%D0%94%D0%BE%D0%BF%D0%BE%D0%BB%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BE%D0%B4" title="Дополнительный код">дополнительном коде</a>, размер значений этих типов&#160;— 8, 16, 32, 64 бита соответственно. Диапазон значений составляет от −2<sup>n−1</sup> до 2<sup>n−1</sup>−1, где n&#160;— размер типа.</li>
<li>Целые числа без знака фиксированного размера&#160;— <code>uint8</code>, <code>uint16</code>, <code>uint32</code>, <code>uint64</code>. Число в названии типа, как и в предыдущем случае, задаёт размер, но диапазон значений составляет от 0 до 2<sup>n</sup>−1.</li>
<li><code>int</code> и <code>uint</code>&#160;— соответственно, знаковое и беззнаковое целое число. Размер этих типов одинаков, и может быть 32 или 64 бита, но не фиксируется спецификацией языка и может выбираться реализацией. Предполагается, что для них будет выбран наиболее эффективный на целевой платформе размер.</li>
<li><code>byte</code>&#160;— синоним <code>uint8</code>. Предназначается, как правило, для работы с неформатированными бинарными данными.</li>
<li><code>rune</code>&#160;— синоним <code>uint32</code>, представляет символ в кодировке Unicode.</li>
<li><code>uintptr</code>&#160;— целое беззнаковое значение, размер которого определяется реализацией, но должен быть достаточным для размещения в переменной этого типа полного значения указателя для целевой платформы.</li></ul>
<p>Создатели языка рекомендуют для работы с числами внутри программы использовать по возможности только стандартный тип <code>int</code>. Типы с фиксированными размерами предназначены для работы с данными, получаемыми из внешних источников или передаваемыми в них, когда для корректности кода важно указать конкретный размер типа. Типы-синонимы <code>byte</code> и <code>rune</code> предназначены для работы с бинарными данными и символами, соответственно. Тип <code>uintptr</code> необходим только для взаимодействия с внешним кодом, например, на Си.
</p>
<h4><span id=".D0.A7.D0.B8.D1.81.D0.BB.D0.B0_.D1.81_.D0.BF.D0.BB.D0.B0.D0.B2.D0.B0.D1.8E.D1.89.D0.B5.D0.B9_.D0.B7.D0.B0.D0.BF.D1.8F.D1.82.D0.BE.D0.B9"></span><span class="mw-headline" id="Числа_с_плавающей_запятой">Числа с плавающей запятой</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=11" class="mw-editsection-visualeditor" title="Редактировать раздел «Числа с плавающей запятой»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=11" title="Редактировать раздел «Числа с плавающей запятой»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Числа с плавающей точкой представлены двумя типами, <code>float32</code> и <code>float64</code>. Их размер, соответственно, 32 и 64 бита, реализация соответствует стандарту <a href="/wiki/IEEE_754" class="mw-redirect" title="IEEE 754">IEEE 754</a>. Диапазон значений можно получить из стандартного пакета <code>math</code>.
</p>
<h4><span id=".D0.A7.D0.B8.D1.81.D0.BB.D0.BE.D0.B2.D1.8B.D0.B5_.D1.82.D0.B8.D0.BF.D1.8B_.D1.81_.D0.BD.D0.B5.D0.BE.D0.B3.D1.80.D0.B0.D0.BD.D0.B8.D1.87.D0.B5.D0.BD.D0.BD.D0.BE.D0.B9_.D1.82.D0.BE.D1.87.D0.BD.D0.BE.D1.81.D1.82.D1.8C.D1.8E"></span><span class="mw-headline" id="Числовые_типы_с_неограниченной_точностью">Числовые типы с неограниченной точностью</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=12" class="mw-editsection-visualeditor" title="Редактировать раздел «Числовые типы с неограниченной точностью»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=12" title="Редактировать раздел «Числовые типы с неограниченной точностью»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Также стандартная библиотека Go содержит пакет <code>big</code>, который предоставляет три типа с неограниченной точностью: <code>big.Int</code>, <code>big.Rat</code> и <code>big.Float</code>, представляющие, соответственно, целые числа, рациональные числа и числа с плавающей запятой; размер этих чисел может быть любым и ограничивается только объёмом доступной памяти. Поскольку операторы в Go не перегружаются, вычислительные операции над числами с неограниченной точностью реализованы в виде обычных методов. Производительность вычислений с большими числами, разумеется, значительно уступает встроенным числовым типам, но при решении некоторых типов вычислительных задач использование пакета <code>big</code> может оказаться предпочтительнее, чем ручная оптимизация математического алгоритма.
</p>
<h4><span id=".D0.9A.D0.BE.D0.BC.D0.BF.D0.BB.D0.B5.D0.BA.D1.81.D0.BD.D1.8B.D0.B5_.D1.87.D0.B8.D1.81.D0.BB.D0.B0"></span><span class="mw-headline" id="Комплексные_числа">Комплексные числа</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=13" class="mw-editsection-visualeditor" title="Редактировать раздел «Комплексные числа»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=13" title="Редактировать раздел «Комплексные числа»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Язык предоставляет также два встроенных типа для комплексных чисел, <code>complex64</code> и <code>complex128</code>. Каждое значение этих типов содержит пару из вещественной и мнимой части, имеющих типы, соответственно, <code>float32</code> и <code>float64</code>. Создать в коде значение комплексного типа можно одним из двух способов: либо встроенной функцией <code>complex()</code>, либо использовав в выражении мнимый литерал. Получить вещественную и мнимую часть комплексного числа можно функциями <code>real()</code> и <code>imag()</code>.
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">var</span> <span class="nx">x</span> <span class="kt">complex128</span> <span class="p">=</span> <span class="nb">complex</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span> <span class="c1">// 1 + 2i</span>
<span class="nx">y</span> <span class="o">:=</span> <span class="mi">3</span> <span class="o">+</span> <span class="m">4i</span>                      <span class="c1">// 3 + 4i , 4 - число, за которым следует суффикс i, </span>
                                 <span class="c1">// является мнимым литералом</span>
<span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">x</span> <span class="o">*</span> <span class="nx">y</span><span class="p">)</span>               <span class="c1">// выведет &quot;(-5+10i)&quot;</span>
<span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nb">real</span><span class="p">(</span><span class="nx">x</span> <span class="o">*</span> <span class="nx">y</span><span class="p">))</span>         <span class="c1">// выведет &quot;-5&quot;</span>
<span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nb">imag</span><span class="p">(</span><span class="nx">x</span> <span class="o">*</span> <span class="nx">y</span><span class="p">))</span>         <span class="c1">// выведет &quot;10&quot;</span>
</pre></div></dd></dl>
<h4><span id=".D0.9B.D0.BE.D0.B3.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B5_.D0.B7.D0.BD.D0.B0.D1.87.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Логические_значения">Логические значения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=14" class="mw-editsection-visualeditor" title="Редактировать раздел «Логические значения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=14" title="Редактировать раздел «Логические значения»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Логический тип <code>bool</code> вполне обычен&#160;— к нему относятся предопределённые значения <code>true</code> и <code>false</code>, обозначающие, соответственно, истинность и ложность. В отличие от Си, логические значения в Go не являются числовыми и не могут непосредственно преобразовываться в числа.
</p>
<h4><span id=".D0.A1.D1.82.D1.80.D0.BE.D0.BA.D0.B8"></span><span class="mw-headline" id="Строки">Строки</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=15" class="mw-editsection-visualeditor" title="Редактировать раздел «Строки»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=15" title="Редактировать раздел «Строки»">править код</a><span class="mw-editsection-bracket">]</span></span></h4>
<p>Значения строкового типа <code>string</code> представляют собой неизменяемые массивы байтов, содержащие текстовые строки в кодировке <code>UTF-8</code>. Этим обусловлен ряд специфических особенностей строк (например, в общем случае длина строки не равна количеству содержащихся в ней символов). Для большинства приложений, которые обрабатывают строки целиком, эта специфика не важна, но в тех случаях, когда программа должна непосредственно обрабатывать конкретные руны (символы Unicode), требуется применение пакета <code>unicode/utf8</code>, содержащего вспомогательные средства для работы с Unicode-строками.
</p>
<h3><span id=".D0.9E.D0.B1.D1.8A.D1.8F.D0.B2.D0.BB.D0.B5.D0.BD.D0.B8.D0.B5_.D1.82.D0.B8.D0.BF.D0.BE.D0.B2"></span><span class="mw-headline" id="Объявление_типов">Объявление типов</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=16" class="mw-editsection-visualeditor" title="Редактировать раздел «Объявление типов»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=16" title="Редактировать раздел «Объявление типов»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Для любых типов данных, включая встроенные, могут объявляться новые типы-аналоги, повторяющие все свойства оригиналов, но несовместимые с ними. Для этих новых типов также могут дополнительно объявляться методы.
Пользовательскими типами данных в Go являются указатели (объявляются при помощи символа <code>*</code>), массивы (объявляются при помощи квадратных скобок), структуры (<code>struct</code>), функции (<code>func</code>), интерфейсы (<code>interface</code>), отображения (<code>map</code>) и каналы (<code>chan</code>). В описаниях этих типов указываются типы и, возможно, идентификаторы их элементов.
Новые типы объявляются с помощью ключевого слова <code>type</code>:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">PostString</span> <span class="kt">string</span>  <span class="c1">// Тип &quot;строка&quot;, аналогичен встроенному</span>

<span class="kd">type</span> <span class="nx">StringArray</span> <span class="p">[]</span><span class="kt">string</span>  <span class="c1">// Тип-массив с элементами строкового типа</span>

<span class="kd">type</span> <span class="nx">Person</span> <span class="kd">struct</span> <span class="p">{</span> <span class="c1">// Тип-структура</span>
  <span class="nx">name</span> <span class="kt">string</span>        <span class="c1">// поле стандартного типа string</span>
  <span class="nx">post</span> <span class="nx">PostString</span>    <span class="c1">// поле ранее объявленного пользовательского строкового типа</span>
  <span class="nx">bdate</span> <span class="nx">time</span><span class="p">.</span><span class="nx">Time</span>    <span class="c1">// поле типа Time, импортированного из пакета time</span>
  <span class="nx">edate</span> <span class="nx">time</span><span class="p">.</span><span class="nx">Time</span>
  <span class="nx">chief</span> <span class="o">*</span><span class="nx">Person</span>      <span class="c1">// поле-указатель</span>
  <span class="nx">infer</span> <span class="p">[](</span><span class="o">*</span><span class="nx">Person</span><span class="p">)</span>  <span class="c1">// поле-массив</span>
<span class="p">}</span> 

<span class="kd">type</span> <span class="nx">InOutString</span> <span class="kd">chan</span> <span class="kt">string</span>  <span class="c1">// тип-канал для передачи строк</span>

<span class="kd">type</span>  <span class="nx">CoompareFunc</span> <span class="p">(</span> <span class="nx">a</span><span class="p">,</span> <span class="nx">b</span> <span class="kd">interface</span> <span class="p">{}</span> <span class="p">)</span> <span class="kt">int</span>   <span class="c1">// тип-функция.</span>
</pre></div></dd></dl>
<p>Начиная с версии Go 1.9 также доступно объявление алиасов (псевдонимов) типов:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">TitleString</span><span class="p">=</span><span class="kt">string</span> <span class="c1">// &quot;TitleString&quot; - псевдоним для встроенного типа string</span>
<span class="kd">type</span> <span class="nx">Integer</span><span class="p">=</span><span class="kt">int64</span>      <span class="c1">// &quot;Integer&quot; - псевдоним для встроенного 64-разрядного целого типа</span>
</pre></div></dd></dl>
<p>Алиас может быть объявлен как для системного, так и для любого пользовательского типа. Принципиальным отличием алиасов от обычных объявлений типов является то, что при объявлении создаётся новый тип, который не совместим с оригиналом, даже если в объявлении к оригинальному типу никаких изменений не добавляется. Алиас же&#160;— это просто другое имя того же типа, то есть алиас и оригинальный тип полностью взаимозаменимы.
</p><p>Поля структур могут в описании иметь тэги&#160;— произвольные последовательности символов, заключённые в обратные кавычки:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// Структура с тэгами полей</span>
<span class="kd">type</span> <span class="nx">XMLInvoices</span> <span class="kd">struct</span> <span class="p">{</span>
<span class="nx">XMLName</span> <span class="nx">xml</span><span class="p">.</span><span class="nx">Name</span> <span class="s">`xml:&quot;INVOICES&quot;`</span>
<span class="nx">Version</span> <span class="kt">int</span> <span class="s">`xml:&quot;version,attr&quot;`</span>
<span class="nx">Invoice</span> <span class="p">[]</span><span class="o">*</span><span class="nx">XMLInvoice</span> <span class="s">`xml:&quot;INVOICE&quot;`</span>
<span class="p">}</span>
</pre></div></dd></dl>
<p>Тэги игнорируются компилятором, но информация о них помещается в код и может быть прочитана с помощью функций пакета <code>reflect</code>, входящего в состав стандартной библиотеки. Обычно тэги используются для обеспечения <a href="/wiki/%D0%9C%D0%B0%D1%80%D1%88%D0%B0%D0%BB%D0%B8%D0%BD%D0%B3" title="Маршалинг">маршалинга</a> типов для сохранения и восстановления данных на внешних носителях или взаимодействия с внешними системами, получающими или передающими данные в собственных форматах. В примере выше используются тэги, обрабатываемые стандартной библиотекой для чтения и записи данных в формате XML.
</p>
<h3><span id=".D0.9E.D0.B1.D1.8A.D1.8F.D0.B2.D0.BB.D0.B5.D0.BD.D0.B8.D0.B5_.D0.BF.D0.B5.D1.80.D0.B5.D0.BC.D0.B5.D0.BD.D0.BD.D1.8B.D1.85"></span><span class="mw-headline" id="Объявление_переменных">Объявление переменных</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=17" class="mw-editsection-visualeditor" title="Редактировать раздел «Объявление переменных»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=17" title="Редактировать раздел «Объявление переменных»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Синтаксис <a href="/wiki/%D0%9E%D0%B1%D1%8A%D1%8F%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Объявление (информатика)">объявления переменных</a>, в основном, решён в духе Паскаля: объявление начинается с ключевого слова var, за которым через разделитель следует имя переменной, далее, через разделитель&#160;— её тип.
</p>
<dl><dd><table>
<tbody><tr>
<th>Go</th>
<th>C++
</th></tr>
<tr>
<td><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span> <span class="kd">var</span> <span class="nx">v1</span> <span class="kt">int</span>
 <span class="kd">var</span> <span class="nx">v2</span> <span class="kt">string</span>
 <span class="kd">var</span> <span class="nx">v3</span> <span class="p">[</span><span class="mi">10</span><span class="p">]</span><span class="kt">int</span>
 <span class="kd">var</span> <span class="nx">v4</span> <span class="p">[]</span><span class="kt">int</span>
 <span class="kd">var</span> <span class="nx">v5</span> <span class="kd">struct</span> <span class="p">{</span> <span class="nx">f</span> <span class="kt">int</span> <span class="p">}</span>
 <span class="kd">var</span> <span class="nx">v6</span> <span class="o">*</span><span class="kt">int</span> <span class="cm">/* арифметика указателей не поддерживается */</span>
 <span class="kd">var</span> <span class="nx">v7</span> <span class="kd">map</span><span class="p">[</span><span class="kt">string</span><span class="p">]</span><span class="kt">int</span>
 <span class="kd">var</span> <span class="nx">v8</span> <span class="kd">func</span><span class="p">(</span><span class="nx">a</span> <span class="kt">int</span><span class="p">)</span> <span class="kt">int</span>
</pre></div>
</td>
<td><div class="mw-highlight mw-highlight-lang-c++ mw-content-ltr" dir="ltr"><pre><span></span> <span class="kt">int</span> <span class="n">v1</span><span class="p">;</span>
 <span class="k">const</span> <span class="n">std</span><span class="o">::</span><span class="n">string</span> <span class="n">v2</span><span class="p">;</span>   <span class="cm">/* примерно */</span>
 <span class="kt">int</span> <span class="n">v3</span><span class="p">[</span><span class="mi">10</span><span class="p">];</span>
 <span class="kt">int</span><span class="o">*</span> <span class="n">v4</span><span class="p">;</span>                <span class="cm">/* примерно */</span>
 <span class="k">struct</span> <span class="p">{</span> <span class="kt">int</span> <span class="n">f</span><span class="p">;</span> <span class="p">}</span> <span class="n">v5</span><span class="p">;</span>
 <span class="kt">int</span><span class="o">*</span> <span class="n">v6</span><span class="p">;</span>
 <span class="n">std</span><span class="o">::</span><span class="n">unordered_map</span> <span class="n">v7</span><span class="p">;</span>  <span class="cm">/* примерно */</span>
 <span class="kt">int</span> <span class="p">(</span><span class="o">*</span><span class="n">v8</span><span class="p">)(</span><span class="kt">int</span> <span class="n">a</span><span class="p">);</span>
</pre></div>
</td></tr></tbody></table></dd></dl>
<p>Объявление переменной может совмещаться с инициализацией:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">var</span> <span class="nx">v1</span> <span class="kt">int</span> <span class="p">=</span> <span class="mi">100</span>
<span class="kd">var</span> <span class="nx">v2</span> <span class="kt">string</span> <span class="p">=</span> <span class="s">&quot;Hello!&quot;</span>          
<span class="kd">var</span> <span class="nx">v3</span> <span class="p">[</span><span class="mi">10</span><span class="p">]</span><span class="kt">int</span> <span class="p">=</span> <span class="p">{</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">3</span><span class="p">,</span> <span class="mi">4</span><span class="p">,</span> <span class="mi">5</span><span class="p">,</span> <span class="mi">6</span><span class="p">,</span> <span class="mi">7</span><span class="p">,</span> <span class="mi">8</span><span class="p">,</span> <span class="mi">9</span> <span class="p">}</span>
<span class="kd">var</span> <span class="nx">v4</span> <span class="p">[]</span><span class="kt">int</span> <span class="p">=</span> <span class="p">{</span><span class="mi">1000</span><span class="p">,</span> <span class="mi">2000</span><span class="p">,</span> <span class="mi">12334</span><span class="p">}</span>
<span class="kd">var</span> <span class="nx">v5</span> <span class="kd">struct</span> <span class="p">{</span> <span class="nx">f</span> <span class="kt">int</span> <span class="p">}</span> <span class="p">=</span> <span class="p">{</span> <span class="mi">50</span> <span class="p">}</span>  
<span class="kd">var</span> <span class="nx">v6</span> <span class="o">*</span><span class="kt">int</span> <span class="p">=</span> <span class="o">&amp;</span><span class="nx">v1</span>
<span class="kd">var</span> <span class="nx">v7</span> <span class="kd">map</span><span class="p">[</span><span class="kt">string</span><span class="p">]</span><span class="kt">int</span> <span class="p">=</span> <span class="p">{</span><span class="s">&quot;one&quot;</span><span class="p">:</span><span class="mi">1</span><span class="p">,</span> <span class="s">&quot;two&quot;</span><span class="p">:</span><span class="mi">2</span><span class="p">,</span> <span class="s">&quot;three&quot;</span><span class="p">:</span><span class="mi">3</span><span class="p">}</span>
<span class="kd">var</span> <span class="nx">v8</span> <span class="kd">func</span><span class="p">(</span><span class="nx">a</span> <span class="kt">int</span><span class="p">)</span> <span class="kt">int</span> <span class="p">=</span> <span class="kd">func</span><span class="p">(</span><span class="nx">a</span> <span class="kt">int</span><span class="p">)</span> <span class="kt">int</span> <span class="p">{</span> <span class="k">return</span> <span class="nx">a</span><span class="o">+</span><span class="mi">1</span> <span class="p">}</span>
</pre></div></dd></dl>
<p>Если при объявлении переменной не производится её явная <a href="/wiki/%D0%98%D0%BD%D0%B8%D1%86%D0%B8%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Инициализация">инициализация</a>, то она автоматически инициализируется «нулевым значением» для данного типа. Нулевым значением для всех числовых типов является 0, для типа <code>string</code>&#160;— пустая строка, для <a href="/wiki/%D0%A3%D0%BA%D0%B0%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C_(%D1%82%D0%B8%D0%BF_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)" title="Указатель (тип данных)">указателей</a>&#160;— <code>nil</code>. Структуры по умолчанию инициализируются наборами из нулевых значений для каждого из входящих в них полей, элементы массивов&#160;— нулевыми значениями указанного в определении массива типа.
</p><p>Объявления можно группировать:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">var</span> <span class="p">(</span>
	<span class="nx">i</span> <span class="kt">int</span>
	<span class="nx">m</span> <span class="kt">float</span>
<span class="p">)</span>
</pre></div></dd></dl>
<h3><span id=".D0.90.D0.B2.D1.82.D0.BE.D0.BC.D0.B0.D1.82.D0.B8.D1.87.D0.B5.D1.81.D0.BA.D0.B8.D0.B9_.D0.B2.D1.8B.D0.B2.D0.BE.D0.B4_.D1.82.D0.B8.D0.BF.D0.BE.D0.B2"></span><span class="mw-headline" id="Автоматический_вывод_типов">Автоматический вывод типов</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=18" class="mw-editsection-visualeditor" title="Редактировать раздел «Автоматический вывод типов»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=18" title="Редактировать раздел «Автоматический вывод типов»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Язык Go поддерживает также автоматический <a href="/wiki/%D0%92%D1%8B%D0%B2%D0%BE%D0%B4_%D1%82%D0%B8%D0%BF%D0%BE%D0%B2" title="Вывод типов">вывод типов</a>. Если переменная инициализируется при объявлении, её тип можно не указывать&#160;— типом переменной становится тип присваиваемого ей выражения. Для литералов (чисел, символов, строк) стандарт языка определяет конкретные встроенные типы, к которым относится каждое такое значение. Чтобы инициализировать переменную другого типа, к литералу необходимо применить явное преобразование типа.
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">var</span> <span class="nx">p1</span> <span class="p">=</span> <span class="mi">20</span>         <span class="c1">// p1 int   - целый литерал 20 имеет тип int.</span>
<span class="kd">var</span> <span class="nx">p2</span> <span class="p">=</span> <span class="nb">uint</span><span class="p">(</span><span class="mi">20</span><span class="p">)</span>   <span class="c1">// p2 uint  - значение явно приведено к типу uint.</span>
<span class="kd">var</span> <span class="nx">v1</span> <span class="p">=</span> <span class="o">&amp;</span><span class="nx">p1</span>        <span class="c1">// v1 *int  - указатель на p1, для которой выведен тип int.</span>
<span class="kd">var</span> <span class="nx">v2</span> <span class="p">=</span> <span class="o">&amp;</span><span class="nx">p2</span>        <span class="c1">// v2 *uint - указатель на p2, которая явно инициализирована как беззнаковое целое.</span>
</pre></div></dd></dl>
<p>Для локальных переменных существует сокращённая форма объявления, совмещённого с инициализацией, с использованием вывода типов:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">v1</span> <span class="o">:=</span> <span class="mi">100</span>
<span class="nx">v2</span> <span class="o">:=</span> <span class="s">&quot;Hello!&quot;</span>          
<span class="nx">v3</span> <span class="o">:=</span> <span class="p">[</span><span class="mi">10</span><span class="p">]</span><span class="kt">int</span><span class="p">{</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">3</span><span class="p">,</span> <span class="mi">4</span><span class="p">,</span> <span class="mi">5</span><span class="p">,</span> <span class="mi">6</span><span class="p">,</span> <span class="mi">7</span><span class="p">,</span> <span class="mi">8</span><span class="p">,</span> <span class="mi">9</span> <span class="p">}</span>
<span class="nx">v4</span> <span class="o">:=</span> <span class="p">[]</span><span class="kt">int</span><span class="p">{</span><span class="mi">1000</span><span class="p">,</span> <span class="mi">2000</span><span class="p">,</span> <span class="mi">12334</span><span class="p">}</span>
<span class="nx">v5</span> <span class="o">:=</span> <span class="kd">struct</span><span class="p">{</span><span class="nx">f</span> <span class="kt">int</span><span class="p">}{</span><span class="mi">50</span><span class="p">}</span>  
<span class="nx">v6</span> <span class="o">:=</span> <span class="o">&amp;</span><span class="nx">v1</span>
</pre></div></dd></dl>
<h3><span id=".D0.9F.D1.80.D0.B8.D1.81.D0.B2.D0.B0.D0.B8.D0.B2.D0.B0.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Присваивания">Присваивания</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=19" class="mw-editsection-visualeditor" title="Редактировать раздел «Присваивания»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=19" title="Редактировать раздел «Присваивания»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В качестве оператора присваивания в Go используется символ <code>=</code>:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span> <span class="nx">a</span> <span class="p">=</span> <span class="nx">b</span> <span class="c1">// Присвоить переменной a значение b</span>
</pre></div></dd></dl>
<p>Как уже говорилось выше, существует форма определения переменной с автоматическим выводом типа, совмещённого с инициализацией, внешне напоминающая присваивание в <a href="/wiki/Pascal" class="mw-redirect" title="Pascal">Паскале</a>:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">v1</span> <span class="o">:=</span> <span class="nx">v2</span> <span class="c1">// аналог var v1 = v2</span>
</pre></div></dd></dl>
<p>Компилятор Go строго отслеживает определения и присваивания и отличает одно от другого. Поскольку в одной области видимости запрещено переопределение переменной с тем же именем, в пределах одного блока кода переменная может встретиться слева от знака <code>:=</code> только один раз:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span>  <span class="nx">a</span> <span class="o">:=</span> <span class="mi">10</span>  <span class="c1">// Объявление и инициализация целой переменной a.</span>
  <span class="nx">b</span> <span class="o">:=</span> <span class="mi">20</span>  <span class="c1">// Объявление и инициализация целой переменной b.</span>
  <span class="o">...</span> 
  <span class="nx">a</span> <span class="o">:=</span> <span class="nx">b</span>   <span class="c1">// ОШИБКА! Попытка повторного определения a.</span>
</pre></div></dd></dl>
<p>Go допускает множественные присваивания, выполняемые параллельно:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">i</span><span class="p">,</span> <span class="nx">j</span> <span class="p">=</span> <span class="nx">j</span><span class="p">,</span> <span class="nx">i</span>    <span class="c1">// Поменять местами значения i и j.</span>
</pre></div></dd></dl>
<p>При этом количество переменных слева от знака присваивания должно точно соответствовать количеству выражений справа от знака присваивания.
</p><p>Возможно параллельное присваивание и при использовании оператора <code>:=</code>. Его особенность в том, что в числе переменных, перечисленных слева от знака <code>:=</code>, могут быть уже существующие. В этом случае новые переменные будут созданы, уже существующие&#160;— использованы повторно. Этот синтаксис часто используется для обработки ошибок:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">x</span><span class="p">,</span> <span class="nx">err</span> <span class="o">:=</span> <span class="nx">SomeFunction</span><span class="p">()</span> <span class="c1">// Функция возвращает два значения (см. ниже), </span>
                         <span class="c1">// две переменные объявляются и инициализируются.</span>
<span class="k">if</span> <span class="p">(</span><span class="nx">err</span> <span class="o">!=</span> <span class="kc">nil</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">return</span> <span class="kc">nil</span>
<span class="p">}</span>

<span class="nx">y</span><span class="p">,</span> <span class="nx">err</span> <span class="o">:=</span> <span class="nx">SomeOtherFunction</span><span class="p">()</span> <span class="c1">// Здесь объявляется только y, а err просто присваивается значение.</span>
</pre></div></dd></dl>
<p>В последней строке примера первое значение, возвращённое функцией, присваивается новой переменной y, второе&#160;— уже существующей переменной <code>err</code>, которая во всём коде используется для размещения последней возвращённой вызываемыми функциями ошибки. Если бы не эта особенность оператора <code>:=</code>, во втором случае пришлось бы объявлять новую переменную (например, <code>err2</code>) либо отдельно объявлять <code>y</code> и далее уже использовать обычное параллельное присваивание.
</p><p>Go реализует семантику «копирования при присваивании», то есть присваивание приводит к созданию копии значения исходной переменной и размещения этой копии в другой переменной, после чего значения переменных являются различными и при изменении одного из них другое не меняется. Однако это верно только для встроенных скалярных типов, структур и массивов с заданной длиной (то есть для типов, значения которых размещаются в стеке). Массивы с неопределённой длиной и отображения размещаются <a href="/wiki/%D0%9A%D1%83%D1%87%D0%B0_(%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C)" title="Куча (память)">в куче</a>, переменные этих типов фактически содержат ссылки на объекты, при их присваивании копируется только ссылка, но не сам объект. Иногда это может привести к неожиданным эффектам. Рассмотрим два почти одинаковых примера:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">vector</span> <span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="kt">float64</span>   <span class="c1">// Длина массива задана явно</span>
  <span class="nx">v1</span> <span class="o">:=</span> <span class="nx">vector</span><span class="p">{</span><span class="mi">10</span><span class="p">,</span> <span class="mf">15.5</span><span class="p">}</span> <span class="c1">// Инициализация - v1 содержит сам массив</span>
  <span class="nx">v2</span> <span class="o">:=</span> <span class="nx">v1</span>               <span class="c1">// Массив v1 копируется в массив v2</span>
  <span class="nx">v2</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">=</span> <span class="mf">25.3</span>           <span class="c1">// Изменяется только массив v2</span>
  <span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">v1</span><span class="p">)</span>        <span class="c1">// Выведет &quot;[10 15.5]&quot; - исходный массив не изменился.</span>
  <span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">v2</span><span class="p">)</span>        <span class="c1">// Выведет &quot;[25.3 15.5]&quot;</span>
</pre></div></dd></dl>
<p>Здесь тип <code>vector</code> определён как массив из двух чисел. Присваивание таких массивов ведёт себя так же, как присваивание чисел и структур.
</p><p>А в следующем примере код отличается ровно на один символ: тип <code>vector</code> определён как массив с неопределённым размером. Но ведёт себя этот код совершенно иначе:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">vector</span> <span class="p">[]</span><span class="kt">float64</span>    <span class="c1">// Массив с неопределённой длиной</span>
  <span class="nx">v1</span> <span class="o">:=</span> <span class="nx">vector</span><span class="p">{</span><span class="mi">10</span><span class="p">,</span> <span class="mf">15.5</span><span class="p">}</span> <span class="c1">// Инициализация - v1 содержит ссылку на массив</span>
  <span class="nx">v2</span> <span class="o">:=</span> <span class="nx">v1</span>               <span class="c1">// Ссылка на массив копируется из v1 в v2</span>
  <span class="nx">v2</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">=</span> <span class="mf">25.3</span>           <span class="c1">// Может быть воспринято как изменение только массива v2</span>
  <span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">v1</span><span class="p">)</span>        <span class="c1">// Выведет &quot;[25.3 15.5]&quot; - исходный массив ИЗМЕНИЛСЯ!</span>
  <span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">v2</span><span class="p">)</span>        <span class="c1">// Выведет &quot;[25.3 15.5]&quot;</span>
</pre></div></dd></dl>
<p>Таким же образом, как во втором примере, ведут себя отображения и интерфейсы. Причём если в структуре есть поле ссылочного или интерфейсного типа, или поле&#160;— безразмерный массив либо отображение, то при присваивании такой структуры тоже будет скопирована только ссылка, то есть поля разных структур начнут указывать на одни и те же объекты в памяти.
</p><p>Чтобы избежать такого эффекта, необходимо явно использовать системную функцию <code>copy()</code>, которая гарантирует создание второго экземпляра объекта.
</p>
<h3><span id=".D0.90.D1.80.D0.B3.D1.83.D0.BC.D0.B5.D0.BD.D1.82.D1.8B_.D1.84.D1.83.D0.BD.D0.BA.D1.86.D0.B8.D0.B9_.D0.B8_.D0.BC.D0.B5.D1.82.D0.BE.D0.B4.D0.BE.D0.B2"></span><span class="mw-headline" id="Аргументы_функций_и_методов">Аргументы функций и методов</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=20" class="mw-editsection-visualeditor" title="Редактировать раздел «Аргументы функций и методов»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=20" title="Редактировать раздел «Аргументы функций и методов»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>объявляются таким образом:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">f</span><span class="p">(</span><span class="nx">i</span><span class="p">,</span> <span class="nx">j</span><span class="p">,</span> <span class="nx">k</span> <span class="kt">int</span><span class="p">,</span> <span class="nx">s</span><span class="p">,</span> <span class="nx">t</span> <span class="kt">string</span><span class="p">)</span> <span class="kt">string</span> <span class="p">{</span> <span class="p">}</span>
</pre></div></dd></dl>
<h3><span id=".D0.A4.D1.83.D0.BD.D0.BA.D1.86.D0.B8.D0.B8_.D0.BC.D0.BE.D0.B3.D1.83.D1.82_.D0.B2.D0.BE.D0.B7.D0.B2.D1.80.D0.B0.D1.89.D0.B0.D1.82.D1.8C_.D0.BD.D0.B5.D1.81.D0.BA.D0.BE.D0.BB.D1.8C.D0.BA.D0.BE_.D0.B7.D0.BD.D0.B0.D1.87.D0.B5.D0.BD.D0.B8.D0.B9"></span><span class="mw-headline" id="Функции_могут_возвращать_несколько_значений">Функции могут возвращать несколько значений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=21" class="mw-editsection-visualeditor" title="Редактировать раздел «Функции могут возвращать несколько значений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=21" title="Редактировать раздел «Функции могут возвращать несколько значений»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>типы таких значений заключаются в скобки:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">f</span><span class="p">(</span><span class="nx">a</span><span class="p">,</span> <span class="nx">b</span> <span class="kt">int</span><span class="p">)</span> <span class="p">(</span><span class="kt">int</span><span class="p">,</span> <span class="kt">string</span><span class="p">)</span> <span class="p">{</span>
	<span class="k">return</span> <span class="nx">a</span><span class="o">+</span><span class="nx">b</span><span class="p">,</span> <span class="s">&quot;сложение&quot;</span>
<span class="p">}</span>
</pre></div></dd></dl>
<p>Результаты функций также могут быть именованы:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">incTwo</span><span class="p">(</span><span class="nx">a</span><span class="p">,</span> <span class="nx">b</span> <span class="kt">int</span><span class="p">)</span> <span class="p">(</span><span class="nx">c</span><span class="p">,</span> <span class="nx">d</span> <span class="kt">int</span><span class="p">)</span> <span class="p">{</span>
	<span class="nx">c</span> <span class="p">=</span> <span class="nx">a</span><span class="o">+</span><span class="mi">1</span>
	<span class="nx">d</span> <span class="p">=</span> <span class="nx">b</span><span class="o">+</span><span class="mi">1</span>
	<span class="k">return</span>
<span class="p">}</span>
</pre></div></dd></dl>
<p>Именованные результаты считаются описанными сразу после заголовка функции с нулевыми начальными значениями. Оператор return в такой функции может использоваться без параметров, в этом случае после возврата из функции результаты будут иметь те значения, которые были им присвоены в ходе её исполнения. Так, в примере выше функция вернёт пару целых значений, на единицу больших, чем её параметры.
</p><p>Несколько значений, возвращаемых функциями, присваиваются переменным их перечислением через запятую, при этом количество переменных, которым присваивается результат вызова функции, должно точно совпадать с количеством возвращаемых функцией значений:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">first</span><span class="p">,</span> <span class="nx">second</span> <span class="o">:=</span> <span class="nx">incTwo</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span> <span class="c1">// first = 2, second = 3</span>
<span class="nx">first</span> <span class="o">:=</span> <span class="nx">incTwo</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span> <span class="c1">// НЕВЕРНО - нет переменной, которой присваивается второй результат</span>
</pre></div></dd></dl>
<h3><span id=".D0.9F.D1.81.D0.B5.D0.B2.D0.B4.D0.BE.D0.BF.D0.B5.D1.80.D0.B5.D0.BC.D0.B5.D0.BD.D0.BD.D0.B0.D1.8F_.C2.AB_.C2.BB"></span><span class="mw-headline" id="Псевдопеременная_«_»">Псевдопеременная «_»</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=22" class="mw-editsection-visualeditor" title="Редактировать раздел «Псевдопеременная « »»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=22" title="Редактировать раздел «Псевдопеременная « »»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В отличие от Паскаля и Си, где объявление локальной переменной без её последующего использования или потеря значения локальной переменной (когда присвоенное переменной значение затем нигде не читается) может лишь вызывать предупреждение (warning) компилятора, в Go такая ситуация считается языковой ошибкой и приводит к невозможности компиляции программы. Это означает, в частности, что программист не может проигнорировать значение (или одно из значений), возвращаемое функцией, просто присвоив его какой-нибудь переменной и отказавшись от его дальнейшего использования. Если возникает необходимость игнорировать одно из значений, возвращаемых вызовом функции, используется предопределённая псевдопеременная с именем «_» (один знак подчёркивания). Она может быть указана в любом месте, где должна быть переменная, принимающая значение. Соответствующее значение не будет присвоено никакой переменной и просто потеряется. Смысл такого архитектурного решения&#160;— выявление на стадии компиляции возможной потери результатов вычислений: случайный пропуск обработки значения будет обнаружен компилятором, а использование псевдопеременной «_» укажет на то, что программист сознательно проигнорировал результаты.
В следующем примере, если из двух возвращаемых функцией incTwo значений нужно только одно, вместо второй переменной нужно указать «_»:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">first</span> <span class="o">:=</span> <span class="nx">incTwo</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span> <span class="c1">// НЕВЕРНО</span>
<span class="nx">first</span><span class="p">,</span> <span class="nx">_</span> <span class="o">:=</span> <span class="nx">incTwo</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span> <span class="c1">// ВЕРНО, второй результат не используется</span>
</pre></div></dd></dl>
<p>Переменная «_» может указываться в списке присваивания любое число раз. Все результаты функции, которым соответствует «_», будут проигнорированы.
</p>
<h3><span id=".D0.9C.D0.B5.D1.85.D0.B0.D0.BD.D0.B8.D0.B7.D0.BC_.D0.BE.D1.82.D0.BB.D0.BE.D0.B6.D0.B5.D0.BD.D0.BD.D0.BE.D0.B3.D0.BE_.D0.B2.D1.8B.D0.B7.D0.BE.D0.B2.D0.B0_defer"></span><span class="mw-headline" id="Механизм_отложенного_вызова_defer">Механизм отложенного вызова defer</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=23" class="mw-editsection-visualeditor" title="Редактировать раздел «Механизм отложенного вызова defer»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=23" title="Редактировать раздел «Механизм отложенного вызова defer»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Отложенный вызов заменяет сразу несколько синтаксических средств, в частности, обработчики исключений и блоки с гарантированным завершением. Вызов функции, которому предшествует ключевое слово defer, параметризуется в той точке программы, где размещён, а выполняется непосредственно перед выходом программы из области видимости, где он был объявлен, независимо от того, как и по какой причине происходит этот выход. Если в одной функции содержится несколько объявлений defer, соответствующие вызовы выполняются по завершении функции последовательно, в обратном порядке.
Ниже пример использования defer в качестве блока гарантированного завершения<sup id="cite_ref-defpanrec_11-0" class="reference"><a href="#cite_note-defpanrec-11">&#91;11&#93;</a></sup>:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// Функция, копирующая файл</span>
<span class="kd">func</span> <span class="nx">CopyFile</span><span class="p">(</span><span class="nx">dstName</span><span class="p">,</span> <span class="nx">srcName</span> <span class="kt">string</span><span class="p">)</span> <span class="p">(</span><span class="nx">written</span> <span class="kt">int64</span><span class="p">,</span> <span class="nx">err</span> <span class="kt">error</span><span class="p">)</span> <span class="p">{</span> 
    <span class="nx">src</span><span class="p">,</span> <span class="nx">err</span> <span class="o">:=</span> <span class="nx">os</span><span class="p">.</span><span class="nx">Open</span><span class="p">(</span><span class="nx">srcName</span><span class="p">)</span>  <span class="c1">// Открытие файла-источника</span>
    <span class="k">if</span> <span class="nx">err</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="p">{</span>               <span class="c1">// Проверка</span>
        <span class="k">return</span>                    <span class="c1">// Если неудача, возврат с ошибкой</span>
    <span class="p">}</span>
    <span class="c1">// Если пришли сюда, то файл-источник был успешно открыт </span>
    <span class="k">defer</span> <span class="nx">src</span><span class="p">.</span><span class="nx">Close</span><span class="p">()</span>  <span class="c1">// Отложенный вызов: src.Close() будет вызван по завершении CopyFile</span>

    <span class="nx">dst</span><span class="p">,</span> <span class="nx">err</span> <span class="o">:=</span> <span class="nx">os</span><span class="p">.</span><span class="nx">Create</span><span class="p">(</span><span class="nx">dstName</span><span class="p">)</span> <span class="c1">// Открытие файла-приёмника</span>
    <span class="k">if</span> <span class="nx">err</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="p">{</span>                <span class="c1">// Проверка и возврат при ошибке </span>
        <span class="k">return</span>
    <span class="p">}</span>
    <span class="k">defer</span> <span class="nx">dst</span><span class="p">.</span><span class="nx">Close</span><span class="p">()</span>  <span class="c1">// Отложенный вызов: dst.Close() будет вызван по завершении CopyFile</span>

    <span class="k">return</span> <span class="nx">io</span><span class="p">.</span><span class="nx">Copy</span><span class="p">(</span><span class="nx">dst</span><span class="p">,</span> <span class="nx">src</span><span class="p">)</span>  <span class="c1">// Копирование данных и возврат из функции</span>
    <span class="c1">// После всех операций будут вызваны: сначала dst.Close(), затем src.Close()</span>
<span class="p">}</span>
</pre></div></dd></dl>
<h3><span id=".D0.A3.D1.81.D0.BB.D0.BE.D0.B2.D0.B8.D1.8F_.D1.86.D0.B8.D0.BA.D0.BB.D0.BE.D0.B2_.D0.B8_.D0.B2.D0.B5.D1.82.D0.B2.D0.BB.D0.B5.D0.BD.D0.B8.D0.B9"></span><span class="mw-headline" id="Условия_циклов_и_ветвлений">Условия циклов и ветвлений</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=24" class="mw-editsection-visualeditor" title="Редактировать раздел «Условия циклов и ветвлений»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=24" title="Редактировать раздел «Условия циклов и ветвлений»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В отличие от большинства языков с Си-подобным синтаксисом, в Go отсутствуют круглые скобки для условных конструкций <a href="/wiki/%D0%A6%D0%B8%D0%BA%D0%BB_For" class="mw-redirect" title="Цикл For"><code>for</code></a>, <a href="/wiki/%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80_%D0%B2%D0%B5%D1%82%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Оператор ветвления"><code>if</code></a>, <a href="/w/index.php?title=%D0%9E%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80_%D0%B2%D1%8B%D0%B1%D0%BE%D1%80%D0%B0&amp;action=edit&amp;redlink=1" class="new" title="Оператор выбора (страница отсутствует)"><code>switch</code></a>:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span>    <span class="k">if</span> <span class="nx">i</span> <span class="o">&gt;=</span><span class="mi">0</span> <span class="o">&amp;&amp;</span> <span class="nx">i</span> <span class="p">&lt;</span> <span class="nb">len</span><span class="p">(</span><span class="nx">arr</span><span class="p">)</span> <span class="p">{</span>
        <span class="nb">println</span><span class="p">(</span><span class="nx">arr</span><span class="p">[</span><span class="nx">i</span><span class="p">])</span>
    <span class="p">}</span>
<span class="o">...</span>
    <span class="k">for</span> <span class="nx">i</span> <span class="o">:=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="p">&lt;</span> <span class="mi">10</span><span class="p">;</span> <span class="nx">i</span><span class="o">++</span> <span class="p">{</span>
    <span class="p">}</span>
<span class="p">}</span>
</pre></div></dd></dl>
<h3><span id=".D0.A6.D0.B8.D0.BA.D0.BB.D1.8B"></span><span class="mw-headline" id="Циклы">Циклы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=25" class="mw-editsection-visualeditor" title="Редактировать раздел «Циклы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=25" title="Редактировать раздел «Циклы»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>В Go для организации всех видов циклов используется циклическая конструкция&#160;<code>for</code>.
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="k">for</span> <span class="nx">i</span> <span class="p">&lt;</span> <span class="mi">10</span> <span class="p">{</span> <span class="c1">// цикл с предусловием, аналог while в Си</span>
<span class="p">}</span>

<span class="k">for</span> <span class="nx">i</span> <span class="o">:=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="p">&lt;</span> <span class="mi">10</span><span class="p">;</span> <span class="nx">i</span><span class="o">++</span> <span class="p">{</span> <span class="c1">// цикл со счётчиком, аналог for в Си</span>
<span class="p">}</span>

<span class="k">for</span> <span class="p">{</span> <span class="c1">// бесконечный цикл</span>
    <span class="c1">// Выход из цикла должен быть организован вручную,</span>
    <span class="c1">// обычно это делается с помощью конструкций return или break</span>
<span class="p">}</span>

<span class="k">for</span> <span class="p">{</span> <span class="c1">// цикл с постусловием</span>
  <span class="o">...</span> <span class="c1">// тело цикла</span>
  <span class="k">if</span> <span class="nx">i</span><span class="o">&gt;=</span><span class="mi">10</span> <span class="p">{</span> <span class="c1">// условие выхода</span>
    <span class="k">break</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">for</span> <span class="nx">i</span><span class="p">,</span> <span class="nx">v</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">arr</span> <span class="p">{</span> <span class="c1">// цикл по коллекции (массиву, срезу, отображению) arr</span>
<span class="c1">// i - индекс (или ключ) текущего элемента</span>
<span class="c1">// v - копия значения текущего элемента массива</span>
<span class="p">}</span>

<span class="k">for</span> <span class="nx">i</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">arr</span> <span class="p">{</span> <span class="c1">// цикл по коллекции, используется только индекс</span>
<span class="p">}</span>

<span class="k">for</span> <span class="nx">_</span><span class="p">,</span> <span class="nx">v</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">arr</span> <span class="p">{</span> <span class="c1">// цикл по коллекции, используются только значения элементов</span>
<span class="p">}</span>

<span class="k">for</span> <span class="k">range</span> <span class="nx">arr</span> <span class="p">{</span>  <span class="c1">// Цикл по коллекции без переменных (коллекция используется </span>
                 <span class="c1">// только в качестве счётчика итераций).</span>
<span class="p">}</span> 

<span class="k">for</span> <span class="nx">v</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">c</span> <span class="p">{</span> <span class="c1">// цикл по каналу: </span>
                   <span class="c1">// в v будут читаться значения из канала c,</span>
                   <span class="c1">// пока канал не будет закрыт параллельно исполняющейся</span>
                   <span class="c1">// go-процедурой</span>
<span class="p">}</span>
</pre></div></dd></dl>
<h3><span id=".D0.9E.D0.BF.D0.B5.D1.80.D0.B0.D1.82.D0.BE.D1.80_.D0.BC.D0.BD.D0.BE.D0.B6.D0.B5.D1.81.D1.82.D0.B2.D0.B5.D0.BD.D0.BD.D0.BE.D0.B3.D0.BE_.D0.B2.D1.8B.D0.B1.D0.BE.D1.80.D0.B0."></span><span class="mw-headline" id="Оператор_множественного_выбора.">Оператор множественного выбора.</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=26" class="mw-editsection-visualeditor" title="Редактировать раздел «Оператор множественного выбора.»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=26" title="Редактировать раздел «Оператор множественного выбора.»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Синтаксис оператора множественного выбора <code>switch</code> имеет ряд особенностей. Прежде всего, в отличие от Си, не требуется использование оператора <code>break</code>: после отработки выбранной ветви исполнение оператора завершается. Если, напротив, необходимо, чтобы после выбранной ветви продолжила обрабатываться следующая, необходимо использовать оператор <code>fallthrough</code>:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="k">switch</span> <span class="nx">value</span> <span class="p">{</span>
<span class="k">case</span> <span class="mi">1</span><span class="p">:</span>
  <span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="s">&quot;One&quot;</span><span class="p">)</span>
  <span class="k">fallthrough</span>  <span class="c1">// Далее будет выполнена ветвь &quot;case 0:&quot;        </span>
<span class="k">case</span> <span class="mi">0</span><span class="p">:</span>
  <span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="s">&quot;Zero&quot;</span><span class="p">)</span>
<span class="p">}</span>
</pre></div></dd></dl>
<p>Здесь при <code>value==1</code> будет выведено две строки, «One» и «Zero».
</p><p>Выражение выбора и, соответственно, альтернативы в операторе switch могут быть любого типа, возможно перечисление нескольких вариантов в одной ветви:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="k">switch</span> <span class="nx">chars</span><span class="p">[</span><span class="nx">code</span><span class="p">].</span><span class="nx">category</span> <span class="p">{</span>
<span class="k">case</span> <span class="s">&quot;Lu&quot;</span><span class="p">,</span> <span class="s">&quot;Ll&quot;</span><span class="p">,</span> <span class="s">&quot;Lt&quot;</span><span class="p">,</span> <span class="s">&quot;Lm&quot;</span><span class="p">,</span> <span class="s">&quot;Lo&quot;</span><span class="p">:</span>
    <span class="o">...</span>
<span class="k">case</span> <span class="s">&quot;Nd&quot;</span><span class="p">:</span>
    <span class="o">...</span>
<span class="k">default</span><span class="p">:</span>
    <span class="o">...</span>
<span class="p">}</span>
</pre></div></dd></dl>
<p>Допускается отсутствие выражения выбора, в этом случае в альтернативах должны быть записаны логические условия. Выполняется первая по счёту ветвь, условие которой истинно:
</p>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="k">switch</span> <span class="p">{</span>
<span class="k">case</span> <span class="sc">&#39;0&#39;</span> <span class="o">&lt;=</span> <span class="nx">c</span> <span class="o">&amp;&amp;</span> <span class="nx">c</span> <span class="o">&lt;=</span> <span class="sc">&#39;9&#39;</span><span class="p">:</span>
    <span class="k">return</span> <span class="nx">c</span> <span class="o">-</span> <span class="sc">&#39;0&#39;</span>
<span class="k">case</span> <span class="sc">&#39;a&#39;</span> <span class="o">&lt;=</span> <span class="nx">c</span> <span class="o">&amp;&amp;</span> <span class="nx">c</span> <span class="o">&lt;=</span> <span class="sc">&#39;f&#39;</span><span class="p">:</span>
    <span class="k">return</span> <span class="nx">c</span> <span class="o">-</span> <span class="sc">&#39;a&#39;</span> <span class="o">+</span> <span class="mi">10</span>
<span class="k">case</span> <span class="sc">&#39;A&#39;</span> <span class="o">&lt;=</span> <span class="nx">c</span> <span class="o">&amp;&amp;</span> <span class="nx">c</span> <span class="o">&lt;=</span> <span class="sc">&#39;F&#39;</span><span class="p">:</span>
    <span class="k">return</span> <span class="nx">c</span> <span class="o">-</span> <span class="sc">&#39;A&#39;</span> <span class="o">+</span> <span class="mi">10</span>
<span class="p">}</span>
</pre></div></dd></dl>
<p>Важная деталь: если одна из ветвей с условием заканчивается оператором <code>fallthrough</code>, то после данной ветви начнёт обрабатываться следующая, <i>независимо от того, выполняется ли её условие</i>. Если нужно, чтобы следующая ветвь обрабатывалась только если её условие выполняется, нужно использовать последовательные конструкции <code>if</code>.
</p>
<h2><span id=".D0.9E.D1.81.D0.BE.D0.B1.D0.B5.D0.BD.D0.BD.D0.BE.D1.81.D1.82.D0.B8_.D0.B0.D1.80.D1.85.D0.B8.D1.82.D0.B5.D0.BA.D1.82.D1.83.D1.80.D1.8B"></span><span class="mw-headline" id="Особенности_архитектуры">Особенности архитектуры</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=27" class="mw-editsection-visualeditor" title="Редактировать раздел «Особенности архитектуры»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=27" title="Редактировать раздел «Особенности архитектуры»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<h3><span id=".D0.9E.D0.B1.D1.80.D0.B0.D0.B1.D0.BE.D1.82.D0.BA.D0.B0_.D0.BE.D1.88.D0.B8.D0.B1.D0.BE.D0.BA_.D0.B8_.D0.B8.D1.81.D0.BA.D0.BB.D1.8E.D1.87.D0.B8.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D1.8B.D1.85_.D1.81.D0.B8.D1.82.D1.83.D0.B0.D1.86.D0.B8.D0.B9"></span><span class="mw-headline" id="Обработка_ошибок_и_исключительных_ситуаций">Обработка ошибок и исключительных ситуаций</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=28" class="mw-editsection-visualeditor" title="Редактировать раздел «Обработка ошибок и исключительных ситуаций»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=28" title="Редактировать раздел «Обработка ошибок и исключительных ситуаций»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Язык Go не поддерживает типичного для большинства современных языков синтаксиса <a href="/wiki/%D0%9E%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0_%D0%B8%D1%81%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B9" title="Обработка исключений">структурной обработки исключений</a>, предполагающего генерацию исключений специальной командой (обычно <code>throw</code> или <code>raise</code>) и их обработку в блоке <code>try-catch</code>. Вместо этого рекомендуется использовать возврат ошибки как одного из результатов функции (что достаточно удобно, так как в Go функция может возвращать более одного значения):
</p>
<ul><li>В последнем параметре функция возвращает объект-ошибку либо пустой указатель <code>nil</code>, если функция выполнилась без ошибок. В качестве типа ошибки обычно используется библиотечный интерфейс <code>error</code>.</li>
<li>Возвращённый функцией объект проверяется и ошибка, если она возникла, обрабатывается. Если ошибка в месте вызова не может быть адекватно обработана, она обычно возвращается в качестве результата текущей функции, либо на её основе создаётся новая ошибка, которая и возвращается.</li></ul>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">ReadFile</span><span class="p">(</span><span class="nx">srcName</span> <span class="kt">string</span><span class="p">)(</span><span class="nx">result</span> <span class="kt">string</span><span class="p">,</span> <span class="nx">err</span> <span class="kt">error</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">file</span><span class="p">,</span> <span class="nx">err</span> <span class="o">:=</span> <span class="nx">os</span><span class="p">.</span><span class="nx">Open</span><span class="p">(</span><span class="s">&quot;file.txt&quot;</span><span class="p">)</span>
    <span class="k">if</span> <span class="nx">err</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="p">{</span>
        <span class="c1">// Генерация новой ошибки с уточняющим текстом</span>
        <span class="k">return</span> <span class="kc">nil</span><span class="p">,</span> <span class="nx">fmt</span><span class="p">.</span><span class="nx">Errorf</span><span class="p">(</span><span class="s">&quot;Ошибка при чтении файла %s: %g\n&quot;</span><span class="p">,</span> <span class="nx">srcName</span><span class="p">,</span> <span class="nx">err</span><span class="p">)</span> 
    <span class="p">}</span> 
    <span class="o">...</span> <span class="c1">// Дальнейшее исполнение функции, если ошибки не было</span>
    <span class="k">return</span> <span class="nx">result</span><span class="p">,</span> <span class="kc">nil</span>  <span class="c1">// Возврат результата и пустой ошибки, если выполнение успешно</span>
<span class="p">}</span>
</pre></div>
<ul><li>Проигнорировать ошибку, возвращаемую из функции (в примере выше&#160;— не проверить значение переменной <code>err</code>) невозможно, так как инициализация переменной без последующего использования в языке Go приводит к ошибке компиляции. Это ограничение можно обойти подстановкой вместо err псевдопеременной <code>_</code>, но это явно бросается в глаза при просмотре кода.</li></ul>
<p>Многие критики языка считают, что подобная идеология хуже, чем обработка исключений, так как многочисленные проверки засоряют код и не позволяют сосредоточить всю обработку ошибок в блоках <code>catch</code>. Создатели языка не считают это серьёзной проблемой. Описан ряд паттернов обработки ошибок в Go (см., например, <a rel="nofollow" class="external text" href="https://blog.golang.org/errors-are-values">статью Роба Пайка в официальном блоге Go</a>, <a rel="nofollow" class="external text" href="https://habrahabr.ru/post/269909/">русский перевод</a>), позволяющих сократить объём кода, обрабатывающего ошибки.
</p><p>При возникновении фатальных ошибок, делающих невозможным дальнейшее исполнение программы (например, деления на ноль либо обращения за границы массива), возникает состояние «паники» (<i>panic</i>), которое по умолчанию приводит к аварийному завершению программы с выдачей сообщения об ошибке и трассировки стека вызовов. Паника может быть перехвачена и обработана с помощью конструкции отложенного исполнения <code>defer</code>, описанной выше. Вызов функции, указанный в <code>defer</code>, производится перед выходом из текущей области видимости, в том числе и в случае паники. Внутри функции, вызываемой в <code>defer</code>, можно вызвать стандартную функцию <code>recover()</code>&#160;— она прекращает системную обработку паники и возвращает её причину в виде объекта <code>error</code>, который можно обработать как обычную ошибку. Но программист может и возобновить ранее перехваченную панику, вызвав стандартную функцию <code>panic(err error)</code>.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// Программа выполняет целочисленное деление</span>
<span class="c1">// своего первого параметра на второй </span>
<span class="c1">// и выводит результат.</span>
<span class="kd">func</span> <span class="nx">main</span><span class="p">()</span> <span class="p">{</span>
	<span class="k">defer</span> <span class="kd">func</span><span class="p">()</span> <span class="p">{</span>
		<span class="nx">err</span> <span class="o">:=</span> <span class="nb">recover</span><span class="p">()</span>
		<span class="k">if</span> <span class="nx">v</span><span class="p">,</span> <span class="nx">ok</span> <span class="o">:=</span> <span class="nx">err</span><span class="p">.(</span><span class="kt">error</span><span class="p">);</span> <span class="nx">ok</span> <span class="p">{</span> <span class="c1">// Обработка паники, соответствующей интерфейсу error</span>
			<span class="nx">fmt</span><span class="p">.</span><span class="nx">Fprintf</span><span class="p">(</span><span class="nx">os</span><span class="p">.</span><span class="nx">Stderr</span><span class="p">,</span> <span class="s">&quot;Error %v \&quot;%s\&quot;\n&quot;</span><span class="p">,</span> <span class="nx">err</span><span class="p">,</span> <span class="nx">v</span><span class="p">.</span><span class="nx">Error</span><span class="p">())</span>
		<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="nx">err</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="p">{</span> 
			<span class="nb">panic</span><span class="p">(</span><span class="nx">err</span><span class="p">)</span>  <span class="c1">// Обработка неожиданных ошибок - повторный вызов паники.</span>
		<span class="p">}</span>
	<span class="p">}()</span>
	<span class="nx">a</span><span class="p">,</span> <span class="nx">err</span> <span class="o">:=</span> <span class="nx">strconv</span><span class="p">.</span><span class="nx">ParseInt</span><span class="p">(</span><span class="nx">os</span><span class="p">.</span><span class="nx">Args</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="mi">10</span><span class="p">,</span> <span class="mi">64</span><span class="p">)</span>
	<span class="k">if</span> <span class="nx">err</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="p">{</span>
		<span class="nb">panic</span><span class="p">(</span><span class="nx">err</span><span class="p">)</span>
	<span class="p">}</span>
	<span class="nx">b</span><span class="p">,</span> <span class="nx">err</span> <span class="o">:=</span> <span class="nx">strconv</span><span class="p">.</span><span class="nx">ParseInt</span><span class="p">(</span><span class="nx">os</span><span class="p">.</span><span class="nx">Args</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="mi">10</span><span class="p">,</span> <span class="mi">64</span><span class="p">)</span>
	<span class="k">if</span> <span class="nx">err</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="p">{</span>
		<span class="nb">panic</span><span class="p">(</span><span class="nx">err</span><span class="p">)</span>
	<span class="p">}</span>
	<span class="nx">fmt</span><span class="p">.</span><span class="nx">Fprintf</span><span class="p">(</span><span class="nx">os</span><span class="p">.</span><span class="nx">Stdout</span><span class="p">,</span> <span class="s">&quot;%d / %d = %d\n&quot;</span><span class="p">,</span> <span class="nx">a</span><span class="p">,</span> <span class="nx">b</span><span class="p">,</span> <span class="nx">a</span><span class="o">/</span><span class="nx">b</span><span class="p">)</span>
<span class="p">}</span>
</pre></div>
<p>В примере выше могут произойти ошибки при преобразовании аргументов программы в целые числа функцией <code>strconv.ParseInt()</code>. Также возможна паника при обращении к массиву os.Args при недостаточном количестве аргументов, либо при делении на нуль, если второй параметр окажется нулевым. При любой ошибочной ситуации генерируется паника, которая обрабатывается в вызове <code>defer</code>:
</p>
<div class="mw-highlight mw-content-ltr" dir="ltr"><pre>&gt; divide 10 5
10 / 5 = 2

&gt; divide 10 0
Error runtime.errorString "runtime error: integer divide by zero"

&gt; divide 10.5 2
Error *strconv.NumError "strconv.ParseInt: parsing "10.5": invalid syntax"

&gt; divide 10
Error runtime.errorString "runtime error: index out of range"</pre></div>
<p>Паника не может быть вызвана в одной параллельно исполняемой го-процедуре (см. ниже), а обработана в другой. Также не рекомендуется «передавать» панику через границу пакета.
</p>
<h3><span id=".D0.9C.D0.BD.D0.BE.D0.B3.D0.BE.D0.BF.D0.BE.D1.82.D0.BE.D1.87.D0.BD.D0.BE.D1.81.D1.82.D1.8C"></span><span class="mw-headline" id="Многопоточность">Многопоточность</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=29" class="mw-editsection-visualeditor" title="Редактировать раздел «Многопоточность»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=29" title="Редактировать раздел «Многопоточность»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Модель многопоточности Go была создана на основе <a href="/wiki/%D0%92%D0%B7%D0%B0%D0%B8%D0%BC%D0%BE%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D1%83%D1%8E%D1%89%D0%B8%D0%B5_%D0%BF%D0%BE%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D1%8B" title="Взаимодействующие последовательные процессы">CSP</a> <a href="/wiki/%D0%A5%D0%BE%D0%B0%D1%80,_%D0%A7%D0%B0%D1%80%D0%BB%D1%8C%D0%B7_%D0%AD%D0%BD%D1%82%D0%BE%D0%BD%D0%B8_%D0%A0%D0%B8%D1%87%D0%B0%D1%80%D0%B4" title="Хоар, Чарльз Энтони Ричард">Тони Хоара</a> по типу предыдущих распараллеливаемых языков программирования <a href="/wiki/%D0%9E%D0%BA%D0%BA%D0%B0%D0%BC_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" class="mw-redirect" title="Оккам (язык программирования)">Occam</a> и <a href="/wiki/Limbo" title="Limbo">Limbo</a><sup id="cite_ref-langfaq_5-4" class="reference"><a href="#cite_note-langfaq-5">&#91;5&#93;</a></sup>, но также присутствуют такие особенности как <a href="/wiki/%D0%9F%D0%B8-%D0%B8%D1%81%D1%87%D0%B8%D1%81%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5" title="Пи-исчисление">Пи-исчисление</a> и канальная передача.
</p><p>Go дает возможность создать новый поток выполнения программы с помощью ключевого слова <b>go</b>, которое запускает анонимную или именованную функцию в заново созданной <i>go-процедуре</i> (термин, используемый в Go для обозначения <a href="/wiki/%D0%A1%D0%BE%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0" title="Сопрограмма">сопрограмм</a>). Все go-процедуры в рамках одного процесса используют общее адресное пространство, выполняясь над <a href="/wiki/%D0%9F%D0%BE%D1%82%D0%BE%D0%BA_%D0%B2%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B8%D1%8F" title="Поток выполнения">ОС-потоками</a>, но без жёсткой привязки к последним, что позволяет выполняющейся go-процедуре покидать поток с заблокированной go-процедурой (ждущей, например, отправки или приема сообщения из канала) и продолжать работу далее. Библиотека времени исполнения включает мультиплексор, обеспечивающий разделение доступного количества системных ядер между go-процедурами. Имеется возможность ограничить максимальное число физических процессорных ядер, на которых будет исполняться программа. Самостоятельная поддержка go-процедур runtime-библиотекой Go позволяет без затруднений использовать в программах огромные количества go-процедур, намного превышающие предельное число поддерживаемых системой потоков.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">server</span><span class="p">(</span><span class="nx">i</span> <span class="kt">int</span><span class="p">)</span> <span class="p">{</span>
	<span class="k">for</span> <span class="p">{</span>
		<span class="nb">print</span><span class="p">(</span><span class="nx">i</span><span class="p">)</span>
		<span class="nx">time</span><span class="p">.</span><span class="nx">Sleep</span><span class="p">(</span><span class="mi">10</span><span class="p">)</span>
	<span class="p">}</span>
<span class="p">}</span>
<span class="k">go</span> <span class="nx">server</span><span class="p">(</span><span class="mi">1</span><span class="p">)</span>
<span class="k">go</span> <span class="nx">server</span><span class="p">(</span><span class="mi">2</span><span class="p">)</span>
</pre></div>
<p>В выражении <b>go</b> можно использовать <a href="/wiki/%D0%97%D0%B0%D0%BC%D1%8B%D0%BA%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Замыкание (программирование)">замыкания</a>.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">var</span> <span class="nx">g</span> <span class="kt">int</span>
<span class="k">go</span> <span class="kd">func</span><span class="p">(</span><span class="nx">i</span> <span class="kt">int</span><span class="p">)</span> <span class="p">{</span>
	<span class="nx">s</span> <span class="o">:=</span> <span class="mi">0</span>
	<span class="k">for</span> <span class="nx">j</span> <span class="o">:=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">j</span> <span class="p">&lt;</span> <span class="nx">i</span><span class="p">;</span> <span class="nx">j</span><span class="o">++</span> <span class="p">{</span> <span class="nx">s</span> <span class="o">+=</span> <span class="nx">j</span> <span class="p">}</span>
	<span class="nx">g</span> <span class="p">=</span> <span class="nx">s</span>
<span class="p">}(</span><span class="mi">1000</span><span class="p">)</span>
</pre></div>
<p>Для связи между go-процедурами используются <i>каналы</i> (встроенный тип <b>chan</b>), через которые можно передавать любые значения. Канал создаётся встроенной функцией <code>make()</code>, которой передаётся тип и (опционально) объём канала. По умолчанию объём канала равен нулю. Такие каналы являются <i>небуферизованными</i>. Можно задать любой целый положительный объём канала, тогда будет создан <i>буферизованный</i> канал.
</p><p>Небуферизованный канал жёстко синхронизирует поток-читатель и поток-писатель, использующих его. Когда поток-писатель что-то записывает в канал, он приостанавливается и ожидает, пока значение не будет прочитано. Когда поток-читатель пытается что-то прочитать из канала, куда уже произведена запись, он считывает значение, и оба потока могут продолжать исполняться. Если же в канал ещё не записано значения, поток-читатель приостанавливается и ожидает, пока кто-нибудь не произведёт запись в канал. То есть небуферизованные каналы в Go ведут себя так же, как каналы в <a href="/wiki/Occam" title="Occam">Occam</a>'е или механизм <a href="/wiki/%D0%A0%D0%B0%D0%BD%D0%B4%D0%B5%D0%B2%D1%83" class="mw-disambig" title="Рандеву">рандеву</a> в <a href="/wiki/%D0%90%D0%B4%D0%B0_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Ада (язык программирования)">языке Ада</a>.
</p><p>Буферизованный канал имеет буфер значений, размер которого равен объёму канала. При записи в такой канал значение помещается в буфер канала, а поток-писатель продолжает работу без приостановки, если только буфер канала на момент записи не полон. Если буфер полон, то поток-писатель приостанавливается до момента, пока из канала не будет прочитано хотя бы одно значение. Поток-читатель также считывает из буферизованного канала значение без приостановки, если в буфере канала есть непрочитанные значения; если буфер канала пуст, то поток приостанавливается и ждёт, пока какой-либо другой поток не запишет в него значение.
</p><p>По завершении использования канал может быть закрыт встроенной функцией <code>close()</code>. Попытка записи в закрытый канал приводит к панике, чтение из закрытого канала всегда происходит без приостановки и считывает значение по умолчанию. Если канал буферизованный и в момент закрытия содержит в буфере N ранее записанных значений, то первые N операций чтения выполнятся так, как будто канал ещё открыт, и прочитают значения из буфера, и только после этого чтение из канала будет возвращать значения по умолчанию.
</p><p>Для передачи значения в канал и из канала используется операция <code>&lt;-</code>. При записи в канал она применяется в качестве бинарного оператора, при чтении&#160;— в качестве унарного оператора:
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">in</span> <span class="o">:=</span> <span class="nb">make</span><span class="p">(</span><span class="kd">chan</span> <span class="kt">string</span><span class="p">,</span> <span class="mi">0</span><span class="p">)</span> <span class="c1">// Создание небуферизованного канала in</span>
<span class="nx">out</span> <span class="o">:=</span> <span class="nb">make</span><span class="p">(</span><span class="kd">chan</span> <span class="kt">int</span><span class="p">,</span> <span class="mi">10</span><span class="p">)</span>  <span class="c1">// Создание буферизованного канала out</span>
<span class="o">...</span>
<span class="nx">in</span> <span class="o">&lt;-</span> <span class="nx">arg</span>      <span class="c1">// запись значения в канал in</span>
<span class="o">...</span>
<span class="nx">r1</span> <span class="o">:=</span> <span class="o">&lt;-</span> <span class="nx">out</span> <span class="c1">// чтение из канала out </span>
<span class="o">...</span>
<span class="nx">r2</span><span class="p">,</span> <span class="nx">ok</span> <span class="o">:=</span> <span class="o">&lt;-</span> <span class="nx">out</span> <span class="c1">// чтение с проверкой закрытия канала</span>
<span class="k">if</span> <span class="nx">ok</span> <span class="p">{</span> <span class="c1">// если ok == true - канал открыт</span>
   <span class="o">...</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span> <span class="c1">// если канал закрыт, делаем что-то ещё</span>
   <span class="o">...</span>
<span class="p">}</span>
</pre></div>
<p>Операция чтения из канала имеет два варианта: без проверки и с проверкой закрытия канала. Первый вариант (чтение r1 в примере выше) просто выполняет чтение очередного значения в переменную; если канал закрыт, то в r1 прочитается значение по умолчанию. Второй вариант (чтение r2) считывает, помимо значения, логическое значение&#160;— флаг состояния канала ok, который будет истинным, если из канала прочитаны данные, помещённые туда каким-либо потоком, и ложным, если канал закрыт и его буфер пуст. С помощью этой операции поток-читатель может определить, когда входной канал закрыт.
</p><p>Также поддерживается чтение из канала с помощью циклической конструкции for-range:
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// Функция запускает параллельное чтение из входного канала in целых чисел и запись </span>
<span class="c1">// в выходной канал только тех из них, которые положительны. </span>
<span class="c1">// Возвращает выходной канал. </span>
<span class="kd">func</span> <span class="nx">positives</span><span class="p">(</span><span class="nx">in</span> <span class="o">&lt;-</span><span class="kd">chan</span> <span class="kt">int64</span><span class="p">)</span> <span class="o">&lt;-</span><span class="kd">chan</span> <span class="kt">int64</span> <span class="p">{</span>
    <span class="nx">out</span> <span class="o">:=</span> <span class="nb">make</span><span class="p">(</span><span class="kd">chan</span> <span class="kt">int64</span><span class="p">)</span>
    <span class="k">go</span> <span class="kd">func</span><span class="p">()</span> <span class="p">{</span>
        <span class="c1">// Цикл далее будет выполняться, пока канал in не закрыт</span>
        <span class="k">for</span> <span class="nx">next</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">in</span> <span class="p">{</span>
            <span class="k">if</span> <span class="nx">next</span> <span class="p">&gt;</span> <span class="mi">0</span> <span class="p">{</span>
                <span class="nx">out</span> <span class="o">&lt;-</span> <span class="nx">next</span>
            <span class="p">}</span>
        <span class="p">}</span>
        <span class="nb">close</span><span class="p">(</span><span class="nx">out</span><span class="p">)</span>
    <span class="p">}()</span>
    <span class="k">return</span> <span class="nx">out</span>
<span class="p">}</span>
</pre></div>
<p>Помимо CSP или совместно с механизмом канальной передачи Go позволяет использовать и обычную модель синхронизированного взаимодействия потоков через общую память, с использованием типовых средств синхронизации доступа, таких как <a href="/wiki/%D0%9C%D1%8C%D1%8E%D1%82%D0%B5%D0%BA%D1%81" title="Мьютекс">мьютексы</a>. При этом, однако, спецификация языка прямо предостерегает от любых попыток несинхронизированного взаимодействия параллельных потоков через общую память, так как в отсутствие явной синхронизации компилятор оптимизирует код доступа к данным без учёта возможности одновременного обращения из разных потоков, что может приводить к неожиданным ошибкам. Например, запись значений в глобальные переменные в одном потоке может быть не видна или видна не в том порядке из параллельного потока. Например, следующая программа написана в предположении, что запущенная в параллельной go-процедуре функция <code>setup()</code> создаст структуру типа <code>T</code>, инициализирует её строкой «hello, world», после чего присвоит ссылку на инициализированную структуру глобальной переменной <code>g</code>. Исходя из этого предположения, в функции <code>main()</code> запускается пустой цикл, ожидающий появления в <code>g</code> ненулевого значения. Как только оно появится, <code>main()</code> выводит строку из структуры, на которую указывает <code>g</code>, считая, что структура уже инициализирована.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">T</span> <span class="kd">struct</span> <span class="p">{</span> 
	<span class="nx">msg</span> <span class="kt">string</span> 
<span class="p">}</span> 

<span class="kd">var</span> <span class="nx">g</span> <span class="o">*</span><span class="nx">T</span> 

<span class="kd">func</span> <span class="nx">setup</span><span class="p">()</span> <span class="p">{</span> 
	<span class="nx">t</span><span class="p">:</span> <span class="p">=</span> <span class="nx">new</span> <span class="p">(</span><span class="nx">T</span><span class="p">)</span> 
	<span class="nx">t</span><span class="p">.</span><span class="nx">msg</span> <span class="p">=</span> <span class="s">&quot;hello, world&quot;</span> 
	<span class="nx">g</span> <span class="p">=</span> <span class="nx">t</span> 
<span class="p">}</span> 

<span class="kd">func</span> <span class="nx">main</span> <span class="p">()</span> <span class="p">{</span> 
	<span class="k">go</span> <span class="nx">setup</span><span class="p">()</span> 
	<span class="k">for</span> <span class="nx">g</span> <span class="o">==</span> <span class="kc">nil</span> <span class="p">{</span> <span class="c1">// НЕ РАБОТАЕТ&#160;!!!</span>
	<span class="p">}</span> 
	<span class="nb">print</span><span class="p">(</span><span class="nx">g</span><span class="p">.</span><span class="nx">msg</span><span class="p">)</span> 
<span class="p">}</span>
</pre></div>
<p>В действительности же возможна одна из двух ошибок.
</p>
<ul><li>Главный поток может просто не увидеть изменения переменной <code>g</code>, и тогда программа зависнет в бесконечном цикле. Такое может произойти, например, если настроенный на агрессивную оптимизацию компилятор определит, что созданное в <code>setup()</code> значение никуда не передаётся и просто удалит весь код данной функции как незначимый.</li>
<li>Главный поток увидит, что значение <code>g</code> перестало быть нулевым, но при этом значение <code>g.msg</code> в момент выполнения функции <code>print()</code> окажется не инициализированным; в этом случае программа выведет пустую строку. Такое может произойти, например, если компилятор в целях оптимизации удалит переменную <code>t</code> и будет записывать ссылку на созданный объект непосредственно в <code>g</code>.</li></ul>
<p>Единственным корректным способом организации передачи данных через общую память является использование библиотечных средств синхронизации, которые гарантируют, что все данные, запись которых произведена одним из синхронизируемых потоков до точки синхронизации, гарантированно доступны в другом синхронизируемом потоке после точки синхронизации.
</p><p>Особенностью многопоточности в Go является то, что go-процедура никак не идентифицируется и не является языковым объектом, на который можно сослаться при вызове функций или который можно поместить в контейнер. Соответственно, отсутствуют средства, позволяющие непосредственно влиять на исполнение сопрограммы извне её, такие как приостановка и последующий запуск, изменение приоритета, ожидание завершения одной сопрограммы в другой, принудительное прерывание исполнения. Любые воздействия на go-процедуру (кроме завершения главной программы, которое автоматически завершает все go-процедуры) могут выполняться только через каналы или иные механизмы синхронизации. Ниже показан типовой код, запускающий несколько go-процедур и ожидающий их завершения с помощью синхронизирующего объекта WaitGroup из системного пакета sync. Этот объект содержит счётчик, первоначально с нулевым значением, который может увеличиваться и уменьшаться, и метод Wait(), который вызывает приостановку текущего потока и ожидание до тех пор, пока счётчик не обнулится.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">main</span><span class="p">()</span> <span class="p">{</span>
	<span class="kd">var</span> <span class="nx">wg</span> <span class="nx">sync</span><span class="p">.</span><span class="nx">WaitGroup</span>                 <span class="c1">// Создание waitgroup. Исходное значение счётчика - 0</span>
	<span class="nx">logger</span> <span class="o">:=</span> <span class="nx">log</span><span class="p">.</span><span class="nx">New</span><span class="p">(</span><span class="nx">os</span><span class="p">.</span><span class="nx">Stdout</span><span class="p">,</span> <span class="s">&quot;&quot;</span><span class="p">,</span> <span class="mi">0</span><span class="p">)</span>   <span class="c1">// log.Logger - потоково-безопасный тип для вывода</span>
	<span class="k">for</span> <span class="nx">_</span><span class="p">,</span> <span class="nx">arg</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">os</span><span class="p">.</span><span class="nx">Args</span> <span class="p">{</span> <span class="c1">// Цикл по всем аргументам командной строки</span>
		<span class="nx">wg</span><span class="p">.</span><span class="nx">Add</span><span class="p">(</span><span class="mi">1</span><span class="p">)</span> <span class="c1">// Увеличение счётчика waitgroup на единицу</span>
		<span class="c1">// Запуск go-процедуры для обработки параметра arg</span>
		<span class="k">go</span> <span class="kd">func</span><span class="p">(</span><span class="nx">word</span> <span class="kt">string</span><span class="p">)</span> <span class="p">{</span>
			<span class="c1">// Отложенное уменьшение счётчика waitgroup на единицу.</span>
			<span class="c1">// Произойдёт по завершении функции.</span>
			<span class="k">defer</span> <span class="nx">wg</span><span class="p">.</span><span class="nx">Done</span><span class="p">()</span>
			<span class="nx">logger</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">prepareWord</span><span class="p">(</span><span class="nx">word</span><span class="p">))</span> <span class="c1">// Выполнение обработки и вывод результата</span>
		<span class="p">}(</span><span class="nx">arg</span><span class="p">)</span>
	<span class="p">}</span>
	<span class="nx">wg</span><span class="p">.</span><span class="nx">Wait</span><span class="p">()</span>  <span class="c1">// Ожидание, пока счётчик в waitgroup wg не станет равным нулю.</span>
<span class="p">}</span>
</pre></div>
<p>Здесь перед созданием каждой новой go-процедуры счётчик объекта wg увеличивается на единицу, а по завершении go-процедуры&#160;— уменьшается на единицу. В результате в цикле, запускающем обработку аргументов, к счётчику будет добавлено столько единиц, сколько запущено go-процедур. По завершении цикла вызов wg.Wait() вызовет приостановку главной программы. Когда каждая из go-процедур завершается, она уменьшает счётчик wg на единицу, поэтому ожидание главной программы закончится тогда, когда завершится столько go-процедур, сколько было запущено. Без последней строки главная программа, запустив все go-процедуры, немедленно завершилась бы, прервав исполнение тех из них, которые не успели выполниться.
</p><p>Несмотря на наличие встроенной в язык многопоточности не все стандартные языковые объекты являются потокобезопасными. Так, стандартный тип map (отображение) не потокобезопасен. Создатели языка объяснили такое решение соображениями эффективности, так как обеспечение безопасности для всех подобных объектов привело бы к дополнительным накладным расходам, которые далеко не всегда являются обязательными (те же операции с отображениями могут быть частью более крупных операций, которые уже синхронизированы программистом, и тогда дополнительная синхронизация лишь усложнит и замедлит программу). Начиная с версии 1.9 в библиотечный пакет sync, содержащий средства поддержки параллельной обработки, добавлен потокобезопасный тип sync.Map, который при необходимости можно использовать. Также можно обратить внимание на использованный в последнем примере способ вывода результатов. Обычно вывод на консоль в Go производится функциями пакета fmt (Printf, Println и так далее). Однако этот пакет не является потокобезопасным, и для использования его функций в go-процедурах пришлось бы дополнительно синхронизировать их вызовы. В примере проблема обойдена с помощью использования потокобезопасного типа log.Logger, который также содержит методы для вывода текстов и может быть использован для вывода на консоль.
</p>
<h3><span id=".D0.9E.D0.B1.D1.8A.D0.B5.D0.BA.D1.82.D0.BD.D0.BE-.D0.BE.D1.80.D0.B8.D0.B5.D0.BD.D1.82.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.BD.D0.BE.D0.B5_.D0.BF.D1.80.D0.BE.D0.B3.D1.80.D0.B0.D0.BC.D0.BC.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Объектно-ориентированное_программирование"><a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Объектно-ориентированное программирование">Объектно-ориентированное программирование</a></span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=30" class="mw-editsection-visualeditor" title="Редактировать раздел «Объектно-ориентированное программирование»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=30" title="Редактировать раздел «Объектно-ориентированное программирование»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Специальное ключевое слово для объявления <a href="/wiki/%D0%9A%D0%BB%D0%B0%D1%81%D1%81_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Класс (программирование)">класса</a> в Go отсутствует, но для любого именованного типа, включая структуры и базовые типы вроде int, можно определить <a href="/wiki/%D0%9C%D0%B5%D1%82%D0%BE%D0%B4_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Метод (программирование)">методы</a>, так что в смысле ООП все такие типы являются классами.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">newInt</span> <span class="kt">int</span>
</pre></div>
<p>Синтаксис определения метода заимствован из языка <a href="/wiki/%D0%9E%D0%B1%D0%B5%D1%80%D0%BE%D0%BD-2_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Оберон-2 (язык программирования)">Оберон-2</a> и отличается от обычного определения функции тем, что после ключевого слова func в круглых скобках объявляется так называемый «получатель» (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">receiver</span>), то есть объект, для которого вызывается метод, и тип, к которому относится метод. Если в традиционных объектных языках получатель подразумевается и имеет стандартное имя (в C++ или Java&#160;— «this», в ObjectPascal&#160;— «self» и&#160;т.&#160;п.), то в Go он указывается явно и его имя может быть любым правильным Go-идентификатором.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">myType</span> <span class="kd">struct</span> <span class="p">{</span> <span class="nx">i</span> <span class="kt">int</span> <span class="p">}</span>
<span class="c1">// Здесь p - получатель в методах типа myType.</span>
<span class="kd">func</span> <span class="p">(</span><span class="nx">p</span> <span class="o">*</span><span class="nx">myType</span><span class="p">)</span> <span class="nx">get</span><span class="p">()</span> <span class="kt">int</span> <span class="p">{</span> <span class="k">return</span> <span class="nx">p</span><span class="p">.</span><span class="nx">i</span> <span class="p">}</span>
<span class="kd">func</span> <span class="p">(</span><span class="nx">p</span> <span class="o">*</span><span class="nx">myType</span><span class="p">)</span> <span class="nx">set</span><span class="p">(</span><span class="nx">i</span> <span class="kt">int</span><span class="p">)</span> <span class="p">{</span> <span class="nx">p</span><span class="p">.</span><span class="nx">i</span> <span class="p">=</span> <span class="nx">i</span> <span class="p">}</span>
</pre></div>
<p>Наследование классов (структур) в Go формально отсутствует, но имеется технически близкий к нему механизм встраивания (<a href="/wiki/%D0%90%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Английский язык">англ.</a>&#160;<span lang="en" style="font-style:italic;">embedding</span>). В описании структуры можно использовать так называемое анонимное поле&#160;— поле, для которого не указывается имя, а только тип. В результате такого описания все элементы встраиваемой структуры станут одноимёнными элементами встраивающей.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="c1">// Новый тип-структура</span>
<span class="kd">type</span> <span class="nx">myType2</span> <span class="kd">struct</span> <span class="p">{</span> 
  <span class="nx">myType</span>  <span class="c1">// Анонимное поле обеспечивает встраивание типа myType.</span>
          <span class="c1">// Теперь myType2 содержит поле i и методы get() и set(int).</span>
  <span class="nx">k</span> <span class="kt">int</span>
<span class="p">}</span>
</pre></div>
<p>В отличие от классического наследования, встраивание не влечёт <a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%B8%D0%BC%D0%BE%D1%80%D1%84%D0%B8%D0%B7%D0%BC_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Полиморфизм (информатика)">полиморфное</a> поведение (объект встраивающего класса не может выступать в качестве объекта встраиваемого без явного преобразования типов).
</p><p>Невозможно явно описать методы для безымянного типа (синтаксис просто не даёт возможности указать тип получателя в методе), но это ограничение можно легко обойти путём встраивания именованного типа с необходимыми методами.
</p><p><a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%B8%D0%BC%D0%BE%D1%80%D1%84%D0%B8%D0%B7%D0%BC_(%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0)" title="Полиморфизм (информатика)">Полиморфизм</a> классов обеспечивается в Go механизмом <a href="/wiki/%D0%98%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81_(%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%BD%D0%BE-%D0%BE%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Интерфейс (объектно-ориентированное программирование)">интерфейсов</a> (похожи на полностью абстрактные классы в <a href="/wiki/C%2B%2B" title="C++">C++</a>). Интерфейс описывается с помощью ключевого слова interface, внутри (в отличие от описаний типов-классов) описания объявляются предоставляемые интерфейсом методы.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">myInterface</span> <span class="kd">interface</span> <span class="p">{</span>
	<span class="nx">get</span><span class="p">()</span> <span class="kt">int</span>
	<span class="nx">set</span><span class="p">(</span><span class="nx">i</span> <span class="kt">int</span><span class="p">)</span>
<span class="p">}</span>
</pre></div>
<p>В Go нет необходимости явно указывать, что некоторый тип реализует определённый интерфейс. Вместо этого действует правило: каждый тип, предоставляющий методы, обозначенные в интерфейсе, может быть использован как реализация этого интерфейса. Объявленный выше тип <code>myType</code> реализует интерфейс <code>myInterface</code>, хотя это нигде не указано явно, поскольку он содержит методы <code>get()</code> и <code>set()</code>, сигнатуры которых соответствуют описанным в <code>myInterface</code>.
</p><p>Аналогично классам, интерфейсы допускают встраивание:
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">mySecondInterface</span> <span class="kd">interface</span> <span class="p">{</span>
    <span class="nx">myInterface</span>  <span class="c1">// то же, что явно описать get() int; 	set(i int)</span>
    <span class="nx">change</span><span class="p">(</span><span class="nx">i</span> <span class="kt">int</span><span class="p">)</span> <span class="kt">int</span>
<span class="p">}</span>
</pre></div>
<p>Здесь интерфейс mySecondInterface наследует интерфейс myInterface (то есть объявляет, что предоставляет методы, входящие в myInterface) и дополнительно объявляет один собственный метод <code>change()</code>.
</p><p>Хотя в принципе возможно построить в программе на Go и иерархию интерфейсов, как это практикуется в других объектных языках, и даже имитировать наследование, это считается плохой практикой. Язык диктует не иерархический, а композиционный подход к системе классов и интерфейсов. Классы-структуры при таком подходе вообще могут оставаться формально независимыми, а интерфейсы не объединяются в единую иерархию, а создаются для конкретных применений, при необходимости встраивая уже имеющиеся. Неявная реализация интерфейсов в Go обеспечивает чрезвычайную гибкость этих механизмов и минимум технических затруднений при их использовании.
</p><p>Такой подход к наследованию соответствует некоторым практическим тенденциям современного программирования. Так в <a href="/wiki/Design_Patterns" title="Design Patterns">знаменитой книге</a> «банды четырёх» (<a href="/wiki/%D0%93%D0%B0%D0%BC%D0%BC%D0%B0,_%D0%AD%D1%80%D0%B8%D1%85" title="Гамма, Эрих">Эрих Гамма</a> и др.) о <a href="/wiki/%D0%9F%D0%B0%D1%82%D1%82%D0%B5%D1%80%D0%BD%D1%8B_%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Паттерны проектирования">паттернах проектирования</a>, в частности, написано:
</p>
<style data-mw-deduplicate="TemplateStyles:r104610251">.mw-parser-output .ts-Цитата-container{margin:auto;border-collapse:collapse;display:flex;justify-content:center}.mw-parser-output .ts-Цитата-quote{font-style:italic}.mw-parser-output .ts-Цитата-container cite{display:block;float:right;font-style:normal}.mw-parser-output .ts-Цитата-leftQuote,.mw-parser-output .ts-Цитата-rightQuote{width:30px;padding-right:10px}.mw-parser-output .ts-Цитата-leftQuote{vertical-align:top}.mw-parser-output .ts-Цитата-rightQuote{vertical-align:bottom}.mw-parser-output .ts-Цитата-container .ts-oq .NavFrame{padding:0.25em 0 0}</style><table class="ts-Цитата-container"><tbody><tr><td class="ts-Цитата-leftQuote"><img alt="«" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/44/Aquote1.png/30px-Aquote1.png" decoding="async" width="30" height="23" srcset="//upload.wikimedia.org/wikipedia/commons/4/44/Aquote1.png 1.5x" data-file-width="40" data-file-height="30" /></td><td class="ts-Цитата-quote">Зависимость от реализации может повлечь за собой проблемы при попытке повторного использования подкласса. Если хотя бы один аспект унаследованной реализации непригоден для новой предметной области, то приходится  переписывать родительский класс или заменять его чем-то более подходящим. Такая  зависимость ограничивает гибкость и возможности повторного использования. С  проблемой можно справиться, если наследовать только абстрактным классам, поскольку в них обычно совсем нет реализации или она минимальна.</td><td class="ts-Цитата-rightQuote"><img alt="»" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/49/Aquote2.png/30px-Aquote2.png" decoding="async" width="30" height="23" srcset="//upload.wikimedia.org/wikipedia/commons/4/49/Aquote2.png 1.5x" data-file-width="40" data-file-height="30" /></td></tr></tbody></table>
<p>В Go нет понятия <a href="/wiki/%D0%92%D0%B8%D1%80%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D1%8F" class="mw-redirect" title="Виртуальная функция">виртуальной функции</a>. Полиморфизм обеспечивается за счёт интерфейсов. Если для вызова метода используется переменная обычного типа, то такой вызов связывается статически, то есть всегда вызывается метод, определённый для данного конкретного типа. Если же метод вызывается для переменной типа «интерфейс», то такой вызов связывается динамически, и в момент исполнения для запуска выбирается тот вариант метода, который определён для типа объекта, фактически присвоенного в момент вызова этой переменной.
</p><p>Динамическая поддержка объектно-ориентированного программирования для Go осуществлена с помощью проекта <a rel="nofollow" class="external text" href="https://github.com/losalamos/goop">GOOP</a>.
</p>
<h3><span id=".D0.A0.D0.B5.D1.84.D0.BB.D0.B5.D0.BA.D1.81.D0.B8.D1.8F"></span><span class="mw-headline" id="Рефлексия">Рефлексия</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=31" class="mw-editsection-visualeditor" title="Редактировать раздел «Рефлексия»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=31" title="Редактировать раздел «Рефлексия»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Возможность интроспекции во время выполнения, то есть доступ и обработка значений любых типов и динамическая настройка на типы обрабатываемых данных реализуются в Go с помощью системного пакета <code>reflect</code>. Средства данного пакета позволяют:
</p>
<ul><li>определить тип любого значения;</li>
<li>сравнить на эквивалентность два любых значения, в том числе те, которые не сравниваются стандартными средствами языка, например, срезы;</li>
<li>работать одним и тем же кодом со значениями любых типов (тип <code>reflect.Value</code> позволяет представить значение любого языкового типа и преобразовать его в один из стандартных типов, если такое преобразование возможно);</li>
<li>изменять любые значения, если такое изменение в принципе возможно (например, изменить часть строки);</li>
<li>исследовать типы, в частности, обращаться к полям структур и их дескрипторам, получать списки методов типов, их описания;</li>
<li>вызывать произвольные функции и методы.</li></ul>
<p>Также пакет <code>reflect</code> содержит множество вспомогательных инструментов для выполнения операций в зависимости от динамического состояния программы.
</p>
<h3><span id=".D0.9D.D0.B8.D0.B7.D0.BA.D0.BE.D1.83.D1.80.D0.BE.D0.B2.D0.BD.D0.B5.D0.B2.D0.BE.D0.B5_.D0.BF.D1.80.D0.BE.D0.B3.D1.80.D0.B0.D0.BC.D0.BC.D0.B8.D1.80.D0.BE.D0.B2.D0.B0.D0.BD.D0.B8.D0.B5"></span><span class="mw-headline" id="Низкоуровневое_программирование">Низкоуровневое программирование</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=32" class="mw-editsection-visualeditor" title="Редактировать раздел «Низкоуровневое программирование»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=32" title="Редактировать раздел «Низкоуровневое программирование»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Средства низкоуровневого доступа к памяти сосредоточены в системном пакете <code>unsafe</code>. Его особенность в том, что, будучи внешне обычным Go-пакетом, он фактически реализуется самим компилятором. Пакет <code>unsafe</code> обеспечивает доступ к внутреннему представлению данных и к «настоящим» указателям на память. Он предоставляет функции:
</p>
<ul><li><code>unsafe.Sizeof()</code>&#160;— аргументом может быть выражение любого типа, функция возвращает реальный размер операнда в байтах, включая неиспользуемую память, которая может появляться в структурах из-за выравнивания;</li>
<li><code>unsafe.Alignof()</code>&#160;— аргументом может быть выражение любого типа, функция возвращает размер в байтах, по которому тип операнда выравниваются в памяти;</li>
<li><code>unsafe.Offsetof()</code>&#160;— аргументом должно быть поле структуры, функция возвращает смещение в байтах, по которому располагается это поле в структуре.</li></ul>
<p>Также пакет предоставляет тип <code>unsafe.Pointer</code>, в который может быть преобразован любой указатель и который может быть преобразован в указатель любого типа, а также в стандартный тип <code>uintptr</code>&#160;— целое беззнаковое значение, достаточно большое для сохранения полного адреса на текущей платформе. Преобразовав указатель в <code>unsafe.Pointer</code> и, далее, в <code>uintptr</code>, можно получить адрес в виде целого числа, к которому можно применять арифметические операции. Преобразовав затем значение обратно в <code>unsafe.Pointer</code> и в указатель на любой конкретный тип, можно таким способом обратиться практически в любое место адресного пространства.
</p><p>Описанные преобразования могут быть небезопасны, поэтому их рекомендуют по возможности избегать. Во-первых, возможны очевидные проблемы, связанные с ошибочным обращением не к той области памяти. Более тонким моментом является то, что несмотря на использование пакета <code>unsafe</code>, объекты Go продолжают находиться под управлением менеджера памяти и сборщика мусора. Преобразование указателя в число выводит этот указатель из-под контроля, и программист не может рассчитывать на то, что такой преобразованный указатель останется актуальным неограниченно долго. Например, попытка сохранить указатель на новый объект типа <code>Т</code> следующим образом:
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">pT</span> <span class="o">:=</span> <span class="nb">uintptr</span><span class="p">(</span><span class="nx">unsafe</span><span class="p">.</span><span class="nx">Pointer</span><span class="p">(</span><span class="nb">new</span><span class="p">(</span><span class="nx">T</span><span class="p">)))</span> <span class="c1">// НЕВЕРНО!</span>
</pre></div>
<p>приведёт к тому, что объект будет создан, указатель на него преобразован в число (которое будет присвоено <code>pT</code>). Однако <code>pT</code> имеет целый тип и сборщик мусора не считает его указателем на созданный объект, так что после завершения операции система управления памятью будет считать этот объект неиспользуемым. То есть он может быть удалён сборщиком мусора, после чего преобразованный указатель <code>pT</code> станет некорректным. Произойти это может в любой момент, как сразу по завершении операции, так и через много часов работы программы, так что ошибка выразится в случайных сбоях программы, причину которых крайне сложно будет выявить. А при использовании перемещающего сборщика мусора<sup id="cite_ref-12" class="reference"><a href="#cite_note-12">&#91;* 1&#93;</a></sup> преобразованный в число указатель может стать неактуальным даже тогда, когда объект ещё не удалён из памяти.
</p><p>Поскольку спецификация Go не даёт точных указаний на то, в какой мере программист может рассчитывать на сохранение актуальности преобразованного в число указателя, существует рекомендация: сводить подобные преобразования к минимуму и организовывать их так, чтобы преобразование исходного указателя, его модификации и обратное преобразование находились в пределах одной языковой инструкции, а при вызове любых библиотечных функций, возвращающих адрес в виде <code>uintptr</code>, немедленно преобразовывать их результат в <code>unsafe.Pointer</code> для сохранения гарантии, что указатель не будет потерян.
</p><p>Пакет <code>unsafe</code> редко используется в прикладном программировании непосредственно, но он активно применяется в пакетах <code>reflect</code>, <code>os</code>, <code>syscall</code>, <code>context</code>, <code>net</code> и некоторых других.
</p>
<h3><span id=".D0.98.D0.BD.D1.82.D0.B5.D1.80.D1.84.D0.B5.D0.B9.D1.81_.D1.81_.D0.BA.D0.BE.D0.B4.D0.BE.D0.BC_.D0.BD.D0.B0_.D0.B4.D1.80.D1.83.D0.B3.D0.B8.D1.85_.D1.8F.D0.B7.D1.8B.D0.BA.D0.B0.D1.85"></span><span class="mw-headline" id="Интерфейс_с_кодом_на_других_языках">Интерфейс с кодом на других языках</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=33" class="mw-editsection-visualeditor" title="Редактировать раздел «Интерфейс с кодом на других языках»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=33" title="Редактировать раздел «Интерфейс с кодом на других языках»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Существует несколько внешних инструментов, обеспечивающих интерфейсы с иноязычными функциями (англ. foreign-function interfaces, FFI) для Go-программ. Для взаимодействия с внешним кодом на <a href="/wiki/%D0%A1%D0%B8_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)" title="Си (язык программирования)">Си</a> (или имеющем совместимый с Си интерфейс) может применяться утилита <a rel="nofollow" class="external text" href="https://golang.org/cmd/cgo">cgo</a>. Она вызывается автоматически при обработке компилятором соответствующим образом написанного Go-модуля, и обеспечивает создание временного пакета-враппера на Go, содержащего объявления всех необходимых типов и функций. В вызовах Си-функций часто приходится прибегать к средствам пакета <code>unsafe</code>, главным образом&#160;— использовать тип <code>unsafe.Pointer</code>. Более мощным инструментом является <a href="/wiki/SWIG" title="SWIG">SWIG</a><sup id="cite_ref-swig_13-0" class="reference"><a href="#cite_note-swig-13">&#91;12&#93;</a></sup>, обеспечивающий более сложные возможности, в частности, интеграцию с классами <a href="/wiki/C%2B%2B" title="C++">C++</a>.
</p>
<h3><span id=".D0.98.D0.BD.D1.82.D0.B5.D1.80.D1.84.D0.B5.D0.B9.D1.81_.D0.BF.D0.BE.D0.BB.D1.8C.D0.B7.D0.BE.D0.B2.D0.B0.D1.82.D0.B5.D0.BB.D1.8F"></span><span class="mw-headline" id="Интерфейс_пользователя">Интерфейс пользователя</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=34" class="mw-editsection-visualeditor" title="Редактировать раздел «Интерфейс пользователя»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=34" title="Редактировать раздел «Интерфейс пользователя»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Стандартная библиотека Go поддерживает создание <a href="/wiki/%D0%9A%D0%BE%D0%BD%D1%81%D0%BE%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5" class="mw-redirect" title="Консольное приложение">консольных приложений</a> и серверных приложений с <a href="/wiki/%D0%92%D0%B5%D0%B1-%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%84%D0%B5%D0%B9%D1%81" title="Веб-интерфейс">веб-интерфейсом</a>, но нет стандартных средств для создания <a href="/wiki/GUI" class="mw-redirect" title="GUI">GUI</a> в клиентских приложениях. Этот пробел компенсируется созданными сторонними разработчиками врапперами к популярным UI-<a href="/wiki/%D0%A4%D1%80%D0%B5%D0%B9%D0%BC%D0%B2%D0%BE%D1%80%D0%BA" title="Фреймворк">фреймворкам</a>, таким как <a href="/wiki/GTK%2B" class="mw-redirect" title="GTK+">GTK+</a> и <a href="/wiki/Qt" title="Qt">Qt</a>, под Windows можно использовать графические средства <a href="/wiki/WinAPI" class="mw-redirect" title="WinAPI">WinAPI</a>, обращаясь к ним посредством пакета <code>syscall</code>, но все эти способы довольно громоздки. Имеется также несколько разработок UI-фреймворков на самом Go, но ни один из этих проектов не достиг уровня промышленной применимости. В 2015 году на конференции GopherCon в <a href="/wiki/%D0%94%D0%B5%D0%BD%D0%B2%D0%B5%D1%80" title="Денвер">Денвере</a> один из создателей языка, Роберт Грисмер, отвечая на вопросы, согласился, что Go нуждается в пакете UI, но заметил, что такой пакет должен быть универсальным, мощным и мультиплатформенным, что делает его разработку длительным и непростым процессом. Вопрос о реализации клиентского GUI на Go до сих пор остаётся открытым.
</p>
<h2><span id=".D0.9A.D1.80.D0.B8.D1.82.D0.B8.D0.BA.D0.B0"></span><span class="mw-headline" id="Критика">Критика</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=35" class="mw-editsection-visualeditor" title="Редактировать раздел «Критика»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=35" title="Редактировать раздел «Критика»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p><span id=".D0.9A.D1.80.D0.B8.D1.82.D0.B8.D0.BA.D0.B0"><span id="Критика"></span></span>
В силу молодости языка его критика сосредоточена, главным образом, в Интернет-статьях, обзорах и на форумах.
</p>
<h3><span id=".D0.9E.D1.82.D1.81.D1.83.D1.82.D1.81.D1.82.D0.B2.D0.B8.D0.B5_.D0.B2.D0.BE.D0.B7.D0.BC.D0.BE.D0.B6.D0.BD.D0.BE.D1.81.D1.82.D0.B5.D0.B9"></span><span class="mw-headline" id="Отсутствие_возможностей">Отсутствие возможностей</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=36" class="mw-editsection-visualeditor" title="Редактировать раздел «Отсутствие возможностей»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=36" title="Редактировать раздел «Отсутствие возможностей»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Значительная часть критики языка фокусируется на отсутствии в нём тех или иных популярных средств, предоставляемых другими языками. В их числе<sup id="cite_ref-yager_14-0" class="reference"><a href="#cite_note-yager-14">&#91;13&#93;</a></sup><sup id="cite_ref-15" class="reference"><a href="#cite_note-15">&#91;14&#93;</a></sup><sup id="cite_ref-dobronszki_16-0" class="reference"><a href="#cite_note-dobronszki-16">&#91;15&#93;</a></sup><sup id="cite_ref-17" class="reference"><a href="#cite_note-17">&#91;16&#93;</a></sup>:
</p>
<ul><li><a href="/wiki/%D0%9E%D0%B1%D0%BE%D0%B1%D1%89%D1%91%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Обобщённое программирование">средства обобщённого программирования (generics)</a>;</li>
<li><a href="/wiki/%D0%9D%D0%B0%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" title="Наследование (программирование)">наследование реализации</a>;</li>
<li><a href="/wiki/%D0%90%D0%BB%D0%B3%D0%B5%D0%B1%D1%80%D0%B0%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5_%D1%82%D0%B8%D0%BF%D1%8B_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85" class="mw-redirect" title="Алгебраические типы данных">алгебраические типы данных</a>;</li>
<li><a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0_%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D0%B4%D1%83%D1%80_%D0%B8_%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B9" title="Перегрузка процедур и функций">перегрузка функций</a>;</li>
<li><a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B5%D0%BE%D0%BF%D1%80%D0%B5%D0%B4%D0%B5%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%BE%D0%B2" class="mw-redirect" title="Переопределение операторов">переопределение операторов</a>;</li>
<li>ряд частных возможностей, характерных для языков типа Ruby или Python.</li></ul>
<p>Как уже говорилось выше,<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r104609042"/><span class="ts-Переход noprint" title="#Основные возможности языка"><sup><a href="#Основные_возможности_языка">[⇨]</a></sup></span> отсутствие целого ряда средств, доступных в других популярных языках, объясняется сознательным выбором разработчиков, считающих, что такие средства либо затрудняют эффективную компиляцию, либо провоцируют программиста на ошибки или на создание неэффективного или «плохого» с точки зрения сопровождения кода, либо имеют другие нежелательные побочные эффекты.
</p>
<h3><span id=".D0.90.D1.80.D1.85.D0.B8.D1.82.D0.B5.D0.BA.D1.82.D1.83.D1.80.D0.B0"></span><span class="mw-headline" id="Архитектура">Архитектура</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=37" class="mw-editsection-visualeditor" title="Редактировать раздел «Архитектура»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=37" title="Редактировать раздел «Архитектура»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<ul><li><b>Замена перечислимых типов группами констант.</b> Все константы-значения фактически являются однотипными, их группы синтаксически не объединены, и компилятор не может контролировать их использование. Невозможно описать тип, связанный с перечислением, например, массив, содержащий по одному элементу на каждый элемент перечисления (который в Паскале описывается конструкцией вида <code>type EnumArray = array[EnumType] of ElementType</code>), создать цикл по перечислению, компилятор не может контролировать полноту списка альтернатив в конструкции <code>switch</code>, когда в качестве селектора используется значение перечисления.</li>
<li><b>Недостаточность встроенных контейнерных типов данных.</b> <br />Встроенные в язык контейнеры ограничиваются массивами и отображениями, а контейнеры, реализуемые средствами самого языка (в том числе входящие в стандартную библиотеку), <a href="/wiki/%D0%A2%D0%B8%D0%BF%D0%BE%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Типобезопасность">нетипобезопасны</a> из-за вынужденного использования в них элементов типа <code>interface{}</code>. К тому же их невозможно обходить с помощью конструкции <code>for range</code>.</li>
<li><b>Отсутствие явного указания на реализацию интерфейса типом</b> затрудняет понимание кода, его модификацию и <a href="/wiki/%D0%A0%D0%B5%D1%84%D0%B0%D0%BA%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3" title="Рефакторинг">рефакторинг</a>: при изменении интерфейса легко пропустить часть типов, реализующих его, и если в коде нет явного преобразования типа в интерфейс, компилятор не обнаружит такой пропуск. Также возможна (хотя и маловероятна) «случайная реализация» интерфейса, когда методы типа совпадают по сигнатурам с методами интерфейса, но по смыслу не являются реализацией представляемого интерфейсом поведения.</li>
<li><b>Отказ от <a href="/wiki/%D0%98%D1%81%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B5_(%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)" class="mw-redirect" title="Исключение (программирование)">структурной обработки исключений</a></b> в пользу возврата ошибок делает невозможным сосредоточение обработки ошибок в одном месте, проверки ошибок засоряют код и затрудняют его восприятие. К тому же механизм обработки состояния паники по сути ничем не отличается от обработчиков исключений в стиле <code>try-catch</code>. Более того, вопреки собственным рекомендациям авторы языка применяют генерацию и обработку паники для обработки логических ошибок внутри стандартной библиотеки.</li>
<li><b>Тэги полей структур не контролируются компилятором.</b> <br />Тэги, задающие дополнительные свойства полей структур, являются просто строками, которые обрабатываются динамически, на их формат нет даже самых простых синтаксических ограничений. Это сделано, чтобы не ограничивать разработчика в использовании тэгов, но на практике приводит к тому, что никакая ошибка в записи тэга не может быть обнаружена на стадии компиляции.</li></ul>
<h3><span id=".C2.AB.D0.9F.D0.BE.D0.B4.D0.B2.D0.BE.D0.B4.D0.BD.D1.8B.D0.B5_.D0.BA.D0.B0.D0.BC.D0.BD.D0.B8.C2.BB_.28.D0.BD.D0.B5.D1.83.D0.B4.D0.B0.D1.87.D0.BD.D0.B0.D1.8F_.D1.80.D0.B5.D0.B0.D0.BB.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D1.8F_.D0.BD.D0.B5.D0.BA.D0.BE.D1.82.D0.BE.D1.80.D1.8B.D1.85_.D1.81.D1.80.D0.B5.D0.B4.D1.81.D1.82.D0.B2.29"></span><span class="mw-headline" id="«Подводные_камни»_(неудачная_реализация_некоторых_средств)">«Подводные камни» (неудачная реализация некоторых средств)</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=38" class="mw-editsection-visualeditor" title="Редактировать раздел ««Подводные камни» (неудачная реализация некоторых средств)»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=38" title="Редактировать раздел ««Подводные камни» (неудачная реализация некоторых средств)»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Критики отмечают, что некоторые особенности Go выполнены с точки зрения наиболее простой или наиболее эффективной реализации, но не отвечают «<a href="/wiki/%D0%9F%D1%80%D0%B8%D0%BD%D1%86%D0%B8%D0%BF_%D0%BD%D0%B0%D0%B8%D0%BC%D0%B5%D0%BD%D1%8C%D1%88%D0%B5%D0%B3%D0%BE_%D1%83%D0%B4%D0%B8%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F" class="mw-redirect" title="Принцип наименьшего удивления">принципу наименьшего удивления</a>»: их поведение отличается от того, что программист ожидает, основываясь на интуиции и прошлом опыте. Такие особенности требуют повышенного внимания программиста, затрудняют обучение и переход с других языков.
</p>
<ul><li><b>В цикле по коллекции переменная-значение является копией, а не ссылкой.</b><br />В цикле вида «<code>for index, value&#160;:= range collection</code>» переменная <code>value</code> является копией текущего элемента. Операция присваивания этой переменной нового значения доступна, но, вопреки ожиданиям, не приводит к изменению текущего элемента коллекции.</li>
<li><b>Нулевой интерфейс не равен интерфейсу нулевого объекта.</b><br />Значение типа «интерфейс» представляет собой структуру из двух ссылок&#160;— на таблицу методов и на сам объект. У нулевого интерфейса оба поля равны <code>nil</code>. У интерфейса, указывающего на нулевой объект, первая ссылка заполнена; он не равен нулевому интерфейсу, хотя с точки зрения логики программы между ними обычно нет разницы. Это приводит к неожиданным эффектам и усложняет проверку корректности значений интерфейсных типов:</li></ul>
<dl><dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">type</span> <span class="nx">I</span> <span class="kd">interface</span> <span class="p">{</span>
  <span class="nx">f</span><span class="p">()</span>
<span class="p">}</span>

<span class="kd">type</span> <span class="nx">T</span> <span class="kd">struct</span> <span class="p">{}</span> 
<span class="kd">func</span> <span class="p">(</span><span class="nx">T</span><span class="p">)</span> <span class="nx">f</span><span class="p">()</span> <span class="p">{</span><span class="o">...</span><span class="p">}</span> <span class="c1">//  Тип T реализует интерфейс I.</span>

<span class="nx">main</span><span class="p">()</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">t</span> <span class="o">*</span><span class="nx">T</span> <span class="p">=</span> <span class="kc">nil</span>  <span class="c1">// t - нулевой указатель на тип T.</span>
  <span class="kd">var</span> <span class="nx">i</span> <span class="nx">I</span> <span class="p">=</span> <span class="nx">t</span>     <span class="c1">// Записываем пустой указатель на T в интерфейсную переменную.</span>
  <span class="k">if</span> <span class="nx">i</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="p">{</span>   <span class="c1">//&#160;! Неожиданность. Хотя i был присвоен пустой указатель, i&#160;!= nil</span>
    <span class="nx">i</span><span class="p">.</span><span class="nx">f</span><span class="p">()</span>         <span class="c1">// Этот вызов произойдёт и приведёт к панике.</span>
  <span class="p">}</span> 
<span class="o">...</span>
<span class="p">}</span>
</pre></div></dd>
<dd>Хотя в переменную <code>i</code> был записан нулевой указатель на объект, значение самой <code>i</code> не является пустым и сравнение <code>i&#160;!= nil</code> даёт положительный результат. Чтобы убедиться, что интерфейсная переменная указывает на действительный объект, необходимо воспользоваться рефлексией, что заметно усложняет код:</dd>
<dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="k">if</span> <span class="nx">i</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="o">&amp;&amp;</span> <span class="p">!</span><span class="nx">reflect</span><span class="p">.</span><span class="nx">ValueOf</span><span class="p">(</span><span class="nx">i</span><span class="p">).</span><span class="nx">IsNil</span><span class="p">()</span> <span class="p">{</span> <span class="o">...</span>
</pre></div></dd></dl>
<ul><li><b>Неоднородная семантика присваивания даже на близких типах.</b><br />Встроенные типы и структуры присваиваются по значению, интерфейсы&#160;— по ссылке. Массивы с объявленной статически длиной присваиваются по значению, массивы без объявленной длины и отображения&#160;— по ссылке. Фактически вариант семантики присваивания для типа определяется тем, как размещаются в памяти значения этого типа, то есть язык определяется реализацией.</li></ul>
<ul><li><b>Различное поведение операций над массивами и срезами в разных условиях.</b><br />Например, стандартная функция <code>append()</code>, добавляющая элементы к массиву, может создать и вернуть новый массив, а может дописать и вернуть существующий, в зависимости от того, имеется ли в нём достаточно свободного места для добавления элементов. В первом случае последующие изменения результирующего массива не затронут оригинал, во втором&#160;— отразятся на нём. Такое поведение вынуждает к постоянному использованию функции копирования <code>copy()</code>.</li></ul>
<h3><span id=".D0.94.D1.80.D1.83.D0.B3.D0.B8.D0.B5_.D0.BE.D1.81.D0.BE.D0.B1.D0.B5.D0.BD.D0.BD.D0.BE.D1.81.D1.82.D0.B8"></span><span class="mw-headline" id="Другие_особенности">Другие особенности</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=39" class="mw-editsection-visualeditor" title="Редактировать раздел «Другие особенности»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=39" title="Редактировать раздел «Другие особенности»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Часто критике подвергается механизм автоматической расстановки точек с запятой, из-за которого некоторые формы записи операторов, вызовов функций и списков становятся некорректными. Комментируя это решение, авторы языка замечают,<sup id="cite_ref-langfaq_5-5" class="reference"><a href="#cite_note-langfaq-5">&#91;5&#93;</a></sup> что в совокупности с наличием в официальном наборе инструментов средства форматирования кода <code>gofmt</code> оно привело к фиксации довольно жёсткого стандарта оформления кода на Go. Вряд ли возможно создать стандарт записи кода, который бы устроил всех; внедрение в язык особенности, которая сама по себе задаёт такой стандарт, унифицирует внешний вид программ и устраняет непринципиальные конфликты из-за форматирования, что является положительным фактором для групповой разработки и сопровождения ПО.
</p>
<h2><span id=".D0.A0.D0.B0.D1.81.D0.BF.D1.80.D0.BE.D1.81.D1.82.D1.80.D0.B0.D0.BD.D0.B5.D0.BD.D0.B8.D0.B5_.D0.B8_.D0.BF.D0.B5.D1.80.D1.81.D0.BF.D0.B5.D0.BA.D1.82.D0.B8.D0.B2.D1.8B"></span><span class="mw-headline" id="Распространение_и_перспективы">Распространение и перспективы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=40" class="mw-editsection-visualeditor" title="Редактировать раздел «Распространение и перспективы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=40" title="Редактировать раздел «Распространение и перспективы»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Популярность Go в последние годы росла: с 2014 по 2018 год в рейтинге <a href="/wiki/%D0%98%D0%BD%D0%B4%D0%B5%D0%BA%D1%81_TIOBE" title="Индекс TIOBE">TIOBE</a> он поднялся с 65-го места на 18-е, текущее значение рейтинга составляет около 1&#160;%. По результатам опроса сайта dou.ua<sup id="cite_ref-18" class="reference"><a href="#cite_note-18">&#91;17&#93;</a></sup> язык Go в 2018 году стал девятым в списке самых используемых и шестым в списке языков, которым отдают личное предпочтение разработчики. 
</p><p>С 2012 года, когда вышел первый публичный релиз, использование языка неуклонно растёт. В опубликованном на сайте проекта Go списке компаний, использующих язык в промышленных разработках, насчитывается несколько десятков наименований. Накоплен большой массив библиотек различного назначения. На 2019 год запланирован выпуск версии 2.0<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r104609042"/><span class="ts-Переход noprint" title="#Go 2.0"><sup><a href="#Go_2.0">[⇨]</a></sup></span>: ожидается появление ряда новых возможностей, в том числе средств обобщённого программирования и специального синтаксиса для упрощения обработки ошибок, отсутствие которых является одними из наиболее распространённых претензий критиков языка<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r104609042"/><span class="ts-Переход noprint" title="#Критика"><sup><a href="#Критика">[⇨]</a></sup></span>.
</p><p>На Golang разработан веб-сервер <a href="/w/index.php?title=RoadRunner_(Application_server)&amp;action=edit&amp;redlink=1" class="new" title="RoadRunner (Application server) (страница отсутствует)">RoadRunner (Application server)</a>, который позволяет веб-приложениям достигать скорости request-response 10-20 мс вместо традиционных 200 мс. Данный веб-сервис планируется включить в состав популярных фреймворков таких как <a href="/wiki/Yii" title="Yii">Yii</a>.
</p><p>На ряду с <a href="/wiki/%D0%A1%2B%2B" class="mw-redirect" title="С++">С++</a> Golang применяется для разработки микросервисов, что позволяет "загрузить" работой много-процессорные платформы. Взаимодействовать с микросервисом можно с помощью <a href="/wiki/REST" title="REST">REST</a>, а язык <a href="/wiki/PHP" title="PHP">PHP</a> для этого отлично подходит.
</p><p>С помощью <a href="/wiki/PHP" title="PHP">PHP</a> и Golang разработан Spiral Framework.<sup id="cite_ref-19" class="reference"><a href="#cite_note-19">&#91;18&#93;</a></sup>
</p>
<h2><span id=".D0.92.D0.B5.D1.80.D1.81.D0.B8.D0.B8"></span><span class="mw-headline" id="Версии">Версии</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=41" class="mw-editsection-visualeditor" title="Редактировать раздел «Версии»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=41" title="Редактировать раздел «Версии»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<h3><span id=".D0.9D.D1.83.D0.BC.D0.B5.D1.80.D0.B0.D1.86.D0.B8.D1.8F_.D0.B8_.D0.BF.D1.80.D0.B8.D0.BD.D1.86.D0.B8.D0.BF.D1.8B_.D1.81.D0.BE.D0.B2.D0.BC.D0.B5.D1.81.D1.82.D0.B8.D0.BC.D0.BE.D1.81.D1.82.D0.B8_.D0.B2.D0.B5.D1.80.D1.81.D0.B8.D0.B9"></span><span class="mw-headline" id="Нумерация_и_принципы_совместимости_версий">Нумерация и принципы совместимости версий</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=42" class="mw-editsection-visualeditor" title="Редактировать раздел «Нумерация и принципы совместимости версий»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=42" title="Редактировать раздел «Нумерация и принципы совместимости версий»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>Cуществует только одна основная версия самого языка Go&#160;— версия 1. Версии среды разработки (компилятора, инструментария и стандартных библиотек) Go нумеруются по двухзначной («&lt;версия языка&gt;.&lt;основной релиз&gt;») либо трёхзначной («&lt;версия языка&gt;.&lt;основной релиз&gt;.&lt;дополнительный релиз&gt;») системе. Выпуск новой «двузначной» версии автоматически означает прекращение поддержки предыдущей «двузначной» версии. «Трёхзначные» версии выпускаются для исправления обнаруженных ошибок и проблем с безопасностью; исправления безопасности в таких версиях могут затрагивать две последние «двузначные» версии<sup id="cite_ref-releases_20-0" class="reference"><a href="#cite_note-releases-20">&#91;19&#93;</a></sup>.
</p><p>Авторы декларировали<sup id="cite_ref-compat_21-0" class="reference"><a href="#cite_note-compat-21">&#91;20&#93;</a></sup> стремление к сохранению, насколько это возможно, обратной совместимости в пределах основной версии языка. Это означает, что до выхода релиза Go 2 почти любая программа, созданная в среде Go 1, будет корректно компилироваться в любой последующей версии Go 1.x и выполняться без ошибок. Исключения возможны, но они немногочисленны. Однако бинарной совместимости между релизами не гарантируется, так что программа при переходе на более поздний релиз Go должна быть полностью перекомпилирована.
</p>
<h3><span class="mw-headline" id="Go_1">Go 1</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=43" class="mw-editsection-visualeditor" title="Редактировать раздел «Go 1»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=43" title="Редактировать раздел «Go 1»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p>С марта 2012 года, когда была представлена версия Go 1, вышли следующие основные версии:
</p>
<ul><li>go 1&#160;— 28 марта 2012 года&#160;— Первая официальная версия; зафиксированы библиотеки, внесены изменения в синтаксис.</li>
<li>go 1.1&#160;— 13 мая 2013 года&#160;— целочисленное деление на нуль стало синтаксической ошибкой, введены method values&#160;— замыкания метода с заданным значением-источником, в некоторых случаях стало необязательным использование return; в реализации разрешено выбирать между 32- и 64-разрядным представлением стандартного целочисленного типа, изменения в поддержке Unicode.</li>
<li>go 1.2&#160;— 1 декабря 2013 года&#160;— любая попытка обратиться по указателю nil гарантированно вызывает панику, введены трёхиндексные срезы. Доработки Unicode.</li>
<li>go 1.3&#160;— 18 июня 2014 года&#160;— изменена модель распределения памяти; удалена поддержка платформы Windows 2000, добавлены DragonFly BSD, FreeBSD, NetBSD, OpenBSD, Plan 9, Solaris.</li>
<li>go 1.4&#160;— 10 декабря 2014 года&#160;— разрешена конструкция цикла «<b>for range x { … }</b>» (цикл по коллекции без использования переменных), запрещено двойное автоматическое разыменование при вызове метода (если x **T&#160;— двойной указатель на тип T, то вызов метода для x в виде x.m()&#160;— запрещён); в реализацию добавлена поддержка платформ Android, NaCl on ARM, Plan9 on AMD64.</li>
<li>go 1.5&#160;— 19 августа 2015 года&#160;— в записи map-литералов указание типа каждого элемента сделано факультативным, в реализации среда исполнения и компилятор полностью переписаны на Go и ассемблере, более не используется язык Си.</li>
<li>go 1.6&#160;— 17 февраля 2016 года&#160;— изменений в языке нет, среда портирована на платформы Linux on 64-bit MIPS, Android on 32-bit x86 (android/386), изменения в инструментарии.</li>
<li>go 1.7&#160;— 16 августа 2016 года&#160;— уменьшены время компиляции и размер бинарных файлов, увеличена скорость работы и в стандартную библиотеку добавлен пакет context.</li>
<li>go 1.8&#160;— 7 апреля 2017 года&#160;— ускорена работа встроенного сборщика мусора памяти, модуль «http» получил возможность мягкой остановки, добавлена поддержка процессоров с архитектурой MIPS (32-бит). Внесены исправления в ряд пакетов и утилиты.</li>
<li>go 1.9&#160;— 24 августа 2017 года&#160;— добавлены в язык псевдонимы имён типов, уточнены некоторые моменты использования операций с плавающей точкой, оптимизирован инструментарий, дополнение библиотек, в частности&#160;— потоково-безопасный тип map.</li>
<li>go 1.10&#160;— 16 февраля 2018 года&#160;— в язык внесено два уточнения, фактически узаконивших уже существующие реализации, остальные изменения касаются библиотек и инструментария. Выпущено три «трёхзначных» релиза 1.10.1&#160;— 1.10.3, содержащие исправления обнаруженных ошибок.</li>
<li>go 1.11&#160;— 24 августа 2018 года&#160;— добавлены (в качестве экспериментальных) поддержка модулей (нового механизма версионирования пакетов и управления зависимостями), а также возможность компиляции в <a href="/wiki/WebAssembly" title="WebAssembly">WebAssembly</a>, улучшена поддержка ARM-процессоров, внесены изменения в инструментарий и библиотеки (в частности, добавлен пакет syscall/js; компилятор теперь правильно контролирует использование переменных, объявленных в конструкциях switch с проверкой типа).</li>
<li>go 1.12&#160;— 25 февраля 2019 года&#160;— исправления в библиотеках и утилитах. Объявлено, что это последний релиз, в котором сохраняется поддержка FreeBSD 10.Х и macOS 10.10. Добавлена поддержка cgo на платформе linux/ppc64. Добавлена поддержка ОС <a href="/wiki/AIX" title="AIX">AIX</a>. До августа 2019 в рамках этого релиза вышло девять патч-релизов, исправляющих различные ошибки.</li>
<li>go 1.13&#160;— 3 сентября 2019 года&#160;— добавлены в язык новые числовые литералы: двоичные и восьмеричные целые, шестнадцатеричные с плавающей точкой (последние обязательно должны содержать экспоненту, отделяемую символом p или P); разрешено использование подчёркивания для разделения разрядов в числах; разрешена операция побитового сдвига для целых чисел со знаком; добавлена поддержка Android 10; по ряду платформ прекращена поддержка старых версий.</li>
<li>go 1.14&#160;— 25 февраля 2020 года&#160;— расширено определение включения интерфейсов: теперь разрешено включать несколько интерфейсов, имеющих одноимённые методы с идентичными сигнатурами. Изменения в библиотеках, среде исполнения, инструментарии.</li></ul>
<h3><span class="mw-headline" id="Go_2.0">Go 2.0</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=44" class="mw-editsection-visualeditor" title="Редактировать раздел «Go 2.0»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=44" title="Редактировать раздел «Go 2.0»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
<p><span id="Go_2.0"><span id="Go_2.0"></span></span>
</p>
<table class="plainlinks metadata ambox ambox-notice" role="presentation"><tbody><tr><td class="mbox-image"><div style="width:52px"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Stock_alarm.svg" class="image"><img alt="Stock alarm.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/03/Stock_alarm.svg/40px-Stock_alarm.svg.png" decoding="async" width="40" height="40" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/03/Stock_alarm.svg/60px-Stock_alarm.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/03/Stock_alarm.svg/80px-Stock_alarm.svg.png 2x" data-file-width="40" data-file-height="40" /></a></div></td><td class="mbox-text"><div class="mbox-text-div"><b>Эта статья или часть статьи содержит информацию об ожидаемых событиях.</b></div><div class="mbox-textsmall-div hide-when-compact" style="font-size:85%">Здесь описываются события, которые ещё не произошли. Ожидаемая дата: 2020 год</div></td></tr></tbody></table>
<dl><dt>Ход разработки</dt>
<dd>С 2017 года ведётся активная подготовка к выпуску следующей базовой версии языка, имеющей условное обозначение «Go 2.0»<sup id="cite_ref-togo2_22-0" class="reference"><a href="#cite_note-togo2-22">&#91;21&#93;</a></sup>. Проводится сбор замечаний к текущей версии и предложений по преобразованиям, аккумулируемых на wiki-сайте проекта<sup id="cite_ref-23" class="reference"><a href="#cite_note-23">&#91;22&#93;</a></sup>.</dd>
<dd>Точных сроков выхода новой версии не называется, было лишь сказано, что процесс подготовки займёт «около двух лет», причём часть новых элементов языка будет включена уже в очередные релизы версии Go 1 (разумеется, только те, которые не нарушают обратной совместимости).<sup id="cite_ref-togo2_22-1" class="reference"><a href="#cite_note-togo2-22">&#91;21&#93;</a></sup> На март 2020 года версия 2.0 ещё не была готова, часть планируемых изменений находится в стадии проектирования.</dd></dl>
<dl><dt>Предполагаемые новшества</dt>
<dd>В числе возможных принципиальных новшеств назывались явно объявляемые константные значения, новый механизм обработки ошибок и средства обобщённого программирования. В сети доступны проекты нововведений. 28 августа 2018 года <a rel="nofollow" class="external text" href="https://blog.golang.org/go2draft">в официальном блоге разработчиков</a> был опубликован ролик, ранее представленный на конференции Gophercon 2018, в котором демонстрируются черновые варианты нового дизайна обработки ошибок и механизма обобщённых функций.</dd>
<dd>Также предполагается множество менее заметных, но весьма существенных изменений. Так, в ближайших планах<sup id="cite_ref-24" class="reference"><a href="#cite_note-24">&#91;23&#93;</a></sup> расширение правил допустимости символов для идентификаторов на не-латинских алфавитах, разрешение операций сдвига для целых чисел со знаком, использование знака подчёркивания в качестве разделителя групп разрядов в числах, двоичные литералы.</dd></dl>
<dl><dt>Обработка ошибок</dt>
<dd>Было рассмотрено несколько вариантов модификации механизма обработки ошибок, в частности, рассматривался дизайн с отдельным обработчиком ошибок («<a rel="nofollow" class="external text" href="https://go.googlesource.com/proposal/+/master/design/go2draft-error-handling.md">Error Handling&#160;— Draft Design</a>»). Последний на июль 2019 вариант, который предполагается к реализации в <a rel="nofollow" class="external text" href="https://blog.golang.org/go2-next-steps">версии Go 1.14</a>, описан в статье «<a rel="nofollow" class="external text" href="https://go.googlesource.com/proposal/+/master/design/32437-try-builtin.md">Proposal: A built-in Go error check function, try</a>». Данный вариант является наиболее минималистичным и предполагает добавление лишь одной встроенной функции <code>try()</code>, обрабатывающей результат вызова функции. Её использование иллюстрируется <a href="/wiki/%D0%9F%D1%81%D0%B5%D0%B2%D0%B4%D0%BE%D0%BA%D0%BE%D0%B4_(%D1%8F%D0%B7%D1%8B%D0%BA_%D0%BE%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D1%8F_%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC%D0%BE%D0%B2)" title="Псевдокод (язык описания алгоритмов)">псевдокодом</a> ниже.</dd>
<dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kd">func</span> <span class="nx">g</span><span class="p">(</span><span class="err">…</span><span class="p">)(</span><span class="err">…</span><span class="p">,</span> <span class="nx">err</span> <span class="kt">error</span><span class="p">)</span> <span class="p">{</span> <span class="c1">// Текущая функция должна возвращать последний результат типа error.</span>
  <span class="err">…</span>
  <span class="c1">// Синтаксис вызова функции с проверкой ошибки:</span>
  <span class="nx">x1</span><span class="p">,</span> <span class="nx">x2</span><span class="p">,</span><span class="err">…</span> <span class="nx">xn</span> <span class="p">=</span> <span class="nx">try</span><span class="p">(</span><span class="nx">f</span><span class="p">(</span><span class="err">…</span><span class="p">))</span> <span class="c1">// Здесь f(…) - вызов проверяемой функции, который возвращает (n+1) значение,</span>
                          <span class="c1">// причём последнее имеет тип error и содержит объект-ошибку либо nil.</span>

  <span class="c1">// Вызов выше аналогичен следующему:</span>
  <span class="nx">t1</span><span class="p">,</span> <span class="nx">t2</span><span class="p">,</span><span class="err">…</span> <span class="nx">tn</span><span class="p">,</span> <span class="nx">te</span> <span class="o">:=</span> <span class="nx">f</span><span class="p">(</span><span class="err">…</span><span class="p">)</span> <span class="c1">// Функция f() с параметрами вызывается и возвращает (n+1) результатов, </span>
                          <span class="c1">// которые записываются во временные переменные t1…tn и te.</span>
  <span class="k">if</span> <span class="nx">te</span> <span class="o">!=</span> <span class="kc">nil</span> <span class="p">{</span> <span class="c1">// Функция f() вернула ошибку, эта ошибка возвращается из текущей функции.</span>
    <span class="nx">err</span> <span class="p">=</span> <span class="nx">te</span>     <span class="c1">// Ошибка записывается в последний результат текущей функции.</span>
    <span class="k">return</span>       <span class="c1">// После ошибки в проверяемой функции текущая функция немедленно завершается.</span>
  <span class="p">}</span>
  <span class="nx">x1</span><span class="p">,</span> <span class="nx">x2</span><span class="p">,</span><span class="err">…</span> <span class="nx">xn</span> <span class="p">=</span> <span class="nx">t1</span><span class="p">,</span> <span class="nx">t2</span><span class="p">,</span><span class="err">…</span> <span class="nx">tn</span> <span class="c1">// Если ошибки не было, то переменные x1…xn получают возвращённые функцией f() значения</span>
  <span class="c1">// и исполнение текущей функции продолжается.</span>
  <span class="err">…</span>
<span class="p">}</span>
</pre></div></dd></dl>
<dl><dd>То есть <code>try()</code> просто обеспечивает проверку ошибки в вызове проверяемой функции и немедленный возврат из текущей функции с той же самой ошибкой. Для обработки ошибки перед возвратом из текущей функции можно использовать механизм <code>defer</code>. Использование <code>try()</code> требует, чтобы и проверяемая функция, и та функция, в которой происходит её вызов, обязательно имели последнее возвращаемое значение типа <code>error</code>. Поэтому, например, в <code>main()</code> использовать <code>try()</code> нельзя; на верхнем уровне все ошибки должны быть обработаны явно.</dd></dl>
<dl><dt>Обобщённые функции</dt>
<dd>Механизм обобщённых функций основывается на двух элементах: «тип-параметр» и «контракт»<sup id="cite_ref-gen_draft_25-0" class="reference"><a href="#cite_note-gen_draft-25">&#91;24&#93;</a></sup>.</dd>
<dd><div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="nx">contract</span> <span class="nx">Equal</span><span class="p">(</span><span class="nx">t</span> <span class="nx">T</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">t</span> <span class="o">==</span> <span class="nx">t</span>
<span class="p">}</span>

<span class="kd">func</span> <span class="nx">Uniq</span><span class="p">(</span><span class="kd">type</span> <span class="nx">T</span> <span class="nx">Equal</span><span class="p">)(</span><span class="nx">in</span> <span class="o">&lt;-</span><span class="kd">chan</span> <span class="nx">T</span><span class="p">)</span> <span class="o">&lt;-</span><span class="kd">chan</span> <span class="nx">T</span> <span class="p">{</span>
    <span class="nx">out</span> <span class="o">:=</span> <span class="nb">make</span><span class="p">(</span><span class="kd">chan</span> <span class="nx">T</span><span class="p">)</span>
    <span class="k">go</span> <span class="kd">func</span><span class="p">()</span> <span class="p">{</span>
        <span class="nx">v</span> <span class="o">:=</span> <span class="o">&lt;-</span><span class="nx">in</span>
        <span class="nx">out</span> <span class="o">&lt;-</span> <span class="nx">v</span>
        <span class="k">for</span> <span class="nx">next</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">in</span> <span class="p">{</span>
            <span class="k">if</span> <span class="nx">v</span> <span class="o">!=</span> <span class="nx">next</span> <span class="p">{</span>
                <span class="nx">v</span> <span class="p">=</span> <span class="nx">next</span>
                <span class="nx">out</span> <span class="o">&lt;-</span> <span class="nx">v</span>
            <span class="p">}</span>
        <span class="p">}</span>
    <span class="p">}()</span>
<span class="p">}</span>

<span class="o">...</span>
<span class="nx">src</span> <span class="o">:=</span> <span class="nb">make</span><span class="p">(</span><span class="kd">chan</span> <span class="kt">string</span><span class="p">)</span>
<span class="o">...</span>
<span class="c1">// Вызов обобщённой функции для конкретного типа string</span>
<span class="k">for</span> <span class="nx">s</span> <span class="o">:=</span> <span class="k">range</span> <span class="nx">Uniq</span><span class="p">(</span><span class="kt">string</span><span class="p">)(</span><span class="nx">src</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">s</span><span class="p">)</span>
<span class="p">}</span>
</pre></div></dd></dl>
<dl><dd>Тип параметра обобщённой функции (здесь это <code>T</code>) описывается в её заголовке с ключевым словом <code>type</code> и указанием ранее описанного контракта (здесь&#160;— <code>Equal</code>). Описание контракта содержит код, который обрабатывается компилятором как обычная функция, но без генерации кода. Если некоторый тип будет использован для конкретизации функции Uniq, то для этого типа компилятор обработает описание контракта Equal, и компиляция программы будет успешна только в случае, если эта обработка не приведёт к обнаружению ошибки. В данном случае проверка будет успешной, если к значениям типа может применяться операция проверки на равенство. Используя контракты, разработчики рассчитывают избежать ситуации, когда в конкретизации обобщённого кода используются типы, не обладающие необходимыми качествами, что может приводить к ошибкам, проявляющимся лишь на этапе исполнения.<sup id="cite_ref-gen_draft_25-1" class="reference"><a href="#cite_note-gen_draft-25">&#91;24&#93;</a></sup></dd></dl>
<h2><span id=".D0.A0.D0.B5.D0.B0.D0.BB.D0.B8.D0.B7.D0.B0.D1.86.D0.B8.D0.B8"></span><span class="mw-headline" id="Реализации">Реализации</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=45" class="mw-editsection-visualeditor" title="Редактировать раздел «Реализации»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=45" title="Редактировать раздел «Реализации»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>На данный момент существуют два основных компилятора Go:
</p>
<ul><li><b>gc</b>&#160;— общее название для официального набора инструментов разработки, поддерживаемого группой разработчиков языка. Первоначально он включал компиляторы 6g (для amd64), 8g (для x86), 5g (для ARM) и сопутствующие инструменты и был написан на Си с применением <a href="/wiki/Yacc" title="Yacc">yacc</a>/<a href="/wiki/GNU_bison" class="mw-redirect" title="GNU bison">Bison</a> для парсера. В версии 1.5 весь код на Си был переписан на Go и ассемблере, а отдельные компиляторы&#160;— заменены на единый <b>go tool compile</b>.</li></ul>
<dl><dd>Поддерживается для <a href="/wiki/FreeBSD" title="FreeBSD">FreeBSD</a>, <a href="/wiki/OpenBSD" title="OpenBSD">OpenBSD</a>, <a href="/wiki/Linux" title="Linux">Linux</a>, <a href="/wiki/MacOS" title="MacOS">macOS</a>, <a href="/wiki/Windows" title="Windows">Windows</a>, <a href="/wiki/DragonFly_BSD" title="DragonFly BSD">DragonFly BSD</a>, <a href="/wiki/Plan_9" title="Plan 9">Plan 9</a>, <a href="/wiki/Solaris" title="Solaris">Solaris</a>, <a href="/wiki/Android" title="Android">Android</a>, <a href="/wiki/AIX" title="AIX">AIX</a>: для актуальных версий <a href="/wiki/FreeBSD" title="FreeBSD">FreeBSD</a>, <a href="/wiki/Linux" title="Linux">Linux</a>, <a href="/wiki/MacOS" title="MacOS">macOS</a>, <a href="/wiki/Windows" title="Windows">Windows</a> имеются бинарные дистрибутивы, для остальных платформ требуется компиляция из исходных текстов. Разработчики поддерживают ограниченный список версий платформ, в новых выпусках компилятора исключая из списка поддерживаемых версии, которые на момент выпуска считаются устаревшими. Так, gc 1.12 поддерживает Windows не старше версий 7 и Server 2008R.</dd></dl>
<ul><li><b>gccgo</b>&#160;— компилятор Go с клиентской частью, написанной на C++, и рекурсивным парсером, совмещённым со стандартным бэк-эндом <a href="/wiki/GCC" class="mw-redirect" title="GCC">GCC</a><sup id="cite_ref-26" class="reference"><a href="#cite_note-26">&#91;25&#93;</a></sup>. Поддержка Go доступна в GCC, начиная с версии 4.6<sup id="cite_ref-27" class="reference"><a href="#cite_note-27">&#91;26&#93;</a></sup>. Большинство расхождений с компилятором gc связаны с библиотекой времени выполнения и не видны для программ на Go.<sup id="cite_ref-gccgolang_28-0" class="reference"><a href="#cite_note-gccgolang-28">&#91;27&#93;</a></sup> В релизе gcc 8.1 поддерживаются все изменения в языке до версии 1.10.1 и интегрирован параллельно исполняющийся сборщик мусора.<sup id="cite_ref-gccgo_29-0" class="reference"><a href="#cite_note-gccgo-29">&#91;28&#93;</a></sup> Потоки (go-процедуры) реализованы в gccgo через потоки ОС, вследствие чего программы, активно использующие параллельные вычисления, могут приводить к существенно бо́льшим накладным расходам. Поддержка легковесных потоков возможна при использовании компоновщика gold, но он доступен не для всех платформ.</li></ul>
<p>Также существуют проекты:
</p>
<ul><li><b>llgo</b>&#160;— прослойка для компиляции Go в <a href="/wiki/LLVM" title="LLVM">llvm</a>, написанная на самом go (находился в разработке до 2014 года)<sup id="cite_ref-30" class="reference"><a href="#cite_note-30">&#91;29&#93;</a></sup><sup id="cite_ref-31" class="reference"><a href="#cite_note-31">&#91;30&#93;</a></sup>.</li>
<li><b>gollvm</b>&#160;— проект компиляции Go через систему компиляторов <a href="/wiki/LLVM" title="LLVM">LLVM</a>, развиваемый Google. Использует C++ парсер «gofrontend» из GCCGO и преобразователь из представления gofrontend в LLVM IR<sup id="cite_ref-32" class="reference"><a href="#cite_note-32">&#91;31&#93;</a></sup><sup id="cite_ref-33" class="reference"><a href="#cite_note-33">&#91;32&#93;</a></sup></li>
<li><b>SSA interpreter</b>&#160;— интерпретатор, позволяющий запускать программы на go<sup id="cite_ref-34" class="reference"><a href="#cite_note-34">&#91;33&#93;</a></sup>.</li>
<li><b>TinyGo --</b> компилятор Go нацеленный на создание компактных исполняемых файлов для микроконтроллеров и WebAssembly с помощью <a href="/wiki/LLVM" title="LLVM">LLVM</a>.</li></ul>
<h2><span id=".D0.A1.D1.80.D0.B5.D0.B4.D1.81.D1.82.D0.B2.D0.B0_.D1.80.D0.B0.D0.B7.D1.80.D0.B0.D0.B1.D0.BE.D1.82.D0.BA.D0.B8"></span><span class="mw-headline" id="Средства_разработки">Средства разработки</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=46" class="mw-editsection-visualeditor" title="Редактировать раздел «Средства разработки»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=46" title="Редактировать раздел «Средства разработки»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Среда разработки Go содержит несколько инструментов командной строки: утилиту go, обеспечивающий компиляцию, тестирование и управление пакетами, и вспомогательные утилиты godoc и gofmt, предназначенные, соответственно, для документирования программ и для форматирования исходного кода по стандартным правилам. Для вывода полного списка инструментов необходимо вызвать утилиту go без указания аргументов.
Для отладки программ может использоваться отладчик gdb. Независимыми разработчиками представлено большое количество инструментов и библиотек, предназначенных для поддержки процесса разработки, главным образом, для облегчения анализа кода, тестирования и отладки.
</p><p>На текущий момент доступны две IDE, изначально ориентированные на язык Go&#160;— это проприетарная GoLand <a rel="nofollow" class="external autonumber" href="https://www.jetbrains.com/go/">[1]</a> (разрабатывается в <a href="/wiki/JetBrains" title="JetBrains">JetBrains</a> на платформе IntelliJ) и свободная LiteIDE<a rel="nofollow" class="external autonumber" href="https://sourceforge.net/projects/liteide/">[2]</a> (ранее проект назывался GoLangIDE). LiteIDE&#160;— небольшая по объёму оболочка, написанная на С++ с использованием <a href="/wiki/Qt" title="Qt">Qt</a>. Позволяет выполнять компиляцию, отладку, форматирование кода, запуск инструментов. Редактор поддерживает подсветку синтаксиса и автодополнение.
</p><p>Также Go поддерживается плагинами в универсальных IDE Eclipse, NetBeans, IntelliJ, Komodo, CodeBox IDE, Visual Studio, Zeus и других. Автоподсветка, автодополнение кода на Go и запуск утилит компиляции и обработки кода реализованы в виде плагинов к более чем двум десяткам распространённых текстовых редакторов под различные платформы, в том числе Emacs, Vim, Notepad++, jEdit.
</p>
<h2><span id=".D0.9F.D1.80.D0.B8.D0.BC.D0.B5.D1.80.D1.8B"></span><span class="mw-headline" id="Примеры">Примеры</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=Go&amp;veaction=edit&amp;section=47" class="mw-editsection-visualeditor" title="Редактировать раздел «Примеры»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=Go&amp;action=edit&amp;section=47" title="Редактировать раздел «Примеры»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
<p>Ниже представлен пример программы «Hello, World!» на языке Go.
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kn">package</span> <span class="nx">main</span>

<span class="kn">import</span> <span class="s">&quot;fmt&quot;</span>

<span class="kd">func</span> <span class="nx">main</span><span class="p">()</span> <span class="p">{</span>
	<span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="s">&quot;Hello, World!&quot;</span><span class="p">)</span>
<span class="p">}</span>
</pre></div>
<p>Пример реализации команды Unix <a href="/wiki/Echo" title="Echo">echo</a>:
</p>
<div class="mw-highlight mw-highlight-lang-go mw-content-ltr" dir="ltr"><pre><span></span><span class="kn">package</span> <span class="nx">main</span>

<span class="kn">import</span> <span class="p">(</span>
	<span class="s">&quot;os&quot;</span>
	<span class="s">&quot;flag&quot;</span> <span class="c1">// парсер параметров командной строки</span>
<span class="p">)</span>

<span class="kd">var</span> <span class="nx">omitNewLine</span> <span class="p">=</span> <span class="nx">flag</span><span class="p">.</span><span class="nx">Bool</span><span class="p">(</span><span class="s">&quot;n&quot;</span><span class="p">,</span> <span class="kc">false</span><span class="p">,</span> <span class="s">&quot;не печатать знак новой строки&quot;</span><span class="p">)</span>

<span class="kd">const</span> <span class="p">(</span>
	<span class="nx">Space</span> <span class="p">=</span> <span class="s">&quot; &quot;</span>
	<span class="nx">NewLine</span> <span class="p">=</span> <span class="s">&quot;\n&quot;</span>
<span class="p">)</span>

<span class="kd">func</span> <span class="nx">main</span><span class="p">()</span> <span class="p">{</span>
	<span class="nx">flag</span><span class="p">.</span><span class="nx">Parse</span><span class="p">()</span> <span class="c1">// Сканирование списка аргументов и установка флагов</span>
	<span class="kd">var</span> <span class="nx">s</span> <span class="kt">string</span>
	<span class="k">for</span> <span class="nx">i</span> <span class="o">:=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="p">&lt;</span> <span class="nx">flag</span><span class="p">.</span><span class="nx">NArg</span><span class="p">();</span> <span class="nx">i</span><span class="o">++</span> <span class="p">{</span>
		<span class="k">if</span> <span class="nx">i</span> <span class="p">&gt;</span> <span class="mi">0</span> <span class="p">{</span>
			<span class="nx">s</span> <span class="o">+=</span> <span class="nx">Space</span>
		<span class="p">}</span>
		<span class="nx">s</span> <span class="o">+=</span> <span class="nx">flag</span><span class="p">.</span><span class="nx">Arg</span><span class="p">(</span><span class="nx">i</span><span class="p">)</span>
	<span class="p">}</span>
	<span class="k">if</span> <span class="p">!</span><span class="o">*</span><span class="nx">omitNewLine</span> <span class="p">{</span>
		<span class="nx">s</span> <span class="o">+=</span> <span class="nx">NewLine</span>
	<span class="p">}</span>
	<span class="nx">os</span><span class="p">.</span><span class="nx">Stdout</span><span class="p">.</span><span class="nx">WriteString</span><span class="p">(</span><span class="nx">s</span><span class="p">)</span>
<span class="p">}</span>
</pre></div
              
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