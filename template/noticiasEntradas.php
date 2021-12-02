<div class="titulonoti py-1">
	<h2><b><?php _e('Noticias y Eventos'); ?></span></b></h2>
</div>


<section class="px-4">
	
	<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<article class="row my-5 justify-content-between contenido-noticias">
		<div class="col-lg-4 px-0 contenido-noticias__imagen">

			<div class="imagen-post">
				<?php $thumb_id = get_post_thumbnail_id(); 
				if ($thumb_id != 0) { ?>

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><!-- funcion que permite agregar imagenes destacadas en el contenido de los post-->

				<?php } else { ?>

					<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory');?>/img/imgPorDefecto.png" title="Universidad Tecnológica de Pereira"></a>

				<?php } ?>
			</div>
		</div>

		<!-- text container  -->
		<div class="col-lg-8 row align-content-between py-2">
			<div class="col-12 post-title-new">
				<h3>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!--titulo de los post-->
				</h3>
			</div>
			<div class="col-12 post-content">				
				<?php the_excerpt(); ?><!--contenido del post con un limite de caracteres-->
				<div class="col-12 publicacion">
					<?php _e('Fecha Publicación: '); ?><!--fecha de la publicación-->
					<?php the_time(get_option('date_format') ); ?>  &bull; <?php the_time(get_option('time') ); ?>
					<a><?php the_category(','); ?></a><!--fecha, hora y categoria de los post-->						
				</div>
			</div>
		</div>
	</article>

	<?php endwhile;

		else: ?><!--cierre del while de wordpress -->

		<!-- si no encuentra nada en los post anterio, muestra la linea de codigo siguiente -->
			<h1><?php _e('No se encontro lo que está buscando, por favor realice una nueva busqueda!') ?></h1><!-- e_()=>funcion de wordpres que traduce al idioma que este configurado wordpress-->

			<?php get_search_form(); ?>

	<?php endif ?><!--cierre del if del loop de wordpress-->
</section>

<div class="row justify-content-center paginacion">
	<?php echo paginate_links( $args ); ?> <!-- función que muestra la páginación de las entradas -->
</div>