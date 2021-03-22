
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  
    <ul class="navbar-nav">
      <li class="nav-item">
        
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="contacto.php" class="nav-link">Contacto</a>
      </li>
    </ul>

    <!--menu de busqueda-->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    
    <ul class="navbar-nav ml-auto">
     
      </div>
 
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="index3.html" class="brand-link">
      
      <h1><span class="brand-text font-weight-light">ComputServic</span></h1>
    </a>

    
    <div class="sidebar">
      <!-- menu de informacion del usuario -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/users/<?php echo $arregloUsuario['imagen'];?>" class="img-circle elevation-2"
           alt="<?php echo $arregloUsuario['nombre']; ?>">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $arregloUsuario['nombre'];?></a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
         
          <li class="nav-item">
            <a href="./index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
           <?php
            if($arregloUsuario['nivel']== 'admin'){          
          ?>
                <li class="nav-item">
                <a href="./ventas.php" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i><p>Ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./productos.php" class="nav-link">
                  <i class="nav-icon fas fa-boxes"></i><p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./servicios.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i><p> Servicios </p>
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a href="./login.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i><p> Usuarios </p>
                </a>
              </li>
              </li>
          <?php }else if($arregloUsuario['nivel']== 'cliente'){ 
            ?>
            <li class="nav-item">
            <a href="./pedidos.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i><p>Pedidos</p>
            </a>
          </li>
             <?php } ?>
          <li class="nav-item">
            <a href="../php/cerrar_sesion.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Salir
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
   
    </div>
   
  </aside>