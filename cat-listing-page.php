<?php
/*
Template Name: Category Listing
*/
get_header(); ?>

<div class="listing-cont">
    <div class="cat-header">
        <div class="cat-name" id="listing-page">
            <h1>Browse Categories</h1>
        </div>
    </div>

    <div class="listing">
        <ul class="bycategories">
            <?php wp_list_categories('title_li='); ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>





<div class="clear"></div>

        

<?php get_footer(); ?>            