<?php
    include ("nav.php");
?>

    <!-- ADHERITE A CREDIFIAR -->
    <div id="trabaja_comercio" class="container-fluid  p-0 m-0 alto d-flex ">
        <div class="row m-0 p-0 fondo-adheri-comercio  align-content-center justify-content-start">            
            <div class="col-md-8">
                <!-- <div class="jumbotron bg-transparente"> -->
                    <h2 class="font-weight-bold titulo-slider col-md-8">ADHERITE A CREDIFIAR EN FORMA RÁPIDA Y ÁGIL!!</h2>
                    <p class="col-md-6 text-carousel-caption p-0">Atención comercial personalizada.</p>
                    <p class="col-md-6 text-carousel-caption p-0">Planes de cuotas a la medida de las necesidades de tu comercio</p>
                    <p class="col-md-10 text-carousel-caption p-0">Acciones de marketing para potenciar tus ventas</p>
                    <p class="col-md-10 text-carousel-caption p-0">Autorizaciones telefónicas o vía WEB.</p>
                    <a class="btn pildora-amarilla my-md-2 p-md-2" href="comercio_form.php" role="button">ADHERITE</a>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <!-- PLANES DE CUOTA  -->
    <div id="requisitos_tarjeta" class="container-fluid p-0 m-0 alto d-flex mt-5 mt-md-0" >
        <div class="row m-0 p-0 fondo-planes-comercio align-content-center justify-content-start">
             <div class="col-md-8">
                <!-- <div class="jumbotron bg-transparente"> -->
                    <h2 class="font-weight-bold titulo-slider">+ CUOTAS + BENEFICIOS</h2>
                    <p class="col-md-6 text-carousel-caption p-0">Conocé nuestros planes!</p>
                    <!-- Boton modal -->
                    <button type="button" class="btn pildora-amarilla my-md-2 p-md-2" data-toggle="modal" data-target="#lugares-modal">
                        CONOCELAS
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="lugares-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Novedades</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <ul class="text-left">
                                            <div>
                                                <a class="font-weight-bold" style = "font-size: 18px;">PLANES CON TU TARJETA DE CRÉDITO:</a>
                                                3,6,12,18 Y HASTA PLANES EN 24 CUOTAS!!!!BONIFICACIONES INCREIBLES A NUESTROS CLIENTES!!!
                                            </div>
                                            <br>
                                            <div>
                                                <a class="font-weight-bold" style = "font-size: 18px;">CRÉDITOS DE CONSUMO:</a>
                                                PLANES DE HASTA 12 CUOTAS, CON LA TASA MÁS COMPETITIVA DEL MERCADO!!!
                                            </div>
                                            <br>
                                            <div>
                                                <a class="font-weight-bold" style = "font-size: 18px;">PIONEROS EN PLAN DNI:</a>
                                                OFREZCA A SUS CLIENTES LA FINANCIACIÓN HASTA EN 6 CUOTAS A SOLA FIRMA Y SIN ENTREGA !!
                                            </div>
                                            <br>
                                            <div>
                                                <a class="font-weight-bold" style = "font-size: 18px;">CONSÚLTENOS A:</a>
                                                info@credifiar.com.ar Y LE ENVIAMOS NUESTRO ASESOR COMERCIAL AL INSTANTE !!
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer text-center" style="text-align: center;">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

  

                            
<?php
    include ("footer.php");
?>