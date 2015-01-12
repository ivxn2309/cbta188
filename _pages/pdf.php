<section class="wrapper style6 container special shadow3">
	<div class="row">
		<div class="12u">
			<section>
				<header>
					<a class="button" href="#" onclick="document.getElementById('edit_cal').click();">Volver</a>
					<h2>Lista de grupo</h2>
				</header>
				<?php 
					$cls = $_POST['cls'];
					$usr = $_POST['usr'];
					$grp = $_POST['grp'];
					echo '<object width="100%" height="850" type="application/pdf" data="components/printCalifGroup.php?cls='.$cls.'&grp='.$grp.'&usr='.$usr.'">';
				?>
			</section>				
		</div>
	</div>
</section>