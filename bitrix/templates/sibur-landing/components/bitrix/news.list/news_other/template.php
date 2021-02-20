<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<? if (!empty($arResult["ITEMS"])): ?>
    <?//echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>
    <section class="news --section">
        <div class="container">
            <div class="news__other">Другие новости</div>

            <div class="news__content swiper-container">
                <div class="swiper-wrapper">
                    <?foreach ($arResult["ITEMS"] as $item):?>
                        <a href="<?=$item["DETAIL_PAGE_URL"]?>" class="news__item swiper-slide">
                            <div class="news__img">
                                <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["NAME"]?>">
                            </div>
                            <div class="news__date"><?=$item["DISPLAY_ACTIVE_FROM"]?></div>
                            <div class="news__name"><?=$item["NAME"]?></div>
                        </a>
                    <?endforeach;?>
                </div>
            </div>
        </div>
    </section>
<? endif ?>