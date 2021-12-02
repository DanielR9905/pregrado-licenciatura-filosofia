<?php
/*
Template Name: Plantilla con barra izquierda
*/
?>

<?php get_header(); ?><!--llama a el archivo header.php-->

<div class="cuerpo-contenido">

	<div class="cuerpo">

		<section id="breadcrumbs">
			<?php the_breadcrumb(); ?><!-- llama a los breadcrumbs-->
		</section>

		<div class="panel-body row" id="cuerpoCont"><!--funcion de boostrap para crear una fila y dividirla en columnas-->


			<?php get_sidebar(); ?><!--llama a el archivo sidebar.php-->				

			<article class="contenidoNoticiasPost col-sm-8 col-md-9 col-sm-12 col-xs-12"><!--primera columna del index-->
			<!-- loop de wordpress -->
			<?php if(have_posts()): while(have_posts()): the_post(); ?>		

				<div id="tituloPost">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!--titulo de los post-->
				</div>

				<div class="post-content">
					<?php the_content(); ?><!--funcion que agrega el contenido completo de los post-->

					<div id="publicacion">
						<?php _e('Fecha Publicación: '); ?><?php the_time(get_option('date_format') ); ?> &bull; <?php the_time(get_option('time') ); ?> &bull; <?php the_category(','); ?><!--fecha, hora y categoria de los post-->
					</div>

					<div class="comentario">
						<?php comments_template(); ?><!--llama a la duncion de los comentarios-->
					</div>

				</div>
		
			<?php endwhile;

			else: ?><!--cierre del while del lopp de wordpress -->

				<!-- si no encuentra nada en los post anterior, muestra la linea de codigo siguiente -->
				<h1><?php _e('No se encontro lo que está buscando, por favor realice una nueva busqueda!') ?></h1><!-- e_()=>funcion de wordpres que traduce al idioma que este configurado wordpress-->

			<?php endif ?><!--cierre del if del loop de wordpress-->

			</article><!--cierre del arcticle del page-->	

		</div><!--cierre del panel-body-->

	</div>

</div>

<?php get_footer(); ?><!--llama a el archivo footer.php-->