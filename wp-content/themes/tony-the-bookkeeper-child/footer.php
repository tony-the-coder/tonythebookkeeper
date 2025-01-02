<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-col">
                <h3>Contact Us</h3>
                <p><a href="tel:5555555555">555.555.5555</a></p>
                <p><a href="mailto:info@tonythebookkeeper.com">info@tonythebookkeeper.com</a></p>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <nav class="footer-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footerMenu',
                        'menu_id'        => 'Footer Menu',
                    ));
                    ?>
                </nav>
            </div>
            <div class="footer-col">
                <h3>Follow Us</h3>
                <nav class="social-nav">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>