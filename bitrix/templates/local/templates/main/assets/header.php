<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php $APPLICATION->ShowHead(); ?>
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/styles.css">
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<header>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
================================================== -->
    <meta charset="utf-8">
    <title>TaylorSwitity</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/base.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/vendor.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">

    <!-- script
================================================== -->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/modernizr.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/pace.min.js"></script>

    <!-- favicons
================================================== -->
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">

</head>

<body id="top">

<!-- pageheader
================================================== -->
<section class="s-pageheader s-pageheader--home">

    <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <a class="logo" href="index.html">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Homepage">
                </a>
            </div> <!-- end header__logo -->

            <ul class="header__social">
                <li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
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

                <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

            </div>  <!-- end header__search -->


            <a class="header__toggle-menu" href="<?=SITE_TEMPLATE_PATH?>/#0" title="Menu"><span>Menu</span></a>

            <nav class="header__nav-wrap">

                <h2 class="header__nav-heading h6">Site Navigation</h2>

                <ul class="header__nav">
                    <li class="current"><a href="<?=SITE_TEMPLATE_PATH?>/index.html" title="">Home</a></li>
                    <li class="has-children">
                        <a href="<?=SITE_TEMPLATE_PATH?>/#0" title="">Categories</a>
                        <ul class="sub-menu">
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/category.html">Lifestyle</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/category.html">Health</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/category.html">Family</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/category.html">Management</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/category.html">Travel</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/category.html">Work</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="<?=SITE_TEMPLATE_PATH?>/#0" title="">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/single-video.html">Video Post</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/single-audio.html">Audio Post</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/single-gallery.html">Gallery Post</a></li>
                            <li><a href="<?=SITE_TEMPLATE_PATH?>/single-standard.html">Standard Post</a></li>
                        </ul>
                    </li>
                    <li><a href="<?=SITE_TEMPLATE_PATH?>/style-guide.html" title="">Styles</a></li>
                    <li><a href="<?=SITE_TEMPLATE_PATH?>/about.html" title="">About</a></li>
                    <li><a href="<?=SITE_TEMPLATE_PATH?>/contact.html" title="">Contact</a></li>
                </ul> <!-- end header__nav -->

                <a href="<?=SITE_TEMPLATE_PATH?>/#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->

        </div> <!-- header-content -->
    </header> <!-- header -->

</header>

