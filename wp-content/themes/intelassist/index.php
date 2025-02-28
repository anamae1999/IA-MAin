<?php get_header(); ?>

<?php
    if (locate_template("templates/sections/sections.php") != '') {
        get_template_part( "templates/sections/sections" );
    }

    while (have_posts()) : the_post(); 

  the_content(); 
   endwhile; 
?>
<?php get_footer(); ?>