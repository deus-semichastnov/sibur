<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<?//echo "<pre>"; print_r($arResult); echo "</pre>";?>
<? if (!empty($arResult)): ?>
    <div class="start__content">
        <h1 class="heading-primary"><?=$arResult["DETAIL_TEXT"]?></h1>
        <div class="start__detail">
            <?=$arResult["PROPERTIES"]["NEXT_BLOCK"]["VALUE"]?>
            <div class="start__detail-btn">
                <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.98242 10.4167L4.63767 14.7614L0.292927 10.4167L1.2453 9.46432L3.96424 12.1833L3.96424 0.467041L5.31111 0.467041L5.31111 12.1833L8.03005 9.46432L8.98242 10.4167Z"
                          fill="white"/>
                </svg>

            </div>
        </div>
    </div>
<? endif ?>