<?php
/* @var $this RespuestasForm6Controller */
/* @var $model RespuestasForm6 */

$this->breadcrumbs=array(
	'Respuestas Form6s'=>array('index'),
	$model->id_con,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Editar', 'url'=>array('update', 'id'=>$model->id_con)),
	array('label'=>'<i class="icon-trash"></i> Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_con),'confirm'=>'Está seguro de eliminar este ítem?')),
	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
);
?>

<h1>Detalles RespuestasForm6 #<?php echo $model->id_con; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_con',
		'nom_contacto',
		'id_servicio',
		'servicio',
		'fecha_encuesta',
		'pA01',
		'pA02',
		'pA03',
		'PA04',
		'pB01',
		'pB02',
		'pB03',
		'pB04',
		'pB05',
		'pB06',
		'p01',
		'p02',
		'pC01',
		'Pc01_a',
		'Pc01_b',
		'pD01',
		'pD02',
		'pD03',
	),
)); ?>
