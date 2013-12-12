<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	$model->cod_empleado,
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
	array('label'=>'<i class="icon-pencil"></i> Editar', 'url'=>array('update', 'id'=>$model->cod_empleado)),
	array('label'=>'<i class="icon-trash"></i> Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_empleado),'confirm'=>'Está seguro de eliminar este ítem?')),
	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
);
?>

<h1>Detalles Contacto #<?php echo $model->cod_empleado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_corto',
		'cod_empleado',
		'cedula',
		'VP',
		'id_vp',
		'nom_contacto',
		'unidad',
		'id_unidad',
		'nom_servicio',
		'id_servicio',
		'Nivel',
		'id_Nivel',
		'canal_de_ingreso',
		'negocio',
		'mes',
		'grupo_de_inter',
		'telefono',
		'celular',
		'ext',
		'email',
		'fec_ini',
		'fec_fin',
		'División_de_personal',
		'id_División_de_personal',
		'ciudad',
		'variable1',
		'variable2',
		'variable3',
		'nom_empresa',
	),
)); ?>
