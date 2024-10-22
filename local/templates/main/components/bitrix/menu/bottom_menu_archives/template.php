<!-- 
<?php 
echo '<pre>';
print_r($arResult);
echo '</pre>'
?> -->

<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!-- <footer class="s-footer">

    <div class="s-footer__main">
        <div class="row"> -->

		<div class="col-two md-four mob-full s-footer__archives">

			<h4>Archives</h4>

    <ul class="s-footer__linklist">
        <?php foreach ($arResult as $menuItem): ?>
            <li>
                <a href="<?= $menuItem['LINK'] ?>" <?= $menuItem['SELECTED'] ? 'class="selected"' : '' ?>>
                    <?= $menuItem['TEXT'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</div> <!-- end s-footer__sitelinks -->

