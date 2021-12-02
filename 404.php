<?php get_header(); ?>

	<div class="cuerpo-contenido">

		<div class="cuerpo">

			<section id="breadcrumbs">
				<?php the_breadcrumb(); ?><!-- llama a los breadcrumbs-->
			</section>

			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-8 col-12 error404">
					<p>Ooops... Lo sentimos, no se ha podido encontrar la página solicitada.</p>
				</div>
				<img class="col-lg-5 col-md-5 col-sm-4 col-xs-12" src="<?php bloginfo('template_directory');?>/img/cono.png" title="Error 404">
			</div>

			<div class="contacto404">

				<h3>Por favor, utilice el buscador para encontrar la información requerida</h3>

				<?php get_search_form(); ?><br><br>

				<p>Si el problema persiste, contáctenos <br>
				CRIE – Sección Desarrollo y Administración Web</p>

				<?php echo do_shortcode('[contact-form-7 id="408" title="Contacto Administrador"]') ?>

			</div>


		</div>

	</div>

<?php get_footer(); ?>