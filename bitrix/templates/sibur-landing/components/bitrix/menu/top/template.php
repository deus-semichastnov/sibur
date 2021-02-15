<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
?>

<? if (!empty($arResult)): ?>
    <nav class="header__nav">
        <? foreach ($arResult as $arItem):?>
            <a href="<?= $arItem["LINK"] ?>" class="header__nav-link"><?=$arItem["TEXT"]?></a>
        <? endforeach ?>
    </nav>
<? endif ?>