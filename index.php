<?php session_start(); ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Open Source Code</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="assets/images/logo.png">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body class="landing-page">   
    <div class="page-wrapper">
        <!-- ******Header****** -->
        
        <header>
            <div class="header-content">
                <div class="header-menu">
                    <ul class="header-menu__list">
                        <li><a href="index.php"><img src="assets/images/logo.png" alt="LOGO" width="36px"></a></li>
                        <?php if ( isset($_SESSION['logged_user'])) : ?> 
                        <li class="header-menu__list-text">
                        <div class="dropdown">
                        <a class="btn btn-secondary btn- dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo $_SESSION['logged_user']->name;?>
                          Амирджон Раджабов
                        </a>
                        <div class="dropdown-menu btn-username" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="cn/cabinet.php">Личный кабинет</a>
                            <a class="dropdown-item" href="logout.php">Выход</a>
                        </div>
                        </div>
                        </li> <br>
                        <?php else : ?>
                        <li class="header-menu__list-text"><a href="/signup.php">Регистрация</a></li>
                        <li class="header-menu__list-text"><a href="/login.php">Вход</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
                <div class="intro">
                    <h2 class="title">Пройдите опрос!</h2>
                    <p>Для определения подходяшего языка программирования для вашего изучения пройдите опрос и система покажет вам подходящый язык программирования для дальнейшего изучения</p>
                    <div class="cta-container">
                        <a class="btn btn-primary btn-cta" href="poll.php"><i class="fa fa-question-circle"></i> Пройти опрос</a>
                    </div><!--//cta-container-->
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <h2 class="title-br">Популярные языки программирования</h2>
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/c-plus-plus-logo.png" alt="C++">
                            </div><!--//icon-holder-->
                            <h3 class="title">C++</h3>
                            <p class="intro">C++ завоевал популярность среди разработчиков в мире и часто становится основой для изучения других языков</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-red item-2 col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/java3.png" alt="Java">
                            </div><!--//icon-holder-->
                            <h3 class="title">Java</h3>
                            <p class="intro">Этот язык общего назначения широко используется для разработки мобильных приложений и игр</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/python.png" alt="Python">
                            </div><!--//icon-holder-->
                            <h3 class="title">Python</h3>
                            <p class="intro">Это язык общего назначения, то есть используется для создания чего угодно</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/js.png" alt="JS">
                            </div><!--//icon-holder-->
                            <h3 class="title">JavaScript</h3>
                            <p class="intro">Это объектно-ориентированный язык, который отвечает за создание интерактивных, динамических веб-страниц</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/swift.png" alt="Swift">
                            </div><!--//icon-holder-->
                            <h3 class="title">Swift</h3>
                            <p class="intro">Для разработки продуктов, совместимые с Mac OS или iO, учите Swift </p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/php.png" alt="PHP">
                            </div><!--//icon-holder-->
                            <h3 class="title">PHP</h3>
                            <p class="intro">PHP – язык общего назначения, и преимущественно используется для программирования на стороне сервера</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-primary col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/csharpfinal.png" alt="C#">
                            </div><!--//icon-holder-->
                            <h3 class="title">C#</h3>
                            <p class="intro">Популярный язык программирования и подойдёт тем, кто хочет работать с Windows </p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-orange col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/kotlin.png" alt="Kotlin">
                            </div><!--//icon-holder-->
                            <h3 class="title">Kotlin</h3>
                            <p class="intro">Язык программирования для разработки под Android</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-purple col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <img class="icon-holder_img" src="/images/go.png" alt="Go">
                            </div><!--//icon-holder-->
                            <h3 class="title">Go</h3>
                            <p class="intro">Перспективный и возможно в будущем станет очень популярным, единственное, он достаточно сложный</p>
                            <a class="link" href="#"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//cards-->
                
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Амирджон Раджабов <i class="fa fa-heart"></i> 2020 <a href="#">OSCODE.RU</a> © Все права защищены</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>                                                                     
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

