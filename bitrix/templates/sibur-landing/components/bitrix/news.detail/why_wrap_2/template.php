<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <div class="why__offer">
        <div class="why__offer-wrap">
            <div class="why__offer-title">
                <h3 class="heading-tertiary"><?=$arResult["NAME"]?></h3>
                <h2 class="heading-secondary"><?=$arResult["PROPERTIES"]["TITLE_BLOCK"]["VALUE"]?></h2>
            </div>
            <?if($arResult["PROPERTIES"]["SLIDER"]["VALUE"]):?>
                <?$arSlides = getSlides($arResult["PROPERTIES"]["SLIDER"]["VALUE"]);?>
                <div class="why__offer-content">
                    <?foreach ($arSlides as $slide):?>
                        <?$active = "";?>
                        <?if($slide["PROPERTY_ACTIVE_SLIDE_VALUE"]){
                            $active = " active";
                        }?>
                        <div class="why__offer-item<?=$active?> increase__item">
                            <img src="<?=$slide["PIC_SRC"]?>" alt="<?=$slide["NAME"]?>">
                            <div class="why__offer-descr"><?=$slide["PREVIEW_TEXT"]?></div>
                            <a href="<?=$slide["PROPERTY_LINK_VALUE"]?>" class="btn --white fancybox-link">
                                <?=$slide["PROPERTY_TEXT_BTN_VALUE"]?>
                                <div class="btn__plus">
                                    <div class="btn__plus-round"></div>
                                    <div class="btn__plus-p"></div>
                                </div>
                            </a>
                        </div>
                    <?endforeach;?>
                </div>
            <?endif;?>
        </div>
        <h4 class="heading-quaternary"><?=$arResult["PROPERTIES"]["NEXT_BLOCK"]["VALUE"]?></h4>
    </div>
<? endif ?>