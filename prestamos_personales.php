<?php
    include ("nav.php");
  ?>
  <!-- SOLICITAR PRESTAMO -->	
    <div id="solicita_prestamo" class="container-fluid  p-0 m-0 alto d-flex">	
        <div class="row m-0 p-0 fondo-imagen-prestamos  align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron bg-transparente">
                        <!-- <h1 class="display-1"></h1> -->
                        <p class="lead">¿Necesitás un préstamo?</p>
                        <hr class="my-2">
                        <p class="lead">
                        <a class="btn btn-primary btn-lg" href="prestamos_form.php" role="button">Gestionar Préstamo</a>
                        </p>
                </div>
            </div>
        </div>
    </div>

    <!-- REQUISITOS PRESTAMOS -->
    <div  id="requisitos_prestamo" class="container  alto d-flex">
        <div class="row m-0 p-0 align-content-center justify-content-center">		
            <h5 class="text-center my-4 mx-4" style="font-size: 2rem;">Requisitos Préstamos Personales</h5>
            <div class="contenedor-imagen col-md-12 img-fluid">
                <a class="img-fluid" href="#" data-toggle="modal" data-target="#modal">
            <!-- <img src="../img/requisitos_tarjeta.jpg" class="img-fluid imagen" alt=""> -->
            <img src="../img/requisitos_tarjeta.jpg" class="img-fluid d-none d-md-block" alt="...">
                <img src="../img/requisitos_tarjeta-celu.jpg" class="img-fluid d-md-none" alt="...">
                </a>
            </div>
        </div>
    </div>
    
    
	<?php
    	include ("footer.php");
  	?>