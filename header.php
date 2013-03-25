<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php if(is_front_page()) { ?>
<title><?php bloginfo('name'); ?></title>
<?php }else if(is_home() || is_page()) { ?>
<title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php }else{?>
<title><?php wp_title('', true, 'right'); ?></title>
<?php }?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css' />
	
	<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/menu.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		if(is_home()){
			?>
			<meta name="description" content="<?php bloginfo('description');?>" />
			<?php
		}
	?>
	
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	
?>
	<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	?>
	
</head>

<body <?php body_class(); ?>>
	<div id='outer-wrapper'>
		<header>
				<?php
          $himg = get_header_image();
        ?>
        <?php if(!empty($himg)) :?>
 			<h1><a href='<?php echo home_url() ;?>'><img src='<?php header_image(); ?>' alt='<?php bloginfo('name');?>'/></a></h1>
         <?php else: ?>
         <h1><a href="<?php echo home_url() ;?>"><?php bloginfo('name');?></a></h1>
         <?php endif; ?>
				<div id='description'>
					<?php bloginfo('description');?>
				</div>
		</header>
		<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>