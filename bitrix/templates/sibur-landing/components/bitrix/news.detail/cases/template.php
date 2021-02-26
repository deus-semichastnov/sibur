<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <?$arCases = array();?>
    <?if($arResult["PROPERTIES"]["CASES"]["VALUE"]):?>
        <?
        $arCases = getCases($arResult["PROPERTIES"]["CASES"]["VALUE"]);
        //echo count($arCases);
        $arGroupCases = array_chunk($arCases, 3);
        ?>
    <?endif;?>
    <?//echo "<pre>"; print_r($arCases); echo "</pre>";?>
    <?if(empty($arCases)):?>
        <!-- БЛОК БЕЗ КЕЙСОВ -->
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH."/include/main/empty_cases.php",
                "EDIT_TEMPLATE" => ""
            )
        ); ?>
    <?else:?>
        <!-- БЛОК С КЕЙСАМИ -->
        <section class="cases" id="cases">
            <div class="container">
                <div class="cases__wrap">
                    <div class="cases__head">
                        <h3 class="heading-tertiary"><?=$arResult["NAME"]?></h3>
                        <h2 class="heading-secondary"><?=$arResult["PROPERTIES"]["TITLE_BLOCK"]["VALUE"]?></h2>
                        <div class="cases__subtitle"><?=$arResult["PREVIEW_TEXT"]?></div>
                    </div>
                    <div class="cases__content">
                        <div class="cases__info">
                            <div class="cases__slider swiper-container">
                                <div class="swiper-wrapper">
                                    <?
                                    $num = 0;
                                    foreach ($arGroupCases as $group):?>
                                        <?foreach ($group as $case):?>
                                            <?
                                            $active = "";
                                            if($num==0){
                                                $active = " active";
                                            }?>
                                            <div class="swiper-slide cases__slider-item<?=$active?>" data-item="<?=$num?>">
                                                <div class="cases__slider-check"></div>
                                                <div class="cases__slider-text">
                                                    <div class="cases__slider-num">Кейс №<?=$num+1?></div>
                                                    <div class="cases__slider-descr"><?=$case["FIELDS"]["NAME"]?></div>
                                                </div>
                                            </div>
                                            <?$num++;?>
                                        <?endforeach;?>
                                    <?endforeach;?>
                                </div>
                            </div>
                            <?if(count($arCases)>3):?>
                                <div class="cases__slider-nav">
                                    <div class="cases__slider-prev">
                                        <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle r="19.3174" transform="matrix(-1 0 0 1 19.9853 20.263)"
                                                    stroke="#DBDDDF" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M17.1832 15.9177L12.8384 20.2625L17.1832 24.6072L18.1355 23.6548L15.4166 20.9359H27.1328V19.589H15.4166L18.1355 16.8701L17.1832 15.9177Z"
                                                  fill="white" />
                                        </svg>
                                    </div>
                                    <div class="cases__slider-amount"><span class="current">3</span> из <span
                                                class="total"><?=count($arCases)?></span> кейсов</div>
                                    <div class="cases__slider-next">
                                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20.4239" cy="20.3958" r="19.3174" stroke="#DBDDDF" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M23.2265 16.0505L27.5713 20.3953L23.2265 24.74L22.2741 23.7877L24.9931 21.0687H13.2769V19.7219H24.9931L22.2741 17.0029L23.2265 16.0505Z"
                                                  fill="white" />
                                        </svg>
                                    </div>
                                </div>
                            <?endif;?>
                            <?=$arResult["DETAIL_TEXT"]?>
                        </div>
                        <div class="cases__c --cases">
                                <div class="cases__dummy default active-1"></div>
                                <div class="cases__dummy default active-2"></div>
                                <div class="cases__dummy active-3"></div>
                            <?
                            $num = 0;
                            foreach ($arCases as $case):?>
                                <?
                                $active = "";
                                if($num==0){
                                    $active = " active";
                                }?>
                                <div class="cases__item<?=$active?>" data-case="<?=$num?>">
                                    <div class="cases__item-head">
                                        <div class="cases__item-num">Кейс №<?=$num+1?></div>
                                        <div class="cases__item-subtitle"><?=$case["FIELDS"]["NAME"]?></div>
                                    </div>
                                    <div class="cases__item-title"><?=$case["PROPS"]["TARGET"]["VALUE"]?></div>
                                    <div class="cases__item-list">
                                        <?foreach($case["PROPS"]["TASKS"]["VALUE"] as $key => $task):?>
                                            <div class="cases__item-list-item"><span><?=$key+1?>.</span><?=$task?></div>
                                        <?endforeach;?>
                                    </div>
                                    <div class="cases__item-text"><?=$case["FIELDS"]["PREVIEW_TEXT"]?></div>
                                    <a href="<?=$arParams["LINK"]?>" class="btn --green fancybox-link">
                                        Подать заявку
                                        <div class="btn__plus">
                                            <div class="btn__plus-round"></div>
                                            <div class="btn__plus-p"></div>
                                        </div>
                                    </a>
                                </div>
                                <?$num++;?>
                            <?endforeach;?>
                        </div>
                    </div>
                    <h4 class="heading-quaternary"><?=$arResult["PROPERTIES"]["NEXT_BLOCK"]["VALUE"]?></h4>
                </div>
            </div>
        </section>
    <?endif;?>
<? endif ?>