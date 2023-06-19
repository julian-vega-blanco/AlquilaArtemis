<?php

$conexion= new mysqli("localhost","root","","alquilartemis");


?>



    <div class="container-fluid text-center justify-content-center row">
        <form class="text-center col-12" action="" method="POST">
            <h3>Registro de empleado</h3>
            
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Puesto</label>
                <input type="text" class="form-control" name="puesto">
            </div>
            <input type="submit" value="Registro" class="btn btn-primary" name="btnregistrar">
        </form>

        <?php
            if (!empty($_POST["btnregistrar"])){
              if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["puesto"])){
                $nombre=$_POST["nombre"];
                $apellido=$_POST["apellido"];
                $fecha_nacimiento=$_POST["fecha_nacimiento"];
                $puesto=$_POST["puesto"];
            
                $sql=$conexion->query(" insert into empleados(nombre, apellido, fecha_nacimiento, puesto)values('$nombre','$apellido','$fecha_nacimiento','$puesto')");
            
                if($sql==1){
                    echo '<div class="alert alert-success p-2 m-2">Persona registrada correctamente</div>';
                }
                else{
                    echo '<div class="alert alet-danger">Alguno de los datos esta incorrecto</div>';
                }
              }
              else{
                echo "Los campos aun no se han llenado correctamente";
              }
               
            }           
            ?>

  <?php

 /*  los datos se se muestran en la tabla son datos que han sido ingresados en la base de datos aun no he echo el ingreso de datos con el from pero se cargan los datos que meti al phpmyadmin */
 
    $sql=$conexion->query(" select * from empleados");
    while($datos = $sql->fetch_object()) { ?>
    <?php }?>
    
   
                </tbody>
            </table>
        </div>
    </div>

<!-- Main content -->
  



    
    <!-- /.content -->