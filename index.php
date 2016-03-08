<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="/images/favicon_mini.png" type="image/png">
    <title>Spikart</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/jquery.jrumble.1.3.min.js"></script>



    <![endif]-->
</head>
<body>
<script>
    jQuery("document").ready(function($){

        var nav = $('.header-container');

        $(window).scroll(function () {
            if ($(this).scrollTop() > 41) {
                nav.addClass("f-nav");
            } else {
                nav.removeClass("f-nav");
            }
        });
    });
    </script>


<script>
    $(function() {
        $("fa").click(function() {
            animate("#footer", 'bounce');
            return false;
        });
    });

    function animate(element_ID, animation) {
        $(element_ID).addClass(animation);
        var wait = window.setTimeout( function(){
            $(element_ID).removeClass(animation)}, 1300
        );
    }
</script>


<!--Menu-->
<div class="navbar navbar-top">
    <nav id="top">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <ul class="social">
                        <li><a href="#" target="_blank"><img src="images/social/vk_logo_200.png" alt="Вконтаке" title="Вконтаке" class="img-responsive"></a></li>
                        <li><a href="#" target="_blank"><img src="images/social/google-plus_logo_200.png" alt="Google+" title="Google+" class="img-responsive"></a></li>
                        <li><a href="#" target="_blank"><img src="images/social/facebook_logo_200.png" alt="Facebook" title="Facebook" class="img-responsive"></a></li>
                    </ul>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
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

                            <li><a href="http://www.bs-spikart.com.ua/index.php""><i class="fa fa-home"></i>Головна</a></li>

                            <li><a href="#title-1"><i class="fa fa-arrows-alt"></i>
                                    Напрямки діяльності</a></li>
                            <li>
                                <a href="pages/contakty.php"><i class="fa fa-info-circle"></i>Контакти</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>




<!--Header-->
<div class="header-container">
    <div id="header-inner-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="index.php">
                        <img src="images/logo_center.png" alt="Спікарт" title="Spikart" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                                        <!-----Buttons----
                   <div class="button" id="b-button">
                        <button type="button" class="btn">Темно-синя</button>
                    </div>

                    <div class="button" id="bw-button">
                        <button type="button" class="btn">Світло-синя</button>
                    </div>

                    <div class="button" id="g-button">
                        <button type="button" class="btn">Зелена кнопка</button>
                    </div>

                    <div class="button" id="r-button">
                        <button type="button" class="btn">Червона кнопка</button>
                    </div>


                                               <-------->
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <ul class="skype-mail">
                                <li><a href="#" target="_blank"><img src="images/social/skype_logo_200.png" id="skype" alt="Skype" title="Skype" class="img-responsive"></a></li>
                                <li><a href="#" target="_blank"><img src="images/social/e-mail_logo_200.png" id="email" alt="E-mail" title="E-mail" class="img-responsive"></a></li>
                            </ul>
                        </div>
                        <script>
                            $(function(){

                                $('#skype').jrumble({
                                    x: 1,
                                    y: 1,
                                    rotation: 0
                                });
                                $('#skype').hover(function(){
                                    $(this).trigger('startRumble');
                                }, function(){
                                    $(this).trigger('stopRumble');
                                });
                            });
                        </script>

                        <div class="col-sm-4">
                            <div class="shop-button" id="cart">
                                <button type="button" class="btn btn-inverse btn-lg">
                                    <a href="http://spikart.com.ua/shop/" target="_blank">
                                        <i class="fa fa-shopping-bag"></i>
                                        <i>Каталог товарів</i>
                                    </a></button>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="phone-a">

                        <div class="col-sm-4">
                            <div id="ukrtelecom">
                                <li><a href="#" target="_blank"><img src="images/phone/ukrtelecom.png"
                                                                     alt="+38(032) 276 15 20" title="+38(032) 276 15 20"
                                                                     class="img-responsive"></a></li></div>
                            <div id="numb-phone">
                                <li><a>+38(032)&nbsp;276&nbsp;15&nbsp;20</a></li>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div id="kyivstar">

                                <li><a href="#" target="_blank"><img src="images/phone/kyivstar.png"
                                                                     alt="+38(096) 091 22 11" title="+38(096) 091 22 11"
                                                                     class="img-responsive"></a></li></div>
                                <div id="numb-phone">
                                <li><a>+38(096)&nbsp;091&nbsp;22&nbsp;11</a></li>

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div id="lifecell">

                                <li><a href="#" target="_blank"><img src="images/phone/lifecell.png"
                                                                     alt="+38(073) 073 22 11" title="+38(073) 073 22 11"
                                                                     class="img-responsive"></a></li></div>
                            <div id="numb-phone">
                            <li><a>+38(073)&nbsp;073&nbsp;22&nbsp;11</a></li>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="presentation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-sm-6 col-md-6 col-lg-6"></div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
        </div>
    </div>
</div>
<!--Directions-->
<div class="directions">
    <div class="container-fluid" id="title-1">
        <p>НАПРЯМКИ ДІЯЛЬНОСТІ</p>
    </div>
    <div class="container-fluid" id="special-1">
        <div class="row">
            <div class="col-md-4"><img src="images/1automatization.png" alt="АВТОМАТИЗАЦІЯ БІЗНЕСУ"
                                       title="АВТОМАТИЗАЦІЯ БІЗНЕСУ">
                <p>АВТОМАТИЗАЦІЯ БІЗНЕСУ</p></div>
            <div class="col-md-4"><img src="images/1hardware.png" alt="КОМП'ЮТЕРИ ТА ОРГТЕХНІКА"
                                       title="КОМП'ЮТЕРИ ТА ОРГТЕХНІКА">
                <p>КОМП'ЮТЕРИ ТА ОРГТЕХНІКА</p></div>
            <div class="col-md-4"><img src="images/1remontmacbook.png" alt="РЕМОНТ НОУТБУКІВ" title="РЕМОНТ НОУТБУКІВ">
                <p>РЕМОНТ НОУТБУКІВ</p></div>
        </div>
        <div class="row">
            <div class="col-md-4"><img src="images/1computersale.png" alt="РЕМОНТ КОМП'ЮТЕРІВ"
                                       title="РЕМОНТ КОМП'ЮТЕРІВ">
                <p>РЕМОНТ КОМП'ЮТЕРІВ</p></div>
            <div class="col-md-4"><img src="images/1hifinew1.png" alt="HiFi АУДІОСИСТЕМИ" title="HiFi АУДІОСИСТЕМИ">
                <p>HiFi АУДІОСИСТЕМИ</p></div>
            <div class="col-md-4"><img src="images/1toner.png" alt="ЗАПРАВКА КАТРИДЖІВ" title="ЗАПРАВКА КАТРИДЖІВ">
                <p>ЗАПРАВКА КАТРИДЖІВ</p></div>
        </div>
    </div>
</div>
<!--Slideshow-->
<!--slide indicators-->
<div class="carousel slide" id="carousel" data-interval="2500">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel" data-slide-to="0"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <!--Slides-->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/proba24.png" alt="">
                        <div class="carousel-caption">
                            <h3>Ремонт компютерів</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/proba21.png" alt="">
                        <div class="carousel-caption">
                            <h3>Обслуговування оргтехніки</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/proba22.png" alt="">
                        <div class="carousel-caption">
                            <h3>Ремонт мобільних телефонів</h3>
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
        </div>
    </div>
</div>
<div id="about-as">
    <img src="images/logo_center.png" alt="Спікарт" title="Spikart"">
</div>
<div id="title-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3" id="we-center"><i class="fa fa-paper-plane-o fa-4x"></i><br>МИ РЕАЛІЗОВУЄМО<br>
                <div id="we">
                    <br>комп'ютерну техніку
                    <br>портативну техніку
                    <br>мобільні пристрої
                    <br>побутову техніку оргтехніку
                </div>
            </div>
            <div class="col-md-4"><i class="fa fa-university fa-4x"></i><br>ПРО НАС
                <div id="we-top">
                    <br>Приватне підприємство "Спікарт"
                    <br>засноване 7 жовтня 2003 року.
                    <br>З часу заснування ми займаємося
                    <br>всіма спектрами товарів і послуг,
                    <br>які можна надавати в сфері інформатизації
                    <br>як підприємництва так і приватного сектору.
                    <br> Обирайте нашу компанію і
                    <br>впевненість у Вашій покупці та
                    <br>тривалий час безвідказної роботи
                    <br>Вашого вибору ми Вам гаратнуємо.
                </div>
            </div>
            <div class="col-md-3"><i class="fa fa-star fa-4x"></i><br>МИ ПРОПОНУЄМО ВАМ
                <br>
                <div id="we">
                    <h4>найякіснішу продукцію</h4>
                    <h4>готові рішення під ключ</h4>
                    <h4>компромісні рішення</h4>
                    <h4>модернізацію існуючого парку техніки</h4></div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<!--Футтер-->
<div id="footer">
    <div class="animated tada" id="logo-footer">
        <a href="pages/contakty.php" id="contakt-foofter" title="Контакти">
        <span class="fa-stack fa-lg" id="fa-stakc">
           <i class="fa fa-circle fa-stack-2x"></i>
           <i class="fa fa-compass fa-stack-1x fa-inverse"></i>
        </span></a>
    </div>
    <div id="adress-footer">

    <div id="adress-top">
        79005 м. Львів. Вул. Зелена 5д/5.
        <br>Тел./Факс +3(032)276-15-20
        <br>e-mail: <a href="#">store@spikart.com.ua</a>
        </div>
    </div>
</div>
<!--
<div class="container" id="top-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
-->
</body>
</html>