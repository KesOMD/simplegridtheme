<?php
          
$grid = mytheme_get_featured_posts();
$a = 0;
/*debug_to_console( count( $grid ) );*/

if( empty( $grid ) || 3 < count( $grid ) )
  return;
?>

<div class="grid">
  <?php foreach ($grid as $post) : setup_postdata( $post ); ?>

    <div id="pos<?php echo $a++ ?>" class="grid-thumb">
      <?php the_post_thumbnail(); ?>
      <div class="roundel<?php echo $a ?>" id="rou<?php echo $a ?>">
        <div class="roundel-text">
        <h4><?php the_category(', '); ?></h4>

        <hr class="roundel-line">

        <!-- <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->
        <h3><a href="<?php the_permalink(); ?>"><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_title()),0,50)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content . '...'; ?></a></h3>
        <hr class="roundel-line">
        </div>
      </div>
      <div class="bottom-bar<?php echo $a ?>">
        <div class="link-container">
        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
          <?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,90)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content . '...'; ?> 
          <img id="bar" src="<?php bloginfo('stylesheet_directory'); ?>/images/bottom-bar-arrows.png" />
        </a>
        </div>
        <div class="featured_post_author">
          <p>
            By <?php the_author(); ?>
          </p>
        </div>
      </div>
      <!--
      <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        
      </a>
    -->
    </div>

  <?php endforeach; ?>
</div>
<?php wp_reset_postdata(); ?>