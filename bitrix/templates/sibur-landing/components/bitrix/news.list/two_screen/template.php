<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<? if (!empty($arResult)): ?>
    <div class="idea__wrap">
        <?foreach ($arResult["ITEMS"] as $key => $item):?>
            <?$dopClass = "";
            if($key == 0){
                $dopClass = "--shift-down";
            }
            if(!isset($arResult["ITEMS"][$key+1])){
                $dopClass = "about";
            }?>

            <div class="idea__elem <?=$dopClass?>" <?if($item["CODE"] != ""):?>id="<?=$item["CODE"]?>"<?endif;?>>
                <h3 class="heading-tertiary"><?=$item["NAME"]?></h3>
                <h2 class="heading-secondary"><?=$item["DISPLAY_PROPERTIES"]["TITLE_BLOCK"]["VALUE"]?></h2>
                <?if($item["DISPLAY_PROPERTIES"]["TEXT_BLOCK"]["VALUE"]["TEXT"] != ""):?>
                    <div class="idea__descr"><?=$item["DISPLAY_PROPERTIES"]["TEXT_BLOCK"]["VALUE"]["TEXT"]?></div>
                <?endif;?>
                <?if($arResult["DISPLAY_PROPERTIES"]["NEXT_BLOCK"]["VALUE"] != "" || $item["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][0]["ID"]):?>
                    <div class="idea__picture">
                        <h4 class="heading-quaternary"><?=$arResult["DISPLAY_PROPERTIES"]["NEXT_BLOCK"]["VALUE"]?></h4>
                        <?if($item["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][0]["ID"]):?>
                            <div class="idea__picture-wrap">
                                <div class="idea__picture-img">
                                    <img src="<?=$item["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][0]["SRC"]?>" alt="<?=$item["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][0]["DESCRIPTION"]?>">
                                </div>
                                <div class="idea__picture-img --bg rellax">
                                    <img src="<?=$item["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][1]["SRC"]?>" alt="<?=$item["DISPLAY_PROPERTIES"]["IMG_BLOCK"]["FILE_VALUE"][1]["DESCRIPTION"]?>">
                                </div>
                            </div>
                        <?endif;?>
                    </div>
                <?endif;?>
                <?if($item["DISPLAY_PROPERTIES"]["BENEFITS"]["VALUE"]["TEXT"] != ""):?>
                    <div class="idea__a">
                        <?=$item["DISPLAY_PROPERTIES"]["BENEFITS"]["~VALUE"]["TEXT"];?>
                    </div>
                <?endif;?>
                <?if($item["DISPLAY_PROPERTIES"]["SLIDER"]["VALUE"] !=""):?>
                    <?$arSlides = getSlides($item["DISPLAY_PROPERTIES"]["SLIDER"]["VALUE"]);?>
                    <?//echo "<pre>"; print_r($arSlides); echo "</pre>";?>
                    <div class="about__content">
                        <?foreach ($arSlides as $slide):?>
                            <?$activeSlide = "";
                            if($slide["PROPERTY_ACTIVE_SLIDE_VALUE"] != ""){
                                $activeSlide = " active";
                            }?>
                            <div class="about__item increase__item<?=$activeSlide?>">
                                <div class="about__item-info">
                                    <?if($slide["PIC_SRC"]):?>
                                        <img src="<?=$slide["PIC_SRC"]?>" alt="<?=$slide["NAME"]?>">
                                    <?endif;?>
                                    <div class="about__item-num"><?=$slide["NAME"]?>.</div>
                                </div>
                                <div class="about__item-text"><?=$slide["PREVIEW_TEXT"]?></div>
                            </div>
                        <?endforeach;?>

                    </div>
                <?endif;?>
            </div>
        <?endforeach;?>
    </div>
<? endif ?>