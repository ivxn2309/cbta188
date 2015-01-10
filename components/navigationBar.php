<?php if($isUser == 1):?>

<nav id="nav">
	<ul>				
		<li class="current">
			<a href="index.php">Inicio</a>
		</li>

		<li>
			<a href="#" onclick="loadContent(0, 8, 1);">Horarios</a>
		</li>

		<li>
			<a href="#" onclick="loadContent(0, 9, 1);">Calificaciones</a>
		</li>
		
		<li class="submenu">
			<a href="#"><?php echo $_SESSION['email'];?></a>
			<ul>
				<li><a href="#" onclick="loadContent(0, 10, 2);">Editar Perfil</a></li>
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
				<a href="index.php">Inicio</a>
			</li>

			<li>
				<a href="#" onclick="loadContent(0, 8, 2);">Ver Grupos</a>
			</li>

			<li>
				<a href="#" onclick="loadContent(0, 6, 2);">Editar Calificaciones</a>
			</li>
			
			<li class="submenu">
				<a href="#"><?php echo $_SESSION['doc_user'];?></a>
				<ul>
					<li><a <?php echo 'onclick="loadContent(0, 7, 2, \''.$_SESSION['doc_user'].'\');"';?> href="#">Editar Perfil</a></li>
					<li><a href="#" id="cerrar" onclick="closeSession();">Cerrar Sesión</a></li>
				</ul>
			</li>

		</ul>
	</nav>
	<?php else:?>
	<nav id="nav">
		<ul>				
			<li class="current">
				<a href="index.php">Inicio</a>
			</li>

			<li>
				<a id="nav_alumnos" href="#" onclick="loadContent(0, 3, 0);">Alumnos</a>
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