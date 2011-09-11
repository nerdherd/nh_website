<?php
/*
Template Name: Single
*/
?>
<?php get_header(); ?>

<div class="content">
<?php while(have_posts()) : the_post(); ?>
	<div class="post">
		<div class="post-gravatar">
			<a href="<?php echo get_author_posts_url($authordata->ID); ?>"><?php echo get_avatar(get_the_author_email(), '50') ?></a>
		</div>
		<div class="post-text">
			<h2 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php the_content('(more..)'); ?>
			<div class="post-cat">Categories: <?php the_category(' - '); ?></div>
			<div class="post-tag"><?php the_tags('Tags: ', ' - '); ?></div>
			<div class="post-meta">
				<?php the_time('j F Y'); echo ' at '; the_time('H:i'); ?> 
				<?php wp_link_pages(array('next_or_number'   => 'next', 'before' => ' - ', 'after' => '')); ?>
				<?php edit_post_link('Edit', ' - ', '') ?>
			</div>
            
		</div>
	</div>
<?php endwhile; ?>

	<input type="hidden" name="title" value="<?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" />
<br/>
<br/>
<br/>
</div>	
<?php get_footer(); ?>

