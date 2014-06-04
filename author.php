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

	<ul>
		<!– The Loop –>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
				<?php the_title(); ?>
			</a>,
			<?php the_time('d M Y'); ?> in <?php the_category('&');?>
		</li>
		<?php endwhile; else: ?>
		<p><?php _e('No posts by this author.'); ?></p>
		<?php endif; ?>
		<!– End Loop –>
	</ul>
</div>

<?php get_footer(); ?>