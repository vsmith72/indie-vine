<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package starter2
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

<?php get_template_part('/partials/loop-single'); ?>

<div class="padding">
  <?php dynamic_sidebar('newsletter'); ?>
</div>
<!-- TODO -- need to syle comments to fit the theme using discuss plugin -->
<div class="comments">
  <?php // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
    comments_template();
    endif;
  endwhile; // End of the loop.
  ?>
</div>

<div class="clear"></div>

<?php get_footer(); ?>
