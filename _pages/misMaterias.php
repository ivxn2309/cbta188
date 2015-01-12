<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../components/Horario.php";

$user = $_POST['username'];
$hor = new Horario();
$clases = $hor->getClassesOf($user);
$n = count($clases);
?>

<section class="wrapper style1 container special shadow3">
	<header>
	</header>
	<div class="row">
		<div class="12u">
			<section>
				<header>
					<h3>Mis materias</h3>
					<h2>Estas son las materias que usted estará impartiendo este semestre</h2>
				</header>
				<table>
					<tr>
						<th>Docente</th><th>Grupo</th><th>Materia</th><th></th>
					</tr>
					<?php for($i = 0; $i < $n; $i++):?>
						<tr>
							<td><?php echo $hor->getTeacherName($user); ?></td>
							<td><?php echo $hor->getGroupName($clases[$i][1]); ?></td>
							<td><?php echo $hor->getClassName($clases[$i][0]); ?></td>
						</tr>
					<?php endfor;?>
					<?php if( $n == 0 ):?>
						<tr>
							<td colspan="3">Usted no tiene registradas materias para este semestre</td>
						</tr>
					<?php endif;?>
				</table>
			</section>
		</div>
	</div>
	<div><br></div>
</section>