<?php
/* cvariables para la conexion de php */
$servername = "  ";
$database = " ";
$username = " ";
$password = "";

/* realizar conexion */
$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("error al conectarme: " . mysqli_connect_error());
}
/* cerrar la conexion */
/* mysqli_close($con); */
?>
