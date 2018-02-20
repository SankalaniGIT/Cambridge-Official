<?php 
  $posts=Courses::model()->findAll("is_deleted 	=:x", array(':x'=>0));
   ?>
 
<?php if($posts!=NULL)
{?>
<script>
function details(id)
{
	
	var rr= document.getElementById("dropwin"+id).style.display;
	
	 if(document.getElementById("dropwin"+id).style.display=="block")
	 {
		 document.getElementById("dropwin"+id).style.display="none"; 
		 $("#openbutton"+id).removeClass('open');
		  $("#openbutton"+id).addClass('view');
	 }
	 else if(  document.getElementById("dropwin"+id).style.display=="none")
	 {
		 document.getElementById("dropwin"+id).style.display="block"; 
		   $("#openbutton"+id).removeClass('view');
		  $("#openbutton"+id).addClass('open');
	 }
	 

}



function rowdelete(id)
{
	 $("#batchrow"+id).fadeOut("slow");
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
     <?php $this->renderPartial('left_side');?>
    
    </td>
    <td valign="top">
    <div class="cont_right formWrapper">
<h1>Manage Courses & Batches</h1><br />
 <div id="jobDialog">
 <div id="jobDialog1">
 <?php 
  $posts=Courses::model()->findAll("is_deleted 	=:x", array(':x'=>0));
  
 
 
 ?>
 </div>
  </div>
    <div class="mcb_Con">
<div class="mcbrow">
	<ul>
    	<li class="col1">Course Name</li>
        <li class="col2">Edit</li>
        <li class="col3">Delete</li>
        <li class="col4">Add Batch</li>
        <li class="col5">View Batch</li>
    </ul>
 <div class="clear"></div>
</div>
<?php foreach($posts as $posts_1)
{ ?>
<div class="mcbrow" id="jobDialog1">
	<ul>
    	<li class="gtcol1" onclick="details('<?php echo $posts_1->id;?>');" style="cursor:pointer;"><?php echo $posts_1->course_name; ?></li>
        <li class="col2">
        <?php echo CHtml::ajaxLink('',$this->createUrl('courses/Edit'),array(
        'onclick'=>'$("#jobDialog11").dialog("open"); return false;',
        'update'=>'#jobDialog1','type' =>'GET','data' => array( 'val1' =>$posts_1->id ),'dataType' => 'text'),array('id'=>'showJobDialog123'.$posts_1->id, 'class'=>'edit')); ?>
        </li>
        <li class="col3"><?php echo CHtml::link('',array('deactivate','id'=>$posts_1->id),array('confirm'=>'are you sure?','class'=>'delete'));?></li>
        <li class="col4">
         <?php echo CHtml::ajaxLink('',$this->createUrl('batches/Addnew'),array(
        'onclick'=>'$("#jobDialog").dialog("open"); return false;',
        'update'=>'#jobDialog','type' =>'GET','data' => array( 'val1' =>$posts_1->id ),'dataType' => 'text'),array('id'=>'showJobDialog1'.$posts_1->id,'class'=>'add')); ?>
        </li>
        <li class="col5"><a href="#" id="openbutton<?php echo $posts_1->id;?>" onclick="details('<?php echo $posts_1->id;?>');" class="view"></a></li>
    </ul>
 <div class="clear"></div>
</div>
<!-- Batch Details -->
         <?php
			$course=Courses::model()->findByAttributes(array('id'=>$posts_1->id,'is_deleted'=>0));
		   $batch=Batches::model()->findAll("course_id=:x AND is_deleted=:y", array(':x'=>$posts_1->id,':y'=>0));
		 ?>
<div class="cbtablebx" id="dropwin<?php echo $posts_1->id; ?>" style="display: none; ">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tbody>
		  <tr class="cbtablebx_topbg">
			<td style="text-align:left; padding-left:40px;">Batch Name</td>
			<td>Start Date</td>
			<td>End Date</td>
			<td style="border-right:none;">Actions</td>
		  </tr>
          <?php 
		  foreach($batch as $batch_1)
				{
					echo '<tr id="batchrow'.$batch_1->id.'">';
					echo '<td style="text-align:left; padding-left:40px;">'.CHtml::link($batch_1->name, array('batches/batchstudents','id'=>$batch_1->id)).'</td>';
					echo '<td>'.$batch_1->start_date.'</td>';
					echo '<td>'.$batch_1->end_date.'</td>';
					echo '<td style="border-right:none;">'; ?> 
					<?php echo CHtml::ajaxLink('Edit',$this->createUrl('Batches/Addupdate'),array(
        'onclick'=>'$("#jobDialog123").dialog("open"); return false;',
        'update'=>'#jobDialog123','type' =>'GET','data' => array( 'val1' =>$batch_1->id,'course_id'=>$posts_1->id ),'dataType' => 'text'),array('id'=>'showJobDialog12'.$batch_1->id,'class'=>'add')); 
		 echo '|'. CHtml::ajaxLink(
  "Delete", Yii::app()->createUrl( 'Batches/remove' ), array( 'type' =>'GET','data' => array( 'val1' =>$batch_1->id ),'dataType' => 'text',  'update' => "#req_res"),array('onclick'=>'if (!confirm("Are you sure?\\r\\nDrafts are permanently deleted and are not recoverable.")){return} else{rowdelete('.$batch_1->id.')}'));
 ?> <?php echo ' | '.CHtml::link('ADD STUDENT', array('/students/students/create')).'</td>';
					echo '</tr>';
					echo '<div id="jobDialog123"></div>';
				}
			   ?>
         </tbody>
        </table>
		</div>
<?php } ?>        

</div>

</div>
    </td>
  </tr>
</table>

<?php }
else
{ ?>
<link rel="stylesheet" type="text/css" href="/openschool/css/style.css" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <?php $this->renderPartial('left_side');?>
    
    </td>
    <td valign="top">
    <div style="padding:20px 20px">
<div class="yellow_bx" style="background-image:none;width:680px;padding-bottom:45px;">
                
                	<div class="y_bx_head" style="width:650px;">
                    	It appears that this is the first time that you are using this Open-School Setup. For any new installation we recommend that you configure the following:
                    </div>
                    <div class="y_bx_list" style="width:650px;">
                    	<h1><?php echo CHtml::link('Add New Course &amp; Batch',array('courses/create')) ?></h1>
                    </div>
                    
                </div>

                </div>
    
    
    </td>
  </tr>
</table>

<?php } ?>
