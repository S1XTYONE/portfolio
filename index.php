<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIXTYONE - portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/main.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
</head>
<body>

    <section id="main">
       <div class="container">
           <div class="row menu">
               <div class="navbar">
                   <div class="container">
                       <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span><i class="glyphicon glyphicon-menu-hamburger"></i>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="#">SIXTYONE</a>
                       </div>
                       <div class="collapse navbar-collapse" id="menu">
                           <ul class="nav-custom navbar-nav navbar-right">
                               <li><a href="#main">Главная</a></li>
                               <li><a href="#about">Прeимущества</a></li>
                               <li><a href="#works">Работы</a></li>
                               <li><a href="#comments">отзывы</a></li>
                               <li><a href="#order">Заказать</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        <div class="container first">
            <div class="row words">
               <span class="need">Нужен сайт?</span>
               <p>Студия SIXTYONE предлагает свои услуги по созданию сайтов.</p><br>
               <a href="#about" class="fs-button">узнать больше</a>
               <a href="#order" class="fs-button">заказать сайт</a>
            </div>
        </div>
    </section>
        <section id="about">
            <div class="container about-wrapper">
                <div class="row">
                    <div class="page-header about-text">
                       <center><h1 style="color:#fff;">Наши приемущества</h1></center>
                   </div>
                </div>
                <div class="row about-items">
                    <div class="col-xs-3">
                        <h3>Адаптивная верстка<h3>
                        <img src="images/main-responsive.svg" alt="" class="img-responsive icon-about">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quaerat eius, deleniti adipisci mollitia doloribus commodi illo quia quisquam asperiores nemo iste quidem cum unde, vero voluptas dicta quos dolores?</p>
                    </div>
                    <div class="col-xs-3">
                        <h3>Чистый код</h3>
                        <img src="images/clear-code.svg"  alt="" class="img-responsive icon-about">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem aut ducimus, voluptas laboriosam, ipsa, corporis error atque quia quibusdam quae enim fuga consectetur rem, ratione illum ullam doloribus ad minus.</p>
                    </div>
                    <div class="col-xs-3">
                        <h3>Краткие сроки</h3>
                        <img src="images/pocket-watch.svg" width="250" alt="" class="img-responsive icon-about">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio necessitatibus, expedita veritatis voluptatum facilis! Quibusdam quis culpa dolore voluptatum, cumque velit cum. Fuga in asperiores voluptatum mollitia exercitationem magni minima!</p>
                    </div>
                    <div class="col-xs-3">
                        <h3>Довольные заказчики</h3>
                        <img src="images/customer-testimonial.svg" alt="" class="img-responsive icon-about">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa maxime placeat debitis, nisi adipisci. Ea, quod sit officia laborum. Aperiam vitae earum quidem similique odio eveniet sed eligendi ipsam, officiis.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container" id="works">
           <center>
               <div class="page-header"><h1 style="color: #000">Наши работы - Ваши заказы</h1><br></div>
           </center>
            <div class="row">
                <div id="owl-demo">
                  <div class="item"><img src="images/work1.jpg" alt="Owl Image"></div>
                  <div class="item"><img src="images/work3.jpg" alt="Owl Image"></div>
                  <div class="item"><img src="images/wrok4.jpg" alt="Owl Image"></div>
                  <div class="item"><img src="images/work5.jpg" alt="Owl Image"></div>
                  <div class="item"><img src="images/work6.jpg" alt="Owl Image"></div>
                  <div class="item"><img src="images/work7.jpg" alt="Owl Image"></div>
                  <div class="item"><img src="images/wrok2.jpg" alt="Owl Image"></div>
                </div>
            </div>
        </div>
    <section id="comments">
        <div class="container">
           <div class="page-header">
               <center><h1>Отзывы заказчиков</h1></center>
           </div>
            <div class="row">
                <center>
                    <img src="images/juliya.jpg" alt="" class="img-responsive review-img">
                    <h2 class="name">Юлия Иванова</h2>
                    <p><small class="company">ООО "КубаньИнфоЦентр"</small></p>
                    <p>Благодарим ребят за качественную работу, за отзывчивость и профессионализм. Сайт создали быстро, качественно и не дорого. рекомендую!</p>
                </center>
            </div>
        </div>
    </section>
    <section id="order">
        <div class="container about-wrapper">
            <div class="row">
                <div class="page-header">
                   <center><h1 style="color: #000">Заказать сайт</h1></center>
               </div>
            </div>
            <div class="row about-items">
                <form action="order.php">
                    <input type="text" name="name" placeholder="Имя" required>
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="text" name="skype" placeholder="Skype">
                    <textarea placeholder="Доп.информация" name="dop"></textarea>
                    <input type="submit" value="отправить">
                </form>
            </div>
        </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="owl-carousel/owl.carousel.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>