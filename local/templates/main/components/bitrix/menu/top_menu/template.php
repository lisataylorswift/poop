<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="header__nav">
    <?php foreach ($arResult as $arItem): ?>
        <!-- Основной пункт меню -->
        <li class="<?= $arItem['SELECTED'] ? 'current' : '' ?> <?= $arItem['IS_PARENT'] ? 'has-children' : '' ?>">
            <a href="<?= $arItem['LINK'] ?>" title="<?= $arItem['TEXT'] ?>"><?= $arItem['TEXT'] ?></a>

            <?php if ($arItem['IS_PARENT']): ?>
                <!-- Подменю для пунктов с дочерними элементами -->
                <ul class="sub-menu">
                    <?php foreach ($arItem['CHILDREN'] as $childItem): ?>
                        <li>
                            <a href="<?= $childItem['LINK'] ?>" title="<?= $childItem['TEXT'] ?>"><?= $childItem['TEXT'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>


<!-- <?php 
echo '<pre>';
print_r($arResult);
echo '</pre>'
?> -->

