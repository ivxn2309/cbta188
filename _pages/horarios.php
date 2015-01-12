<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../components/Horario.php";

$user = $_POST['username'];
$hor = new Horario();
$grp = $hor->getMyGroup($user);
$clases = $hor->getGroupClasses($grp);
$n = count($clases);
?>

<section class="wrapper style1 container special shadow3">
	<header>
	</header>
	<div class="row">
		<div class="12u">
			<section>
				<header>
					<h2>Mis materias</h2>
					<h3>Estas son las materias que estarás recibiendo este semestre</h3>
				</header>
				<table border="1">
					<tr>
						<th>Docente</th><th>Grupo</th><th>Materia</th>
					</tr>
					<?php for($i = 0; $i < $n; $i++):?>
						<tr>
							<td>
								<a <?php echo "onclick='loadTeacherProfile(\"".$clases[$i][0]."\");'";?> href="#">
									<?php echo $hor->getTeacherName($clases[$i][0]); ?>
								</a>
							</td>
							<td><?php echo $hor->getGroupName($clases[$i][2]); ?></td>
							<td><?php echo $hor->getClassName($clases[$i][1]); ?></td>
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