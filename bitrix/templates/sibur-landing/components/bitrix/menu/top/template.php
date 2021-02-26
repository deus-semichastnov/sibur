<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>
<?//echo "<pre>"; print_r($arResult); echo "</pre>";?>
<? if (!empty($arResult)): ?>
    <nav class="header__nav">
        <? foreach ($arResult as $arItem):?>
        <?$data = "";
        $hash = "";
        if($arItem["PARAMS"]["data"] != ""){
            $data = "data-href='".$arItem["PARAMS"]["data"]."'";
            $hash = $arItem["PARAMS"]["data"];
        }
        $active="";
        if($arItem["SELECTED"] && $arItem["LINK"] != "/"){
            $active=" active";
        }
        ?>
            <a href="<?= $arItem["LINK"] ?><?=$hash?>" <?=$data?> class="header__nav-link<?=$active?>"><?=$arItem["TEXT"]?></a>
        <? endforeach ?>
    </nav>
<? endif ?>