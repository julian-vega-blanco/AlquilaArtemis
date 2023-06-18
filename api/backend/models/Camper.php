<?php

class Empleado extends Conectar{

public function get_empleado(){

try {
    $conectar = parent::Conexion();
    parent::set_name();
    $stm = $conectar->prepare("SELECT * FROM empleados");
    $stm -> execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
} catch (Exeption $e) {
    return $e -> getMessage();
}

}

public function get_empleado_id($empleado_id){
try {
    $conectar = parent::Conexion();
    parent::set_name();
    $stm = $conectar->prepare("SELECT * FROM empleados WHERE empleado_id =?");
    $stm -> bindValue(1,$empleado_id);
    $stm -> execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}  catch (Exeption $e) {
    return $e -> getMessage();
}

}


public function insert_empleado($empleado_id,$nombre,$apellido,$fecha_nacimiento,$puesto){
    $conectar=parent::conexion();
    parent::set_name();
    $stm="INSERT INTO empleados(empleado_id,nombre,apellido,fecha_nacimiento,puesto) VALUES(?,?,?,?,?)";
    $stm=$conectar->prepare($stm);
    $stm->bindValue(1,$empleado_id);
    $stm->bindValue(2,$nombre);
    $stm->bindValue(3,$apellido);
    $stm->bindValue(4,$fecha_nacimiento);
    $stm->bindValue(5,$puesto);
    
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);

}

}

?>