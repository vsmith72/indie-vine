<?php get_header(); ?>
  <!-- Hero Area --------------------------------------------------------->

  <?php query_posts('posts_per_page=1'); ?>
    <?php while (have_posts()) :the_post(); ?>
      <?php get_template_part('/partials/loop-hero'); ?>
      <?php endwhile; // end of the loop ?>
        <?php wp_reset_query(); // resets the altered query back to the original ?>
          <!-- Side Bar ---------------------------------------------------------->
          <?php get_sidebar(); ?>
          <!-- News/Reviews Feed Section ----------------------------------------->
          <section class="feed">
            <h2>Recent News &amp; Reviews</h2>
            <?php query_posts('posts_per_page=6&offset=1'); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php get_template_part('/partials/loop-feed'); ?>
                  <?php endwhile; // end of the loop ?>
                <?php endif; ?>
                <?php wp_reset_query(); // resets the altered query back to the original ?>
          </section>
          <!-- .News/Reviews Section -->

<div class="clear"></div>
<?php get_footer(); ?>
