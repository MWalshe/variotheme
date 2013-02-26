<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic' rel='stylesheet' type='text/css'>
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/js/flexslider.css" type="text/css">
<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.flexslider-min.js"></script>
			
		<!-- drop Google Analytics Here -->
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35874231-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		<!-- end analytics -->
		<script type="text/javascript" charset="utf-8">
  jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 5
  });
  });
</script>
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header class="header" role="banner">
			
				<div id="inner-header" class="wrap clearfix">
					
					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>
					
					
					<nav role="navigation">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
						<style type="text/css">

.underlinemenu{
font-weight: bold;
width: 100%;
}

.underlinemenu ul{
padding: 6px 0 7px 0; /*6px should equal top padding of "ul li a" below, 7px should equal bottom padding + bottom border of "ul li a" below*/
margin: 0;
text-align: right; //set value to "left", "center", or "right"*/
}

.underlinemenu ul li{
display: inline;
}

.underlinemenu ul li a{
color: #494949;
padding: 6px 3px 4px 3px; /*top padding is 6px, bottom padding is 4px*/
margin-right: 20px; /*spacing between each menu link*/
text-decoration: none;
border-bottom: 3px solid gray; /*bottom border is 3px*/
}

.underlinemenu ul li a:hover, .underlinemenu ul li a.selected{
border-bottom-color: black;
}

</style>

						
					</nav>
				<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="http://variationsonastring.files.wordpress.com/2013/02/harry-potter-socks_5_sm.jpg" />
    </li>
    <li>
      <img src="http://variationsonastring.files.wordpress.com/2013/01/lace-up-gloves_1.jpg" />
    </li>
    <li>
      <img src="http://variationsonastring.files.wordpress.com/2012/01/j-is-for-joy_3_small.jpg" />
    </li>
<li>
      <img src="http://variationsonastring.files.wordpress.com/2013/02/img_0554.jpg" />
    </li>
<li>
      <img src="http://variationsonastring.files.wordpress.com/2012/08/water-bottle-cover_1.jpg" />
    </li>
  </ul>
</div>
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->
