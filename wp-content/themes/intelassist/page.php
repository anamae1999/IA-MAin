<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
while (have_posts()) : the_post(); 

  the_content(); 

endwhile; 

if(locate_template("templates/sections/sections.php") != '') {
	get_template_part( "templates/sections/sections" );
}

get_footer();
