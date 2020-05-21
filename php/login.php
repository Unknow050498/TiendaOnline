<?php 
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error

if (isset($_POST['submit'])) {

if (empty($_POST['e-mail_login']) || empty($_POST['passwd_login'])) {

    $error = "Username or Password is invalid";

}else{
    
    // Define $username y $password
    $username=$_POST['e-mail_login'];
    $password=$_POST['passwd_login'];
    
    // Estableciendo la conexion a la base de datos
    include("conexion.php");//Contiene de conexion a la base de datos
    
    // Para proteger de Inyecciones SQL 
    $username    = mysqli_real_escape_string($con,(strip_tags($username,ENT_QUOTES)));
    $password =  sha1($password);//Algoritmo de encriptacion de la contraseña http://php.net/manual/es/function.sha1.php
    
    $sql = "SELECT Email, Password FROM registro WHERE Email = '" . $username . "' AND Password='".$password."';";
    $query=mysqli_query($con,$sql);
    $counter=mysqli_num_rows($query);

    if ($counter==1){
        
    $_SESSION['login_user_sys']=$username; // Iniciando la sesion
	echo("CONECTADO");
	
}else{
    
    $error = "El correo electrónico o la contraseña es inválida.";	
        }
    }   
}
?>