<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">  
    	<title><?php echo wp_get_document_title(); ?></title>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="bg-wr">
		<div class="cnt-wr">

			<div class="top-line-wr">
				<div class="container">

					<div class="top-line">
						<div class="logo">
							<?php if ( is_front_page() ) : ?>
							<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Автоматы от My-azart" title="Автоматы от My-azart"></span>
							<?php else : ?>
							<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Автоматы от My-azart" title="Автоматы от My-azart"></a>
							<?php endif; ?>
						</div>

						<div class="nav-line-wr">
							<div class="nav-line">
								<a href="#main-menu" id="toggle"><span></span></a>
								<nav id="main-menu" class="main-menu">
									<?php wp_nav_menu( array(
										'theme_location' => 'top',
										'container'      => false,
										'menu_class'     => '',
										'walker'         => new Nav_Walker_Nav_Menu() )
										);
									?>
								</nav>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="wrapper">
				<div class="container">
				<div id="innermobile" style="display: none;"></div>
					<div class="row">