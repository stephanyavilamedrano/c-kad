<?php 
  include("./php/conexion.php");
  if( isset($_GET['id'])){
    $resultado = $conexion ->query("select * from productos where id=".$_GET['id'])or die($conexion->error);
    if(mysqli_num_rows($resultado) > 0 ){
      $fila = mysqli_fetch_row($resultado);
    }else{
      header("Location: ./index.php");
    }
  }else{
    //redireccionar
    header("Location: ./index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/<?php echo $fila[4]; ?>" alt="<?php echo $fila[1]; ?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1]; ?></h2>
            <p><?php echo $fila[2]; ?></p>
            <p><strong class="text-dark h4">$<?php echo $fila[3]; ?></strong></p>
            <div class="mb-1 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <input type="radio" id="option-sm" name="shop-sizes"></span>
                 <span class="d-inline-block text-black">Negro</span>
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <input type="radio" id="option-md" name="shop-sizes"></span> 
                <span class="d-inline-block text-black">Azul</span>
              </label>
              <label for="option-lg" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <input type="radio" id="option-lg" name="shop-sizes"></span>
                 <span class="d-inline-block text-black">Verde</span>
              </label>
              <label for="option-xl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <input type="radio" id="option-xl" name="shop-sizes">
              </span> <span class="d-inline-block text-black"> Rojo</span>
              </label>
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-dark js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-dark js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="cart.php?id=<?php echo $fila[0]; ?>" class="buy-now btn btn-sm btn-dark">Añadir al carrito</a></p>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-muted">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Productos Destacados</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cam17.png" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Camara Oculta</a></h3>
                    <p class="mb-0">Diseño exclusivo y funcional, estas cámaras pueden integrarse sin problemas en diferentes entornos</p>
                    <p class="text-dark font-weight-bold">$350.000</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cam9.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Camara de seguridad</a></h3>
                    <p class="mb-0">Panel de 360 / HD 1080 p</p>
                    <p class="text-primary font-weight-bold">$90.000</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cam13.png" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Domo Fijo</a></h3>
                    <p class="mb-0">Cámaras domo fijas muy discretas y fáciles de instalar, con resolución HDTV y vistas panorámicas de 360º/180º.</p>
                    <p class="text-primary font-weight-bold">$50</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/comp19.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Acer TC-895-UA92</a></h3>
                    <p class="mb-0">Core i7 Mini PC de sobremesa, 8 GB DDR3 256 GB SSD de 2,4 GHz/5 GHz Dual WiFi/Gigabit Ethernet/decodificación 4K BT4.2</p>
                    <p class="text-primary font-weight-bold">1970000</p>
                  </div>
                </div>
              </div>
              <div class="row">
          <div class="col-md-4">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
               
                   
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/comp10.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">StyTech Blaze lll</a></h3>
                    <p class="mb-0">Ryzen 5 2600</p>
                    <p class="text-dark font-weight-bold">$2700000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 
  
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>