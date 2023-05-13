<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept*');

/* llamo la conexion */
require("conexion.php");

/* sql para obtener todos los usuarios y sus respectivos roles */
$select = "SELECT * FROM users u JOIN usersrole uR ON u.idRol = ur.idRol;";
$res=mysqli_query($conexion,$select) or die('error al consultar');

$dataUsers=[];
while ($row=mysqli_fetch_array($res)) {
    $dataUsers[]=$row;
}
$cad=json_encode($dataUsers);
echo $cad;
/* tipo de recurso para codificacion y leer json */
header('Content-Type: application/json');
?>
