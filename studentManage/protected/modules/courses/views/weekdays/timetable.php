<!--<script language="javascript">
function getid()
{
var id= document.getElementById('drop').value;
window.location = "index.php?r=weekdays/timetable&id="+id;
}
</script>-->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
   <?php $this->renderPartial('/batches/left_side');?>
    
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
    
    
    <div class="clear"></div>
    <div class="emp_right_contner">
    <div class="emp_tabwrapper">
     <?php $this->renderPartial('/batches/tab');?>
        
    <div class="clear"></div>
    <div class="emp_cntntbx" style="padding-top:10px;">
    <div class="c_subbutCon" align="right" style="width:100%">
    <div class="c_cubbut" style="width:280px;">
    <ul>
    <li>
    <?php echo CHtml::link('Set Week Days', array('/courses/weekdays','id'=>$_REQUEST['id']),array('class'=>'addbttn'));?>
    </li>
    <li>
    <?php echo CHtml::link('Set Class Timings', array('/courses/classTiming','id'=>$_REQUEST['id']),array('class'=>'addbttn last'));?>
    </li>
    </ul>
    <div class="clear"></div>
    </div>
    </div>
    <div class="formCon" style="width:100%">

<div class="formConInner">
<?php echo CHtml::link('Publish Time Table', array('Weekdays/Publish', 'id'=>$_REQUEST['id']),array('class'=>'cbut')); ?>&nbsp;
<?php echo CHtml::link('Generate PDF', array('Weekdays/pdf','id'=>$_REQUEST['id']),array('class'=>'cbut','target'=>'_blank')); ?>
<?php 
 
	if(isset($_REQUEST['id']) and $_REQUEST['id']!=NULL)
	{      
	$times=Batches::model()->findAll("id=:x", array(':x'=>$_REQUEST['id']));
	
	
	$weekdays=Weekdays::model()->findAll("batch_id=:x", array(':x'=>$_REQUEST['id']));
	
	if(count($weekdays)==0)
	$weekdays=Weekdays::model()->findAll("batch_id IS NULL");
	?> <br /><br />
    <?php   $timing = ClassTimings::model()->findAll("batch_id=:x", array(':x'=>$_REQUEST['id']));
	  		$count_timing = count($timing);
			if($timing!=NULL)
			{
	?>
<div class="timetable">
<table border="0" align="center" width="100%" id="table" cellspacing="0">
    <tbody><tr>
	
      <td class="loader">&nbsp;
        
        </td><!--timetable_td_tl -->
      <td class="td-blank"></td>
      <?php 
			foreach($timing as $timing_1)
			{
			echo '<td class="td"><div class="top">'.$timing_1->start_time.' - '.$timing_1->end_time.'</div></td>';	
			}
	   ?>
        
      
    </tr> <!-- timetable_tr -->
    <tr class="blank">
      <td></td>
      <td></td>
		  <?php
          for($i=0;$i<$count_timing;$i++)
          {
            echo '<td></td>';  
          }
          ?>
    </tr>
    <?php if($weekdays[0]['weekday']!=0)
	{ ?>
    <tr>
        <td class="td"><div class="name">SUN</div></td>
        <td class="td-blank"></td>
         <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				echo '<td class="td">
					<div  onclick="" style="position: relative; ">
					
					  <div class="tt-subject">
						<div class="subject">'; ?>
			<?php
$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[0]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{		
					echo 	CHtml::ajaxLink(Yii::t('job','Assign'),$this->createUrl('TimetableEntries/settime'),array(
        'onclick'=>'$("#jobDialog'.$timing[$i]['id'].$weekdays[0]['weekday'].'").dialog("open"); return false;',
        'update'=>'#jobDialog'.$timing[$i]['id'].$weekdays[0]['weekday'],'type' =>'GET','data'=>array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[0]['weekday'],'class_timing_id'=>$timing[$i]['id']),'dataType'=>'text',
        ),array('id'=>'showJobDialog'.$timing[$i]['id'].$weekdays[0]['weekday'])) ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}
				echo CHtml::link('',array('timetableEntries/remove','id'=>$set->id,'batch_id'=>$_REQUEST['id']),array('confirm'=>'are you sure?','class'=>'delete'));
				}
		 ?>
					<?php echo 	'</div>
						
					  </div>
					</div>
					<div id="jobDialog'.$timing[$i]['id'].$weekdays[0]['weekday'].'"></div>
				  </td>';  
			  }
			  ?>
        
          
        
      </tr>
      <?php } 
	  if($weekdays[1]['weekday']!=0)
	  { ?>
      <tr>
        <td class="td"><div class="name">MON</div></td>
        <td class="td-blank"></td>
        	 <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				echo ' <td class="td">
						<div  onclick="" style="position: relative; ">
						  <div class="tt-subject">
							<div class="subject">';
		$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[1]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
					echo CHtml::ajaxLink(Yii::t('job','Assign'),$this->createUrl('TimetableEntries/settime'),array(
        'onclick'=>'$("#jobDialog'.$timing[$i]['id'].$weekdays[1]['weekday'].'").dialog("open"); return false;',
        'update'=>'#jobDialog'.$timing[$i]['id'].$weekdays[1]['weekday'],'type' =>'GET','data'=>array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[1]['weekday'],'class_timing_id'=>$timing[$i]['id']),'dataType'=>'text',
        ),array('id'=>'showJobDialog'.$timing[$i]['id'].$weekdays[1]['weekday'])) ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}
				echo CHtml::link('',array('timetableEntries/remove','id'=>$set->id,'batch_id'=>$_REQUEST['id']),array('confirm'=>'are you sure?','class'=>'delete'));
				}

						echo '</div>
						  </div>
						</div>
						<div id="jobDialog'.$timing[$i]['id'].$weekdays[1]['weekday'].'"></div>
					  </td>';  
			 }
			?>
          <!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php } 
	  if($weekdays[2]['weekday']!=0)
	  {
	  ?>
          <tr>
        <td class="td"><div class="name">TUE</div></td>
        <td class="td-blank"></td>
         <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				echo ' <td class="td">
						<div  onclick="" style="position: relative; ">
						  <div class="tt-subject">
							<div class="subject">';
							$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[2]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
					echo CHtml::ajaxLink(Yii::t('job','Assign'),$this->createUrl('TimetableEntries/settime'),array(
        'onclick'=>'$("#jobDialog'.$timing[$i]['id'].$weekdays[2]['weekday'].'").dialog("open"); return false;',
        'update'=>'#jobDialog'.$timing[$i]['id'].$weekdays[2]['weekday'],'type' =>'GET','data'=>array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[2]['weekday'],'class_timing_id'=>$timing[$i]['id']),'dataType'=>'text',
        ),array('id'=>'showJobDialog'.$timing[$i]['id'].$weekdays[1]['weekday'])) ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}
				echo CHtml::link('',array('timetableEntries/remove','id'=>$set->id,'batch_id'=>$_REQUEST['id']),array('confirm'=>'are you sure?','class'=>'delete'));
				}

							
						echo	'</div>
							
						  </div>
						</div>
						<div id="jobDialog'.$timing[$i]['id'].$weekdays[2]['weekday'].'"></div>
					  </td>';  
			 }
			?><!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php }
	  if($weekdays[3]['weekday']!=0)
	  { ?>
          <tr>
        <td class="td"><div class="name">WED</div></td>
        <td class="td-blank"></td>
         <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				echo ' <td class="td">
						<div  onclick="" style="position: relative; ">
						  <div class="tt-subject">
							<div class="subject">';
							$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[3]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
					echo CHtml::ajaxLink(Yii::t('job','Assign'),$this->createUrl('TimetableEntries/settime'),array(
        'onclick'=>'$("#jobDialog'.$timing[$i]['id'].$weekdays[3]['weekday'].'").dialog("open"); return false;',
        'update'=>'#jobDialog'.$timing[$i]['id'].$weekdays[3]['weekday'],'type' =>'GET','data'=>array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[3]['weekday'],'class_timing_id'=>$timing[$i]['id']),'dataType'=>'text',
        ),array('id'=>'showJobDialog'.$timing[$i]['id'].$weekdays[3]['weekday'])) ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}
				echo CHtml::link('',array('timetableEntries/remove','id'=>$set->id,'batch_id'=>$_REQUEST['id']),array('confirm'=>'are you sure?','class'=>'delete'));	
				}
							echo '</div>
							
						  </div>
						</div>
						<div id="jobDialog'.$timing[$i]['id'].$weekdays[3]['weekday'].'"></div>
					  </td>';  
			 }
			?><!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php }
	  if($weekdays[4]['weekday']!=0)
	  {  ?>
          <tr>
        <td class="td"><div class="name">THU</div></td>
        <td class="td-blank"></td>
          <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				echo ' <td class="td">
						<div  onclick="" style="position: relative; ">
						  <div class="tt-subject">
							<div class="subject">';
				$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[4]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
					echo CHtml::ajaxLink(Yii::t('job','Assign'),$this->createUrl('TimetableEntries/settime'),array(
        'onclick'=>'$("#jobDialog'.$timing[$i]['id'].$weekdays[4]['weekday'].'").dialog("open"); return false;',
        'update'=>'#jobDialog'.$timing[$i]['id'].$weekdays[4]['weekday'],'type' =>'GET','data'=>array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[4]['weekday'],'class_timing_id'=>$timing[$i]['id']),'dataType'=>'text',
        ),array('id'=>'showJobDialog'.$timing[$i]['id'].$weekdays[4]['weekday'])) ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}
				echo CHtml::link('',array('timetableEntries/remove','id'=>$set->id,'batch_id'=>$_REQUEST['id']),array('confirm'=>'are you sure?','class'=>'delete'));
				}
							
						echo '</div>
							
						  </div>
						</div>
						<div id="jobDialog'.$timing[$i]['id'].$weekdays[4]['weekday'].'"></div>
					  </td>';  
			 }
			?><!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php }
	  if($weekdays[5]['weekday']!=0)
	  { ?>
	  
          <tr>
        <td class="td"><div class="name">FRI</div></td>
        <td class="td-blank"></td>
         <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				echo ' <td class="td">
						<div  onclick="" style="position: relative; ">
						  <div class="tt-subject">
							<div class="subject">';
				$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[5]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
					echo CHtml::ajaxLink(Yii::t('job','Assign'),$this->createUrl('TimetableEntries/settime'),array(
        'onclick'=>'$("#jobDialog'.$timing[$i]['id'].$weekdays[5]['weekday'].'").dialog("open"); return false;',
        'update'=>'#jobDialog'.$timing[$i]['id'].$weekdays[5]['weekday'],'type' =>'GET','data'=>array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[5]['weekday'],'class_timing_id'=>$timing[$i]['id']),'dataType'=>'text',
        ),array('id'=>'showJobDialog'.$timing[$i]['id'].$weekdays[5]['weekday'])) ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}
				echo CHtml::link('',array('timetableEntries/remove','id'=>$set->id,'batch_id'=>$_REQUEST['id']),array('confirm'=>'are you sure?','class'=>'delete'));
				}
							echo '</div>
							
						  </div>
						</div>
						<div id="jobDialog'.$timing[$i]['id'].$weekdays[5]['weekday'].'"></div>
					  </td>';  
			 }
			?><!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php } 
	  if($weekdays[6]['weekday']!=0)
	  { ?>
      <tr>
        <td class="td"><div class="name">SAT</div></td>
        <td class="td-blank"></td>
          <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				echo ' <td class="td">
						<div  onclick="" style="position: relative; ">
						  <div class="tt-subject">
							<div class="subject">';
							$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[6]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
					echo CHtml::ajaxLink(Yii::t('job','Assign'),$this->createUrl('TimetableEntries/settime'),array(
        'onclick'=>'$("#jobDialog'.$timing[$i]['id'].$weekdays[6]['weekday'].'").dialog("open"); return false;',
        'update'=>'#jobDialog'.$timing[$i]['id'].$weekdays[6]['weekday'],'type' =>'GET','data'=>array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[6]['weekday'],'class_timing_id'=>$timing[$i]['id']),'dataType'=>'text',
        ),array('id'=>'showJobDialog'.$timing[$i]['id'].$weekdays[6]['weekday'])) ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}
				echo CHtml::link('',array('timetableEntries/remove','id'=>$set->id,'batch_id'=>$_REQUEST['id']),array('confirm'=>'are you sure?','class'=>'delete'));
				}
							echo '</div>
							
						  </div>
						</div>
						<div id="jobDialog'.$timing[$i]['id'].$weekdays[6]['weekday'].'"></div>
					  </td>';  
			 }
			?><!--timetable_td -->
        
      </tr>
    <?php } ?>
  </tbody></table>
</div><?php }
     else
	 {
		 echo '<i>No Class Timings</i>';
	 }?>
     
 
	</div>
    
</div>
    <!--<div class="table_listbx">
                         <table cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tbody><tr>
                    <td class="listbx_subhdng">Sl no.</td>
                    <td class="listbx_subhdng">Student Name</td>
                    <td class="listbx_subhdng">Admission Number</td>
                    <td class="listbx_subhdng">Gender</td>
                    <td class="listbx_subhdng">Actions</td>
                    </tr>
                        <tr><td>1</td><td><a href="/osv2.1/osadmin/index.php?r=students/view&amp;id=1">Balusamy</a></td><td>1</td><td>fff</td><td>gggg</td>                    </tr></tbody></table>
                    
    
   

 
    </div>-->
    </div>
    </div>
    
    </div>
    </div>
    
    
    
    
    

    <?php
		$batch = Weekdays::model()->findAll("batch_id=:x", array(':x'=>$_REQUEST['id']));
		if(count($batch)==0)
		$batch = Weekdays::model()->findAll("batch_id IS NULL");
		?>
        
        <?php
		
	}
	
	?>
     

    </td>
  </tr>
</table>
