<?php
/* @var $this RespuestasDespedidaController */
/* @var $data RespuestasDespedida */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_con')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_con), array('view', 'id'=>$data->id_con)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nom_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servicio')); ?>:</b>
	<?php echo CHtml::encode($data->servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_encuesta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_encuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p01')); ?>:</b>
	<?php echo CHtml::encode($data->p01); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p02')); ?>:</b>
	<?php echo CHtml::encode($data->p02); ?>
	<br />


</div>