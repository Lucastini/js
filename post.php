<?php

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

if($usuario === '' || $pass === ''){
    echo json_encode('error');
}
else{
    echo json_encode('Correcto: usuario: '.$usuario.' pass: '.$pass);
}
