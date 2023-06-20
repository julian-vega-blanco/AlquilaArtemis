<?php

$conexion= new mysqli("localhost","root","","alquilartemis");


?>



    <div class="container-fluid text-center justify-content-center row">
        <form class="text-center col-6" action="" method="POST">
            <h3>Registro de Salida</h3>

            <div class="mt-5">
            <label for="exampleInputEmail" class="form-label col-6">Seleccione la Salida</label>
            <?php
            if (!$conexion) {
                die('Error de conexión: ' . mysqli_connect_error());
            }
            $consulta = "SELECT salida_id FROM salida";
            $resultados = mysqli_query($conexion, $consulta);
            ?>
            <select class="form-select col-6" aria-label="Default select example"  name="salida_id">
                <?php
                while ($fila = mysqli_fetch_assoc($resultados)) {
                    echo '<option value="' . $fila['salida_id'] . '">' . $fila['salida_id'] . '</option>';
                }
                ?>
            </select>
   
            </div>
            <div class="mt-5">
            <label for="exampleInputEmail" class="form-label col-6">Seleccione el Producto</label>
            <?php
            if (!$conexion) {
                die('Error de conexión: ' . mysqli_connect_error());
            }
            $consulta = "SELECT id FROM producto";
            $resultados = mysqli_query($conexion, $consulta);
            ?>
            <select class="form-select col-6" aria-label="Default select example"  name="producto_id">
                <?php
                while ($fila = mysqli_fetch_assoc($resultados)) {
                    echo '<option value="' . $fila['id'] . '">' . $fila['id'] . '</option>';
                }
                ?>
            </select>
   
            </div>
            <div class="mt-5">
            <label for="exampleInputEmail" class="form-label col-6">Seleccione el Empleado</label>
            <?php
            if (!$conexion) {
                die('Error de conexión: ' . mysqli_connect_error());
            }
            $consulta = "SELECT empleado_id FROM empleados";
            $resultados = mysqli_query($conexion, $consulta);
            ?>
            <select class="form-select col-6" aria-label="Default select example"  name="empleado_id">
                <?php
                while ($fila = mysqli_fetch_assoc($resultados)) {
                    echo '<option value="' . $fila['empleado_id'] . '">' . $fila['empleado_id'] . '</option>';
                }
                ?>
            </select>
   
            </div>

            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Seleccione la cantidad de la  salida</label>
                <input type="number" class="form-control" name="cantidad_salida">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Seleccione su candidad</label>
                <input type="number" class="form-control" name="cantidad_propia">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Seleccione su cantidad sub alquilada</label>
                <input type="number" class="form-control" name="cantidad_subalquilada">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Valor por unidad</label>
                <input type="number" class="form-control" name="valorUnidad">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Fecha de Stand By</label>
                <input type="date" class="form-control" name="fecha_standBy">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Valor de toda la salida</label>
                <input type="number" class="form-control" name="valorTotal">
            </div>
            <input type="submit" value="Registro" class="btn btn-primary" name="btnregistrar">
        </form>

        <?php
            if (!empty($_POST["btnregistrar"])){
              if (!empty($_POST["salida_id"]) and !empty($_POST["producto_id"]) and !empty($_POST["empleado_id"]) and !empty($_POST["cantidad_salida"]) and !empty($_POST["cantidad_propia"]) and !empty($_POST["cantidad_subalquilada"])and !empty($_POST["valorUnidad"])and !empty($_POST["fecha_standBy"])and !empty($_POST["estado"])and !empty($_POST["valorTotal"])){
                $salida_id=$_POST["salida_id"];
                $producto_id=$_POST["producto_id"];
                $empleado_id=$_POST["empleado_id"];
                $cantidad_salida=$_POST["cantidad_salida"];
                $cantidad_propia=$_POST["cantidad_propia"];
                $cantidad_subalquilada=$_POST["cantidad_subalquilada"];
                $valorUnidad=$_POST["valorUnidad"];
                $fecha_standBy=$_POST["fecha_standBy"];
                $estado=$_POST["estado"];
                $valorTotal=$_POST["valorTotal"];
            
                $sql=$conexion->query(" insert into salida_detalle(salida_id, producto_id, empleado_id, cantidad_salida, cantidad_propia, cantidad_subalquilada, valorUnidad, fecha_standBy, estado, valorTotal)values('$salida_id','$producto_id','$empleado_id','$cantidad_salida','$cantidad_propia','$cantidad_subalquilada','$valorUnidad','$fecha_standBy','$estado','$valorTotal')");
            
                if($sql==1){
                    echo '<div class="alert alert-success p-2 m-2 col-6"><div class="alert alert-success p-2 m-2">Salida registrada correctamente</div></div>';
                }
                else{
                    echo '<div class="alert alet-danger p-2 m-2 col-6"><div class="alert alet-danger">Alguno de los datos esta incorrecto</div></div>';
                }
              }
              else{
                echo '<div class="alert alet-danger p-2 m-2 col-6"><div class="alert alert-danger">Ingrese datos en el formulario</div></div>';
              }   
            }        
            ?>

  <?php

 /*  los datos se se muestran en la tabla son datos que han sido ingresados en la base de datos aun no he echo el ingreso de datos con el from pero se cargan los datos que meti al phpmyadmin */
 
    $sql=$conexion->query(" select * from salida_detalle");
    while($datos = $sql->fetch_object()) { ?>
    <?php }?>
    
   
                </tbody>
            </table>
        </div>
    </div>

<!-- Main content -->
  



    
    <!-- /.content -->