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
 
          <div class="col-md-10 ml-auto">
            <div class="p-4 border mb-3">
            <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="h3 mb-3 text-black">Contacto</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombres <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Asunto </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Mensaje </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-dark btn-lg btn-block" value="Enviar">
                  </div>
                </div>
              </div>
            </form>
          </div>
              
            </div>

          </div>
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