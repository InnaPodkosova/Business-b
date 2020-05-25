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
    <div class="services-page-img">
        <img src="img/dostavka.jpg" alt="">
    </div>
</section>


<section class="page-content-services">

    <div class="company-main-info">
        <div class="page-headline">
            <h2>Оперативная доставка товаров по территории России</h2>
        </div>
        <div class="company-main-txt">
            <p>Наша компания занимается производством и поставками материалов для строительства и ремонта.</p>
            <p>А также мы предоставляем комплекс сопутствующих услуг:</p>
            <ul>
                <li>оказываем услуги по организации доставки до объекта;</li>
                <li>предоставляем необходимые расчеты, рекомендации по оптимизации транспортной логистики;</li>
                <li>осуществляем дополнительную комплектацию и упаковку груза по запросу клиента;</li>
                <li>контролируем грузы в пути, предварительно информируем об изменениях во времени прибытия;</li>
                <li>консультируем по вопросам хранения и применения поставляемых материалов;</li>
                <li>обеспечиваем выполнение гарантийных обязательств производителя.</li>
            </ul>
            <p>Мы занимаемся поставками материалов по всей России автомобильным, железнодорожным и авиационным транспортом. Имеем большой опыт решения логистических задач, подберем для Вас оптимальный, доступный вариант. Наши специалисты имеют большой опыт совместной работы с транспортными компаниями, помогут найти оптимальное решение, позволяющее быстро, надежно и с минимальными расходами доставить Ваш заказ.</p>
            <p>Поможем рассчитать транспортный объем заказанных материалов при самовывозе, в случае необходимости организуем погрузку, отправку материалов даже в выходные и праздничные дни.</p>
            <p>Мы работаем только с надежными, транспортными компаниями, зарекомендовавшими себя с лучшей стороны в течение продолжительного времени. Это позволяет избежать при перевозке многих неприятных сюрпризов, способных сорвать сроки поставки, поставить под угрозу сохранность грузов.</p>

            <h4>ДОСТАВКА АВТОМОБИЛЬНЫМ ТРАНСПОРТОМ</h4>

            <p>Автомобильный транспорт в основном самый дешевый и быстрый способ доставки, поэтому большая доля наших поставок осуществляется именно автотранспортом. Все наши партнеры, осуществляющие доставку автомашинами, работают с НДС, предоставляют гарантии сохранности перевозимых материалов, если необходимо осуществляют страхование грузов.</p>

            <h4>ДОСТАВКА ЖЕЛЕЗНОДОРОЖНЫМ ТРАНСПОРТОМ</h4>

            <p>Отправка железнодорожным транспортом помогает доставить грузы в отдаленные районы, недоступные для автомашин по причине отсутствия или плохого состояния автодорог. Ж/Д перевозки дороже автомобильных, но существуют места назначения и грузы, особенно тяжелые, поставка которых наиболее эффективна либо единственно возможна по железной дороге.</p>

            <h4>АВИАЦИОННАЯ ДОСТАВКА</h4>

            <p>Самая быстрая, но при этом самая дорогая доставка авиационным транспортом по территории России используется в редких случаях: сверхсрочность поставки, невозможность доставки другим способом.</p>

            <h4>КАК ЗАКАЗАТЬ</h4>

            <p>
                Чтобы получить расчет стоимости доставки и услуги по ее организации, нужно позвонить по телефону бесплатной связи 8 (800) 550 00 72 (для звонков из России). Либо отправить запрос на электронную почту <a href="mailto:tehnolider@mail.ru">tehnolider@mail.ru</a>. Также можно задать вопрос через форму обратной связи на сайте.
            </p>
        </div>
    </div>

    <div class="order-services-wrap">
        <div class="order-btn">
            <div class="">
                <button class="btn-q btn btn-orange btn-md" type="button" data-toggle="modal"
                        data-target="#formOrderServices">Заказать услугу
                </button>
            </div>
        </div>
        <div class="order-txt">
            <p>Оформите заявку на сайте, мы свяжемся с вами в ближайшее время и ответим на все интересующие вопросы.</p>
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