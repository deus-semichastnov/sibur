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
    <!-- WOWjs -->
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/wow.min.js"); ?>
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
        <? $APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "",
                "USE_EXT" => "N",
                "DELAY" => "N",
                "MENU_TITLE" => "top",
                "ALLOW_MULTI_SELECT" => "N",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""
            )
        ); ?>

        <a href="#" class="header__language">En</a>
        <a href="#quest" class="header__btn">Оставить заявку</a>
    </header>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	