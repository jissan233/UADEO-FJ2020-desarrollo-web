<?php
require_once '../lib/myconnection.php';

header('content-type: application/json')
// Revisar el metodo utilizado en la peticion 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['username']) && isset($isset($_POST{
        $username = $_POST['username'];
        $userpassword = $_POST['userpasword'];

        //abrir una conexion 
        $cnn = new myconnection();
        //definir la consulta
        $sql = printf("select name,email,firstname from users where name=%s'and
        password=%s'", $username,$userpassword);
        //ejecutar la consulta 
        $rst =$cnn->query($sql);
        //cerrar la conexion
        $scn ->close();
        //evaluar el resultado
        if (!$rst){
            // TODO: manejar el error de la ejecusion de la consulta
        }else {
            // TODO: manejar la respuesta de la base de datos
            // para preparar lo que se enviara al frontend
        }
    }
    echo json_encode(['usuario' => $username, 'contraseña' => $userpassword]);    
}   else{
    echo json_encode(['error' => 'no se recibieron valores']);
}else {
    http_response_code(405);
    echo json_encode(['error' => 'el metodo'.$_SERVER['REQUEST_METHOD'].'NO ESTA PERMITIDO'])
}