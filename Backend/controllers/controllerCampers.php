<?php
    header('content-Type:application/json');

    require_once ("../conectar.php");
    require_once ("../models.php");

    $camperss = new Camper();
    $body= json_decode(file_get_contents("php://input"),true);
    
    switch($_GET["op"]){

        case "GetAll":
            $datos=$camperss->get_campers();
            echo json_encode($datos);
        break;
        
        case "insert":
            $data = $camperss->insert_campers($body['id'],$body['nombreCamper'],$body['apellidoCamper'],$body['fechaNacimiento'],$body['idRegion']);
            echo json_encode("los datos fueron guardados correctamente");
        break;
    }
?>

