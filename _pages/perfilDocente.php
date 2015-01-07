<!-- Inicio de formularios -->
<section id="forms" class="wrapper style6 container special shadow3">
	<div class="row">
		<div class="6u">
			<section>
				<header><h3>Básico.</h3></header>
				<label for="nombre_doc">Nombre Completo:</label>
				<input type="text" placeholder="Juan Perez" id="nombre_doc" name="nombre_doc">
				<span id="err_nombre_doc" class="error"></span>
			</section>
		</div>

		<div class="6u">
			<section>
				<header><h3>Cambiar Contraseña.</h3></header>
				<label for="pass_doc">Contraseña Actual:</label>
				<input type="password" placeholder="Contraseña" id="pass_doc" name="pass_doc">
				<span id="err_pass_doc" class="error"></span>

				<label for="new_pass_doc">Contraseña Nueva:</label>
				<input type="password" placeholder="Nueva Contraseña" id="new_pass_doc" name="new_pass_doc">
				<span id="err_new_pass_doc" class="error"></span>

				<label for="cnew_pass_doc">Confirma la nueva contraseña:</label>
				<input type="password" placeholder="Confirmación" id="cnew_pass_doc" name="cnew_pass_doc">
				<span id="err_cnew_pass_doc" class="error"></span>
			</section>
		</div>
	</div>

	<div class="row">
		<div class="4u">
			<section>
				<header><h3>Personal.</h3></header>
				<label for="edad_doc">Edad:</label>
				<input type="number" placeholder="Edad" id="edad_doc" name="edad_doc">
				<span id="err_edad_doc" class="error"></span>

				<label for="profesion">Profesión:</label>
				<input type="text" placeholder="Ingeniero Mecánico" id="profesion" name="profesion">
				<span id="err_profesion" class="error"></span>

				<label for="url_doc">Facebook:</label>
				<input type="text" placeholder="facebook/juanperez10" id="url_doc" name="url_doc">
				<span id="err_url_doc" class="error"></span>

				<label for="certificaciones">Certificaciones:</label>
				<textarea rows="5" id="certificaciones" name="certificaciones"></textarea>
				<span id="err_certi" class="error"></span>
			</section>
		</div>

		<div class="8u">
			<section>
				<header><h3>Extra.</h3></header>
				<label for="frase">Frase:</label>
				<input type="text" placeholder="El conocimiento es la puerta hacia la comprension del universo..." id="frase" name="frase">
				<span id="err_frase" class="error"></span>

				<label for="intereses">Intereses:</label>
				<textarea rows="3" id="intereses" name="intereses"></textarea>
				<span id="err_intereses" class="error"></span>

				<label for="detalles_doc">Detalles:</label>
				<textarea rows="5" id="detalles_doc" name="detalles_doc"></textarea>
				<span id="err_detalles_doc" class="error"></span>
			</section>
		</div>
	</div>

	<div class="row">
		<div class="12u">
			<input type="button" value="Actualizar" id="update_info_doc" onclick="updateDocente();">
		</div>
	</div>
</section>
<!-- Fin de formularios -->