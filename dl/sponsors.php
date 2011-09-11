<?php
/*
Template Name: Sponsors Based
*/
?>
<?php get_header(); ?>
 <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<div class="content">
<div class="large"><?php the_title();?></div>
<?php the_content(); ?>
 <br/>
 <br/>
 </div>
 

 <!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>

 <!-- The very first "if" tested to see if there were any Posts to -->
 <!-- display.  This "else" part tells what do if there weren't any. -->
 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php get_footer(); ?>