<div class="formCon">

<div class="formConInner">

<?php
if(isset($_REQUEST['id']))
{
	
  $posts=Students::model()->findAll("batch_id=:x", array(':x'=>$_REQUEST['id']));
  


    ?>
    <?php if($posts!=NULL)
    { ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'exam-scores-form',
	'enableAjaxValidation'=>false,
)); ?>

	<h3>Enter Exam Scores here:</h3>
    <?php echo $form->hiddenField($model,'exam_id',array('value'=>$_REQUEST['examid'])); ?>
	
    <div>
<table width="100%" cellspacing="0" cellpadding="0">
<?php $i=1;
	  $j=0;
	  foreach($posts as $posts_1)
	  { 
	   $checksub = ExamScores::model()->findByAttributes(array('exam_id'=>$_REQUEST['examid'],'student_id'=>$posts_1->id));
	   if($checksub==NULL)
	   {
	  if($j==0)
			  {?>
              
              <tr>
              <th>Student Name</th>
              <th>Marks</th>
              <th>Remarks</th>
              
              </tr>
              
              
              
              <?php $j++;} ?>
	<tr>
		
		<td><?php echo $posts_1->first_name;?>
		
		
		<?php echo $form->hiddenField($model,'student_id[]',array('value'=>$posts_1->id,'id'=>$posts_1->id)); ?></td>
		

	
		<td><?php echo $form->textField($model,'marks[]',array('size'=>7,'maxlength'=>7,'id'=>$posts_1->id)); ?></td>
        
        <td><?php echo $form->textField($model,'remarks[]',array('size'=>60,'maxlength'=>255,'id'=>$posts_1->id)); ?></td>
	</tr>	

	
		<?php echo $form->hiddenField($model,'grading_level_id'); ?>
		

	
		<?php echo $form->hiddenField($model,'is_failed'); ?>
		

	<?php echo $form->hiddenField($model,'created_at',array('value'=>date('Y-m-d')));
		  echo $form->hiddenField($model,'updated_at',array('value'=>date('Y-m-d'))); ?>
		
<?php  $i++;}}?>
	</table>

<br />
<?php if($i==1)
	  {
		 
		 echo '<div class="notifications nt_green"><i>Exam Score Entered For All Students</i></div>'; 
		 
		 $allscores = ExamScores::model()->findAllByAttributes(array('exam_id'=>$_REQUEST['examid']));
		 $sum=0;
		 foreach($allscores as $allscores1)
		 {
			$sum=$sum+$allscores1->marks;
		 }
		 $avg=$sum/count($allscores);
		 echo '<div class="notifications nt_green">Class Average = '.$avg.'</div>';
		 echo '<div style="padding-left:10px;">';
		 echo CHtml::link('<img src="images/pdf-but.png" />', array('examScores/pdf','id'=>$_REQUEST['id'],'examid'=>$_REQUEST['examid']),array('target'=>"_blank"));
		 
			 echo '</div>';
	  }
	  ?>
</div>

	<div align="center">
		<?php if($i!=1) echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'formbut')); ?>
	</div>

<?php $this->endWidget(); ?>
<?php }
	else{
		echo '<i>No Students In This Batch</i>';
		 } ?>

</div></div><!-- form -->


    <br />
    <br />
    

<?php 
	$checkscores = ExamScores::model()->findByAttributes(array('exam_id'=>$_REQUEST['examid']));
	if($checkscores!=NULL)
	{?>
    <div class="formCon">
    <div class="formConInner">
    <div class="c_subbutCon" align="right" style="width:100%">
    <div class="c_cubbut" style="width:140px;">
    <ul>
    <li>
    <?php echo CHtml::link('Clear All Scores', array('examScores/deleteall','id'=>$_REQUEST['id'],'examid'=>$_REQUEST['examid']),array('class'=>'addbttn last','confirm'=>'Are You Sure? All Scores will be deleted.'));?>
    </li>
    
    </ul>
    <div class="clear"></div>
    </div>
    </div>
    <?php $model1=new ExamScores('search');
	      $model1->unsetAttributes();  // clear any default values
		  if(isset($_GET['examid']))
			$model1->exam_id=$_GET['examid'];
	     
		 
		  ?>
          <h3> Scores</h3>
          <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'exam-scores-grid',
	'dataProvider'=>$model1->search(),
	'pager'=>array('cssFile'=>Yii::app()->baseUrl.'/css/formstyle.css'),
 	'cssFile' => Yii::app()->baseUrl . '/css/formstyle.css',
	'columns'=>array(
		
		
		array(
		    'header'=>'Student Name',
			'value'=>array($model,'studentname'),
			'name'=> 'firstname',
            'sortable'=>true,

		
		),
		
		'marks',
		
		'remarks',
		/*
		'grading_level_id',
		array(
		    'name'=>'subject_id',
			'value'=>array($model,'subjectname')
		
		),
		'minimum_marks',
		'grading_level_id',
		'weightage',
		'event_id',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
			'buttons' => array(
                                                     
														'update' => array(
                                                        'label' => 'update', // text label of the button
														
                                                        'url'=>'Yii::app()->createUrl("/courses/examScores/update", array("sid"=>$data->id,"examid"=>$data->exam_id,"id"=>$_REQUEST["id"]))', // a PHP expression for generating the URL of the button
                                                      
                                                        ),
														
                                                    ),
													'template'=>'{update} {delete}',
													'afterDelete'=>'function(){window.location.reload();}'
													
		),
		
	),
)); echo '</div></div>';}
else
{
	echo '<div class="notifications nt_red"><i>No Scores Updated</i></div>'; 
	}?>
	<?php }
	else
    {
	echo '<div class="notifications nt_red"><i>Nothing Found</i></div>'; 
	}?>
	
	
	