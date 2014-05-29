<?php



include('settings.php');

function debug_to_console( $data )
{
  if ( is_array( $data ) )
    $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
  else
    $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

  echo $output;
}


if (function_exists('add_theme_support')) {

	add_theme_support('menus');
  
}
add_action('after_setup_theme', 'featured_setup');

function featured_setup()
{
  add_theme_support( 'featured-content', array(  
    'featured_content_filter' => 'mytheme_get_featured_posts',
    'max_posts' => 3,
  ) );
}

function mytheme_get_featured_posts()
{
  return apply_filters( 'mytheme_get_featured_posts', array() );
}

function add_featured_content_to_blog()
{
  remove_action( 'pre_get_posts', array( 'Featured_Content', 'pre_get_posts' ) );
}
add_action( 'init', 'add_featured_content_to_blog', 31 );

function get_category_id($cat_name){

	$term = get_term_by('name', $cat_name, 'category');

	return $term->term_id;

}

function wpb_set_post_views($postID)
{
  $count_key = 'wpb_post_views_count';
  $count = get_post_meta( $postID, $count_key, true );
  if( $count == '' )
  {
    $count = 0;
    delete_post_meta( $postID, $count_key, '0' );
  }
  else
  {
    $count++;
    update_post_meta( $postID, $count_key, $count );
  }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

function wpb_track_post_views ($post_id)
{
    if ( !is_single() ) return;

    if ( empty ( $post_id) )
    {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID)
{
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count=='')
    {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}


if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9

  add_theme_support( 'post-thumbnails' );

  add_image_size('featured-slideshow',309,514,true);

  add_image_size('featured-big',369,408,true);

  add_image_size('featured-medium',369,196,true);

  add_image_size('featured-small',60,58,true);

  add_image_size('featured-blog',760,291,true);

  add_image_size('home-post',321,209,true);

  add_image_size('home-post-iphone',300,331,true);

  add_image_size('home-medium',299,165,true);

  add_image_size('home-small',224,124,true);

  add_image_size('blog-post',368,203,true);

}



if ( function_exists('register_sidebar') ) {

        register_sidebar(array(

                'name'=>'Sidebar',
		'before_widget' => '<div class="side_box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

        

        register_sidebar(array(

                'name'=>'Footer',
		'before_widget' => '<div class="footer_box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));        

        

        register_sidebar(array(

                'name'=>'Footer Last',
		'before_widget' => '<div class="footer_box footer_box_last">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));  

               
}



/* Function to remove whitespaces in XMLRPC_REQUEST starts */
  if ( defined( 'XMLRPC_REQUEST' ) ) {

    function remove_whitespaces( $received_content ) {
      return trim( $received_content );   /* trim( $content ); is basic php function to remove whitespaces */
    }

    function removal_whitespaces_start() {

      ob_start( 'remove_whitespaces' );       /* on call of "exit()" by the XML-RPC server, callback is used and output is flushed.*/
    }

    add_action( 'plugins_loaded', 'removal_whitespaces_start', 1 );
  }

/* Function to remove whitespaces in XMLRPC_REQUEST ends */



function catch_that_image() {

  global $post, $posts;

  $first_img = '';

  ob_start();

  ob_end_clean();

  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

  $first_img = $matches [1] [0];



  if(empty($first_img)){ //Defines a default image

    $first_img = "/images/post_default.png";

  }

  return $first_img;

}



function kriesi_pagination($pages = '', $range = 2)

{  

     $showitems = ($range * 2)+1;  



     global $paged;

     if(empty($paged)) $paged = 1;



     if($pages == '')

     {

         global $wp_query;

         $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }   



     if(1 != $pages)

     {

         echo "<div class='pagination'>";

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";

         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";



         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";

             }

         }



         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";

         echo "</div>\n";

     }

}





/*

// **** EX RECENT POSTS START ****



class ex_recent_posts extends WP_Widget {



	function ex_recent_posts() {

		parent::WP_Widget(false, 'Ex Recent Posts');

	}



	function widget($args, $instance) {

		$args['title'] = $instance['title'];

		ex_func_recentposts($args);

	}



	function update($new_instance, $old_instance) {

		return $new_instance;

	}



	function form($instance) {

		$title = esc_attr($instance['title']);

?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

<?php

	}

 }

function ex_func_recentposts($args = array(), $displayComments = TRUE, $interval = '') {



	global $wpdb;



        echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];

        ?>

        <ul class="recent_posts_list">

           <?php

  

  global $post;

           //$myposts = get_posts('numberposts=6&category_name=Featured Small');

           $myposts = get_posts('numberposts=6');

           foreach($myposts as $post) :

             setup_postdata($post);

           ?>

          <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-small'); ?></a><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php the_time('m.d.Y'); ?></p><div class="clear"></div></li>

          <?php endforeach; ?>

        </ul>

        <?php

        wp_reset_query();

        

        echo $args['after_widget'];



}

register_widget('ex_recent_posts');  



// **** EX RECENT POSTS END ****













// **** EX SOCIAL START ****



class ex_social extends WP_Widget {



	function ex_social() {

		parent::WP_Widget(false, 'Ex Social');

	}



	function widget($args, $instance) {

                $args['social_title'] = $instance['social_title'];

		$args['dribbble_link'] = $instance['dribbble_link'];

                $args['forrst_link'] = $instance['forrst_link'];

                $args['facebook_link'] = $instance['facebook_link'];

                $args['twitter_link'] = $instance['twitter_link'];

                $args['rss_link'] = $instance['rss_link'];

		ex_func_social($args);

	}



	function update($new_instance, $old_instance) {

		return $new_instance;

	}



	function form($instance) {

                $social_title = esc_attr($instance['social_title']);

		$dribbble_link = esc_attr($instance['dribbble_link']);

                $forrst_link = esc_attr($instance['forrst_link']);

                $facebook_link = esc_attr($instance['facebook_link']);

                $twitter_link = esc_attr($instance['twitter_link']);

                $rss_link = esc_attr($instance['rss_link']);

?>

                <p><label for="<?php echo $this->get_field_id('social_title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('social_title'); ?>" name="<?php echo $this->get_field_name('social_title'); ?>" type="text" value="<?php echo $social_title; ?>" /></label></p>

		<p><label for="<?php echo $this->get_field_id('dribbble_link'); ?>"><?php _e('Dribbble Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('dribbble_link'); ?>" name="<?php echo $this->get_field_name('dribbble_link'); ?>" type="text" value="<?php echo $dribbble_link; ?>" /></label></p>

                <p><label for="<?php echo $this->get_field_id('forrst_link'); ?>"><?php _e('Forrst Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('forrst_link'); ?>" name="<?php echo $this->get_field_name('forrst_link'); ?>" type="text" value="<?php echo $forrst_link; ?>" /></label></p>

                <p><label for="<?php echo $this->get_field_id('facebook_link'); ?>"><?php _e('Facebook Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>" name="<?php echo $this->get_field_name('facebook_link'); ?>" type="text" value="<?php echo $facebook_link; ?>" /></label></p>

                <p><label for="<?php echo $this->get_field_id('twitter_link'); ?>"><?php _e('Twitter Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('twitter_link'); ?>" name="<?php echo $this->get_field_name('twitter_link'); ?>" type="text" value="<?php echo $twitter_link; ?>" /></label></p>

                <p><label for="<?php echo $this->get_field_id('rss_link'); ?>"><?php _e('RSS Link:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('rss_link'); ?>" name="<?php echo $this->get_field_name('rss_link'); ?>" type="text" value="<?php echo $rss_link; ?>" /></label></p>

<?php

	}

 }

function ex_func_social($args = array(), $displayComments = TRUE, $interval = '') {



	global $wpdb;



        //echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];

        echo $args['before_widget'] . $args['before_title'] . $args['social_title'] . $args['after_title'];

        ?>

        <ul class="stay_connected_list">

          <li><a href="<?php echo $args['dribbble_link']; ?>">Catch us on Dribbble</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" /></li>

          <li><a href="<?php echo $args['forrst_link']; ?>">Find us on Forrst</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/forrst-icon.png" /></li>

          <li><a href="<?php echo $args['facebook_link']; ?>">Find us on Facebook</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></li>

          <li><a href="<?php echo $args['twitter_link']; ?>">Follow us on Twitter</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></li>

          <li class="last"><a href="<?php echo $args['rss_link']; ?>">Subscribe to our RSS</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss-icon.png" /></li>

        </ul>

        <?php

        

        echo $args['after_widget'];



}

register_widget('ex_social');  



// **** EX SOCIAL END ****













// **** EX SEARCH START ****



class ex_search extends WP_Widget {



	function ex_search() {

		parent::WP_Widget(false, 'Ex Search');

	}



	function widget($args, $instance) {

		ex_func_search($args);

	}



	function update($new_instance, $old_instance) {

		return $new_instance;

	}



	function form($instance) {

?>



<?php

	}

 }

function ex_func_search($args = array(), $displayComments = TRUE, $interval = '') {



	global $wpdb;



        //echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];

        echo $args['before_widget'];

        ?>

          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

          <INPUT TYPE="image" SRC="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" class="search_icon" ALT="Submit Form">

          <input type="text" class="search_box" name="s" id="s" value="Search" onclick="if(this.value == 'Search') this.value='';" onblur="if(this.value == '') this.value='Search';" />

          </form>

          <div class="clear"></div>

        <?php

        

        echo $args['after_widget'];



}

register_widget('ex_search');  



// **** EX SEARCH END ****

*/

?>