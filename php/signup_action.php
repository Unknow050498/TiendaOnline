<?php
/*===========================CONEXIÓN A MySQL===========================*/
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Fallo la conexion con la base de datos" . mysqli_error($connection));
}
/*===========================CONEXIÓN A LA BASE DE DATOS===========================*/
$select_db = mysqli_select_db($connection, 'coffeeshop_datas');
if (!$select_db){
    die("Database seleccionada ha fallado " . mysqli_error($connection));
}
/*=================================================================================*/

/*===========================OBTIENE LOS VALORES DE PHP===========================*/
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['password']) && !empty($_POST['password']))){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$passw = $_POST['password'];
/*===========================ALMACENA LOS VALORES A LA TABLA===========================*/
$sql = "SELECT * FROM registro WHERE Email='$email'";
$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result)>0){

	 echo '<script type="text/javascript">
	 alert("El correo ya existe, intente con otro.");
	 window.location.href="../index.php";
	 </script>';
 
	} else{
		
		$sql2 = "INSERT INTO registro(Nombre, Email, Password) VALUES ('$name', '$email', '$passw')";
		
		if (mysqli_query($connection, $sql2)) {

	echo '<script type="text/javascript">
    alert("¡REGISTRO EXITOSO!");
    window.location.href="../index.php";
    </script>';
} else {
	echo "Error: " . $sql2 . "" . mysqli_error($connection);
}

}

$connection->close();

}
?>

