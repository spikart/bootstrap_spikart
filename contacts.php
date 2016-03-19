<!DOCTYPE html>
<html lang="uk">
<head>
    <meta name="google-site-verification" content="n0aTZ9Q2NqW4hPGgj5lZnfmTNyYwAYYRYDesET0jVN8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="images/favicon_mini.png" type="image/png">
    <title>КОНТАКТИ</title>
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
    jQuery("document").ready(function ($) {

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
    $(function () {
        $("fa").click(function () {
            animate("#footer", 'bounce');
            return false;
        });
    });

    function animate(element_ID, animation) {
        $(element_ID).addClass(animation);
        var wait = window.setTimeout(function () {
                $(element_ID).removeClass(animation)
            }, 1300
        );
    }
</script>


<!--Menu-->
<div class="navbar navbar-top">
    <nav id="top">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-1 col-lg-1 hidden-xs hidden-sm"></div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" class="top-menu-style">
                    <ul class="social">
                        <li><a href="#" target="_blank"><img src="images/social/vk_logo_28.png" alt="Вконтаке"
                                                             title="Вконтаке" class="img-responsive"></a></li>
                        <li><a href="#" target="_blank"><img src="images/social/google-plus_logo_28.png" alt="Google+"
                                                             title="Google+" class="img-responsive"></a></li>
                        <li><a href="#" target="_blank"><img src="images/social/facebook_logo_28.png" alt="Facebook"
                                                             title="Facebook" class="img-responsive"></a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 hidden-sm hidden-xs"></div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <ul class="list-inline pull-right" id="responsive-menu">
                        <li><a href="../index.php""><i class="fa fa-home"></i><span class="hidden-xs hidden-sm hidden-md">Головна</span></a></li>
                        <li><a href="#title-1"><i class="fa fa-arrows-alt"></i><span class="hidden-xs hidden-sm hidden-md">Напрямки</span></a></li>
                        <li><a href="contacts.php"><i class="fa fa-info-circle"></i><span class="hidden-xs hidden-sm hidden-md">Контакти</Контакти></span></a></li>
                    </ul>
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
                <!-- -->
                <div class="col-lg-1 hidden-xs hidden-md hidden-sm">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo_center_small.png" alt="Спікарт" title="Spikart">
                        </a>
                    </div>
                </div>
                <div class="col-sm-1 col-md-1 hidden-xs hidden-lg">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo_center_small.png" alt="Спікарт" title="Spikart">
                        </a>
                    </div>
                </div>
                <div class="col-xs-2 hidden-sm hidden-md hidden-lg">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo_center_micro.png" alt="Спікарт" title="Spikart">
                        </a>
                    </div>
                </div>

                <!-- -->
                <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                    <div id="phone-a">
                        <ul>
                            <li><img src="images/phone/kyivstar_small.png" alt="+38(096) 091 22 11"
                                     title="+38(096) 091 22 11">+38(096)&nbsp;091&nbsp;22&nbsp;11
                            </li>
                            <li><img src="images/phone/lifecell_small.png" alt="+38(073) 073 22 11"
                                     title="+38(073) 073 22 11">+38(073)&nbsp;073&nbsp;22&nbsp;11
                            </li>
                            <li><img src="images/phone/ukrtelecom_small.png" alt="+38(032) 276 15 20"
                                     title="+38(032) 276 15 20">+38(032)&nbsp;276&nbsp;15&nbsp;20
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-7 hidden-md hidden-lg">
                    <div id="phone">
                        <ul>
                            <li><img src="images/phone/ukrtelecom_small.png" alt="+38(032) 276 15 20"
                                     title="+38(032) 276 15 20">+38(032)&nbsp;276&nbsp;15&nbsp;20
                            </li>
                            <li><img src="images/phone/kyivstar_small.png" alt="+38(096) 091 22 11"
                                     title="+38(096) 091 22 11">+38(096)&nbsp;091&nbsp;22&nbsp;11
                            </li>
                            <li><img src="images/phone/lifecell_small.png" alt="+38(073) 073 22 11"
                                     title="+38(073) 073 22 11">+38(073)&nbsp;073&nbsp;22&nbsp;11
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-2 col-lg-2 hidden-xs hidden-sm">
                    <div class="skype-mail">
                        <ul>
                            <li><a href="#" target="_blank"><img src="images/social/skype_logo.png" id="skype"
                                                                 alt="Skype" title="Skype"></a></li>
                            <li><a href="#" target="_blank"><img src="images/social/e-mail_logo.png" id="email"
                                                                 alt="E-mail" title="E-mail"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2 hidden-xs hidden-md hidden-lg">
                    <div class="skype-mail">
                        <i><a href="#" target="_blank"><img src="images/social/skype_logo_mini.png"
                                                            alt="Skype" title="spikart.com.ua"></a></i>
                        <i><a href="#" target="_blank"><img src="images/social/e-mail_logo_mini.png"
                                                            alt="E-mail" title="support@spikart.com.ua"></a></i>
                    </div>
                </div>
                <script>
                    $(function () {

                        $('#skype').jrumble({
                            x: 1,
                            y: 1,
                            rotation: 0
                        });
                        $('#skype').hover(function () {
                            $(this).trigger('startRumble');
                        }, function () {
                            $(this).trigger('stopRumble');
                        });
                    });
                </script>
                <!-- -->
                <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                    <div>
                        <a class="btn" href="http://spikart.com.ua/shop/" target="_blank" id="btn-shop">
                            <i class="fa fa-shopping-bag"></i>
                            <i>Каталог товарів</i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-2 hidden-md hidden-lg">
                    <div>
                        <a class="btn" href="http://spikart.com.ua/shop/" target="_blank" id="btn-shop-small">
                            <i class="fa fa-shopping-bag"></i>
                            <i>Каталог товарів</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Contacts-->
<div class="container-fluid">
    <div class="row" id="contacts_row_1">
        <div class="col-sm-5"></div>
        <div class="col-sm-2" id="contacts"><h1>КОНТАКТИ</h1></div>
        <div class="col-sm-5"><br><br><br><br><br></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4" id="manager">
            <h3>Відділ продажу</h3>
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/contacts/icon_sales_full.png" class="img-responsive"></div>
                <div class="col-sm-6"><ul>
                        <h4>
                        <li>+38(096)091-22-11</li>
                        <li>+38(073)073-22-11</li>
                        <li>&nbsp</li>
                        <li>store@spikart.com.ua</li>
                        <li>Skype: spikart.com.ua</li>
                        </h4>
                    </ul></div>

            </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-4" id="service">
            <h3>Сервіс та гарантія</h3>
            <div class="row">
                <div class="col-sm-6"><img src="images/contacts/icon_service.png" class="img-responsive"></div>
                <div class="col-sm-6">
                    <ul>
                        <h4>
                        <li>+38(032)276-15-20</li>
                        <li>+38(096)091-22-11</li>
                        <li>&nbsp</li>
                        <li>support@spikart.com.ua</li>
                        </h4>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row" id="cotacts_row_2">
        <div class="col-sm-1"></div>
        <div class="col-sm-4" id="map-adress">

            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d643.3553283821451!2d24.03598209199599!3d49.83454069613703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5d05cf85e010ad13!2z0J_QnyAi0KHQv9GW0LrQsNGA0YIi!5e0!3m2!1suk!2sua!4v1455890375587" width="500" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-2" id="col1"></div>
        <div class="col-sm-4" id="form">
            <h3>Адреса</h3>
            <div class="row">
                <div class="col-sm-6"><img src="images/contacts/icon_home.png" class="img-responsive"></div>
                <div class="col-sm-6">
                    <ul>
                    <h4>
                        <li>79005 м.Львів.</li>
                        <li>Вул. Зелена 5д/5.</li>
                        <li>+38(032)276-15-20</li>
                        <li>+38(096)091-22-11</li>
                        <li>+38(073)073-22-11</li>
                        <li>store@spikart.com.ua</li>
                    </h4>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<!--footer-->
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
</body>
</html>