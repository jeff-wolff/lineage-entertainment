<?php
get_header();
?>

<div class="body-single container">
  <h1 class=""><?php the_title(); ?></h1>
  <figure class="featured-image">
    <?php echo get_the_post_thumbnail(); ?>
  </figure>
  <?php the_content(); ?>
</div>

<?php
get_footer();
?>
