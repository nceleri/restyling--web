<?php
include("nav.php");
?>

    <!-- SOLICITAR TARJETA -->
    <div id="solicita_tarjeta" class="container-fluid  p-0 m-0 alto d-flex mb-5">
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
    <!-- <div   class="container-fluid p-0 m-0 fondo-tarjeta-requisito"> <h2 class="">Requisitos Tarjeta de Crédito</h2>  </div> -->

    <div id="requisitos_tarjeta" class="container-fluid d-flex " name="">	

		<div class="row align-content-center justify-content-center">
            <div class="col-12 text-center">
				<h2 class="">Requisitos Tarjeta de Crédito</h2>
            </div>
            <div class="col-12 p-0">
                
                <img class=" img-fluid d-none d-md-block img-completa" src="../img/1x/RequisitosTarjeta.jpg" alt="">
                <img class=" img-fluid d-block d-md-none" src="../img/1x/RequisitosTarjetaMobile.jpg" alt="">					
            </div>
        </div>
    </div>

    <!--<div id="requisitos_tarjeta"  class="container-fluid d-flex align-items-center justify-content-center p-0 m-0  fondo-tarjeta-requisito">
    <div class="row d-flex align-items-center text-center">
            <div class="">
                <div class="jumbotron bg-transparente ">
                    <h2 class="">Requisitos Tarjeta de Crédito</h2>
                </div>
            </div>
        </div> 
    </div>-->
    
    <!-- FILTRO COMERCIOS -->
    <div id="comercios_tarjeta" class="container-fluid p-0 m-0 alto d-flex" id="comercios">
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

      <!-- INICIAR SESION -->
    <div id="inicio_sesion_tarjeta" class="container-fluid p-0 m-0 alto d-flex mb-5">
        <div class="row m-0 p-0 fondo-imagen-tarjeta-ingreso  align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron bg-transparente-tarjeta">
                    <!-- <h1 class="display-1"></h1> -->
                    <p class="lead">¿Querés realizar el seguimiento de tu cuenta?</p>
                    <hr class="my-2">
                    <p class="lead">
                        <a class="btn pildora-amarilla" href="https://www.infotarjetas.com.ar/login.aspx?tid=28" role="button">Iniciar Sesión</a>
                    </p>
                </div>
            </div>
        </div>
    </div>



<!-- </div> -->

<?php
include("footer.php");
?>