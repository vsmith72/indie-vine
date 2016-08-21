<?php get_header(); ?>
<!-- Hero Area --------------------------------------------------------->

<?php query_posts('posts_per_page=1&cat=18'); ?>
<?php while (have_posts()) :the_post(); ?>
<?php get_template_part('/partials/loop-hero'); ?>
<?php endwhile; // end of the loop ?>
<?php wp_reset_query(); // resets the altered query back to the original ?>
<!-- Side Bar ---------------------------------------------------------->
<!-- TODO -- Make this a dynamic sidebar with text widgets and a newsletter form -->
<aside class="sidebar">
  <div class="newsletter">
    <h2>Newsletter Signup</h2>
    <form action="">
      <input type="email">
      <input class="btn" type="submit" value="Sign Up"> </form>
    <!-- .newsletter-->
  </div>
  <!-- hide on mobile version -->
  <div class="sidebar-upcoming">
    <h2>Upcoming Concerts</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate excepturi, minima optio reiciendis placeat repudiandae.</p>
    <a href="#">
      <button class="btn"><i class="fa fa-music" aria-hidden="true"></i>See All</button>
    </a>
  </div>
  <!-- .upcoming -->
  <!-- hide on mobile version -->
  <div class="sidebar-faq">
    <h2>Frequently Asked Questions</h2>
    <p>m ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate excepturi.</p>
    <a href="#">
      <button class="btn"><i class="fa fa-question-circle" aria-hidden="true"></i>See All</button>
    </a>
  </div>
  <!-- .faq -->
</aside>
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
