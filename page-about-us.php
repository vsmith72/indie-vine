<?php
/**
 * The template for displaying the about us page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<?php

  // set up vars for contact us
  $email = get_field('email');
  $phone = get_field('telephone_number');
  $street_address = get_field('street_address');
  $city = get_field('city');
?>
<aside class="contact_info">
  <h1>Contact Us</h1>
  <p><span class="bold">Email:&nbsp;</span><?php echo $email; ?></p>
  <p><span class="bold">Telephone:&nbsp;</span><?php echo $phone; ?></p>
  <address class="clearfix">
    <p class="lable bold">Address:&nbsp;</p>
    <span><?php echo $street_address; ?></span><br>
    <span><?php echo $city; ?></span>
  </address>

  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.335570449621!2d-122.3891968841513!3d47.561258999101874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549040f983ac0d13%3A0x16a9bccafea193db!2sEasy+Street+Records+%26+Cafe!5e0!3m2!1sen!2sus!4v1470276982609" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</aside>
<div class="mission">
  <h1>Mission Statement</h1>
  <?php
  $mission_statement = get_field('mission_statement');
  echo $mission_statement; ?>

</div><!-- .mission-->
<div class="team">
  <h1>Meet the Team</h1>
  <?php query_posts('post_type=team_bios&order=asc'); ?>
<?php // set up var for team member bios
 while ( have_posts() ) : the_post();
  $team_member = get_field('team_member');
  $image = get_field('image');
  $title = get_field('title');
  $bio = get_field('bio');
  $size = 'full';
?>

  <div class="team-member clearfix">
    <div class="team-img"><?php if ($image) { echo wp_get_attachment_image( $image, $size); } ?></div>
    <h2 class="team-name"><?php echo $team_member; ?></h2>
    <p class="team-title"><?php echo $title; ?></p>
    <p class="team-description"><?php echo $bio; ?></p>
  </div><!-- end team-member -->
<?php endwhile; ?>
<?php wp_reset_query(); ?>

<div class="clear"></div>
</div>
<?php get_footer(); ?>
