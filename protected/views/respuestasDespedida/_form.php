<div class="row-fluid">
  <?php
  /* @var $this RespuestasDespedidaController */
  /* @var $model RespuestasDespedida */
  /* @var $form CActiveForm */
  ?>

  <div class="form">

    <?php $form=$this->beginWidget('JCActiveForm', array(
     'id'=>'respuestas-despedida-form',
     'enableAjaxValidation'=>false,
     'errorMessageCssClass' => 'alert alert-error',
     )); ?>

     <?php echo $form->errorSummary($model, NULL, NULL, array('class'=>'alert alert-error')); ?>

     <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td><?php echo $form->labelEx($model,'p01'); ?></td>
          <td><?php echo $form->dropDownList($model,'p01',array(1=>'Sí',2=>'No'), array('empty'=>'Seleccione...')); ?></td>
        </tr>
                <!-- <tr><td colspan="2"><?php // echo $form->labelEx($model,'p02'); ?></td></tr>
                <tr><td colspan="2"><?php // echo $form->textArea($model,'p02',array('rows'=>6, 'cols'=>50)); ?></td></tr> -->
              </tbody>
            </table>

            <div class="alert">
              <p>Nuevamente quiero agradecerle su colaboración a nombre del Centro Nacional de Consultoría. Estamos seguros que sus respuestas ayudarán a mejorar los productos y servicios que recibe.</p>
            </div>

            <div class="control-group">
              <?php echo CHtml::submitButton($model->isNewRecord ? 'Finalizar' : 'Guardar', array('class' => 'btn')); ?>
            </div>

            <?php $this->endWidget(); ?>

          </div><!-- form -->
        </div>