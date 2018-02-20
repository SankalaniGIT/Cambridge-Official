<div class="formCon">

<div class="formConInner">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'configurations-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php //echo $form->labelEx($model,'config_key'); ?>
        School / College Name </td>
    <td> <?php 
		$val_1 = $model->findByPk(1);
		echo CHtml::textField('collegename',$val_1->config_value,array()); ?></td>
    <td>School/College Address</td>
    <td><?php 
		$val_2 = $model->findByPk(2);
		echo CHtml::textField('address',$val_2->config_value,array()); ?></td>
  </tr>
  <tr>
    <td>School/College Phone </td>
    <td><?php 
		$val_3 = $model->findByPk(3);
		echo CHtml::textField('phone',$val_3->config_value,array()); ?></td>
    <td>Student Attendance Type</td>
    <td><?php 
		$val_4 = $model->findByPk(4);
		echo CHtml::dropDownlist('attentance','',array('Daily'=>'Daily','SubjectWise'=>'SubjectWise'),array('options'=>array($val_4->config_value=>array('selected'=>true)))); ?></td>
  </tr>
  <tr>
    <td>Finance year start date</td>
    <td> <?php 
		$val_5 = $model->findByPk(13);
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							
							'name'=>'startyear',
							'value'=>$val_5->config_value,
							// additional javascript options for the date picker plugin
							'options'=>array(
								'showAnim'=>'fold',
							),
							'htmlOptions'=>array(
								'style'=>'height:20px;'
							),
						)); ?></td>
    <td>Finance year end date</td>
    <td> <?php 
		$val_6 = $model->findByPk(14);
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							
							'name'=>'endyear',
							'value'=>$val_6->config_value,
							// additional javascript options for the date picker plugin
							'options'=>array(
								'showAnim'=>'fold',
							),
							'htmlOptions'=>array(
								'style'=>'height:20px;'
							),
						)); ?></td>
  </tr>
  <tr>
    <td>Language</td>
    <td> <?php 
		$val_7 = $model->findByPk(6);
		echo CHtml::textField('language',$val_7->config_value,array()); ?></td>
    <td>Currency Type</td>
    <td> <?php 
		$val_8 = $model->findByPk(5);
		echo CHtml::textField('currency',$val_8->config_value,array()); ?></td>
  </tr>
   <tr>
    <td>Upload Logo</td>
    <td> <?php 
		//echo CHtml::fileField('logo','',array()); ?>
        <div class="row">
<?php
$img=Logo::model()->findAll();
if(count($img)!=0)
{
	foreach($img as $img_1)
	{
	echo CHtml::link('Remove', array('Configurations/remove', 'id'=>$img_1->primaryKey));
	echo '<img class="imgbrder" src="'.$this->createUrl('Configurations/DisplaySavedImage&id='.$img_1->primaryKey).'" alt="'.$img_1->photo_file_name.'" width="100" height="100" />'; 	
	
	//echo CHtml::link('aaaaa',array('displaySavedImage','id'=>$img_1->primaryKey));
	}
}
else {
?>        
<?php //echo $form->labelEx($model,'uploadedFile'); ?>
<?php echo $form->fileField($logo,'uploadedFile'); ?>
<?php echo $form->error($logo,'uploadedFile'); } ?>
</div></td>
    <td>Network State</td>
    <td><?php 
		$val_9 = $model->findByPk(12);
		echo CHtml::dropDownlist('network','',array('Online'=>'Online','Offline'=>'Offline'),array('options'=>array($val_9->config_value=>array('selected'=>true)))); ?></td>
  </tr>

</table>

	<div class="row">

        <?php 
		echo CHtml::checkBox('admission_number',array('checked'=>'checked')); ?>
        Enable Auto increment Student admission no. 
       
        <?php 
		echo CHtml::checkBox('employee_number',array('checked'=>'checked')); ?>
         Enable Auto increment Employee no.
        
		<?php /*?><?php echo $form->textField($model,'config_key',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'config_key'); ?><?php */?>
	</div>

	<div class="row">
		<?php /*?><?php echo $form->labelEx($model,'config_value'); ?>
		<?php echo $form->textField($model,'config_value',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'config_value'); ?><?php */?>
	</div>

	<div style="padding:20px 0 0 0px; text-align:left">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'formbut','name'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->