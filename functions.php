<?php 
function my_scripts() {
/**
 * Register global styles & scripts.
 */
//css
wp_register_style('estilo_tema', get_stylesheet_uri(), '', '1.0');
wp_register_style('cabecera', get_template_directory_uri() . '/css/cabecera.css');
wp_register_style('planEstudio', get_template_directory_uri() . '/css/planEstudio.css');
wp_register_style('footer', get_template_directory_uri() . '/css/footer.css');
wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
wp_enqueue_style('iconos', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" );
wp_enqueue_script('popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js");
//js
wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ));
wp_register_script('pagina', get_template_directory_uri() . '/js/pagina.js', array( 'jquery' ));
wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), array( 'jquery' ));

/**
 * Enqueue global styles & scripts.
 */
//css
wp_enqueue_style('estilo_tema');
wp_enqueue_style('cabecera');
wp_enqueue_style('footer');
wp_enqueue_style('planEstudio');
wp_enqueue_style('bootstrap');

//js
wp_enqueue_script('bootstrap');
wp_enqueue_script('pagina');
wp_enqueue_script('jquery');
//wp_enqueue_script('scripts');
} 
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// función para subir el logo
function my_theme_setup() {
  add_theme_support( 'custom-logo', array(
      'height' => 240,
      'width' => 240,
      'flex-height' => true,
  ));
}
add_action( 'after_setup_theme', 'my_theme_setup' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
  return 35;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Titulo del sitio
add_filter( 'wp_title', 'baw_hack_wp_title_for_home');
function baw_hack_wp_title_for_home($title)
{
  if (empty($title) && (is_home() || is_front_page()) ) {
    return get_bloginfo('name');
  }
  return $title;
}

// funcion de wordpress para generar menus en el administrador
function utp_register_menus() {
 if ( function_exists( 'register_nav_menus' ) ) {
   register_nav_menus(
    array(
        'menu1' => 'Menu Superior',
        'menu2' => 'Menu Navegacion',
        //'menu3' => 'Menu Inferior',
        'menu4' => 'Menu Lateral Responsive',
    ));
 }
}
add_action('init','utp_register_menus' );

// funcion para agregar clases a las anclas en wp_nav_menu con el atributo 'add_a_class'
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


// funcion para añadir clases en una opcion con submenu

add_filter( 'nav_menu_link_attributes', 'add_class_to_items_link', 10, 3 );

function add_class_to_items_link( $atts, $item, $args ) {
  // check if the item has children
  $hasChildren = (in_array('menu-item-has-children', $item->classes));
  if ($hasChildren) {
    // add the desired attributes:
    $atts['class'] = 'nav-link dropdown-toggle';
    $atts['data-bs-toggle'] = 'dropdown';
    $atts['title'] = 'PruebasSub';//Solo prueba
    $atts['target'] = '_self';
  }
  return $atts;
}

// funcion para reemplazar clases al submenu
function new_submenu_class($menu) {    
  $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu submenu" /',$menu);       
  return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class'); 
// funcion de wordpress para crear los widgets en el administrador

function utp_register_sidebars(){

  if (function_exists('register_sidebar')) {

    register_sidebar(array(
      'name'          =>  'Cabecera',
      'id'            =>  'cabecera',
      'description'   =>  'Este es el sidebar es para poner el slider de la cabecera', 'utp',
      'before_widget' =>  '<div class = "widget1">',
      'after_widget'  =>  '</div>',
      'before_title'  =>  '<h3 class="titulowidget1">',
      'after_title'   =>  '</h3>'
    ));

    register_sidebar(array(
      'name'          =>  'Barra Lateral',
      'id'            =>  'barralateral',
      'description'   =>  'Este es el sidebar Contiene la Información de la Barra Lateral', 'utp',
      'before_widget' =>  '<div class = "barralateralb">',
      'after_widget'  =>  '</div>',
      'before_title'  =>  '<h3 class="titulobarralateral">',
      'after_title'   =>  '</h3>'
    ));

    register_sidebar(array(
      'name'          =>  'Información de Contacto',
      'id'            =>  'contacto',
      'description'   =>  'Este es el sidebar Información de Contacto', 'utp',
      'before_widget' =>  '<div class = "widget4">',
      'after_widget'  =>  '</div>',
      'before_title'  =>  '<h3 class="titulowidget4">',
      'after_title'   =>  '</h3>'
    ));

    register_sidebar(array(
      'name'          =>  'Píe de Página',
      'id'            =>  'pie',
      'description'   =>  'Espacio para la información del píe de Página', 'utp',
      'before_widget' =>  '<div class = "pie">',
      'after_widget'  =>  '</div>',
      'before_title'  =>  '<div id="pie"><h3>',
      'after_title'   =>  '</h3></div>'
    ));

    register_sidebar(array(
      'name'          =>  'Video Inicial',
      'id'            =>  'videoinicial',
      'description'   =>  'Espacio para el video inicial', 'utp',
    ));

    register_sidebar(array(
      'name'          =>  'Texto Inicial',
      'id'            =>  'textoinicial',
      'description'   =>  'Espacio para el texto que esta al lado del video inicial', 'utp',
      'before_title'  =>  '<h2>',
      'after_title'   =>  '</h2>'
    ));

    register_sidebar(array(
      'name'          =>  'Tienda UTP',
      'id'            =>  'tiendautp',
      'description'   =>  'Espacio para la imagen de la tienda UTP', 'utp',
      'before_title'  =>  '<h2>',
      'after_title'   =>  '</h2>'
    ));

  }
}
add_action ('widgets_init','utp_register_sidebars');

  
// Activar imágenes destacadas en páginas y entradas
add_theme_support( 'post-thumbnails' );

//Eliminar basura del Header
//Según algunos autores, WordPress ubica gran cantidad de código no muy útil en el head. Cosas como el número de versión, y enlaces WLW, RSD, etc.
//Para limpiar todo esto basta con esta utilizar esta función dentro de functions.php de tu theme.
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// Añadir Google Analytics al footer Esta función nos permite añadir de una manera sencilla Google Analytics.
// Sólo requiere cambiar UA-XXXXX-X por tu código (el que te provee Google Analytics).
//function add_google_analytics() {
  //  echo '<script src="https://www.google-analytics.com/ga.js" type="text/javascript"></script>';
  //  echo '<script type="text/javascript">';
  //  echo 'var pageTracker = _gat._getTracker("UA-55530142-10");';
  //  echo 'pageTracker._trackPageview();';
  //  echo '</script>';
//}
//add_action('wp_footer', 'add_google_analytics');


/*Logo personalizado en el login de admin*/
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url(/img/logoutp.png) !important; }
    </style>';
}
 
add_action('login_head', 'my_custom_login_logo');


//funcion para ingresar imagenes de cabecera por el personalizador del sitio
$args = array(
  'flex-width'    => true,
  'flex-height'   => true,
  'width'         => 1280,
  'height'        => 370,
  'default-image' => get_template_directory_uri() . '/img/imgPorDefecto.png',
  'uploads'       => true,
  'header-text'   => false
);
add_theme_support( 'custom-header', $args );


//* Integra migas de pan
function the_breadcrumb() {
  //echo '<a href="">Inicio</a> » ';
  if (!is_home() || is_front_page()) {
    echo '<a href=" '; bloginfo('url'); echo ' ">Inicio</a>';
    if (is_category() || is_single()) {
      echo " » "; the_category('title_li=');
      if (is_single()) {
        echo " » "; the_title();
      }
    } elseif (is_page()) {
      echo " » "; echo the_title();
    }
  }
}
add_theme_support('the_breadcrumb');

//funcion para personalizar el login en wprddpresss
function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {height:150px;background-image: url(https://pruebacrie.utp.edu.co/imageneidentidad/wp-content/themes/plantilla-utp/img/logoutp.png) !important;background-size: contain;background-repeat: no-repeat;width: 100%;}.login {background-color: #0f3d6a;}.login form {background: #fff;box-shadow: 0 1px 3px rgb(0, 80, 96, 0.3) !important;}.wp-core-ui .button-primary {background: #0f3d6a !important;border-color: #0f3d6a !important;box-shadow: 0 1px 0 #0f3d6a !important;color: #fff !important;text-decoration: none !important;text-shadow: 0 -1px 1px #0f3d6a, 1px 0 1px #0f3d6a, 0 1px 1px #0f3d6a, -1px 0 1px #0f3d6a !important;}.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover{color:#0f3d6a !important}a{color:#0f3d6a !important;}.login #backtoblog a, .login #nav a{ color: #fff !important }
	</style>
<?php }//end my_login_logo()

add_action( 'login_enqueue_scripts', 'my_login_logo' );

//fin funcion para personalizar el login en wprddpresss
?>
