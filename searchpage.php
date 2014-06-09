<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>        
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>
        <div class="blog_left">
            <header>
                <h1>Search Results: &quot;<?php echo get_search_query(); ?>&quot;</h1>
                <br>
            </header>
            <?php get_search_form(); ?>
            <?php if ( have_posts() ) :  // results found?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article>
                        <h2><?php the_title();  ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <p> <a href="<?php the_permalink(); ?>">View</a> </p>
                    </article>
                <?php endwhile; ?>
            <?php else :  // no results?>
                <article>
                    <h1>No Results Found.</h1>
                </article>
            <?php endif; ?>

        </div><!--//blog_left-->

        <div class="clear"></div>

        

<?php get_footer(); ?>            