<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("/personal/");
?>

<?$APPLICATION->IncludeComponent("bitrix:eshopapp.basket", "basket", Array(
	"AJAX_MODE" => "Y",	// �������� ����� AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"AJAX_OPTION_HISTORY" => "Y",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"CATALOG_FOLDER" => "/products/",	// ���� � ��������
		"COLUMNS_LIST" => array(	// ��������� �������
			0 => "NAME",
			1 => "PRICE",
			2 => "QUANTITY",
			3 => "DELETE",
			4 => "DELAY",
			5 => "WEIGHT",
		),
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",	// ������������ ������ ��� ������ ������� (�� ��� ���������� ������)
		"HIDE_COUPON" => "N",	// �������� ���� ����� ������
		"PATH_TO_ORDER" => "/personal/order.php",	// �������� ���������� ������
		"PRICE_VAT_SHOW_VALUE" => "N",	// ���������� �������� ���
		"QUANTITY_FLOAT" => "N",	// ������������ ������� �������� ����������
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"VARIABLE_ALIASES_ELEMENT_ID" => "ELEMENT_CODE",	// ������������� ��������
		"VARIABLE_ALIASES_SECTION_ID" => "SECTION_CODE",	// ������������� �������
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>