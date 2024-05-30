<?php

require_once("./utils.php");
require_once("./env.php");

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(get_params('REQUEST_METHOD') == 'POST')
    {   

        $nombre = get_params("nombre");
        $email = get_params("email");
        $mensaje = get_params("mensaje");

        /**preparar la consulta */
        $stmt = $conn->prepare("INSERT INTO contacto (nombre, email,mensaje) VALUES (:nombre, :email, :mensaje)");
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":mensaje", $mensaje);
        $stmt->execute();

        echo("Mensaje enviado con exito.");

    }else{
        throw new Exception("405: HTTP method not supported");
    }
}catch(Exception $e){
    echo "Error: " . $e;
}