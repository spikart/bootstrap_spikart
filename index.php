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
            <!--Верхнє меню-->
<div class="navbar-fixed-top" id="top_home">
    <nav id="top">
        <div class="container-fluid"><div class="nav pull-right" id="top-links">
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-home"></i>
                            Головна</a></li>
                    <li><a href="http://spikart.com.ua/shop/"><i class="fa fa-shopping-bag"></i>Магазин</a></li>
                    <li><a href="#"><i class="fa fa-info-circle"></i>Про нас</a></li>
                    <li><a href="#"><i class="fa fa-arrows-alt"></i>Напрямки діяльності</a></li>
                    <li><a href="#"><i class="fa fa-info-circle"></i>Контакти</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
            <!--Шапка-->
<header id="header-container">
    <div id="header-inner-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <div id="logo">
                        <img src="images/logo_center.png" alt="Спікарт" title="Spikart" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

            <!--Індикатори слайдів-->
<div id="carousel" class="carousel slide">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
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
            <div class="col-sm-3"></div>
        </row>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>