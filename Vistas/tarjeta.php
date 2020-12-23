<?php
include("nav.php");
?>

    <!-- SOLICITAR TARJETA -->
    <div id="solicita_tarjeta" class="container-fluid  p-0 m-0 alto d-flex ">
        <div class="row m-0 p-0 fondo-imagen-tarjeta  align-content-center justify-content-center">
            
            <div class="col-md-6">
                <div class="jumbotron bg-transparente">
                    <!-- <h1 class="display-1"></h1> -->
                    <p class="lead">¿Necesitás tu tarjeta de crédito?</p>
                    <hr class="my-2">
                    <p class="lead">
                        <a class="btn pildora-amarilla " href="tarjeta_form.php" role="button">SOLICITALA AQUÍ</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- REQUISITOS TARJETA -->

    <div id="" class="container-fluid p-0 m-0 alto d-flex" >
        <div class="row m-0 p-0 fondo-tarjeta-requisito align-content-center justify-content-center">
            <button type="button" class="btn pildora-amarilla" data-toggle="modal" data-target="#exampleModal">CONÓCELOS</button>
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
                                            <li>TARJETA DIRECTA: DNI + RECIBO DE SUELDO + IMPUESTO O SERVICIO</li>
                                            <hr class="my-4">
                                            <li> TARJETA PROMO: DNI + OTRA TARJETA DE CRÉDITO + IMPUESTO O SERVICIO</li>
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
    
    <!-- FILTRO COMERCIOS -->
    <div id="comercios_tarjeta" class="container-fluid p-0 m-0 alto d-flex" >
        <div class="row m-0 p-0 fondo-imagen-tarjeta-comercios  align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron bg-transparente">
                    <!-- <h1 class="display-1"></h1> -->
                    <p class="lead">Comercios Adheridos</p>
                    <hr class="my-2">
                    <div class="container">
                        <div class="row ">
                            <div class="col">
                                <form action="">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="exampleFormControlSelect1">Rubro</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>C1</option>
                                                <option>C2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleFormControlSelect1">Localidad</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>C1</option>
                                                <option>C2</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="lead">
                    <a class="btn pildora-amarilla" href="#" role="button">Buscar</a>
                </p>
            </div>
        </div>
    </div>

    <!-- RESUMEN -->
    <div id="resumen_tarjeta" class="container-fluid  p-0 m-0 alto d-flex" id="resumen">
        <div class="row m-0 p-0 fondo-imagen-s  align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="col-12 text-center">
                    <h3 class="text">Completá los datos y accedé a tu resumen!</h3>
                </div>
                <div class="jumbotron bg-transparent">
                    <form method="post" action="../php/procesarResumen.php">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">DNI</label>
                                <input type="text" class="form-control shadow-sm" name="dni">
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleFormControlSelect1">Sexo</label>
                                <select class="form-control" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 text-center mt-4">
                                <button class="btn pildora-amarilla" name="button" id="button">Mostrar Resumen</button>
                            </div>
                        </div>
                    </form>
                    <div class="card col-12 mt-5">
                        <div class="card-footer-ubicaciones text-muted text-center">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Puede que haya muchos usuarios descargando su resumen en éste momento.
                                    Si notas alguna demora, por favor intenta en unos minutos. Gracias!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LUGARES DE PAGO -->
    <div class="container-fluid  p-0 m-0 alto d-flex ">
        <div  id="lugaresPago" class="row m-0 p-0 fondo-ventajas  align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron bg-transparente">
                    <h3 class="tituloVentajas">Conocé nuestros puntos de pago</h3>
                    <button type="button" class="btn pildora-amarilla" data-toggle="modal" data-target="#lugares-modal">VER PUNTOS DE PAGO</button>
                    <!-- Modal -->
                    <div class="modal fade" id="lugares-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg ">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Lugares de Pago</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <ul class="text-left">
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Casa Central Credifiar:</a> 1ra Junta 2675 - Santa Fe</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Sucursal Santa Fe:</a> Av. Aristobulo del Valle 6857 - Santa Fe</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Sucursal Ceres:</a> Av Mayo 286 - Ceres</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Sucursal Esperanza:</a> 25 de Mayo 286 - Esperanza</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Sucursal Parana:</a> Urquiza 1087 - Parana</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone BP:</a> Av. Blas Parera 7888 - Santa Fe</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone FZ:</a> Av. Facundo Zuviria 5570 - Santa Fe</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone Recreo:</a> Ignacio Crespo 931 - Santa Fe</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone Helvecia:</a> Dr. Roman 840 - Santa Fe</div>
                                            <div><a class="font-weight-bold" style="font-size: 18px;">Centro de Cobros Bodrone San Javier:</a> Independencia 1871 - Santa Fe</div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- beneficios -->
    <div  class="container-fluid p-0 m-0 alto d-flex">
        <div class="row m-0 p-0 fondo-imagen-tarjeta-beneficios  align-content-center justify-content-center">
            <div class="carousel-caption-tarjeta col-md-6">
				<h2 class="font-weight-bold titulo-slider">Conocé los beneficios de Tarjeta Credifiar</h2>
				<p class="col-md-6 text-carousel-caption p-0">DESCUENTOS</p>
				<p class="col-md-6 text-carousel-caption p-0">CUOTAS SIN INTERÉS</p>
				<p class="col-md-10 text-carousel-caption p-0">+ DE 2000 COMERCIOS ADHERIDOS</p>
                <a class="btn pildora-amarilla my-md-2 p-md-2" href="index.php#promociones" role="button">CONÓCELOS</a>
                    <!--  
                <button type="button" class="btn pildora-amarilla" data-toggle="modal" data-target="#exampleModal">CONÓCELOS
            </button>
        
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
                                         <ul>
                                            <li>TARJETA DIRECTA: DNI + RECIBO DE SUELDO + IMPUESTO O SERVICIO</li>
                                            <li> TARJETA PROMO: DNI + OTRA TARJETA DE CRÉDITO + IMPUESTO O SERVICIO</li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
                -->
		    </div>
        </div>
    </div>

<!-- </div> -->

<?php
include("footer.php");
?>