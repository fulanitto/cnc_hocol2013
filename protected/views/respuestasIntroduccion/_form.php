<div class="row-fluid">
    <?php
    /* @var $this RespuestasIntroduccionController */
    /* @var $model RespuestasIntroduccion */
    /* @var $form CActiveForm */
    ?>

    <div class="form">

        <?php $form=$this->beginWidget('CActiveForm', array(
           'id'=>'respuestas-introduccion-form',
           'enableAjaxValidation'=>false,
           'errorMessageCssClass' => 'alert alert-error',
           )); ?>

           <?php echo $form->errorSummary($model, NULL, NULL, array('class'=>'alert alert-error')); ?>
           <legend>INTRODUCCIÓN INTERNET</legend>
           <div class="alert alert-info">
            <p>Gracias por su tiempo y por confiar.</p>
            <p>Lo invitamos a compartir su punto de vista sobre los servicios y áreas con las que tiene contacto o ha tenido contacto en Hocol, su opinión permitirá iniciar cambios y nuevos retos a esta organización.</p>
            <p>Su información personal es confidencial a menos que autorice a compartirla.</p>  
            <p>Para cualquier inquietud puede comunicarse con el Centro Nacional de Consultoría o enviar un mail a asalazar@cnccol.com</p>
        </div>
        <!-- <legend>Gerencias con las que tiene contacto</legend> -->
        <table class="table table-striped table-bordered table-striped">
            <thead>
                <tr>
                    <th colspan="2">Seleccione las Gerencias con las que tiene o ha tenido contacto este año</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $form->labelEx($model,'p01_1_1'); ?></td>        
                    <td>
                        <?php echo $form->CheckBox($model,'p01_1_1'); ?>
                        <?php echo $form->error($model,'p01_1_1'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model,'p01_2_2'); ?></td>        
                    <td>
                        <?php echo $form->CheckBox($model,'p01_2_2'); ?>
                        <?php echo $form->error($model,'p01_2_2'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model,'p01_3_3'); ?></td>        
                    <td>
                        <?php echo $form->CheckBox($model,'p01_3_3'); ?>
                        <?php echo $form->error($model,'p01_3_3'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model,'p01_4_4'); ?></td>        
                    <td>
                        <?php echo $form->CheckBox($model,'p01_4_4'); ?>
                        <?php echo $form->error($model,'p01_4_4'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model,'p01_5_5'); ?></td>        
                    <td>
                        <?php echo $form->CheckBox($model,'p01_5_5'); ?>
                        <?php echo $form->error($model,'p01_5_5'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model,'p01_6_6'); ?></td>        
                    <td>
                        <?php echo $form->CheckBox($model,'p01_6_6'); ?>
                        <?php echo $form->error($model,'p01_6_6'); ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <p><i>Nota: El programa solo le permitirá calificar aquellas gerencias con las que tiene o ha tenido contacto.</i></p>

        <div class="control-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente' : 'Guardar', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>