<!-- Modal Ask a Question -->
<div class="modal fade pr-0" id="formAskQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header form-head">
                <div class="form-head-txt">
                    <div class="icon-mob-p2">
                        <img src="img/mob.png" alt="">
                    </div>
                    <div class="form-head-content">
                        <h3>
                            Задать вопрос
                        </h3>
                        <p>Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости услуг и
                            подготовят индивидуальное коммерческое предложение.</p>
                    </div>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation " novalidate>

                    <div class="form-row">
                        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 mt-3">
                            <label class="mb-0" for="validationTooltip01">Ваше имя: <span class="required-star">*</span></label>
                            <input type="text" class="form-control" id="validationTooltip04" placeholder=""
                                   required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 mt-3">
                            <label class="mb-0 mt-2" for="validationTooltip02">Телефон: <span
                                        class="required-star">*</span></label>
                            <input type="tel" class="form-control" id="validationTooltip05" placeholder=""
                                   required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 mt-3">
                            <label class="mb-0" for="validationTooltip01">E-mail: <span
                                        class="required-star">*</span></label>
                            <input type="text" class="form-control" id="validationTooltip06" placeholder=""
                                   required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 mt-3">
                            <label class="mb-0" for="validationTooltip01">Интересующий товар/услуга: <span
                                        class="required-star">*</span></label>
                            <input type="text" class="form-control" id="validationTooltip07" placeholder=""
                                   required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 mt-3 pr-0 pl-0">
                            <label for="exampleFormControlTextarea2">Сообщение: <span
                                        class="required-star">*</span></label>
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"
                                      rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9 offset-md-2 col-sm-10 offset-sm-1 custom-control custom-checkbox mb-3 mt-4">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation2" required>
                            <label class="custom-control-label politic-info" for="customControlValidation1">Я согласен
                                на <a href="prevaci.php"
                                      style="color: #e65100;">обработку
                                    персональных данных</a></label>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class=" col-md-10 offset-md-1 col-sm-10 offset-sm-1 mt-3 mb-4 form-bottom">

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