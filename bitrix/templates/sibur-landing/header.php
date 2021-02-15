<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">



    <!-- Fancybox -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery.fancybox.min.css"); ?>
    <!-- Swiper -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/swiper.min.css"); ?>
    <!-- Custom styles -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css"); ?>
    <!-- Jquery-->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-3.5.1.min.js"); ?>
    <!-- Fancybox-->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.fancybox.min.js"); ?>
    <!-- Swiper-->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/swiper.min.js"); ?>
    <!-- InputMask-->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.inputmask.js"); ?>
    <!-- RELLAX -->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/rellax.min.js"); ?>
    <!-- Three.js-->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/three.js"); ?>
    <!-- CUSTOM -->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/scripts.js"); ?>
</head>

<body class="first">

    <header class="header">
        <a href="/" class="header__logo">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include/header/logo.php",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            );?>
        </a>
        <nav class="header__nav">
            <a href="#idea" class="header__nav-link">Идея</a>
            <a href="#about" class="header__nav-link">О центре</a>
            <a href="#why" class="header__nav-link">Зачем?</a>
            <a href="#demand" class="header__nav-link">Требования</a>
            <a href="#cases" class="header__nav-link">Кейсы</a>
            <a href="#development" class="header__nav-link">Разработки</a>
            <a href="#news" class="header__nav-link">Новости</a>
            <a href="#footer" class="header__nav-link">Контакты</a>
        </nav>
        <a href="#" class="header__language">En</a>
        <a href="#quest" class="header__btn">Оставить заявку</a>
    </header>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	