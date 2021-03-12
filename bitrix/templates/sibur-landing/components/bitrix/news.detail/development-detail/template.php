<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <div class="panel panel--<?=$arResult["ID"]?>">
        <div class="panel__close">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#panel-close"></use>
            </svg>
        </div>
        <?if($arResult["PROPERTIES"]["VIEW_BLOCK"]["VALUE"] == 2):?>
            <h3 class="heading-tertiary"><?=$arResult["NAME"]?></h3>
            <h2 class="heading-secondary"><?=$arResult["PROPERTIES"]["TITLE"]["VALUE"]?></h2>
            <?if($arResult["PROPERTIES"]["BLOCKS"]["VALUE"]):?>
                <div class="panel__sensor">
                    <?foreach ($arResult["PROPERTIES"]["BLOCKS"]["~VALUE"] as $block):?>
                        <?=$block["TEXT"];?>
                    <?endforeach;?>
                </div>
            <?endif;?>
        <?else:?>
            <h3 class="heading-tertiary"><?=$arResult["NAME"]?></h3>
            <div class="panel__head">
                <h2 class="heading-secondary"><?=$arResult["PROPERTIES"]["TITLE"]["VALUE"]?></h2>
                <?if($arResult["PROPERTIES"]["PREZA"]["VALUE"]):?>
                    <a href="<?=$arResult["DISPLAY_PROPERTIES"]["PREZA"]["FILE_VALUE"]["SRC"]?>" class="panel__presentation" download>
                        <svg class="panel__presentation-doc">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                        </svg>
                        Скачать презентацию
                        <svg class="panel__presentation-download">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-download"></use>
                        </svg>
                    </a>
                <?endif;?>
            </div>
            <?if($arResult["PROPERTIES"]["BLOCKS"]["VALUE"]):?>
                <div class="panel__wrap">
                    <?foreach ($arResult["PROPERTIES"]["BLOCKS"]["~VALUE"] as $block):?>
                        <?=$block["TEXT"];?>
                    <?endforeach;?>
                </div>
            <?endif;?>
        <?endif;?>
    </div>
<? endif ?>