<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<?=$arResult["FORM_NOTE"]?>
<?if ($arResult["isFormNote"] != "Y")
{
    ?>

    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">Связаться</div>
            <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом
                ваших требований
            </div>
        </div>
        <form name="SIMPLE_FORM_1" class="contact-form__form" action="/testovaya.php" method="POST">
                <input type="hidden" name="sessid" id="sessid" value="<? echo bitrix_sessid() ?>">
                <input type="hidden" name="WEB_FORM_ID" value="1">
            <div class="contact-form__form-inputs">
                <div class="input contact-form__input"><label class="input__label" for="name">
                        <div class="input__label-text">Ваше имя*</div>
                        <input class="input__input" type="text" id="name" name="form_text_1" value=""
                               required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="medicine_company">
                        <div class="input__label-text">Компания/Должность*</div>
                        <input class="input__input" type="text" id="medicine_company" name="form_text_3" value=""
                               required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="medicine_email">
                        <div class="input__label-text">Email*</div>
                        <input class="input__input" type="email" id="medicine_email" name="form_email_2" value=""
                               required="">
                        <div class="input__notification">Неверный формат почты</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="medicine_phone">
                        <div class="input__label-text">Номер телефона*</div>
                        <input class="input__input" type="tel" id="medicine_phone"
                               data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12"
                               x-autocompletetype="phone-full" name="form_text_4" value="" required=""></label></div>
            </div>
            <div class="contact-form__form-message">
                <div class="input"><label class="input__label" for="medicine_message">
                        <div class="input__label-text">Сообщение</div>
                        <textarea class="input__input" type="text" id="medicine_message" name="form_textarea_5"
                                  value=""></textarea>
                        <div class="input__notification"></div>
                    </label></div>
            </div>
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                    ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                    данных&raquo;.
                </div>
                <input class="form-button contact-form__bottom-button" type="submit" name="web_form_submit" value="<?=$arResult["arForm"]["BUTTON"]?>" />
            </div>
        </form>
    </div>

    <?=$arResult["FORM_FOOTER"]?>
    <?

} //endif (isFormNote)