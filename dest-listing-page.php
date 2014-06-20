<?php
/*
Template Name: Destination Listing
*/
get_header(); ?>

<div class="listing-cont">
    <div class="cat-header">
        <div class="cat-name" id="listing-page">
            <h1>Browse Destinations</h1>
        </div>
    </div>

    <div class="listing">
        <ul class="bycategories">
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'croatia', 'post_tag' )->term_id ); ?>">
                    <?php $tag1 = get_term_by( 'slug', 'croatia', 'post_tag' ); echo $tag1->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'cyprus', 'post_tag' )->term_id ); ?>">
                    <?php $tag2 = get_term_by( 'slug', 'cyprus', 'post_tag' ); echo $tag2->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'egypt', 'post_tag' )->term_id ); ?>">
                    <?php $tag3 = get_term_by( 'slug', 'egypt', 'post_tag' ); echo $tag3->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'france', 'post_tag' )->term_id ); ?>">
                    <?php $tag4 = get_term_by( 'slug', 'france', 'post_tag' ); echo $tag4->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'greece', 'post_tag' )->term_id ); ?>">
                    <?php $tag5 = get_term_by( 'slug', 'greece', 'post_tag' ); echo $tag5->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'italy', 'post_tag' )->term_id ); ?>">
                    <?php $tag6 = get_term_by( 'slug', 'italy', 'post_tag' ); echo $tag6->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'malta-gozo', 'post_tag' )->term_id ); ?>">
                    <?php $tag7 = get_term_by( 'slug', 'malta-gozo', 'post_tag' ); echo $tag7->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'morocco', 'post_tag' )->term_id ); ?>">
                    <?php $tag8 = get_term_by( 'slug', 'morocco', 'post_tag' ); echo $tag8->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'portugal', 'post_tag' )->term_id ); ?>">
                    <?php $tag9 = get_term_by( 'slug', 'portugal', 'post_tag' ); echo $tag9->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'spain', 'post_tag' )->term_id ); ?>">
                    <?php $tag10 = get_term_by( 'slug', 'spain', 'post_tag' ); echo $tag10->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'turkey', 'post_tag' )->term_id ); ?>">
                    <?php $tag11 = get_term_by( 'slug', 'turkey', 'post_tag' ); echo $tag11->name; ?> >>
                </a>
            </li>
            <li class="cat-item">
                <a href="<?php echo get_tag_link(get_term_by( 'slug', 'united-states', 'post_tag' )->term_id ); ?>">
                    <?php $tag12 = get_term_by( 'slug', 'united-states', 'post_tag' ); echo $tag12->name; ?> >>
                </a>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>





<div class="clear"></div>

        

<?php get_footer(); ?>            