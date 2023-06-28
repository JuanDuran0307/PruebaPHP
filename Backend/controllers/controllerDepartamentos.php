<?php
    header('content-Type:application/json');

    require_once ("../conectar.php");
    require_once ("../models.php");

    $departamentoss = new Departamento();
    $body= json_decode(file_get_contents("php://input"),true);
    
    switch($_GET["op"]){

        case "GetAll":
            $datos=$departamentoss->get_departamentos();
            echo json_encode($datos);
        break;
        
        case "insert":
            $data = $departamentoss->insert_departamentos($body['id'],$body['nombreDepartamento'],$body['idPais']);
            echo json_encode("los datos fueron guardados correctamente");
        break;
    }
?>
