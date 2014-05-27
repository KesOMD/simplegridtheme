<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head> 

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>

	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

<![endif]-->        

  <?php wp_head(); ?>

<!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js" type="text/javascript" charset="utf-8"></script>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/parallax.js"></script>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/dropdown.js"></script>

  <script type="text/javascript">

  function show_post_desc(desc_num) {

      jQuery('#home_post_desc'+desc_num).css('display','block');

  }

  

  function hide_post_desc(desc_num) {

      jQuery('#home_post_desc'+desc_num).css('display','none');

  }

  </script>

</head>

<body>



<?php $shortname = "simple_grid"; ?>



<div id="main_container">



    <div id="header">                   
      <div class="header-left">
        <ul id="logo-nav">
          <li class="dropdown"><a id="header-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png" class="logo" /></a>
            <ul class="sub_navigation">
              <li><a href="http://www.jamesvillas.co.uk/" target="_blank">Main Site</a></li>
              <li><a href="http://www.jamesvillas.co.uk/information/about" target="_blank">About Us</a></li>
              <li><a href="http://www.jamesvillas.co.uk/contact" target="_blank">Contact Us</a></li>
              <li><a href="http://www.jamesvillas.co.uk/privacypolicy.cfm" target="_blank">Privacy Policy</a></li>
              <li><a href="http://www.jamesvillas.co.uk/cookie-policy" target="_blank">Cookie Policy</a></li>
            </ul>
          </li>
        </ul>
        <ul id="home-button">
          <li>
            <?php if( is_home() ) { ?>
              <div class="mnb-active" id="home-nav">
                <a href="<?php bloginfo('url'); ?>"><p>Home</p></a>
              </div>
            <?php } else { ?>
              <div class="main-nav-button" id="home-nav">
                <a href="<?php bloginfo('url'); ?>"><p>Home</p></a>
              </div>
            <?php } ?>
          </li>
        </ul>
        <ul id="dest-button">
          <li class="big-dropdown">
            <div class="main-nav-button" id="dest-nav">
              <a><p>Destinations</p></a>
            </div>
          </li>
        </ul>
        <div>
        <div class="bd-container1">
          <div class="menu-item-container">
            <div class="menu-item-left">
              <ul>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'croatia', 'post_tag' )->term_id ); ?>">
                    <?php $tag1 = get_term_by( 'slug', 'croatia', 'post_tag' ); echo $tag1->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'cyprus', 'post_tag' )->term_id ); ?>">
                    <?php $tag2 = get_term_by( 'slug', 'cyprus', 'post_tag' ); echo $tag2->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'egypt', 'post_tag' )->term_id ); ?>">
                    <?php $tag3 = get_term_by( 'slug', 'egypt', 'post_tag' ); echo $tag3->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'france', 'post_tag' )->term_id ); ?>">
                    <?php $tag4 = get_term_by( 'slug', 'france', 'post_tag' ); echo $tag4->name; ?>
                  </a>
                </li>
              </ul>
            </div>
            <div class="menu-item-center">
              <ul>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'greece', 'post_tag' )->term_id ); ?>">
                    <?php $tag5 = get_term_by( 'slug', 'greece', 'post_tag' ); echo $tag5->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'italy', 'post_tag' )->term_id ); ?>">
                    <?php $tag6 = get_term_by( 'slug', 'italy', 'post_tag' ); echo $tag6->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'malta-gozo', 'post_tag' )->term_id ); ?>">
                    <?php $tag7 = get_term_by( 'slug', 'malta-gozo', 'post_tag' ); echo $tag7->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'morocco', 'post_tag' )->term_id ); ?>">
                    <?php $tag8 = get_term_by( 'slug', 'morocco', 'post_tag' ); echo $tag8->name; ?>
                  </a>
                </li>
              </ul>
            </div>
            <div class="menu-item-right">
              <ul>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'portugal', 'post_tag' )->term_id ); ?>">
                    <?php $tag9 = get_term_by( 'slug', 'portugal', 'post_tag' ); echo $tag9->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'spain', 'post_tag' )->term_id ); ?>">
                    <?php $tag10 = get_term_by( 'slug', 'spain', 'post_tag' ); echo $tag10->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'turkey', 'post_tag' )->term_id ); ?>">
                    <?php $tag11 = get_term_by( 'slug', 'turkey', 'post_tag' ); echo $tag11->name; ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'united-states', 'post_tag' )->term_id ); ?>">
                    <?php $tag12 = get_term_by( 'slug', 'united-states', 'post_tag' ); echo $tag12->name; ?>
                  </a>
                </li>
              </ul>
            </div>
            <div style="width: 422px; margin: 0 auto;">
              <div class="view-more-cont">
                <?php next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/view-more-bg.png" alt="Load more articles"/>') ?> 
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
        <div class="right">

        

            <ul class="social_icons">

              <?php if(get_option($shortname.'_twitter_link','') != "") { ?>

                <li><a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a></li>

              <?php } ?>

              <?php if(get_option($shortname.'_facebook_link','') != "") { ?>

                <li><a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a></li>

              <?php } ?>

              <?php if(get_option($shortname.'_google_plus_link','') != "") { ?>

                <li><a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/gplus-icon.png" /></a></li>

              <?php } ?>

              <?php if(get_option($shortname.'_dribbble_link','') != "") { ?>

                <li><a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" /></a></li>

              <?php } ?>

              <?php if(get_option($shortname.'_pinterest_link','') != "") { ?>

                <li><a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" /></a></li>

              <?php } ?>

            </ul>

            <div class="clear"></div>

            

            <div class="search_cont">

                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

                  <input type="text" name="s" id="s" />

                  <INPUT TYPE="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.png" class="search_icon" BORDER="0" ALT="Submit Form">

                </form>

            </div><!--//search_cont-->

            

            <div class="clear"></div>

        </div><!--//right-->

        

        <div class="clear"></div>

    </div><!--//header-->

    

    <div id="menu_container">

    

    <!--

        <ul class="pages_menu">

          <li><a href="#">Home</a></li>

          <li><a href="#">About</a></li>

          <li><a href="#">Blog</a></li>

          <li><a href="#">Contact</a></li>

        </ul>-->
        <!--
        <?php wp_nav_menu('menu=header_menu&container=false&menu_class=pages_menu'); ?>
        -->
        

        <!--

        <ul class="cat_menu">

          <li><a href="#">WebDesign</a></li>

          <li><a href="#">Graphics</a></li>

          <li><a href="#">Print</a></li>

          <li><a href="#">Posters</a></li>

        </ul>-->

        <!-- <?php wp_nav_menu('menu=category_menu&container=false&menu_class=cat_menu'); ?> -->                

        

        <div class="clear"></div>



    </div><!--//menu_container-->

    

    <div id="content_container">

      <?php
        if ( is_home() )
          get_template_part( 'grid' );
      ?>
