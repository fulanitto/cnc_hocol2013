<?php
/* @var $this ContactoController */
/* @var $model Contacto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="control-group">
		<?php echo $form->label($model,'id_corto'); ?>
		<?php echo $form->textField($model,'id_corto'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'cod_empleado'); ?>
		<?php echo $form->textField($model,'cod_empleado'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'VP'); ?>
		<?php echo $form->textField($model,'VP',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_vp'); ?>
		<?php echo $form->textField($model,'id_vp',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'nom_contacto'); ?>
		<?php echo $form->textField($model,'nom_contacto',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'unidad'); ?>
		<?php echo $form->textField($model,'unidad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_unidad'); ?>
		<?php echo $form->textField($model,'id_unidad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'nom_servicio'); ?>
		<?php echo $form->textField($model,'nom_servicio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_servicio'); ?>
		<?php echo $form->textField($model,'id_servicio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'Nivel'); ?>
		<?php echo $form->textField($model,'Nivel',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_Nivel'); ?>
		<?php echo $form->textField($model,'id_Nivel',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'canal_de_ingreso'); ?>
		<?php echo $form->textField($model,'canal_de_ingreso',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'negocio'); ?>
		<?php echo $form->textField($model,'negocio',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'mes'); ?>
		<?php echo $form->textField($model,'mes',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'grupo_de_inter'); ?>
		<?php echo $form->textField($model,'grupo_de_inter',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'ext'); ?>
		<?php echo $form->textField($model,'ext',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'fec_ini'); ?>
		<?php echo $form->textField($model,'fec_ini',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'fec_fin'); ?>
		<?php echo $form->textField($model,'fec_fin',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'División_de_personal'); ?>
		<?php echo $form->textField($model,'División_de_personal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'id_División_de_personal'); ?>
		<?php echo $form->textField($model,'id_División_de_personal',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'variable1'); ?>
		<?php echo $form->textField($model,'variable1',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'variable2'); ?>
		<?php echo $form->textField($model,'variable2',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'variable3'); ?>
		<?php echo $form->textField($model,'variable3',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="control-group">
		<?php echo $form->label($model,'nom_empresa'); ?>
		<?php echo $form->textField($model,'nom_empresa',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="control-group">
		<?php echo CHtml::submitButton('Buscar', array('class' => 'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->