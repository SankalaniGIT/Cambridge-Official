

<?php $batch=Batches::model()->findByAttributes(array('id'=>$_REQUEST['id'])); ?>


           <?php if($batch!=NULL)
		   {
			   ?>
               
               <span style="padding:20px 0 20px 12px; display:block; font-size:14px"><strong>Course:</strong>
        <?php $course=Courses::model()->findByAttributes(array('id'=>$batch->course_id));
		if($course!=NULL)
		   {
			   echo $course->course_name; 
		   }?>
          &nbsp;&nbsp;&nbsp;&nbsp; <strong>Batch: </strong><?php echo $batch->name; ?><br>
               </span> 
               
               
               <div class="emp_tab_nav">
               
               
           
    <ul style="width:740px;">
    <li>
    
	<?php     
	          if(Yii::app()->controller->action->id=='batchstudents')
	          {
		      echo CHtml::link('Students', array('batches/batchstudents','id'=>$_REQUEST['id']),array('class'=>'active'));
			  }
			  else
			  {
	          echo CHtml::link('Students', array('batches/batchstudents','id'=>$_REQUEST['id']));
			  }
	?>
    
    </li>
    
    
    
    <li>
    
	<?php     
	          if(Yii::app()->controller->id=='subject' or Yii::app()->controller->id=='defaultsubjects')
	          {
		      echo CHtml::link('Subjects', array('/courses/subject','id'=>$_REQUEST['id']),array('class'=>'active'));
			  }
			  else
			  {
	          echo CHtml::link('Subjects', array('/courses/subject','id'=>$_REQUEST['id']));
			  }
	?>
    
    </li>
    
    
    <li>
    
	<?php     
	          if(Yii::app()->controller->id=='weekdays' or Yii::app()->controller->id=='classTiming')
	          {
		      echo CHtml::link('Timetable', array('weekdays/timetable','id'=>$_REQUEST['id']),array('class'=>'active'));
			  }
			  else
			  {
	          echo CHtml::link('Timetable', array('weekdays/timetable','id'=>$_REQUEST['id']));
			  }
	?>
    
    </li>
    
    
    <li>
	<?php     
	          if(Yii::app()->controller->id=='studentAttentance')
	          {
		      echo CHtml::link('Attendance', array('/courses/studentAttentance','id'=>$_REQUEST['id']),array('class'=>'active'));
			  }
			  else
			  {
	          echo CHtml::link('Attendance', array('/courses/studentAttentance','id'=>$_REQUEST['id']));
			  }
	?>
    </li>
    
    <li>
    
	<?php     
	          if(Yii::app()->controller->id=='exam' or Yii::app()->controller->id=='exams' or Yii::app()->controller->id=='gradingLevels' or Yii::app()->controller->id=='examScores')
	          {
		      echo CHtml::link('Assessments', array('/courses/exam','id'=>$_REQUEST['id']),array('class'=>'active'));
			  }
			  else
			  {
	          echo CHtml::link('Assessments', array('/courses/exam','id'=>$_REQUEST['id']));
			  }
	?>
    
    </li>
    
    
    
	<li>
	<?php     
	          if(Yii::app()->controller->action->id=='settings')
	          {
		      echo CHtml::link('Settings', array('batches/settings','id'=>$_REQUEST['id']),array('class'=>'active'));
			  }
			  else
			  {
	          echo CHtml::link('Settings', array('batches/settings','id'=>$_REQUEST['id']));
			  }
	?>
    </li>
    
    
    
    </ul>
    </div>
    <?php 
		   }?>