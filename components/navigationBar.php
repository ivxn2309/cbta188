<?php if($isUser == 1):?>

<nav id="nav">
	<ul>				
		<li class="current">
			<a href="index.php" onclick="//loadContent(1, 2, 1);">Inicio</a>
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

	<?php if($isUser == 2):?>
	<nav id="nav">
		<ul>				
			<li class="current">
				<a href="index.php" onclick="//loadContent(1, 2, 1);">Inicio</a>
			</li>

			<li>
				<a href="#" onclick="loadContent(0, 5, 1);">Ver Grupos</a>
			</li>

			<li>
				<a href="#" onclick="loadContent(0, 6, 1);">Editar Calificaciones</a>
			</li>
			
			<li class="submenu">
				<a href="#"><?php echo $_SESSION['user'];?></a>
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
				<a href="index.php" onclick="//loadContent(1, 2, 0);">Inicio</a>
			</li>

			<li>
				<a href="#" onclick="loadContent(0, 3, 0);">Alumnos</a>
			</li>

			<li>
				<a href="#" onclick="loadContent(0, 4, 0);">Docentes</a>
			</li>
			<li>
				<a href="#" class="button special scrolly" onclick="loadContent(0, 3, 0);">Registrar</a>
			</li>
		</ul>
	</nav>
	<?php endif;?>
<?php endif;?>