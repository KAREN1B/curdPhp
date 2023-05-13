<?php
require "modelUsers.php";

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $datos = json_decode(file_get_contents('php://input'));
        /* condicion para verificar si llegan los datos */
        if($datos != NULL) {
            if(Users::insert($datos->nameU, $datos->lastName, $datos->age, $datos->fileU, $datos->typeDocument, $datos->document, $datos->idRol)){
                /* saldra si fue exictosa la inserccion */
                http_response_code(200);
            }else {
                /* saldra si la inserccion fue denegada */
                http_response_code(400);
            }
        }
        else{
            /* error si no encuentra ningin dato */
            http_response_code(405);
        }
        case 'PUT':
            $datos = json_decode(file_get_contents('php://input'));
            /* condicion para verificar si llegan los datos */
            if($datos != NULL) {
                if(Users::update($datos->document,$datos->nameU, $datos->lastName, $datos->age, $datos->fileU, $datos->typeDocument, $datos->idRol)){
                    /* saldra si fue exictosa la inserccion */
                    http_response_code(200);
                }else {
                    /* saldra si la inserccion fue denegada */
                    http_response_code(400);
                }
            }
            else{
                /* error si no encuentra ningin dato */
                http_response_code(405);
            }
        break;
        default:
        break;
    }
?>



