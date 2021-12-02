<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
	<title> <?php wp_title(''); ?> </title>

	<?php include('template/SaltarContenido.php') ?>

<?php wp_head(); ?>

</head>

<body class="<?php body_class() ?>" id="inicio">

	<!-- <div id="cuerpoC">
	
	<?php //include('template/menusResponsiveSuperior.php') ?> -->

	<header id="header">

		<?php include('template/cabecera.php') ?>

		<section class="row align-items-center menu-institucional">

			<div class="col-7 d-lg-none">		
				<button class="btn boton text-white dropdown" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Menu institucional">
					<i class="bi bi-list-ul fs-1"></i>
				</button>
				<?php wp_nav_menu(array(
					'theme_location' => 'menu2',
					'container' => false,
					'items_wrap' => '<ul class="dropdown-menu">%3$s</ul>',
					'add_a_class' => 'dropdown-item')); 
				?>
			</div>

			<div class="col-9 d-none d-lg-block">
				<?php wp_nav_menu(array(
					'theme_location' => 'menu2',
					'container' => false,
					'items_wrap' => '<ul class="nav menu-estandar">%3$s</ul>',
					'add_a_class' => 'nav-link'));
				?>
			</div>

			<div class="col-3 d-none d-lg-block mt-2 mb-2">
				<?php get_search_form(); ?>
			</div>

			<div class="col-5 d-lg-none">
				<?php get_search_form(); ?>
			</div>

		</section>

	</header>