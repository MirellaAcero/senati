<?php

/**
 * @author Kat
 * @copyright 20116
 */

$nombre3 = $_POST["nombre3"];
$apellido3 = $_POST["apellido3"];
$ciudad3 = $_POST["ciudad3"];
$telefono3 = $_POST["telefono3"];
$email3 = $_POST["email3"];
$status3 = $_POST["status3"];
$administracion3 = $_POST["administracion3"];
$agroindustria3 = $_POST["agroindustria3"];
$artesgraficas3 = $_POST["artesgraficas3"];
$confecciones3 = $_POST["confecciones3"];
$electrotecnia3 = $_POST["electrotecnia3"];
$hoteleria3 = $_POST["hoteleria3"];
$alimentaria3 = $_POST["alimentaria3"];
$informatica3 = $_POST["informatica3"];
$joyeria3 = $_POST["joyeria3"];
$mecanica3 = $_POST["mecanica3"];
$metalmecanica3 = $_POST["metalmecanica3"];
$ambiental3 = $_POST["ambiental3"];
$textil3 = $_POST["textil3"];
$mensaje3 = $_POST["mensaje3"];
$acepto3 = $_POST["acepto3"];

$cuerpo = '

Información del solicitante:<br><br>
<B>NOMBRES: </B> = '. $nombre3 .' <br>
<B>APELLIDOS:</B> = '.$apellido3.' <br>
<B>DEPARTAMENTO:</B> = '.$ciudad3.' <br>
<B>CELULAR/FIJO:</B> = '.$telefono3.' <br>
<B>EMAIL:</B> = '.$email3.' <br>
<B>ESPECIALIDAD:</B> = '.$status3.' <br>
<B>CARRERA:</B> = '.$administracion3.' '.$agroindustria3.' '.$artesgraficas3.' '.$confecciones3.' '.$confecciones3.' '.$electrotecnia3.' '.$hoteleria3.' '.$alimentaria3.' '.$informatica3.' '.$joyeria3.' '.$mecanica3.' '.$metalmecanica3.' '.$ambiental3.' '.$textil3.' <br>
<B>MENSAJE:</B> = '.$mensaje.' <br>
<B>ACEPTA LOS TERMINOS Y CONDICIONES:</B> = '.$acepto3.' <br>';

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\n"; 
$headers .= "Content-type: text/html; charset=utf-8\n"; 
$headers .= "From: <$email>"; 
//dirección del remitente 
//$headers .= "From: <$mail>"; 

$destinatario = "katty.lizarbe@somark.pe";

mail($destinatario, "FORMULARIO DEL LANDING SENATI - ESPECIALIDADES", $cuerpo, $headers);
?>

<html>
<script language="javascript">
document.location.href="respuesta.html#especialidades";
</script>
<body>
</body>
</html>