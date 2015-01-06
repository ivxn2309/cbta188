<div class="inner shadow3">
	<header>
		<h2>C.B.T.a 188</h2>
	</header>

	<?php if($isUser == 1):?>
		<p>
			Bienvenido<br>
			<?php echo $_SESSION['nombre']; ?>.<br>
			Eres un alumno del plantel.
		</p>
	<?php else:?>
		<?php if($isUser == 2):?>
			<p>
				Bienvenido<br>
				<?php echo $_SESSION['doc_name']; ?>.<br>
				Usted es un docente.
			</p>
		<?php else:?>
			<p>
				Bienvenido a la página oficial<br>
				del plantel educativo.<br>
				Villanueva Zac.
			</p>
		<?php endif;?>
	<?php endif;?>

	<footer>
		<ul class="buttons vertical">
			<li><a href="#main" class="button fit scrolly">Iniciar</a></li>
		</ul>
	</footer>
</div>