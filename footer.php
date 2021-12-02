<?php wp_footer() ?>

	<footer class="row footer-main pt-3 pb-3" role="contentinfo" id="pie-de-pagina">

	    <div class="row align-content-center mb-4">
			<h2 class="col-5 d-none d-sm-block footer-main__title">
				<strong>Contacto</strong>
			</h2>

			<div class="col-12 col-sm-7 text-end">
				<a href="https://www.facebook.com/utpereira/" aria-label="Facebook UTP" target="_blank" rel="noopener" data-bs-toogle="tooltip" title="Facebook UTP"><img src="//media.utp.edu.co/cms/img/iconos-redes-gris/facebookg.png" alt="facebook"></a>
				<a href="https://twitter.com/UTPereira" aria-label="Twitter UTP" target="_blank" rel="noopener" data-bs-toogle="tooltip" title="Twitter UTP"><img src="//media.utp.edu.co/cms/img/iconos-redes-gris/twitterg.png" alt="twitter"></a>
				<a href="https://www.youtube.com/user/utpereira" aria-label="YouTube UTP" target="_blank" rel="noopener" data-bs-toogle="tooltip" title="YouTube UTP"><img src="//media.utp.edu.co/cms/img/iconos-redes-gris/youtubeg.png" alt="youtube"></a>
				<a href="https://www.instagram.com/UTPereira/" aria-label="Instgram UTP" target="_blank" rel="noopener" data-bs-toogle="tooltip" title="Instagram UTP"><img src="//media.utp.edu.co/cms/img/iconos-redes-gris/instagramg.png" alt="instagram"></a>
				<a href="https://co.linkedin.com/school/universidad-tecnol-gica-de-pereira/" aria-label="Linkedin UTP" target="_blank" rel="noopener" data-bs-toogle="tooltip" title="Linkedin UTP"><img src="//media.utp.edu.co/cms/img/iconos-redes-gris/linkeding.png" alt="facebook"></a>
				<a href="https://www.utp.edu.co/atencionalciudadano/herramientas-y-ayuda.html" aria-label="Ayuda al Cuidadano" target="_blank" rel="noopener" data-bs-toogle="tooltip" title="Aplicacion Movil UTP"><img src="//media.utp.edu.co/cms/img/iconos-redes-gris/portalg.png" alt="utp"></a>
			</div>
	    </div>	      


			<?php if(is_active_sidebar('contacto')){ ?>

				<div class="col-12 col-sm-5 footer-main__contacto-info">
					<?php dynamic_sidebar('contacto'); ?>
				</div>

			<?php } else { ?>
	            
	            <div class="col-12 col-sm-5 footer-main__contacto-info">
	                <h2 class="mb-3 d-sm-none footer-main__title"><?php _e( 'Contacto', 'utp' ); ?></h2>
	                <p class="mb-0"><strong><?php _e( 'Llámanos:', 'utp' ); ?></strong></p>
	                <p class="mb-0"><?php _e( 'Teléfono: ', 'utp' ); ?>+57 6 3137141 <?php _e( 'Fax: : ', 'utp' ); ?> 3137107</p>
	                <p class="mb-0"><?php _e( 'Conmutador: ', 'utp' ); ?>(57) (6) 313 7300</p>
	                <br>
	                <p class="mb-0"><strong><?php _e( 'Correo: ', 'utp' ); ?><a href="mailto:contactenos@utp.edu.co?Subject=Correo%20de%20contacto%20">contactenos@utp.edu.co</a></strong></p>
	                <br>
	                <p class="mb-0"><strong><?php _e( 'Dirección:', 'utp' ); ?></strong></p>
	                <p class="mb-0"><?php _e( 'Recursos Informáticos y Educativos - CRIE:', 'utp' ); ?></p>
	                <p class="mb-0"><?php _e( 'Carrera 27 #10-02 Barrio Álamos Pereira, Risaralda:', 'utp' ); ?></p>
	                <p class="mb-0"><?php _e( 'Edificio 3 - oficina 307:', 'utp' ); ?></p>
	            </div>

            <?php } ?>

            <div class="col-12 col-sm-7">
                <p> © 2021 - <a href="//www.utp.edu.co" aria-label="Portal UTP"></a><?php _e( 'Universidad Tecnológica de Pereira - ', 'utp' ); ?><a href="//www.utp.edu.co/acreditacion/historia-de-la-acreditacion-utp.html" aria-label="Leer Acreditacion"><?php _e( 'Reacreditada institucionalmente en 2021, con vigencia de 10 años ', 'utp' ); ?></a>- Sujeta a inspección y vigilancia</p>
                <br>
                <p><?php _e( 'Carrera 27 #10-02 Barrio Álamos - Risaralda - Colombia - AA: 97 - Código postal: 660003 - ', 'utp' ); ?><a href="//www.utp.edu.co/registro/19/ceres" aria-label="Leer Ceres"><?php _e( 'CERES', 'utp' ); ?></a><br></p>
                <br>
                <p><?php _e( 'PBX: +57 6 3137300 - Fax: +57 6 3213206 - Línea gratuita de Quejas y Reclamos: 018000966781 - ', 'utp' ); ?><b><a href="mailto:contactenos@utp.edu.co?Subject=Correo%20de%20contacto%20" style="color:#000000">contactenos@utp.edu.co</a></b></p>
                <p><b><?php _e('Horario de atención:', 'utp') ?></b><?php _e( ' Lunes a Viernes de 8:00am a 12:00m y de 2:00pm a 6:00pm', 'utp' ); ?></p>
                <br>
                <p><?php _e('Institución de Educación Superior vigilada por MinEducación', 'utp') ?></p>
                <p><a href="//www.utp.edu.co/cms-utp/data/bin/UTP/web/uploads/media/calidad/archivos/1313-MGD-01_V4_Manual_General_de_Directrices_del_SGSI.pdf" aria-label="Leer Politicas"><?php _e('Políticas de Seguridad de la Información', 'utp') ?></a> - <a href="//www.utp.edu.co/secretaria/informacion-general/678/notificaciones-judiciales" aria-label="Leer Notificacion"><?php _e('Notificaciones Judiciales', 'utp') ?></a></p>
                <br>
                <p><?php _e('Desarrollado por: ', 'utp') ?><a href="//crie.utp.edu.co/desarrollo-web" aria-label="Ir a pagina del crie"><?php _e('Recursos Informáticos y Educativos, Desarrollo y Administración Web UTP', 'utp') ?></a></p>
 
            </div>


	</footer>

	<!-- <button type="button" class="anclaInferior btn btn-default btn-xs" title="Inicio">
		<a href="#inicio"><span class="glyphicon glyphicon-arrow-up"></span></a>
	</button> -->

</div>

</body>

</html>