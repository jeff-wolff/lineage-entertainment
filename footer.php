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

<script>
// Swiper Slider
var SWIPER_SPEED = 1250;

var imageSwiper = new Swiper('.image-slider', {
  // direction: 'vertical',
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  speed: SWIPER_SPEED,
  //autoHeight: true,
  loop: false, // Not recommended to enable!!!
  longSwipesRatio: 0.01,
  followFinger: false,
  grabCursor: true,
  // allowTouchMove: false,
});

var statSwiper = new Swiper('.stat-slider', {
  effect: 'cards',
  cardsEffect: {
    perSlideOffset: 10,
    perSlideRotate: 4,
    slideShadows: false
  },
  // fadeEffect: {
  //   crossFade: true
  // },
  autoplay: {
    delay: 3000,
    // reverseDirection: true
  },
  speed: SWIPER_SPEED,
  loop: false, // Not recommended to enable!!!
  grabCursor: true,
  watchSlidesProgress: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

  statSwiper.controller.control = this.imageSwiper;
  imageSwiper.controller.control = this.statSwiper;
</script>


</body>

</html>
