
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<footer class="footer section" data-href="footer" id="footer">
        <div class="container">
            <div class="footer__wrap">
                <div class="footer__contacts">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/include/".SITE_ID."/footer/phone.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/include/".SITE_ID."/footer/mail.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                </div>
                <? $APPLICATION->IncludeComponent("bitrix:menu", "footer", Array(
                        "ROOT_MENU_TYPE" => "bottom",
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "",
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "MENU_TITLE" => "bottom",
                        "ALLOW_MULTI_SELECT" => "N",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => ""
                    )
                ); ?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/".SITE_ID."/footer/btn_form_1.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>

                <?/*$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/footer/social.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );*/?>
                <div class="footer__address">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH."/include/".SITE_ID."/footer/main-office.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                </div>
            </div>
            <div class="footer__bot">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/".SITE_ID."/footer/footer-desc.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>
            </div>
        </div>
    </footer>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_TEMPLATE_PATH."/include/".SITE_ID."/footer/quest_form.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>




    <script type="module" src="<?=SITE_TEMPLATE_PATH?>/js/libs/threejs/waves.js"></script>


</body>

</html>