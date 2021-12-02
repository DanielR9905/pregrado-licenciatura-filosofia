
<form role="search" id="cse-search-box" method="get" class="input-group input-group-sm" action="<?php echo home_url( '/' ); ?>">
    <label class="sr-only">
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
    </label>
    <input name="ie" value="UTF-8" type="hidden">
    <input class="form-control" type="search"
            placeholder="<?php echo esc_attr_x( 'Busqueda', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search form:', 'label' ) ?>" />
            <button class="input-group-text bi btn-primary bi-search rounded-end" aria-label="Buscador" aria-hidden="false"></button>
    </span>
</form>