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

<!-- <footer>
    <div class="container">
        <div class="footer__left">
            <a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Lineage Entertainment Company logo" class="logo" loading="lazy"> Lineage</a>
        </div>
        <div class="footer__right"> -->
            <?php /*
                wp_nav_menu(
                  array(
                    'theme_location' => 'footer',
                    'menu_class' => 'nav',
                    'container_id'    => 'footer-menu',
                  )
                );
            */ ?>
        <!-- </div>
    </div>
    <div class="container">
        <p class="legal">&copy;<?php echo date('Y'); ?> Lineage | All rights reserved.</p>
    </div>
</footer> -->


<footer class="site-footer">
		<div class="container">
          <div>
            <a href="https://www.lineagedigital.com/" class="footer-logo-item"><img src="<?php bloginfo('template_directory'); ?>/assets/images/ln-menu-item.svg" alt="Lineage Craft Magnetic"></a>
            <a href="https://www.lineagedigital.com/" class="footer-logo-item"><img src="<?php bloginfo('template_directory'); ?>/assets/images/lec-menu-item.svg" alt="Lineage Entertainment Company"></a>
            <a href="https://www.lineagedigital.com/" class="footer-logo-item"><img src="<?php bloginfo('template_directory'); ?>/assets/images/las-menu-item.svg" alt="Lineage Audience Studio"></a>
          </div>
          <div>
            <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
            <span class="sep"> | </span> All rights reserved.</p>
          </div>
          <div>
            <ul class="footer-nav-right">
              <li><a target="_blank" href="https://lineagedigital.recruitee.com/">Careers</a></li>
              <li><a target="_blank" href="https://www.instagram.com/lineagedigital/" class="instagram"><svg width="27" height="27" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a></li>
              <li><a target="_blank" href="https://www.linkedin.com/company/lineage-digital/posts/?feedView=all" class="linkedin"><svg width="27" height="27" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a></li>

            </ul>
          </div>
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
