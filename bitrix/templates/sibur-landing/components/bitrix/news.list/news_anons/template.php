<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<? if (!empty($arResult["ITEMS"])): ?>
    <?//echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>
    <section class="news --section section" data-href="news">
        <div class="container">
            <h3 class="heading-tertiary" data-aos="fade-up" data-aos-duration="1500"><?=$arResult["NAME"]?></h3>
            <div class="news__head">
                <h2 class="heading-secondary" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200"><?=GetMessage("EVENT_ANNOUNCEMENTS")?></h2>
                <a href="/news/" class="news__all"><?=GetMessage("ALL_NEWS")?></a>
            </div>

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