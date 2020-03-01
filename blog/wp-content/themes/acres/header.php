<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	     <link href="https://fonts.googleapis.com/css?family=Caudex:400,400i,700,700i&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Catamaran:200,300,400,500,600,700&display=swap" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
        
          <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
          <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
          <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
          <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
        <?php wp_head(); ?>
        <style>
            .read-more-btn{
	color:#3b5030;
	transition:0.5s;
   font-weight:600;
   margin-left:20px;
	float:right;
	font-size: 18px;
    margin-top:10%;
}
        </style>
    </head>
    
    <body>
	   
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
         
        
   
        <header class="main-header homemenu" id="header">
<div class="container">
<div class="row">
<div class="col-sm-12">
<a href="../home.html" class="main-logo"> 
<img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="header-logo" alt="InAcres"></a>
<div id="menu-overlay" class="main-menu-toggle">
</div>
<div class="mobile-slide menu" id="mobile-main-menu">
<div class="close-menu main-menu-toggle">
<span class="remove"></span></div>
<nav class="main-menu-items">
<div class="navbar">
 <ul class="nav">
 <li class="link-home"> <a href="../home.html"> Home </a> </li>
    <li class="button-dropdown link-about">
   <a href="javascript:;" class="dropdown-toggle">    About  </a>
   <ul class="dropdown-menu">
   <li><a  href="../our-story.html">InAcres Story</a></li>
   <li><a  href="../social-responsilbilty.html">Social Responsibilty</a></li>
   <li><a  href="../bhuthpur.html">Bhuthpur</a></li>
   <li><a  href="../community_shadnagar.html">CSA Model</a></li>
   <li><a  href="../sustainable-agriculture.html">Sustainable Agriculture</a></li>
   </ul>
    </li>
   <li class="button-dropdown link-soil-to-store">
   <a href="javascript:;" class="dropdown-toggle">   Soil To Store  </a>
    <ul class="dropdown-menu">
   <li><a href="../online-partners.html">Online Partners</a></li>
   <li><a href="../bharateeyam.html">Bharateeyam</a></li>
   <li><a href="../neighbouring_stores.html">Neighbouring stores</a></li>
   <li><a href="../eco_village_farm_tourism.html">Eco Village & Farm Tourism</a></li>
   <li><a href="../farmer_training.html">Farmer Training</a></li>
    </ul>
    </li>
<li class="button-dropdown link-gallery">
   <a href="../gallery.html"> Gallery </a>
   </li>
<li class="link-contact"> <a href="../contact-us.html">Contact </a> </li>
<i class="fa fa-search search-bar"></i>
   </ul>
   </div>
   </nav>
   </div>
   <button type="button" class="main-menu-toggle btn btn-brand"><span class="glyphicon glyphicon-menu-hamburger"></span> </button>  
   </div>
   </div>
   </div>
   </header>