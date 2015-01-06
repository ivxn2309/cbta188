<!-- Inicio de formularios -->
<section id="forms" class="wrapper style5 container special">
	<div class="row">
		<!-- Formulario de logueo -->
		<div class="6u">
			<section>
				<header>
					<h2>Area de docentes.</h2>
				</header>
				<p>
					Sí eres un docente y aún no tienes tu cuenta y contraseña, entonces contacta 
					al administrador de este sitio. <br>
					Sí por el contrario ya tienes tu cuenta y contraseña introducelos en el formulario 
					de la derecha para de esta forma puedas acceder a las herramientas administrativas.
				</p>
			</section>				
		</div>
		<!-- Fin de formulario de logueo -->
		
		<!-- Formulario de registro -->
		<div class="6u">
			<section>
				<header>
					<h3>Identificación.</h3>
				</header>						
				<form method="post" action="index.php">
					<label for="docente_user">Usuario:</label>
					<input type="text" placeholder="usuario@cbta188" id="docente_user" name="docente_user">

					<label for="docente_pass">Contraseña:</label>
					<input type="password" placeholder="Contraseña" id="docente_pass" name="docente_pass">

					<br><br>
					<input type="submit" value="Entrar" id="docente_submit_signup">
				</form>						
			</section>
		</div>
		<!-- Fin de formulario de registro -->
	</div>
</section>
<!-- Fin de formularios -->