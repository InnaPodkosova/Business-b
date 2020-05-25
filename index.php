<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Business-b</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--slick-slider-->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <!--fontawesome-->
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>


<!--Header-->
<?php require_once('blocks/header.php'); ?>
<!--Header END-->

<section>
    <div class="bussines-slider">
        <div>
            <div class="slider-item slide-one">
                <div class="slide-content">
                    <h2></h2>
                    <span></span>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item slide-two">
                <div class="slide-content">
                    <h2></h2>
                    <span></span>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-item slide-three">
                <div class="slide-content">
                    <h2></h2>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-content">

    <div class="advantages-wrap">
        <div class="advantages-bl">
            <div class="advantages-icon">
                <img src="img/advan1.png">
            </div>
            <div class="advantages-txt">
                <p>Низкие цены и<br> широкий ассортимент</p>
            </div>
        </div>
        <div class="advantages-bl">
            <div class="advantages-icon">
                <img src="img/advan2.png">
            </div>
            <div class="advantages-txt">
                <p>Широкая сеть <br>представительств</p>
            </div>
        </div>
        <div class="advantages-bl">
            <div class="advantages-icon">
                <img src="img/advan3.png">
            </div>
            <div class="advantages-txt">
                <p>Весь товар <br>сертифицирован</p>
            </div>
        </div>
        <div class="advantages-bl">
            <div class="advantages-icon">
                <img src="img/advan4.png">
            </div>
            <div class="advantages-txt">
                <p>Оперативная доставка <br>и выгрузка товара</p>
            </div>
        </div>
    </div>

    <div class="consultation-wrap">
        <div class="consultation-content">
            <h2>Консультация по услугам</h2>
            <p>Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости услуг и подготовят
                индивидуальное коммерческое предложение.</p>
        </div>

        <div class="consultation-question">
            <button class="btn btn-orange btn-md" type="button" data-toggle="modal"
                    data-target="#formAskQuestion">Задать вопрос
            </button>
        </div>
    </div>

    <div class="company-main-info">
        <div class="company-headline">
            <h1>«ТехноЛидер»</h1>
        </div>
        <div class="company-main-txt">
            <p>Группа компаний «ТехноЛидер» - производство и поставки широкого перечня строительных материалов и
                изделий, специализация - изоляция трубопроводов. Теплоизоляция - скорлупа ППУ, K-FLEX, маты прошивные,
                цилиндры минераловатные, ПСХТ-450, пеностекло, асбестовые материалы. Антикоррозионная изоляция -
                ПОЛИЛЕН, ЛИТКОР, лента ПВХ-Л (ПИЛ), термоусаживаемая изоляция, мастики и праймеры. Покрытия для наружной
                защиты изоляции - стеклоткань, рулонный стеклопластик, фольга алюминиевая, Армофол, оцинкованная сталь.
                Геотекстильные материалы - геополотно дорнит, георешетка, геосетка, теплонит. Также поставляем материалы
                для легкой промышленности - синтепон, ватин и термовойлок.</p>
            <p>Нашими постоянными официальными партнерами являются ООО «К-ФЛЕКС», АО «Втор-Ком», ЗАО «Промизоляция», ООО
                ПФК «ТЕХПРОКОМПЛЕКТ», ООО «Комплексные системы изоляции».</p>
            <p>Отгрузка продукции осуществляется со складов торговых подразделений в Екатеринбурге, Челябинске и
                Перми.</p>
            <p>Благодаря многолетним отношениям с транспортными компаниями, предлагаем оперативную и дешевую доставку.
                Поставки продукции осуществляем по всей России.</p>
        </div>
    </div>

    <div class="slider-logo-wrap">
        <div class="clients-slider">
            <div>
                <img src="img/client1.png">
            </div>
            <div>
                <img src="img/client2.png">
            </div>
            <div>
                <img src="img/client3.png">
            </div>
        </div>
    </div>


</section>

<!--Footer-->
<?php require_once('blocks/footer.php'); ?>
<!--Footer END-->

<!--Modal call back-->
<?php require_once('blocks/modal-call-back.php'); ?>
<!--Modal call back END-->

<!--Modal ask question -->
<?php require_once('blocks/modal-ask-question.php'); ?>
<!--Modal Modal ask question END-->


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script src="js/validatorForm.js"></script>
<script src="js/main.js"></script>


</body>
</html>