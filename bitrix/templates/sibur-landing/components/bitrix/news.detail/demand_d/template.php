<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <div class="demand__d">
        <h3 class="heading-tertiary"><?=$arResult["NAME"]?></h3>
        <h2 class="heading-secondary"><?=$arResult["PREVIEW_TEXT"]?></h2>
        <?if($arResult["PROPERTIES"]["TEXTS"]["VALUE"]):?>
            <div class="demand__d-content">
                <?foreach ($arResult["PROPERTIES"]["TEXTS"]["VALUE"] as $key => $text):?>
                    <div class="demand__d-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                        </svg>
                        <div class="demand__d-text"><?=$text["TEXT"]?></div>
                    </div>
                <?endforeach;?>
            </div>
        <?endif;?>
    </div>
<? endif ?>