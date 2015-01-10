<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../components/Grupo.php";

$g = new Grupo();
$semestres = $g->getSemesters();
$amount = count($semestres);
?>
<section id="forms" class="wrapper style1 container special shadow3">
	<h2>Grupos Registrados en el Plantel.</h2>
	<div class="row">
		<!-- Formulario de logueo -->
		<div class="4u">
			<section style="margin: 20px" class="shadow3">
				<header>
					<h3>Grupos.</h3>
				</header>
				<?php for($i = 0; $i < $amount; $i++): ?>

					<?php echo "<div><b>".$semestres[$i]."</b></div>"; ?>
					<?php $grupos = $g->getGruposOf($semestres[$i]); ?>
					<?php $n = count($grupos); ?>
					<?php for($j = 0; $j < $n; $j++): ?>
						<a <?php echo "onclick='loadGroup(\"#alumnos_grupo\", \"".$grupos[$j][1]."\")'";?> class="button">
							<?php echo $grupos[$j][0]; ?>
						</a>
					<?php endfor; ?>
					<div><br></div>
				<?php endfor; ?>
			</section>				
		</div>
		<div class="8u">
			<section id="alumnos_grupo">
				<header>
					<h3>Alumnos</h3>
				</header>
				<p>Escoge un grupo de la izquierda para empezar</p>
			</section>
		</div>
	</div>
</section>