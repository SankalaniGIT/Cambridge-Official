<div class="formCon">

<div class="formConInner">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'courses-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <h3>Course</h3>
<table width="60%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $form->labelEx($model,'course_name'); ?></td>
    <td><?php echo $form->textField($model,'course_name',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'course_name'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'code'); ?></td>
    <td><?php echo $form->textField($model,'code',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'code'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'section_name'); ?></td>
    <td><?php echo $form->textField($model,'section_name',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'section_name'); ?></td>
  </tr>
 
</table>

	<div class="row">
		<?php //echo $form->labelEx($model,'is_deleted'); ?>
		<?php echo $form->hiddenField($model,'is_deleted'); ?>
		<?php echo $form->error($model,'is_deleted'); ?>
	</div>

	<div class="row">
   
		<?php //echo $form->labelEx($model,'created_at'); ?>
   <?php     if(Yii::app()->controller->action->id == 'create')
	{
		 echo $form->hiddenField($model,'created_at',array('value'=>date('Y-m-d'))); 
	}
	else
	{
		 echo $form->hiddenField($model,'created_at'); 
	}
		 ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->hiddenField($model,'updated_at',array('value'=>date('Y-m-d'))); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

   <br />
    <?php 
	 if(Yii::app()->controller->action->id == 'create')
		{
		?>
    <h3>Batch</h3>
    <!-- Batch Form -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="15.1%"><?php echo $form->labelEx($model_1,'name'); ?></td>
        <td><?php echo $form->textField($model_1,'name',array('size'=>40,'maxlength'=>255)); ?>
		<?php echo $form->error($model_1,'name'); ?></td>
      </tr>
    </table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  width="15.1%"><?php echo $form->labelEx($model_1,'start_date'); ?></td>
   <td> <?php //echo $form->textField($model_1,'start_date');
   				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'model'=>$model_1,
							'attribute'=>'start_date',
							// additional javascript options for the date picker plugin
							'options'=>array(
								'showAnim'=>'fold',
							),
							'htmlOptions'=>array(
								'style'=>'height:20px;'
							),
						));
    ?>
		<?php echo $form->error($model_1,'start_date'); ?></td>
  </tr>
  <tr>
    <td  width="15.1%"><?php echo $form->labelEx($model_1,'end_date'); ?></td>
    <td><?php //echo $form->textField($model_1,'end_date');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							'model'=>$model_1,
							'attribute'=>'end_date',
							// additional javascript options for the date picker plugin
							'options'=>array(
								'showAnim'=>'fold',
							),
							'htmlOptions'=>array(
								'style'=>'height:20px;'
							),
						));
	 ?>
		<?php echo $form->error($model_1,'end_date'); ?></td>
  </tr>
</table>

	<div class="row">
		<?php /*?><?php echo $form->labelEx($model_1,'course_id'); ?><?php */?>
		<?php echo $form->hiddenField($model_1,'course_id',array('value'=>0)); ?>
		<?php echo $form->error($model_1,'course_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model_1,'is_active'); ?>
		<?php echo $form->hiddenField($model_1,'is_active'); ?>
		<?php echo $form->error($model_1,'is_active'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model_1,'is_deleted'); ?>
		<?php echo $form->hiddenField($model_1,'is_deleted'); ?>
		<?php echo $form->error($model_1,'is_deleted'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model_1,'employee_id'); ?>
		<?php echo $form->hiddenField($model_1,'employee_id',array('value'=>1)); ?>
		<?php echo $form->error($model_1,'employee_id'); ?>
	</div>
    <?php
		}
		?>
    
    <!-- Batch Form Ends -->
	<div style="padding:20px 0 0 0px; text-align:left">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('class'=>'formbut')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->