<?php
/**
 * Template Name: Page of Books
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>

<?php get_header(); ?>

<div class="content">
<?php 
$type = '';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'paged' => $paged,
  'posts_per_page' => 2,
  'caller_get_posts'=> 1
);
$temp = $wp_query;  // assign orginal query to temp variable for later use   
$wp_query = null;
$wp_query = new WP_Query($args); 
?>

<?php

 get_template_part( 'loop', 'index' );?>
     <br/>
    <br/>
    <br/>
    	</div>
        </div>
        </div>
<?php get_footer(); ?>