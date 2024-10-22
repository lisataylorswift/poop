<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>TaylorSwitity</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php $APPLICATION->ShowHead(); ?>

    <!-- CSS
================================================== -->
<?php   
    // $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/styles.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fonts.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/base.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/vendor.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css", true); 
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/custom.css", true); 

?>

    
    
     
   

    
  
    <!-- favicons
================================================== -->
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
</head>
<body id="top">
<?php $APPLICATION->ShowPanel(); ?>

<!-- pageheader
================================================== -->
<section class="s-pageheader s-pageheader--home">

    <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <a class="logo" href="/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Homepage">
                </a>
            </div> <!-- end header__logo -->

            <ul class="header__social">
                <li>
                    <a href="<?=SITE_TEMPLATE_PATH?>#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="<?=SITE_TEMPLATE_PATH?>#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="<?=SITE_TEMPLATE_PATH?>#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="<?=SITE_TEMPLATE_PATH?>#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </li>
            </ul> <!-- end header__social -->

            <a class="header__search-trigger" href="<?=SITE_TEMPLATE_PATH?>/#0"></a>

            <div class="header__search">

                <form role="search" method="get" class="header__search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>

                <a href="<?=SITE_TEMPLATE_PATH?>#0" title="Close Search" class="header__overlay-close">Close</a>

            </div>  <!-- end header__search -->


            <a class="header__toggle-menu" href="<?=SITE_TEMPLATE_PATH?>/#0" title="Menu"><span>Menu</span></a>

            <nav class="header__nav-wrap">

            <?$APPLICATION->IncludeComponent(
                "bitrix:menu", 
                "top_menu", 
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "Y",
                    "COMPONENT_TEMPLATE" => "top_menu"
                ),
                false
            );?>

                <a href="<?=SITE_TEMPLATE_PATH?>/#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->

        </div> <!-- header-content -->
    </header> <!-- header -->

