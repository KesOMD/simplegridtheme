<?php get_header(); ?>

<div id="content" class="author-cont">
	<!– This sets the $curauth variable –>
	<?php
	if(isset($_GET['author_name'])) :
		$curauth = get_userdatabylogin($author_name);
	else :
		$curauth = get_userdata(intval($author));
	endif;

	?>
	<div class="author-info">
		<h2><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h2>
		<h3><?php echo $curauth->job_title; ?></h3>
		<hr>
		<div class="author-av">
			<?php echo get_wp_user_avatar(get_the_author_meta('ID'), 'thumbnail'); ?>
		</div>
		<div class="author-description">
			<p><?php echo $curauth->user_description; ?></p>
		</div>
		<div class="author-social">
			<ul>
			<?php if ( get_the_author_meta( 'facebook' ) ) { ?>
				<li><a href="<?php the_author_meta( 'facebook' ); ?>" title="Become Friends with <?php the_author_meta( 'display_name' ); ?> on Facebook"><img alt="Facebook" src="<?php bloginfo('stylesheet_directory'); ?>/images/body-facebook.png" /></a></li>
			<?php } ?>
			<?php if ( get_the_author_meta( 'twitter' ) ) { ?>
				<li><a href="<?php the_author_meta( 'twitter' ); ?>" title="Follow <?php the_author_meta( 'display_name' ); ?> on Twitter"><img alt="Twitter" src="<?php bloginfo('stylesheet_directory'); ?>/images/body-twitter.png" /></a></li>
			<?php } ?>
			<?php if ( get_the_author_meta( 'gplus' ) ) { ?>
				<li><a href="<?php the_author_meta( 'gplus' ); ?>" title="Connect with <?php the_author_meta( 'display_name' ); ?> on Google Plus"><img alt="Google Plus" src="<?php bloginfo('stylesheet_directory'); ?>/images/body-gplus.png" /></a></li>
			<?php } ?>
			</ul>
		</div>
		<hr>
	</div> <!-- End of Author Info -->

	<div id="load_posts_container">


	<ul>
		<!– The Loop –>
		<?php
		$args = array(

                     'post_type' => 'post',

                     'posts_per_page' => 6,

                     'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)

                     );            

        query_posts($args);

        $x = 0;

        

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        if($paged > 1) 

          $y = (0 + (($paged-1) * 12));

        else

          $y = 0;

		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php if($x == 2) { ?>

            <div class="home_post_box home_post_box_last">

        <?php } else { ?>

            <div class="home_post_box">

        <?php } ?>

        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post',array('alt' => 'post image'/*, 'class' => 'rounded'*/)); ?></a>

                <div class="home_post_title_cont">

                    <h4><?php the_category(', '); ?></h4>

                    <hr>

                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

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

        <?php endwhile; else: ?>
		<p><?php _e('No posts by this author.'); ?></p>
		<?php endif; ?>      

        

        <div class="clear"></div>

		
		<!– End Loop –>
	</ul>

	</div><!--//load_posts_container-->

	<div class="load_more_cont">
		<p align="center">
			<span class="load_more_text"><?php next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/load-more-bg.png" alt="Load more articles"/>') ?>
			</span>
		</p>
	</div><!--//load_more_cont-->
</div>

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