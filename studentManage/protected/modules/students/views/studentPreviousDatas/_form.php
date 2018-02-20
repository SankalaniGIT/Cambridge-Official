<div class="wz-navWrapper">
	<ul>
    	<li class="fstep-Completed">1</li>
        <li class="sstep-Completed">2</li>
        <li class="tstep-Completed">3</li>
        <li class="fostep-Current">4</li>
        <li class="fistep">5</li>
    </ul>
<div class="clear"></div>
</div>
<div class="captionWrapper">
	<ul>
    	<li><h2>1.Student Details</h2><span>Admission Details</span></li>
        <li><h2>2.Parent Details</h2><span>Parent/Guardian Details</span></li>
        <li><h2>3.Emergency Contact</h2><span>Contact Address</span></li>
        <li><h2  class="cur">4.Previous Details</h2><span>Educational Details</span></li>
        <li class="last"><h2>5.Student Profile</h2><span>View Student Details</span></li>
    </ul>
</div>
<div class="formCon">
<h2><span>Step 4.</span> Previous Educational Details</h2>
<div class="formConInner">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-previous-datas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $form->labelEx($model,'institution'); ?></td>
    <td><?php echo $form->textField($model,'institution',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'institution'); ?></td>
    <td><?php echo $form->labelEx($model,'year'); ?></td>
    <td><?php echo $form->textField($model,'year',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'year'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'course'); ?></td>
    <td><?php echo $form->textField($model,'course',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'course'); ?></td>
    <td><?php echo $form->labelEx($model,'total_mark'); ?></td>
    <td><?php echo $form->textField($model,'total_mark',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'total_mark'); ?></td>
  </tr>
  
</table>

	<div class="row">
		<?php //echo $form->labelEx($model,'student_id'); ?>
		<?php echo $form->hiddenField($model,'student_id',array('value'=>$_REQUEST['id'])); ?>
		<?php echo $form->error($model,'student_id'); ?>
	</div>

	<div style="padding:40px 0 0 0px; text-align:center">
    <?php //echo CHtml::link('Save And Add Another', array('students/create'),array('class'=>'formbut','style'=>'padding:8px 20px')); ?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'SAVE' : 'Save',array('class'=>'formbut')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->