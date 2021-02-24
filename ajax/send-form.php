<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(CModule::IncludeModule('iblock')){
    if(isset($_REQUEST["tildaspec-projectid"]) && !empty($_REQUEST["tildaspec-projectid"])){
        $arEventFields = array(
            "NAME"  => $_REQUEST["Name"],
            "PHONE" => $_REQUEST["Phone"],
            "EMAIL" => $_REQUEST["Email"],
            "THEME" => 'Заявка с раздела '.$_REQUEST['Discount'],
            "EMAIL_TO" => "marketing@skolkovo.realty"
        );
        if($arEventFields['PHONE']) {
            $sendTpl = "SKOLKOVO_FEEDBACK";
//			print_r(json_encode($_REQUEST));
            if ( CEvent::Send( $sendTpl, "s1", $arEventFields ) ) {
                echo json_encode(array('results'=>array('1:форма успешно отправлена')));
            }
        }
    }else{
        $name = $_GET["name"];
        if(isset($_GET["name"])){
            $name = $_GET["name"];
        }else{
            $name = $_GET["phone"];
        }
        if(isset($_GET["mail"])){
            $mail = $_GET["mail"];
        }else{
            $mail = $_GET["phone"];
        }
        $arEventFields = array(
            "NAME"  => $_GET["name"],
            "EMAIL" => $_GET["mail"],
            "PHONE" => $_GET["phone"],
            "THEME" => $_GET["theme"],
            "EMAIL_TO" => "marketing@skolkovo.realty"
        );
        if(stristr($_GET["theme"],'каталог')){
            //$arEventFields['EMAIL_TO'] = 'sales@xn--80apijy7dta.xn--80adxhks';
            $arEventFields['EMAIL_TO'] = 'marketing@skolkovo.realty';
        }
        //echo "<pre>"; print_r($_GET); echo "</pre>";
        if(isset($_GET["price"])){
            $arEventFields["PRICE"] = $_GET["price"];
        }
        if(isset($_GET["country"])){
            $arEventFields["COUNTRY"] = "Страна: ".$_GET["country"];
        }
        $sendTpl = "SKOLKOVO_FEEDBACK";
        if(isset($_GET["sendTpl"]) && $_GET["sendTpl"] != ""){
            $sendTpl = $_GET["sendTpl"];
        }
        $recIb = "18";
        $pt = "";
        $arPTFields = array(
            "18" => array(
                "phone" => "Телефон",
                "country" => "Страна",
            ),
            "20" => array(
                "name" => "Имя",
                "phone" => "Телефон",
                "price" => "Моя цена",
            ),
        );

        if(isset($_GET["recIb"]) && $_GET["recIb"] != ""){
            $recIb = $_GET["recIb"];
        }
        if(isset($arPTFields[$recIb])){
            foreach ($arPTFields[$recIb] as $key => $value) {
                if(isset($_GET[$key])){
                    $pt .= $value.": ".$_GET[$key]."\n";
                }
            }
        }else{
            $pt = $_GET["phone"];
        }
        if($arEventFields['PHONE']) {
            if ( CEvent::Send( $sendTpl, "s1", $arEventFields ) ) {
                $el = new CIBlockElement;

                $arLoadProductArray = array(
                    "MODIFIED_BY"       => 1,
                    "IBLOCK_SECTION_ID" => false,
                    "IBLOCK_ID"         => $recIb,
                    "NAME"              => $name,
                    "ACTIVE"            => "Y",
                    "CODE"              => $mail,
                    "PREVIEW_TEXT"      => $pt,
                );
                if ( $el->Add( $arLoadProductArray ) ) {
                    echo "send";
                }

            }
        }
    }


}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>