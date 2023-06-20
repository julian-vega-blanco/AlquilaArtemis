<?php

$conexion= new mysqli("localhost","root","","alquilartemis");


?>



    <div class="container-fluid text-center justify-content-center row">
        <form class="text-center col-6" action="" method="POST">
            <h3>Registro de Salida</h3>

            <div class="mt-5">
            <label for="exampleInputEmail" class="form-label col-6">Seleccione el cliente</label>
            <?php
            if (!$conexion) {
                die('Error de conexión: ' . mysqli_connect_error());
            }
            $consulta = "SELECT cliente_id FROM cliente";
            $resultados = mysqli_query($conexion, $consulta);
            ?>
            <select class="form-select col-6" aria-label="Default select example"  name="cliente_id">
                <?php
                while ($fila = mysqli_fetch_assoc($resultados)) {
                    echo '<option value="' . $fila['cliente_id'] . '">' . $fila['cliente_id'] . '</option>';
                }
                ?>
            </select>
   
            </div>

            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Fecha de salida</label>
                <input type="date" class="form-control" name="fecha_salida">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Hora de salida</label>
                <input type="time" class="form-control" name="hora_salida">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Peso</label>
                <input type="number" class="form-control" name="subtotalPeso">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Placa del vehiculo</label>
                <input type="text" class="form-control" name="placatransporte">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Observaciones</label>
                <input type="text" class="form-control" name="observaciones">
            </div>
            <input type="submit" value="Registro" class="btn btn-primary" name="btnregistrar">
        </form>

        <?php
            if (!empty($_POST["btnregistrar"])){
              if (!empty($_POST["cliente_id"]) and !empty($_POST["fecha_salida"]) and !empty($_POST["hora_salida"]) and !empty($_POST["subtotalPeso"]) and !empty($_POST["placatransporte"]) and !empty($_POST["observaciones"])){
                $cliente_id=$_POST["cliente_id"];
                $fecha_salida=$_POST["fecha_salida"];
                $hora_salida=$_POST["hora_salida"];
                $subtotalPeso=$_POST["subtotalPeso"];
                $placatransporte=$_POST["placatransporte"];
                $observaciones=$_POST["observaciones"];
            
                $sql=$conexion->query(" insert into salida(cliente_id, fecha_salida, hora_salida, subtotalPeso, placatransporte, observaciones)values('$cliente_id','$fecha_salida','$hora_salida','$subtotalPeso','$placatransporte','$observaciones')");
            
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
 
    $sql=$conexion->query(" select * from salida");
    while($datos = $sql->fetch_object()) { ?>
    <?php }?>
    
   
                </tbody>
            </table>
        </div>
    </div>

<!-- Main content -->
  



    
    <!-- /.content -->