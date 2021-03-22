<?php
include "./conexion.php";

if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio'])
&& isset($_POST['inventario']) && isset($_POST['cantidad']) && isset($_POST['marca'])
&& isset($_POST['color'])){

    $carpeta="../images/";
    $nombre = $_FILES['imagen']['name'];
    $extension= end(explode( '.' ,$nombre));
    $nombreFinal = time().'.'.$extension;

    if($extension=='jpg' || $extension == 'png'){
        if(move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$nombreFinal)){
            
        }
    }else{
        header("Location ../admin/productos.php?error=Por favor suba una imagen válida");
    }

}else{
    header("Location ../admin/productos.php?error=Por favor complete todos los campos");
}
?>