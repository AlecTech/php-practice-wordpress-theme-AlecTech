<?php get_header(); ?>

<h2>
    Archive Template:
    <?php echo get_the_archive_title(); ?>

</h2>
<!-- have_posts thats where the end -->
<?php while ( have_posts() ) : // loop through the posts ?>
<?php the_post(); // keeps track of current iteration ?>

<article>

    <h3><?php the_title(); ?> </h3>

    <p>
        <strong> Article Published On: </strong>
        <time datetime="<?php echo get_the_date( DATE_ATOM );  ?>"> 
        <?php echo get_the_date(); //gets the date the article was publish ?> </time>
    </p>

    <p>
        <?php the_excerpt(); //outputs post summary ?>
    </p>

    <p> 
    
    <a href="<?php the_permalink(); ?>" >
        READ MORE
    </a>
    
    </p>

</article>

<?php endwhile; ?>

<?php get_footer(); 