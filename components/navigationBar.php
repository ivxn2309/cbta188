<?php if($isUser):?>

<nav id="nav">
	<ul>				
		<li class="current">
			<a href="#" onclick="loadContent(1, 2, 1);">Inicio</a>
		</li>

		<li>
			<a href="#" onclick="loadContent(0, 5, 1);">Horarios</a>
		</li>

		<li>
			<a href="#" onclick="loadContent(0, 6, 1);">Calificaciones</a>
		</li>
		
		<li class="submenu">
			<a href="#"><?php echo $_SESSION['email'];?></a>
			<ul>
				<li><a href="#" onclick="loadEditarPerfil();">Editar Perfil</a></li>
				<li><a href="#" id="cerrar" onclick="closeSession();">Cerrar Sesión</a></li>
			</ul>
		</li>

	</ul>
</nav>

<?php else:?>

<nav id="nav">
	<ul>				
		<li class="current">
			<a href="#" onclick="loadContent(1, 2, 0);">Inicio</a>
		</li>

		<li>
			<a href="#" onclick="loadContent(0, 3, 0);">Alumnos</a>
		</li>

		<li>
			<a href="#" onclick="loadContent(0, 4, 0);">Docentes</a>
		</li>
		<li>
			<a href="#" class="button special scrolly" onclick="loadContent(0, 3, 0);">Entrar</a>
		</li>
	</ul>
</nav>

<?php endif;?>