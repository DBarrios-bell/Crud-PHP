<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["clave"]) ||
	!isset($_POST["nombre"]) ||
	!isset($_POST["categoria"]) ||
	!isset($_POST["web"]) ||
	!isset($_POST["rector"]) ||
	!isset($_POST["email"]) ||
	!isset($_POST["acceso"]) ||
	!isset($_POST["telefono"]) ||
	!isset($_POST["ciudad"]) ||
	!isset($_POST["numerocarrera"]) ||
	!isset($_POST["numsedes"]) ||
	!isset($_POST["id"])
) exit();


include_once "../db/base_de_datos.php";
$id = $_POST["id"];
$clave = $_POST["clave"];
$nombre = $_POST["nombre"];
$categoria = $_POST["categoria"];
$web = $_POST["web"];
$rector = $_POST["rector"];
$email = $_POST["email"];
$acceso = $_POST["acceso"];
$telefono = $_POST["telefono"];
$ciudad = $_POST["ciudad"];
$numerocarrera = $_POST["numerocarrera"];
$numsedes = $_POST["numsedes"];

$sentencia = $base_de_datos->prepare("UPDATE universidades SET clave = ?, nombre = ?, categoria = ?, web = ?, rector
= ?, email = ?, acceso = ?, telefono = ?, ciudad = ?, numerocarrera = ?, numsedes = ? WHERE id = ?;");
$resultado = $sentencia->execute([$clave, $nombre, $categoria, $web, $rector, $email, $acceso, $telefono, $ciudad,
$numerocarrera, $numsedes, $id]);
if($resultado === TRUE){
echo'<script type="text/javascript">
	alert("Universidad Actualizada");
	window.location.href = "../crud/listarUniversidad.php";
</script>';
}
else{
echo'<script type="text/javascript">
	alert("Su Universidad no se almaceno");
	window.location.href = "../crud/listaUniversidad.php";
</script>';
}