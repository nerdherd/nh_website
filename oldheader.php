<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/wordpress/wp-content/themes/nh_win_theme/style.css"/>
<script type="text/javascript" src="/wordpress/wp-content/themes/nh_win_theme/jquery.min.js"></script>
<script src="/wordpress/wp-content/themes/nh_win_theme/jqueryui.min.js" type="text/javascript"></script>
<script src="/wordpress/wp-content/themes/nh_win_theme/script.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="http://technoturtle.comze.com/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Be a Nerd! Join the Herd!</title>
</head>

<body class="home">
<div class="main_cont">
<div id="pre_title">CAMS Robotics Team 687</div>
<div id="logo_row"><a href="../index.html"></a></div>
<div id="title">The Nerd Herd</div>
    <!-- we originally had "Sponsors" as its own category, but since the previous nerdherd site had sponsors listed under
         "The Nerds" we decided to go with that...
     -->
<div id="sidebar">
<ul>
 <?php 
  $pages = get_pages('&parent=0');
  $heir = get_ancestors( $post->ID, 'page');
  if (is_home()){
	  echo '<li class="currentli"><a href="'.home_url().'">Home</a></li>';
  }else{
	  echo '<li><a href="'.home_url().'">Home</a></li>';
  }
  foreach ($pages as $pagg) {
	$paggid = $pagg->ID;
	$check = get_pages('child_of='.$pagg->ID.'&parent='.$pagg->ID.'');
	if (in_array($paggid, $heir)){
		$option = '<li class="currentli">';
		$option .= '<div class="currentlidiv">'.$pagg->post_title.'</div>'; 
	}else{
		if(empty($check) && $pagg->ID == $post->ID){
		$option = '<li class="currentli"><div class="currentlidiv"><a href="'.get_page_link($pagg->ID).'">'.$pagg->post_title.'</a></div>';
		}elseif(empty($check)){
		$option = '<li><a href="'.get_page_link($pagg->ID).'">'.$pagg->post_title.'</a>';
		}else{
  		$option = '<li>'.$pagg->post_title;
		}
	}
	$option .= '<ul class="sub">'; 
    $child   = get_pages('child_of='.$pagg->ID.'&parent='.$pagg->ID.'');
	 foreach ($child as $chip) {
	 	$chipid = $chip->ID;               
		 $chirp  = '<li>';
		if (in_array($chipid, $heir)||$chipid==$post->ID){
		 $chirp  = '<a href="'.get_page_link($chip->ID).'" class="currentsubhref">';
		}else{
		 $chirp .= '<a href="'.get_page_link($chip->ID).'">';
		}
		 $chirp .= $chip->post_title;
		 $chirp .= '</a>';
		 $chirp .= '</li>';
		 $option.= $chirp;
	 }
	$option .= '</ul>';
	$option .= '</li>';
	echo $option;
  }
 ?>
</ul>
<div id="social">
<div id="facebook"><a href="http://www.facebook.com/pages/CAMS-Robotics-Team-687/196250570424533"></a></div>
<div id="twitter"><a href="http://twitter.com/#!/camsrobotics"></a></div>
<div id="youtube"></div>
<div id="git"></div>
</div>
</div>