<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="/images/favicon_test-3.png" type="image/png">
    <title>Spikart</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
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


<!--Меню-->
<div class="navbar navbar-top">
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
                    <li><a href="http://spikart.com.ua/shop/" target="_blank"><i class="fa fa-shopping-bag"></i>
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
<!--Шапка-->
<div class="header-container">
    <div id="header-inner-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo animated flip">
                        <img src="images/logo_center.png" alt="Спікарт" title="Spikart" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-4" id="phone-adress">
                    <div id="phone"><a href="#" target="_blank"><i class="fa fa-phone-square fa-4x" id="left-square"></i>
                                <b>+38(032)276-15-20
                                <br>+38(096)091-22-11
                                <br>+38(073)073-22-11
                                </b></a>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <div id="chats">
                        <div id="skype"><a href="skype:spikart.com.ua?call" target="_blank"><img src="images/social/skype_logo_200.png" width="33"
                                                                                                 height="33" alt="Skype" title="Skype" class="img-responsive"></a></div>
                        <script>
                            $(function(){

                                $('#skype').jrumble({

                                    speed: 0
                                });
                                $('#skype').hover(function(){
                                    $(this).trigger('startRumble');
                                }, function(){
                                    $(this).trigger('stopRumble');
                                });
                            });
                        </script>
                        <div id="viber"><a href="#" target="_blank"><img src="images/social/viber_logo_200.png" width="33"
                                                                         height="33"alt="Viber" title="Viber" class="img-responsive"></a></div>
                        <script>
                            $(function(){

                                $('#viber').jrumble({
                                    x: 2,
                                    y: 2,
                                    rotation: 1
                                });
                                $('#viber').hover(function(){
                                    $(this).trigger('startRumble');
                                }, function(){
                                    $(this).trigger('stopRumble');
                                });
                            });
                        </script>
                        <div id="e-mail"><a href="#" target="_blank"><img src="images/social/gmail_logo_200.png" width="33"
                                                                          height="33"alt="E-mail" title="E-mail" class="img-responsive"></a></div>
                        <script>
                            $(function(){

                                $('#e-mail').jrumble({
                                    x: 0,
                                    y: 0,
                                    rotation: 15
                                });
                                $('#e-mail').hover(function(){
                                    $(this).trigger('startRumble');
                                }, function(){
                                    $(this).trigger('stopRumble');
                                });
                            });
                        </script>
                    </div></div>
                <div class="col-sm-2">

                    <div id="social">
                        <div id="facebook"><a href="https://www.facebook.com/pages/%D0%9F%D0%9F-%D0%A1%D0%BF%D1%96%D0%BA%D0%B0%D1%80%D1%82/274396342581927"
                                    target="_blank"><img src="images/social/facebook_logo_200.png" width="33"
                                                         height="33"alt="Facebook" title="Facebook" class="img-responsive"></a></div>
                        <script>
                            $(function(){

                                $('#facebook').jrumble({
                                    x: 2,
                                    y: 2,
                                    rotation: 1
                                });
                                $('#facebook').hover(function(){
                                    $(this).trigger('startRumble');
                                }, function(){
                                    $(this).trigger('stopRumble');
                                });
                            });
                        </script>
                        <div id="google-plus"><a href="#" target="_blank"><img src="images/social/google-plus_logo_200.png" width="33"
                                                                               height="33"alt="Google+" title="Google+" class="img-responsive"></a></div>
                        <script>
                            $(function(){

                                $('#google-plus').jrumble({
                                    x: 2,
                                    y: 2,
                                    rotation: 1
                                });
                                $('#google-plus').hover(function(){
                                    $(this).trigger('startRumble');
                                }, function(){
                                    $(this).trigger('stopRumble');
                                });
                            });
                        </script>
                        <div id="vk"><a href="#" target="_blank"><img src="images/social/vk_logo_200.png" width="33"
                                                                      height="33"alt="Вконтакте" title="Вконтакте" class="img-responsive"></a></div>
                        <script>
                            $(function(){

                                $('#vk').jrumble({
                                    x: 2,
                                    y: 2,
                                    rotation: 1
                                });
                                $('#vk').hover(function(){
                                    $(this).trigger('startRumble');
                                }, function(){
                                    $(this).trigger('stopRumble');
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Слайдшоу-->
<!--Індикатори слайдів-->
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
                <!--Слайди-->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/proba21.png" alt="">
                        <div class="carousel-caption">
                            <h3>Перший слайд</h3>
                            <p>Перегляд слайду!!!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/proba22.png" alt="">
                        <div class="carousel-caption">
                            <h3>Другий слайд</h3>
                            <p>Перегляд слайду!!!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/proba24.png" alt="">
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
        </div>
    </div>
</div>
<!--Тіло-->
<div>
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
        <a href="#" id="contakt-foofter" title="Контакти">
        <span class="fa-stack fa-lg" id="fa-stakc">
           <i class="fa fa-circle fa-stack-2x"></i>
           <i class="fa fa-compass fa-stack-1x fa-inverse"></i>
        </span></a>
    </div>
    <div id="adress-footer">
      <h3>КОНТАКТИ</h3>
    <div id="adress-top">
        79005 м. Львів. Вул. Зелена 5д/5.
        <br>Тел./Факс +3(032)276-15-20
        <br>e-mail: <a href="#">store@spikart.com.ua</a>
        </div>
    </div>
</div>
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
</body>
</html>