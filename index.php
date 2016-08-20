<?php get_header(); ?>
  <!-- Hero Area --------------------------------------------------------->
  <!-- TODO -- Make this DRY make a template part for hero area -->
  <?php query_posts('posts_per_page=1'); ?>
    <?php while (have_posts()) :the_post(); ?>
      <section class="hero-area">
        <article class="top-story">
          <figure class="top-img">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
              <?php endif; ?>
          </figure>
          <div class="top-info">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p>
              <?php the_excerpt(); ?>
            </p>
          </div>
        </article>
        <div class="clear none"></div>
      </section>
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
          <!-- TODO -- Make this DRY make a template part for feed item -->
          <section class="feed">
            <h2>Recent News &amp; Reviews</h2>
            <?php query_posts('posts_per_page=6&offset=1'); ?>
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <article class="feed-item clearfix">
                    <h4 class="feed-type"><?php the_category(' '); ?></h4>
                    <div>
                      <figure class="feed-img">
                        <?php if (has_post_thumbnail()) : ?>
                          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(); ?>
                          </a>
                          <?php endif; ?>
                      </figure>
                        <span>
                          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                          <p><?php the_excerpt(); ?></p>
                        </span>
                   </div>
                  </article>
                  <!-- .feed-item -->
                  <?php endwhile; // end of the loop ?>
                <?php endif; ?>
                <?php wp_reset_query(); // resets the altered query back to the original ?>
          </section>
          <!-- .News/Reviews Section -->

<div class="clear"></div>
<?php get_footer(); ?>
