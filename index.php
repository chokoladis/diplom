<?include 'db.php';//ini_set('display_errors','Off');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redmouse.ru</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script> 
    <script>
        new WOW().init();
    </script>   
    <script src="js/slider.js"></script>
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <section class="first" id="first">
        <header>   
            <div class="container d-flex align-items-center">
                <a href="index.php" class="logo">
                    <div class="img-logo" ></div>
                </a>
                <ul class="menu d-flex">  
                    <li><a href="catalog.php">Услуги</a></li>
                    <li><a href="price.php">Прайс-лист</a></li>
                    <li><a href="otz.php">Отзывы</a></li>
                    <li><a href="trek.php">Трек-код</a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li class="vk_menu"><a ><img src="css/img/вк.png" alt=""></a>
                        <ul class="vk">
                            <li><a href="https://vk.com/redmouse" target="_blank">Главный директор</a></li>
                            <li><a href="https://vk.com/redmouse_56" target="_blank">Группа</a></li>
                        </ul>
                    </li>
                    <?
                        if (isset($_SESSION['logged_user'])) { 
                            echo '
                                <li><a class="profile" href="#">'.$_SESSION["logged_user"]->login.'</a></li>
                                <li><form action="#" method="POST"><input class="exit" name="exit" type="submit" value="Выйти"></form></li>
                            </ul>
                                ';   
                            $exit = $_POST['exit'];
                            if (isset($exit)) {
                                unset($_SESSION['logged_user']);
                            }       
                        }	
                        else {
                            echo '
                            <li><a href="auth.php">Авторизация</a></li>
                            </ul> ';                               
                        }
                    ?>                
            </div>
        </header>
        <div class="content">
            <div class="container d-flex">
                <div class="offer wow slideInLeft" data-wow-duration="2s">
                    <div class="krug wow rollIn" data-wow-duration="3s"></div>
                    <div class="plus1 wow rollIn" data-wow-duration="3s"></div>
                    <div class="line1 wow rollIn" data-wow-duration="3s"></div>
                    <div class="line2 wow rollIn " data-wow-duration="3s"></div>
                    <div class="plus2 wow rollIn" data-wow-duration="3s"></div>
                    <div class="offer_body">
                        <h1 class="offer_title">
                            <div class="offer_word">
                            </div>
                            <div class="offer_title_small">принтом у нас</div>
                        </h1>
                        <div class="offer_btn">
                            <a href="catalog.php" class="catalog">Перейти к услугам ▶</a>
                        </div>
                        
                    </div>
                    <div class="tochki"></div>
                   
                </div>
                <div class="slider wow slideInRight">
                    <div class="btns_comand d-flex">
                       <div class="btn_comand prev d-flex justify-content-center" >⇦</div>
                       <div class="btn_comand next d-flex justify-content-center" >⇨</div>
                   </div>
                    <div class="dline1 wow rollIn" data-wow-delay="3s"></div>
                    <div class="tringles wow rollIn" data-wow-delay="3s"></div>
                    <div class="slider_body wow bounceInRight " data-wow-delay="2s">
                        <div class="slider_item curry">
                            <img src="css/img/Слайдер/siTZq1kBiWM.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Фотография на холсте</div>
                                <div class="title_price">от 800 ₽</div>
                            </div>
                        </div>
                        <div class="slider_item">
                            <img src="css/img/Слайдер/SJlh96DyOBg.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Печать на кружке</div>
                                <div class="title_price">от 250 ₽</div>
                            </div>
                        </div>
                        <div class="slider_item">
                            <img src="css/img/Слайдер/fsT7ZAW7ywc.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Печать на одежде</div>
                                <div class="title_price">от 300 ₽</div>
                            </div>
                        </div>
                        <div class="slider_item">
                            <img src="css/img/Слайдер/4-x3uC3c0BQ.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Сообщения, доклады</div>
                                <div class="title_price">от 30 ₽</div>
                            </div>
                        </div>
                        <div class="slider_item">
                            <img src="css/img/Слайдер/c_ZIWAEcXnU.jpg" alt="">
                            <div class="title_slider ">
                                <div class="title_img">Визитка</div>
                                <div class="title_price">1 ₽/шт</div>
                            </div>
                        </div>
                   </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <div class="on_top">▲</div>
    <footer>
        <div class="container">
            <div class="padding-top w100 d-flex justify-content-center">
                <div class="footer_item">
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Адрес</h4>
                    <p class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">г. Бугуруслан, ул. Красногвардейская 41</p>
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Телефоны</h4>
                    <p class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
                        +7 (932) 555-55-22<br>
                        +7 (922) 855-55-54
                    </p>
                </div>
                <div class="footer_item">
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Реквизиты</h4>
                    <p class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">ИНН 560200748211 <br>
                    ОГРНИП 304560201700021</p>
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">График работы</h4>
                    <p class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">
                        Открыто c 10:00 до 19:00<br>
                        Выходной - сб, вс
                    </p>
                </div>
                <div class="footer_item">
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Соцсети</h4>
                    <a href="https://vk.com/redmouse">
                    <img src="css/img/вк.png" alt="" class="animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;"></a>
                </div>
                <div class="map">
                    <h4 class="upper animated wow slideInLeft animated" style="visibility: visible; animation-name: slideInLeft;">Геолокация</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1182.3369764952852!2d52.42806900723814!3d53.652785596262525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4164074b28662273%3A0xddf5b1f804070d41!2z0JrRgNCw0YHQvdC-0LPQstCw0YDQtNC10LnRgdC60LDRjyDRg9C7LiwgNDEsINCR0YPQs9GD0YDRg9GB0LvQsNC9LCDQntGA0LXQvdCx0YPRgNCz0YHQutCw0Y8g0L7QsdC7LiwgNDYxNjMw!5e0!3m2!1sru!2sru!4v1557843021007!5m2!1sru!2sru" class="map wow rollIn" frameborder="0" allowfullscreen="true"></iframe>
                </div>
            </div>
            <div class="footer_block_a d-flex justify-content-center">
                <div class="footer_a"><a href="map.php">Карта сайта</a></div>
                <div class="footer_a"><a href="sp_info.php">Справочная информация</a></div>
                <div class="footer_a"><a href="ask.php">Вопросы и ответы</a></div>
                <div class="footer_a"><a href="calendar.php">Календарь</a></div>
            </div>
            
            <p class="copyright slideInDown wow animated">© «Цифровая студия RedMouse (ИП Соловьев)», 2019</p>
            <div class="looks">
              <a href="http://www.warlog.ru/" target="_blank"><img border="0" src="http://www.warlog.ru/counter/?i=3003" alt="счетчик посещений" title="счетчик посещений" /></a>
            </div>
        </div>
    </footer>
    
    <script src="js/parallax-mouse.js"></script>
    <script src="js/main.js"></script>
    <script src="js/header.js"></script>
 
</body>
</html>