<?php
    session_start();
    include "../php/conexion.php";
    if(!isset($_SESSION['datos_login'])){
      header("Location: ../index.php");
    }
    $arregloUsuario = $_SESSION['datos_login'];
    if($arregloUsuario['nivel']!= 'admin'){ 
      header("Location: ../index.php");
    }
    $resultado = $conexion ->query("
    select productos.*, categorias.nombre as catego from
    productos
    inner join categorias on productos.id_categoria = categorias.id
    order by id DESC")or die($conexion->error);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Productos | ComputServic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="./dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="./dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="./dashboard/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="./dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="./dashboard/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="./dashboard/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include "./layouts/header.php";?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Productos</h1>
          </div>
          <div class="col-sm-6 text-right">
          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#producModal">
            <i class="fa fa-bolt"></i> Insertar producto
          </button>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
          <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Precio</th>
              <th>imagen</th>
              <th>Inventario</th>
              <th>Categoria</th>
              <th>Marca</th>
              <th>Color</th>
              <th>Editar</th>
              <th>Eliminar</th>
              <th></th>
            </tr> 
          </thead>
          <tbody>
              
                  <?php
                    while($f = mysqli_fetch_array($resultado)){

                  ?>
                  <tr>
                    <td><?php echo $f['id'];?></td>
                    <td><?php echo $f['nombre'];?></td>
                    <td><?php echo $f['descripcion'];?></td>
                    <td>$<?php echo $f['precio'];?></td>
                    <td><img src="../Images/<?php echo $f['imagen'];?>" width="100px" height="100px" alt="">
                    <td><?php echo $f['inventario'];?></td>
                    <td><?php echo $f['catego'];?></td>
                    <td><?php echo $f['marca'];?></td>
                    <td><?php echo $f['color'];?></td>
                    <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editarModal"><i class="fa fa-plus"></i> Editar </button></td>
                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-archive"></i> Eliminar </button></td>
                    <td></td>
                  </tr> 
                  <?php } ?>
          </tbody>
          </table>
      </div>
    </section>
    
  </div>
  
<div class="modal fade" id="producModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="../php/insertarproducto.php" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Insertar Producto</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" name="nombre" placeholder="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="descripcion">Descripcion</label>
                      <input type="text" name="descripcion" placeholder="descripcion" id="descripcion" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="precio">Precio</label>
                      <input type="number" name="precio" placeholder="precio" id="precio" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="imagen">Imagen</label>
                      <input type="file" name="imagen" id="imagen" class="form-control" required>
            </div>         
            <div class="form-group">
                      <label for="inventario">Inventario</label>
                      <input type="number" name="inventario" placeholder="inventario" id="inventario" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="categoria">Categoria</label>
                      <select name="categoria" id="categoria" class="form-control" required>
                      <?php
                      $res = $conexion ->query("select * from categorias");
                      while ($f=mysqli_fetch_array($res)){
                        echo '<option value="'.$f['id'].'">'.$f['nombre'].'</option>';
                      }
                      ?>
                      </select></div>
            <div class="form-group">
                      <label for="talla">marca</label>
                      <input type="text" name="talla" placeholder="talla" id="talla" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="color">Color</label>
                      <input type="text" name="color" placeholder="color" id="color" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-dark">Guardar</button>
          </div>
      </form> 
    </div>
  </div>
</div>
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="../php/insertarproducto.php" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Editar producto</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" name="nombre" placeholder="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="descripcion">Descripcion</label>
                      <input type="text" name="descripcion" placeholder="descripcion" id="descripcion" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="precio">Precio</label>
                      <input type="number" name="precio" placeholder="precio" id="precio" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="imagen">Imagen</label>
                      <input type="file" name="imagen" id="imagen" class="form-control" required>
            </div>         
            <div class="form-group">
                      <label for="inventario">Inventario</label>
                      <input type="number" name="inventario" placeholder="inventario" id="inventario" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="categoria">Categoria</label>
                      <select name="categoria" id="categoria" class="form-control" required>
                      <?php
                      $res = $conexion ->query("select * from categorias");
                      while ($f=mysqli_fetch_array($res)){
                        echo '<option value="'.$f['id'].'">'.$f['nombre'].'</option>';
                      }
                      ?>
                      </select></div>
            <div class="form-group">
                      <label for="talla">marca</label>
                      <input type="text" name="talla" placeholder="talla" id="talla" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="color">Color</label>
                      <input type="text" name="color" placeholder="color" id="color" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-dark">Guardar</button>
          </div>
      </form> 
    </div>
  </div>
</div>
<?php include "./layouts/footer.php";?>
</div>
<script src="./dashboard/plugins/jquery/jquery.min.js"></script>
<script src="./dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="./dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./dashboard/plugins/chart.js/Chart.min.js"></script>
<script src="./dashboard/plugins/sparklines/sparkline.js"></script>
<script src="./dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="./dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="./dashboard/plugins/moment/moment.min.js"></script>
<script src="./dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<script src="./dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="./dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<script src="./dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="./dashboard/dist/js/adminlte.js"></script>
<script src="./dashboard/dist/js/pages/dashboard.js"></script>
<script src="./dashboard/dist/js/demo.js"></script>
</body>
</html>
