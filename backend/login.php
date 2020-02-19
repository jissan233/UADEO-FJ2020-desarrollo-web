<?php
if (count($_POST) > 0) {
    $username = $_POST['username'];
    $userpassword = $_POST['userpasswd'];

    echo json_encode(['usuario' => $username, 'contrasenia' => $userpassword]);
} else {
    echo json_encode(['error' => 'no se recibieron valores']);
} 