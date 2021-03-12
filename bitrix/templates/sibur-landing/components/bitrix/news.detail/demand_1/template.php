<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <?//echo "<pre>"; print_r($arResult); echo "</pre>";?>
    <h2 class="heading-secondary"><?=$arResult["NAME"]?></h2>
    <?if($arResult["PROPERTIES"]["TEXTS"]["VALUE"]):?>
        <div class="demand__reason">
            <?foreach ($arResult["PROPERTIES"]["TEXTS"]["VALUE"] as $key => $text):?>
                <div class="demand__reason-item">
                    <div class="demand__reason-num">№<?=$key+1?></div>
                    <div class="demand__reason-text"><?=$text["TEXT"]?></div>
                </div>
                <?if($key == 2):?>
                    <div class="demand__chart">
                        <div class="demand__chart-axis"></div>
                        <svg viewBox="0 0 1365 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M1.52148 54.6574C117.791 -13.903 191.426 -17.994 314.421 51.5924C425.199 114.267 569.045 93.2033 660.494 51.5924C797.766 -10.8693 874.73 -11.5779 1012 51.5924C1147.77 109.025 1223.05 117.546 1363.76 46.5489"
                                    stroke="#25C1CB" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <div class="demand__chart-title"><?=GetMessage("CHART_TITLE")?></div>
                    </div>
                <?endif;?>
            <?endforeach;?>
        </div>
    <?endif;?>
<? endif ?>