<?php 
$url = "http://localhost/AlquilaArtemis/api/backend/controlers/campers.php?op=GetAll";
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output = json_decode(curl_exec($curl));
/*print_r($output); */
?>

            

    <!-- Main content -->

    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with Alquila Artemis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>Empleado_id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nacimiento</th>
                    <th>Puesto</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($output as $out) {
                      # code...
                    ?>
                  <tr>
                  
                    <td><?php echo $out->empleado_id;?></td>
                    <td><?php echo $out->nombre;?></td>
                    <td><?php echo $out->apellido;?></td>
                    <td><?php echo $out->fecha_nacimiento;?></td>
                    <td><?php echo $out->puesto;?></td>
                    
                  </tr>
                  <?php }?>
                  
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
