<?php
    include ("nav.php");
  ?>
		<!-- REQUISITOS  -->
        <!-- asi no ¡¡¡ 
            <div class="container m-superior alto m-0 p-0 ">	
            <div class="row d-flex  justify-content-center ">
                <div class="col-12 align-self-center"> -->
		<div id="requisitos_credito" class="container-fluid p-0 m-0 alto d-flex  mt-5 " >
			<div class="row m-0 p-0 fondo-requisito align-content-start justify-content-center">
				<div class="col-12 mt-md-5">
					<h2 class="text-center">Requisitos Créditos de Consumo</h2>
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
    
		<!-- COMEDRCIOS ADHERIDOS -->
        <div id="comercios_credito" class="container-fluid  p-0 m-0 alto d-flex" >	
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
     <!-- LUGARES DE PAGO -->
	 <div class="container-fluid  p-0 m-0 alto d-flex ">
    	<!-- quitar w-100 y color el fondo-ventajas -->
        <div  id="lugaresPago" class="row m-0 p-0 w-100 align-content-center justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron bg-transparente text-center">
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
	
	<!-- beneficios 
		HACEMOS UN MODAL??????
	-->
	<div  class="container-fluid p-0 m-0 alto d-flex">
        <div id="beneficios_consumo" class="row m-0 p-0 fondo-imagen-beneficios  align-content-center justify-content-start">
            <div class="carousel-caption-tarjeta col-md-6">
				<h2 class="font-weight-bold titulo-slider">Conocé los beneficios de Credifiar</h2>
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
	
	<?php
    	include ("footer.php");
  	?>