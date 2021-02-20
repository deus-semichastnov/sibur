<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <div class="waves"></div>


    <div class="cookie">
        <div class="cookie__text">Мы используем файлы cookie, чтобы вам было удобнее пользоваться нашим сайтом.
            Используя наш сайт, вы даете согласие на использование файлов cookie. <a href="#">Узнать больше</a>
        </div>
        <div class="cookie__btns">
            <div class="cookie__accept">Принять и продолжить</div>
            <div class="cookie__refuse">Отказаться</div>
        </div>
    </div>


    <section class="start">
        <div class="container">
            <?$APPLICATION->IncludeComponent("bitrix:news.detail","start",Array(
                    "IBLOCK_TYPE" => "screens",
                    "IBLOCK_ID" => "9",
                    "ELEMENT_ID" => 94,
                    "PROPERTY_CODE" => Array("NEXT_BLOCK"),
                    "SET_TITLE" => "N",
                    "SET_CANONICAL_URL" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "BROWSER_TITLE" => "-",
                    "SET_META_KEYWORDS" => "N",
                    "META_KEYWORDS" => "-",
                    "SET_META_DESCRIPTION" => "N",
                    "META_DESCRIPTION" => "-",
                    "SET_STATUS_404" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "USE_PERMISSIONS" => "N",
                    "CACHE_TYPE" => "N",
                    "CACHE_TIME" => "3600",
                    "CACHE_GROUPS" => "Y",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => "",
                )
            );?>

        </div>
    </section>


    <div class="main-fake"></div>


    <main class="main">


        <section class="idea" id="idea">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:news.list","two_screen",Array(
                        "IBLOCK_TYPE" => "screens",
                        "IBLOCK_ID" => "10",
                        "NEWS_COUNT" => "3",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => Array("ID"),
                        "PROPERTY_CODE" => Array("TITLE_BLOCK","TEXT_BLOCK","NEXT_BLOCK","IMG_BLOCK","SLIDER","BENEFITS",),
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_FILTER" => "Y",
                        "CACHE_GROUPS" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => ""
                    )
                );?>
            </div>
        </section>




        <section class="why" id="why">
            <div class="container">
                <div class="why__wrap">
                    <?$APPLICATION->IncludeComponent("bitrix:news.detail","why_wrap_1",Array(
                            "IBLOCK_TYPE" => "screens",
                            "IBLOCK_ID" => "12",
                            "ELEMENT_ID" => 106,
                            "PROPERTY_CODE" => Array("NEXT_BLOCK","TITLE_BLOCK","IMG_BLOCK","SLIDER"),
                            "SET_TITLE" => "N",
                            "SET_CANONICAL_URL" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "BROWSER_TITLE" => "-",
                            "SET_META_KEYWORDS" => "N",
                            "META_KEYWORDS" => "-",
                            "SET_META_DESCRIPTION" => "N",
                            "META_DESCRIPTION" => "-",
                            "SET_STATUS_404" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "ADD_ELEMENT_CHAIN" => "N",
                            "USE_PERMISSIONS" => "N",
                            "CACHE_TYPE" => "N",
                            "CACHE_TIME" => "3600",
                            "CACHE_GROUPS" => "Y",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => "",
                        )
                    );?>
                    <?$APPLICATION->IncludeComponent("bitrix:news.detail","why_wrap_2",Array(
                            "IBLOCK_TYPE" => "screens",
                            "IBLOCK_ID" => "12",
                            "ELEMENT_ID" => 107,
                            "PROPERTY_CODE" => Array("NEXT_BLOCK","TITLE_BLOCK","IMG_BLOCK","SLIDER"),
                            "SET_TITLE" => "N",
                            "SET_CANONICAL_URL" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "BROWSER_TITLE" => "-",
                            "SET_META_KEYWORDS" => "N",
                            "META_KEYWORDS" => "-",
                            "SET_META_DESCRIPTION" => "N",
                            "META_DESCRIPTION" => "-",
                            "SET_STATUS_404" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "ADD_ELEMENT_CHAIN" => "N",
                            "USE_PERMISSIONS" => "N",
                            "CACHE_TYPE" => "N",
                            "CACHE_TIME" => "3600",
                            "CACHE_GROUPS" => "Y",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => "",
                        )
                    );?>
                </div>
            </div>
        </section>


        <section class="demand" id="demand">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:news.detail","demand_1",Array(
                        "IBLOCK_TYPE" => "screens",
                        "IBLOCK_ID" => "13",
                        "ELEMENT_ID" => 108,
                        "PROPERTY_CODE" => Array("NEXT_BLOCK","TEXTS"),
                        "SET_TITLE" => "N",
                        "SET_CANONICAL_URL" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "N",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "N",
                        "META_DESCRIPTION" => "-",
                        "SET_STATUS_404" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "USE_PERMISSIONS" => "N",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_GROUPS" => "Y",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                    )
                );?>
                <?$APPLICATION->IncludeComponent("bitrix:news.detail","demand_d",Array(
                        "IBLOCK_TYPE" => "screens",
                        "IBLOCK_ID" => "13",
                        "ELEMENT_ID" => 109,
                        "PROPERTY_CODE" => Array("NEXT_BLOCK","TEXTS"),
                        "SET_TITLE" => "N",
                        "SET_CANONICAL_URL" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "N",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "N",
                        "META_DESCRIPTION" => "-",
                        "SET_STATUS_404" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "USE_PERMISSIONS" => "N",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_GROUPS" => "Y",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                    )
                );?>
                <?$APPLICATION->IncludeComponent("bitrix:news.detail","demand_steps",Array(
                        "IBLOCK_TYPE" => "screens",
                        "IBLOCK_ID" => "13",
                        "ELEMENT_ID" => 110,
                        "PROPERTY_CODE" => Array("NEXT_BLOCK","TEXTS"),
                        "SET_TITLE" => "N",
                        "SET_CANONICAL_URL" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "N",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "N",
                        "META_DESCRIPTION" => "-",
                        "SET_STATUS_404" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "USE_PERMISSIONS" => "N",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "3600",
                        "CACHE_GROUPS" => "Y",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                    )
                );?>
            </div>
        </section>
        <?$APPLICATION->IncludeComponent("bitrix:news.detail","cases",Array(
                "IBLOCK_TYPE" => "screens",
                "IBLOCK_ID" => "14",
                "ELEMENT_ID" => 111,
                "PROPERTY_CODE" => Array("NEXT_BLOCK","TITLE_BLOCK","CASES"),
                "SET_TITLE" => "N",
                "SET_CANONICAL_URL" => "N",
                "SET_BROWSER_TITLE" => "N",
                "BROWSER_TITLE" => "-",
                "SET_META_KEYWORDS" => "N",
                "META_KEYWORDS" => "-",
                "SET_META_DESCRIPTION" => "N",
                "META_DESCRIPTION" => "-",
                "SET_STATUS_404" => "N",
                "LINK" => "#",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_ELEMENT_CHAIN" => "N",
                "USE_PERMISSIONS" => "N",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_GROUPS" => "Y",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
            )
        );?>
        <?$APPLICATION->IncludeComponent("bitrix:news.detail","development",Array(
                "IBLOCK_TYPE" => "screens",
                "IBLOCK_ID" => "16",
                "ELEMENT_ID" => 121,
                "PROPERTY_CODE" => Array("NEXT_BLOCK","TITLE_BLOCK","CASES"),
                "SET_TITLE" => "N",
                "SET_CANONICAL_URL" => "N",
                "SET_BROWSER_TITLE" => "N",
                "BROWSER_TITLE" => "-",
                "SET_META_KEYWORDS" => "N",
                "META_KEYWORDS" => "-",
                "SET_META_DESCRIPTION" => "N",
                "META_DESCRIPTION" => "-",
                "SET_STATUS_404" => "N",
                "LINK" => "#",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_ELEMENT_CHAIN" => "N",
                "USE_PERMISSIONS" => "N",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_GROUPS" => "Y",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
            )
        );?>

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
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>