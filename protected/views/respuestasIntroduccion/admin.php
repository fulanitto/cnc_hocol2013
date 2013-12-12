<?php
/* @var $this RespuestasIntroduccionController */
/* @var $model RespuestasIntroduccion */

$this->breadcrumbs=array(
	// 'Respuestas Introduccions'=>array('index'),
	'Reporte',
	);

// $this->menu=array(
// 	array('label'=>'<i class="icon-th-list"></i> Listar', 'url'=>array('index')),
// 	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
// 	);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
$('.search-form form').submit(function(){
	$('#respuestas-introduccion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
return false;
});
");
?>

<?php
if( isset( $excel_pendientes ) ){
	if( $excel_pendientes === true ){
		?>
		<h1>Pendientes</h1>

		<a href="<?php echo Yii::app()->createUrl('respuestasIntroduccion/avanceExcelPendientes'); ?>">

			<?php } ?>
			<?php } else { ?>
			<h1>Avance</h1>
			<a href="<?php echo Yii::app()->createUrl('respuestasIntroduccion/avanceExcel'); ?>">
				<?php } ?>
				<img src="<?php echo Yii::app()->baseUrl; ?>/images/Office-Excel-icon.png" alt="Exportar a Excel" class="pull-right ttp" title="Exportar a excel"/>

			</a>
			<br/>
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'itemsCssClass' => 'table table-striped table-bordered table-hover dataTable',
				'id'=>'respuestas-introduccion-grid',
				'dataProvider'=>$model->search(),
//	'filter'=>$model,
				'columns'=>array(
					'id_con',
					'nom_contacto',
					'email',
					'f1',
					'f2',
					'f3',
					'f4',
					'f5',
					'f6',
					'paraHacer',
					'tsinterminar',
					'tterminados',
		/*
		'p01_2_2',
		'p01_3_3',
		'p01_4_4',
		'p01_5_5',
		'p01_6_6',
		*/
		// array(
  //                   'class' => 'CButtonColumn',
  //                   'template' => '{view}',
  //                   'buttons' => array(
  //                       'view' => array(
  //                           'options' => array('style' => 'padding: none;'),
  //                       ),
  //                   ),
  //               ),
		),
		)); ?>
