<?php
/* @var $this RespuestaController */
/* @var $model Respuesta */

$this->breadcrumbs=array(
	'Respuestas'=>array('index'),
	'Tablero de indicador',
	);

// $this->menu=array(
// 	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
// 	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
// 	);
	?>
	<?php 
	$gerencias=Obrero::getGerencias();
	$totales=array_values($totales->attributes);
	$labelsGerencias=array_keys($efectivas->attributes);
	$efectivas=array_values($efectivas->attributes);
	?>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>Gerencias</th>
				<th>Totales</th>
				<th>Aplican</th>
				<th>Efectivas</th>
				<th>Indicador</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($gerencias as $key => $value): ?>
			<tr>
				<td><?php echo $gerencias[$key]; ?></td>
				<td><?php echo $totales[0]; ?></td>
				<td><?php echo $totales[$key]; ?></td>
				<td><?php echo $efectivas[$key]; ?></td>
				<?php 
				$topFour=ViewTableroControl::model()->calcularTopFour($labelsGerencias[$key]);
				echo '<td>'.$topFour.'%</td>';
				echo '<td style="text-align: center;"><img src="' . ViewTableroControl::model()->calcularSemaforo($topFour) . '" alt="semaforo" style="width:20px;"/></td>';
				?>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
