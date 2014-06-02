<?php get_header(); ?>

        

        <div class="post-content">

        

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          

                <!-- <h1><?php the_title(); ?></h1> -->

                

                <div class="post-image-main">

                    <img src="<?php echo catch_that_image() ?>">

                    <div class="roundel1" id="rou-post">
                        <div class="roundel-text" id="rou-post-text">
                            <h2><?php the_category(', '); ?></h2>
                            <hr class="roundel-line">
                            <h1><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,60)); /*$temp_arr_content[count($temp_arr_content)-1] = "";*/ $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?>
                            </h1>
                            <hr class="roundel-line">
                        </div>
                    </div>
                
                </div><!--//post-image-main-->

                <div class="post-details">
                    <div class="post-author">
                        <p>
                            By <?php the_author(); ?>
                        </p>
                    </div>
                    <div class="post-date">
                        <p>
                            <?php
                            $archive_year  = get_the_time('Y'); 
                            $archive_month = get_the_time('m'); 
                            $archive_day   = get_the_time('d'); 
                            ?>
                            on <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>"><?php the_date( 'd/m/Y'); ?></a>
                        </p>
                    </div>
                </div><!--//post-details-->

                <!-- <?php the_content(); ?> -->

                <br /><br />

                


            

            <?php endwhile; else: ?>

            

                <h3>Sorry, no posts matched your criteria.</h3>

            

            <?php endif; ?>    

            

        </div><!--//blog_left-->

        

        <div class="clear"></div>

        

<?php get_footer(); ?>            