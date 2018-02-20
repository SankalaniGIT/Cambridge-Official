<style>
table{
	border-top:1px #CCC solid;
	margin:30px 30px;
}
td{
	border-left:1px #CCC solid;
	padding:10px 10px 10px 10px;
	border-bottom:1px #CCC solid;
}
</style>
<div class="formConInner">
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


<div style="font-size:11px">
<?php $college=Configurations::model()->findByPk(1); ?><?php echo $college->config_value ; ?>
<table  align="center" width="100%" id="table" cellspacing="0" cellpadding="0" >
    <tr>
      <td >&nbsp;</td>
     
      <?php 
			foreach($timing as $timing_1)
			{
				//echo $timing_1->start_time.'<br>';  ?>
			<?php echo '<td style="font-size:8px">'.$timing_1->start_time .' - '.$timing_1->end_time.'</td>';?>
		<?php 	}
	   ?>
    </tr> <!-- timetable_tr -->
    
    <?php if($weekdays[0]['weekday']!=0)
	{ ?>
    <tr>
        <td>SUN</td>
 
         <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				  ?>
				<td class="td">
					<?php
$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[0]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{		
					echo 	"Assign" ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo $time_emp->first_name;}
				}
		 ?>
					
				  </td>
			<?php  }
			  ?>
	     </tr>
      <?php }  ?>
      <?php   if($weekdays[1]['weekday']!=0)
	  { ?>
      <tr>
        <td >MON</td>
      
        	 <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				?> <td >
               <?php 
						
		$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[1]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
						echo 	"Assign" ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				if($time_emp!=NULL){echo $time_emp->first_name;}
				}
				?> </td>
                <?php  
			 }
			?>
          <!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php } ?>
     <?php  if($weekdays[2]['weekday']!=0)
	  {
	  ?>
          <tr>
        <td >TUE</td>
      
         <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				?> <td>
			<?php		
				$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[2]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
					echo 	"Assign" ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo $time_emp->first_name;}
				}	
					?>
					  </td> 
			<?php  }
			?><!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php } ?>
      <?php
      if($weekdays[3]['weekday']!=0)
	  { ?>
          <tr>
        <td>WED</td>
     
         <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				?> <td >
						<?php 
							$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[3]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
						echo 	"Assign" ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}	
				}
						?>
					  </td>
             <?php           
			 }
			?><!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php }
	  ?>
      <?php
      if($weekdays[4]['weekday']!=0)
	  {  ?>
          <tr>
        <td>THU</td>
     
          <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				?><td>
               <?php  
				$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[4]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
						echo 	"Assign" ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo '<div class="employee">'.$time_emp->first_name.'</div>';}
				}
				?>
					  </td>  
			 <?php
             }
			?><!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php } ?>
      <?php
      if($weekdays[5]['weekday']!=0)
	  { ?>
	  
          <tr>
        <td>FRI</td>
       
         <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				?><td>
				<?php		
				$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[5]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
						echo 	"Assign" ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo $time_emp->first_name;}
				}
				 ?>
					  </td>
              <?php        
			 }
			?><!--timetable_td -->
        
      </tr><!--timetable_tr -->
      <?php }  ?>
      <?php
	  if($weekdays[6]['weekday']!=0)
	  { ?>
      <tr>
        <td>SAT</td>
        
          <?php
			  for($i=0;$i<$count_timing;$i++)
			  {
				?><td class="td">
				<?php	
							$set =  TimetableEntries::model()->findByAttributes(array('batch_id'=>$_REQUEST['id'],'weekday_id'=>$weekdays[6]['weekday'],'class_timing_id'=>$timing[$i]['id'])); 			
				if(count($set)==0)
				{	
				echo 	"Assign" ;
				}
				else
				{
				$time_sub = Subjects::model()->findByAttributes(array('id'=>$set->subject_id));
				if($time_sub!=NULL){echo $time_sub->name.'<br>';}
				$time_emp = Employees::model()->findByAttributes(array('id'=>$set->employee_id));
				if($time_emp!=NULL){echo $time_emp->first_name;}
				}
				 ?>
					  </td>
           <?php            
			 }
			?><!--timetable_td -->
        
      </tr>
    <?php } ?>
  </table>
</div><?php }
     else
	 {
		 echo '<i>No Class Timings</i>';
	 }?>
       <?php
		$batch = Weekdays::model()->findAll("batch_id=:x", array(':x'=>$_REQUEST['id']));
		if(count($batch)==0)
		$batch = Weekdays::model()->findAll("batch_id IS NULL");
		?>
        
        <?php
		
	}
	?>
 
	</div>