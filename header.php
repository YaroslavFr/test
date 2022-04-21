<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- SEO tags -->
	<meta name="description" content="<?=get_bloginfo("description");?>">
	<meta property="og:title" content="BET GUIDE">
	<meta property="og:image" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">

	<meta name="twitter:card" content="BET GUIDE">
	<meta name="twitter:site" content="BET GUIDE">
	<meta name="twitter:title" content="BET GUIDE">
	<meta name="twitter:description" content="<?=get_bloginfo("description");?>">
	<meta name="twitter:image" content="">

	<!-- GENERATE FAVICON: https://realfavicongenerator.net/ -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri();?>/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri();?>/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri();?>/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="/img/favicons/site.webmanifest">
	<link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#EA227A">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<title><?php wp_title(); ?></title>
	<!-- Main styles -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="page__header header">
  <div class="container">
    <div class="header__inner">

      <a class="header__logo logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img class="logo__text" src="<?the_custom_logo();?>" width="187" height="17" alt="Logo Betguide">
      </a>
      <!-- /.header__logo -->

      <nav class="header__navbar navbar">
		<?wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu'           => 'Menu 1',
				'menu_class' 	 => 'navbar__list'
			)
		);?>
      </nav>
      <!-- /.navbar -->
    </div>
    <!-- /.header__inner -->
  </div>
  <!-- /.container -->
</header>
