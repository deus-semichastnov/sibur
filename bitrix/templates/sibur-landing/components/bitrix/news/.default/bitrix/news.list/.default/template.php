<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="news">
    <div class="container">
        <h3 class="heading-tertiary"><?$arResult["NAME"]?></h3>
        <h2 class="heading-secondary">Анонсы событий</h2>

        <div class="news__content">
            <? if (!empty($arResult["ITEMS"])): ?>
                <?foreach ($arResult["ITEMS"] as $item):?>
                    <a href="<?=$item["DETAIL_PAGE_URL"]?>" class="news__item">
                        <div class="news__img">
                            <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["NAME"]?>">
                        </div>
                        <div class="news__date"><?=$item["DISPLAY_ACTIVE_FROM"]?></div>
                        <div class="news__name"><?=$item["NAME"]?></div>
                        <div class="news__read">
                            Читать
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-read"></use>
                            </svg>
                        </div>
                    </a>
                <?endforeach;?>
            <?else:?>
                Новостей нет.
            <?endif;?>
        </div>
    </div>
</section>