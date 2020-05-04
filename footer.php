        </div>
            <footer id="footer">
                <div id="content">
                    <div class="contact-information">
                        <strong class="title">About</strong>
                        <ul class="address">
                            <li><i class="fas fa-map-marker-alt"></i> 4033 W. Charleston Blvd. <br/> Las Vegas, NV 89102</li>
                            <li><i class="far fa-envelope"></i> example@domain.com</li>
                            <li><i class="fas fa-phone-volume"></i> 123.456.7890</li>
                            <li><i class="far fa-comments"></i> Live Chat Now</li>
                        </ul>
                    </div>
                    <div>
                        <strong class="title">Owners & Investors</strong>
                        <?php wp_nav_menu(array('theme_location' => 'owners'));?>
                    </div>
                    <div>
                        <strong class="title">Tenants</strong>
                        <?php wp_nav_menu(array('theme_location' => 'tenants'));?>
                    </div>
                    <div>
                        <strong class="title">Resources</strong>
                        <?php wp_nav_menu(array('theme_location' => 'resources'));?>
                    </div>
                </div>
                <div class="disclaimer">
                    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. All Rights Reserved. <span>Developed by <a href="https://mydigitalcanvas.com">Digital Canvas</a></span>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>