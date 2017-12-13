<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
    <?$APPLICATION->ShowHead()?>
    <title><?$APPLICATION->ShowTitle()?></title>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <?
        CJSCore::Init(array("jquery"));
        // РџСЂРёРјРµСЂ РїРѕРґРєР»СЋС‡РµРЅРёСЏ js $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.sudoSlider.min.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/modernizr.custom.28468.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.cslider.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/move-top.js" );
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/easing.js" );
    ?>
    <script type="text/javascript">
        $(function() {
            $('#da-slider').cslider();
        });
    </script>
    <script src="js/owl.carousel.js"></script>
        <script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
        items : 4,
        lazyLoad : true,
        autoPlay : true,
        navigation : true,
        navigationText : ["",""],
        rewindNav : false,
        scrollPerPage : false,
        pagination : false,
        paginationNumbers: false,
      });

    });
    </script>
   <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>   
    <? 
    //РџСЂРёРјРµСЂ РїРѕРґРєР»СЋС‡РµРЅРёСЏ css $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/type.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/slider.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.css");
    ?>
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico" />
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
    <div class="header">
<?$APPLICATION->IncludeComponent(
    "bitrix:catalog.search",
    "template1",
    Array(
        "ACTION_VARIABLE" => "action",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BASKET_URL" => "/personal/basket.php",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "CONVERT_CURRENCY" => "N",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_COMPARE" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_FIELD2" => "id",
        "ELEMENT_SORT_ORDER" => "asc",
        "ELEMENT_SORT_ORDER2" => "desc",
        "HIDE_NOT_AVAILABLE" => "N",
        "IBLOCK_ID" => "10",
        "IBLOCK_TYPE" => "products",
        "LINE_ELEMENT_COUNT" => "3",
        "NO_WORD_LOGIC" => "N",
        "OFFERS_CART_PROPERTIES" => "",
        "OFFERS_FIELD_CODE" => array(0=>"",1=>"",),
        "OFFERS_LIMIT" => "5",
        "OFFERS_PROPERTY_CODE" => array(0=>"",1=>"",),
        "OFFERS_SORT_FIELD" => "sort",
        "OFFERS_SORT_FIELD2" => "id",
        "OFFERS_SORT_ORDER" => "asc",
        "OFFERS_SORT_ORDER2" => "desc",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Товары",
        "PAGE_ELEMENT_COUNT" => "30",
        "PRICE_CODE" => "",
        "PRICE_VAT_INCLUDE" => "Y",
        "PRODUCT_ID_VARIABLE" => "id",
        "PRODUCT_PROPERTIES" => "",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "PROPERTY_CODE" => array(0=>"",1=>"",),
        "RESTART" => "N",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "SECTION_URL" => "",
        "SHOW_PRICE_COUNT" => "1",
        "USE_LANGUAGE_GUESS" => "Y",
        "USE_PRICE_COUNT" => "N",
        "USE_PRODUCT_QUANTITY" => "N"
    )
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"basket", 
	array(
		"HIDE_ON_BASKET_PAGES" => "Y",
		"PATH_TO_AUTHORIZE" => "",
		"PATH_TO_BASKET" => SITE_DIR."personal/basket.php",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "N",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_PERSONAL_LINK" => "Y",
		"SHOW_PRODUCTS" => "N",
		"SHOW_TOTAL_PRICE" => "Y",
		"COMPONENT_TEMPLATE" => "basket"
	),
	false
);?>

        <div class="clear"></div>
    </div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
    <div class="header_sub">
        <div class="h_menu">

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "catalog",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel"
	),
	false
);?>

        </div>
        <div class="top-nav">
              <nav class="nav">             
                <a href="#" id="w3-menu-trigger"> </a>
                      <ul class="nav-list" style="">
                            <li class="nav-item"><a class="active" href="index.html">Home</a></li>
                            <li class="nav-item"><a href="sale.html">Sale</a></li>
                            <li class="nav-item"><a href="handbags.html">Handbags</a></li>
                            <li class="nav-item"><a href="accessories.html">Accessories</a></li>
                            <li class="nav-item"><a href="shoes.html">Shoes</a></li>
                            <li class="nav-item"><a href="service.html">Services</a></li>
                            <li class="nav-item"><a href="contact.html">Contact</a></li>
                     </ul>
               </nav>
                 <div class="search_box">
                <form>
                   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                </form>
            </div>
              <div class="clear"> </div>
              <script src="js/responsive.menu.js"></script>
         </div>       
    <div class="clear"></div>
</div>
</div>
</div>
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            





	