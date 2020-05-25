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

<section class="page-content">

    <div class="page-headline">
        <h1>Контактная информация ТехноЛидер</h1>
    </div>

    <div class="contact-content">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12">
                <div class="contact-info-top">
                    <h2>Группа компаний "ТехноЛидер"</h2>
                    <p>В филиалах компании в наличии широкий выбор материалов для трубной изоляции и геотекстиля.
                        Материалы можно приобрести по безналичному расчету с НДС, для физических лиц осуществляется
                        также продажа за наличный расчет.</p>
                </div>
                <div class="contact-main">

                    <div class="contact-bl">
                        <div class="contact-icon">
                            <i class="colored fa fa-map-marker"></i>
                        </div>
                        <div class="contact-info-body">
                            <h3>Адрес</h3>
                            <p><b>Иркутск</b>, улица Мира, д. 62</p>
                        </div>
                    </div>

                    <div class="contact-bl">
                        <div class="contact-icon">
                            <i class="colored fa fa-phone"></i>
                        </div>
                        <div class="contact-info-body">
                            <h3>Телефон</h3>
                            <p><span style="color: #e65100;"><b>8 (800) 550-00-72</b></span> - звонок по России
                                бесплатный.</p>
                        </div>
                    </div>

                    <div class="contact-bl">
                        <div class="contact-icon">
                            <i class="colored fa fa-envelope"></i>
                        </div>
                        <div class="contact-info-body">
                            <h3>E-mail</h3>
                            <p><span style="color: #e65100;"><b>tehnolider@mail.ru</b></span></p>
                        </div>
                    </div>

                    <div class="contact-bl">
                        <div class="contact-icon">
                            <i class="colored fas fa-clock"></i>
                        </div>
                        <div class="contact-info-body">
                            <h3>Режим работы</h3>
                            <p><span style="color: #e65100;"><b>tehnolider@mail.ru</b></span></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="maps-wrap">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aef0c7bd1d77a829f50d29d51f99324b204d8c7ec1a0ce48760455c9fa2daad90&amp;source=constructor"
                            width="100%" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="contact-form-bl">
    <div class="contact-form-container">
        <div class="row form-bl-wrap">
            <div class="col-lg-4 offset-lg-0 col-md-11 offset-md-1 col-sm-12 form-bl mt-3">
                <div class="form-headline">
                    <h2 >Задать вопрос</h2>
                    <p>Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости услуг и
                        подготовят индивидуальное коммерческое предложение.</p>
                </div>
            </div>

            <div class="col-lg-8 offset-lg-0  col-md-11 offset-md-1 col-sm-12 form-bl mt-5">
                <div class="form-headline">
                    <form class="needs-validation " novalidate>


                        <div class="form-row">
                            <div class="col-md-6 offset-md-0 col-sm-10 offset-sm-1">

                                    <div class="mt-3">
                                        <label class="mb-0" for="validationTooltip01">Ваше имя: <span
                                                class="required-star">*</span></label>
                                        <input type="text" class="form-control" id="validationTooltip04" placeholder=""
                                               required>
                                    </div>


                                    <div class=" mt-3">
                                        <label class="mb-0 mt-2" for="validationTooltip02">Телефон: <span
                                                class="required-star">*</span></label>
                                        <input type="tel" class="form-control" id="validationTooltip05" placeholder=""
                                               required>
                                    </div>


                                    <div class=" mt-3">
                                        <label class="mb-0" for="validationTooltip01">E-mail: <span
                                                class="required-star">*</span></label>
                                        <input type="text" class="form-control" id="validationTooltip06" placeholder=""
                                               required>
                                    </div>



                                    <div class=" mt-3">
                                        <label class="mb-0" for="validationTooltip01">Интересующий товар/услуга: <span
                                                class="required-star">*</span></label>
                                        <input type="text" class="form-control" id="validationTooltip07" placeholder=""
                                               required>
                                    </div>


                            </div>


                            <div class="col-md-6 offset-md-0 col-sm-10 offset-sm-1 ">
                                <div class="form-group">
                                    <div class="col-md-10 offset-md-1 col-sm-12 mt-3 pr-0 pl-0">
                                        <label for="exampleFormControlTextarea2">Сообщение: <span
                                                class="required-star">*</span></label>
                                        <textarea class="contact-txa form-control rounded-3" id="exampleFormControlTextarea2"
                                                  rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 offset-md-0 col-sm-10 offset-sm-1 ">

                                <div class="custom-control custom-checkbox mb-3 mt-4">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation2"
                                           required>
                                    <label class="custom-control-label politic-info" for="customControlValidation1">Я
                                        согласен
                                        на <a href="#"
                                              style="color: #e65100;">обработку
                                            персональных данных</a></label>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class=" mt-3 mb-4 form-bottom">

                                    <div class="required-fileds">
                                        <i class="star">*</i>
                                        - Обязательные поля
                                    </div>

                                    <div class="">
                                        <button class="btn btn-orange btn-md" type="submit">Отправить</button>
                                    </div>
                                 </div>

                        </div>

                    </form>
                </div>
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