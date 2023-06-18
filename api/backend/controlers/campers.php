
<?php


ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);


require_once ("../config/Conectar.php");
require_once ("../models/Camper.php");


    $empleado = new Empleado();
    $body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetAll':
            $datos = $empleado -> get_empleado();
            echo json_encode($datos);
        break;

        case "GetId";

        $datos = $empleado->get_empleado_id($body["empleado_id"]);
        echo json_encode($datos);
         
        break;

        case "insert":

            $datos=$empleado->dba_insert($body["empleado_id"],$body["nombre"],$body["apellido"],$body["fecha_nacimiento"],$body["puesto"]);
            echo json_encode("insertado correctamente");
    
            break;
        
    }

    


?>