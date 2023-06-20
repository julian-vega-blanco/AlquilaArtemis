<?php

$conexion= new mysqli("localhost","root","","alquilartemis");


?>



    <div class="container-fluid text-center justify-content-center row">
        <form class="text-center col-6" action="" method="POST">
            <h3>Registro de Obra</h3>
            
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Nombre de la obra</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Direccion de la obra</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Estado de la obra</label>
                <input type="text" class="form-control" name="estado">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Fecha de inicio</label>
                <input type="date" class="form-control" name="fecha_inicio">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Fecha final</label>
                <input type="date" class="form-control" name="fecha_fin">
            </div>
            <input type="submit" value="Registro" class="btn btn-primary" name="btnregistrar">
        </form>

        <?php
            if (!empty($_POST["btnregistrar"])){
              if (!empty($_POST["nombre"]) and !empty($_POST["direccion"]) and !empty($_POST["ciudad"]) and !empty($_POST["estado"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_fin"])){
                $nombre=$_POST["nombre"];
                $direccion=$_POST["direccion"];
                $ciudad=$_POST["ciudad"];
                $estado=$_POST["estado"];
                $fecha_inicio=$_POST["fecha_inicio"];
                $fecha_fin=$_POST["fecha_fin"];
            
                $sql=$conexion->query(" insert into obra(nombre, direccion, ciudad, estado, fecha_inicio, fecha_fin)values('$nombre','$direccion','$ciudad','$estado','$fecha_inicio','$fecha_fin')");
            
                if($sql==1){
                    echo '<div class="alert alert-success p-2 m-2 col-6"><div class="alert alert-success p-2 m-2">Obra registrada correctamente</div></div>';
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
 
    $sql=$conexion->query(" select * from obra");
    while($datos = $sql->fetch_object()) { ?>
    <?php }?>
    
   
                </tbody>
            </table>
        </div>
    </div>

<!-- Main content -->
  



    
    <!-- /.content -->