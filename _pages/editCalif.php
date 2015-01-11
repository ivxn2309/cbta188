<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../components/Horario.php";
include_once "../components/Grupo.php";
include_once "../components/Calificacion.php";


$user = $_POST['username'];
$h = new Horario();
$clases = $h->getClassesOf($user);
$n = count($clases);
$cal = new Calificacion();
?>

<?php for($i = 0; $i < $n; $i++): ?>
<section id="forms" class="wrapper style1 container special shadow3">
	<header>
		<h1>
			<?php echo $h->getClassName($clases[$i][0]);?>
		</h1>
		<h2>
			<?php echo $h->getGroupName($clases[$i][1]);?>
		</h2>
	</header>
	<div class="row">
		<div class="12u">
			<section>
				<header><h3>Alumnos</h3></header>
				<?php
					$grp = new Grupo();
					$alumnos = $grp->getAlumnosOf($clases[$i][1]);
					$amount = count($alumnos);
				?>				
				<table>
					<tr>
						<th>No. Control</th><th>Nombre Completo</th><th>Promedio</th><th></th>
					</tr>
					<?php for($j = 0; $j < $amount; $j++):?>
						<tr>
							<td>
								<?php echo $alumnos[$j][0]; ?>
							</td>
							<td style="text-align:left;padding:1px 20px;">
								<?php echo $alumnos[$j][1]; ?>
							</td>
							<td>
								<input <?php echo "id='txtCal".$j."' value='".$cal->getCalificacion($alumnos[$j][0], $clases[$i][0], $user)."'"; ?> type="number" >
							</td>
							<td>
								<button class="button" <?php echo "onclick='setCalificacion(\"".$alumnos[$j][0]."\", \"".$user."\", \"".$clases[$i][0]."\", \"txtCal".$j."\");'"; ?> href="">Guardar</button>
							</td>
						</tr>
					<?php endfor;?>
				</table>
			</section>
		</div>
	</div>
	<div>
		<div class="12u special">
			<section>
				<a class="button" href="">Imprimir</a>
			</section>
		</div>
	</div>
	<div><br></div>
</section>
<?php endfor;?>


<style type="text/css">
	input[type="text"] {
		padding: 2px;
	}

	th {
		background-color: rgba(0,0,155,0.5);
		color:black;
	}

	td {
		background-color: rgba(155,155,155,0.5);
		color:black;
	}

	th, td {
		border: solid;
		border-width: 2px;
		border-color: white;
	}

	.button {
		padding: 2px;
		margin: 2px;
		font-size: .7em;
	}
</style>