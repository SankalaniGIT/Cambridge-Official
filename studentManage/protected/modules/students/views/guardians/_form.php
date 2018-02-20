<?php if(!Yii::app()->controller->action->id=='update') { ?>
<div class="wz-navWrapper">
	<ul>
    	<li class="fstep-Completed">1</li>
        <li class="sstep-Current">2</li>
        <li class="tstep">3</li>
        <li class="fostep">4</li>
        <li class="fistep">5</li>
    </ul>
<div class="clear"></div>
</div>
<div class="captionWrapper">
	<ul>
    	<li><h2>1.Student Details</h2><span>Admission Details</span></li>
        <li><h2 class="cur">2.Parent Details</h2><span>Parent/Guardian Details</span></li>
        <li><h2>3.Emergency Contact</h2><span>Contact Address</span></li>
        <li><h2>4.Previous Details</h2><span>Educational Details</span></li>
        <li class="last"><h2>5.Student Profile</h2><span>View Student Details</span></li>
    </ul>
</div>
<?php } ?>
<div class="formCon">
<h2><?php if(!Yii::app()->controller->action->id=='update') { ?><span>Step 2.</span> <?php } ?> Parent/guardian details</h2>
<div class="formConInner">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guardians-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<h3>Parent - Personal Details</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $form->labelEx($model,'first_name'); ?></td>
    <td><?php echo $form->textField($model,'first_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?></td>
    <td><?php echo $form->labelEx($model,'last_name'); ?></td>
    <td><?php echo $form->textField($model,'last_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?></td>
  </tr>
 
  <tr>
    <td><?php echo $form->labelEx($model,'relation'); ?></td>
    <td><?php echo $form->textField($model,'relation',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'relation'); ?></td>
     <td>	<?php echo $form->labelEx($model,'Date of Birth'); ?></td>
    <td>	<?php //echo $form->textField($model,'dob');
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'name'=>'dob',
								'model'=>$model,
								// additional javascript options for the date picker plugin
								'options'=>array(
									'showAnim'=>'fold',
									'dateFormat'=>'dd/mm/yy',
									'changeMonth'=> true,
									'changeYear'=>true,
									'yearRange'=>'1900:'
								),
								'htmlOptions'=>array(
									/*'style'=>'height:0px;'*/
								),
							));
		 ?>
		<?php echo $form->error($model,'dob'); ?></td>
  </tr>
   <tr>
  	
    <td><?php echo $form->labelEx($model,'education'); ?>
		</td>
    <td><?php echo $form->textField($model,'education',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'education'); ?></td>
       <td><?php echo $form->labelEx($model,'occupation'); ?>
		</td>
    <td><?php echo $form->textField($model,'occupation',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'occupation'); ?></td>
  </tr>
  <tr>
    
    <td><?php echo $form->labelEx($model,'income'); ?>
		</td>
    <td><?php echo $form->textField($model,'income',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'income'); ?></td>
        <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>
<h3>Parent - Contact Details</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php echo $form->labelEx($model,'email'); ?></td>
    <td><?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?></td>
    <td><?php echo $form->labelEx($model,'office_phone1'); ?></td>
    <td><?php echo $form->textField($model,'office_phone1',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'office_phone1'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'office_phone2'); ?></td>
    <td><?php echo $form->textField($model,'office_phone2',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'office_phone2'); ?></td>
    <td><?php echo $form->labelEx($model,'mobile_phone'); ?></td>
    <td><?php echo $form->textField($model,'mobile_phone',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile_phone'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'office_address_line1'); ?></td>
    <td><?php echo $form->textField($model,'office_address_line1',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'office_address_line1'); ?></td>
    <td><?php echo $form->labelEx($model,'office_address_line2'); ?></td>
    <td><?php echo $form->textField($model,'office_address_line2',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'office_address_line2'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'city'); ?></td>
    <td><?php echo $form->textField($model,'city',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city'); ?></td>
    <td><?php echo $form->labelEx($model,'state'); ?></td>
    <td><?php echo $form->textField($model,'state',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'state'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'country_id'); ?></td>
    <td><?php echo $form->dropDownList($model,'country_id',CHtml::listData(Countries::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'country_id'); ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

	<div class="row">
		<?php //echo $form->labelEx($model,'ward_id'); ?>
        <?php if(Yii::app()->controller->action->id=='create') { ?>
		<?php echo $form->hiddenField($model,'ward_id',array('value'=>$_REQUEST['id']));
		}
		else
		 echo $form->hiddenField($model,'ward_id',array('value'=>$_REQUEST['std']));
		 ?>
		<?php echo $form->error($model,'ward_id'); ?>
	</div>


	<div class="row">
		<?php //echo $form->labelEx($model,'created_at'); ?>
         <?php  if(Yii::app()->controller->action->id == 'create')
		{
		 echo $form->hiddenField($model,'created_at',array('value'=>date('d-m-Y')));
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
		<?php echo $form->hiddenField($model,'updated_at',array('value'=>date('d-m-Y'))); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div style="padding:20px 0 0 0px; text-align:center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Next Step »' : 'Save',array('class'=>'formbut')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->