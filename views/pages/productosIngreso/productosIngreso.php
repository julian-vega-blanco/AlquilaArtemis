<?php

$conexion= new mysqli("localhost","root","","alquilartemis");


?>



    <div class="container-fluid text-center justify-content-center row">
        <form class="text-center col-6" action="" method="POST">
            <h3>Registro de Producto</h3>
            
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Nombre de la Producto</label>
                <input type="text" class="form-control" name="Nombre">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Descripcion del producto</label>
                <input type="text" class="form-control" name="Descripcion">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">Precio del producto</label>
                <input type="number" class="form-control" name="Precio">
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail" class="form-label">cantidad del producto</label>
                <input type="number" class="form-control" name="Cantidad">
            </div>
            <input type="submit" value="Registro" class="btn btn-primary" name="btnregistrar">
        </form>

        <?php
            if (!empty($_POST["btnregistrar"])){
              if (!empty($_POST["Nombre"]) and !empty($_POST["Descripcion"]) and !empty($_POST["Precio"]) and !empty($_POST["Cantidad"])){
                $Nombre=$_POST["Nombre"];
                $Descripcion=$_POST["Descripcion"];
                $Precio=$_POST["Precio"];
                $Cantidad=$_POST["Cantidad"];
            
                $sql=$conexion->query(" insert into producto(Nombre, Descripcion, Precio, Cantidad)values('$Nombre','$Descripcion','$Precio','$Cantidad')");
            
                if($sql==1){
                    echo '<div class="alert alert-success p-2 m-2 col-6"><div class="alert alert-success p-2 m-2">Producto registrado correctamente</div></div>';
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
 
    $sql=$conexion->query(" select * from producto");
    while($datos = $sql->fetch_object()) { ?>
    <?php }?>
    
   
                </tbody>
            </table>
        </div>
    </div>

<!-- Main content -->
  



    
    <!-- /.content -->