<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php 
// echo '<pre>';
// print_r($arResult);
// echo '</pre>'
?>

        <div class="col-eight md-six tab-full popular">
                    <h3>Popular Posts</h3>
                    <div class="block-1-2 block-m-full popular__posts">
                <?php foreach($arResult["ITEMS"] as $arItem): ?>
<?php 
// echo '<pre>';
// print_r($arItem);
// echo '</pre>'
?> 
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>

                    <?php
                    // Формируем URL изображения
                    $imgSrc = $arItem["PREVIEW_PICTURE"]["SRC"];

                    // Обработка данных статьи
            
                    // Значение автора по умолчанию
                    $author = 'Unknown';
                    // Получаем ID автора из свойства инфоблока
                    $authorID = $arItem["DISPLAY_PROPERTIES"]["AUTHOR"]["VALUE"]; // ID автора
                    // Задаем ID инфоблока с авторами 
                    $IBLOCK_ID = 5; 

                    if ($authorID) {
                        // Выполняем запрос к инфоблоку для получения данных автора
                        $res = CIBlockElement::GetList(
                            [],
                            ['IBLOCK_ID' => $IBLOCK_ID, 'ID' => $authorID],
                            false,
                            false,
                            ['ID', 'NAME', 'PREVIEW_TEXT'] // Выбираем поля
                        );

                        // // Проверяем, получили ли данные
                        if ($authorData = $res->GetNext()) {
                            $author = $authorData['NAME']; // Используем имя автора
                        }
                    }

                    // Выводим имя автора
                    // echo $author;

                    $publishDate =  $arItem["ACTIVE_FROM"];
                    ?>

                    <article class="col-block popular__post" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="popular__thumb">
                            <img src="<?= $imgSrc ?>" alt="<?= $arItem["NAME"] ?>">
                        </a>
                        <h5><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#"><?= $author ?></a></span>
                            <span class="popular__date"><span>on</span> <time datetime="<?= date('Y-m-d', strtotime($publishDate)) ?>">
                                <?= FormatDate('F j, Y', strtotime($publishDate)) ?>
                            </time></span>
                        </section>
                    </article>
                <?php endforeach; ?>
            </div> <!-- end popular_posts -->
        </div>
        