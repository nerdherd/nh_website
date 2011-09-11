<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div class="content">
<span class="xlarge">404</span>
<br/>
<span class="large">That's an error.</span>
<br/>
<?php get_search_form(); ?>
<br/>
<br/>
<br/>
</div>
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>