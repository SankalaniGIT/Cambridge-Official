 <?php
 	$course=Courses::model()->findByAttributes(array('id'=>$val,'is_deleted'=>0));
   $batch=Batches::model()->findAll("course_id=:x AND is_deleted=:y", array(':x'=>$val,':y'=>0));
 ?>
 <div class="cbtablebx" id="dropwin">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
  <tr class="cbtablebx_topbg">
    <td>Batch Name
    </td>
    <td>Start Date</td>
    <td>End Date</td>
    <td style="border-right:none;">Actions</td>
  </tr>
  <tr class="even">
    <td><?php echo $course->course_name; ?> (21 Students)
    </td>
    <td>12/10/2010</td>
    <td>10/10/2010</td>
    <td style="border-right:none;"><a href="#">EDIT</a> | <a href="#">DELETE</a> | <a href="#">ADD STUDENT</a></td>
    
  </tr>
  <?php 
  $i=1;
  foreach($batch as $batch_1)
  		{
			if($i%2==0)
			$class = 'even';
			else
			$class = 'odd';
			$i++;
			
			echo '<tr class="'.$class.'">';
			echo '<td>'.$batch_1->name.'</td>';
			echo '<td>'.$batch_1->start_date.'</td>';
			echo '<td>'.$batch_1->end_date.'</td>';
			echo '<td style="border-right:none;">Task</td>';
			echo '</tr>';
		}
       ?>
</tbody></table>
</div>