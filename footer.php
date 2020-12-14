<nav>
    <h2> Footer Navigation </h2>

    <?php 
    wp_nav_menu(
        array(
            'theme_location' => 'footer_menu'
        )
        );
        ?>
        </nav>
<footer>

<h2>
<?php bloginfo('title'); ?> FOOTER</h2>
<p> 
    &copy; 
    <?php echo date ('Y'); ?> 
    <a href="<?php echo site_url(); ?> " >
        <?php bloginfo('title'); ?>
    </a>
    All rights Reserved!
</p>

</footer>
<?php
//same as head() but for footer scripts and output that are handled by the plugins
wp_footer();

?>
    
</body>
</html>