
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CREDIFIAR S.A.</title>
		<!-- LINK DE CSS !-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- LINK DE ESTILO DE GOOGLE FONT -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../css/fontello.css">
		<link rel="stylesheet" href="../css/estilos.css">
        
	</head>

	<body>
		<header>
			<!-- barra principal   -->
			<nav class="navbar navbar-expand-lg  navbar-light  fixed-top navbarSup py-3 px-1">
				<a class="navbar-brand" href="index.php">
					<img src="../img/index/credifiar-logo.png" class="img-fluid" alt="credifiar-logo">
				</a>
				<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>	  
                <div class="collapse navbar-collapse  " id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto  w-100 justify-content-between">

						<!-- <li class="nav-item nav-text">
							<a class="nav-link" id="desplegable" href="index.php">Inicio <span class="sr-only">(current)</span></a>
						</li> -->

						<!-- nosotros -->
						<li class="nav-item dropdown open bg-transparent">
						<button class="btn bg-transparent px-0" type="button" id="desplegable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</button>

							<div class="dropdown-menu bg-desplegable">
								<a class="dropdown-item" href="empresa.php">La Empresa</a>
								<a class="dropdown-item" href="sucursal.php">Sucursales</a>
                                <a class="dropdown-item" href="index.php#lugaresPago">Centros de Cobro</a>
                                <a class="dropdown-item" href="enviar_cv.php">Trabaja con nosotros</a>
							</div>
						</li>
						
						<!-- cliente -->
                        <li class="nav-item dropdown open bg-transparent">
                            <button class="btn bg-transparent px-0" type="button" id="desplegable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cliente</button>
                                                       
                            <ul class="dropdown-menu bg-desplegable" role="menu" aria-labelledby="desplegable">
								<div class="col-md-12 d-md-flex flex-row">
									<div class="col-md-6">
										<li role="presentation" class="dropdown-header">Turnos</li>
										<li><a class="dropdown-item" tabindex="-1" href="turnos.php">Solicita un turno</a></li>
										<li role="presentation" class="dropdown-header">Tarjeta</li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php" >Tarjeta de Crédito</a></li>

										<li><a class="dropdown-item" tabindex="-1" href="https://www.infotarjetas.com.ar/login.aspx?tid=28" >Ingresa a tu Cuenta</a></li>
										
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#requisitos_tarjeta" >Requisitos</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#solicita_tarjeta" >Pedi la Tuya</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#inicio_sesion_tarjeta" >Seguimiento de Cuenta</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#resumen_tarjeta" >Resumen de Tarjeta</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="tarjeta.php#comercios_tarjeta" >Comercios Adheridos</a></li>
										<li role="presentation" class="divider"></li>
									</div> 

									<div class="col-md-6">
										<li role="presentation" class="dropdown-header">Préstamos Personales</li>
										<li><a class="dropdown-item" tabindex="-1" href="prestamos_personales.php">Préstamos</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="prestamos_form.php">Pedí tu Péstamo</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="prestamos_personales.php#requisitos_prestamo">Requisitos</a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation" class="dropdown-header">Créditos de Consumo</li>
										<li><a class="dropdown-item"tabindex="-1"  href="credito_consumo.php">Créditos</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="credito_consumo.php#requisitos_credito">Requisitos</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="credito_consumo.php#comercios_credito">Pedí tu Péstamo</a></li>
										<li><a class="dropdown-item" tabindex="-1" href="credito_consumo.php#lugares_pago_credito">Requisitos</a></li>
									</div>
								</div>
                            </ul>

                        </li>                     
						
						<!-- comercio -->
						<li class="nav-item dropdown open bg-transparent">
							<button class="btn bg-transparent px-0" type="button" id="desplegable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comercio</button>

							<div class="dropdown-menu bg-desplegable">
								<a class="dropdown-item" href="comercio.php">Comercio</a>
								<a class="dropdown-item" href="comercio.php#sesion_liquidaciones">Liquidaciones</a>
                                <a class="dropdown-item" href="comercio.php#novedades_comerciales">Novedades</a>
                                <a class="dropdown-item" href="comercio.php#comercio_promociones">Sumate</a>
								<!-- <a class="dropdown-item" href="comercio_form.php">Sumate</a> -->
                                <a class="dropdown-item" href="comercio.php#comercio_promociones">Promociones</a>
							</div>
						</li>

                        <!-- centro de ayuda -->
						<li class="nav-item">
							<a class="nav-link" id="desplegable" href="centro_ayuda.php">Centro de Ayuda</a>
						</li>

						<!-- inicio de sesio
						<li class="nav-item">
							<a type="button" class="btn btn-outline-light btn-outline-light-top border border-white font-weight-bold" id="btn-ingreso"
								 href="https://www.infotarjetas.com.ar/login.aspx?tid=28">
								 Iniciar Sesión
							</a>
						</li> -->
					</ul>


        		</div>

			</nav>	  
        </header>