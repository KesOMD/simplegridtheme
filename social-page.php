<?php
/*
Template Name: Social Page
*/
?>
<?php get_header(); ?>

        <div class="blank-content">

            <div class="blank-header">
                <h2><?php the_title(); ?></h2>
            </div><!--//post-image-main-->

            <div class="blank-text">
                <?php the_content(); ?>
            </div>
            <div class="blank-text">
                <div class="social-yt-cont">
                    <iframe class="social-youtube" width="289" height="213" src="//www.youtube.com/embed/OmRr1CDR0zA?version=3&enablejsapi=1" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>
                </div>
            </div>
            
            <div class="blank-text">
                <div class="gallery-cont" id="gal-page">
                    <?php echo do_shortcode('[pinterest_pinboard username="jamesvillasuk" rows=6 cols=4 new_window=1]') ?>
                </div>
            </div>

            <div class="blank-text" id="soc-page">
                <div class="social-tw-cont">
                    <?php echo do_shortcode("[AIGetTwitterFeeds ai_username='jamesvillasuk' ai_numberoftweets='2' ai_tweet_title='']"); ?>
                </div>
            </div>
            
        </div><!--//blog_left-->

        

        <div class="clear"></div>

        

<?php get_footer(); ?>            