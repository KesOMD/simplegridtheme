<?php get_header(); ?>

<?php

if ( is_home() )
{
  get_template_part( 'grid' );
}

?>
        
        <div id="load_posts_container">
          <div class="blog-intro-cont">
            <h1>
              Welcome to the James Villas blog
              <hr>
              <span>On the James Villas Blog, you will find everything about our villas and destinations, plus some inspiring ideas for great holiday reads, family activities, days out and local delicacies to sample!</span>
              <hr>
            </h1>
          </div>



        <?php

        $category_ID = get_category_id('blog');

        $args = array(

                     'post_type' => 'post',

                     'posts_per_page' => 6,

                     'cat' => '-' . $category_ID,

                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)

                     );            

        query_posts($args);

        $x = 0;

        

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        if($paged > 1) 

          $y = (0 + (($paged-1) * 12));

        else

          $y = 0;

        while (have_posts()) : the_post(); ?>                                                                      


            <?php if($x == 2) { ?>

            <div class="home_post_box home_post_box_last">

            <?php } else { ?>

            <div class="home_post_box">

            <?php } ?>
            <script type="text/javascript">
            Response.create({
              prop: "width",
              prefix: "src",
              breakpoints: [0, 481, 768, 1024]
            });
            /*console.log("response")*/
            </script>
            <?php
            /* the_post_thumbnail('home-post',array('alt' => 'post image')); */
            $thumbDesk = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-post' ); 
            $urlDesk = $thumbDesk['0'];
            $thumbTab = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-post-tablet' ); 
            $urlTab = $thumbTab['0'];
            $thumbMob = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home-post-phone' ); 
            $urlMob = $thumbMob['0'];
            /*
            debug_to_console("homepage thumbnail = ");
            debug_to_console($urlDesk);
            <img src="<?php echo $urlDesk; ?>" data-src0="<?php echo $urlMob; ?>" data-src768="<?php echo $urlTab; ?>" data-src1024="<?php echo $urlDesk; ?>" alt="thumbnail for this post">

            data-src1024='<img src="<?php echo $urlDesk; ?>">'
                  data-src768='<img src="<?php echo $urlTab; ?>">'
                  data-src0='<img src="<?php echo $urlMob; ?>">'
            */
            ?>
                <a class="home-post-img-link" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail( 'home-post-tablet',array( 'alt' => 'post image' ) ); ?>
                </a>
                <div class="home-post-mobile-image">
                  <div class="mob-im-cont">
                    <?php the_post_thumbnail( 'home-post-tablet',array( 'alt' => 'post image' ) ); ?>
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

                    <h3><?php the_category(', '); ?></h3>

                    <hr>

                    <h2><a href="<?php the_permalink(); ?>">
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
                    </a></h2>

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
      //CHANGE THE COLOURS OF THE MOBILE POST LIST !IMPORTANT!
      $('.home-post-roundel').each(function(i)
        {
          var num = ( i%6 ) +1;

          $(this).addClass('roundel-' + num)
        }
      )
      $('.mob_post_desc').each(function(j)
        {
          var num = ( j%6 ) +1;

          $(this).addClass('mob-post-desc-' + num)
        }
      )

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

  /*console.log($(window).width());*/


});

</script>        

        

<?php get_footer(); ?>            