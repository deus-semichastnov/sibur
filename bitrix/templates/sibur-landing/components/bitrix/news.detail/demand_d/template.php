<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <div class="demand__d">
        <h3 class="heading-tertiary" data-aos="fade-up" data-aos-duration="1500"><?=$arResult["NAME"]?></h3>
        <h2 class="heading-secondary" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><?=$arResult["PREVIEW_TEXT"]?></h2>
        <?if($arResult["PROPERTIES"]["TEXTS"]["VALUE"]):?>
            <div class="demand__d-content" data-aos="flip-up" data-aos-duration="1500">
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