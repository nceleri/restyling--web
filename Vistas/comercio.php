<?php
    include ("nav.php");
?>

    <!-- ADHERITE A CREDIFIAR -->
    <div id="trabaja_comercio" class="container-fluid  p-0 m-0 alto d-flex ">
        <div class="row m-0 p-0 fondo-adheri-comercio  align-content-center justify-content-start">            
            <div class="col-md-8 ml-4">
                <div class="texto-banners">
                    <h2 class="font-weight-bold titulo-slider col-md-8">ADHERITE A CREDIFIAR EN FORMA RÁPIDA Y ÁGIL!!</h2>
                    <ul>
                        <li class="text-carousel-caption">Atención comercial personalizada.</li>
                        <li class="text-carousel-caption">Planes de cuotas a la medida de las necesidades de tu comercio</li>
                        <li class="text-carousel-caption">Acciones de marketing para potenciar tus ventas</li>
                        <li class="text-carousel-caption">Autorizaciones telefónicas o vía WEB.</li>
                    </ul>
                    <a class="btn pildora-amarilla my-md-2 p-md-2" href="comercio_form.php" role="button">ADHERITE</a>
                </div>
            </div>
        </div>
    </div>

    <!-- PLANES DE CUOTA  -->
    <div id="requisitos_comercio" class="container-fluid p-0 m-0 alto d-flex  mt-md-0" >
        <div class="row m-0 p-0 fondo-planes-comercio align-content-center justify-content-start">
             <div class="col-md-8">
                <div class="texto-banners">
                    <h2 class="font-weight-bold titulo-slider col-md-8">+ CUOTAS + BENEFICIOS</h2>
                    <p class="text-carousel-caption">Conocé nuestros planes!</p>
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
                                                <a class="" >● PLANES PARA EMPLEADOS CON RECIBO DE SUELDO</a>
                                            </div>
                                            <br>
                                            <div>
                                                <a class="" >● PLANES PARA CLIENTES QUE TENGAN UNA TARJETA DE CRÉDITO</a>
                                            </div>
                                            <br>
                                            <div>
                                                <a class="" >● PLANES PARA JUBILADOS Y PENSIONADOS</a>
                                            </div>
                                            <br>
                                            <div>
                                                <a class="" >● PLANES SOLO CON EL DNI</a>
                                            </div>
                                            <br>
                                            <div>
                                                <a class="" >● PLANES CON CUOTAS SIN INTERÉS</a>
                                            </div>
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