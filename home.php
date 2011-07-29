<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<?php 
function url($title){
$url = get_site_url();
$page = get_page_by_title($title);
$pgid = $page->ID;
echo '<a href="'.$url.'/?page_id='.$pgid.'"><span class="text">'.$title.'</span></a>';
}

$toast = get_page_by_title('toast');
$tostd = $toast->ID;
$tostp = get_page( $tostd );
$tacts = strip_tags(apply_filters('the_content', $tostp->post_content));
?>
<div class="content">
<div class="toast"><div id="ttext"><?php echo $tacts;?><div class="x">x</div></div></div>
<div id="logs"><div class="s_tile"><?=url('Blogs')?></div></div>
<div id="thenerds"><div class="s_tile"><?=url('The Nerds')?></div></div>
<div id="outreach"><div class="s_tile"><?=url('Outreach')?></div></div>
<div id="theherd"><div class="l_tile"><?=url('The Herd')?></div></div>
<div id="sponsors"><div class="s_tile"><?=url('Sponsors')?></div></div>
<div id="lorem"></div>
<br/>
<br/>
<br/>
</div>
<?php get_footer(); ?>
