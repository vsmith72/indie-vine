<?php get_header(); ?>
    <div class="cb-2"> <!-- colorblock 2 - banner | nav-main -->
        <section class="banner-wrapper">
            <header class="banner"><img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" /></header><!-- end banner -->
            <!-- main menu  this the category menu  Only on homepage -->
            <nav class="nav-main">
                <ul class="nav-main">
                        <li class="nav-main"><a href="#starthere">Start Here</a></li>
                        <li class="nav-main"><a href="#cards">Handmade Cards</a></li>
                        <li class="nav-main"><a href="#diy">DIY Home Decor</a></li>
                        <li class="nav-main"><a href="#fav"><span class="nav-main">I Love This!</span></a></li>
                    </ul>
            </nav><!-- end main menu -->
        </section>
    </div><!-- end colorblock -->
    <div class="cb-3"> <!-- colorblock 3 newsletter -->
        <!-- newsletter banner -->
        <aside class="newsletter-banner sb-news-top">
            <p class="newsletter-banner"><span class="newsletter-banner">Welcome!</span> Be sure to <span class="newsletter-banner">subscribe</span> to the newsletter!</p>
            <form class="inline-form">
                <input class="newsletter-banner" type="text" name="name" placeholder="First Name">
                <input class="newsletter-banner" type="text" name="email" placeholder="Email Address">
                <input class="newsletter-banner" type="submit" value="Join Today">
            </form>
        </aside><!-- end newsletter banner -->
    </div><!-- end colorblock -->

    <!-- content-wrapper contains the loop, and sidebars -->
    <main class="content-wrapper">
        <!-- featured post section at the top of the homepage 2 rows of recent posts-->
        <section class="featured">
            <!-- feature header -->
            <header class="feature-header">
                <!-- seperator lines -->
                <div class="feature-title-seperator"></div><!-- end seperator lines -->
                <header class="feature-title"><h2>Recent Posts</h2></header>
                <!-- seperator lines -->
                <div class="feature-title-seperator"></div><!-- end seperator lines -->
                <!-- this will clear the float -->
                <div class="clear"></div><!-- end clear -->
            </header><!-- end feature header -->
                <!-- col-3 wrapper -->
                <article class="column">
                    <div class="col-3">
                        <a href="#test"><img src="images/portrait-feature.png" width="100%"></a>
                        <span class="feat-meta">Posted: January 2, 2016&nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;27 Comments</span>
                        <p class="feat-excerpt">Days bring female his day. It his every darkness dominion life life were set midst herb shall moving seas lesser seasons sixth gathering kind. Meat they're stars day subdue. Seasons.</p>
                        <p class="feat-tags feat-meta">
                                tagged in: <span>tag</span> <span>tag</span> <span>tag</span> <span>tag</span></p>
                    </div>
                    <div class="col-3">
                        <a href="#test"><img src="images/portrait-feature.png" class="front-feature-img"></a>
                        <span class="feat-meta">Posted: January 2, 2016&nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;27 Comments</span>
                        <p class="feat-excerpt">Days bring female his day. It his every darkness dominion life life were set midst herb shall moving seas lesser seasons sixth gathering kind. Meat they're stars day subdue. Seasons.</p>
                        <p class="feat-tags feat-meta">
                                tagged in: <span>tag</span> <span>tag</span> <span>tag</span> <span>tag</span></p>
                    </div>
                    <div class="col-3">
                        <a href="#test"><img src="images/portrait-feature.png"></a>
                        <span class="feat-meta">Posted: January 2, 2016&nbsp;&nbsp;&nbsp;&#124;&nbsp;&nbsp;&nbsp;27 Comments</span>
                        <p class="feat-excerpt">Days bring female his day. It his every darkness dominion life life were set midst herb shall moving seas lesser seasons sixth gathering kind. Meat they're stars day subdue. Seasons.</p>
                        <p class="feat-tags feat-meta">
                                tagged in: <span>tag</span> <span>tag</span> <span>tag</span> <span>tag</span></p>
                    </div>
                    <!-- this will clear the float -->
                    <div class="clear"></div><!-- end clear -->
                </article><!-- end col-3 wrapper -->
        </section><!-- end featured" -->
    </main><!-- end content-wrapper -->
    <div class="cb-4"> <!-- colorblock 4 - More Posts -->
        <div class="more">
            <!-- seperator lines -->
            <div class="more-seperator"></div><!-- end seperator lines -->
            <!-- More Post Link - links to the blog.php page that shows all the posts -->
            <nav class="more-posts"><h2><a href="#home.html">More Posts</a></h2></nav><!-- end more posts-->
            <!-- seperator lines -->
            <div class="more-seperator"></div><!-- end seperator lines -->
            <!-- this will clear the float -->
            <div class="clear"></div><!-- end clear -->
        </div>
    </div><!-- end colorblock -->
<?php get_footer(); ?>
