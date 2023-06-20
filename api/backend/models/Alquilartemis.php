<?php

////////////////////////////*Seccion para Empleados*////////////////////////////////////

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

////////////////////////////*Seccion para Producto*////////////////////////////////////

class Producto extends Conectar{

    public function get_producto(){
    
    try {
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM producto");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exeption $e) {
        return $e -> getMessage();
    }
    
    }
    
    public function get_producto_id($id){
    try {
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM empleados WHERE id =?");
        $stm -> bindValue(1,$id);
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }  catch (Exeption $e) {
        return $e -> getMessage();
    }
    
    }
    
    
    public function insert_producto($id,$Nombre,$Descripcion,$Precio,$Cantidad){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO producto(id,Nombre,Descripcion,Precio,Cantidad) VALUES(?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id);
        $stm->bindValue(2,$Nombre);
        $stm->bindValue(3,$Descripcion);
        $stm->bindValue(4,$Precio);
        $stm->bindValue(5,$Cantidad);
        
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    
    }
    
    }


    ////////////////////////////*Seccion para Cliente*////////////////////////////////////


    class Cliente extends Conectar{

        public function get_cliente(){
        
        try {
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM cliente");
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exeption $e) {
            return $e -> getMessage();
        }
        
        }
        
        public function get_cliente_id($cliente_id){
        try {
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM cliente WHERE cliente_id =?");
            $stm -> bindValue(1,$cliente_id);
            $stm -> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }  catch (Exeption $e) {
            return $e -> getMessage();
        }
        
        }
        
        
        public function insert_cliente($cliente_id,$nombre,$apellido,$direccion,$telefono){
            $conectar=parent::conexion();
            parent::set_name();
            $stm="INSERT INTO cliente(cliente_id,nombre,apellido,direccion,telefono) VALUES(?,?,?,?,?)";
            $stm=$conectar->prepare($stm);
            $stm->bindValue(1,$cliente_id);
            $stm->bindValue(2,$nombre);
            $stm->bindValue(3,$apellido);
            $stm->bindValue(4,$direccion);
            $stm->bindValue(5,$telefono);
            
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        
        }
        
        }


        ////////////////////////////*Seccion para Obra*////////////////////////////////////
    

        class Obra extends Conectar{

            public function get_obra(){
            
            try {
                $conectar = parent::Conexion();
                parent::set_name();
                $stm = $conectar->prepare("SELECT * FROM obra");
                $stm -> execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exeption $e) {
                return $e -> getMessage();
            }
            
            }
            
            public function get_obra_id($obra_id){
            try {
                $conectar = parent::Conexion();
                parent::set_name();
                $stm = $conectar->prepare("SELECT * FROM obra WHERE obra_id =?");
                $stm -> bindValue(1,$obra_id);
                $stm -> execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            }  catch (Exeption $e) {
                return $e -> getMessage();
            }
            
            }
            
            
            public function insert_obra($obra_id,$nombre,$direccion,$ciudad,$estado,$fecha_inicio,$fecha_fin){
                $conectar=parent::conexion();
                parent::set_name();
                $stm="INSERT INTO obra(obra_id,nombre,direccion,ciudad,estado,fecha_inicio,fecha_fin) VALUES(?,?,?,?,?,?,?)";
                $stm=$conectar->prepare($stm);
                $stm->bindValue(1,$obra_id);
                $stm->bindValue(2,$nombre);
                $stm->bindValue(3,$direccion);
                $stm->bindValue(4,$ciudad);
                $stm->bindValue(5,$estado);
                $stm->bindValue(6,$fecha_inicio);
                $stm->bindValue(7,$fecha_fin);
                
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            
            }
            

        }

////////////////////////////*Seccion para Salida*////////////////////////////////////


class Salida extends Conectar{

    public function get_salida(){
    
    try {
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM salida");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exeption $e) {
        return $e -> getMessage();
    }
    
    }
    
    public function get_salida_id($salida_id){
    try {
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM salida WHERE salida_id =?");
        $stm -> bindValue(1,$salida_id);
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }  catch (Exeption $e) {
        return $e -> getMessage();
    }
    
    }
    
    
    public function insert_salida($salida_id,$cliente_id,$fecha_salida,$hora_salida,$subtotalPeso,$placatransporte,$observaciones){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO salida(salida_id,cliente_id,fecha_salida,hora_salida,subtotalPeso,placatransporte,observaciones) VALUES(?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$salida_id);
        $stm->bindValue(2,$cliente_id);
        $stm->bindValue(3,$fecha_salida);
        $stm->bindValue(4,$hora_salida);
        $stm->bindValue(5,$subtotalPeso);
        $stm->bindValue(6,$placatransporte);
        $stm->bindValue(7,$observaciones);
        
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    
    }
    

}

////////////////////////////*Seccion para Salida detalle*////////////////////////////////////


class Salida_detalle extends Conectar{

    public function get_salida_detalle(){
    
    try {
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM salida_detalle");
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exeption $e) {
        return $e -> getMessage();
    }
    
    }
    
    public function get_salida_detalle_id($salida_detalle_id){
    try {
        $conectar = parent::Conexion();
        parent::set_name();
        $stm = $conectar->prepare("SELECT * FROM salida_detalle WHERE salida_detalle_id =?");
        $stm -> bindValue(1,$salida_detalle_id);
        $stm -> execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }  catch (Exeption $e) {
        return $e -> getMessage();
    }
    
    }
    
    
    public function insert_salida_detalle($salida_detalle_id,$salida_id,$producto_id,$empleado_id,$cantidad_salida,$cantidad_propia,$cantidad_subalquilada,$valorUnidad,$fecha_standBy,$estado,$valorTotal){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO salida_detalle(salida_detalle_id,salida_id,producto_id,empleado_id,subtotalPeso,cantidad_propia,cantidad_subalquilada,valorUnidad,fecha_standBy,estado,valorTotal) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$salida_detalle_id);
        $stm->bindValue(2,$salida_id);
        $stm->bindValue(3,$producto_id);
        $stm->bindValue(4,$empleado_id);
        $stm->bindValue(5,$cantidad_salida);
        $stm->bindValue(6,$cantidad_propia);
        $stm->bindValue(7,$cantidad_subalquilada);
        $stm->bindValue(8,$valorUnidad);
        $stm->bindValue(9,$fecha_standBy);
        $stm->bindValue(10,$estado);
        $stm->bindValue(11,$valorTotal);
        
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    
    }
    

}
?>
