<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="../images/favicon_mini.png" type="image/png">
    <title>Spikart</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
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
    <script src="../js/bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../js/jquery.jrumble.1.3.min.js"></script>
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
            <div class="row">

                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <ul class="social">
                        <li><a href="#" target="_blank"><img src="../images/social/vk_logo_200.png" alt="Вконтаке" title="Вконтаке" class="img-responsive"></a></li>
                        <li><a href="#" target="_blank"><img src="../images/social/google-plus_logo_200.png" alt="Google+" title="Google+" class="img-responsive"></a></li>
                        <li><a href="#" target="_blank"><img src="../images/social/facebook_logo_200.png" alt="Facebook" title="Facebook" class="img-responsive"></a></li>
                    </ul>
                </div>
                <div class="col-sm-8">
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

                            <li><a href="../index.php#title-1"><i class="fa fa-arrows-alt"></i>
                                    Напрямки діяльності</a></li>
                            <li>
                                <a href="#"><i class="fa fa-info-circle"></i>Контакти</a></li>
                        </ul>
                    </div>
                </div>


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
                    <div class="logo">
                        <a href="../index.php">
                        <img src="../images/logo_center.png" alt="Спікарт" title="Spikart" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                                        <!-----Кнопки----
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
                        <div class="col-sm-5"></div>
                        <div class="col-sm-3">
                            <ul class="skype-mail">
                                <li><a href="#" target="_blank"><img src="../images/social/skype_logo_200.png" id="skype" alt="Skype" title="Skype" class="img-responsive"></a></li>
                                <li><a href="#" target="_blank"><img src="../images/social/e-mail_logo_200.png" id="email" alt="E-mail" title="E-mail" class="img-responsive"></a></li>
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
                        <div class="col-sm-3">
                            <div class="shop-button" id="cart">
                                <button type="button" class="btn btn-inverse btn-lg">
                                    <a href="http://spikart.com.ua/shop/" target="_blank">
                                        <i class="fa fa-shopping-bag"></i>
                                        <i>Каталог товарів</i>
                                    </a></button>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row" id="phone-a">

                        <div class="col-sm-4">
                            <div id="ukrtelecom">
                                <li><a href="#" target="_blank"><img src="../images/phone/ukrtelecom.png"
                                                                     alt="+38(032) 276 15 20" title="+38(032) 276 15 20"
                                                                     class="img-responsive"></a></li></div>
                            <div id="numb-phone">
                                <li><a>+38(032)&nbsp;276&nbsp;15&nbsp;20</a></li>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div id="kyivstar">

                                <li><a href="#" target="_blank"><img src="../images/phone/kyivstar.png"
                                                                     alt="+38(096) 091 22 11" title="+38(096) 091 22 11"
                                                                     class="img-responsive"></a></li></div>
                                <div id="numb-phone">
                                <li><a>+38(096)&nbsp;091&nbsp;22&nbsp;11</a></li>

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div id="lifecell">

                                <li><a href="#" target="_blank"><img src="../images/phone/lifecell.png"
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

<!--Контaкти-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-2" id="contakty"><h2>КОНТАКТИ</h2></div>
        <div class="col-sm-5"><br><br><br><br><br></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4" id="maneger">
            <h3>Менеджер</h3>
            <div class="row">
                <div class="col-sm-6">
                    <img src="../images/contacts/maneger.png" class="img-responsive"></div>
                <div class="col-sm-6"><ul>
                        <li><h4>Трофуша Тарас</h4></li>
                        <li>тел. +38(097)979-63-63</li>
                        <li>тел. +38(093)47-88-944</li>
                        <li>ICQ 244-934-340</li>
                        <li>Skype: Trof</li>
                    </ul></div>

            </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-4" id="accounting">
            <h3>Бухгалтерія</h3>
            <div class="row">
                <div class="col-sm-6"><img src="../images/contacts/accounting.png" class="img-responsive"></div>
                <div class="col-sm-6"><ul>
                        <li><h4>Котецька Олександра</h4></li>

                        <li>+38(093)87-98-497</li>
                        <li>ICQ 581-326-754</li>
                        <br><br>

                    </ul>
                </div>

            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row" id="map-adress">
        <div class="col-sm-1"></div>
        <div class="col-sm-5" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d643.3553283821451!2d24.03598209199599!3d49.83454069613703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5d05cf85e010ad13!2z0J_QnyAi0KHQv9GW0LrQsNGA0YIi!5e0!3m2!1suk!2sua!4v1455890375587" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-1" id="col1"></div>

            <div class="col-sm-4" id="form">
                <h3>Адреса</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="../images/contacts/home.png" class="img-responsive"></div>
                    <div class="col-sm-6"><ul>
                            <li>79005 м.Львів.</li>
                            <li>Вул. Зелена 5д/5.</li>
                            <li>Тел./Факс +38(032)276-15-20</li>
                            <li>Київстар  +38(096)091-22-11</li>
                            <li>Lifecell  +38(073)073-22-11</li>
                            <li>e-mail: store@spikart.com.ua</li>
                        </ul>
                    </div>

                </div>
            </div>

        <div class="col-sm-1"></div>
    </div>
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