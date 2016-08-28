<article class="detail-content">
  <figure class="reviews-img">
    <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail(); ?>
    </a>
    <?php endif; ?>
  </figure>
  <header class="article-header detail-title">
    <h2><?php the_title(); ?></h2>
    <ul class="feed-meta">
      <li class="article-author"><?php the_author(); ?> &nbsp;&nbsp;|&nbsp;&nbsp;</li>
      <li class="article-pub-date"><time><?php the_date(); ?></time></li>
    </ul>
  </header>
  <h4 class="byline"><span>Byline: </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet modi reprehenderit, consectetur deserunt recusandae repellendus quas a assumenda quasi</h4>


  <?php the_content(); ?>
</article>
