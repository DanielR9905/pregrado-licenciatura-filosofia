<?php get_header(); ?><!--llama a el archivo header.php-->
<main class="row center-block cuerpoCont">
    <section class="my-4" id="breadcrumbs">
                <?php the_breadcrumb(); ?><!-- llama a los breadcrumbs-->
    </section>
    <aside class="col-xxl-3 col-xl-4 col-12 mb-5">
        <?php get_sidebar(); ?> <!-- llama el aside -->
    </aside>
    <div class="col-xxl-9 col-xl-8 col-12">
        <?php include('template/programas.php'); ?>
    </div>
</main>
<?php get_footer(); ?><!--llama a el archivo footer.php-->