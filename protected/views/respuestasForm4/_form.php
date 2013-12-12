<div class="row-fluid">
    <?php
    /* @var $this RespuestasForm4Controller */
    /* @var $model RespuestasForm4 */
    /* @var $form CActiveForm */
    ?>

    <div class="form">

        <?php $form=$this->beginWidget('JCActiveForm', array(
         'id'=>'respuestas-form4-form',
         'enableAjaxValidation'=>false,
         'errorMessageCssClass' => 'alert alert-error',
         )); ?>

         <?php echo $form->errorSummary($model, NULL, NULL, array('class'=>'alert alert-error')); ?>
         <legend>ACCESO AL PROCESO</legend>
         <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th><?php echo $form->labelEx($model,'pA01'); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?php echo $form->dropDownList($model,'pA01',Obrero::getEscalaAcceso()); ?></th>
                </tr>
            </tbody>
        </table>

        <div class="control-group">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <?php Obrero::printEscala1a10_n('En una escala de 1 a 10 donde 1 es malo y 10 es excelente…'); ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'pA02'); ?></td>
                        <?php echo $form->radioButtonList($model, 'pA02', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle;"><?php echo $form->labelEx($model,'pA03'); ?></td>
                        <td style="vertical-align: middle;" colspan="10"><?php echo $form->textArea($model,'pA03',array('rows'=>6, 'cols'=>50)); ?></td>
                    </tr>
                    <tr>
                        <?php Obrero::printEscala1a10_n('En una escala de 1 a 10 donde 1 es malo (No contar con el conocimiento necesario) y 10 es excelente (Contar con todo el conocimiento necesario)'); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'PA04'); ?></td>
                        <?php echo $form->radioButtonList($model, 'PA04', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <legend>EVALUACION DE LA GERENCIA Y SUS PROCESOS</legend>

        <div class="control-group">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <?php Obrero::printEscala1a10_n('Por favor califique los siguientes aspectos en una escala de 1 a 10 donde 1 es malo y 10 es excelente '); ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'pB01'); ?></td>
                        <?php echo $form->radioButtonList($model, 'pB01', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <td colspan="100">Más específicamente</td>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'pB02'); ?></td>
                        <?php echo $form->radioButtonList($model, 'pB02', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'pB03'); ?></td>
                        <?php echo $form->radioButtonList($model, 'pB03', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'pB04'); ?></td>
                        <?php echo $form->radioButtonList($model, 'pB04', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'pB05'); ?></td>
                        <?php echo $form->radioButtonList($model, 'pB05', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'pB06'); ?></td>
                        <?php echo $form->radioButtonList($model, 'pB06', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <?php Obrero::printEscala1a10_n('Cómo califica la calidad general del proceso de...'); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p01'); ?></td>
                        <?php echo $form->radioButtonList($model, 'p01', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p02'); ?></td>
                        <?php echo $form->radioButtonList($model, 'p02', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'p03'); ?></td>
                        <?php echo $form->radioButtonList($model, 'p03', Obrero::getEscala1a10(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <legend>RESULTADO FINAL DEL SERVICIO EN RELACIÓN A EXPECTATIVAS</legend>
        <div class="control-group">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <?php Obrero::printEscala1a3_n(''); ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 50%; background-color: #eeeeee; "><?php echo $form->labelEx($model, 'pC01'); ?></td>
                        <?php echo $form->radioButtonList($model, 'pC01', Obrero::getEscala1a3(), array('template' => '<td style="text-align: center; vertical-align: middle;"> {input} </td>', 'class' => 'inline', )); ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <legend>ANÁLISIS CUALITATIVO DE LO OCURRIDO</legend>
        <table class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <td style="vertical-align: middle;"><?php echo $form->labelEx($model,'pD01'); ?></td>
                    <td colspan="3" style="vertical-align: middle;"><?php echo $form->textArea($model,'pD01',array('rows'=>6, 'cols'=>50)); ?></td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"><?php echo $form->labelEx($model,'pD02'); ?></td>
                    <td colspan="3" style="vertical-align: middle;"><?php echo $form->textArea($model,'pD02',array('rows'=>6, 'cols'=>50)); ?></td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"><?php echo $form->labelEx($model,'pD03'); ?></td>
                    <td colspan="3" style="vertical-align: middle;"><?php echo $form->textArea($model,'pD03',array('rows'=>6, 'cols'=>50)); ?></td>
                </tr>
            </tbody>
        </table>

        <div class="control-group">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente' : 'Guardar', array('class' => 'btn')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->
</div>