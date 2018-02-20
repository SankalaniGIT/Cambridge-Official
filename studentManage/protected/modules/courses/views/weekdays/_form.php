<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'weekdays-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		
        
        <?php 
		

$data = CHtml::listData(Courses::model()->findAll(array('order'=>'course_name DESC')),'id','course_name');

echo 'Course';
echo CHtml::dropDownList('cid','',$data,
array('prompt'=>'Select',
'ajax' => array(
'type'=>'POST',
'url'=>CController::createUrl('Weekdays/batch'),
'update'=>'#batch_id',
'data'=>'js:$(this).serialize()',
))); 
echo '&nbsp;&nbsp;&nbsp;';
echo 'Batch';

$data1 = CHtml::listData(Batches::model()->findAll(array('order'=>'name DESC')),'id','name');
echo CHtml::activeDropDownList($model,'batch_id',$data1,array('prompt'=>'Select','id'=>'batch_id')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weekday'); ?>
        
		<?php echo CHtml::checkBox('sunday','');?>Sunday
        <?php echo CHtml::checkBox('Monday','');?>Monday
        <?php echo CHtml::checkBox('Tuesday','');?>Tuesday
        <?php echo CHtml::checkBox('Wednesday','');?>Wednesday
        <?php echo CHtml::checkBox('Thursday','');?>Thursday
        <?php echo CHtml::checkBox('Friday','');?>Friday
        <?php echo CHtml::checkBox('Saturday','');?>Saturday
		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->