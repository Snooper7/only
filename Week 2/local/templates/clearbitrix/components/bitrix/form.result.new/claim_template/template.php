<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var TYPE_NAME $arResult */

if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<pre>
    <?= print_r($arResult); ?>
</pre>
<?=$arResult["FORM_NOTE"]?>
<?if ($arResult["isFormNote"] != "Y")
{
?>

    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">
                <?php if ($arResult["isFormTitle"]):?>
	            <?=$arResult["FORM_TITLE"]?>
                <?php endif; ?>
            </div>
            <div class="contact-form__head-text">
                <?=$arResult["FORM_DESCRIPTION"]?>
            </div>
        </div>
        <form class="contact-form__form" action="/" method="POST">
            <div class="contact-form__form-inputs">
<!--                --><?//foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion): ?>
<!---->
<!--                    <div class="input contact-form__input"><label class="input__label" for="medicine_name">-->
<!--                            <div class="input__label-text">--><?php //=$arQuestion["CAPTION"]?><!----><?//if ($arQuestion["REQUIRED"] == "Y"):?><!----><?php //=$arResult["REQUIRED_SIGN"];?><!----><?//endif;?><!--</div>-->
<!--                            <input class="input__input" type="text" id="medicine_name" name="medicine_name" value=""-->
<!--                                   required="">-->
<!--                            <div class="input__notification">Поле должно содержать не менее 3-х символов</div>-->
<!--                        </label>-->
<!--                    </div>-->
<!---->
<!--                    <pre>-->
<!--                        --><?php //= print_r($arQuestion); ?>
<!--                    </pre>-->
<!---->
<?// endforeach; ?>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_name">
                        <div class="input__label-text">Ваше имя*</div>
                        <input class="input__input" type="text" id="medicine_name" name="medicine_name" value=""
                               required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>

                <div class="input contact-form__input"><label class="input__label" for="medicine_company">
                        <div class="input__label-text">Компания/Должность*</div>
                        <input class="input__input" type="text" id="medicine_company" name="medicine_company" value=""
                               required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label></div>

                <div class="input contact-form__input"><label class="input__label" for="medicine_email">
                        <div class="input__label-text">Email*</div>
                        <input class="input__input" type="email" id="medicine_email" name="medicine_email" value=""
                               required="">
                        <div class="input__notification">Неверный формат почты</div>
                    </label></div>

                <div class="input contact-form__input"><label class="input__label" for="medicine_phone">
                        <div class="input__label-text">Номер телефона*</div>
                        <input class="input__input" type="tel" id="medicine_phone"
                               data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12"
                               x-autocompletetype="phone-full" name="medicine_phone" value="" required=""></label></div>
            </div>
            <div class="contact-form__form-message">
                <div class="input"><label class="input__label" for="medicine_message">
                        <div class="input__label-text">Сообщение</div>
                        <textarea class="input__input" type="text" id="medicine_message" name="medicine_message"
                                  value=""></textarea>
                        <div class="input__notification"></div>
                    </label></div>
            </div>
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                    ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                    данных&raquo;.
                </div>
                <button class="form-button contact-form__bottom-button" data-success="Отправлено"
                        data-error="Ошибка отправки">
                    <div class="form-button__title"><?=$arResult["arForm"]["BUTTON"]?></div>
                </button>
            </div>
        </form>
    </div>
<?=$arResult["FORM_HEADER"]?>
<table>
<?
if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
{
?>
	<tr>
		<td><?
if ($arResult["isFormTitle"])
{
?>
	<h3><?=$arResult["FORM_TITLE"]?></h3>
<?
} //endif ;

	if ($arResult["isFormImage"] == "Y")
	{
	?>
	<a href="<?=$arResult["FORM_IMAGE"]["URL"]?>" target="_blank" alt="<?=GetMessage("FORM_ENLARGE")?>"><img src="<?=$arResult["FORM_IMAGE"]["URL"]?>" <?if($arResult["FORM_IMAGE"]["WIDTH"] > 300):?>width="300"<?elseif($arResult["FORM_IMAGE"]["HEIGHT"] > 200):?>height="200"<?else:?><?=$arResult["FORM_IMAGE"]["ATTR"]?><?endif;?> hspace="3" vscape="3" border="0" /></a>
	<?//=$arResult["FORM_IMAGE"]["HTML_CODE"]?>
	<?
	} //endif
	?>

			<p><?=$arResult["FORM_DESCRIPTION"]?></p>
		</td>
	</tr>
	<?
} // endif
	?>
</table>
<br />
<table class="form-table data-table">
	<thead>
		<tr>
			<th colspan="2">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
	<?
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{

		if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
		{

            echo $arQuestion["HTML_CODE"];
		}
		else
		{
	?>

            <div class="input contact-form__input">
                <label class="input__label" for="<?=$arQuestion["CAPTION"]?>">
                    <div class="input__label-text"><?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?></div>
                    <input class="input__input" type="text" id="<?=$arQuestion["CAPTION"]?>" name="<?=$arQuestion["CAPTION"]?>" value=""
                           required="">
                    <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                </label>
            </div>

				<?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
				<span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
				<?endif;?>
				<?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?>
				<?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>

			<td><?=$arQuestion["HTML_CODE"]?></td>

	<?
		}
	} //endwhile
	?>
<?
if($arResult["isUseCaptcha"] == "Y")
{
?>
		<tr>
			<th colspan="2"><b><?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?></b></th>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" /></td>
		</tr>
		<tr>
			<td><?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?></td>
			<td><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" /></td>
		</tr>
<?
} // isUseCaptcha
?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="2">
				<input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
				<?if ($arResult["F_RIGHT"] >= 15):?>
				&nbsp;<input type="hidden" name="web_form_apply" value="Y" /><input type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>" />
				<?endif;?>
				&nbsp;<input type="reset" value="<?=GetMessage("FORM_RESET");?>" />
			</th>
		</tr>
	</tfoot>
</table>
<p>
<?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>
</p>
<?=$arResult["FORM_FOOTER"]?>
<?

} //endif (isFormNote)