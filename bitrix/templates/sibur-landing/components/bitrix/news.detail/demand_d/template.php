<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <div class="demand__d">
        <h3 class="heading-tertiary">требования</h3>
        <h2 class="heading-secondary">Минимальные
            требования к командам</h2>
        <div class="demand__d-content">
            <div class="demand__d-item">
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                </svg>
                <div class="demand__d-text">У вас есть одна или несколько ключевых специализаций</div>
            </div>
            <div class="demand__d-item">
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                </svg>
                <div class="demand__d-text">Готовы сотрудничать с другими командами и бизнес-заказчиками
                    в рамках разработки или внедрения комплексного решения
                </div>
            </div>
            <div class="demand__d-item">
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                </svg>
                <div class="demand__d-text">Достаточно опыта и квалификации, чтобы самостоятельно
                    разрабатывать или внедрять
                    решения / части решения
                </div>
            </div>
            <div class="demand__d-item">
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                </svg>
                <div class="demand__d-text">У вас есть опыт создания кастомного продукта в течение
                    последних 12 месяцев
                </div>
            </div>
            <div class="demand__d-item">
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                </svg>
                <div class="demand__d-text">Вам интересна тема разработки решений, которых еще нет на
                    рынке
                </div>
            </div>
            <div class="demand__d-item">
                <svg>
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                </svg>
                <div class="demand__d-text">Вы готовы работать в сжатых сроках (прототип за 3 месяца)
                </div>
            </div>
        </div>
    </div>
<? endif ?>