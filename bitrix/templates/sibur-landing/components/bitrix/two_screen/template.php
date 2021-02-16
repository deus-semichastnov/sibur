<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<?//echo "<pre>"; print_r($arResult); echo "</pre>";?>
<? if (!empty($arResult)): ?>
    <div class="idea__wrap">
        <div class="idea__elem">
            <h3 class="heading-tertiary">сибур</h3>
            <h2 class="heading-secondary">Крупнейшая нефтехимическая компания в России</h2>
            <div class="idea__descr">На пути цифровизации принимает ваши предложения по модернизации
                бизнеса
                и внедрению новых продуктов.
            </div>
            <div class="idea__picture">
                <h4 class="heading-quaternary">• идея</h4>
                <div class="idea__picture-wrap">
                    <div class="idea__picture-img"><img src="<?=SITE_TEMPLATE_PATH?>/img/idea-1.png"
                                                        alt="Крупнейшая нефтехимическая компания в России">
                    </div>
                    <div class="idea__picture-img --bg rellax"><img src="<?=SITE_TEMPLATE_PATH?>/img/idea-2.svg" alt="сибур">
                    </div>
                </div>
            </div>
        </div>
        <div class="idea__elem">
            <h3 class="heading-tertiary">Идея</h3>
            <h2 class="heading-secondary">Компания СИБУР приглашает к сотрудничеству </h2>
            <div class="idea__descr">Коллективы и команды, которые готовы предложить новые уникальные
                промышленные решения для трансформации различных направлений деятельности компании
            </div>
            <div class="idea__a">
                <div class="idea__cta">
                    <div class="idea__cta-text">Коллективы и команды, которые готовы предложить новые
                        уникальные промышленные решения для трансформации различных направлений
                        деятельности компании
                    </div>
                    <div class="idea__cta-title">У вас есть, что нам предложить?</div>
                    <div class="idea__cta-time">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#watch-icon"></use>
                        </svg>
                        всего 15 минут
                    </div>
                    <a href="#quest" class="btn --green fancybox-link">
                        Заполните анкету
                        <div class="btn__plus">
                            <div class="btn__plus-round"></div>
                            <div class="btn__plus-p"></div>
                        </div>
                    </a>
                </div>
                <div class="idea__info">
                    <div class="idea__info-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#idea-icon-1"></use>
                        </svg>
                        <div class="idea__info-text">Технологические стартапы и компании</div>
                    </div>
                    <div class="idea__info-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#idea-icon-2"></use>
                        </svg>
                        <div class="idea__info-text">Научные коллективы</div>
                    </div>
                    <div class="idea__info-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#idea-icon-3"></use>
                        </svg>
                        <div class="idea__info-text">НИИ и лаборатории</div>
                    </div>
                    <div class="idea__info-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#idea-icon-4"></use>
                        </svg>
                        <div class="idea__info-text">Инновационные команды</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? endif ?>