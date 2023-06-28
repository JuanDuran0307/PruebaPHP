<?php
    header('content-Type:application/json');

    require_once ("../conectar.php");
    require_once ("../models.php");

    $paisess = new Region();
    $body= json_decode(file_get_contents("php://input"),true);
    
    switch($_GET["op"]){

        case "GetAll":
            $datos=$paisess->get_regiones();
            echo json_encode($datos);
        break;
        
        case "insert":
            $data = $paisess->insert_regiones($body['id'],$body['nombreRegion'],$body['idDepartamento']);
            echo json_encode("los datos fueron guardados correctamente");
        break;
    }
?>
