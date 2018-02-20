<?php if(Yii::app()->controller->action->id=='create') { ?>
<div class="wz-navWrapper" style="width:22%">
	<ul>
    	<li class="fstep-Current">1</li>
        <li class="sstep">2</li>
        
    </ul>
<div class="clear"></div>
</div>
<div class="captionWrapper" >
	<ul>
    	<li><h2  class="cur">1.Employee Admission</h2><span>General Details</span></li>
        <li><h2>2.Employee Admission</h2><span>General Details</span></li>
        
    </ul>
</div>
<?php }
else { echo '<br><br>'; }
 ?>
<div class="formCon">
<h2><span>Step 1.</span> Employee Admission</h2>
<div class="formConInner">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employees-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<h3>General Details</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
	<?php
		$emp_id_1= '';
	 if(Yii::app()->controller->action->id=='create')
			{
			$emp_id	= Employees::model()->findAll(array('order' => 'id DESC','limit' => 1));
			if($emp_id==NULL)
			{
				$emp_id_1 = '1';
			}
			else
			{
			$emp_id_1=$emp_id[0]['id']+1;
			}
			}?>
	<?php echo $form->labelEx($model,'employee_number'); ?></td>
    <td><?php echo $form->textField($model,'employee_number',array('size'=>30,'maxlength'=>255,'value'=>'E'.$emp_id_1)); ?>
		<?php echo $form->error($model,'employee_number'); ?></td>
    
    <td><?php echo $form->labelEx($model,'joining_date'); ?></td>
    <td><?php //echo $form->textField($model,'joining_date',array('size'=>30,'maxlength'=>255));
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							//'name'=>'Employees[joining_date]',
							'attribute'=>'joining_date',
							'model'=>$model,
							// additional javascript options for the date picker plugin
							'options'=>array(
								'showAnim'=>'fold',
								'dateFormat'=>'dd-mm-yy',
								'changeMonth'=> true,
									'changeYear'=>true,
									'yearRange'=>'1900:'
							),
							'htmlOptions'=>array(
								//'style'=>'height:20px;'
							),
						))
	
	 ?>
		<?php echo $form->error($model,'joining_date'); ?></td>
   
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'first_name'); ?></td>
    <td><?php echo $form->textField($model,'first_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?></td>
   
    <td><?php echo $form->labelEx($model,'middle_name'); ?></td>
    <td><?php echo $form->textField($model,'middle_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'middle_name'); ?></td>
    
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'last_name'); ?></td>
    <td><?php echo $form->textField($model,'last_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?></td>
    
  	<td><?php echo $form->labelEx($model,'gender'); ?></td>
    <td><?php //echo $form->textField($model,'gender',array('size'=>30,'maxlength'=>255)); ?>
     <?php echo $form->dropDownList($model,'gender',array('M' => 'Male', 'F' => 'Female'),array('empty' => 'Select a gender')); ?>
		<?php echo $form->error($model,'gender'); ?></td>
     
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'date_of_birth'); ?></td>
    <td><?php //echo $form->textField($model,'date_of_birth',array('size'=>30,'maxlength'=>255));
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
							//'name'=>'Employees[date_of_birth]',
							'attribute'=>'date_of_birth',
							'model'=>$model,
							// additional javascript options for the date picker plugin
							'options'=>array(
								'showAnim'=>'fold',
								'dateFormat'=>'dd-mm-yy',
								'changeMonth'=> true,
									'changeYear'=>true,
									'yearRange'=>'1900:'
							),
							'htmlOptions'=>array(
								//'style'=>'height:20px;'
							),
						))
	 ?>
		<?php echo $form->error($model,'date_of_birth'); ?></td>
   
    <td><?php echo $form->labelEx($model,'employee_department_id'); ?></td>
    <td><?php echo $form->dropDownList($model,'employee_department_id',CHtml::listData(EmployeeDepartments::model()->findAll(),'id','name'),array('empty' => 'Select Department')); ?>
		<?php echo $form->error($model,'employee_department_id'); ?></td>
   
  </tr>
  <tr>
  	<td><?php echo $form->labelEx($model,'employee_position_id'); ?></td>
    <td><?php echo $form->dropDownList($model,'employee_position_id',CHtml::listData(EmployeePositions::model()->findAll(),'id','name'),array('empty' => 'Select Department')); ?>
		<?php echo $form->error($model,'employee_position_id'); ?></td>
    
  	<td><?php echo $form->labelEx($model,'employee_category_id'); ?></td>
    <td><?php echo $form->dropDownList($model,'employee_category_id',CHtml::listData(EmployeeCategories::model()->findAll(),'id','name'),array('empty' => 'Select Department')); ?>
		<?php echo $form->error($model,'employee_category_id'); ?></td>
    
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'employee_grade_id'); ?></td>
    <td><?php echo $form->dropDownList($model,'employee_grade_id',CHtml::listData(EmployeeGrades::model()->findAll(),'id','name'),array('empty' => 'Select Department')); ?>
		<?php echo $form->error($model,'employee_grade_id'); ?></td>
    
    <td><?php echo $form->labelEx($model,'job_title'); ?></td>
    <td><?php echo $form->textField($model,'job_title',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'job_title'); ?></td>
  
  </tr>
    
  <tr>
  	<td><?php echo $form->labelEx($model,'qualification'); ?></td>
    <td><?php echo $form->textField($model,'qualification',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'qualification'); ?></td>
    <td><?php echo $form->labelEx($model,'status'); ?></td>
    <td><?php echo $form->textField($model,'status',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'status'); ?></td>
  </tr>
    <tr>
    <td><?php echo $form->labelEx($model,'total_experience'); ?></td>
    <td>
    <table width="80%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><?php echo $form->dropDownList($model,'experience_year',array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5
																			  ,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10,'11'=>11
																			  ,'12'=>12,'13'=>13,'14'=>14,'15'=>15,'16'=>16,'17'=>17
																			  ,'18'=>18,'19'=>19,'20'=>20)); ?>
		<?php echo $form->error($model,'experience_year'); ?></td>
            <td><?php echo $form->dropDownList($model,'experience_month',array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,
																				'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10,'11'=>11,)); ?>
		<?php echo $form->error($model,'experience_month'); ?></td>
          </tr>
        </table>

	</td>
    
    <td><?php echo $form->labelEx($model,'experience_detail'); ?></td>
    <td><?php echo $form->textArea($model,'experience_detail',array('rows'=>6, 'cols'=>30)); ?>
		<?php echo $form->error($model,'experience_detail'); ?></td>
    
  </tr>
  
   
</table>
<h3>Personal Details</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
    <td><?php echo $form->labelEx($model,'marital_status'); ?></td>
    <td><?php echo $form->dropDownList($model,'marital_status',array('Single'=>'Single','Married'=>'Married','Divorced'=>'Divorced')); ?>
		<?php echo $form->error($model,'marital_status'); ?></td>
    <td><?php echo $form->labelEx($model,'children_count'); ?></td>
    <td><?php echo $form->textField($model,'children_count'); ?>
		<?php echo $form->error($model,'children_count'); ?></td>
  </tr>
  
  <tr>
    <td><?php echo $form->labelEx($model,'father_name'); ?></td>
    <td><?php echo $form->textField($model,'father_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'father_name'); ?></td>
    <td><?php echo $form->labelEx($model,'mother_name'); ?></td>
    <td><?php echo $form->textField($model,'mother_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mother_name'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'husband_name'); ?></td>
    <td><?php echo $form->textField($model,'husband_name',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'husband_name'); ?></td>
    <td><?php echo $form->labelEx($model,'blood_group'); ?></td>
    <td><?php echo $form->dropDownList($model,'blood_group',array('A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-', 'AB+-' => 'AB+', 'AB-' => 'AB-'),
									array('empty' => 'Unknown')); ?>
		<?php echo $form->error($model,'blood_group'); ?></td>
  </tr>
  <tr>
    <td><?php echo $form->labelEx($model,'nationality_id'); ?></td>
    <td>  <?php echo $form->dropDownList($model,'nationality_id',CHtml::listData(Countries::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'nationality_id'); ?></td>
    <td><?php 
	if($model->photo_data==NULL)
	{
	echo $form->labelEx($model,'upload_photo');
	}
	else
	{
	echo $form->labelEx($model,'Photo');	
	}
	
	 ?>
		</td>
    <td>
	<?php
	if($model->photo_data==NULL)
	{
	 echo $form->fileField($model,'photo_data',array('size'=>30,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'photo_data'); }
	else {
	echo CHtml::link('Remove', array('Employees/remove', 'id'=>$model->primaryKey)); 
    echo '<img class="imgbrder" src="'.$this->createUrl('Employees/DisplaySavedImage&id='.$model->primaryKey).'" alt="'.$model->photo_file_name.'" width="100" height="100" />';
	}
		 ?>
        
        </td>
  </tr>

</table>



	<div style="padding:20px 0 0 0px; text-align:center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Next Step »' : 'Save',array('class'=>'formbut')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->