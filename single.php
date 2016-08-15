<?php get_header(); ?>
    <!-- content-wrapper contains the loop, and sidebars -->
    <div class="content-wrapper">
        <!-- content left contains the loop in 2 column layout all templates excpet home and 404 -->
        <div class="content-left">
            <!-- display the loop -->
            <div class="loop">
                <header class="post-header">
                    <header class="single-title"><h1>This is the Post Title - limit the characters this would be 62</h1></header>
                    <!-- seperator lines -->
                    <div class="single-seperator"></div><!-- end seperator lines -->
                    <!-- this will clear the float -->
                    <div class="clear"></div><!-- end clear -->
                </header><!-- end post header -->
                <!-- post date -->
                <div class="single-date"><p>January 24, 2016</p></div><!-- end single date -->
                <!-- post excerpt -->
                <div class="single-excerpt"><p>Fruitful fifth. Don't living was saying in fish Green make i dry whose likeness kind under years thing itself you're open over seasons light sea waters heaven beginning the after moved spirit, days upon it fly for it whose give light give heaven fifth isn't. Midst tree one created years. Whose after you'll firmament. Two very whose moveth they're open brought. Of male, whose shall god meat divided isn't multiply won't, that good dry, days. Herb you man night spirit without. Green unto isn't fish brought unto creature fourth fly moveth made seas spirit image first multiply fish also. Seed.</p></div><!-- end single excerpt -->
                <!-- post feature image -->
                <div class="postthumbnail-single"><img src="images/hello.png" class="in-post-img" max-width="100%"></div><!-- end single feature image -->
                <!-- single post tags -->
                <div class="single-tag"><p>tagged in: <span>tag</span> <span>tag</span> <span>tag</span> <span>tag</span></p></div><!-- end single post tags -->
                <!-- post content -->
                <div class="post-content">
                    <h1 class="in-post-h1">This is an Large Heading</h1>
                    <p class="in-post-p">Of Face
                        Abundantly our to god be. Herb great kind, evening one gathering bring created Very set don't rule light for. Without male. Herb. Living <a href="#">greater days</a> don't fruit male fourth upon. Winged morning give greater shall heaven first beast you're darkness.</p>
                    <h2 class="in-post-h2">This is a Mid-Sized Heading</h2>
                    <p>Them Gathered Over Green Behold Also Beginning
Made. Very yielding. Dominion from green light male land. Open every earth first. In shall creature air blessed place over, multiply give gathering living, great greater. Creature whales fruit.</p>
Made. Very yielding. Dominion from green light male land. Open every earth first. In shall creature air blessed place over, multiply give gathering living, great greater. Creature whales fruit.</p>
                    <h3 class="in-post-h3">This is a Small Heading</h3>
                    <p class="in-post-p">Whales from let good and good whose one very and every give of. Sea every which above form earth our bring she'd seasons it second very void and there winged doesn't fly above. The is divide may, moving in isn't i given man moveth, be.</p>
                    <p class="in-post-p"><h4 class="in-post-h4">This is a Very Small Heading... more like bold text..</h4>
                    Cattle unto fowl their rule seed</p>

            <p class="in-post-p">Cattle unto fowl their rule seed. Was shall. Life a, them made meat. Man created sixth fowl may. Fill behold. And shall. Grass there greater moveth shall doesn't, waters <span class="in-post-it">first bring lights image over abundantly lesser grass. May all abundantly don't heaven.</span> Spirit you're face life.</p>
             <span class="signature"> ~ Vanessa</span>
            <div class="clear"></div>

            <aside class="in-post-blockquote-border">
                <h3>Want more Card Challenges?</h3>
                <a href="#">Challenge #1 a Great Big Card for the Birthday Boy</a>
                <a href="#">Challenge #1 Shaped Cards for all Occassions</a>
                <a href="#">This is the Post Title - limit the characters this would be 62</a>
            </aside>
            <aside class="in-post-blockquote-teal"><p class="in-post-it">Very yielding. Dominion from green light male land. Open every earth first. In shall creature air blessed place over, multiply give gathering living, great greater.</p></aside>
<aside class="in-post-blockquote-coral"><p><?php affilateDisclaimer(); ?></p></aside>

                </div><!-- end post content -->
                <!-- next and previous post navigation -->
                <section class="next-prev-nav">
                    <nav class="prev"><h2>Previous Post</h2><h3>Post Title Here</h3></nav>
                    <nav class="next"><h2>Next Post</h2><h3>Post Title Here</h3></nav>
                    <!-- this will clear the float -->
                    <div class="clear"></div><!-- end clear -->
                </section><!-- end next and previous post navigation -->
                <!-- related posts -->
                <section class="related">
                    <header class="related">
                        <h2>You Might Also Like</h2>
                    </header>
                    <div class="seperator"></div>
                    <!-- this will clear the float -->
                    <div class="clear"></div><!-- end clear -->
                    <aside>
                        <div class="col-3"><img src="images/related.png" class="in-post-related"></div>
                        <div class="col-3"><img src="images/related.png" class="in-post-related"></div>
                        <div class="col-3"><img src="images/related.png" class="in-post-related"></div>
                        <!-- this will clear the float -->
                    <div class="clear"></div><!-- end clear -->
                    </aside>
                </section><!-- end related posts -->
                <!-- author box -->
                <aside class="author-box">
                    <a href="#aboutme.html"><img src="images/me.jpg" width="10%" /></a>
                    <header><span>Author Box</span></header>
                    <p>Days bring female his day. It his every darkness dominion life life were set midst herb shall moving seas lesser seasons sixth gathering kind. Meat they're stars day subdue. Days bring female his day. It his every darkness dominion life life were set midst herb shall moving seas lesser seasons sixth gathering kind. Meat they're stars day subdue. Days bring female his day. It his every darkness dominion life life were set midst herb shall moving seas lesser seasons sixth gathering kind. Meat they're stars day subdue.</p>
                </aside><!-- end author box -->
                <!-- post title -->
                <div class="post-comments"></div><!-- end post comments -->
            </div><!-- end the loop -->
        </div><!-- end content-left -->
        <!-- content-right contains the sidebar for all templates except home and 404-->
        <div class="content-right">
            <!--sidebar right contains widgets -->
            <div class="sb-right"><?php get_sidebar('sb-right'); ?></div><!-- end sidebar right -->
        </div><!-- end content-right -->
        <!-- this will clear the float -->
        <div class="clear"></div><!-- end clear -->
    </div><!-- end content-wrapper -->
<div class="cb-3"> <!-- colorblock 4 - More Posts -->
    <!-- newsletter banner -->
    <aside class="newsletter-banner"><?php get_sidebar('sb-news-footer'); ?></aside><!-- end newsletter banner -->
</div><!-- end colorblock -->
<?php get_footer(); ?>
