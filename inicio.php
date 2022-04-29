<?php

$db="artecalendaweb";
$host="localhost";
$user="root";
$pass="root";
$con=mysqli_connect($host,$user,$pass,$db);



function registraUsuario(){

// $email="$POST['email']";
$email="Hola@hola.com";
// $password="$POST['password']";
$password="hola";
$passHash=password_hash($password,PASSWORD_BCRYPT); 

$query1="INSERT INTO loginusuarios (email, password) VALUES ('$email', '$passHash')";

$result=mysqli_query($GLOBALS['con'],$query1);
if (!$result) {
    echo "Error al ejecutar el registro de usuarios";
    exit();
}else{
    echo "Usuario registrado";
}
}
?>