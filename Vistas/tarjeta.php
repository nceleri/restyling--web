<?php
    include ("nav.php");
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
                        <a class="btn btn-primary btn-lg" href="tarjeta_form.php" role="button">Solicitá tu Tarjeta</a>
                        </p>
                </div>
            </div>
        </div>
    </div>
    <!-- REQUISITOS TARJETA -->	
    <div id="requisitos_tarjeta" class="container m-superior alto mb-5  d-flex">
    <div class="row m-0 p-0 align-content-center justify-content-center">	
        <h5 class="text-center my-4 mx-4" >Requisitos Tarjeta de Crédito</h5>
        <div class="contenedor-imagen col-md-12 img-fluid">
            <a class="img-fluid" href="#" data-toggle="modal" data-target="#modal">
            <!-- <img src="../img/requisitos_tarjeta.jpg" class="img-fluid imagen" alt=""> -->
            <img src="../img/requisitos_tarjeta.jpg" class="img-fluid d-none d-md-block" alt="...">
            <img src="../img/requisitos_tarjeta-celu.jpg" class="img-fluid d-md-none" alt="...">
            </a>
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
                        <a class="btn btn-primary btn-lg" href="https://www.infotarjetas.com.ar/login.aspx?tid=28" role="button">Iniciar Sesión</a>
                        </p>
                </div>
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
                                    <button class="btn btn-primary btn-primary" name="button" id="button">Mostrar Resumen</button>
                                </div>
                            </div>
                        </form>
                        <div class="card col-12 mt-5">
                            <div class="card-footer-ubicaciones text-muted text-center" >
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

    <!-- FILTRO COMERCIOS -->	
        <div id="comercios_tarjeta" class="container-fluid  p-0 m-0 alto d-flex" id="comercios">	
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
                                    <a class="btn btn-primary btn-lg" href="#" role="button">Buscar</a>
                                </p>
                        </div>
                </div>
            </div>
        </div>

	<?php
    	include ("footer.php");
  	?>