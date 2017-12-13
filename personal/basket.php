<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("/personal/");
?>

<?$APPLICATION->IncludeComponent("bitrix:eshopapp.basket", "basket", Array(
	"AJAX_MODE" => "Y",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "Y",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CATALOG_FOLDER" => "/products/",	// Путь к каталогу
		"COLUMNS_LIST" => array(	// Выводимые колонки
			0 => "NAME",
			1 => "PRICE",
			2 => "QUANTITY",
			3 => "DELETE",
			4 => "DELAY",
			5 => "WEIGHT",
		),
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",	// Рассчитывать скидку для каждой позиции (на все количество товара)
		"HIDE_COUPON" => "N",	// Спрятать поле ввода купона
		"PATH_TO_ORDER" => "/personal/order.php",	// Страница оформления заказа
		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
		"QUANTITY_FLOAT" => "N",	// Использовать дробное значение количества
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"VARIABLE_ALIASES_ELEMENT_ID" => "ELEMENT_CODE",	// Идентификатор элемента
		"VARIABLE_ALIASES_SECTION_ID" => "SECTION_CODE",	// Идентификатор раздела
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>