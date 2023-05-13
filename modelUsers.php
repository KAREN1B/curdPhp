<?php
require("conexion.php");

class Users {
    public static function insert ($nameU, $lastName, $age, $fileU, $typeDocument, $document, $idRol) {
        $db = new conexion();
        $query = "INSERT INTO users(nameU, lastName, age, fileU, typeDocument, document, idRol) 
        VALUES ('".$nameU."','".$lastName."','".$age."','".$fileU."','".$typeDocument."','".$document."','".$idRol."' )";
        $db->query($query);
        /* validar si se agrego  */
        if($db->affected_rows){
            return TRUE;
        }
        return FALSE;
    }

    public static function update ($nameU, $lastName, $age, $fileU, $typeDocument, $document, $idRol) {
        $db = new conexion();
             /* sql con condicional para el dato de editar  */
        $query = "UPDATE users SET nameU='".$nameU."', lastName='".$lastName."', age='".$age."', fileU='".$fileU."', typeDocument='".$typeDocument."', idRol='".$idRol."' 
        WHERE document=$document ";
             /* validar si se agrego  */
        $db->query($query);
        if($db->affected_rows){
            return TRUE;
        }
        return FALSE;
    }

}

?>