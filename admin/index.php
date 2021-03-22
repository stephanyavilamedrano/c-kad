<?php
  session_start();

  if(!isset($_SESSION['datos_login'])){
    header("Location: ../index.php");
  }
  $arregloUsuario = $_SESSION['datos_login'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | CompucServic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="./dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="./dashboard/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="./dashboard/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include "./layouts/header.php";?>
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0"><br><br>
            <h1 class="mb-2">Compu Servic</h1><br>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Somos una empresa dedicada al soporte técnico en sistemas,
                     redes, seguridad y venta de equipos y partes.
                      Nuestro compromiso es efectuar trabajos de calidad
                      y garantizados con el objetivo de brindarle a nuestros clientes tranquilidad y satisfacción. </p>
                      <li>Venta de equipos de computo </li>
                      <li>Instalacion de sistemas de vigilancia</li>
                      <li>Servicio Tecnico</li>
                      <li>Intalacion de redes y cableado estructurado</li><br><br>
                      <h3 class="mb-2">Tambien contamos con nuestra lista de productos</h3><br>
                      <li>Camaras </li>
                      <li>Computadpres de mesa</li>
                      <li>Laptos</li>
                      </div>
                <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
<div>   
<?php include "./layouts/footer.php";?>
</div>

<script src="./dashboard/plugins/jquery/jquery.min.js"></script>
<script src="./dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>>
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

</body>
</html>
