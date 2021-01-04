<?php
    include ("nav.php");
  ?>
  <!-- SOLICITAR PRESTAMO 	-->
    <div id="solicita_tarjeta" class="container-fluid  p-0 m-0 alto d-flex ">
        <div class="row m-0 p-0 fondo-imagen-prestamos align-content-center justify-content-start">
            <div class="col-6 m-superior">
		        <a class="btn pildora-amarilla " href="prestamos_form.php" role="button">SOLICITALO AQUÍ</a>               
            </div>
        </div>
    </div>

    <!-- REQUISITOS PRESTAMOS -->
    <div id="requisitos_prestamo" class="container-fluid p-0 m-0 alto d-flex  mt-5 mt-md-0" >
        <div class="row m-0 p-0 fondo-requisito align-content-start justify-content-center">
            <div class="col-12 pt-md-5">
                <h2 class="text-center">Requisitos Préstamos Personales</h2>
            </div>
            <div class="col-12 pt-md-3">
                <button type="button" class="btn pildora-amarilla" data-toggle="modal" data-target="#exampleModal">CONÓCELOS</button>
            </div>         
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Requisitos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-10">
                                         <ul class="list-unstyled">
                                            <li>TARJETA DIRECTA: DNI + OTRA TARJETA DE CRÉDITO + IMPUESTO O SERVICIO</li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
	<?php
    	include ("footer.php");
  	?>