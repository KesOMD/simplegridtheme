<?php get_header(); ?>

        

        <div id="load_posts_container">

            <div class="search-header">
                <div class="search-res">
                    <h4>RESULTS FOR</h4>
                </div>
                <div class="search-query">
                    <h2><?php echo get_search_query(); ?></h2>
                </div>
            </div>

            <?php            

            $x = 0;

        

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query_args = explode("&", $query_string);
        $search_query = array('posts_per_page' => 6, 'paged' => $paged);

        foreach ($query_args as $key => $string)
        {
            $query_split = explode("=", $string);
            $search_query[$query_split[0]] = urldecode($query_split[1]);
        }

        $search = new WP_Query($search_query);
        $total_results = $search->found_posts;

        if($paged > 1) 

          $y = (0 + (($paged-1) * 12));

        else

          $y = 0;
      if ( $search->have_posts() ) : while ($search->have_posts()) : $search->the_post(); ?>                                                                      


            <?php if($x == 2) { ?>

            <div class="home_post_box home_post_box_last">

            <?php } else { ?>

            <div class="home_post_box">

            <?php } ?>

            

                <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-image.jpg" />-->

                <a class="home-post-img-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post',array('alt' => 'post image'/*, 'class' => 'rounded'*/)); ?></a>
                <div class="home-post-mobile-image">
                  <div class="mob-im-cont">
                    <?php the_post_thumbnail( 'home-post-phone',array( 'alt' => 'post image' ) ); ?>
                  </div>
                  <div class="tab-im-cont">
                    <?php the_post_thumbnail( 'home-post-tablet',array( 'alt' => 'post image' ) ); ?>
                  </div>
                  <div class="home-post-roundel">
                    <div class="mob-roundel-text">
                      <h3><?php the_category(', '); ?></h3>
                      <hr class="mob-roundel-line">
                      <!-- <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->
                      <h2>
                        <a href="<?php the_permalink(); ?>">
                          <?php
                          $post_title = get_the_title();
                          $char_count = mb_strlen($post_title);
                          //Count the amount of characters in the title and trim if too long
                          if ($char_count < 30)
                          {
                            echo get_the_title();
                          }
                          else
                          {
                            $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,20)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...';
                          }
                          ?>
                        </a>
                      </h2>
                    </div>
                  </div>
                </div>

                <div class="home_post_title_cont">

                    <h2><?php the_category(', '); ?></h2>

                    <hr>

                    <h1><a href="<?php the_permalink(); ?>">
                      <?php
                      $post_title = get_the_title();
                      $char_count = mb_strlen($post_title);
                       //Count the amount of characters in the title and trim if too long
                      if ($char_count < 30)
                      {
                        echo get_the_title();
                      }
                      else
                      {
                        $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,20)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...';
                      }
                      ?>
                    </a></h1>

                </div><!--//home_post_title_cont-->

                <div class="home_post_desc" id="home_post_desc<?php echo $y; ?>">
                    <p>
                    <?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,100)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...  '; ?><a href="<?php the_permalink(); ?>">Read more >></a>
                    </p>
                </div><!--//home_post_desc-->


                <div class="mob_post_desc" id="home_post_desc<?php echo $y; ?>">
                    <a href="<?php the_permalink(); ?>">
                      <p>
                        <?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,40)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...  '; ?><img id="bar" src="<?php bloginfo('stylesheet_directory'); ?>/images/bottom-bar-arrows.png" />
                      </p>
                    </a>
                </div><!--//mob_post_desc-->

                <div class="home_post_author">
                    <p>
                      By <?php the_author_posts_link(); ?>
                    </p>
                </div>

            </div><!--//home_post_box-->

        

            <?php if($x == 2) { $x = -1; /*echo '<div class="clear"></div>';*/ } ?>

        

        <?php $x++; $y++; ?>

        <?php endwhile; else: ?>
        <p class="no-posts-here">No posts matched, sorry</p>
        

        <?php wp_reset_query(); ?>
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
                                if ($char_count < 25)
                                {
                                    echo get_the_title();
                                    
                                }
                                else
                                {
                                    $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,26)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo substr($display_arr_content, 0, -1) . '...';
                                }
                                
                                
                                ?>
                            </a></h3>
                            <p class="rel-auth">By <?php the_author_posts_link(); ?></p>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        <?php endif; ?>
        <div class="clear"></div>

            

        </div><!--//load_posts_container-->

        <div class="load_more_cont">

            <p align="center">
              <span class="load_more_text"><?php next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/load-more-bg.png" alt="Load more articles"/>') ?>
              </span>
            </p>

        </div><!--//load_more_cont-->

        <div class="clear"></div>

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