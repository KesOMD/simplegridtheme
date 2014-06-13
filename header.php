<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head> 

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <meta property="fb:admins" content="100008386361789"/>
  <meta property="fb:app_id" content="518698344902427"/>

<!--[if lt IE 9]>

	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

<![endif]-->        

  <?php wp_head(); ?>
<!--  
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

    

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
    <div class="header-wrapper">
      <div class="logo-mobile">
        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png" class="logo" />
      </div>
      <div class="header-left">
        <ul id="logo-nav">
          <li class="dropdown"><a id="header-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png" class="logo" /><div class="menu-arrow"><div class="arrow-cont"><img class="arr" src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow1.png"></div></div></a>
            <ul class="sub_navigation">
              <li><a href="http://www.jamesvillas.co.uk/" target="_blank" alt="James Villas main site"><div class="whi"><p>Main Site</p></div></a></li>
              <li><a href="http://www.jamesvillas.co.uk/information/about" target="_blank" alt="About Us"><div class="bl"><p>About Us</p></div></a></li>
              <li><a href="http://www.jamesvillas.co.uk/contact" target="_blank" alt="Contact Us"><div class="whi"><p>Contact Us</p></div></a></li>
              <li><a href="http://www.jamesvillas.co.uk/privacypolicy.cfm" target="_blank" alt="Privacy Police"><div class="bl"><p>Privacy Policy</p></div></a></li>
              <li><a href="http://www.jamesvillas.co.uk/cookie-policy" target="_blank" alt="Cookie Policy"><div class="whi"><p>Cookie Policy</p></div></a></li>
            </ul>
          </li>
        </ul>
        
        <ul id="home-button">
          <li>
            <div class="main-nav-button" id="home-nav">
              <div class="blue-divide front"></div>
              <a href="<?php bloginfo('url'); ?>"><p>Home</p></a>
              <div class="blue-divide"></div>
            </div>
          </li>
        </ul>
        
        <ul id="dest-button">
          <li class="big-dropdown">
            <div class="main-nav-button" id="dest-nav">
              
              <a><p>Destinations</p></a>
              <div class="blue-divide"></div>
            </div>
          </li>
        </ul>
        
        <ul id="pop-button">
          <li class="big-dropdown">
            <div class="main-nav-button" id="pop-nav">
              <a><p>Popular</p></a>
              <div class="blue-divide"></div>
            </div>
          </li>
        </ul>
        
        <ul id="soc-button">
          <li class="big-dropdown">
            <div class="main-nav-button" id="soc-nav">
              <a><p>Social</p></a>
              <div class="blue-divide"></div>
            </div>
          </li>
        </ul>
        
        <ul id="cat-button">
          <li class="big-dropdown">
            <div class="main-nav-button" id="cat-nav">
              <a><p>Categories</p></a>
            </div>

          </li>

        </ul>
        
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
          </div>
        </div>
        
        <div class="bd-container2">
            <?php
            if (function_exists('wpp_get_mostpopular'))
              wpp_get_mostpopular("limit=3&range='all'&stats_author=1&excerpt_length=100&stats_category=1&thumbnail_width=358&thumbnail_height=206&wpp_start='<div class=\"menu-item-container\" id=\"pop-container\">'&wpp_end=''&post_html='<div class=\"home_post_box_top\"><a href={url}>{thumb}</a><div class=\"home_post_title_cont\"><h4>{category}</h4><hr><h3>{text_title}</h3></div><div class=\"home_post_desc\"><p>{summary}<a href={url}>read more</a></p></div><div class=\"home_post_author\"><p>{author}</p></div></div>'");
            ?>
            </div>
        </div>

        <div class="bd-container3">
          <div class="menu-item-container">
            <div class="menu-item-left">
            </div>
            <div class="menu-item-center">
              <p>UNDER CONSTRUCTION</p>
            </div>
            <div class="menu-item-right">
            </div>
          </div>
        </div>

        <div class="bd-container4">
          <div class="menu-item-container" id="cat-container">
            <ul class="cat-listing">
              <?php wp_list_categories('exclude=1&number=12&hide_empty=0&orderby=name&title_li='); ?>
            </ul>
            <!--
            <br />
            <div style="width: 422px; margin: 0 auto;">
              <div class="view-more-cont" id="pop-load">
                <?php next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/view-more-cat-bg.png" alt="Load more articles"/>') ?> 
              </div>
            </div>
            -->
          </div>
        </div>
      </div>
      <div class="header-right">
        <div class="search_cont">
          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <input type="text" name="s" id="s" value="Search" onfocus="if ( this.value == 'Search' ) { this.value = '' }" onblur="if (this.value == '') { this.value = 'Search' }" />
            <INPUT TYPE="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search-image.png" class="search_icon" BORDER="0" ALT="Submit Form">
          </form>
        </div><!--//search_cont-->
        <!-- <div class="clear"></div>-->
        <div class="social-icon-container">
          <ul class="social_icons">
            <li><a href="https://www.facebook.com/JamesVillaHolidays"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a></li>
            <li><a href="https://twitter.com/jamesvillasuk"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a></li>
            <li><a href="https://plus.google.com/+jamesvillas/posts"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/gplus-icon.png" /></a></li>
            <li><a href="http://www.pinterest.com/jamesvillasuk/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" /></a></li>
            <li><a href="https://www.youtube.com/user/jamesvillasuk"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/yt-icon.png" /></a></li>
          </ul>
        </div>

        <div class="clear"></div>
      </div><!--//right-->

      <div class="clear"></div>
    </div><!-- header-wrapper -->
  </div><!--//header-->

  <div class="mob-menu-cont">
    <div class="mob-menu-button" id="mob-nav">
      <div class="button-text">
        <p>Menu</p>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mob-menu-arrow.png">
      </div>
    </div>
      <ul class="sub_navigation" id="mob-drop">
        <li><a href="http://www.jamesvillas.co.uk/" target="_blank" alt="James Villas main site"><div class="whi"><p>Destinations</p></div></a></li>
        <li><a href="http://www.jamesvillas.co.uk/information/about" target="_blank" alt="About Us"><div class="bl"><p>Social</p></div></a></li>
        <li><a href="http://www.jamesvillas.co.uk/contact" target="_blank" alt="Contact Us"><div class="whi"><p>Categories</p></div></a></li>
      </ul>
  </div>

  <div id="content_container">

      
