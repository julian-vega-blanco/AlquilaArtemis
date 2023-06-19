<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/AlquilaArtemis/">Home</a></li>
              <li class="breadcrumb-item active">Productos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php 
$url = "http://localhost/AlquilaArtemis/api/backend/controlers/alquilartemis.php?op=GetProducto";
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
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($output as $out) {?>
                  <tr>
                  
                    <td><?php echo $out->id;?></td>
                    <td><?php echo $out->Nombre;?></td>
                    <td><?php echo $out->Descripcion;?></td>
                    <td><?php echo $out->Precio;?></td>
                    <td><?php echo $out->Cantidad;?></td>
                    
                  </tr>
                  <?php }?>
                  
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

    <!-- Main content -->
