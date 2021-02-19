<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<?//echo "<pre>"; print_r($arResult); echo "</pre>";?>
<? if (!empty($arResult)): ?>
    <div class="why__offer">
        <div class="why__offer-wrap">
            <div class="why__offer-title">
                <h3 class="heading-tertiary">Уже есть, готовые проекты?</h3>
                <h2 class="heading-secondary">Вы можете предложить </h2>
            </div>
            <div class="why__offer-content">
                <div class="why__offer-item active increase__item">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#why-icon-1"></use>
                    </svg>
                    <div class="why__offer-descr">Цифровое решение для конкретных бизнес-задач
                    </div>
                    <a href="#quest" class="btn --white fancybox-link">
                        Предложить
                        <div class="btn__plus">
                            <div class="btn__plus-round"></div>
                            <div class="btn__plus-p"></div>
                        </div>
                    </a>
                </div>
                <div class="why__offer-item increase__item">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#why-icon-2"></use>
                    </svg>
                    <div class="why__offer-descr">Представить собственную технологию по другим
                        тематикам
                    </div>
                    <a href="#quest" class="btn --white fancybox-link">
                        Предложить
                        <div class="btn__plus">
                            <div class="btn__plus-round"></div>
                            <div class="btn__plus-p"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <h4 class="heading-quaternary">• 5 причин подать заявку</h4>
    </div>
<? endif ?>