<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <section class="develop" id="development">
        <div class="container">
            <h3 class="heading-tertiary"><?=$arResult["NAME"]?></h3>
            <h2 class="heading-secondary"><?=$arResult["PROPERTIES"]["TITLE_BLOCK"]["VALUE"]?></h2>
            <?if($arResult["PROPERTIES"]["DEVELOP"]["VALUE"]):?>
                <?$APPLICATION->IncludeComponent("bitrix:news.list","development",Array(
                        "IBLOCK_TYPE" => "development",
                        "IBLOCK_ID" => "17",
                        "NEWS_COUNT" => "10",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER2" => "DESC",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => Array("ID"),
                        "PARENT_SECTION" => $arResult["PROPERTIES"]["DEVELOP"]["VALUE"],
                        "PROPERTY_CODE" => Array("TITLE"),
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
            <?endif;?>
        </div>
        <div class="popup-panel-box"></div>
    </section>
<? endif ?>