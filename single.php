<?php get_header(); ?><!--llama a el archivo header.php-->

	<!-- contenido del single -->
<div class="cuerpo-contenido">

	<div class="cuerpo">

		
		<div class="cuerpoCont panel-body row" id=""><!--funcion de boostrap para crear una fila y dividirla en columnas-->

			<section class="my-4" id="breadcrumbs">
				<?php the_breadcrumb(); ?><!-- llama a los breadcrumbs-->
			</section>

			<aside class="col-xxl-3 col-xl-4 col-12 mb-5">
				<?php get_sidebar(); ?> <!-- llama el aside -->
			</aside>				

			<article class="contenidoNoticiasPost col-sm-8 col-md-9 col-sm-12 col-xs-12"><!--primera columna del index-->

				<!-- loop de wordpress -->
			<?php if(have_posts()): while(have_posts()): the_post(); ?>										

				<div class="titulonoti" id="">
					<h2 href="<?php the_permalink(); ?>"><?php the_title(); ?></h2><!--titulo de los post-->
				</div>

				<div class="post-content">

					<?php the_content(); ?><!-- funcion que permite agregar imagenes destacadas en el contenido de los post-->

					<!--funcion que agrega el contenido completo de los post-->

					<div class="publicacion" id="">
						<?php _e('Fecha Publicación: '); ?><?php the_time(get_option('date_format') ); ?> &bull;  <?php the_time(get_option('time') ); ?>  &bull; <?php the_category(','); ?><!--fecha, hora y categoria de los post-->
					</div>

					<div class="comentario">
						<?php comments_template(); ?><!--llama a la funcion de los comentarios-->
					</div>

					<div id="tagsCompart">

						<div id="tags">
							<p><?php the_tags(); ?></p>
						</div>

					</div>

				<?php endwhile;

				else: ?><!--cierre del while del lopp de wordpress -->

					<!-- si no encuentra nada en los post anterior, muestra la linea de codigo siguiente -->
					<h2><?php _e('No se encontro lo que está buscando, por favor realice una nueva busqueda!') ?></h2><!-- e_()=>funcion de wordpres que traduce al idioma que este configurado wordpress-->

				<?php endif ?><!--cierre del if del loop de wordpress-->

			</article><!--cierre del arcticle del single-->

		</div><!--cierre div.row y panel-body-->

	</div>

</div>

<?php get_footer(); ?><!--llama a el archivo footer.php-->