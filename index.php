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

        <!-- БЛОК БЕЗ КЕЙСОВ -->
        <section class="cases --offer" id="cases">
            <div class="container">
                <div class="cases__wrap">
                    <div class="cases__head">
                        <h3 class="heading-tertiary">Для кого</h3>
                        <h2 class="heading-secondary">Какие компетенции мы ищем в первую очередь</h2>
                        <div class="cases__subtitle">В 2017 году СИБУР анонсировал масштабную цифровую трансформацию
                            – повышение эффективности за счёт внедрения новых технологий по всей цепочке создания
                            ценности»
                        </div>
                    </div>
                    <div class="cases__content">
                        <div class="cases__info">
                            <div class="cases__info-text">Здесь мы создаём и внедряем новые цифровые продукты, которые
                                позволяют оптимизировать бизнес-процессы, а также повысить уровень эффективности
                                компании
                            </div>
                        </div>
                        <div class="cases__c">
                            <div class="cases__item">
                                <div class="cases__item-text">У Вас есть идеи или новый продукт? Подайте заявку уже
                                    сейчас и мы обязательно с Вами свяжемся
                                </div>
                                <a href="#quest" class="btn --white fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h4 class="heading-quaternary">• разработки</h4>
                </div>
            </div>
        </section>
        <!-- БЛОК С КЕЙСАМИ -->
        <section class="cases" id="cases">
            <div class="container">
                <div class="cases__wrap">
                    <div class="cases__head">
                        <h3 class="heading-tertiary">Для кого</h3>
                        <h2 class="heading-secondary">Какие компетенции мы ищем в первую очередь</h2>
                        <div class="cases__subtitle">Перед СИБУР на данный момент стоят приоритетные бизнес-задачи по
                            следующим направлениям:
                        </div>
                    </div>
                    <div class="cases__content">
                        <div class="cases__info">
                            <div class="cases__slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="cases__slider-item active" data-item="0">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №1</div>
                                                <div class="cases__slider-descr">Морская логистика</div>
                                            </div>
                                        </div>
                                        <div class="cases__slider-item" data-item="1">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №2</div>
                                                <div class="cases__slider-descr">Кейс по дефектоскопии контейнеров</div>
                                            </div>
                                        </div>
                                        <div class="cases__slider-item" data-item="2">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №3</div>
                                                <div class="cases__slider-descr">Кейс по созданию блокчен-системы</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cases__slider-item" data-item="3">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №4</div>
                                                <div class="cases__slider-descr">Lorem, ipsum.</div>
                                            </div>
                                        </div>
                                        <div class="cases__slider-item" data-item="4">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №5</div>
                                                <div class="cases__slider-descr">Lorem ipsum dolor sit.</div>
                                            </div>
                                        </div>
                                        <div class="cases__slider-item" data-item="5">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №6</div>
                                                <div class="cases__slider-descr">lorem</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cases__slider-item" data-item="6">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №7</div>
                                                <div class="cases__slider-descr">Lorem ipsum dolor sit amet.</div>
                                            </div>
                                        </div>
                                        <div class="cases__slider-item" data-item="7">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №8</div>
                                                <div class="cases__slider-descr">Lorem, ipsum.</div>
                                            </div>
                                        </div>
                                        <div class="cases__slider-item" data-item="8">
                                            <div class="cases__slider-check"></div>
                                            <div class="cases__slider-text">
                                                <div class="cases__slider-num">Кейс №9</div>
                                                <div class="cases__slider-descr">Lorem, ipsum dolor.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cases__slider-nav">
                                <div class="cases__slider-prev">
                                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle r="19.3174" transform="matrix(-1 0 0 1 19.9853 20.263)"
                                                stroke="#DBDDDF"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M17.1832 15.9177L12.8384 20.2625L17.1832 24.6072L18.1355 23.6548L15.4166 20.9359H27.1328V19.589H15.4166L18.1355 16.8701L17.1832 15.9177Z"
                                              fill="white"/>
                                    </svg>
                                </div>
                                <div class="cases__slider-amount"><span class="current">3</span> из <span
                                            class="total">9</span> кейсов
                                </div>
                                <div class="cases__slider-next">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.4239" cy="20.3958" r="19.3174" stroke="#DBDDDF"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M23.2265 16.0505L27.5713 20.3953L23.2265 24.74L22.2741 23.7877L24.9931 21.0687H13.2769V19.7219H24.9931L22.2741 17.0029L23.2265 16.0505Z"
                                              fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="cases__text">Если у Вас есть инновационное решение/ продукт
                                <span>по другим тематикам</span>, Вы также можете направить
                                нам информацию
                            </div>
                            <a href="#quest" class="btn --green fancybox-link">
                                Предложить свой продукт
                                <div class="btn__plus">
                                    <div class="btn__plus-round"></div>
                                    <div class="btn__plus-p"></div>
                                </div>
                            </a>
                        </div>
                        <div class="cases__c --cases">

                            <div class="cases__dummy default active-1"></div>
                            <div class="cases__dummy default active-2"></div>
                            <div class="cases__dummy active-3"></div>

                            <div class="cases__item active" data-case="0">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №1</div>
                                    <div class="cases__item-subtitle">Морская логистика</div>
                                </div>
                                <div class="cases__item-title">Разработать датчик температуры
                                    и вибрации двигателей:
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Работающий от батарейки не менее
                                        4х лет
                                    </div>
                                    <div class="cases__item-list-item"><span>2.</span> При темп. эксплуатации от -55
                                        градусов
                                    </div>
                                    <div class="cases__item-list-item"><span>3.</span> С радиомодулем LoRaWAN</div>
                                    <div class="cases__item-list-item"><span>4.</span> Во взрывозащищенном исполнении
                                    </div>
                                </div>
                                <div class="cases__item-text">Задача нетривиальная, потому что компоненты датчика, в
                                    частности радиомодули LoRaWAN, работают только до -40 градусов и меньше не
                                    производятся.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="cases__item" data-case="1">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №2</div>
                                    <div class="cases__item-subtitle">Кейс по дефектоскопии контейнеров</div>
                                </div>
                                <div class="cases__item-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Alias, incidunt!
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>2.</span> Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Odit, et?
                                    </div>
                                    <div class="cases__item-list-item"><span>3.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>4.</span> Lorem, ipsum dolor sit amet
                                        consectetur adipisicing elit. Quam laudantium dignissimos excepturi, aspernatur
                                        explicabo dolores.
                                    </div>
                                </div>
                                <div class="cases__item-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Animi laboriosam consequuntur corporis labore laudantium aliquam officia recusandae
                                    corrupti, inventore reprehenderit incidunt itaque praesentium assumenda accusantium
                                    ex, nam nesciunt dolorem suscipit.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="cases__item" data-case="2">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №3</div>
                                    <div class="cases__item-subtitle">Кейс по созданию блокчен-системы</div>
                                </div>
                                <div class="cases__item-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Ad, repudiandae!
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Lorem ipsum dolor sit amet
                                        consectetur, adipisicing elit. Harum temporibus ullam a neque, fuga enim.
                                    </div>
                                    <div class="cases__item-list-item"><span>2.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>3.</span> Lorem ipsum dolor sit.</div>
                                    <div class="cases__item-list-item"><span>4.</span> Lorem, ipsum dolor.</div>
                                </div>
                                <div class="cases__item-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores placeat at temporibus nesciunt perferendis corporis ducimus atque quasi
                                    magnam, vitae dolorem praesentium ipsum fugit enim.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="cases__item" data-case="3">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №4</div>
                                    <div class="cases__item-subtitle">Морская логистика</div>
                                </div>
                                <div class="cases__item-title">Разработать датчик температуры
                                    и вибрации двигателей:
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Работающий от батарейки не менее
                                        4х лет
                                    </div>
                                    <div class="cases__item-list-item"><span>2.</span> При темп. эксплуатации от -55
                                        градусов
                                    </div>
                                    <div class="cases__item-list-item"><span>3.</span> С радиомодулем LoRaWAN</div>
                                    <div class="cases__item-list-item"><span>4.</span> Во взрывозащищенном исполнении
                                    </div>
                                </div>
                                <div class="cases__item-text">Задача нетривиальная, потому что компоненты датчика, в
                                    частности радиомодули LoRaWAN, работают только до -40 градусов и меньше не
                                    производятся.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="cases__item" data-case="4">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №5</div>
                                    <div class="cases__item-subtitle">Кейс по дефектоскопии контейнеров</div>
                                </div>
                                <div class="cases__item-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Alias, incidunt!
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>2.</span> Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Odit, et?
                                    </div>
                                    <div class="cases__item-list-item"><span>3.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>4.</span> Lorem, ipsum dolor sit amet
                                        consectetur adipisicing elit. Quam laudantium dignissimos excepturi, aspernatur
                                        explicabo dolores.
                                    </div>
                                </div>
                                <div class="cases__item-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Animi laboriosam consequuntur corporis labore laudantium aliquam officia recusandae
                                    corrupti, inventore reprehenderit incidunt itaque praesentium assumenda accusantium
                                    ex, nam nesciunt dolorem suscipit.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="cases__item" data-case="5">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №6</div>
                                    <div class="cases__item-subtitle">Кейс по созданию блокчен-системы</div>
                                </div>
                                <div class="cases__item-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Ad, repudiandae!
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Lorem ipsum dolor sit amet
                                        consectetur, adipisicing elit. Harum temporibus ullam a neque, fuga enim.
                                    </div>
                                    <div class="cases__item-list-item"><span>2.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>3.</span> Lorem ipsum dolor sit.</div>
                                    <div class="cases__item-list-item"><span>4.</span> Lorem, ipsum dolor.</div>
                                </div>
                                <div class="cases__item-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores placeat at temporibus nesciunt perferendis corporis ducimus atque quasi
                                    magnam, vitae dolorem praesentium ipsum fugit enim.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="cases__item" data-case="6">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №7</div>
                                    <div class="cases__item-subtitle">Морская логистика</div>
                                </div>
                                <div class="cases__item-title">Разработать датчик температуры
                                    и вибрации двигателей:
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Работающий от батарейки не менее
                                        4х лет
                                    </div>
                                    <div class="cases__item-list-item"><span>2.</span> При темп. эксплуатации от -55
                                        градусов
                                    </div>
                                    <div class="cases__item-list-item"><span>3.</span> С радиомодулем LoRaWAN</div>
                                    <div class="cases__item-list-item"><span>4.</span> Во взрывозащищенном исполнении
                                    </div>
                                </div>
                                <div class="cases__item-text">Задача нетривиальная, потому что компоненты датчика, в
                                    частности радиомодули LoRaWAN, работают только до -40 градусов и меньше не
                                    производятся.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="cases__item" data-case="7">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №8</div>
                                    <div class="cases__item-subtitle">Кейс по дефектоскопии контейнеров</div>
                                </div>
                                <div class="cases__item-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Alias, incidunt!
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>2.</span> Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Odit, et?
                                    </div>
                                    <div class="cases__item-list-item"><span>3.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>4.</span> Lorem, ipsum dolor sit amet
                                        consectetur adipisicing elit. Quam laudantium dignissimos excepturi, aspernatur
                                        explicabo dolores.
                                    </div>
                                </div>
                                <div class="cases__item-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Animi laboriosam consequuntur corporis labore laudantium aliquam officia recusandae
                                    corrupti, inventore reprehenderit incidunt itaque praesentium assumenda accusantium
                                    ex, nam nesciunt dolorem suscipit.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="cases__item" data-case="8">
                                <div class="cases__item-head">
                                    <div class="cases__item-num">Кейс №9</div>
                                    <div class="cases__item-subtitle">Кейс по созданию блокчен-системы</div>
                                </div>
                                <div class="cases__item-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Ad, repudiandae!
                                </div>
                                <div class="cases__item-list">
                                    <div class="cases__item-list-item"><span>1.</span> Lorem ipsum dolor sit amet
                                        consectetur, adipisicing elit. Harum temporibus ullam a neque, fuga enim.
                                    </div>
                                    <div class="cases__item-list-item"><span>2.</span> Lorem ipsum dolor sit amet.</div>
                                    <div class="cases__item-list-item"><span>3.</span> Lorem ipsum dolor sit.</div>
                                    <div class="cases__item-list-item"><span>4.</span> Lorem, ipsum dolor.</div>
                                </div>
                                <div class="cases__item-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores placeat at temporibus nesciunt perferendis corporis ducimus atque quasi
                                    magnam, vitae dolorem praesentium ipsum fugit enim.
                                </div>
                                <a href="#quest" class="btn --green fancybox-link">
                                    Подать заявку
                                    <div class="btn__plus">
                                        <div class="btn__plus-round"></div>
                                        <div class="btn__plus-p"></div>
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>
                    <h4 class="heading-quaternary">• разработки</h4>
                </div>
            </div>
        </section>
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>