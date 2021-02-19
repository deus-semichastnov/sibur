<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<?//echo "<pre>"; print_r($arResult); echo "</pre>";?>
<? if (!empty($arResult)): ?>
    <h3 class="heading-tertiary">Зачем</h3>
    <h2 class="heading-secondary">Почему СИБУР нуждается в вашем предложении?</h2>
    <div class="why__picture">
        <div class="why__picture-img --bg">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/why-1.png" alt="Зачем">
        </div>
        <div class="why__picture-img rellax --anim">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/why-2.png" alt="Почему СИБУР нуждается в вашем предложении?">
        </div>
    </div>
    <div class="why__tabs">
        <div class="why__tabs-info">
            <div class="why__tabs-btn active">
                <div class="why__tabs-checkbox"></div>
                Технологически вызовы
            </div>
            <div class="why__tabs-btn">
                <div class="why__tabs-checkbox"></div>
                Культура компании
            </div>
            <div class="why__tabs-btn">
                <div class="why__tabs-checkbox"></div>
                Фокус
            </div>
        </div>
        <div class="why__tabs-content show">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#tabs-icon-1"></use>
            </svg>
            <div class="why__tabs-text">У нас много актуальных технологических вызовов, которые
                требуют специфичных и кастомных решений
            </div>
        </div>
        <div class="why__tabs-content">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#tabs-icon-1"></use>
            </svg>
            <div class="why__tabs-text">Уникальные и нестандартные задачи решаются с помощью передовых
                технологий, неожиданных идей и талантов, которые объединяются здесь, в СИБУРЕ. Мы
                нацелены на раскрытие и объединении всех участников, ведь именно так возможно решить
                самые неординарные задачи.
            </div>
        </div>
        <div class="why__tabs-content">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-main.svg#tabs-icon-1"></use>
            </svg>
            <div class="why__tabs-text">Новаторские подходы, передовые технологии. Все это мы используем
                для достижения максимального результата. Мы не останавливаемся на достигнутом, каждый
                раз находимся в поиске свежих идей и знаний, совершенствуем технологии и повышаем
                эффективность работы компаний
            </div>
        </div>
    </div>
<? endif ?>