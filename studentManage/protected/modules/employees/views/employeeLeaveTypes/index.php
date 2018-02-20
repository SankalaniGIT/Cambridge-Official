<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <?php $this->renderPartial('/employees/left_side');?>
    
    </td>
    <td valign="top">
    <div class="cont_right formWrapper">
    <h1>Employee Leave Types</h1><br />
    
    <div class="formCon">

<div class="formConInner">
    

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-leave-types-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table width="70%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $form->labelEx($model,'name'); ?></td>
    <td><?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?></td>
  
    <td><?php echo $form->labelEx($model,'code'); ?></td>
    <td><?php echo $form->textField($model,'code',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'code'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'max_leave_count'); ?></td>
    <td><?php echo $form->textField($model,'max_leave_count',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'max_leave_count'); ?></td>
 
    <td colspan="2" class="cr_align">
		<?php echo $form->checkBox($model,'carry_forward'); ?>
		<?php echo $form->error($model,'carry_forward'); ?>
        <?php echo $form->labelEx($model,'carry_forward'); ?>
        </td>
    
  </tr>
</table>


	<div class="cr_align">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->radioButtonList($model,'status',array('1'=>'Active','2'=>'Inactive'),array('separator'=>' ')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="clear"></div>
<br />
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'formbut')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<br />
<h3>Active Leave types</h3>
<div class="tableinnerlist">
<table width="80%">


<?php
$active=EmployeeLeaveTypes::model()->findAll("status=:x", array(':x'=>1));
foreach($active as $active_1)
{
   echo '<tr><td>'.$active_1->name.'</td>';	
   echo '<td>'.CHtml::link('Edit', array('update', 'id'=>$active_1->id)).'</td>';
    echo '<td>'.CHtml::link('Delete', array('update', 'id'=>$active_1->id)).'</td></tr>';
}
?>
</table>
</div>
<h3>Inactive Leave types</h3>
<div class="tableinnerlist">
<table width="80%">


<?php
$inactive=EmployeeLeaveTypes::model()->findAll("status=:x", array(':x'=>2));
foreach($inactive as $inactive_1)
{
   echo '<tr><td>'.$active_1->name.'</td>';	
   echo '<td>'.CHtml::link('Edit', array('update', 'id'=>$inactive_1->id)).'</td>';
    echo '<td>'.CHtml::link('Delete', array('update', 'id'=>$inactive_1->id)).'</td></tr>';
}
?>
</table>
</div>
</div>
</div>
</div>
    </td>
  </tr>
</table>