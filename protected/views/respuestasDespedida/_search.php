<?php
/* @var $this RespuestasDespedidaController */
/* @var $model RespuestasDespedida */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'id_con'); ?>
		<?php echo $form->textField($model,'id_con'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'nom_contacto'); ?>
		<?php echo $form->textField($model,'nom_contacto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_servicio'); ?>
		<?php echo $form->textField($model,'id_servicio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'servicio'); ?>
		<?php echo $form->textField($model,'servicio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'fecha_encuesta'); ?>
		<?php echo $form->textField($model,'fecha_encuesta'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'p01'); ?>
		<?php echo $form->textField($model,'p01',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'p02'); ?>
		<?php echo $form->textArea($model,'p02',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo CHtml::submitButton('Buscar', array('class' => 'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->