
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<footer class="footer">
        <div class="container">
            <div class="footer__wrap">
                <div class="footer__contacts">
                    <a href="tel:+74957775500" class="footer__phone">+7 (495)777-55-00</a>
                    <a href="mailto:innovation-center@sibur.ru" class="footer__mail">innovation-center@sibur.ru</a>
                </div>
                <div class="footer__links">
                    <a href="https://sibur.digital/" class="footer__links-item" target="_blank">
                        сибур digital
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#link-icon"></use>
                        </svg>
                    </a>
                    <a href="https://www.sibur.ru/" class="footer__links-item" target="_blank">
                        сайт сибура
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#link-icon"></use>
                        </svg>
                    </a>
                    <a href="https://habr.com/ru/company/sibur_official/" class="footer__links-item" target="_blank">
                        habr сибура
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#link-icon"></use>
                        </svg>
                    </a>
                </div>
                <div class="footer__social">
                    Подписывайтесь
                    <div class="footer__social-wrap">
                        <a href="#" class="footer__social-item">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-social.svg#social-fb"></use>
                            </svg>
                        </a>
                        <a href="#" class="footer__social-item">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-social.svg#social-vk"></use>
                            </svg>
                        </a>
                        <a href="#" class="footer__social-item">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-social.svg#social-insta"></use>
                            </svg>
                        </a>
                        <a href="#" class="footer__social-item">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-social.svg#social-odnok"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="footer__address">
                    Головной офис: <span>117218, Москва, ул. Кржижановского, д. 14, к.3,</span>
                </div>
                <a href="#quest" class="footer__btn fancybox-link">Оставить заявку</a>
            </div>
            <div class="footer__bot">
                <div class="footer__cookie">Для повышения удобства работы с сайтом СИБУР Диджитал использует файлы
                    cookie. В cookie содержатся данные о прошлых посещениях сайта. Если вы не хотите, чтобы эти данные
                    обрабатывались, отключите cookie в настройках браузера</div>
                <a href="https://de-us.ru/" class="footer__by" target="_blank">
                    design by
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#deus-logo"></use>
                    </svg>
                </a>
            </div>
        </div>
    </footer>


    <div class="popup" id="quest">
        <h3 class="heading-tertiary"></h3>
        <h2 class="heading-secondary"></h2>
        <form action="#" class="popup__form">
            <div class="popup__content">
                <div class="popup__wrap">
                    <div class="popup__group">
                        <label class="popup__label">Наименовании организации</label>
                        <input type="text" class="popup__input" name="org" placeholder="ООО “Рога-Копыта”">
                    </div>
                    <div class="popup__group">
                        <label class="popup__label">Местонахождение организации</label>
                        <input type="text" class="popup__input" name="location" placeholder="г. Москва">
                    </div>
                </div>
                <div class="popup__wrap">
                    <div class="popup__group">
                        <label class="popup__label">ФИО контактного лица</label>
                        <input type="text" class="popup__input" name="name" placeholder="Иванов Иван Иванович">
                    </div>
                    <div class="popup__group">
                        <label class="popup__label">Телефон контактного лица</label>
                        <input type="text" class="popup__input input-phone" name="phone"
                            placeholder="+ 7(900)___-__-__">
                    </div>
                </div>
                <div class="popup__wrap">
                    <div class="popup__group">
                        <label class="popup__label">Адрес эл. почты контактного лица</label>
                        <input type="text" class="popup__input" name="email" placeholder="ian_off@ya.ru">
                    </div>
                </div>
                <div class="popup__wrap">
                    <div class="popup__group">
                        <label class="popup__label">Краткое описание проекта</label>
                        <textarea name="desc" class="popup__textarea"
                            placeholder="Кратко опишите Ваш проект..."></textarea>
                    </div>
                </div>
                <div class="popup__wrap">
                    <label class="popup__checkbox">
                        <input type="checkbox" name="check-1" class="popup__checkbox-input">
                        <span class="popup__checkbox-c">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                            </svg>
                        </span>
                        <div class="popup__checkbox-text">Пилотирование</div>
                    </label>
                    <label class="popup__checkbox">
                        <input type="checkbox" name="check-2" class="popup__checkbox-input">
                        <span class="popup__checkbox-c">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                            </svg>
                        </span>
                        <div class="popup__checkbox-text">Реализация</div>
                    </label>
                    <label class="popup__checkbox">
                        <input type="checkbox" name="check-3" class="popup__checkbox-input">
                        <span class="popup__checkbox-c">
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                            </svg>
                        </span>
                        <div class="popup__checkbox-text">Готовое решение</div>
                    </label>
                </div>
                <div class="popup__wrap">
                    <div class="popup__group">
                        <label class="popup__label">Описание кейсов внедрения </label>
                        <textarea name="desc" class="popup__textarea"
                            placeholder="Опишите кейс внедрения в случае наличии готового решения..."></textarea>
                    </div>
                </div>
                <div class="popup__wrap">
                    <div class="popup__group">
                        <label class="popup__label">Описание кейсов внедрения </label>
                        <div class="popup__document"></div>
                    </div>
                </div>
            </div>
            <div class="popup__bot">
                <button class="popup__btn" type="submit">Отправить</button>
                <label class="popup__checkbox">
                    <input type="checkbox" name="consent" class="popup__checkbox-input">
                    <span class="popup__checkbox-c">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-other.svg#icon-check"></use>
                        </svg>
                    </span>
                    <div class="popup__checkbox-text">Согласие на обработку персональных данных</div>
                </label>
            </div>
        </form>
    </div>




</body>

</html>