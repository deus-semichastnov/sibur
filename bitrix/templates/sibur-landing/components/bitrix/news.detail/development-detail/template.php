<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <div class="panel panel--1">
        <div class="panel__close">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#panel-close"></use>
            </svg>
        </div>
        <?echo "<pre>"; print_r($arResult); echo "</pre>";?>
    </div>
    <?/*<div class="panel panel--1">
        <div class="panel__close">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#panel-close"></use>
            </svg>
        </div>
        <h3 class="heading-tertiary">IIoT датчики</h3>
        <h2 class="heading-secondary">Система виброконтроля EXV-01</h2>
        <div class="panel__sensor">

            <div class="panel__sert">
                <div class="panel__title">Сертификат взрывозащиты</div>
                <div class="panel__sert-item">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                    </svg>
                    ЕАЭС RU C-RU. AM02.B.00375/20 Серия RU №0205725
                </div>
            </div>

            <div class="panel__area">
                <div class="panel__title">Области применения</div>
                <div class="panel__area-wrap panel__check">
                    <div class="panel__area-item panel__check-item">
                        Любое динамическое оборудование с частотами вращения вала от 5 до 1000 Гц, подлежащее контролю
                        по показателю СКЗ виброскорости
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Замена «виброручки»
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Решение задач по контролю перемещения персонала и техники
                    </div>
                </div>
            </div>

            <a href="#" class="panel__presentation" download>
                <svg class="panel__presentation-doc">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                </svg>
                Скачать презентацию
                <svg class="panel__presentation-download">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-download"></use>
                </svg>
            </a>

            <div class="panel__cta">
                <div class="panel__cta-subtitle">Если Вас заинтересовал этот продукт</div>
                <div class="panel__cta-mail">
                    Напишите нам на почту
                    <a href="mailto:innovation-center@sibur.ru">Заявка на Демо</a>
                </div>
            </div>

            <div class="panel__specific">
                <div class="panel__title">Технические характиристики</div>
                <div class="panel__range">
                    <div class="panel__range-descr">Температура эксплуатации и сохранение свойств взрывозащиты в
                        диапазоне <span>(C˚)</span></div>
                    <div class="panel__range-wrap">
                        <div class="panel__range-r panel__range-r--1"></div>
                        <div class="panel__range-temp">
                            <div class="panel__range-num">-100</div>
                            <div class="panel__range-num --strong">-56</div>
                            <div class="panel__range-num">0</div>
                            <div class="panel__range-num --strong">50</div>
                            <div class="panel__range-num">100</div>
                        </div>
                    </div>
                </div>
                <div class="panel__range">
                    <div class="panel__range-descr">Диапазон измеряемых температур <span>(C˚)</span></div>
                    <div class="panel__range-wrap">
                        <div class="panel__range-r panel__range-r--2"></div>
                        <div class="panel__range-temp">
                            <div class="panel__range-num">-100</div>
                            <div class="panel__range-num --strong">-55</div>
                            <div class="panel__range-num">0</div>
                            <div class="panel__range-num">50</div>
                            <div class="panel__range-num --strong">200</div>
                        </div>
                    </div>
                </div>
                <div class="panel__specific-content">
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-1"></use>
                        </svg>
                        Измерение СКЗ виброскорости по 3 осям
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-2"></use>
                        </svg>
                        Взрывозащита 1ExiaIICT4GbX
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-3"></use>
                        </svg>
                        Диапазон измерения СКЗ виброскорости 0,1 ÷ 50 мм/с, на частотах 5 ÷ 1000 Гц
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-4"></use>
                        </svg>
                        Точность 5% на всём диапазоне
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-5"></use>
                        </svg>
                        Беспроводная передача данных по протоколу LoRaWAN
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel--2">
        <div class="panel__close">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#panel-close"></use>
            </svg>
        </div>

        <h3 class="heading-tertiary">IIoT датчики</h3>
        <h2 class="heading-secondary">Датчик контроля температуры EXT-01</h2>

        <div class="panel__sensor">

            <div class="panel__specific">
                <div class="panel__title">Технические характиристики</div>
                <div class="panel__range">
                    <div class="panel__range-descr">Рабочий диапазон температур <span>(C˚)</span></div>
                    <div class="panel__range-wrap">
                        <div class="panel__range-r panel__range-r--1"></div>
                        <div class="panel__range-temp">
                            <div class="panel__range-num">-100</div>
                            <div class="panel__range-num --strong">-56</div>
                            <div class="panel__range-num">0</div>
                            <div class="panel__range-num --strong">50</div>
                            <div class="panel__range-num">100</div>
                        </div>
                    </div>
                </div>
                <div class="panel__range">
                    <div class="panel__range-descr">Диапазон измеряемых температур <span>(C˚)</span></div>
                    <div class="panel__range-wrap">
                        <div class="panel__range-r panel__range-r--2"></div>
                        <div class="panel__range-temp">
                            <div class="panel__range-num">-100</div>
                            <div class="panel__range-num --strong">-55</div>
                            <div class="panel__range-num">0</div>
                            <div class="panel__range-num">50</div>
                            <div class="panel__range-num --strong">125</div>
                        </div>
                    </div>
                </div>
                <div class="panel__specific-content">
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-1"></use>
                        </svg>
                        Удалённое конфигурирование
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-2"></use>
                        </svg>
                        Взрывозащита 1ExiaIICT4GbX
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-6"></use>
                        </svg>
                        Удалённая настройка интервалов между отправкой данных от 1 минуты до 24 часов
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-7"></use>
                        </svg>
                        Время работы до замены батареи – 5 лет
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-5"></use>
                        </svg>
                        Беспроводная передача данных по протоколу LoRaWAN
                    </div>
                </div>
            </div>

            <div class="panel__sert">
                <div class="panel__title">Сертификат взрывозащиты</div>
                <div class="panel__sert-item">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                    </svg>
                    ЕАЭС RU C-RU AM02.B.00300/20 Серия RU
                    №0205646
                </div>
            </div>

            <div class="panel__area">
                <div class="panel__title">Области применения</div>
                <div class="panel__area-wrap panel__check">
                    <div class="panel__area-item panel__check-item">
                        Сбор недостающей информации о температуре технологических сред для инструментов
                        аналитики
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Теплоспутники
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Контроль систем обогрева КИПиА
                    </div>
                </div>
            </div>

            <a href="#" class="panel__presentation" download>
                <svg class="panel__presentation-doc">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                </svg>
                Скачать презентацию
                <svg class="panel__presentation-download">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-download"></use>
                </svg>
            </a>

            <div class="panel__cta">
                <div class="panel__cta-subtitle">Если Вас заинтересовал этот продукт</div>
                <div class="panel__cta-mail">
                    Напишите нам на почту
                    <a href="mailto:innovation-center@sibur.ru">Заявка на Демо</a>
                </div>
            </div>



        </div>
    </div>

    <div class="panel panel--3">

        <div class="panel__close">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#panel-close"></use>
            </svg>
        </div>

        <h3 class="heading-tertiary">IIoT датчики</h3>
        <h2 class="heading-secondary">IBEACON EXB-01</h2>

        <div class="panel__sensor">

            <div class="panel__sert">
                <div class="panel__title">Сертификат взрывозащиты</div>
                <div class="panel__sert-item">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                    </svg>
                    No ЕАЭС RU C-RUAM02.B.00165/19 Серия RU No0171165
                </div>
            </div>

            <div class="panel__area">
                <div class="panel__title">Области применения</div>
                <div class="panel__area-wrap panel__check">
                    <div class="panel__area-item panel__check-item">
                        Внутренние и наружные техно- логические установки с присут- ствием взрывоопасных сред по классу
                        Зона 1
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Позиционирование устройств с Bluetooth модулями
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Позиционирование устройств с Bluetooth модулями
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Решение задач по контролю перемещения персонала и техники
                    </div>
                </div>
            </div>

            <a href="#" class="panel__presentation" download>
                <svg class="panel__presentation-doc">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                </svg>
                Скачать презентацию
                <svg class="panel__presentation-download">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-download"></use>
                </svg>
            </a>

            <div class="panel__cta">
                <div class="panel__cta-subtitle">Если Вас заинтересовал этот продукт</div>
                <div class="panel__cta-mail">
                    Напишите нам на почту
                    <a href="mailto:innovation-center@sibur.ru">Заявка на Демо</a>
                </div>
            </div>

            <div class="panel__specific">
                <div class="panel__title">Технические характиристики</div>
                <div class="panel__range">
                    <div class="panel__range-descr">Взрывозащита 1ExiaIICT4GbX при работе в температурах
                        <span>(C˚)</span></div>
                    <div class="panel__range-wrap">
                        <div class="panel__range-r panel__range-r--1"></div>
                        <div class="panel__range-temp">
                            <div class="panel__range-num">-100</div>
                            <div class="panel__range-num --strong">-56</div>
                            <div class="panel__range-num">0</div>
                            <div class="panel__range-num --strong">50</div>
                            <div class="panel__range-num">100</div>
                        </div>
                    </div>
                </div>
                <div class="panel__range">
                    <div class="panel__range-descr">Диапазон измеряемых температур <span>(C˚)</span></div>
                    <div class="panel__range-wrap">
                        <div class="panel__range-r panel__range-r--1"></div>
                        <div class="panel__range-temp">
                            <div class="panel__range-num">-100</div>
                            <div class="panel__range-num --strong">-40</div>
                            <div class="panel__range-num">0</div>
                            <div class="panel__range-num">55</div>
                            <div class="panel__range-num --strong">100</div>
                        </div>
                    </div>
                </div>
                <div class="panel__range --frequency">
                    <div class="panel__range-descr">Частотный диапазон <span>(МГц)</span></div>
                    <div class="panel__range-wrap">
                        <div class="panel__range-r"></div>
                        <div class="panel__range-temp">
                            <div class="panel__range-num --strong">2402</div>
                            <div class="panel__range-num --strong">2480</div>
                        </div>
                    </div>
                </div>
                <div class="panel__specific-content">
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-2"></use>
                        </svg>
                        Класс защиты от пыли и влаги IP66
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-8"></use>
                        </svg>
                        Настройка мощности радиовещания
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-9"></use>
                        </svg>
                        Настройка периодичности радиовещания
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#specific-icon-5"></use>
                        </svg>
                        Беспроводное обновление программного обеспечения
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel--4">
        <div class="panel__close">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#panel-close"></use>
            </svg>
        </div>
        <h3 class="heading-tertiary">IIoT платформа</h3>
        <div class="panel__head">
            <h2 class="heading-secondary">Платформа Интернет Вещей</h2>
            <a href="#" class="panel__presentation" download>
                <svg class="panel__presentation-doc">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                </svg>
                Скачать презентацию
                <svg class="panel__presentation-download">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-download"></use>
                </svg>
            </a>
        </div>
        <div class="panel__wrap">

            <div class="panel__arch">
                <div class="panel__title">Архитектура lloT-решения СИБУР</div>
                <div class="panel__arch-picture"><img src="<?=SITE_TEMPLATE_PATH?>/img/panel/architecture.png" alt="Архитектура"></div>
            </div>

            <div class="panel__features panel__check">
                <div class="panel__features-wrap">
                    <div class="panel__features-item panel__check-item">Создано штатной командой разработчиков СИБУР с
                        учетом всех особенностей и требований нефтехимической отрасли</div>
                    <div class="panel__features-item panel__check-item">Уже работает на предприятиях СИБУР:
                        Запсибнефтехим и СИБУР-Тобольск</div>
                    <div class="panel__features-item panel__check-item">Разворачивается локально в сети предприятия,
                        обеспечивая полное соответствие требованиям информационной безопасности и конфиденциальности
                    </div>
                    <div class="panel__features-item panel__check-item">Беспроводная сеть LoRaWAN не требует
                        лицензирования или покупки частот. Используется нелицензируемый частотный диапазон RU868</div>
                </div>
                <div class="panel__features-wrap">
                    <div class="panel__features-item panel__check-item">LoRaWAN является самым распространенным IoT
                        протоколом в мире. Построенная сеть будет поддерживать подключение любых LoRaWAN устройств
                        любого
                        вендора</div>
                    <div class="panel__features-item panel__check-item">Все каналы передачи данных зашифрованы</div>
                    <div class="panel__features-item panel__check-item">IIoT платформа может быть развернута на уже
                        имеющихся серверах предприятия, большие ресурсы не нужны</div>
                    <div class="panel__features-item panel__check-item">Доступ к интерфейсу на рабочих местах будет
                        осуществляться через стандартный web-браузер</div>
                </div>
            </div>

            <div class="panel__functions">

                <div class="panel__functions-head">
                    <div class="panel__title">Основные функции</div>
                    <div class="panel__functions-nav">
                        <div class="panel__functions-prev">
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <circle r="19.3174" transform="matrix(-1 0 0 1 19.8166 19.8174)"
                                        stroke="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M17.0142 15.4727L12.6694 19.8174L17.0142 24.1622L17.9666 23.2098L15.2476 20.4908H26.9638V19.144H15.2476L17.9666 16.425L17.0142 15.4727Z"
                                      fill="currentColor" />
                            </svg>
                        </div>
                        <div class="panel__functions-amount">
                            <div class="current">1</div> из <div class="total">5</div>
                        </div>
                        <div class="panel__functions-next">
                            <svg width="41" height="40" viewBox="0 0 41 40" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20.6632" cy="19.8174" r="19.3174" stroke="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M23.4653 15.4727L27.8101 19.8174L23.4653 24.1622L22.513 23.2098L25.2319 20.4908H13.5157V19.144H25.2319L22.513 16.425L23.4653 15.4727Z"
                                      fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="panel__functions-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide panel__functions-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/panel/panel-function-1.png"
                                 alt="Быстрое подключение LoRaWAN-устройств к сети">
                        </div>
                        <div class="swiper-slide panel__functions-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/panel/panel-function-2.png" alt="Удобное размещение датчиков на мнемосхемах">
                        </div>
                        <div class="swiper-slide panel__functions-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/panel/panel-function-3.png" alt="Визуализация показаний на графиках">
                        </div>
                        <div class="swiper-slide panel__functions-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/panel/panel-function-4.png" alt="Список событий и звуковые оповещения">
                        </div>
                        <div class="swiper-slide panel__functions-item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/panel/panel-function-5.png" alt="Добавление датчика">
                        </div>
                    </div>
                </div>

                <div class="panel__functions-pagination"></div>

                <div class="panel__functions-text">
                    <div>Быстрое подключение LoRaWAN-устройств к сети</div>
                    <div>Удобное размещение датчиков на мнемосхемах</div>
                    <div>Визуализация показаний на графиках</div>
                    <div>Список событий и звуковые оповещения</div>
                    <div>Добавление датчика</div>
                </div>
            </div>

            <div class="panel__device">
                <div class="panel__title">Взрывозащищенные IIoT-устройства разработки СИБУР</div>
                <div class="panel__device-wrap">
                    <div class="panel__device-picture">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/panel/panel-device.png" alt="Взрывозащищенные IIoT-устройства разработки СИБУР">
                    </div>
                    <div class="panel__device-check panel__check">
                        <div class="panel__device-item panel__check-item">Рабочая температура −56...+55°С</div>
                        <div class="panel__device-item panel__check-item">Соответствуют всем требованиям к оборудованию,
                            применяемому на опасных производственных объектах</div>
                        <div class="panel__device-item panel__check-item">Более 5 лет работы от батареи</div>
                        <div class="panel__device-item panel__check-item">Современные протоколы передачи данных</div>
                    </div>
                </div>
            </div>

            <div class="panel__perspective">
                <div class="panel__title">Перспективы развития IIoT-решения</div>
                <div class="panel__perspective-wrap">
                    <div class="panel__perspective-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#perspective-icon-1"></use>
                        </svg>
                        <div class="panel__perspective-text">
                            <div class="panel__perspective-subtitle">Контроль температуры</div>
                            <div class="panel__perspective-descr">Автоматизация контроля температуры объектов <br>
                                Сокращение трудозатрат на ручной контроль <br>
                                Взрывозащищенные системы контроля температуры SIBUR EXT</div>
                        </div>
                    </div>
                    <div class="panel__perspective-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#perspective-icon-2"></use>
                        </svg>
                        <div class="panel__perspective-text">
                            <div class="panel__perspective-subtitle">Виброконтроль</div>
                            <div class="panel__perspective-descr">Переход к обслуживанию по состоянию динамического
                                оборудования <br>
                                Сокращение трудозатрат на ручной виброконтроль <br>
                                Взрывозащищенные системы виброконтроля SIBUR EXV
                            </div>
                        </div>
                    </div>
                    <div class="panel__perspective-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#perspective-icon-3"></use>
                        </svg>
                        <div class="panel__perspective-text">
                            <div class="panel__perspective-subtitle">Носимые устройства</div>
                            <div class="panel__perspective-descr">Переход к обслуживанию по состоянию динамического
                                оборудования <br>
                                Сокращение трудозатрат на ручной виброконтроль <br>
                                Взрывозащищенные системы виброконтроля SIBUR EXV</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel__cta">
                <div class="panel__cta-subtitle">Если Вас заинтересовал этот продукт</div>
                <div class="panel__cta-mail">
                    Напишите нам на почту
                    <a href="mailto:innovation-center@sibur.ru">Заявка на Демо</a>
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel--5">
        <div class="panel__close">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#panel-close"></use>
            </svg>
        </div>
        <h3 class="heading-tertiary">платформа AR</h3>
        <div class="panel__head">
            <h2 class="heading-secondary">Удаленный эксперт AR</h2>
            <a href="#" class="panel__presentation" download>
                <svg class="panel__presentation-doc">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                </svg>
                Скачать презентацию
                <svg class="panel__presentation-download">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-download"></use>
                </svg>
            </a>
        </div>

        <div class="panel__ar">

            <div class="panel__benefits">
                <div class="panel__title">Преимущества AR-платформы СИБУРА</div>
                <div class="panel__benefits-wrap panel__check">
                    <div class="panel__benefits-item panel__check-item">
                        Интуитивно понятный русскоязычный интерфейс
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Одновременное подключение до четырех экспертов
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Установка в IT-контуре предприятия
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Работа через Интернет без угрозы утечки данных за счет применения шифрования данных
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Видеозаписи сеансов с шифрованием
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Юридически признанный инструмент, на 100% заменяющий очные визиты
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Безопасность и контроль–система устанавливается в контуре предприятия, удовлетворяет требованиям
                        информационной безопасности
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Отечественная разработка (импортозамещение)
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Защищенное шифрование (невозможен
                        несанкционнированный доступ к видео-потокам)
                    </div>
                    <div class="panel__benefits-item panel__check-item">
                        Интеграция с корпоративными системами и
                        универсальность обслуживания
                    </div>
                </div>
            </div>

            <div class="panel__app">
                <div class="panel__title">Приложение для AR-очков</div>
                <div class="panel__app-descr">Приложение для очков дополненной реальности на базе Android 4.0+</div>
                <div class="panel__app-wrap">
                    <div class="panel__app-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#ar-icon-1"></use>
                        </svg>
                        Привязка к сеансу по QR-коду
                    </div>
                    <div class="panel__app-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#ar-icon-2"></use>
                        </svg>
                        Видео-сеанс в формате HD 720p (H.264 или VP9) по протоколу WebRTC
                    </div>
                    <div class="panel__app-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#ar-icon-3"></use>
                        </svg>
                        Требования к полосе пропускания: от 500 kbps до 2mbps
                    </div>
                    <div class="panel__app-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#ar-icon-4"></use>
                        </svg>
                        Защищенность канала связи: TLS 1.2, DTLS 1.2
                    </div>
                    <div class="panel__app-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#ar-icon-5"></use>
                        </svg>
                        Передача данных всего по двум портам: 443 (HTTPS) и 3478 (STUN, TURN, TCP)
                    </div>
                    <div class="panel__app-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#ar-icon-6"></use>
                        </svg>
                        Локальная запись видео с шифрованием
                    </div>
                    <div class="panel__app-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#ar-icon-7"></use>
                        </svg>
                        Автоматическое обновление ПО
                    </div>
                </div>
            </div>

            <div class="panel__use">
                <div class="panel__title">Преимущества AR-платформы СИБУРА</div>
                <div class="panel__use-wrap">
                    <div class="panel__range">
                        <div class="panel__range-descr">Биаксплен</div>
                        <div class="panel__range-wrap">
                            <div class="panel__range-r"></div>
                            <div class="panel__range-temp">
                                <div class="panel__range-num">0</div>
                                <div class="panel__range-num --strong">2</div>
                                <div class="panel__range-num --strong">4</div>
                                <div class="panel__range-num">6</div>
                                <div class="panel__range-num">8</div>
                                <div class="panel__range-num">10</div>
                                <div class="panel__range-num --strong">12</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__range">
                        <div class="panel__range-descr">СК</div>
                        <div class="panel__range-wrap">
                            <div class="panel__range-r"></div>
                            <div class="panel__range-temp">
                                <div class="panel__range-num">0</div>
                                <div class="panel__range-num --strong">2</div>
                                <div class="panel__range-num --strong">4</div>
                                <div class="panel__range-num">6</div>
                                <div class="panel__range-num">8</div>
                                <div class="panel__range-num">10</div>
                                <div class="panel__range-num --strong">12</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__range">
                        <div class="panel__range-descr">ТНХ</div>
                        <div class="panel__range-wrap">
                            <div class="panel__range-r"></div>
                            <div class="panel__range-temp">
                                <div class="panel__range-num">0</div>
                                <div class="panel__range-num --strong">2</div>
                                <div class="panel__range-num --strong">4</div>
                                <div class="panel__range-num">6</div>
                                <div class="panel__range-num">8</div>
                                <div class="panel__range-num">10</div>
                                <div class="panel__range-num --strong">12</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__range">
                        <div class="panel__range-descr">СХП</div>
                        <div class="panel__range-wrap">
                            <div class="panel__range-r"></div>
                            <div class="panel__range-temp">
                                <div class="panel__range-num">0</div>
                                <div class="panel__range-num --strong">2</div>
                                <div class="panel__range-num --strong">4</div>
                                <div class="panel__range-num">6</div>
                                <div class="panel__range-num">8</div>
                                <div class="panel__range-num">10</div>
                                <div class="panel__range-num --strong">12</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__range">
                        <div class="panel__range-descr">ВСК</div>
                        <div class="panel__range-wrap">
                            <div class="panel__range-r panel__range-r--2"></div>
                            <div class="panel__range-temp">
                                <div class="panel__range-num">0</div>
                                <div class="panel__range-num --strong">2</div>
                                <div class="panel__range-num --strong">4</div>
                                <div class="panel__range-num">6</div>
                                <div class="panel__range-num">8</div>
                                <div class="panel__range-num">10</div>
                                <div class="panel__range-num --strong">12</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__range">
                        <div class="panel__range-descr">Разработка</div>
                        <div class="panel__range-wrap">
                            <div class="panel__range-r panel__range-r--4"></div>
                            <div class="panel__range-temp">
                                <div class="panel__range-num">0</div>
                                <div class="panel__range-num --strong">2</div>
                                <div class="panel__range-num --strong">4</div>
                                <div class="panel__range-num">6</div>
                                <div class="panel__range-num">8</div>
                                <div class="panel__range-num">10</div>
                                <div class="panel__range-num --strong">12</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__range">
                        <div class="panel__range-descr">СТГ</div>
                        <div class="panel__range-wrap">
                            <div class="panel__range-r panel__range-r--11"></div>
                            <div class="panel__range-temp">
                                <div class="panel__range-num">0</div>
                                <div class="panel__range-num --strong">2</div>
                                <div class="panel__range-num --strong">4</div>
                                <div class="panel__range-num">6</div>
                                <div class="panel__range-num">8</div>
                                <div class="panel__range-num">10</div>
                                <div class="panel__range-num --strong">12</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__range">
                        <div class="panel__range-descr">СИБТ/ЗНСХ</div>
                        <div class="panel__range-wrap">
                            <div class="panel__range-r panel__range-r--12"></div>
                            <div class="panel__range-temp">
                                <div class="panel__range-num">0</div>
                                <div class="panel__range-num --strong">2</div>
                                <div class="panel__range-num --strong">4</div>
                                <div class="panel__range-num">6</div>
                                <div class="panel__range-num">8</div>
                                <div class="panel__range-num">10</div>
                                <div class="panel__range-num --strong">12</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel__decision">
                <div class="panel__title">Архитектура решения AR-платформы СИБУРа</div>
                <div class="panel__decision-wrap">
                    <div class="panel__decision-head">
                        <div class="panel__decision-elem">
                            <div class="panel__decision-elem-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#use-1"></use>
                                </svg>
                            </div>
                            <div class="panel__decision-elem-e">
                                <div class="panel__decision-elem-text">App Android 4.0 + <br>
                                    для AR-очков</div>
                            </div>
                        </div>
                        <div class="panel__decision-elem">
                            <div class="panel__decision-elem-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#use-2"></use>
                                </svg>
                            </div>
                            <div class="panel__decision-elem-e --multi">
                                <div class="panel__decision-elem-text">ВИДЕОПЛАТФОРМА</div>
                                <div class="panel__decision-elem-list">
                                    <div class="panel__decision-elem-descr">Сервис работы
                                        с заявками</div>
                                    <div class="panel__decision-elem-descr">Медиасервер
                                        WebRTC</div>
                                    <div class="panel__decision-elem-descr">Web-сервис</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel__decision-elem">
                            <div class="panel__decision-elem-icon">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#use-3"></use>
                                </svg>
                            </div>
                            <div class="panel__decision-elem-e">
                                <div class="panel__decision-elem-text">UI эксперта</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel__decision-content">
                        <div class="panel__decision-content-item --item-1">Решение располагается
                            в защищенном контуре предприятия</div>
                        <div class="panel__decision-content-item --item-2">Администрирование сервиса только из защищенного контура</div>
                        <div class="panel__decision-content-icon">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#use-4"></use>
                            </svg>
                        </div>
                        <div class="panel__decision-content-item --item-3">Все сервисы работают в корпоративной сети.
                            В открытую сеть Интернет выходит только
                            оператор AR-оборудования и внешний эксперт</div>
                        <div class="panel__decision-content-item --item-4">Взаимодействие с очками и веб-клиентами
                            всего по двум портам:
                            443 (HTTPS) и 3478 (STUN, TURN, TCP)</div>
                    </div>
                </div>
            </div>

            <div class="panel__server">
                <div class="panel__title">Приложение для AR-очков</div>
                <div class="panel__server-subtitle">Пример конфигурации сервера в СИБУРе:</div>
                <div class="panel__server-table">
                    <div class="panel__server-row --head">
                        <div class="panel__server-item --first">Имя сервера</div>
                        <div class="panel__server-item">vCore</div>
                        <div class="panel__server-item">RAM,GB</div>
                        <div class="panel__server-item">Disk Size, GB</div>
                        <div class="panel__server-item">OS</div>
                    </div>
                    <div class="panel__server-row">
                        <div class="panel__server-item --first">Reverse Proxy</div>
                        <div class="panel__server-item">4</div>
                        <div class="panel__server-item">4</div>
                        <div class="panel__server-item">50</div>
                        <div class="panel__server-item">Centos 7 x64</div>
                    </div>
                    <div class="panel__server-row">
                        <div class="panel__server-item --first">Медиасервер <br>
                            (транскодирование и мультиплексирование)</div>
                        <div class="panel__server-item">32</div>
                        <div class="panel__server-item">8</div>
                        <div class="panel__server-item">50</div>
                        <div class="panel__server-item">Centos 7 x64</div>
                    </div>
                    <div class="panel__server-row">
                        <div class="panel__server-item --first">Сигнальный сервер</div>
                        <div class="panel__server-item">4</div>
                        <div class="panel__server-item">4</div>
                        <div class="panel__server-item">50</div>
                        <div class="panel__server-item">Centos 7 x64</div>
                    </div>
                    <div class="panel__server-row">
                        <div class="panel__server-item --first">Сервер заявок</div>
                        <div class="panel__server-item">4</div>
                        <div class="panel__server-item">4</div>
                        <div class="panel__server-item">50</div>
                        <div class="panel__server-item">Centos 7 x64</div>
                    </div>
                </div>
                <div class="panel__server-check panel__check">
                    <div class="panel__server-c panel__check-item">
                        Поддерживаемое количество сеансов одновременно: 20, до 16 участников каждый
                    </div>
                    <div class="panel__server-c panel__check-item">
                        Требования по connectivity при максимальной нагрузке: up to 1400 mbps ( 20 сессий х 16 клиентов
                        х 4 Mbps х 10%)
                    </div>
                </div>
            </div>

            <div class="panel__cta">
                <div class="panel__cta-subtitle">Если Вас заинтересовал этот продукт</div>
                <div class="panel__cta-mail">
                    Напишите нам на почту
                    <a href="mailto:innovation-center@sibur.ru">Заявка на Демо</a>
                </div>
            </div>

        </div>

    </div>

    <div class="panel panel--6">
        <div class="panel__close">
            <svg>
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#panel-close"></use>
            </svg>
        </div>
        <h3 class="heading-tertiary">промышленный смартфон</h3>
        <h2 class="heading-secondary">Смартфон SIBUR EX50</h2>
        <div class="panel__sensor">



            <div class="panel__specific">
                <div class="panel__title">Взрывобезопасный смартфон SIBUR EX50 создан для использования в индустриальных
                    условиях с повышенным риском:</div>
                <div class="panel__specific-content">
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#smartphone-icon-1"></use>
                        </svg>
                        Нефтедобывающая отрасль
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#smartphone-icon-2"></use>
                        </svg>
                        Газовая отрасль
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#smartphone-icon-3"></use>
                        </svg>
                        Угольная отрасль
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#smartphone-icon-4"></use>
                        </svg>
                        Нефтепереработка
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#smartphone-icon-5"></use>
                        </svg>
                        Морские перевозки
                    </div>
                    <div class="panel__specific-item">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-popup.svg#smartphone-icon-6"></use>
                        </svg>
                        Атомная энергетика
                    </div>
                </div>
            </div>

            <a href="#" class="panel__presentation" download>
                <svg class="panel__presentation-doc">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-document"></use>
                </svg>
                Скачать презентацию
                <svg class="panel__presentation-download">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-download"></use>
                </svg>
            </a>

            <div class="panel__cta">
                <div class="panel__cta-subtitle">Если Вас заинтересовал этот продукт</div>
                <div class="panel__cta-mail">
                    Напишите нам на почту
                    <a href="mailto:innovation-center@sibur.ru">Заявка на Демо</a>
                </div>
            </div>

            <div class="panel__area">
                <div class="panel__title">Преимущества SIBUR EX50</div>
                <div class="panel__area-wrap panel__check">
                    <div class="panel__area-item panel__check-item">
                        Обладает уровнем защиты для работы в Зоне 1, защитой уровня IP68 и Military-STD-810G
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Поддерживает (UHF/VHF) DMR Walkie-Talkie, PTT решения, РОС, сканнеры 2D И RFID, и может быть
                        интегрирован для работы с частным LTE сетям
                    </div>
                    <div class="panel__area-item panel__check-item">
                        5,7 дюймовый IPS экран с разрешением 2160*1080 точек, технологии 18:9
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Оснащен памятью 6Гб RAM + 128Гб ROM, что, вкупе с процессором МТ6763V/CT (Turbo) HELLO P23,
                        может обработать любые сложные задачи сейчас, и через 3-5 лет
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Двойная основная камера 21МП с качеством съемки 30fps и дополнительная камера на 5ПМ со
                        встроенным сканером
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Телефон предназначен для использования в температурных режимах от -40 до +50 градусов
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Интегрированный сканер сердечного ритма
                    </div>
                    <div class="panel__area-item panel__check-item">
                        Дополнительно телефон может быть оснащен: DMR, 2.4G RIF, 900MHz RFID, Infrared scanner,
                        Honeywell N6703, B-code/2Dscanner, Additional Antenna for private LTE network
                    </div>
                </div>
            </div>

        </div>
    </div>*/?>
<? endif ?>