<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult['ITEMS'])):?>

    <?php foreach ($arResult['ITEMS'] as $index => $item): ?>
        <?php if ($index == 0): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
        <div class="featured__column featured__column--big" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="entry" style="background-image:url('<?= $item['PREVIEW_PICTURE']['SRC'] ?>');">
                <div class="entry__content">
                    <span class="entry__category"><a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['PREVIEW_TEXT'] ?></a></span>

                    <h1><a href="<?= $item['DETAIL_PAGE_URL'] ?>" title=""><?= $item['NAME'] ?></a></h1>

                    <div class="entry__info">
                        <a href="<?=SITE_TEMPLATE_PATH?>#0" class="entry__profile-pic">
                            <img class="avatar" src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="">
                        </a>

                        <ul class="entry__meta">
                            <li><a href="<?=SITE_TEMPLATE_PATH?>#0"><?= $item['DETAIL_TEXT'] ?></a></li>
                            <li><?= $item['DISPLAY_ACTIVE_FROM'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="featured__column featured__column--small" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="entry" style="background-image:url('<?= $item['PREVIEW_PICTURE']['SRC'] ?>');">
                <div class="entry__content">
                    <span class="entry__category"><a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['PREVIEW_TEXT'] ?></a></span>

                    <h1><a href="<?= $item['DETAIL_PAGE_URL'] ?>" title=""><?= $item['NAME'] ?></a></h1>

                    <div class="entry__info">
                        <a href="<?=SITE_TEMPLATE_PATH?>#0" class="entry__profile-pic">
                            <img class="avatar" src="<?= $item['DETAIL_PICTURE']['SRC'] ?>" alt="">
                        </a>

                        <ul class="entry__meta">
                            <li><a href="<?=SITE_TEMPLATE_PATH?>#0"><?= $item['DETAIL_TEXT'] ?></a></li>
                            <li><?= $item['DISPLAY_ACTIVE_FROM'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>        

<?php endif; ?>
