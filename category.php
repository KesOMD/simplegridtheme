<?php get_header(); ?>







        <div id="load_posts_container">

            <div class="cat-header">
                <div class="cat-name">
                    <h2><?php single_cat_title(); ?></h2>
                </div>
                <div class="cat-desc">
                    <p><?php echo category_description(); ?></p>
                </div>
            </div>





        <?php



        $x = 0;



        



        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;



        if($paged > 1) 



          $y = (0 + (($paged-1) * 12));



        else



          $y = 0;



global $wp_query;

$args = array_merge( $wp_query->query, array( 'posts_per_page' => 9 ) );

query_posts( $args );

        while (have_posts()) : the_post(); ?>                                                                      



        



            <?php if($x == 2) { ?>



            <div class="home_post_box home_post_box_last">



            <?php } else { ?>



            <div class="home_post_box">



            <?php } ?>



            



                <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-image.jpg" />-->



                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post',array('alt' => 'post image'/*, 'class' => 'rounded'*/)); ?></a>

                <div class="home_post_title_cont">

                    <h4><?php the_category(', '); ?></h4>

                    <hr>

                    <h3><a href="<?php the_permalink(); ?>">
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

                </div><!--//home_post_title_cont-->

                <div class="home_post_desc" id="home_post_desc<?php echo $y; ?>">
                    <p>
                    <?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,100)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...  '; ?><a href="<?php the_permalink(); ?>">Read more >></a>
                    </p>
                </div><!--//home_post_desc-->
                <div class="home_post_author">
                    <p>
                      By <?php the_author_posts_link(); ?>
                    </p>
                </div>

            </div><!--//home_post_box-->



        



            <?php if($x == 2) { $x = -1; /*echo '<div class="clear"></div>';*/ } ?>



        



        <?php $x++; $y++; ?>



        <?php endwhile; ?>        



        <?php wp_reset_query(); ?>        



        



        <div class="clear"></div>



        



        </div><!--//load_posts_container-->



        



        <div class="load_more_cont">

            <p align="center">
              <span class="load_more_text"><?php next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/load-more-bg.png" alt="Load more articles"/>') ?>
              </span>
            </p>

        </div><!--//load_more_cont-->



        



        



<script type="text/javascript">



// Ajax-fetching "Load more posts"



$('.load_more_cont a').live('click', function(e) {



	e.preventDefault();



	//$(this).addClass('loading').text('Loading...');



        //$('.load_more_text a').html('Loading...');



	$.ajax({



		type: "GET",



		url: $(this).attr('href') + '#main_container',



		dataType: "html",



		success: function(out) {



			result = $(out).find('#load_posts_container .home_post_box');



			nextlink = $(out).find('.load_more_cont a').attr('href');



                        //alert(nextlink);



			//$('#boxes').append(result).masonry('appended', result);



                    $('#load_posts_container').append(result);



			//$('.fetch a').removeClass('loading').text('Load more posts');



                        //$('.load_more_text a').html('Load More');



                        



                        



			if (nextlink != undefined) {



				$('.load_more_cont a').attr('href', nextlink);



			} else {



				$('.load_more_cont').remove();



                                $('#load_posts_container').append('<div class="clear"></div>');



                              //  $('.load_more_cont').css('visibilty','hidden');



			}







                    if (nextlink != undefined) {



                        $.get(nextlink, function(data) {



                          //alert(nextlink);



                          if($(data + ":contains('home_post_box')") != '') {



                            //alert('not found');



                              //                      $('.load_more_cont').remove();



                                                    $('#load_posts_container').append('<div class="clear"></div>');        



                          }



                        });                        



                    }



                        



		}



	});



});



</script>        



        



<?php get_footer(); ?>            