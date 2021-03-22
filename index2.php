<!DOCTYPE html>
<html lang="en">
  <head>
    <title>C-KAD &mdash; Compu servic</title>
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
  
  <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">
           <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
           <form action="./busqueda.php" class="site-block-top-search" method="GET">
        <input type="text" class="form-control border-0" placeholder="Buscar" name="texto">
              </img>
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order- text-center">
                <a href="login.php" ><img src="images/logo.jpg" style="width:100%;"></a>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-2 text-right">
              <div class="site-top-icons">
                <ul><li><a href="login.php"><img src="images/home.jpg" style="width:10%;"></a></li>
 <li>
                    <a href="cart.php" class="site-cart">
                       <img src="images/carrito.jpg" style="width:10%;">
                      <span class="count">
                        <?php 
                          if(isset($_SESSION['carrito'])){
                            echo count($_SESSION['carrito']);
                          }else{
                            echo 0;
                          }
                        ?>
                      </span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="index2.php">Inicio</a>
            
            </li>
            <li>
              <a href="about.php">Nosotros</a>
            
            </li>
          
            <li><a href="index.php">Catalogo</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="contact.php">Contacto</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index2.php">Inicio</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Catalogo</strong></div>
        </div>
      </div>
    </div>
    </header>

    <div class="site-blocks-cover" style="background-image: url(images/gaming1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">Compu Servic</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Somos una empresa dedicada al soporte técnico en sistemas,
                     redes, seguridad y venta de equipos y partes.
                      Nuestro compromiso es efectuar trabajos de calidad
                      y garantizados con el objetivo de brindarle a nuestros clientes tranquilidad y satisfacción. </p>
                      <li>Venta de equipos de computo </li>
                      <li>Instalacion de sistemas de vigilancia</li>
                      <li>Servicio Tecnico</li>
                      <li>Intalacion de redes y cableado estructurado</li>
                      <br><br>
              <p>
                <a href="index.php" class="btn btn-sm btn-dark">Ver productos</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
            </div>
            <div class="text">
              <h2 class="text-uppercase">Envio Gratis</h2>
              <p>Con nosotros no pagaras un envio, <br>Solo cancelaras el total de tu productos</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
            </div>
            <div class="text">
              <h2 class="text-uppercase">Devolucion Gratuita</h2>
              <p>Tus garatias y devoluciones totalmente gratuitas</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
            </div>
            <div class="text">
              <h2 class="text-uppercase">Atencion al Cliente</h2>
              <p>Canales de comunicacion, centro de ayudas y respuestas <a href="contact.php">Click Aqui</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>

            

    
    
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

    
    

<?php 

include "layouts/footer.php"
?>
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