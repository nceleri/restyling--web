<?php
    include ("nav.php");
?>
    <div class="container-fluid m-superior-medio">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-3" >
                    Centro de Ayuda
                </h1>
            </div>
        </div>
    </div>

    <!-- CENTRO DE AYUDA PARA RESPONSIVE -->
    <div class="container d-none d-md-block d-md-flex my-4">	
        <div class="row">
            <div class="col-12 alto d-flex ">
                <div class="card-deck align-content-center">
                    <div class="card pb-4 shadow">
                        <div class="card-body text-center">
                            <i class="fas fa-file-invoice-dollar fa-7x iconos-ayuda"></i>
                            <h5 class="card-title-credito-centro-ayuda my-4">Resúmen de Cuenta</h5>
                            <p class="text-left">Información sobre tus tarjetas: pago,resúmen,saldos
                                ,cierre, límites y más.
                            </p>
                        </div>
                        <div class="card-footer-centro-ayuda text-muted text-center" >
                            <a href="tarjeta.php#resumen" class="btn btn-outline-primary boton-ayuda">Buscar</a>
                        </div>
                    </div>
                    <div class="card pb-4" >
                        <div class="card-body text-center">
                            <i class="fas fa-headset fa-7x iconos-ayuda"></i>
                            <h5 class="card-title-credito-centro-ayuda my-4">Canales de Atención</h5>
                            <p class="text-left">Turnero Digital, Tus claves, Credifiar Online, Sucursales
                                y más.
                            </p>
                        </div>
                        <div class="card-footer-centro-ayuda text-muted text-center" >
                            <a href="tarjeta_form.php" class="btn btn-outline-primary boton-ayuda" data-toggle="modal" data-target="#lugares-modal">Buscar</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="lugares-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Canales de Atención</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <ul class="text-left">
                                                <div><a class="font-weight-bold" style = "font-size: 18px;">Créditos de Consumo:</a> 0800-444-0461</div>
                                                </br>
                                                <div><a class="font-weight-bold" style = "font-size: 18px;">Tarjeta de Crédito:</a>  0810-888-0080</div>
                                                </br>
                                                <div><a class="font-weight-bold" style = "font-size: 18px;">Contacta con Nosotros:  </a><a href="contacto.php" class="btn btn-outline-primary boton-ayuda">Aquí</a> </div>
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
                    </div>
                    <div class="card pb-4" >
                        <div class="card-body text-center">
                            <i class="fas fa-credit-card fa-7x iconos-ayuda"></i>
                            <h5 class="card-title-credito-centro-ayuda my-4">Tarjetas de Crédito</h5>
                            <p class="text-left">Como obtener tu tarjeta Credifiar, renovación, costos,
                                promociones y más.
                            </p>
                        </div>
                        <div class="card-footer-centro-ayuda text-muted text-center" >
                            <a href="tarjeta.php" class="btn btn-outline-primary boton-ayuda">Buscar</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <!-- </div>
        <div class="container alto d-none d-md-block"> -->
        <!-- <div class="row mt-4"> -->
            <div class="col-12 alto d-flex">
                <div class="card-deck  align-content-center">
                    <div class="card pb-4" >
                        <div class="card-body text-center">
                            <i class="fas fa-hand-holding-usd fa-7x iconos-ayuda"></i>
                            <h5 class="card-title-credito-centro-ayuda my-4">Productos y Servicios</h5>
                            <p class="text-left">Todos los productos y servicios que ofrece Credifiar.</p>
                        </div>
                        <div class="card-footer-centro-ayuda text-muted text-center" >
                            <a href="index.php#promociones" class="btn btn-outline-primary boton-ayuda">Buscar</a>
                        </div>
                    </div>
                    <div class="card pb-4" >
                        <div class="card-body text-center">
                            <i class="fas fa-shopping-bag fa-7x iconos-ayuda"></i>
                            <h5 class="card-title-credito-centro-ayuda my-4">Comercios Amigos</h5>
                            <p class="text-left">Promociones, requisitos, beneficios y costos.</p>
                        </div>
                        <div class="card-footer-centro-ayuda text-muted text-center" >
                            <a href="tarjeta.php#comercios" class="btn btn-outline-primary boton-ayuda">Buscar</a>
                        </div>
                    </div>
                    <div class="card pb-4" >
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-7x iconos-ayuda"></i>
                            <h5 class="card-title-credito-centro-ayuda my-4">Nuestra Cultura</h5>
                            <p class="text-left">Trabajá con nosotros,Casa Credifiar, concursos.</p>
                        </div>
                        <div class="card-footer-centro-ayuda text-muted text-center" >
                            <a class="btn btn-outline-primary boton-ayuda"  data-toggle="modal" data-target="#nuestraCultura-modal">Buscar</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="nuestraCultura-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Información:</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <ul class="text-left">
                                                <div><a class="font-weight-bold" style = "font-size: 18px;">Información:</a> <a href="empresa.php" class="btn btn-outline-primary boton-ayuda">Enviar CV</a></div>
                                                </br>
                                                <div><a class="font-weight-bold" style = "font-size: 18px;">La Empresa:</a> <a href="empresa.php" class="btn btn-outline-primary boton-ayuda">Aquí</a></div>
                                                </br>
                                                <div><a class="font-weight-bold" style = "font-size: 18px;">Contacta con Nosotros:  </a><a href="contacto.php" class="btn btn-outline-primary boton-ayuda">Aquí</a></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CENTRO DE AYUDA PARA CELUAR -->
    <div class="container alto locales d-block d-md-none">
        <h5 class="text-center my-4">Las más leídas</h5>

        <div class="panel-group" id="accordion">
            <div class="panel panel-default mt-5">
                <div class="panel-heading">
                    <h4 class="panel-title text-center ">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Que necesito para sacar mi credito</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.
                    </div>
                </div>
            </div>
            <div class="panel panel-default mt-5">
                <div class="panel-heading">
                    <h4 class="panel-title text-center">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Como obtengo mi turno para asistir a la sucursal</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.
                    </div>
                </div>
            </div>
            <div class="panel panel-default mt-5">
                <div class="panel-heading">
                    <h4 class="panel-title text-center">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Como descargar mi resumen de tarjeta</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.
                    </div>
                </div>
            </div>
            <div class="panel panel-default mt-5">
                <div class="panel-heading">
                    <h4 class="panel-title text-center">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Conece las fecha de vencimiento de tus creditos y tarjeta</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    include ("footer.php");
?>