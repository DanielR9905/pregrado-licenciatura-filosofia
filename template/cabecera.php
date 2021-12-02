<!-- sección del banner superior -->
<section  class="row align-items-center logos-top justify-content-around row_cabecera">
	<div class="col-2 col-md-1 d-lg-none">
		<div class="btn-group dropend">		
			<button class="btn btn-light dropdown rounded-end" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Menu institucional">
				<i class="bi bi-list"></i>
			</button>
			<?php wp_nav_menu(array(
				'theme_location' => 'menu1',
				'container' => false,
				'items_wrap' => '<ul class="dropdown-menu">%3$s</ul>',
				'add_a_class' => 'dropdown-item')); 
			?>
		</div>
	</div>
	
		<!-- logo de la UTP -->

		<section class="row col-4 col-sm-5 col-md-4 col-lg-3   text-center text-sm-start logo-titulo ">
			<!-- contenedor img -->
			<div class="d-flex align-items-center col-12 titulo">
				<a class="subrayado" href="http://www.utp.edu.co/" rel="noopener norreferer" title="UTP" target="_blank">
					<img src="<?php bloginfo('template_directory');?>/img/logoutp.png" title="Universidad Tecnológica de Pereira" alt="Logo Universidad Tecnológica de Pereira" class="logo">
				</a>
				
				<?php $titulo = get_bloginfo('description');
					$aTitulo = explode(" ", $titulo, 3); ?>
				<!-- linea vertical -->
				<div class="d-none d-sm-block vl col-1 ms-4"></div>
				<!-- fin linea -->

				<!-- texto facultades -->
				<div class="col-sm-4 d-none d-sm-block text-start ms-4">
					
					<a href="<?php bloginfo('url'); ?>">
						<?php if (count($aTitulo) == 1) {
							echo "<span class='tituloSup'>" . $aTitulo[0] . "</span>";
						} elseif (count($aTitulo) == 2) {
							echo "<span class='tituloSup'>" . $aTitulo[0] . " " . $aTitulo[1] . "</span>";
						} elseif (count($aTitulo) == 3) {
							echo "<span class='tituloSup'>" . $aTitulo[0] . " " . $aTitulo[1] . "</span><br>";
							echo "<span class='tituloIup'>" . $aTitulo[2] . "</span>";
						} elseif (count($aTitulo) == 4) {
							echo "<span class='tituloSup'>" . $aTitulo[0] . " " . $aTitulo[1] . " ". $aTitulo[2] . "</span><br>";
							echo "<span class='tituloIup'>" . $aTitulo[3] . "</span>";
						}?>
					</a>
				</div>
			<!-- fin texto facultades -->
			</div>
			<!-- fin img -->
			
				
		</section>

	<!-- menu superior -->
	<div class="col-lg-6 d-none d-lg-block ">
		<?php wp_nav_menu(array(
			'theme_location' => 'menu1',
			'container' => false,
			'items_wrap' => '<ul class="nav nav-fill menu-estandar menu-top-center">%3$s</ul>',
			'add_a_class' => 'nav-link'));
		?>
	</div>

	<!-- logo del ministerio de educación -->
	<section class="col-6 col-sm-5 col-md-6 col-lg-3 col-xl-2 offset-xl-1 text-end logo-ministerio">
		<a href="https://www.mineducacion.gov.co/" rel="noopener norreferer" title="Ministerio de Educación" target="_blank">
			<img src="<?php bloginfo('template_directory');?>/img/ministerioeducacion.png" title="Ministerio de Educación" alt="Ministerio de Educación de Colombia" class="logo2">
		</a>
	</section>

	<!-- </div> -->

</section>
<!-- fin sección del banner superior -->

<!-- sección del slider que se muestra en la página principal. -->
<section class="imagen-banner">
	<?php
	echo do_shortcode('[smartslider3 slider="2"]');
	?>
</section>
<!-- fin sección del slider que se muestra en la página principal -->