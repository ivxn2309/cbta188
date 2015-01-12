<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../components/Horario.php";
include_once "../components/Calificacion.php";

$user = $_POST['username'];
$hor = new Horario();
$cal = new Calificacion();

$calis = $cal->getAllOf($user);
$n = count($calis);
?>

<section class="wrapper style1 container special shadow3">
	<header>
	</header>
	<div class="row">
		<div class="12u">
			<section>
				<header>
					<h2>Mis calificaciones</h2>
					<h3>Estas son las calificaciones que tus docentes han registrado</h3>
				</header>
				<table border="1">
					<tr>
						<th>No. de Control</th><th>Materia</th><th>Docente</th><th>Calificación</th>
					</tr>
					<?php for($i = 0; $i < $n; $i++):?>
						<tr>
							<td><?php echo $user; ?></td>
							<td><?php echo $hor->getClassName($calis[$i][1]); ?></td>
							<td><?php echo $hor->getTeacherName($calis[$i][2]); ?></td>
							<td><?php echo $calis[$i][3]; ?></td>
						</tr>
					<?php endfor;?>
					<?php if( $n == 0 ):?>
						<tr>
							<td colspan="4">No se han registrado calificaciones aún</td>
						</tr>
					<?php endif;?>
				</table>
			</section>
		</div>
	</div>
	<div><br></div>
</section>

<div id="element_to_pop_up"></div>

<style type="text/css">
	th {
		background-color: gray;
		color:white;
	}

	tr {
		border-top-style: solid;
		border-top-width: 2px;
		border-top-color: gray;

		border-bottom-style: solid;
		border-bottom-width: 2px;
		border-bottom-color: gray;
	}

	#element_to_pop_up {
		background-color: rgba(255,255,255,0.8);
		padding: 20px 50px;
		display:none; 
	}

</style>