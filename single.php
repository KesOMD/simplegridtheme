<?php get_header(); ?>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=518698344902427&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div class="post-content">

        

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          

                <!-- <h1><?php the_title(); ?></h1> -->

                

                <div class="post-image-main">

                    <?php the_post_thumbnail(); ?>

                    <div class="roundel1" id="rou-post">
                        <div class="roundel-text" id="rou-post-text">
                            <h2><?php the_category(', '); ?></h2>
                            <hr class="roundel-line">
                            <h1><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,60)); /*$temp_arr_content[count($temp_arr_content)-1] = "";*/ $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?></h1>
                            <hr class="roundel-line">
                        </div>
                    </div>
                
                </div><!--//post-image-main-->

                <div class="post-image-phone">
                    <div class="mob-im-cont">
                        <?php the_post_thumbnail( 'home-post-phone' ); ?>
                    </div>
                    <div class="tab-im-cont">
                        <?php the_post_thumbnail( 'home-post-tablet'); ?>
                    </div>
                    <div class="roundel1" id="rou-post">
                        <div class="roundel-text" id="rou-post-text">
                            <h2><?php the_category(', '); ?></h2>
                            <hr class="roundel-line">
                            <h1><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,60)); /*$temp_arr_content[count($temp_arr_content)-1] = "";*/ $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?></h1>
                        </div>
                    </div>
                
                </div><!--//post-image-phone-->

                <div class="post-details">
                    <div class="post-author">
                        <p>
                            By <?php the_author_posts_link(); ?>
                        </p>
                    </div>
                    <div class="post-date">
                        <p>
                            <?php
                            $archive_year  = get_the_time('Y'); 
                            $archive_month = get_the_time('m'); 
                            $archive_day   = get_the_time('d'); 
                            ?>
                            on <a href="<?php echo get_month_link( $archive_year, $archive_month); ?>"><?php the_date( 'd/m/Y'); ?></a>
                        </p>
                    </div>

                </div><!--//post-details-->
                
                <div class="post-text">
                    <div class="post-sharing-cont" id="ps-cont">
                        <?php
                        if ( function_exists( 'sharing_display' ) )
                        {
                            sharing_display( '', true );
                        }
                        ?>
                        <div class="comment-button">
                            <a href="#fb-com-box"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/body-comment.png" /></a>
                            <p class="com-text">Comment</p>
                        </div>
                        <div class="print-button-wrapper">
                            <?php
                            if ( function_exists( 'pf_show_link' ) )
                            {
                                echo pf_show_link();
                            }
                            ?>
                            <p class="com-text">Print</p>
                        </div>
                    </div>
                    <!--<?php echo preg_replace("/\< *[img][^\>]*[.]*\>/i","",get_the_content(),1); ?>-->
                    <?php the_content(); ?>
                </div>
                <?php
                $add_cont = get_post_meta(get_the_ID(), 'ac_key', true);
                /* debug_to_console( $add_cont ); */
                if ( $add_cont != "" ) { ?>
                    <div class="ac-cont">
                        <h4>Additional credits:</h4>
                        <p><?php echo $add_cont; ?></p>
                    </div>
                <?php } ?>
                
                <div class="post-end-details">
                    <div class="post-details-author">
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?>'s page">
                            <div class="author-av" id="post-author-av-cont">
                                <?php echo get_wp_user_avatar(get_the_author_meta('ID'), 120); ?>
                            </div>
                        </a>
                        <div class="author-text">
                            <p><?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?> is a <?php echo get_the_author_meta( 'job_title' ); ?> at James Villa Holidays.
                            </p>
                            <p id="post-author-text">
                                <?php
                                $author_desc = get_the_author_meta( 'description' );
                                $char_count = mb_strlen($author_desc);
                                //Count the amount of characters in the author's description and trim if too long
                                if ($char_count < 100)
                                {
                                    echo $author_desc;
                                }
                                else
                                {
                                    $temp_arr_content = explode(" ",substr(strip_tags($author_desc),0,90)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...';
                                }
                                ?>
                            </p>
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?>'s page"><p>See all articles by <?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?></p></a>
                            
                        </div>
                    </div>
                    <div class="mob-post-details-author">
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?>'s page"><p>See all articles by <?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?></p></a>
                    </div>
                    <hr>
                    <div class="post-tags-cont">
                        <p>This story is tagged under:</p>
                        <div class="post-tags"><?php the_tags('<div class="post-tag"><div class="tag-left"></div><div class="tag-right">','</div></div><div class="post-tag"><div class="tag-left"></div><div class="tag-right">','</div></div>'); ?></div>
                    </div>
                </div>
                <?php
                $vil_name = get_post_meta( get_the_ID(), 'vn_key', true);
                $vil_desc = get_post_meta( get_the_ID(), 'vd_key', true);
                $vil_link = get_post_meta( get_the_ID(), 'vl_key', true);
                $id = get_post_meta($post->ID, 'iumb', true);
                $image = wp_get_attachment_image_src($id, 'full-size');
                if ( $vil_name != "" || $vil_desc != "" || $vil_link != "" || $image != "" ) { ?>
                    <div class="assoc-villa-cont">
                        <a href="<?php echo $vil_link; ?>">
                            <h2>Associated villa</h2>
                            <div class="villa-details">
                                <div class="villa-image">
                                    <img src="<?php echo $image[0]; ?>">
                                </div>
                                <div class="villa-text">
                                    <h4><?php echo $vil_name; ?></h4>
                                    <p><?php echo $vil_desc; ?></p>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/view-villa-btn.png" />
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="related-post-cont">
                    <h2>Related articles</h2>
                    <?php

                    $a = 0;

                    $cat_array = get_the_category();
                    $category_id = $cat_array[0]->cat_ID;
                    $category_name = $cat_array[0]->cat_name;

                    $current_post_id = get_the_ID();

                    $exclude = array($current_post_id); //DON'T INCLUDE CURRENT ARTICLE IN RELATED SEARCH
                    $qargs = array(
                        'post__not_in'=>$exclude,
                        'cat'=>$category_id,
                        'posts_per_page'=>'3'
                        );
                    /*'cat='. $category_id . '&posts_per_page=3'*/
                    $catquery = new WP_Query( $qargs );

                    while ($catquery->have_posts() ) :$catquery->the_post();
                    ?>
                    <div id="rp-pos<?php echo $a++ ?>" class="related-post">
                        
                        <div class="related-image">
                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'related-thumb' ); ?></a>
                        </div>
                        <div class="related-text">
                            <h4><?php the_category(', '); ?></h4>
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile-related-arrow.png" />
                                <span>
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
                                </span>
                            </a></h3>
                            <p class="rel-auth">By <?php the_author_posts_link(); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>



                </div>
                <br />
                <div class="com-header">
                    <h1>Comments</h1>
                </div>
                <div id="fb-com-box" class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-width="480" data-numposts="5" data-colorscheme="light"></div>
                <br /><br />

                


            

            <?php endwhile; else: ?>

            

                <h3>Sorry, no posts matched your criteria.</h3>

            

            <?php endif; ?>    

            

        </div><!--//blog_left-->

        

        <div class="clear"></div>

        

<?php get_footer(); ?>            