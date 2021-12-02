<?php if(is_active_sidebar('barralateral')){
	dynamic_sidebar('barralateral' );
	} else { ?>
		<div class="widget">
			<?php get_search_form(); ?>
		</div>
	<?php } 
?>
