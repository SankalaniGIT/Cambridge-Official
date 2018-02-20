<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'batches-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $form->labelEx($model,'name'); ?></td>
    <td width="5%">&nbsp;</td>
    <td><?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'start_date'); ?></td>
    <td>&nbsp;</td>
    <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'model'=>$model,
							'attribute'=>'start_date',
							// additional javascript options for the date picker plugin
							'options'=>array(
								'showAnim'=>'fold',
							),
							'htmlOptions'=>array(
								'style'=>'height:20px;'
							),
						)); ?>
		<?php echo $form->error($model,'start_date'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'end_date'); ?></td>
    <td>&nbsp;</td>
    <td><?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'model'=>$model,
							'attribute'=>'end_date',
							// additional javascript options for the date picker plugin
							'options'=>array(
								'showAnim'=>'fold',
							),
							'htmlOptions'=>array(
								'style'=>'height:20px;'
							),
						)); ?>
		<?php echo $form->error($model,'end_date'); ?></td>
  </tr>
</table>


	<div class="row">
		<?php //echo $form->labelEx($model,'course_id'); 
		?>
		<?php echo $form->hiddenField($model,'course_id',array('value'=>$val1)); ?>
		<?php echo $form->error($model,'course_id'); ?>
	</div>


	<div class="row">
		<?php //echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->hiddenField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'is_deleted'); ?>
		<?php echo $form->hiddenField($model,'is_deleted'); ?>
		<?php echo $form->error($model,'is_deleted'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->hiddenField($model,'employee_id',array('value'=>1)); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        <?php	
		echo CHtml::ajaxSubmitButton(Yii::t('job','Save'),CHtml::normalizeUrl(array('Batches/Addupdate&val1='.$batch_id,'render'=>false)),
		array('success'=>'js: function(data) { $("#jobDialog123").dialog("close"); window.location.reload();}',
		'error'=>'js:function(){  alert(\'error\'); }',),array('id'=>'closeJobDialog','name'=>'Submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->