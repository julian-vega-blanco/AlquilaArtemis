
<?php



ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);


require_once ("../config/Conectar.php");
require_once ("../models/Alquilartemis.php");

//////////////////////////////*Seccion Empleado*///////////////////////////////

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

    //////////////////////////////*Seccion Producto*///////////////////////////////

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

    //////////////////////////////*Seccion Cliente*///////////////////////////////

    $cliente = new Cliente();
    $body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetCliente':
            $datos = $cliente -> get_cliente();
            echo json_encode($datos);
        break;

        case "GetId";

        $datos = $cliente->get_id($body["cliente_id"]);
        echo json_encode($datos);
         
        break;

        case "insert":

            $datos=$cliente->dba_insert($body["cliente_id"],$body["nombre"],$body["apellido"],$body["direccion"],$body["telefono"]);
            echo json_encode("insertado correctamente");
    
            break;
        
    }

     //////////////////////////////*Seccion Obra*///////////////////////////////

     $obra = new Obra();
     $body = json_decode(file_get_contents("php://input"), true);
 
     switch ($_GET["op"]) {
         case 'GetObra':
             $datos = $obra -> get_obra();
             echo json_encode($datos);
         break;
 
         case "GetId";
 
         $datos = $obra->get_id($body["obra_id"]);
         echo json_encode($datos);
          
         break;
 
         case "insert":
 
             $datos=$obra->dba_insert($body["obra_id"],$body["nombre"],$body["direccion"],$body["ciudad"],$body["estado"],$body["fecha_inicio"],$body["fecha_fin"]);
             echo json_encode("insertado correctamente");
     
             break;
         
     }

     //////////////////////////////*Seccion Salida*///////////////////////////////


     $salida = new Salida();
     $body = json_decode(file_get_contents("php://input"), true);
 
     switch ($_GET["op"]) {
         case 'GetSalida':
             $datos = $salida -> get_salida();
             echo json_encode($datos);
         break;
 
         case "GetId";
 
         $datos = $salida->get_id($body["salida_id"]);
         echo json_encode($datos);
          
         break;
 
         case "insert":
 
             $datos=$salida->dba_insert($body["salida_id"],$body["cliente_id"],$body["fecha_salida"],$body["hora_salida"],$body["subtotalPeso"],$body["placatransporte"],$body["observaciones"]);
             echo json_encode("insertado correctamente");
     
             break;
         
     }


     
    //////////////////////////////*Seccion Salida detalle*///////////////////////////////
    
    $salida_detalle = new Salida_detalle();
    $body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetSalidaDetalle':
            $datos = $salida_detalle -> get_salida_detalle();
            echo json_encode($datos);
        break;

        case "GetId";

        $datos = $salida_detalle->get_id($body["salida_detalle_id"]);
        echo json_encode($datos);
         
        break;

        case "insert":

            $datos=$salida_detalle->dba_insert($body["salida_detalle_id"],$body["salida_id"],$body["producto_id"],$body["empleado_id"],$body["cantidad_salida"],$body["cantidad_propia"],$body["cantidad_subalquilada"],$body["valorUnidad"],$body["fecha_standBy"],$body["estado"],$body["valorTotal"]);
            echo json_encode("insertado correctamente");
    
            break;
        
    }

?>