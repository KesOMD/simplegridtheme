<?php
/*
Template Name: Gallery Page
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
                <div class="gallery-cont" id="gal-page">
                    <?php echo do_shortcode('[pinterest_pinboard username="jamesvillasuk" rows=3 cols=4 new_window=1]') ?>
                </div>
            </div>
            <div class="related-post-cont" id="error-related">
                <h2>Popular Articles</h2>
                <?php
                $counter = 3;
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=3');
                ?>
                <?php while ( $recentPosts->have_posts() ) : $recentPosts->the_post(); ?>
                <div id="rp-pos<?php echo $a++ ?>" class="related-post">
                        
                        <div class="related-image">
                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'related-thumb' ); ?></a>
                        </div>
                        <div class="related-text">
                            <h4><?php the_category(', '); ?></h4>
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php
                                $post_title = get_the_title();
                                $char_count = mb_strlen($post_title);

                                //Count the amount of characters in the title and trim if too long
                                if ($char_count < 40)
                                {
                                    echo get_the_title();
                                    
                                }
                                else
                                {
                                    $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,30)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...';
                                }
                                
                                
                                ?>
                            </a></h3>
                            <p class="rel-auth">By <?php the_author_posts_link(); ?></p>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div><!--//blog_left-->

        

        <div class="clear"></div>

        

<?php get_footer(); ?>            