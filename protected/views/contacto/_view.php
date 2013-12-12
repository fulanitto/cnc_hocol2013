<?php
/* @var $this ContactoController */
/* @var $data Contacto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_empleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_empleado), array('view', 'id'=>$data->cod_empleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_corto')); ?>:</b>
	<?php echo CHtml::encode($data->id_corto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VP')); ?>:</b>
	<?php echo CHtml::encode($data->VP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vp')); ?>:</b>
	<?php echo CHtml::encode($data->id_vp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->nom_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad')); ?>:</b>
	<?php echo CHtml::encode($data->unidad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->nom_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_servicio')); ?>:</b>
	<?php echo CHtml::encode($data->id_servicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nivel')); ?>:</b>
	<?php echo CHtml::encode($data->Nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Nivel')); ?>:</b>
	<?php echo CHtml::encode($data->id_Nivel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('canal_de_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->canal_de_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('negocio')); ?>:</b>
	<?php echo CHtml::encode($data->negocio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mes')); ?>:</b>
	<?php echo CHtml::encode($data->mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupo_de_inter')); ?>:</b>
	<?php echo CHtml::encode($data->grupo_de_inter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext')); ?>:</b>
	<?php echo CHtml::encode($data->ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fec_ini')); ?>:</b>
	<?php echo CHtml::encode($data->fec_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fec_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fec_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('División_de_personal')); ?>:</b>
	<?php echo CHtml::encode($data->División_de_personal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_División_de_personal')); ?>:</b>
	<?php echo CHtml::encode($data->id_División_de_personal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variable1')); ?>:</b>
	<?php echo CHtml::encode($data->variable1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variable2')); ?>:</b>
	<?php echo CHtml::encode($data->variable2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variable3')); ?>:</b>
	<?php echo CHtml::encode($data->variable3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_empresa')); ?>:</b>
	<?php echo CHtml::encode($data->nom_empresa); ?>
	<br />

	*/ ?>

</div>