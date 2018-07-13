<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent(
	"my:my.catlog",
	"",
	Array(
		"COUNT" => "6",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "catalog"
	)
);?><br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>