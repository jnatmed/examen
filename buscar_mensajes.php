<?php 

require_once("./utils.php");
require_once("./env.php");

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(get_params('REQUEST_METHOD') == 'POST')
        {
            $email = htmlspecialchars(get_params("email"));

            $stmt = $conn->prepare("SELECT nombre, mensaje FROM contacto WHERE email=:email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            /**fetchAll de los resultados si los hubiere */
            if(count($resultados)>0)
            {
                echo("<ul>");
                foreach($resultados as $fila)
                {
                    echo("<li>");
                    echo("nombre: <strong>". $fila['nombre'] . "</strong><br>");
                    echo("<p>email: ". $fila['mensaje'] . "</p>");
                    echo("</li>");
                }
                echo("</ul>");
            }else{
                echo("No hay mensajes para ese email");
            }
        }
    }catch(Exception $e){
    echo "Error: " . $e;
}
