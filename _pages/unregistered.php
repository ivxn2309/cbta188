<!-- Inicio de formularios -->
<section id="forms" class="wrapper style5 container special shadow4">
	<div class="row">
		<!-- Formulario de logueo -->
		<div class="6u">
			<section>
				<header>
					<h3>Si ya tienes una cuenta introduce tus datos aquí.</h3>
				</header>
				<form method="post" action="index.php" onsubmit="return validaAlumno();">
					<label for="nocontrol">No. Control:</label>
					<input type="text" placeholder="Número de control" id="nocontrol" name="nocontrol">
					<span id="err_nocontrol" class="error"></span>
					<br>
					<label for="curp">C.U.R.P.:</label>
					<input type="text" placeholder="Ingresa tu CURP" id="curp" name="curp">
					<span id="err_curp" class="error"></span>
					<br>
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
				<form method="post" action="#">
					<label for="nocontroltxt">No. Control:</label>
					<input type="text" placeholder="Número de control" id="nocontroltxt" name="nocontroltxt">
					<span id="err_nocontroltxt" class="error"></span>
					
					<label for="emailtxt">E-mail:</label>
					<input type="email" placeholder="usuario@example.com" id="emailtxt" name="emailtxt">
					<span id="err_emailtxt" class="error"></span>
					
					<label for="edadtxt">Edad:</label>
					<input type="number" placeholder="Ingresa tu edad" id="edadtxt" name="edadtxt">
					<span id="err_edadtxt" class="error"></span>
					
					<label for="curptxt">C.U.R.P.:</label>
					<input type="text" placeholder="Ingresa tu CURP" id="curptxt" name="curptxt">
					<span id="err_curptxt" class="error"></span>
					<br>
					<input type="button" value="Registrar" id="submit_signup" onclick="registraAlumno();">
				</form>						
			</section>
		</div>
		<!-- Fin de formulario de registro -->
	</div>
</section>
<!-- Fin de formularios -->