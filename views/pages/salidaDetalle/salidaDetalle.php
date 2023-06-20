<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detalle de Salidas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/AlquilaArtemis/">Home</a></li>
              <li class="breadcrumb-item active">Detalle de Salidas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php 
$url = "http://localhost/AlquilaArtemis/api/backend/controlers/alquilartemis.php?op=GetSalidaDetalle";
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
                    <th>salida detalle id</th>
                    <th>salida id</th>
                    <th>producto id</th>
                    <th>empleado id</th>
                    <th>cantidad salida</th>
                    <th>cantidad propia</th>
                    <th>cantidad subalquilada</th>
                    <th>valor Unidad</th>
                    <th>fecha standBy</th>
                    <th>estado</th>
                    <th>valor Total</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($output as $out) {?>
                  <tr>
                  
                    <td><?php echo $out->salida_detalle_id;?></td>
                    <td><?php echo $out->salida_id;?></td>
                    <td><?php echo $out->producto_id;?></td>
                    <td><?php echo $out->empleado_id;?></td>
                    <td><?php echo $out->cantidad_salida;?></td>
                    <td><?php echo $out->cantidad_propia;?></td>
                    <td><?php echo $out->cantidad_subalquilada;?></td>
                    <td><?php echo $out->valorUnidad;?></td>
                    <td><?php echo $out->fecha_standBy;?></td>
                    <td><?php echo $out->estado;?></td>
                    <td><?php echo $out->valorTotal;?></td>
                    
                  </tr>
                  <?php }?>
                  
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

    <!-- Main content -->
