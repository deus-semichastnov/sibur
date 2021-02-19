<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <h3 class="heading-tertiary"><?=$arResult["NAME"]?></h3>
    <h2 class="heading-secondary"><?=$arResult["PROPERTIES"]["TITLE_BLOCK"]["VALUE"]?></h2>
    <?if($arResult["PROPERTIES"]["IMG_BLOCK"]["VALUE"]):?>
        <div class="why__picture">
            <div class="why__picture-img --bg">
                <img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][0]["SRC"]?>" alt="<?=$arResult["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][0]["DESCRIPTION"]?>">
            </div>
            <div class="why__picture-img rellax --anim">
                <img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][1]["SRC"]?>" alt="<?=$arResult["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][1]["DESCRIPTION"]?>">
            </div>
        </div>
    <?endif;?>
    <?if($arResult["PROPERTIES"]["SLIDER"]["VALUE"]):?>
        <?$arSlides = getSlides($arResult["PROPERTIES"]["SLIDER"]["VALUE"]);?>
        <?//echo "<pre>"; print_r($arSlides); echo "</pre>";?>
        <div class="why__tabs">
            <div class="why__tabs-info">
                <?foreach ($arSlides as $slide):?>
                    <?$active = "";?>
                    <?if($slide["PROPERTY_ACTIVE_SLIDE_VALUE"]){
                        $active = " active";
                    }?>
                    <div class="why__tabs-btn<?=$active?>">
                        <div class="why__tabs-checkbox"></div>
                        <?=$slide["NAME"]?>
                    </div>
                <?endforeach;?>
            </div>

            <?foreach ($arSlides as $slide):?>
                <?$show = "";?>
                <?if($slide["PROPERTY_ACTIVE_SLIDE_VALUE"]){
                    $show = " show";
                }?>
                <div class="why__tabs-content<?=$show?>">
                    <img src="<?=$slide["PIC_SRC"]?>" alt="tabs">
                    <div class="why__tabs-text"><?=$slide["PREVIEW_TEXT"]?></div>
                </div>
            <?endforeach;?>
        </div>
    <?endif;?>
<? endif ?>