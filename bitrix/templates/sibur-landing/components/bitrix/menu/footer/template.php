<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <div class="footer__links">
        <? foreach ($arResult as $arItem):?>
            <a href="<?= $arItem["LINK"] ?>" class="footer__links-item" target="_blank">
                <?=$arItem["TEXT"]?>
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#link-icon"></use>
                </svg>
            </a>
        <? endforeach ?>
    </div>
<? endif ?>