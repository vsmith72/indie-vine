<?php
/**
 * The template for displaying concert pages.
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
<h1>Upcoming Concerts</h1>
<?php
    $today = date('yymmdd');
    $args = array(
      'posts_per_page'  => 10,
      'order'           => 'ASC',
      'post_type'       => 'concerts',
      'meta_query' => array(
        array(
          'key' => 'concert_date',
          'value' => $today,
          'compare' => '>=',
        )
      ),
    );
    query_posts( $args );

    if( have_posts() ) : while ( have_posts() ) : the_post();


    $concert_date = get_field('concert_date');

    //set the vars for the concert post type
    $month = get_field('month');
    $day   = get_field('day');
    $year = get_field('year');
    $band_name     = get_field('band_name');
    $venue  = get_field('venue');
    $venue_address = get_field('venue_address');
    $venue_info = get_field('venue_info');
    $buy_tickets = get_field('buy_tickets');

?>
      <article class="concert_info clearfix">
        <span class="concert_date">
          <span><?php echo $month; ?></span>
          <span class="day"><?php echo $day; ?></span>
          <span><?php echo $year; ?></span>
        </span>

        <span class="concert_details">
          <h2><?php echo $band_name; ?></h2>
          <span><?php echo $venue; ?></span><br>

          <!-- venue info font awesome icons -->
          <?php
            echo '<span class="venue-info">Venue Info: </span>';
          $selected = get_field('venue_info');

          if( in_array('all_ages', $selected) ) {

            echo '<i class="fa fa-users aria-hidden="true"></i>';

          }

          if( in_array('21_up', $selected) ) {

            echo '<i class="fa fa-user-plus aria-hidden="true"></i>';

          }

          if( in_array('food', $selected) ) {

            echo '<i class="fa fa-cutlery aria-hidden="true"></i>';

          }

          if( in_array('bar', $selected) ) {

            echo '<i class="fa fa-glass aria-hidden="true"></i>';

          }

          if( in_array('handicap_accessible', $selected) ) {

            echo '<i class="fa fa-wheelchair aria-hidden="true"></i>';

          }

          ?>

          <button class="btn"><a href="<?php echo $buy_tickets; ?>" target="blank">Buy Tickets<i class="fa fa-external-link" aria-hidden="true"></i></a></button>
        </span>
      </article>

    <?php endwhile; ?>
<?php endif; ?>



<div class="clear"></div>
<?php get_footer(); ?>
