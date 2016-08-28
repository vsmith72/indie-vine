<!-- TODO - add if is home to show latest posts and an else if not ie the review index -->
 <article class="feed-item clearfix">
  <h4 class="feed-type">

    <?php
    foreach((get_the_category()) as $category) {
      echo $category->cat_name . ' ';
    }
    ?>

  </h4>

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
      <a href="<?php echo get_permalink(); ?>"><button class="btn-more">Full Story</button></a>
      <!-- TODO - need a read more button -->
    </span>
  </div>
</article>
<!-- .feed-item -->
