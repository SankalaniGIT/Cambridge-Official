

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timetable-entries-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>TRUE),

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<div class="formCon" style="width:400px;">

<div class="formConInner">
<div  style="background:none">


    <?php //echo $form->labelEx($model,'batch_id'); ?>
    <?php echo $form->hiddenField($model,'batch_id',array('value'=>$batch_id)); ?>
		<?php echo $form->error($model,'batch_id'); ?>
  <?php //echo $form->labelEx($model,'weekday_id'); ?>
    <?php echo $form->hiddenField($model,'weekday_id',array('value'=>$weekday_id)); ?>
		<?php echo $form->error($model,'weekday_id'); ?>

    <?php //echo $form->labelEx($model,'class_timing_id'); ?>
   <?php echo $form->hiddenField($model,'class_timing_id',array('value'=>$class_timing_id)); ?>
		<?php echo $form->error($model,'class_timing_id'); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">  
<tr>
  	<td><?php echo $form->labelEx($model,'subject_id');  ?></td>
    <td><?php echo $form->dropDownList($model,'subject_id',CHtml::listData(Subjects::model()->findAll('batch_id=:x',array(':x'=>$batch_id)),'id', 'name'),
	array('prompt'=>'select','ajax' => array('type'=>'POST','url'=>CController::createUrl('TimetableEntries/dynamiccities'),'update'=>'#city_id'))); ?>
		<?php echo $form->error($model,'subject_id'); ?></td>
  </tr>
  <tr>
  <td><?php echo $form->labelEx($model,'employee_id'); ?></td>
  <td><?php echo $form->dropDownList($model,'employee_id', array(),array('id'=>'city_id')); ?></td>
		<?php echo $form->error($model,'employee_id'); ?>
  </tr>      
  

</table>


	<div style="padding:20px 0 0 0px; text-align:left">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'formbut'));
		
		 ?>
          <?php echo CHtml::ajaxSubmitButton(Yii::t('job','Save'),CHtml::normalizeUrl(array('TimetableEntries/settime','render'=>false)),array('success'=>'js: function(data) {
                        $("#jobDialog'.$class_timing_id.$weekday_id.'").dialog("close");
						window.location.reload();
                    }','error'=>'js:function(){
                                            alert(\'error\');
                                        }',
),array('id'=>'closeJobDialog')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div>
</div><!-- form -->