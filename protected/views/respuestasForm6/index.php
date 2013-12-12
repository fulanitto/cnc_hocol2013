<?php
/* @var $this RespuestasForm6Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Respuestas Form6s',
);

$this->menu=array(
	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
);
?>

<h1>Respuestas Form6s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
