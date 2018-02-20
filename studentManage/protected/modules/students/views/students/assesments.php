<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    <div class="emp_cont_left">
    <div class="empleftbx">
    <div class="empimgbx" style="height:120px;">
    <ul>
    <li>
     <?php
	 if($model->photo_file_name){ 
    echo '<img class="imgbrder" src="'.$this->createUrl('DisplaySavedImage&id='.$model->primaryKey).'" alt="'.$model->photo_file_name.'" width="101" height="107" />';
	 }else{
		echo '<img class="imgbrder" src="images/super_avatar.png" alt='.$model->first_name.' width="101" height="107" />'; 
	 }
	 ?>
   </li>
    <li class="img_text">
    	<div style="line-height:9px;"><?php echo ucfirst($model->first_name).'<span style="width:5px;"></span>'.ucfirst($model->last_name); ?></div>
        <span><strong>Course:</strong>
        <?php
		$posts=Batches::model()->findByPk($model->batch_id);
		echo $posts->course123->course_name;
		 ?>
         </span>
        <span><strong>Batch:</strong><?php
		$batch=Batches::model()->findByAttributes(array('id'=>$model->batch_id));
		 echo $batch->name; ?></span>
        <span><strong>Adm no.:</strong><?php echo $model->admission_no; ?></span>
    </li>
    </ul>
    </div>
    <div class="clear"></div>
    
    
    <div class="clear"></div>
    <!--<div class="left_emp_navbx">
    <div class="left_emp_nav">
    <h2>Your Search</h2>
    <ul>
    <li><a class="icon_emp" href="#">Profile</a></li>
    <li><a href="#">Delete</a></li>
    <li><span class="activearrow"></span><a class="active" href="#">Leaves <span class="active"></span></a></li>
    <li><a class="last" href="#">More</a></li>
    </ul>
    </div>
    <div class="clear"></div>
    <div class="left_emp_btn"><a class="arrowsml" href="#">Saved Searches</a></div>
    </div>-->
    </div>
    
    </div>
    </td>
    <td valign="top">
    <div class="emp_right">
    <!--<div class="searchbx_area">
    <div class="searchbx_cntnt">
    	<ul>
        <li><a href="#"><img src="images/search_icon.png" width="46" height="43" /></a></li>
        <li><input class="textfieldcntnt"  name="" type="text" /></li>
        </ul>
    </div>
    
    </div>-->
    
    <h1 style="margin-top:.67em;">Student Profile : <?php echo $model->first_name.'&nbsp;'.$model->last_name; ?><br /></h1>
        
    <div class="edit_bttns last">
    <ul>
    <li>
    <?php echo CHtml::link('Edit', array('update', 'id'=>$model->id),array('class'=>' edit ')); ?>
    </li>
     <li>
    <?php echo CHtml::link('Students', array('students/manage'),array('class'=>'edit last'));?>
    </li>
    </ul>
    </div>
    
    
    <div class="clear"></div>
    <div class="emp_right_contner">
    <div class="emp_tabwrapper">
    <div class="emp_tab_nav">
    <ul style="width:730px;">
          <li> <?php echo CHtml::link('Profile', array('view', 'id'=>$model->id)); ?></li>
    <li> <?php echo CHtml::link('Assessments', array('assesments', 'id'=>$model->id),array('class'=>'active')); ?></li>
   <li><?php echo CHtml::link('Attendance', array('attentance', 'id'=>$model->id)); ?></li>
    <li>
    <?php echo CHtml::link('Fees', array('fees', 'id'=>$model->id)); ?>
    <!--<a href="#">Fees</a>--></li>
    <?php /*?><li><a href="#">Additional Notes</a></li><?php */?>
    </ul>
    </div>
    <div class="clear"></div>
    <div class="emp_cntntbx" >
    <?php
	$exam = ExamScores::model()->findAll("student_id=:x", array(':x'=>$_REQUEST['id']));
	?>
    <div class="tableinnerlist">
    <table width="60%" cellpadding="0" cellspacing="0">
    <tr>
    <th>Exam Group Name</th>
    <th>Subject</th>
    <th>Marks</th>
    <th>Result</th>
    </tr>

    <?php
	foreach($exam as $exams)
	{
		echo '<tr>';
		$exm=Exams::model()->findByAttributes(array('id'=>$exams->exam_id));
		$group=ExamGroups::model()->findByAttributes(array('id'=>$exm->exam_group_id));
		echo '<td>'.$group->name.'</td>';
		$sub=Subjects::model()->findByAttributes(array('id'=>$exm->subject_id));
		echo '<td>'.$sub->name.'</td>';
		echo '<td>'.$exams->marks.'</td>';
		if($exams->is_failed==NULL)
		echo '<td>Passed</td>';
		else
		echo '<td>Failed</td>';
		echo '</tr>';
	}
	?>    </table>
    </div>
    </div>
    </div>
    
    </div>
    </div>
   
    </td>
  </tr>
</table>