
    <?php
    session_start();
    include "../php/conexion.php";
    if(!isset($_SESSION['datos_login'])){
      header("Location: ../index.php");
    }
    $arregloUsuario = $_SESSION['datos_login'];
    if($arregloUsuario['nivel']!= 'cliente'){ 
      header("Location: ../index.php");
    }
    $resultado = $conexion ->query("
    select envios.*, id_venta,pais,company,direccion,estado,cp,nombre,telefono,email
    from envios,usuario")or die($conexion->error);

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
    </div>
    <section class="content">
      <div class="container-fluid">
          <table class="table">
          <thead>
            <tr>
              <th>Id_venta</th>
              <th>Pais</th>
              <th>Compañia</th>
              <th>Direccion</th>
              <th>Estado</th>
              <th>Codigo Postal</th>
              <th>Nombre</th>
              <th>Telefono</th>
              <th>Email</th>
            </tr>

          </thead>
         
          <tbody>
              
          <?php
                    while($f = mysqli_fetch_array($resultado)){

                  ?>
                  <tr>
                  <td><?php echo $f['id_venta'];?></td> 
                    <td><?php echo $f['pais'];?></td>
                    <td><?php echo $f['company'];?></td>
                    <td><?php echo $f['direccion'];?></td>
                    <td><?php echo $f['estado'];?></td>
                    <td><?php echo $f['cp'];?></td>
                    <td><?php echo $f['nombre'];?></td>
                    <td><?php echo $f['telefono'];?></td>
                    <td><?php echo $f['email'];?></td>
                  </tr> 
                  <?php } ?>                
          </tbody>
          </table>
      </div>
    </section>
    
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
