<?php
    include ("nav.php");
  ?>
		<!-- REQUISITOS  -->
        <!-- asi no ¡¡¡ 
            <div class="container m-superior alto m-0 p-0 ">	
            <div class="row d-flex  justify-content-center ">
                <div class="col-12 align-self-center"> -->
		<div id="requisitos_credito" class="container-fluid p-0 m-0 alto-consumo d-flex">	
			<div class="row m-0 p-0 align-content-center justify-content-center">
				<div class="col-md-12">
					<div class="" >
						<h5 class="text-center" style="font-size: 2rem;">Requisitos Crédito de Consumo</h5>
					</div>        
					<div class="contenedor-imagen col-12 img-fluid">
						<a class="img-fluid" href="#" data-toggle="modal" data-target="#modal">
							<img src="../img/requisitos_credito_consumo.jpg" class="img-fluid imagen d-none d-md-block" alt="">
							<img src="../img/requisitos_credito_consumo-celu.jpg" class="img-fluid imagen d-md-none" alt="">
						</a>
					</div> 
				</div>
			</div>
		</div>
    
		<!-- COMEDRCIOS ADHERIDOS -->
        <div id="comercios_credito" class="container-fluid  p-0 m-0 alto d-flex" id="resumen">	
			<div class="row m-0 p-0 fondo-imagen-s  align-content-center justify-content-center">
				<div class="col-md-6">
                    <div class="col-12 text-center">
                        <h3 class="text">Comercios Adheridos</h3>
                    </div>
					<div class="jumbotron bg-transparent">                        
                        <form method="post" action="../php/procesarResumen.php">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Rubro</label>
                                    <select class="form-control" name="localidad">
                                    <option value="1">Construccion</option>
                                    <option value="2">Farmacia</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleFormControlSelect1">Localidad</label>
                                    <select class="form-control" name="localidad">
                                    <option value="1">Santa Fe</option>
                                    <option value="2">Esperanza</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 text-center mt-4">
                                    <button class="btn btn-primary btn-primary" name="button" id="button">Buscar</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>

		<!-- LUGARES DE PAGO -->
		<div id="lugares_pago_credito" class="container-fluid  p-0 m-0 alto d-flex">	
			<div class="row m-0 p-0 fondo-ventajas  align-content-center justify-content-center">
				<div class="col-md-6">
					<div class="jumbotron bg-transparente">
						<h3 class="tituloVentajas">Conocé nuestros puntos de pago</h3>
						<hr class="my-2">
						<p class="lead">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lugares-modal">Ver Lugares</button>
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
												<div><a class="font-weight-bold" style = "font-size: 18px;">Casa Central Credifiar:</a> 1ra Junta 2675 - Santa Fe</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Sucursal Santa Fe:</a> Av. Aristobulo del Valle 6857 - Santa Fe</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Sucursal Ceres:</a> Av Mayo 286 - Ceres</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Sucursal Esperanza:</a> 25 de Mayo 286 - Esperanza</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Sucursal Parana:</a> Urquiza 1087 - Parana</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Centro de Cobros Bodrone BP:</a> Av. Blas Parera 7888 - Santa Fe</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Centro de Cobros Bodrone FZ:</a> Av. Facundo Zuviria 5570 - Santa Fe</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Centro de Cobros Bodrone Recreo:</a> Ignacio Crespo 931 - Santa Fe</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Centro de Cobros Bodrone Helvecia:</a> Dr. Roman 840 - Santa Fe</div>
												<div><a class="font-weight-bold" style = "font-size: 18px;">Centro de Cobros Bodrone San Javier:</a> Independencia 1871 - Santa Fe</div>
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
    
	<?php
    	include ("footer.php");
  	?>