<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<div class="popup-video-wrap" hidden>
    <div class="popup-video">
        <button class="popup-video-close" id="videoCloseButton">&times;</button>
        <div class="popup-video-border">
            <div class="popup-video-iframe">
                <iframe id="videoFrame" src="" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="footer__left">
            <a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Lineage Entertainment Company logo" class="logo" loading="lazy"> Lineage</a>
        </div>
        <div class="footer__right">
            <!-- <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/creators">Creators</a></li>
                <li><a href="#" id="reelButtonFooter"><svg style="vertical-align: middle;position: relative;top: -1.5px;" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6 4l15 8-15 8z" /></svg> Reel</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul> -->
            <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'footer',
                    'menu_class' => 'nav',
                    'container_id'    => 'footer-menu',
                  )
                );
            ?>
        </div>
    </div>
    <div class="container">
        <p class="legal">&copy;<?php echo date('Y'); ?> Lineage | All rights reserved.</p>
    </div>
</footer>

</div><!-- #page -->


<script src="https://cdn.jsdelivr.net/npm/swiper@9.4.1/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/atropos@1.0.2/atropos.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>
