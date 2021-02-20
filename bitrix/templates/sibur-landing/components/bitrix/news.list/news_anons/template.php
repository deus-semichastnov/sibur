<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<? if (!empty($arResult)): ?>
    <section class="news --section">
        <div class="container">
            <h3 class="heading-tertiary">новости</h3>
            <div class="news__head">
                <h2 class="heading-secondary">Анонсы событий</h2>
                <a href="news.html" class="news__all">Все новости</a>
            </div>

            <div class="news__content swiper-container">
                <div class="swiper-wrapper">
                    <a href="single.html" class="news__item swiper-slide">
                        <div class="news__img">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/news/news-1.png"
                                 alt="Новая модель организационной деятельности сделала своё дело">
                        </div>
                        <div class="news__date">28 Января 2021</div>
                        <div class="news__name">Новая модель организационной деятельности сделала своё дело</div>
                    </a>
                    <a href="single.html" class="news__item swiper-slide">
                        <div class="news__img">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/news/news-2.png"
                                 alt="Светлый лик правового взаимодействия продолжает удивлять">
                        </div>
                        <div class="news__date">1 Февраля 2021</div>
                        <div class="news__name">Светлый лик правового взаимодействия продолжает удивлять</div>
                    </a>
                    <a href="single.html" class="news__item swiper-slide">
                        <div class="news__img">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/news/news-3.png"
                                 alt="Выбранный нами инновационный путь развеял последние сомнения">
                        </div>
                        <div class="news__date">3 Марта 2021</div>
                        <div class="news__name">Выбранный нами инновационный путь развеял последние сомнения</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<? endif ?>