<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Посты");
?>
	<div class="s-extra">
	
		<div class="row top">
		
			<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	".default", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "AUTHOR",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "rest_entity",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "j M Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "AUTHOR",
			1 => "DATE",
			2 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>
		</div>
		
	</div>


<?$APPLICATION->IncludeComponent("bitrix:search.tags.cloud", "tags", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Искать только в активных по дате документах
		"COLOR_NEW" => "3E74E6",	// Цвет более позднего тега (пример: "C0C0C0")
		"COLOR_OLD" => "C0C0C0",	// Цвет более раннего тега (пример: "FEFEFE")
		"COLOR_TYPE" => "Y",	// Плавное изменение цвета
		"FILTER_NAME" => "",	// Дополнительный фильтр
		"FONT_MAX" => "50",	// Максимальный размер шрифта (px)
		"FONT_MIN" => "10",	// Минимальный  размер шрифта (px)
		"PAGE_ELEMENTS" => "150",	// Количество тегов
		"PERIOD" => "",	// Период выборки тегов (дней)
		"PERIOD_NEW_TAGS" => "",	// Период,  в течение которого считать тег новым (дней)
		"SHOW_CHAIN" => "Y",	// Показывать цепочку навигации
		"SORT" => "NAME",	// Сортировка тегов
		"TAGS_INHERIT" => "Y",	// Сужать область поиска
		"URL_SEARCH" => "/search/index.php",	// Путь к странице поиска (от корня сайта)
		"WIDTH" => "100%",	// Ширина облака тегов (пример: "100%" или "100px", "100pt", "100in")
		"arrFILTER" => array(	// Ограничение области поиска
			0 => "iblock_rest_entity",
		),
		"arrFILTER_iblock_rest_entity" => array(	// Искать в информационных блоках типа "iblock_rest_entity"
			0 => "2",
		)
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>