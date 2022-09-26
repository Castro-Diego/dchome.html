<?php 

// datos para correo
    $remitente = $_POST['email'];
    $destinatario = "dchomerecubrimiento@gmail.com";
    $asunto= "contacto desde nuestra web";
?>

<?php
}else{

    // llamado a los campos
    $nombre = $_POST ['nombre'];
    $correo = $_POST ['correo'];    
    $telefono = $_POST ['telefono'];
    $mensaje = $_POST ['mensaje'];

    $carta = "De: $nombre \n";
    $carta .= "correo: $correo \n";
    $carta .= "telefono: $telefono \n";
    $carta .= "mensaje: $mensaje";

    //enviando mensaje
    mail($destinatario, $asunto, $carta);
    
    include 'index.html';

    define('SERVIDOR', 'localhost');
    define('NOMBRE_BD', 'id19624439_revestimientodchome');
    define('USARIO', 'id19624439_diegocastro');
    define('CLAVE', ')RSrXuyT3io)8VN0');
    $opciones =[PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'];
}
?>