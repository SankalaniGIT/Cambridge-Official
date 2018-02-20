<div class="formCon">

<div class="formConInner">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-grades-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_hours_day'); ?>
		<?php echo $form->textField($model,'max_hours_day'); ?>
		<?php echo $form->error($model,'max_hours_day'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_hours_week'); ?>
		<?php echo $form->textField($model,'max_hours_week'); ?>
		<?php echo $form->error($model,'max_hours_week'); ?>
	</div>

	<div style="padding:20px 0 0 0px;">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'formbut')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->