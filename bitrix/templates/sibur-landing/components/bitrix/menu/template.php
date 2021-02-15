<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

/*<nav class="header__nav">
            <a href="#idea" class="header__nav-link">Идея</a>
            <a href="#about" class="header__nav-link">О центре</a>
            <a href="#why" class="header__nav-link">Зачем?</a>
            <a href="#demand" class="header__nav-link">Требования</a>
            <a href="#cases" class="header__nav-link">Кейсы</a>
            <a href="#development" class="header__nav-link">Разработки</a>
            <a href="#news" class="header__nav-link">Новости</a>
            <a href="#footer" class="header__nav-link">Контакты</a>
        </nav>*/
?>

<? if (!empty($arResult)): ?>
    <nav class="header__nav">
        <? foreach ($arResult as $arItem):?>
            <a href="<?= $arItem["LINK"] ?>" class="header__nav-link"><?=$arItem["TEXT"]?></a>
        <? endforeach ?>
    </nav>
<? endif ?>