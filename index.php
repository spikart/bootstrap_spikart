<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
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
<div class="navbar navbar-fixed-top">
    <nav id="top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-square-o fa-stack-2x"></i>
                      <i class="fa fa-bars fa-stack-1x"></i>
                    </span>
                </button>
            </div>
            <div class="collapse navbar-collapse pull-right" id="responsive-menu">
                <ul class="nav navbar-nav">

                    <li><a href="#""><i class="fa fa-home"></i>Головна</a></li>
                    <li><a href="http://spikart.com.ua/shop/"><i class="fa fa-shopping-bag"></i>
                            Магазин</a>
                    </li>
                    <li><a href="#"><i class="fa fa-info-circle"></i>Про нас</a></li>
                    <li><a href="#"><i class="fa fa-arrows-alt"></i>
                            Напрямки діяльності</a></li>
                    <li>
                        <a href="#"><i class="fa fa-info-circle"></i>Контакти</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!--Верхнє меню_aerol
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

-->
<!--Шапка-->
<header id="header-container">
    <div id="header-inner-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-5 col-md-5 col-sm-5">
                    <div id="social"
                    ">
                    <div id="facebook"><a
                            href="https://www.facebook.com/pages/%D0%9F%D0%9F-%D0%A1%D0%BF%D1%96%D0%BA%D0%B0%D1%80%D1%82/274396342581927"
                            target="_blank"><i class="fa fa-facebook fa-2x"></i><b>Ми на Facebook</b></a></div>
                    <div id="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus fa-2x"></i><b>Ми в
                                Google+</b></a></div>
                    <div id="vk"><a href="#" target="_blank"><i class="fa fa-vk fa-2x"></i><b>Ми у Вконтакте</b></a>
                    </div>
                    <div id="skype"><a href="#" target="_blank"><i class="fa fa-skype fa-2x"></i><b>Ми у Skype</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="logo">
                    <img src="images/logo_center.png" alt="Спікарт" title="Spikart" class="img-responsive">
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div id="adress">
                    <div id="phone"><a href="#" target="_blank"><i class="fa fa-phone-square fa-4x"></i><b>+38(032)276-15-20</b></a>
                    </div>

                    <div id="e-mail"><a href="#" target="_blank"><i class="fa fa-envelope fa-4x"></i>
                            <be>sspikart@gmail.com</be>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    </div>

</header>
<!--Індикатори слайдів-->
<div id="carousel" class="carousel slide" data-interval="2500">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-sm-6 col-md-6 col-lg-6">
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
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
            </row>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    </body>
</html>