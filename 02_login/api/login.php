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
        password=%s'and password= sha'"$username,$userpassword);
        //ejecutar la consulta 
        $rst =$cnn->query($sql);
        //cerrar la conexion
        $scn ->close();
        //evaluar el resultado
        if (!$rst){
            // TODO: manejar el error de la ejecusion de la consulta
            echo json_encode(['error'=> 'error al ejecutar la consulta'])
        }elseif ($rst->num_rows == 1 {
            // TODO: manejar la respuesta de la base de datos
            // para preparar lo que se enviara al frontend
            // La respuesta esperada aqui es un objeto de tipo mysqli_result
            $usuario = $rst ->fetch_assoc();
            echo json_encode(['data' => $usuario]);
        }else {
            echo json_encode(['respuesta' => 'usuario incorrecto.'])
        }
    }
    echo json_encode(['usuario' => $username, 'contraseña' => $userpassword]);    
}   else{
    echo json_encode(['error' => 'no se recibieron valores']);
}else {
    http_response_code(405);
    echo json_encode(['error' => 'el metodo'.$_SERVER['REQUEST_METHOD'].'NO ESTA PERMITIDO'])
}