<?php

if(!isset($_GET["id"])) exit();
$id = $_GET["id"];

include_once "../db/base_de_datos.php";

$sentencia = $base_de_datos->prepare("DELETE FROM universidades WHERE id = ?;");

$resultado = $sentencia->execute([$id]);

if($resultado === TRUE){

    echo'<script type="text/javascript">
        alert("Se ha eliminado su tarea");
        window.location.href = "../crud/listarUniversidad.php";
    </script>';
}
else{

    echo'<script type="text/javascript">
        alert("Error al Eliminar la Tarea");
        window.location.href = "../crud/listarUninversidad.php";
    </script>';
}
?>