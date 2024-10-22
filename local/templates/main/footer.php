<footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu_quick_links", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "quick_links_bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu_quick_links"
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu_archives", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "archives_bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu_archives"
	),
	false
);?>


            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu_socials", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "socials_bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu_socials"
	),
	false
);?>

<div class="col-five md-full end s-footer__subscribe">
<h4>Our Newsletter</h4>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_RECURSIVE" => "Y",
		"PATH" => "include/main/our_newsletter.php"
	),
	false
);?>
</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"our_newsletter", 
	array(
		"EMAIL_TO" => "lisafedlil@gmail.com",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "See you in your mailbox!",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => "our_newsletter"
	),
	false
);?>
            <!-- <div class="col-five md-full end s-footer__subscribe">

                <h4>Our Newsletter</h4>

                <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">

                        <input type="submit" name="subscribe" value="Send">

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>
                </div>

            </div> <!-- end s-footer__subscribe -->

        <!-- </div>
    </div> end s-footer__main --> 

    <div class="s-footer__bottom">
        <div class="row">
            <div class="col-full">
                <div class="s-footer__copyright">
                    <span>© Copyright Philosophy 2018</span>
                    <span>Site Template by <a href="https://colorlib.com/">Colorlib</a></span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"></a>
                </div>
            </div>
        </div>
    </div> <!-- end s-footer__bottom -->

</footer> <!-- end s-footer -->


<!-- preloader
================================================== -->
<!-- <div id="preloader">
    <div id="loader">
        <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div> -->
</body>
</html>