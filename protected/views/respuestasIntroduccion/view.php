<?php
/* @var $this RespuestasIntroduccionController */
/* @var $model RespuestasIntroduccion */

$this->breadcrumbs=array(
	'Respuestas Introduccions'=>array('index'),
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

<h1>Detalles RespuestasIntroduccion #<?php echo $model->id_con; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_con',
		'nom_contacto',
		'id_servicio',
		'servicio',
		'fecha_encuesta',
		'p01_1_1',
		'p01_2_2',
		'p01_3_3',
		'p01_4_4',
		'p01_5_5',
		'p01_6_6',
	),
)); ?>
