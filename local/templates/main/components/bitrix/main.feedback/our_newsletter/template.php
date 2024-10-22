<!-- 
<?php 
echo '<pre>';
print_r($arResult);
echo '</pre>'
?> -->

<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="col-five md-full end s-footer__subscribe">

    <!-- <h4>Our Newsletter</h4>

    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationем ipsам. Culпа consequatur occaecати.</p> -->

    <div class="subscribe-form">
        <form id="mc-form" class="group" method="post" action="<?= POST_FORM_ACTION_URI ?>" novalidate="true">
            
            <?= bitrix_sessid_post() ?> <!-- защита формы -->

            <input type="hidden" name="submit" value="Y"> <!-- скрытое поле для отправки формы -->

            <!-- Поле для email -->
            <input type="email" name="user_email" class="email" id="mc-email" 
                   placeholder="Email Address" required=""
                   value="<?= htmlspecialcharsbx($arResult['AUTHOR_EMAIL']) ?>">

            <!-- Сообщение об успехе или ошибке -->
            <?php if (!empty($arResult["ERROR_MESSAGE"])): ?>
                <div class="subscribe-message error">
                    <?= implode("<br>", $arResult["ERROR_MESSAGE"]); ?>
                </div>
            <?php elseif (!empty($arResult["OK_MESSAGE"])): ?>
                <div class="subscribe-message success">
                    <?= $arResult["OK_MESSAGE"] ?>
                </div>
            <?php endif; ?>

            <!-- Кнопка отправки -->
            <input type="submit" name="submit" value="Send">

        </form>
    </div>

</div> <!-- end s-footer__subscribe -->


<!-- <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">

                        <input type="submit" name="subscribe" value="Send">

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>
                </div> -->