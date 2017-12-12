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
        <div class="logo">
            <a href="index.html"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt=""/> </a>
        </div>
        <div class="h_icon">
        <ul class="icon1 sub-icon1">
            <li><a class="active-icon c1" href="#"><i>$300</i></a>
                <ul class="sub-icon1 list">
                    <li><h3>shopping cart empty</h3><a href=""></a></li>
                    <li><p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to view them</p></li>
                </ul>
            </li>
        </ul>
        </div>
        <div class="h_search">
            <form>
                <input type="text" value="">
                <input type="submit" value="">
            </form>
        </div>
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
            





	