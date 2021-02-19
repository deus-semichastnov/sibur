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
                "PROPERTY_PIC"
            );
            $arFilter = Array("IBLOCK_ID"=>11, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID"=>$section_id);
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
?>