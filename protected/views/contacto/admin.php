<?php
/* @var $this ContactoController */
/* @var $model Contacto */

$this->breadcrumbs=array(
	'Contactos'=>array('index'),
	'Reporte',
);

$this->menu=array(
	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contacto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Reporte Contactos</h1>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?><div class="row-fluid">
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
</div> <!-- row-fluid -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'itemsCssClass' => 'table table-striped table-bordered dataTable',
	'id'=>'contacto-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'id_corto',
		'cod_empleado',
		'cedula',
		'VP',
		'id_vp',
		'nom_contacto',
		/*
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
		*/
		array(
                    'class' => 'CButtonColumn',
                    'template' => '{view}',
                    'buttons' => array(
                        'view' => array(
                            'options' => array('style' => 'padding: none;'),
                        ),
                    ),
                ),
	),
)); ?>
