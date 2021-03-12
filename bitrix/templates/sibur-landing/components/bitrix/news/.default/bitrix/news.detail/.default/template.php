<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?//echo "<pre>"; print_r($arResult); echo "</pre>";?>
<div class="single">
    <div class="container">
        <div class="single__wrap">
            <a href="#" onclick="javascript:history.back(); return false;" class="single__back">
                <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.00036 4.82555L11.3567 4.82555M2.00036 4.82555L5.14426 1.68164M2.00036 4.82555L5.14426 7.96946"
                            stroke="#0F1C29" stroke-width="2" />
                </svg>
                <?=GetMessage("BACK")?>
            </a>

            <div class="single__content">
                <div class="single__head">
                    <div class="single__date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
                    <h1 class="single__title"><?=$arResult["NAME"]?></h1>
                    <div class="single__social">
                        <?=GetMessage("SHARE")?>
                        <script src="https://yastatic.net/share2/share.js"></script>
                        <div class="ya-share2" data-curtain data-color-scheme="whiteblack" data-services="vkontakte,facebook,odnoklassniki"></div>
                        <?/*<div class="single__social-wrap">
                            <?$CURRENT_PAGE = (CMain::IsHTTPS()) ? "https://" : "http://";
                            $CURRENT_PAGE .= $_SERVER["HTTP_HOST"];
                            $CURRENT_PAGE .= $APPLICATION->GetCurUri();?>
                            <a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?=$CURRENT_PAGE?>" class="single__social-item">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-social.svg#social-fb"></use>
                                </svg>
                            </a>
                            <a href="https://vk.com/share.php?url=<?=$CURRENT_PAGE?>" target="_blank" class="single__social-item">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-social.svg#social-vk"></use>
                                </svg>
                            </a>
                            <a href="#" class="single__social-item">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-social.svg#social-insta"></use>
                                </svg>
                            </a>
                            <a href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?=$CURRENT_PAGE?>" class="single__social-item">
                                <svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/sprite-social.svg#social-odnok"></use>
                                </svg>
                            </a>
                        </div>*/?>
                    </div>
                </div>
                <div class="single__img"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>"></div>
                <?$ib = 20;
                $ib_type = "news";
                if(SITE_ID == "s2"){
                    $ib = 26;
                    $ib_type = "news_en";
                }?>
                <?$APPLICATION->IncludeComponent("bitrix:news.list","news_block",Array(
                        "IBLOCK_TYPE" => $ib_type,
                        "IBLOCK_ID" => $ib,
                        "NEWS_COUNT" => "99",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER2" => "DESC",
                        "SORT_BY1" => "SORT",
                        "PARENT_SECTION" => $arResult["PROPERTIES"]["NEWS_BLOCKS"]["VALUE"],
                        "SORT_ORDER1" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => Array("ID","DETAIL_TEXT"),
                        "PROPERTY_CODE" => Array("PICS", "QUOTE", "PHOTO_QUOTE", "FIO_QUOTE", "DESC_QUOTE", "TYPE"),
                        "ACTIVE_DATE_FORMAT"=>"j F Y",
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
        </div>
    </div>
</div>