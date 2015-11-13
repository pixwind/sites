<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package tdkate
 * @since tdkate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script type="text/javascript">
    var _speedMark = new Date();
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<meta name="keywords" content="pix,wind,pics,photos,time,Terry,记录,时光,照片,新鲜,博客,心情,诗歌,文字,自留地">
<meta name="description" content="某人在自留地播种着时光">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32.ico" >
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/icon-57.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icon-72.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icon-114.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icon-144.png">

<?php wp_head(); ?>
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/ZLTXHK.css">
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/responsive-nav.min.js'></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div class="top-navigation">
		<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
		    <div class="container">
		    	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		    </div>
		</nav>
		<div class="sidebar-btn-container">
			 <a id="sidebar-btn" href="#"><i class="fa fa-plus"></i></a>
		</div>
	</div> <!-- .top-navigation -->

	<header id="masthead" class="site-header container" role="banner">
			<?php
				$logo = get_theme_mod( 'tdpersona_logo_img' );
				$style = get_theme_mod( 'tdpersona_logo_img_style', 'round' );

				if( $style === 'round' ) {
					$style_class = 'border-radius-circle';
				} else {
					$style_class = '';
				}
				$header_align = get_theme_mod( 'tdpersona_header_align', 'center' );

				if( $header_align === 'left' ) {
					$header_align_class = 'left';
				} else if ( $header_align === 'right' ) {
					$header_align_class = 'right';
				} else {
					$header_align_class ='';
				}
			?>

			<div class="brand <?php echo esc_attr( $header_align_class ); ?>">
				<?php if( !empty( $logo ) ): ?>
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="<?php echo esc_attr( $style_class ); ?>" src="<?php echo esc_url( $logo ); ?>" alt="">
					</a>
				</div> <!-- .logo -->
				<?php endif; ?>
				<div class="brand-meta">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- .brand-meta -->

				<?php if( get_theme_mod( 'tdpersona_post_formats_navigation', 'hide' ) != 'hide' ): ?>
				<div class="post-formats-navigation">
					<div class="pf-open-btn">
						<a id="post-formats-open-btn" class="border-radius-circle" href="#"><i class="fa fa-plus"></i></a>
					</div><!-- .pf-open-btn -->

					<div class="post-formats-navigation-container">
						<ul class="list-unstyled">
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/standard/' ); ?>" title="<?php _e('Text', 'tdpersona'); ?>"><i class="fa fa-pencil"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/audio/' ); ?>" title="<?php _e('Audio', 'tdpersona'); ?>"><i class="fa fa-music"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/gallery/' ); ?>" title="<?php _e('Gallery', 'tdpersona'); ?>"><i class="fa fa-camera"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/image/' ); ?>" title="<?php _e('Photo', 'tdpersona'); ?>"><i class="fa fa-picture-o"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/video/' ); ?>" title="<?php _e('Video', 'tdpersona'); ?>"><i class="fa fa-film"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/quote/' ); ?>" title="<?php _e('Quote', 'tdpersona'); ?>"><i class="fa fa-quote-right"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/link/' ); ?>" title="<?php _e('Link', 'tdpersona'); ?>"><i class="fa fa-link"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/aside/' ); ?>" title="<?php _e('Aside', 'tdpersona'); ?>"><i class="fa fa-thumb-tack"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/status/' ); ?>" title="<?php _e('Status', 'tdpersona'); ?>"><i class="fa fa-bullhorn"></i></a></li>
							<li><a class="border-radius-circle td-tooltip" href="<?php echo esc_url( home_url('/') . 'type/chat/' ); ?>" title="<?php _e('Chat', 'tdpersona'); ?>"><i class="fa fa-comments-o"></i></a></li>
							<li><a id="post-formats-hide-btn" class="border-radius-circle td-tooltip" href="#" title="<?php _e('Hide', 'tdpersona'); ?>"><i class="fa fa-times"></i></a></li>
						</ul><!-- .list-unstyled -->
					</div><!-- .post-formats-navigation-container -->
				</div><!-- .post-formats-navigation -->
				<?php endif; ?>

			</div><!-- .brand -->
	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main container">
