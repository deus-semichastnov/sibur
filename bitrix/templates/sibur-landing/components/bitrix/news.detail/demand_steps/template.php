<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <div class="demand__steps">
        <h3 class="heading-tertiary"><?=$arResult["NAME"]?></h3>
        <div class="demand__steps-content">
            <div class="demand__steps-descr"><?=$arResult["PREVIEW_TEXT"]?></div>
            <?if($arResult["PROPERTIES"]["TEXTS"]["VALUE"]):?>
                <div class="demand__steps-s">
                    <?foreach ($arResult["PROPERTIES"]["TEXTS"]["VALUE"] as $key => $text):?>
                        <div class="demand__steps-item"><?=$text["TEXT"]?></div>
                    <?endforeach;?>
                </div>
            <?endif;?>
        </div>
        <h4 class="heading-quaternary"><?=$arResult["PROPERTIES"]["NEXT_BLOCK"]["VALUE"]?></h4>
    </div>
<? endif ?>