<?php get_header(); ?>

        <div class="error-content">

            <div class="error-image-main">
                <div class="err-desk">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-image.jpg" />
                </div>
                <div class="err-phone">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-image-phone.jpg" />
                </div>
                <div class="err-devices">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/404-image-devices.jpg" />
                </div>

                <div class="roundel1" id="rou-error">
                    <div class="roundel-text" id="rou-error-text">
                        <h1>404<br>Page not found</h1>
                    </div>
                </div>
                
            </div><!--//post-image-main-->

            <div class="error-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam tortor et mollis ullamcorper. Aenean tempus, nisl vel vehicula tempus, sapien nisi faucibus massa, in sollicitudin eros lorem et tellus. </p>
            </div>
            <div class="related-post-cont" id="error-related">
                <h2>More from James</h2>
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