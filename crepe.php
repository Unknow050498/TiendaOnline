<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Crepas</title>
	<link rel="shortcut icon" href="img/CoffeeT.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/Modal_login-signup.css">	<!-- CSS del Login -->
	<link rel="stylesheet" href="css/estilos.css">		<!-- CSS contenido general -->
	</head>
<body>

	<section class="title_logo">
			<a href="index.php">
				<img class="c_s" src="img/CoffeT.svg" alt="">
			</a>
			<h1>Crepas</h1>
	</section>

	<div class="search_bar">
		<input class="search" type="text" id="search" placeholder="¿Qué antojo tienes?">
		
		<button  class="but_sear"><img class="ser_logo" src="img/search.svg"></button>
	</div>

<!--=================INICIO SUPERIOR DERECHA=================-->
<div class="img_buy">
		<a href="index.html"><img src="img/buy.svg"></a>
		<!--<input class="entrar" type="button" value="ENTRAR">-->

<!--=================LOG IN=================-->
		<button class="btn rounded" 
		onclick="document.getElementById('login').style.display='block'">
			<span class="text">
			  LOG IN
			</span>
		  </button>
<!--=========================================-->

<!--=================SIGN UP=================-->
		  <button class="btn rounded2"
		  onclick="document.getElementById('signup').style.display='block'">
			<span class="text2">
			  SIGN UP
			</span>
		  </button>	
<!--=========================================-->
	</div>

<!--==================================================-->

	<nav class="nav">
		<ul class="menu">
<!--======================BEBIDAS=====================-->
			<li class="first-item">
				<a href="drinks.php">
					<img src="img/Bebidas.jpg" alt="" class="imagen">
					<span class="text-item">Bebidas</span>
					<span class="down-item"></span>
				</a>
			</li>
<!--======================CREPAS=====================-->
			<li>
				<a href="crepe.php">
					<img src="img/Crepas.jpg" alt="" class="imagen">
					<span class="text-item">Crepas</span>
					<span class="down-item"></span>
				</a>
			</li>
<!--======================SNACKS=====================-->
			<li>
				<a href="snacks.php">
					<img src="img/Snacks.jpg" alt="" class="imagen">
					<span class="text-item">Snacks</span>
					<span class="down-item"></span>
				</a>
			</li>
<!--======================ENSALADAS=====================-->
			<li>
				<a href="salads.php">
					<img src="img/Ensladas.jpg" alt="" class="imagen">
					<span class="text-item">Ensaladas</span>
					<span class="down-item"></span>
				</a>
			</li>
<!--======================POSTRES=====================-->
			<li>
				<a href="desserts.php">
					<img src="img/Postres.jpg" alt="" class="imagen">
					<span class="text-item">Postres</span>
					<span class="down-item"></span>
				</a>
			</li>
<!--======================CONTACTO=====================-->
			<li>
				<a href="contact-us.php">
					<img src="img/contacto.png" alt="" class="imagen">
					<span class="text-item">Contactanos</span>
					<span class="down-item"></span>
				</a>
			</li>
<!--==================================================-->
		</ul>
	</nav>

<!--======================SIGNUP==========================-->
<div id="signup" class="window_signup">
<form class="modalc animate" action="php/signup_action.php" method="post">

<div class="btnexit">
  <span onclick="document.getElementById('signup').style.display='none'" class="finish" title="Close Modal">&times;</span>
</div>

<div class="container-form">
	  <label for="">Nombre</label>
	  <input type="text" class="name" name="name" id="name" placeholder="Nombre" pattern="[a-z A-Z-]{2,48}" required>
	  
	  <label for="uname"><b>Correo</b></label>
	  <input type="text" class="e-mail" name="email" id="email" placeholder="Correo Electrónico" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
	  
	  <label for="psw"><b>Contraseña</b></label>
	  <input type="password" class="passwd" name="password" id="password" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	  
	  <label for="">Confirmar Contraseña</label>
	  <input type="password" class="passwd_confirm" name="confirm_psswd" id="confirm_psswd" placeholder="Confirmar Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	  
	  <button class="bt_signup" type="submit">TERMINAR</button>
</div>
  
  <div class="container-form" style="">
	  <button type="button" 
	  onclick="document.getElementById('signup').style.display='none'" class="btn_cancel">Cancel</button>
  </div>
</form> 
</div>
<!--===========================================================-->

<!--======================LOGIN==========================-->
<div id="login" class="window_login">
<form class="modal-content animate" action="#.php" method="post">

  <div class="imgcontainer">
  <span onclick="document.getElementById('login').style.display='none'" class="end" title="Close Modal">&times;</span>
    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Correo</b></label>
    <input type="text" class="e-mail_login" placeholder="Correo Electrónico" name="uname" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" class="passwd_login" placeholder="Contraseña" name="psw" required>

    <button class="bt_login" type="submit">INGRESAR</button>
    <label>
      <input type="checkbox" name="remember"> Recordar contraseña
    </label>
  </div>

  <div class="container" style="">
	  <button type="button" 
	  onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Olvide <a href="#">Contraseña</a>?</span>
  </div>
</form> 
</div>
<!--===========================================================-->

<script src="js/efect_login-signup.js"></script>
</body>
</html>