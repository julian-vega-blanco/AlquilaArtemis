
<?php


ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);


require_once ("../config/Conectar.php");
require_once ("../models/Alquilartemis.php");


    $empleado = new Empleado();
    $body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetEmpleado':
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

    $producto = new Producto();
    $body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetProducto':
            $datos = $producto -> get_producto();
            echo json_encode($datos);
        break;

        case "GetId";

        $datos = $producto->get_id($body["id"]);
        echo json_encode($datos);
         
        break;

        case "insert":

            $datos=$producto->dba_insert($body["id"],$body["Nombre"],$body["Descripcion"],$body["Precio"],$body["Cantidad"]);
            echo json_encode("insertado correctamente");
    
            break;
        
    }

    


?>