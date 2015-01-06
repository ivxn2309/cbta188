<!-- Inicio de formularios -->
<section id="forms" class="wrapper style2 container special">
	<div class="row">
		<!-- Formulario de logueo -->
		<div class="6u">
			<section>
				<header>
					<h3>Si ya tienes una cuenta introduce tus datos aquí.</h3>
				</header>
				<form method="post" action="index.php">
					<label for="nocontroltxt">No. Control:</label>
					<input type="text" placeholder="Número de control" id="nocontrol" name="nocontrol">
					<label for="curptxt">C.U.R.P.:</label>
					<input type="text" placeholder="Ingresa tu CURP" id="curp" name="curp">
					<br><br>
					<input type="submit" value="Entrar" id="submit_loggin">
				</form>
			</section>				
		</div>
		<!-- Fin de formulario de logueo -->
		
		<!-- Formulario de registro -->
		<div class="6u">
			<section>
				<header>
					<h3>Regístrate para tener acceso a tus datos como alumno.</h3>
				</header>						
				<form method="post" action="index.php">
					<label for="nocontroltxt">No. Control:</label>
					<input type="text" placeholder="Número de control" id="nocontroltxt" name="nocontroltxt">
					<label for="emailtxt">E-mail:</label>
					<input type="email" placeholder="usuario@example.com" id="emailtxt" name="emailtxt">
					<label for="edadtxt">Edad:</label>
					<input type="text" placeholder="Ingresa tu edad" id="edadtxt" name="edadtxt">
					<label for="curptxt">C.U.R.P.:</label>
					<input type="text" placeholder="Ingresa tu CURP" id="curptxt" name="curptxt">
					<br><br>
					<input type="submit" value="Registrar" id="submit_signup">
				</form>						
			</section>
		</div>
		<!-- Fin de formulario de registro -->
	</div>
</section>
<!-- Fin de formularios -->