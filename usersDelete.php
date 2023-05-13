<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept*');


require("conexion.php");

/* script consulta */
$deleteU = "DELETE FROM users WHERE document=".$_GET['document'];
/* pasa sql y conexion con condicional por si alguen error */
mysqli_query($conexion, $deleteU) or die('El docuemnto no coincide') ;

/* mensaje en formato json */
/*  class Result {}

$response = new Result();
$response->resultado = 'ok';
response->mensaje = 'datos ok' */

header('Content-Type: application/json'); 
echo json_encode($response)  
?>