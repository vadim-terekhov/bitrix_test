<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	


	if(CModule::IncludeModule("iblock"))
	{
	   $items = GetIBlockElementList($arParams["IBLOCK_ID"], 1, Array("SORT"=>"ASC"), $arParams["COUNT"]);
	   $i = 0;
	   while($arItem = $items->GetNext())
	   {
		$db_props = CIBlockElement::GetProperty($arParams["IBLOCK_ID"], $arItem["ID"]); 
			while($arProps = $db_props->Fetch()){ 
			    if ($arProps["PROPERTY_TYPE"]=="L"){
			    	$arResult[$i]["COLOR"] = $arProps["VALUE_ENUM"];
			    }elseif($arProps["PROPERTY_TYPE"]=="S"){
			    	$arResult[$i]["BRAND"] = $arProps["VALUE"];
			    }
			}
		$ar_res = CPrice::GetBasePrice($arItem["ID"]);
        //echo $arItem["NAME"]."<br>";
        //echo $arItem["PREVIEW_TEXT"]."<br>";
        $arResult[$i]["COST"] = CurrencyFormat($ar_res["PRICE"], $ar_res["CURRENCY"]);
   	    $arFile = CFile::GetFileArray($arItem["PREVIEW_PICTURE"]);
   	    $arResult[$i]["PREVIEW_PICTURE"] = $arFile["SRC"];
        $arResult[$i]["NAME"] = $arItem["NAME"];
        $i++;
	   }
	}

	$this->includeComponentTemplate();
?>