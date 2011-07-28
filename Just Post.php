<?php
/*
Template Name: Simple Page
*/
?>
<?php get_header(); ?>
<div class="content">
<?php 
$page_id = get_the_ID(); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
$page_data = get_page( $page_id ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. 

$content = apply_filters('the_content', $page_data->post_content); // Get Content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
$title = $page_data->post_title; // Get title
echo $content; // Output Content
?>
<br/>
<br/>
<br/>
</div>
<?php get_footer(); ?>
