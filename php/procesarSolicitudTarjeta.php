<?php 
//var_dump($_POST);

// INGRESE EL EMAIL DONDE RECIBIRÁ LOS DATOS DEL FOMULARIO
//$para = 'luciana.heinzen@credifiar.com.ar, info@credifiar.com.ar';
$persona =  $_POST["nombre"]. $_POST["apellido"];
$para = 'francisco.fanton@credifiar.com.ar';
$asunto = "Consulta desde la Web";  
$mailheader = "From: ".$_POST["de"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["de"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY .= "Nombre y Apellido: ".nl2br($persona)."<br>"; 
$MESSAGE_BODY .= "Email: ".nl2br($_POST["de"])."<br>"; 
$MESSAGE_BODY .= "Telefono: ".nl2br($_POST["telefono"])."<br>";  
$MESSAGE_BODY .= "DNI: ".nl2br($_POST["documento"])."<br>"; 
$MESSAGE_BODY .= "Lugar Donde Trabaja: ".nl2br($_POST["dondeTrabajas"])."<br>"; 
$MESSAGE_BODY .= "Texto: ".nl2br($_POST["comentario"])."<br>"; 

if(mail($para, $asunto, $MESSAGE_BODY, $mailheader)){
    echo "2";
}
else{
    echo "1";
}
?>