<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/animate.min.css">
</head>
<body>
    <div class="container">
        <div class="container_img">
            <div class="header">
              <div class="headerblock">
                <h1>Mattex</h1>
              </div>
                <nav>
                    <ul> 
                         <li><a href="../main/index.php " >Главная</a></li><br>
                         <li><a href="#">О нас</a></li>
                         <li><a href="../katalog/katalog.html " >Каталог</a></li><br>
                         <li><a href="../dostavka/dostavka.html">Доставка</a></li>
                         <li><a href="../otzyvy/otzyvy.html">Отзывы</a></li><br>
                         <li><a href="../contact/contact.html">Контакты</a></li>
                    </ul>
                </nav>

                <!-- <p>г.Нур-Султан,<br>проспект Әл-Фараби,51</p>
                <p>8(7172) 45 65 85<br>8(701)251 97<br>Моя корзина<br>Товаров 0</p> -->
            
                 <div class="knopka">
                      <button><img class="phone wow animate__bounceInDown" src="../contact/img-contact/phone-call.png"></button>
                      <button><img class="phone wow animate__bounceOutUp" src="../contact/img-contact/location.png"></button>
                      <button><img class="phone wow animate__bounceIn" src="../contact/img-contact/basket.png"></button>
                 </div>
            
            </div>
        </div>
        <!--Features-->
        <div class="content">
            <div class="features wow bounceInRight">
                <div class="features_item">
                    <img class="features_icon" src="img-main/moneta.png">
                    <h4 class="features_title">Цены не дорогие</h4>
                </div>
            </div>
            <div class="features wow bounceInLeft">
                <div class="features_item">
                    <img class="features_icon" src="img-main/gruzovik.png">
                    <h4 class="features_title">Доставка<br>бесплатная</h4>
                </div>
            </div>
            <div class="features wow bounceInRight">
                <div class="features_item">
                    <img class="features_icon" src="img-main/garantia.png">
                    <h4 class="features_title">4 года гарантии<br>качества</h4>
                </div>
            </div>
            <div class="features wow bounceInRight">
                <div class="features_item">
                    <img class="features_icon" src="img-main/ortoped.png">
                    <h4 class="features_title">Ортопедическая<br>
                        конструкция матрасов</h4>
                </div>
            </div>
            <div class="features wow bounceInRight">
                <div class="features_item">
                    <img class="features_icon" src="img-main/nalitshny.png">
                    <h4 class="features_title">Оплата наличными
                        при получении товара</h4>
                </div>
            </div>
        </div>
        <!-- Why do people choose mattex? -->
        <div class="choose">
            <div class="block_title">
                <h1 class="why">Почему выбирают матрасы Mattex?</h1>
            </div>
            <div block_main>
                <div class="blockers">
                    <div class="blockers_item">
                        <button class="tetik"><img class="blockers_icon" src="img-main/bed.svg"></button>
                        <h4 class="blockers_title">6 лет производим матрасы
                            для сна </h4>
                    </div>
                </div>
                <div class="blockers">
                    <div class="blockers_item">
                        <button class="tetik"><img class="blockers_icon" src="img-main/product.svg"></button>
                        <h4 class="blockers_title">Более 3 000 000 довольных<br>
                            покупателей</h4>
                    </div>
                </div>
                <div class="blockers">
                    <div class="blockers_item">
                        <button class="tetik"><img class="blockers_icon" src="img-main/idea.svg"></button>
                        <h4 class="blockers_title">Используем передовые технологии </h4>
                    </div>
                </div>
                <div class="blockers">
                    <div class="blockers_item">
                         <button class="tetik"><img class="blockers_icon" src="img-main/shield.svg"></button>
                         <h4 class="blockers_title">Контролируем качество продукции</h4>
                    </div>
                </div> 
            </div>  
        </div> 
         
        <!-- <div class="content">
                <p class="contact">Контакты<br>гю Нур-Султан,проспект<br> Әл-Фараби,51<br><br>Телефоны<br><br>8 (7172) 45 65 85<br>+7 (701) 251 97 82</p>
                <img class="matras" src="../contact/img-contact/Matras.jpg">
        </div> -->
          
        <div class="footer">
            <div class="footerblock">
                <h2>Mattex</h2>
            </div>
            <ul> 
                 <li><a href="#">Главная</a></li><br>
                 <li><a href="#">О нас</a></li>
            </ul>
            <ul>
                 <li><a href="#">Каталог</a></li><br>
                 <li><a href="#">Доставка</a></li>
            </ul>
            <ul>
                <li><a href="#">Отзывы</a></li><br>
                <li><a href="../contact/contact.html">Контакты</a></li>
            </ul>
            <p>г.Нур-Султан<br>проспект Әл-Фараби,51</p>
            <p>+7(7172) 45 65 85<br>+7 (701) 251 97 82</p>

            
        </div>
    </div>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
</body>
</html>