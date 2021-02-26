<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<? if (!empty($arResult["ITEMS"])): ?>
    <?//echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>
    <?foreach ($arResult["ITEMS"] as $item):?>
        <?if($item["PROPERTIES"]["TYPE"]["VALUE_XML_ID"] == "text"):?>
            <h3 class="single__subtitle"><?=$item["NAME"]?></h3>
            <?=$item["~DETAIL_TEXT"];?>
        <?endif;?>
        <?if($item["PROPERTIES"]["TYPE"]["VALUE_XML_ID"] == "slider" && $item["PROPERTIES"]["PICS"]["VALUE"][0]):?>
            <div class="single__slider swiper-container">
                <div class="swiper-wrapper">
                    <?foreach($item["DISPLAY_PROPERTIES"]["PICS"]["FILE_VALUE"] as $file):?>
                        <div class="swiper-slide single__slider-item">
                            <img src="<?=$file["SRC"]?>" alt="<?=$file["DESCRIPTION"]?>">
                        </div>
                    <?endforeach?>
                </div>
            </div>
            <div class="single__slider-pagin"></div>
        <?endif;?>
        <?if($item["PROPERTIES"]["TYPE"]["VALUE_XML_ID"] == "quote" && $item["PROPERTIES"]["QUOTE"]["VALUE"]["TEXT"]):?>
            <div class="single__quote">
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-quote"></use>
                </svg>
                <div class="single__quote-content">
                    <div class="single__quote-text"><?=$item["PROPERTIES"]["QUOTE"]["~VALUE"]["TEXT"]?></div>
                    <div class="single__quote-person">
                        <?if($item["DISPLAY_PROPERTIES"]["PHOTO_QUOTE"]["FILE_VALUE"]["SRC"]):?>
                            <img src="<?=$item["DISPLAY_PROPERTIES"]["PHOTO_QUOTE"]["FILE_VALUE"]["SRC"]?>" alt="<?=$item["PROPERTIES"]["FIO_QUOTE"]["VALUE"]?>" class="single__quote-photo">
                        <?endif;?>
                        <div class="single__quote-name">
                            <?if($item["DISPLAY_PROPERTIES"]["FIO_QUOTE"]["VALUE"]):?>
                                <div class="single__quote-name-n"><?=$item["PROPERTIES"]["FIO_QUOTE"]["VALUE"]?></div>
                            <?endif;?>
                            <?if($item["DISPLAY_PROPERTIES"]["FIO_QUOTE"]["VALUE"]):?>
                                <div class="single__quote-post"><?=$item["PROPERTIES"]["DESC_QUOTE"]["VALUE"]?></div>
                            <?endif;?>
                        </div>
                    </div>
                </div>
            </div>
        <?endif;?>
    <?endforeach;?>
<? endif ?>