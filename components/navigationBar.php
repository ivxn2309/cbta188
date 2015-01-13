<?php if($isUser == 1):?>

<nav id="nav">
	<ul>				
		<li class="current">
			<a href="index.php">Inicio</a>
		</li>

		<li>
			<a <?php echo 'href="javascript:loadContent(0, 11, 1, \''.$_SESSION['nocontrol'].'\');"';?> >Mis materias</a>
		</li>

		<li>
			<a <?php echo 'href="javascript:loadContent(0, 12, 1, \''.$_SESSION['nocontrol'].'\');"';?>>Calificaciones</a>
		</li>
		
		<li class="submenu">
			<a href=""><?php echo $_SESSION['email'];?></a>
			<ul>
				<li><a href="" id="cerrar" onclick="closeSession();">Cerrar Sesión</a></li>
			</ul>
		</li>

	</ul>
</nav>

<?php else:?>

	<?php if($isUser == 2):?>
	<nav id="nav">
		<ul>
			<?php $user = $_SESSION["doc_user"];?>
			<li class="current">
				<a href="index.php">Inicio</a>
			</li>

			<li>
				<?php $action = "'javascript:loadContent(0, 8, 2);'";?>
				<a href=<?php echo $action; ?> >Todos los Grupos</a>
			</li>

			<li>
				<a <?php echo 'href="javascript:loadContent(0, 10, 2, \''.$_SESSION['doc_user'].'\');"';?> >Mis Materias</a>
			</li>

			<li>
				<a id="edit_cal" <?php echo 'href="javascript:loadContent(0, 9, 2, \''.$_SESSION['doc_user'].'\');"';?> >Editar Calificaciones</a>
			</li>
			
			<li class="submenu">
				<a href=""><?php echo $_SESSION['doc_user'];?></a>
				<ul>
					<li><a <?php echo 'href="loadContent(0, 7, 2, \''.$_SESSION['doc_user'].'\');"';?> >Editar Perfil</a></li>
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
				<?php $action = "'javascript:loadContent(0, 3, 0);'";?>
				<a id="nav_alumnos" href=<?php echo $action;?> >Alumnos</a>
			</li>

			<li>
				<?php $action = "'javascript:loadContent(0, 4, 0);'";?>
				<a href=<?php echo $action;?> >Docentes</a>
			</li>
			<li>
				<?php $action = "'javascript:loadContent(0, 3, 0);'";?>
				<a href=<?php echo $action; ?> class="button special scrolly">Registrar</a>
			</li>
		</ul>
	</nav>
	<?php endif;?>
<?php endif;?>