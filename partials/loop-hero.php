<!-- TODO - add if is home to show latest post and an else if not ie the review index -->
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
      <!-- TODO - need a read more button -->
    </div>
  </article>
  <div class="clear none"></div>
</section>
