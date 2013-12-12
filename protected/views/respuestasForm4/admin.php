<?php
/* @var $this RespuestasForm4Controller */
/* @var $model RespuestasForm4 */

$this->breadcrumbs=array(
	'Respuestas Form4s'=>array('index'),
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
	$('#respuestas-form4-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Reporte Respuestas Form4s</h1>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?><div class="row-fluid">
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
</div> <!-- row-fluid -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'itemsCssClass' => 'table table-striped table-bordered dataTable',
	'id'=>'respuestas-form4-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'id_con',
		'nom_contacto',
		'id_servicio',
		'servicio',
		'fecha_encuesta',
		'pA01',
		/*
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
		'p03',
		'pC01',
		'Pc01_a',
		'Pc01_b',
		'Pc01_c',
		'pD01',
		'pD02',
		'pD03',
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
