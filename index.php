<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Spikart</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <nav id="top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Відкрити меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
          <!---<a class="navbar-brand" href="#">Logo</a>--->
            </div>
                <div class="collapse navbar-collapse pull-right" id="responsive-menu">
                    <ul class="nav navbar-nav">

                        <li><a href="#""><i class="fa fa-home"></i>Головна</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-bag"></i>
                                Магазин <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Гаджети</a> </li>
                                <li><a href="#">Дітям</a></li>
                                <li><a href="#">Комап'ютери</a></li>
                                <li><a href="#">Мережа</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-info-circle"></i>Про нас</a></li>
                        <li><a href="#"><i class="fa fa-arrows-alt"></i>
                                Напрямки діяльності</a></li>
                        <li>
                            <a title="Контакти" href="#">
                                <i class="fa fa-info-circle"></i>
                                <span class="hidden-xs hidden-sm hidden-md">Контакти</span>

                            </a></li>
                    </ul>
                </div>
        </div>
    </nav>
</div>

<div class="container-fluid " id="logo">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <img class="img-responsive" src="images/logo_center.png" alt="">
        </div>
        <div class="nav navbar-nav col-lg-8 col-md-8 col-sm-8 col-xs-8">
           <ul class="social-icons">
                <li><i href="#"><i class="fa fa-facebook"></i> </li>
                <li><i href="#"><i class="fa fa-google-plus"></i> </li>
                <li><i href="#"><i class="fa fa-vk"></i> </li>
                <li><i href="#"><i class="fa fa-skype"></i> </li>
           </ul>
        </div>
    </div>
</div>
           <!--Індикатори слайдів-->
<div id="carousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
       <!--Слайди-->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/proba21.jpg" alt="">
            <div class="carousel-caption">
                <h3>Перший слайд</h3>
                <p>Перегляд слайду!!!</p>
            </div>
        </div>
        <div class="item">
            <img src="images/proba23.jpg" alt="">
            <div class="carousel-caption">
                <h3>Другий слайд</h3>
                <p>Перегляд слайду!!!</p>
            </div>
        </div>
        <div class="item">
            <img src="images/proba24.jpg" alt="">
            <div class="carousel-caption">
                <h3>Третій слайд</h3>
                <p>Перегляд слайду!!!</p>
            </div>
        </div>
    </div>
       <!--Стрілки слайдів-->
    <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>