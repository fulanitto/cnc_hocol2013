<?php
/* @var $this RespuestasForm4Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Respuestas Form4s',
);

$this->menu=array(
	array('label'=>'<i class="icon-plus-sign"></i> Crear', 'url'=>array('create')),
	array('label'=>'<i class="icon-list-alt"></i> Reporte', 'url'=>array('admin')),
);
?>

<h1>Respuestas Form4s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
