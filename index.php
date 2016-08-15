<?php get_header(); ?>
<!-- content-wrapper contains the loop, and sidebars -->
<div class="content-wrapper">
    <!-- content left contains the loop in 2 column layout all templates excpet home and 404 -->
    <div class="content-left">
        <header class="loop-header">
            <!-- seperator lines -->
            <div class="loop-title-seperator"></div><!-- end seperator lines -->
            <header class="feature-title"><h1>Blog</h1></header>
            <!-- seperator lines -->
            <div class="loop-title-seperator"></div><!-- end seperator lines -->
            <!-- this will clear the float -->
            <div class="clear"></div><!-- end clear -->
        </header><!-- end feature header -->


        <!-- display the loop -->
        <main class="loop">
            <!-- post feature image -->
            <div class="loop-thumbnail col-a">
                <img src="images/loop-tn.png">
            </div><!-- end single feature image -->
            <section class="col-b">
                <!-- post title -->
                <div class="loop-title"><a href="#top"><h2>This is the Post Title - limit the characters this would be 62</h2></a></div><!-- end single title -->
                <!-- post excerpt -->
                <div class="loop-excerpt"><p>Darkness grass unto. Fourth fruit. Seas there deep i day wherein whales yielding third two the from upon years unto brought morning. Days fill without midst sixth may deep fourth subdue two their evening won't. Light unto first. Saying saw blessed it itself for void fruitful multiply fruitful. Is seas give us living hath Midst</p></div><!-- end single excerpt -->
                <footer class="loop-footer">
                    <!-- post date -->
                    <div class="loop-date float-left">
                        <p>January 24, 2016&nbsp;&#124;&nbsp;</p>
                    </div><!-- end post date -->
                    <!-- comments -->
                    <div class="loop-comment-no float-left">
                        <p>235 comments&nbsp;&#124;&nbsp;</p>
                    </div><!-- end comment # -->
                    <!-- single post tags -->
                    <div class="loop-tags float-left">
                        <p>tagged in: <span>tag</span> <span>tag</span> <span>tag</span> <span>tag</span></p>
                    </div><!-- end single post tags -->
                    <!-- this will clear the float -->
                    <div class="clear"></div><!-- end clear -->
                </footer>
            </section>
            <!-- this will clear the float -->
            <div class="clear"></div><!-- end clear -->
            <div class="loop-seperator"></div>
        </main><!-- end loop -->


        <!-- next and previous post navigation -->
        <section class="next-prev-nav">
            <nav class="prev"><h2>Previous Post</h2></nav>
            <nav class="next"><h2>Next Post</h2></nav>
            <!-- this will clear the float -->
            <div class="clear"></div><!-- end clear -->
        </section><!-- end next and previous post navigation -->
    </div><!-- end content-left -->


    <!-- content-right contains the sidebar for all templates except home and 404-->
    <div class="content-right">
        <?php get_sidebar('sb-right');?>
    </div><!-- end content-right -->

    <!-- this will clear the float -->
    <div class="clear"></div><!-- end clear -->
</div><!-- end content-wrapper -->
<?php get_footer(); ?>
