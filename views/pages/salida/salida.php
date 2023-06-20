<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Salidas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/AlquilaArtemis/">Home</a></li>
              <li class="breadcrumb-item active">Salidas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php 
$url = "http://localhost/AlquilaArtemis/api/backend/controlers/alquilartemis.php?op=GetSalida";
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
                    <th>salida_id</th>
                    <th>cliente_id</th>
                    <th>Fecha de salida</th>
                    <th>Hora de salida</th>
                    <th>Subtotal de peso</th>
                    <th>Placa del transporte</th>
                    <th>Observaciones</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($output as $out) {?>
                  <tr>
                  
                    <td><?php echo $out->salida_id;?></td>
                    <td><?php echo $out->cliente_id;?></td>
                    <td><?php echo $out->fecha_salida;?></td>
                    <td><?php echo $out->hora_salida;?></td>
                    <td><?php echo $out->subtotalPeso;?></td>
                    <td><?php echo $out->placatransporte;?></td>
                    <td><?php echo $out->observaciones;?></td>
                    
                  </tr>
                  <?php }?>
                  
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

    <!-- Main content -->
