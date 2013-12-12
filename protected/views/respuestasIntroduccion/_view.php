<?php
/* @var $this RespuestasIntroduccionController */
/* @var $data RespuestasIntroduccion */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('p01_1_1')); ?>:</b>
	<?php echo CHtml::encode($data->p01_1_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p01_2_2')); ?>:</b>
	<?php echo CHtml::encode($data->p01_2_2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('p01_3_3')); ?>:</b>
	<?php echo CHtml::encode($data->p01_3_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p01_4_4')); ?>:</b>
	<?php echo CHtml::encode($data->p01_4_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p01_5_5')); ?>:</b>
	<?php echo CHtml::encode($data->p01_5_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p01_6_6')); ?>:</b>
	<?php echo CHtml::encode($data->p01_6_6); ?>
	<br />

	*/ ?>

</div>