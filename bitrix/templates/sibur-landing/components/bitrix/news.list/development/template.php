<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<? if (!empty($arResult["ITEMS"])): ?>
<?//echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>
    <div class="develop__content">
        <?foreach ($arResult["ITEMS"] as $key => $item):?>
            <?$revers = "";
            $num = $key+1;
            if($num%2){
                $revers = " --reverse";
            }
            $numStr = str_pad($num, 2, "0", STR_PAD_LEFT);?>
            <div class="develop__item<?=$revers?>">
                <div class="develop__num"><?=$numStr?></div>
                <div class="develop__picture">
                    <img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$item["PREVIEW_PICTURE"]["TITLE"]?>">
                </div>
                <div class="develop__text">
                    <div class="heading-tertiary"><?=$item["NAME"]?></div>
                    <div class="develop__name"><?=$item["PROPERTIES"]["TITLE"]["VALUE"]?></div>
                    <div class="develop__text-descr"><?=$item["PREVIEW_TEXT"]?></div>
                    <div class="btn --green" data-link="panel--<?=$item["ID"]?>" data-panel-id="<?=$item["ID"]?>">
                        <?=GetMessage("ALL_CHARACTERISTICS")?>
                        <div class="btn__plus">
                            <div class="btn__plus-round"></div>
                            <div class="btn__plus-p"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?endforeach?>
    </div>
<? endif ?>