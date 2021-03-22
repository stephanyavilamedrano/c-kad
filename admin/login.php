
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
    select usuario.*, nombre,telefono,email
    from usuario")or die($conexion->error);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>usuario | ComputServic</title>
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
            <h1 class="m-0 text-dark">Usuario</h1>
          </div>
          <div class="col-sm-6 text-right">
          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#agregarModal">
            <i class="fa fa-bolt"></i> Agregar Nuevo Usuario </button></div>
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
              <th>Telefono</th>
              <th>Email</th>
              <th>Imagen</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>

          </thead>
         
          <tbody>
              
          <?php
                    while($f = mysqli_fetch_array($resultado)){

                  ?>
                  <tr>
                    <td><?php echo $f['id'];?></td>
                    <td><?php echo $f['nombre'];?></td>
                    <td><?php echo $f['telefono'];?></td>
                    <td><?php echo $f['email'];?></td>
                    <td><img src="./images/<?php echo $f['img_perfil'];?>" width="100px" height="100px" alt="">
                    <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editarModal"><i class="fa fa-plus"></i> Editar </button></td>
                    <td><button type="button" class="btn btn-danger" ><i class="fa fa-archive"></i> Eliminar </button></td>
                  </tr> 
                  <?php } ?>                
          </tbody>
          </table>
      </div>
    </section>
    
  </div>
  
<div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="../php/insertarproducto.php" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Añadir usuario</h5>
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
                      <label for="telefono">Telefono</label>
                      <input type="text" name="telefono" placeholder="telefono" id="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" placeholder="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="imagen">Imagen</label>
                      <input type="file" name="imagen" id="imagen" class="form-control" required>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Editar informacion</h5>
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
                      <label for="telefono">Telefono</label>
                      <input type="text" name="telefono" placeholder="telefono" id="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" placeholder="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                      <label for="imagen">Imagen</label>
                      <input type="file" name="imagen" id="imagen" class="form-control" required>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
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
