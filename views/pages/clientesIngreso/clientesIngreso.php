<?php

$conexion= new mysqli("localhost","root","","alquilartemis");


?>



    <div class="container-fluid text-center justify-content-center row">
        <form class="text-center col-6" action="" method="POST">
            <h3>Registro de cliente</h3>
            
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Direccion de residencia</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Telefono de la persona</label>
                <input type="number" class="form-control" name="telefono">
            </div>
            <input type="submit" value="Registro" class="btn btn-primary" name="btnregistrar">
        </form>

        <?php
            if (!empty($_POST["btnregistrar"])){
              if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"])){
                $nombre=$_POST["nombre"];
                $apellido=$_POST["apellido"];
                $direccion=$_POST["direccion"];
                $telefono=$_POST["telefono"];
            
                $sql=$conexion->query(" insert into cliente(nombre, apellido, direccion, telefono)values('$nombre','$apellido','$direccion','$telefono')");
            
                if($sql==1){
                    echo '<div class="alert alert-success p-2 m-2 col-6"><div class="alert alert-success p-2 m-2">Cliente registrado correctamente</div></div>';
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
 
    $sql=$conexion->query(" select * from cliente");
    while($datos = $sql->fetch_object()) { ?>
    <?php }?>
    
   
                </tbody>
            </table>
        </div>
    </div>

<!-- Main content -->
  



    
    <!-- /.content -->