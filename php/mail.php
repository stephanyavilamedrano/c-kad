<?php
    $servidor="localhost";
    $to = 'CompuServic@gmail.com';
    $subject = 'Gracias por tu compra en ComputServic Inc';
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: ComputServic <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";     
    $message = 'Gracias por preferirnos ';

    if(mail($to,$subject,$message,$headers)){
        echo "Mensaje enviado correctamente";
    }else{
        echo 'No se pudo enviar el email';
    }

?>


