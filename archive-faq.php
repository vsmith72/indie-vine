<?php
/**
 * The template for displaying faq pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package indie_vine
 */
?>
<?php get_header(); ?>
<h1>Frequently Asked Questions</h1>
<?php query_posts('post_type=faq'); ?>
<?php
while ( have_posts() ) : the_post();

//set the vars for the concert post type
$faq_title = get_field('faq_title');
$faq_content = get_field('faq_content');
?>

<article class="faq_feed clearfix">
  <div class="faq_detail">
    <h2><?php echo $faq_title; ?></h2>
    <span class="day"><?php echo $faq_content; ?></span>
    <p class="bold">Email:&nbsp;<a href="mailto:<?php echo get_bloginfo('admin_email'); ?>"><?php echo get_bloginfo('admin_email'); ?></a></p>

  </div>
</article>

<?php endwhile; ?>
<?php wp_reset_query(); ?>



<div class="clear"></div>
<?php get_footer(); ?>
