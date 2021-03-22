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
            <li><a href="servic.php">Servicios</a></li>
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