<?php get_header(); ?>

<div class="cuerpo-contenido">
    <div class="cuerpo">

        <section id="breadcrumbs">

            <?php the_breadcrumb(); ?><!-- llama a los breadcrumbs-->

        </section>
 

        <div class="row hidden-print" id="cuerpoCont">

            <?php get_sidebar(); ?><!--llama a el archivo sidebar.php-->


            <div class="col-lg-9 col-md-9 col-sm-12 col-12 content">

                <?php include('template/Facultades.php') ?>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
