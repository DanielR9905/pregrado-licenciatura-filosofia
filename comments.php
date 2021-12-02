<?php if( have_comments() ) { ?>

	<a class="commentarios"><?php comments_number(
		__('No hay comentarios aún', 'utp'),
		__('Hay un comentario publicado', 'utp'),
		__('Hay % comentarios', 'utp')
	); ?></a>
	
	<ol id="comments-list">
		<?php wp_list_comments();?>
	</ol>
	
	<?php paginate_comments_links(); ?>

<?php } ?>

<?php comment_form(); ?>