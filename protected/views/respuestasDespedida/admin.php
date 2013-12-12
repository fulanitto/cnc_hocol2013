<?php
/* @var $this RespuestasDespedidaController */
/* @var $model RespuestasDespedida */

$this->breadcrumbs=array(
	'Respuestas Despedidas'=>array('index'),
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
	$('#respuestas-despedida-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Reporte Respuestas Despedidas</h1>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?><div class="row-fluid">
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
</div> <!-- row-fluid -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'itemsCssClass' => 'table table-striped table-bordered dataTable',
	'id'=>'respuestas-despedida-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'id_con',
		'nom_contacto',
		'id_servicio',
		'servicio',
		'fecha_encuesta',
		'p01',
		/*
		'p02',
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
