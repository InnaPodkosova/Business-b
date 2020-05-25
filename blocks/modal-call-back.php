<!-- Modal order a call -->
<div class="modal fade" id="formTelephon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header form-head">
                <div class="form-head-txt">
                    <div class="icon-mob-p">
                        <img src="img/mob.png" alt="">
                    </div>
                    <div class="form-head-content">
                        <h3>
                            Обратный звонок
                        </h3>
                        <p>Представьтесь, мы вам перезвоним.</p>
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
                            <input type="text" class="form-control" id="validationTooltip01" placeholder=""
                                   required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 mt-3">
                            <label class="mb-0 mt-2" for="validationTooltip02">Телефон: <span
                                        class="required-star">*</span></label>
                            <input type="tel" class="form-control" id="validationTooltip02" placeholder=""
                                   required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-9 offset-md-2 col-sm-10 offset-sm-1 custom-control custom-checkbox mb-3 mt-4">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
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