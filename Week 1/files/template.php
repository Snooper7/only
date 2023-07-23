<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult['ITEMS'])): ?>
    <div id="barba-wrapper">
        <div class="article-list">

            <?php foreach ($arResult['ITEMS'] as $arItem): ?>

            <?php if (!empty($arItem['PROPERTIES']['LINK']['VALUE'])): ?>

                <a class="article-item article-list__item" href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" data-anim="anim-3">

            <?php endif; ?>

            <?php if (!empty($arItem['PREVIEW_PICTURE']['SRC'])): ?>

                <div class="article-item__background"><img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx" alt=""/>
                </div>

            <?php endif; ?>

                <div class="article-item__wrapper">
                <div class="article-item__title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : '' ?></div>
                <div class="article-item__content"><?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : '' ?></div>
                </div>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
<?php endif; ?>
