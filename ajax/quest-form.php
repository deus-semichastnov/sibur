<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(CModule::IncludeModule("iblock"))
{
    $arSelect = Array(
        "ID",
        "NAME",
        "IBLOCK_ID",
        "PROPERTY_TARGET",
        "PROPERTY_TASKS",
        "PREVIEW_TEXT"
    );
    $arFilter = Array("IBLOCK_ID"=>15, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID"=>94);
    $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement())
    {
        $case["FIELDS"] = $ob->GetFields();
        $case["PROPS"] = $ob->GetProperties();
        $arResult["CASES"][$case["FIELDS"]["ID"]] = $case;
    }
    //echo "<pre>"; print_r($arResult); echo "</pre>";
}
$code=$APPLICATION->CaptchaGetCode();
?>
<form action="#" class="popup__form">
    <?if($_REQUEST["mail_template"]):?>
    <input type="hidden" name="sendTpl" value="<?= $_REQUEST["mail_template"] ?>">
    <?endif;?>
    <h3 class="heading-tertiary">Подать заявку</h3>
    <h2 class="heading-secondary">Анкета</h2>
    <div class="popup__content">
        <div class="popup__wrap">
            <div class="popup__group">
                <label class="popup__label">Наименовании организации</label>
                <input type="text" class="popup__input required" data-rule-input="min-3" name="FIELDS[NAME]" placeholder="ООО “Рога-Копыта”">
            </div>
            <div class="popup__group">
                <label class="popup__label">Местонахождение организации</label>
                <input type="text" class="popup__input" name="PROPERTY[LOCATION]" placeholder="г. Москва">
            </div>
        </div>
        <div class="popup__wrap">
            <div class="popup__group <?/*success*/?>">
                <label class="popup__label">ФИО контактного лица</label>
                <input type="text" class="popup__input required" data-rule-input="min-3" name="PROPERTY[FIO]" placeholder="Иванов Иван Иванович">
            </div>
            <div class="popup__group <?/*error*/?>">
                <label class="popup__label">Телефон контактного лица</label>
                <input type="text" class="popup__input input-phone" name="PROPERTY[PHONE]" placeholder="+ 7(900)___-__-__">
            </div>
        </div>
        <div class="popup__wrap">
            <div class="popup__group">
                <label class="popup__label">Адрес эл. почты контактного лица</label>
                <input type="text" class="popup__input required" name="PROPERTY[EMAIL]" data-rule-input="min-6,email-1" placeholder="ian_off@ya.ru">
            </div>
            <?if($_REQUEST["variant"] == "1" || !isset($arResult["CASES"])):?>
            <div class="popup__group">
                <label class="popup__label">Функциональное направление</label>
                <input type="text" class="popup__input required" name="PROPERTY[DIRECTION]" data-rule-input="min-6" placeholder="Функциональное направление">
            </div>
            <?endif;?>
            <?if($_REQUEST["variant"] == "2" && isset($arResult["CASES"])):?>
            <div class="popup__group">
                <label class="popup__label">Предложение по кейсу</label>
                <select name="PROPERTY[CASE]" class="popup__input">
                    <?foreach($arResult["CASES"] as $id => $case):?>
                    <?
                            $selected = "";
                            if($_REQUEST["case_id"] && $_REQUEST["case_id"] == $id){
                                $selected = " selected";
                            }
                            ?>
                    <option value="<?= $id ?>" <?= $selected ?>><?= $case["FIELDS"]["NAME"] ?></option>
                    <?endforeach;?>
                </select>
            </div>
            <?endif;?>
        </div>
        <div class="popup__wrap --textarea">
            <div class="popup__group">
                <label class="popup__label">Краткое описание проекта</label>
                <textarea name="FIELDS[PREVIEW_TEXT]" class="popup__textarea required" placeholder="Кратко опишите Ваш проект..."></textarea>
            </div>
        </div>
        <div class="popup__wrap --checkbox checkbox-group checkbox-req-box">
            <label class="popup__label">Стадия готовности проекта</label>
            <label class="popup__checkbox">
                <input type="checkbox" name="PROPERTY[STAGE][]" class="popup__checkbox-input required" value="47">
                <span class="popup__checkbox-c">
                    <svg>
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite-other.svg#icon-check"></use>
                    </svg>
                </span>
                <div class="popup__checkbox-text">Пилотирование</div>
            </label>
            <label class="popup__checkbox">
                <input type="checkbox" name="PROPERTY[STAGE][]" class="popup__checkbox-input required" value="48">
                <span class="popup__checkbox-c">
                    <svg>
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite-other.svg#icon-check"></use>
                    </svg>
                </span>
                <div class="popup__checkbox-text">Реализация</div>
            </label>
            <label class="popup__checkbox">
                <input type="checkbox" name="PROPERTY[STAGE][]" class="popup__checkbox-input required" value="49">
                <span class="popup__checkbox-c">
                    <svg>
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite-other.svg#icon-check"></use>
                    </svg>
                </span>
                <div class="popup__checkbox-text">Готовое решение</div>
            </label>
        </div>
        <div class="popup__wrap --textarea">
            <div class="popup__group">
                <label class="popup__label">Описание кейсов внедрения </label>
                <textarea name="FIELDS[DETAIL_TEXT]" class="popup__textarea" placeholder="Опишите кейс внедрения в случае наличии готового решения..."></textarea>
            </div>
        </div>
        <!-- вид документов изначально -->
        <div class="popup__wrap --document">
            <div class="popup__group">
                <label class="popup__label">Презентации и прочие материалы </label>
                <div class="popup__document">
                    <input type="file" class="hidden-input-file" name="file[0]" data-num-file="0" value="">
                    <div class="popup__document-icon"></div>
                    <div class="popup__document-name">Загрузите ваши материалы</div>
                </div>
            </div>
        </div>
        <?/*<!-- вид документов после добавления файла -->
            <div class="popup__wrap --document">
                <div class="popup__group">
                    <label class="popup__label">Презентации и прочие материалы </label>
                    <div class="popup__document --loaded">
                        <div class="popup__document-icon"></div>
                        <div class="popup__document-name">xncjkOP.ppt</div>
                    </div>
                    <div class="popup__document">
                        <div class="popup__document-icon"></div>
                        <div class="popup__document-name">Загрузить еще</div>
                    </div>
                </div>
            </div>*/?>
    </div>
    <div class="captcha_box">
        <div class="captcha_box-wrap">
            <input type="hidden" class="sid-captcha" name="captcha_sid" value="<?= $code; ?>" />
            <img class="img-captcha" src="/bitrix/tools/captcha.php?captcha_sid=<?= $code; ?>" alt="CAPTCHA" />
            <div class="recode-captcha">Поменять</div>
        </div>
        <input type="text" class="popup__input required input-captcha" name="captcha_word">
    </div>
    <div class="popup__bot">

        <button class="popup__btn" type="submit">Отправить</button>
        <label class="popup__checkbox checkbox-req-box">
            <input type="checkbox" name="consent" class="popup__checkbox-input required">
            <span class="popup__checkbox-c">
                <svg>
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/sprite-other.svg#icon-check"></use>
                </svg>
            </span>
            <div class="popup__checkbox-text">Согласие на обработку персональных данных</div>
        </label>
    </div>
</form>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>