<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../components/Grupo.php";
$clave = $_POST['grupo'];
$g = new Grupo();
$alumnos = $g->getAlumnosOf($clave);
$amount = count($alumnos);
$grp = $g->getGroup($clave);
?>

<header>
	<h3>Alumnos de <?php echo $grp[0] . ", " . $grp[1]; ?></h3>
</header>

<table class="shadow3">
	<tr>
		<th>No. Control</th><th>Nombre Completo</th>
	</tr>
	<?php for($i = 0; $i < $amount; $i++):?>
		<tr>
			<td><?php echo $alumnos[$i][0]; ?></td>
			<td style="text-align:left;padding-left:10px;"><?php echo $alumnos[$i][1]; ?></td>
		</tr>
	<?php endfor;?>
	<?php if( $amount == 0 ): ?>
		<tr>
			<td colspan="2">No hay alumnos registrados en este grupo</td>
		</tr>
	<?php endif; ?>
</table>

<style type="text/css">
	th {
		background-color: rgba(0,0,155,0.5);
		color:white;
	}

	td {
		background-color: rgba(155,155,155,0.5);
		color:black;
	}

	th, td {
		border-left: solid;
		border-left-width: 4px;

		border-right: solid;
		border-right-width: 4px;

		border-top: solid;
		border-top-width: 1px;
		border-bottom-width: 1px;
	}
</style>