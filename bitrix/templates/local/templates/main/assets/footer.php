

<?php
// Если используется система управления сайтом, например, Bitrix, может быть вызов системных функций
if (defined("B_PROLOG_INCLUDED") && B_PROLOG_INCLUDED === true) {
    // Закрываем работу с контентом сайта (если нужно)
    // Например, завершение буферизации вывода (в зависимости от CMS)
}
?>

<!-- HTML-код футера -->
<footer>
    <!-- s-footer
================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">

                <div class="col-two md-four mob-full s-footer__sitelinks">

                    <h4>Quick Links</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Home</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Blog</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Styles</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">About</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Contact</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">

                    <h4>Archives</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">January 2018</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">December 2017</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">November 2017</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">October 2017</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">September 2017</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">August 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">

                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Facebook</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Instagram</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Twitter</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Pinterest</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">Google+</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH?>/#0">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">

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

            </div>
        </div> <!-- end s-footer__main -->

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
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/plugins.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

    </body>

    </html>
</footer>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>
</html>

<footer>
    <p>&copy; <?= date("Y"); ?> Ваш сайт. Все права защищены.</p>
    <!-- Другие элементы футера -->
</footer>

<!-- Если нужно закрыть открытые ранее контейнеры -->
</body>
</html>




