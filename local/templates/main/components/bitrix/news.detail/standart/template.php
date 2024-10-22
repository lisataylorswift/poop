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
<div class="s-content__header col-full">
        <h1 class="s-content__header-title">
                        <?= $arResult["NAME"] ?>
                    </h1>
                    <ul class="s-content__header-meta">
                        <li class="date">
                            <?= FormatDate('F j, Y', MakeTimeStamp($arResult["ACTIVE_FROM"])) ?>
                        </li>
                        <li class="cat">
                            In
                            <?php
                            if (!empty($arResult["IBLOCK_SECTION_ID"])) {
                                $section = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"])->GetNext();
                                if ($section) {
                                    ?>
                                    <a href="<?= $section["SECTION_PAGE_URL"] ?>"><?= $section["NAME"] ?></a>
                                    <?php
                                }
                            }
                            ?>
                        </li>
                    </ul>
</div> <!-- end s-content__header -->

<div class="s-content__media col-full">
    <div class="s-content__post-thumb">
        <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
            srcset="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?> 2000w, 
                    <?= $arResult["DETAIL_PICTURE"]["SRC"] ?> 1000w, 
                    <?= $arResult["DETAIL_PICTURE"]["SRC"] ?> 500w"
            sizes="(max-width: 2000px) 100vw, 2000px" >
    </div>
    </div> <!-- end s-content__media -->

    <div class="col-full s-content__main">
                <p class="lead"><?= $arResult["PREVIEW_TEXT"] ?></p>
                <?= $arResult["DETAIL_TEXT"] ?>
                
                <?php if (!empty($arResult['PROPERTIES']['TAG']['TAG_DATA'])): ?>
                    <p class="s-content__tags">
                        <span>Post Tags</span>
                        <span class="s-content__tag-list">
                            <?php foreach ($arResult['PROPERTIES']['TAG']['TAG_DATA'] as $tagData): ?>
                                <a href="#0"><?= $tagData['NAME']?></a>
                            <?php endforeach; ?>
                        </span>
                    </p> <!-- end s-content__tags -->
                <?php endif; ?> 
                  
           
    <div class="s-content__author">
        <?php if (!empty($arResult["PROPERTIES"])): ?>
        <?php if ($arResult['PROPERTIES']["AUTHOR"]['AUTHOR_DATA']["PREVIEW_PICTURE"]): ?>
            <img src="<?= CFile::GetPath($arResult['PROPERTIES']["AUTHOR"]['AUTHOR_DATA']["PREVIEW_PICTURE"]) ?>" alt="<?= $arResult['PROPERTIES']["AUTHOR"]['AUTHOR_DATA']["NAME"] ?>">
        <?php else: ?>
        <?php endif; ?> 

                <div class="s-content__author-about">
                    <h4 class="s-content__author-name">
                        <a href="<?= $arResult["AUTHOR"]["DETAIL_PAGE_URL"] ?>"><?= $arResult['PROPERTIES']["AUTHOR"]['AUTHOR_DATA']["NAME"] ?></a>
                    </h4>

                    <p><?= $arResult['PROPERTIES']["AUTHOR"]['AUTHOR_DATA']["PREVIEW_TEXT"] ?></p>

                    <ul class="s-content__author-social">
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">GooglePlus</a></li>
                        <li><a href="#0">Instagram</a></li>
                    </ul>
                </div>
        <?php else: ?>
            <p>Anonym</p>
        <?php endif; ?>
    </div>
</div>

    

<?php 
// echo '<pre>';
// print_r($arItem);
// echo '</pre>'
?>

        

