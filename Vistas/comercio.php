<?php
    include ("nav.php");
?>
    <!-- CAROUSEL CON NAVEGACION -->
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <!-- indicadores  -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> -->
        </ol>
        <!-- fin indicadore  -->
        <div class="carousel-inner alto">				
            <div class="carousel-item  active ">
            <img src="../img/banner_comercio/tarjeta-credifiar.jpg" class="img-fluid d-none d-sm-block" alt="...">
            <img src="../img/banner_comercio/tarjeta-credifiar-celu.jpg" class="img-fluid d-sm-none" alt="...">
            </div>
            <div class="carousel-item ">
            <img src="../img/banner_comercio/envio-mail-celu.jpg" class="img-fluid d-sm-none" alt="...">
            <img src="../img/banner_comercio/envio-mail.jpg" class="img-fluid d-none d-sm-block" alt="...">
            </div>
            <div class="carousel-item ">
            <img src="../img/banner_comercio/envio-mail-celu.jpg	" class="img-fluid d-sm-none" alt="...">
            <img src="../img/banner_comercio/tarjeta-credifiar.jpg" class="img-fluid d-none d-sm-block" alt="...">
            </div>			
        </div>
			<!-- flechas -->
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<i class="fas fa-chevron-left fa-5x"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<i class="fas fa-chevron-right fa-5x"></i>
				<span class="sr-only">Next</span>
			</a>
			 <!-- fin flechas  -->
        
    </div>

    <!-- NOVEDADES COMERCIALES -->
    <div id="novedades_comerciales" class="container alto d-flex justify-content-center">	
        <div class="row align-content-center">
            <div class="col-md-6">	
                <h2 class="comercial-titulo">Novedades Comerciales</h3>                       
                
                </div>
                <div class="col-md-6 font-italic">	
                <p>ADHERÍ TU COMERCIO PARA QUE TUS CLIENTES DISFRUTEN DE LOS BENEFICIOS DE TARJETA CREDIFIAR.</p>
                <p>Querés que tú comercio sea auspiciente de las importantes. Aplicaciones en la FAN PAGE de Credifiar y tus ventas se incrementen mucho más, contactanos y te visitamos!!!.</p>
            </div>
        </div>
    </div>

    <!-- INICIAR SESION -->	
    <div id="sesion_liquidaciones" class="container-fluid p-0 m-0 alto d-flex">	
        <div class="row m-0 p-0 fondo-imagen-comercio  align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron bg-transparente-comercio">
                    <!-- <h1 class="display-1"></h1> -->
                    <p class="lead">¿Quieres realizar el seguimiento de tus liquidaciones?</p>
                    <hr class="my-2">
                    <p class="lead">
                    <a class="btn btn-primary btn-lg btn-comercio-ingreso" href="https://www.infotarjetas.com.ar/login.aspx?tid=28" role="button">Iniciar Sesión</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- COMERCIO -->	
    <div id="comercio_promociones" class="container-fluid alto-comercio d-flex justify-content-center">	
        <div class="row align-content-center ">
            <div class="col-12">
                <div class="card-deck mt-5">
                    <div class="col-md-6 mb-3">
                        <div class="card pb-4" >
                            <div class="card-body" >
                                <h5 class="card-title-comercio">Trabajá con Nosotros</h5>
                                <img src="../img/trabaja.png" class="img-fluid " alt="">
                            </div>
                            <div class="card-footer-comerio text-muted text-center" >
                                <a href="comercio_form.php" class="btn btn-primary">Solicitar</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-md-6 mb-3">
                        <div class="card pb-4" >
                            <div class="card-body" >
                                <h5 class="card-title-comercio">Planes y Promociones</h5>
                                <img src="../img/planesYpromociones1.jpg" class="img-fluid " alt="">
                            </div>
                            <div class="card-footer-comercio text-muted text-center" >
                                <!-- Boton modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lugares-modal">
                                    Novedades
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