<?php
    include ("nav.php");
  ?>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
      $(document).on('ready',function(){
    $('#botonContacto').click(function(){
        if ($('#dniContacto').val() == ""){ 
		    alert('El campo de DNI esta vacío.');  
		    $('#dniContacto').focus(); 
            return false;
        }else if ($('#nombreContacto').val() == ""){ 
            alert ('El campo Nombre esta vacío');  
            $('#nombreContacto').focus(); 
            return false; 
        }else if ($('#apellidoContacto').val() == ""){
            alert ('El campo Apellido esta vacío');
            $('#apellidoContacto').focus();  
            return false;
        }else if ($('#correo1Contacto').val() == ""){
            alert ('El campo Correo esta vacío');
            $('#correo1Contacto').focus();  
            return false;
        }else if ($('#correo2Contacto').val() == ""){
            alert ('El campo Confirmación Correo esta vacío');
            $('#correo2Contacto').focus();  
            return false;
        }else if ($('#sexoContacto').val() == ""){
            alert ('El campo Sexo esta vacío');
            $('#sexoContacto').focus();  
            return false;
        }else if ($('#telefonoContacto').val() == ""){
            alert ('El campo Telefono esta vacío');
            $('#telefonoContacto').focus();  
            return false;
        }else if ($('#provinciaContacto').val() == ""){
            alert ('El campo Provincia esta vacío');
            $('#provinciaContacto').focus();  
            return false;
        }else if ($('#ciudadContacto').val() == ""){
            alert ('El campo Ciudad esta vacío');
            $('#ciudadContacto').focus();  
            return false;
        }else if ($('#comentarioContacto').val() == ""){
            alert ('El campo Comentario esta vacío');
            $('#comentarioContacto').focus();  
            return false;
        }else if ($('#email1Alta').val() == $('#email2Alta').val()){
            var $para = "francisco.fanton@credifiar.com.ar";
            var $asunto = "Consulta";
            var $mensaje ="";
            $mensaje = "<b><center>"+"Datos de cliente:"+"</center>"+"<br>"+
            "Nombre: " + $('#nombreContacto').val() +"<br>"+
            "Apellido: " + $('#apellidoContacto').val() +"<br>"+
            "Correo: " + $('#correo1Contacto').val() +"<br>"+
            "Sexo: " + $('#sexoContacto').val() +"<br>"+
            "Telefono: " + $('#telefonoContacto').val() +"<br>"+
            "Provincia: " + $('#provinciaContacto').val() +"<br>"+
            "Ciudad: " + $('#ciudadContacto').val() +"<br>"+
            "Comentario: " + $('#comentarioContacto').val() +"<br>";
            var paqueteDeDatos = new FormData();
            paqueteDeDatos.append('archivos', null);
            paqueteDeDatos.append('para', $para);
            paqueteDeDatos.append('de', $('#correo1Contacto').prop('value'));
            paqueteDeDatos.append('asunto', $asunto);
            paqueteDeDatos.append('mensaje', $mensaje);
            paqueteDeDatos.append('banderaAdjunto', "0");
            // DATOS PARA WEB SERVICES
            paqueteDeDatos.append('nombre', $('#nombreContacto').prop('value'));
            paqueteDeDatos.append('apellido', $('#apellidoContacto').prop('value'));
            paqueteDeDatos.append('telefono', $('#telefonoContacto').prop('value'));
            paqueteDeDatos.append('documento', $('#dniContacto').prop('value'));
            paqueteDeDatos.append('sexo', $('#sexoContacto').prop('value'));
            paqueteDeDatos.append('descripcion', $('#comentarioContacto').prop('value'));
            $.ajax({                        
                url: "../php/procesarBCRA.php",
                type: 'POST', // Siempre que se envíen ficheros, por POST, no por GET.
                contentType: false,
                data: paqueteDeDatos, // Al atributo data se le asigna el objeto FormData.
                processData: false,
                cache: false, 
                success:function(salida){
                if(salida == 1){
                 alert('No se pude enviar el correo.');
                }
                else{
                    alert('Correo Enviado con exito.');
                    window.location.replace('http://www.credifiarsa.com.ar/web/Vistas/index.php');
                }
            }
            });
            return false;
        }else{
            alert('Los correos no coinciden.')
            return false; 
        }                      
  });
  });

  function validarTelefonoContacto(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros");
    $('#telefonoContacto').focus();
    return false;}
  }
  function validarCorreo1Contacto(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido")
        $('#email1Contacto').focus();
        return false;}
  }
  function validarCorreo2Contacto(correo){
    if(correo.indexOf("@") == '-1'){
        alert("Ingrese un correo valido")
        $('#email2Contacto').focus();
        return false;}
  }
  function validarDNIContacto(numero){
    if (!/^([0-9])*$/.test(numero)){
    alert("Ingresar solo numeros");
    $('#dniContacto').focus();
    return false;}
  }
</script>
    <div class="container m-superior-medio">
        
            <div class="container">
                <div class="row mt-3">
                    <div class="col-12 text-center">
                    <h3 class="text" style="font-size: 2rem;">Dejanos tu mensaje y nos comunicaremos con vos a la brevedad, gracias!</h3>
                    </div> 
                    <div class="col-12 col-md-8 offset-md-2 py-5 rounded">
                        <form id="formularioContacto" method="post">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">Primer Nombre</label>
                                    <input type="text" class="form-control shadow-sm" name=nombreContacto id=nombreContacto>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Apellido</label>
                                    <input type="text" class="form-control shadow-sm" name=apellidoContacto id=apellidoContacto>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="">Correo</label>
                                    <input type="text" class="form-control shadow-sm" name=correo1Contacto id=correo1Contacto onChange="validarCorreo1Contacto(this.value)">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Confirmar Correo</label>
                                    <input type="text" class="form-control shadow-sm" name=correo2Contacto id=correo2Contacto onChange="validarCorreo2Contacto(this.value)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">DNI</label>
                                    <input type="text" class="form-control shadow-sm" name=dniContacto id=dniContacto onChange="validarDNIContacto(this.value)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="exampleFormControlSelect1">Sexo</label>
                                    <select class="form-control" name=sexoContacto id=sexoContacto>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="">Telefono</label>
                                    <input type="text" class="form-control shadow-sm" name=telefonoContacto id=telefonoContacto onChange="validarTelefonoContacto(this.value)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="exampleFormControlSelect1">Provincia</label>
                                    <select class="form-control" name=provinciaContacto id=provinciaContacto>
                                        <option>Provincia 1</option>
                                        <option>Provincia 2</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="exampleFormControlSelect1">Ciudad</label>
                                    <select class="form-control" name=ciudadContacto id=ciudadContacto>
                                        <option>Ciudad 1</option>
                                        <option>Ciduad 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">                       
                                <div class="form-group col-12">
                                    <label for="exampleFormControlTextarea1">Consultas/Reclamos:</label>
                                    <textarea class="form-control" name=comentarioContacto id=comentarioContacto rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 text-center mt-3">
                                    <button class="btn btn-primary btn-primary" id="botonContacto" name="botonContacto">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                                
    </div>
    <?php
        include ("footer.php");
    ?>