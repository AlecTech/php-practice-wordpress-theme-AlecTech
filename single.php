<?php get_header(); ?>

<article>

    <h2>
        BLOG POST (single):
        <?php the_title(); ?> 
    </h2>

    <p>
        <strong> Article Published On: </strong>
        <time datetime="<?php echo get_the_date( DATE_ATOM );  ?>"> 
            <?php echo get_the_date(); //gets the date the article was publish ?> 
        </time>
    </p>
    <h3> Post Categories </h3>
    <ul>
        <?php
            $categories = wp_get_post_categories( get_the_id() ); 
            // loop through the post categories
            foreach ($categories as $catID)
            { // catID is category Object (WP_TERM)
                $category = get_category( $catID );
                $categoryURL = get_term_link($category);
        ?>
                <li>
                    <a href="<?php echo $categoryURL; ?> ">
                        <?php echo $category->name; //Property from WP_TERM ?>
                    </a>
                </li>
        <?php 
            } //this php just to out put closing } for the foreach loop (to hide it from html)
        ?>
        
    </ul>   
    <h3> Post Content </h3>
    <?php the_content(); //outputs post summary ?>
    
</article>


<?php get_footer(); 