<section id="videoNoticiaPosgrados col-lg-12 col-md-12">
    <?php if(is_active_sidebar('videonoticias')){

    dynamic_sidebar('videonoticias' );

    } else { ?>

        <div class="widget">

            <?php get_search_form(); ?>

        </div>

    <?php } ?>
    <div id="noticiaVideoPosgrados" class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
        <?php echo do_shortcode('[contact-form-7 id="200" title="Información"]'); ?>
    </div>
</section>