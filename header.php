<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head> 
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500italic,900' rel='stylesheet' type='text/css'>

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
  <!--
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?><?php echo '?' . time(); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
  -->
  <link rel=stylesheet href="<?php echo get_stylesheet_uri() . '?t=' . filemtime( get_stylesheet_directory() . '/style.css' ); ?>">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

  <meta property="fb:admins" content="100008386361789,192753802856"/>
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
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/response.min.js"></script>

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
        <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jv-logo-mob.png" class="logo" /></a>
      </div>

      <div class="mob-menu-cont">
        <div class="mob-menu-button" id="mob-nav">
          <div class="button-text">
            <p>Blog Menu</p>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/burger.png">
          </div>
        </div>
      </div>
      <div class="mob-drop-cont">
        <ul class="sub_navigation" id="mob-drop">
          <?php
          $catlistpage = get_page_by_title( "Browse Categories", "ARRAY_N" );
          $catlistpageID = $catlistpage[0];
          $catlistpageURL = get_page_link( $catlistpageID );

          $destlistpage = get_page_by_title( "Browse Destinations", "ARRAY_N" );
          $destlistpageID = $destlistpage[0];
          $destlistpageURL = get_page_link( $destlistpageID );

          $gallistpage = get_page_by_title( "Gallery", "ARRAY_N" );
          $gallistpageID = $gallistpage[0];
          $gallistpageURL = get_page_link( $gallistpageID );

          $soclistpage = get_page_by_title( "Social", "ARRAY_N" );
          $soclistpageID = $soclistpage[0];
          $soclistpageURL = get_page_link( $soclistpageID );
          ?>
        
          <li><a href="<?php bloginfo('url'); ?>" target="_self" alt="Return Home"><p>Home</p></a></li>
          <li><a href="<?php echo $destlistpageURL; ?>" target="_self" alt="Destination Listing Page"><p>Destinations</p></a></li>
          <li><a href="<?php echo $catlistpageURL; ?>" target="_self" alt="Category Listing Page"><p>Categories</p></a></li>
          <li><a href="<?php echo $gallistpageURL; ?>" target="_self" alt="Gallery Page"><p>Gallery</p></a></li>
          <li><a href="<?php echo $soclistpageURL; ?>" target="_self" alt="Social Page"><p>Social</p></a></li>
        </ul>
      </div>
      
      <!--
      <div class="search_cont_mob">
          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <input type="text" name="s" id="s" value="Search" onfocus="if ( this.value == 'Search' ) { this.value = '' }" onblur="if (this.value == '') { this.value = 'Search' }" />
            <INPUT TYPE="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search-image.png" class="search_icon" BORDER="0" ALT="Submit Form">
          </form>
        </div>//search_cont-->
      <div class="header-left">
        <ul id="logo-nav">
          <li class="dropdown"><a id="header-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jv-logo-mob.png" class="logo" /><div class="menu-arrow"><div class="arrow-cont"><img class="arr" src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow1.png"></div></div></a>
            <ul class="sub_navigation">
              <li><a href="http://www.jamesvillas.co.uk/" target="_blank" alt="James Villas main site"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet-point-arrow.png" class="dd-arrow" /><p>Main Site</p></a></li>
              <li><a href="http://www.jamesvillas.co.uk/information/about" target="_blank" alt="About Us"><p>About Us</p></a></li>
              <li><a href="http://www.jamesvillas.co.uk/contact" target="_blank" alt="Contact Us"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet-point-arrow.png" class="dd-arrow" /><p>Contact Us</p></a></li>
              <li><a href="http://www.jamesvillas.co.uk/privacypolicy.cfm" target="_blank" alt="Privacy Police"><p>Privacy Policy</p></a></li>
              <li><a href="http://www.jamesvillas.co.uk/cookie-policy" target="_blank" alt="Cookie Policy"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet-point-arrow.png" class="dd-arrow" /><p>Cookie Policy</p></a></li>
            </ul>
          </li>
        </ul>
        
        <ul id="home-button">
          <li>
            <div class="main-nav-button" id="home-nav">
              
              <?php if ( is_home() ) { ?>
                <a href="<?php bloginfo('url'); ?>" class="main-nav-button-active">
              <?php } else { ?>
                <a href="<?php bloginfo('url'); ?>">
              <?php } ?>
              <p>Home</p></a>
              
            </div>
          </li>
        </ul>
        
        <ul id="dest-button">
          <li class="big-dropdown">
            <div class="main-nav-button" id="dest-nav">
              <a id="hidecontrol"><p>Destinations</p></a>
              
            </div>
          </li>
        </ul>
        
        <ul id="pop-button">
          <li class="big-dropdown">
            <div class="main-nav-button" id="pop-nav">
              <a><p>Popular</p></a>
              
            </div>
          </li>
        </ul>
        
        <ul id="soc-button">
          <li class="big-dropdown">
            <div class="main-nav-button" id="soc-nav">
              <a><p>Social</p></a>
              
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
            <div class="dest-row">
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
                <li id="last-item">
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'greece', 'post_tag' )->term_id ); ?>">
                    <?php $tag5 = get_term_by( 'slug', 'greece', 'post_tag' ); echo $tag5->name; ?>
                  </a>
                </li>
              </ul>
            </div>
             
            <div class="dest-row">
              <ul>
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
                <li>
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'portugal', 'post_tag' )->term_id ); ?>">
                    <?php $tag9 = get_term_by( 'slug', 'portugal', 'post_tag' ); echo $tag9->name; ?>
                  </a>
                </li>
                <li id="last-item">
                  <a href="<?php echo get_tag_link(get_term_by( 'slug', 'spain', 'post_tag' )->term_id ); ?>">
                    <?php $tag10 = get_term_by( 'slug', 'spain', 'post_tag' ); echo $tag10->name; ?>
                  </a>
                </li>
              </ul>
            </div>
              
            <div class="dest-row">
              <ul>
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
              wpp_get_mostpopular("limit=3&range='all'&stats_author=1&excerpt_length=100&stats_category=1&thumbnail_width=358&thumbnail_height=206&wpp_start='<div class=\"menu-item-container\" id=\"pop-container\">'&wpp_end=''&post_html='<div class=\"home_post_box_top\"><a href={url}>{thumb}</a><div class=\"home_post_title_cont\"><h4>{category}</h4><hr><h3>{text_title}</h3></div><div class=\"home_post_desc\"><p>{summary} <a href={url}>Read more >></a></p></div><div class=\"home_post_author\"><p>By {author}</p></div></div>'");
            ?>
            </div>
        </div>

        <div class="bd-container3">
          <div class="menu-item-container" id="social-menu">
            <div class="menu-item-left">
              <!--<h2>Youtube</h2>
              <iframe class="social-youtube" width="289" height="213" src="//www.youtube.com/embed/OmRr1CDR0zA?version=3&enablejsapi=1" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>-->
              <h2>Facebook</h2>
              <?php echo do_shortcode('[custom-facebook-feed id=JamesVillaHolidays]') ?>
            </div>
            <div class="social-divider"></div>
            <div class="menu-item-center">
              <h2>Pinterest</h2>
              <?php echo do_shortcode('[pinterest_pinboard username="jamesvillasuk" rows=3 cols=4 new_window=1]') ?>
            </div>
            <div class="social-divider"></div>
            <div class="menu-item-right">
              <h2>Twitter</h2>
              <?php echo do_shortcode("[AIGetTwitterFeeds ai_username='jamesvillasuk' ai_numberoftweets='20' ai_tweet_title='']"); ?>
            </div>
          </div>
        </div>

        <div class="bd-container4">
          <div class="menu-item-container" id="cat-container">
            <ul class="cat-listing">
              <?php wp_list_categories('exclude=1&number=12&hide_empty=0&orderby=name&title_li='); ?>
            </ul>
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
            <li><a href="https://www.facebook.com/JamesVillaHolidays" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a></li>
            <li><a href="https://twitter.com/jamesvillasuk" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a></li>
            <li><a href="https://plus.google.com/+jamesvillas/posts" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/gplus-icon.png" /></a></li>
            <li><a href="http://www.pinterest.com/jamesvillasuk/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" /></a></li>
            <li><a href="https://www.youtube.com/user/jamesvillasuk" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/yt-icon.png" /></a></li>
          </ul>
        </div>

        <div class="clear"></div>
      </div><!--//right-->

      <div class="clear"></div>
    </div><!-- header-wrapper -->
  </div><!--//header-->

  

  <div id="content_container">

      
