<?
    function getSlides($section_id){
        $arResult = array();
        if(CModule::IncludeModule("iblock"))
        {
            $arSelect = Array(
                "ID",
                "NAME",
                "DATE_ACTIVE_FROM",
                "PROPERTY_BACKGROUND",
                "PROPERTY_LINK",
                "PROPERTY_TEXT_BTN",
                "PROPERTY_ACTIVE_SLIDE",
                "DETAIL_TEXT",
                "PREVIEW_TEXT",
                "PROPERTY_PIC",
                "PROPERTY_FORM_VARIANT"
            );
            $ib = 11;
            if(SITE_ID == "s2"){
                $ib = 27;
            }
            $arFilter = Array("IBLOCK_ID"=>$ib, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID"=>$section_id);
            $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
            while($ob = $res->Fetch())
            {
                if($ob["PROPERTY_PIC_VALUE"]){
                    $ob["PIC_SRC"] = CFile::GetPath($ob["PROPERTY_PIC_VALUE"]);
                }
                $arResult[] = $ob;
            }
        }
        return $arResult;
    }
    function getCases($section_id){
        $arResult = array();
        if(CModule::IncludeModule("iblock"))
        {
            $arSelect = Array(
                "ID",
                "NAME",
                "IBLOCK_ID",
                "PROPERTY_TARGET",
                "PROPERTY_TASKS",
                "PREVIEW_TEXT"
            );
            $ib = 15;
            if(SITE_ID == "s2"){
                $ib = 22;
            }
            $arFilter = Array("IBLOCK_ID"=>$ib, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID"=>$section_id);
            //echo "<pre>"; print_r($arFilter); echo "</pre>";
            $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
            while($ob = $res->GetNextElement())
            {
                $case["FIELDS"] = $ob->GetFields();
                $case["PROPS"] = $ob->GetProperties();
                $arResult[$case["FIELDS"]["ID"]] = $case;
            }
        }
        return $arResult;
    }

?>