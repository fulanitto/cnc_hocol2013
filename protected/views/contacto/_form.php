<div class="row-fluid">
        <?php
    /* @var $this ContactoController */
    /* @var $model Contacto */
    /* @var $form CActiveForm */
    ?>

    <div class="form">

        <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacto-form',
	'enableAjaxValidation'=>false,
        'errorMessageCssClass' => 'alert alert-error',
)); ?>

        <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

        <?php echo $form->errorSummary($model, NULL, NULL, array('class'=>'alert alert-error')); ?>

                    <div class="control-group">
                <?php echo $form->labelEx($model,'id_corto'); ?>
                <?php echo $form->textField($model,'id_corto'); ?>
                <?php echo $form->error($model,'id_corto'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'cod_empleado'); ?>
                <?php echo $form->textField($model,'cod_empleado'); ?>
                <?php echo $form->error($model,'cod_empleado'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'cedula'); ?>
                <?php echo $form->textField($model,'cedula',array('size'=>50,'maxlength'=>50)); ?>
                <?php echo $form->error($model,'cedula'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'VP'); ?>
                <?php echo $form->textField($model,'VP',array('size'=>50,'maxlength'=>50)); ?>
                <?php echo $form->error($model,'VP'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'id_vp'); ?>
                <?php echo $form->textField($model,'id_vp',array('size'=>50,'maxlength'=>50)); ?>
                <?php echo $form->error($model,'id_vp'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'nom_contacto'); ?>
                <?php echo $form->textField($model,'nom_contacto',array('size'=>60,'maxlength'=>200)); ?>
                <?php echo $form->error($model,'nom_contacto'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'unidad'); ?>
                <?php echo $form->textField($model,'unidad',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'unidad'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'id_unidad'); ?>
                <?php echo $form->textField($model,'id_unidad',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'id_unidad'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'nom_servicio'); ?>
                <?php echo $form->textField($model,'nom_servicio',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'nom_servicio'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'id_servicio'); ?>
                <?php echo $form->textField($model,'id_servicio',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'id_servicio'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'Nivel'); ?>
                <?php echo $form->textField($model,'Nivel',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'Nivel'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'id_Nivel'); ?>
                <?php echo $form->textField($model,'id_Nivel',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->error($model,'id_Nivel'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'canal_de_ingreso'); ?>
                <?php echo $form->textField($model,'canal_de_ingreso',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'canal_de_ingreso'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'negocio'); ?>
                <?php echo $form->textField($model,'negocio',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'negocio'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'mes'); ?>
                <?php echo $form->textField($model,'mes',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'mes'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'grupo_de_inter'); ?>
                <?php echo $form->textField($model,'grupo_de_inter',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'grupo_de_inter'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'telefono'); ?>
                <?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'telefono'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'celular'); ?>
                <?php echo $form->textField($model,'celular',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'celular'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'ext'); ?>
                <?php echo $form->textField($model,'ext',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'ext'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>400)); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'fec_ini'); ?>
                <?php echo $form->textField($model,'fec_ini',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'fec_ini'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'fec_fin'); ?>
                <?php echo $form->textField($model,'fec_fin',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'fec_fin'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'División_de_personal'); ?>
                <?php echo $form->textField($model,'División_de_personal',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'División_de_personal'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'id_División_de_personal'); ?>
                <?php echo $form->textField($model,'id_División_de_personal',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->error($model,'id_División_de_personal'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'ciudad'); ?>
                <?php echo $form->textField($model,'ciudad',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->error($model,'ciudad'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'variable1'); ?>
                <?php echo $form->textField($model,'variable1',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->error($model,'variable1'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'variable2'); ?>
                <?php echo $form->textField($model,'variable2',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->error($model,'variable2'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'variable3'); ?>
                <?php echo $form->textField($model,'variable3',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->error($model,'variable3'); ?>
            </div>

                        <div class="control-group">
                <?php echo $form->labelEx($model,'nom_empresa'); ?>
                <?php echo $form->textField($model,'nom_empresa',array('size'=>60,'maxlength'=>100)); ?>
                <?php echo $form->error($model,'nom_empresa'); ?>
            </div>

                    <div class="control-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>