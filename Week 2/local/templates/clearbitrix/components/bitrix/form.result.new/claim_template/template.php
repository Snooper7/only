<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<? /** @var TYPE_NAME $arResult */
if ($arResult["isFormNote"] === "Y"): ?>
    Спасибо, ваша заявка принята!
<? else: ?>
    <?= $arResult["FORM_HEADER"] ?>
    <input type="hidden" name="web_form_submit" value="Y">
    <? if ($arResult["isFormErrors"] === "Y"): ?>
        <div class="errors">
            <?=$arResult["FORM_ERRORS_TEXT"]?>
        </div>
    <? endif; ?>

    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">
                <?=$arResult["FORM_TITLE"] ?></div>
            <div class="contact-form__head-text"><?= $arResult["FORM_DESCRIPTION"] ?></div>
        </div>
        <form class="contact-form__form" action="/" method="POST">
            <div class="contact-form__form-inputs">

                <div class="input contact-form__input">
                    <label class="input__label" for="NAME">
                        <div class="input__label-text">
                            <?=$arResult["arQuestions"]["NAME"]["TITLE"]?><?if ($arResult["arQuestions"]["NAME"]["REQUIRED"] == "Y"):?>
                                <?=$arResult["REQUIRED_SIGN"];?><?endif;?>
                        </div>
                        <input class="input__input" type="text" id="NAME" name="NAME" value=""
                               required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="COMPANY">
                        <div class="input__label-text">
                            <?=$arResult["arQuestions"]["COMPANY"]["TITLE"]?><?if ($arResult["arQuestions"]["COMPANY"]["REQUIRED"] == "Y"):?>
                                <?=$arResult["REQUIRED_SIGN"];?><?endif;?>
                        </div>
                        <input class="input__input" type="text" id="COMPANY" name="COMPANY" value=""
                               required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="EMAIL">
                        <div class="input__label-text">
                            <?=$arResult["arQuestions"]["EMAIL"]["TITLE"]?><?if ($arResult["arQuestions"]["EMAIL"]["REQUIRED"] == "Y"):?>
                                <?=$arResult["REQUIRED_SIGN"];?><?endif;?></div>
                        <input class="input__input" type="email" id="EMAIL" name="EMAIL" value=""
                               required="">
                        <div class="input__notification">Неверный формат почты</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="PHONE">
                        <div class="input__label-text">
                            <?=$arResult["arQuestions"]["PHONE"]["TITLE"]?><?if ($arResult["arQuestions"]["PHONE"]["REQUIRED"] == "Y"):?>
                                <?=$arResult["REQUIRED_SIGN"];?><?endif;?>
                        </div>
                        <input class="input__input" type="tel" id="PHONE"
                               data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12"
                               x-autocompletetype="phone-full" name="PHONE" value="" required=""></label>
                </div>
            </div>
            <div class="contact-form__form-message">
                <div class="input"><label class="input__label" for="MESSAGE">
                        <div class="input__label-text">
                            <?=$arResult["arQuestions"]["MESSAGE"]["TITLE"]?><?if ($arResult["arQuestions"]["MESSAGE"]["REQUIRED"] == "Y"):?>
                                <?=$arResult["REQUIRED_SIGN"];?><?endif;?>
                        </div>
                        <textarea class="input__input" type="text" id="MESSAGE" name="MESSAGE"
                                  value=""></textarea>
                        <div class="input__notification"></div>
                    </label>
                </div>
            </div>
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                    ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                    данных&raquo;.
                </div>
                <button class="form-button contact-form__bottom-button" data-success="Отправлено"
                        data-error="Ошибка отправки">
                    <div class="form-button__title" type="submit" name="web_form_submit"><?=$arResult["arForm"]["BUTTON"]?></div>
                </button>
            </div>
        </form>
    </div>

    <?=$arResult["FORM_FOOTER"]?>

    <pre>
    <? print_r($arResult) ?>
</pre>
<? endif; ?>