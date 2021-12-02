<?php
/*
Template Name: Plan de Estudio
*/
?>

<?php 
// funcion para eliminar las tildes en la comparación al llamar las materias y mostrar el contenido
function replace_specials_characters($s) {
    $s = mb_convert_encoding($s, 'UTF-8','');
    $s = preg_replace("/á|à|â|ã|ª/","a",$s);
    $s = preg_replace("/Á|À|Â|Ã/","A",$s);
    $s = preg_replace("/é|è|ê/","e",$s);
    $s = preg_replace("/É|È|Ê/","E",$s);
    $s = preg_replace("/í|ì|î/","i",$s);
    $s = preg_replace("/Í|Ì|Î/","I",$s);
    $s = preg_replace("/ó|ò|ô|õ|º/","o",$s);
    $s = preg_replace("/Ó|Ò|Ô|Õ/","O",$s);
    $s = preg_replace("/ú|ù|û/","u",$s);
    $s = preg_replace("/Ú|Ù|Û/","U",$s);
    $s = str_replace(" ","_",$s);
    $s = str_replace("ñ","n",$s);
    $s = str_replace("Ñ","N",$s);
    
    $s = preg_replace('/[^a-zA-Z0-9_.-]/', '', $s);
    return $s;
}

global $wpdb;
$slugSitio = explode('/', get_bloginfo("url"));
$datoSlug = end($slugSitio);
$results = $wpdb->get_row("SELECT * FROM wp_programas WHERE progra_nombre = '$datoSlug'");
$id = $results->progra_id_programa;

// $query = "SELECT * from materia 
//             WHERE programa_academico_id = '$id'
//             ORDER BY periodo_materia ASC";

// require_once get_template_directory() . '/connection.php';

// $result = pg_query($connection, $query);

// if(!$result) {
//     echo "Error: Query failed." . PHP_EOL;
//     exit;
// }
?>

<?php get_header(); ?><!--llama a el archivo header.php-->

<div class="cuerpo-contenido">

    <div class="cuerpo">


        
        <main class="cuerpoCont panel-body row" id=""><!--funcion de boostrap para crear una fila y dividirla en columnas-->
            <section class="my-4" id="breadcrumbs">
                <?php the_breadcrumb(); ?><!-- llama a los breadcrumbs-->
            </section>

            <aside class="col-xxl-3 col-xl-4 col-12 mb-5">
                <?php get_sidebar(); ?> <!-- llama el aside -->
            </aside>
            
            <div class="planEstudio col-xxl-9 col-xl-8 col-12">

            <div class="titulonoti "> 
                <h2><?php _e('Plan de Estudio'); ?></h2>
            </div>  
                
                <!-- Template Name: plan -->
                <div id="infoPlanEstudio">
                <?php
                        //idSitio();
                        //global $idSitio;
                        //elimina el error del certificado ssl
                        stream_context_set_default([
                            'ssl' => [
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                            ]
                        ]);
                        
                        $json = file_get_contents('https://programasacademicos.utp.edu.co/programa-academico/'.$id);
                        $array = json_decode($json);
                        
                        $array0 = $array[0];
                        $array1 = $array[1][0]->periodicidad;
                        
                        echo '<div id="display-resources">';
                        foreach ($array0 as $dato){
                            $materias = $dato->materias;
                            $periodo = $dato->periodo;

                            if ($periodo == 0){
                                echo '<div class="planEs"><p>Nivelatorio</p>';
                            } else {
                                echo '<div class="planEs"><p>'.$array1.' '.$periodo.'</p>';
                            }
                            
                            $bool_electivas =false;

                            foreach ($materias as $dato2) {
                                if ($dato2->electiva == 0) {
                                    echo '<div class="materia"><ul>';
                                    echo '<li><b>'.$dato2->codigo.'</b></li>';
                                    echo '<li>'.$dato2->nombre.'</li>';
                                    echo '<li>Creditos: <b>'.$dato2->creditos.'</b></li>';
                                    echo '</ul></div>';
                                    $nombreMateria = strtr($dato2->nombre, " ", "-");                                    
                                    $nombreMateria1 = preg_replace("/\((.*?)\)/i", "", $nombreMateria);
                                    if($dato2->contenido) {
                                        echo '<div class="contenido"><a href='. $dato2->contenido .' target="_blank">Contenido <i class="bi bi-box-arrow-up-right"></i></a></div>';
                                    } else {
                                        echo '<div class="contenido">No disponible</div>';
                                    }
                                } else {
                                    $bool_electivas = true;
                                }
                            }

                            if ($bool_electivas) {
                                echo '<p href="#demo" class="planEs electivas" data-bs-toggle="collapse" >Electivas <i class="bi bi-chevron-compact-down"></i></p>';
                                echo '<ul class="electivas-container collapse" id="demo" >';

                                foreach ($materias as $dato2) {
                                    if ($dato2->electiva == 1) {
                                        echo '<div class="lista-electivas materia "><ul>';
                                        echo '<li class="" ><b>'.$dato2->codigo.'</b></li>';
                                        echo '<li>'.$dato2->nombre.'</li>';
                                        echo '<li>Creditos: <b>'.$dato2->creditos.'</b></li>';
                                        echo '</ul></div>';

                                        $nombreMateria = strtr($dato2->nombre, " ", "-");                                    
                                        $nombreMateria1 = preg_replace("/\((.*?)\)/i", "", $nombreMateria);

                                        if($dato2->contenido) {
                                            echo '<div class="contenido"><a href='. $dato2->contenido .' target="_blank">Contenido <i class="bi bi-box-arrow-up-right"></i></a></div>';
                                        } else {
                                            echo '<div class="contenido">No disponible</div>';
                                        }
                                    }
                                }
                                echo '</ul>';
                            }
                            echo '</div>';
                        }
                        echo '</div>';
                    
                    ?>
                    
                </div>

            </div>


            
        </main><!--cierre del panel-body-->

    </div>

</div>

<?php get_footer(); ?><!--llama a el archivo footer.php-->
<!-- <script>
   $('.collapser').click(function() {
    $(this).next().collapse('bs-toggle');
}); 
</script> -->