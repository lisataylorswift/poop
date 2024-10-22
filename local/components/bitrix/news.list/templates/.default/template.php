<?php
/*
 * Файл /local/templates/blog/components/bitrix/news/blog/bitrix/news.list/.default/template.php
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$this->setFrameMode(true);
?>

<h1><?= $arResult['SECTION_DATA']['NAME']; ?></h1>

<?php if (!empty($arResult['SECTION_DATA']['CHILDS'])): /* подразделы текущего раздела */ ?>
    <ul class="blog-subsections">
    <?php foreach ($arResult['SECTION_DATA']['CHILDS'] as $arSection): ?>
        <li><a href="<?= $arSection['SECTION_PAGE_URL'] ?>"><?= $arSection['NAME'] ?></a></li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if ($arParams['DISPLAY_TOP_PAGER']): /* постраничная навигация вверху */ ?>
    <?= $arResult['NAV_STRING']; ?>
<?php endif; ?>

<section class="blog-articles">
<?php foreach ($arResult['ITEMS'] as $arItem): /* список статей блога */ ?>
    <article>
        <div class="blog-article-image">
            <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
                <img src="<?= $arItem['PREVIEW_PICTURE']['SRC']; ?>"
                     title="<?= $arItem['PREVIEW_PICTURE']['ALT']; ?>" />
            </a>
        </div>
        <div class="blog-article-header">
            <h2><a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"><?= $arItem['NAME']; ?></a></h2>
            <ul>
                <li>Добавлено: <?= $arItem['DATE_CREATE']; ?></li>
                <li>Автор: <?= $arItem['PROPERTIES']['AUTHOR']['VALUE']; ?></li>
            </ul>
        </div>
        <div class="blog-article-preview">
            <p><?= $arItem['PREVIEW_TEXT']; ?></p>
        </div>
        <div class="blog-article-links">
            <ul>
                <li><span>Просмотров: <?= $arItem['SHOW_COUNTER']; ?></li>
                <li><a href="<?= $arItem['DETAIL_PAGE_URL']; ?>">Читать дальше</a></li>
            </ul>
        </div>
    </article>
<?php endforeach; ?>
</section>

<?php if ($arParams['DISPLAY_BOTTOM_PAGER']): /* постраничная навигация внизу */  ?>
    <?= $arResult['NAV_STRING']; ?>
<?php endif; ?>