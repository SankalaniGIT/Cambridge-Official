
<?php $batch=Batches::model()->findByAttributes(array('id'=>$_REQUEST['id'])); ?>
          

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td width="247" valign="top">
     <?php $this->renderPartial('left_side');?>
    </td>
    <td  valign="top">
	<?php if($batch!=NULL)
		   {
			   ?>
    <div class="emp_right" style="padding-bottom:250px;">
    <!--<div class="searchbx_area">
    <div class="searchbx_cntnt">
    	<ul>
        <li><a href="#"><img src="images/search_icon.png" width="46" height="43" /></a></li>
        <li><input class="textfieldcntnt"  name="" type="text" /></li>
        </ul>
    </div>
    
    </div>-->
    
  
        
    <!--<div class="edit_bttns">
    <ul>
    <li>
    <a href="#" class=" edit last">Edit</a>    </li>
    </ul>
    </div>-->
    
    
    <div class="clear"></div>
    <div class="emp_right_contner">
    <div class="emp_tabwrapper">
     <?php $this->renderPartial('tab');?>
    
    <div class="clear"></div>
    <div class="emp_cntntbx" style="padding-top:10px;">
    <div class="c_subbutCon" align="right" style="width:100%; height:50px;">
    
    <?php $this->beginWidget('CActiveForm') ?>
    				<div style="float:right; margin:15px 10px 10px 10px;">
                   <?php echo CHtml::submitButton('Promote',array('name'=>'promote','class'=>'add','confirm'=>'Are you sure you want to save?')); ?>
                   </div>
                    
                          
                          <div class="c_promotbut" style="width:150px; margin:10px;">
    <ul>
    <li>
                          
                          <?php echo CHtml::ajaxLink(Yii::t('job','Add New Batch'),$this->createUrl('batches/Addnew'),array(
        'onclick'=>'$("#jobDialog").dialog("open"); return false;',
        'update'=>'#jobDialog','type' =>'GET','data' => array( 'val1' =>$batch->course_id ),'dataType' => 'text'),array('id'=>'showJobDialog1','class'=>'addbttn last')); ?></li>
                  </ul>
    <div class="clear"></div>
    </div>  
    				
                    	<div style="float:right; margin:10px;">
                    <?php $data1 = CHtml::listData(Batches::model()->findAll(array('order'=>'name ASC','condition'=>'course_id=:cid','params'=>array(':cid'=>$batch->course_id))),'id','name');
                          echo CHtml::dropDownList('batch_id','',$data1,array('prompt'=>'Select','id'=>'batch_id')); ?>
                          </div>
                    
                    
                    
                   <div class="clear"></div>
                   </div>
    <!--<div class="c_subbutCon" align="right" style="width:100%">
    <div class="c_cubbut" style="width:120px;">
    <ul>
    <li>
    <?php /*?><?php echo CHtml::link('Add Student', array('/students/students/create'),array('class'=>'addbttn last'));?><?php */?>
    </li>
    </ul>
    <div class="clear"></div>
    </div>
    </div>-->
    
    <?php if(Yii::app()->user->hasFlash('sid')):?>
    <div class="info" style="background-color:#999;height:30px">
        <?php echo Yii::app()->user->getFlash('sid'); ?>
    </div>
    <?php endif; ?>
    <?php if(Yii::app()->user->hasFlash('bid')):?>
    <div class="info" style="background-color:#999;height:30px">
        <?php echo Yii::app()->user->getFlash('bid'); ?>
    </div>
    <?php endif; ?>
    <div class="table_listbx1" >
    
     <?php
                if(isset($_REQUEST['id']))
                {
                $posts=Students::model()->findAll("batch_id=:x and is_deleted=:y and is_active=:z", array(':x'=>$_REQUEST['id'],':y'=>'0',':z'=>'1'));
				if($posts!=NULL)
				{
                ?>
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                    <td style="padding:24px 0px;" class="listbx_subhdng"></td>
                    <td class="listbx_subhdng">Student Name</td>
                    <td class="listbx_subhdng" align="center">Admission Number</td>
                    
                    </tr>
                        
						
						<tr ><td style="padding:14px 0px 14px 20px;" colspan="3" width="10%">
                                       
                                        
										
										<?php 
		
		                                   
											$posts1=CHtml::listData($posts, 'id', 'Fullname');
											?>
										<?php
					
					 echo CHtml::checkBoxList('sid', '',$posts1, array('id'=>'1','template' => '{input}{label}</tr><tr><td width="10%">', 'checkAll' => 'All')); ?>
                                        
                                        </td>
                                        <td colspan="2">
                                        
                                        </td>
                                        </tr>
						
                            
                    </table>
                    
                   
                    
                <?php    	
                }
				else
				{
					echo '<br><div class="notifications nt_red" style="padding-top:10px"><i>No Active Students In This Batch</i></div>'; 
									
				}
				
				}
                ?>
    
    			<div class="c_subbutCon" align="right" style="width:100%; height:0px;">
    
    
    				<div style="float:right; margin:15px 10px 10px 10px;">
                   <?php echo CHtml::submitButton('Promote',array('name'=>'promote','class'=>'add','confirm'=>'Are you sure you want to save?')); ?>
                   </div>
                    
                          
                          <div class="c_promotbut" style="width:150px; margin:10px;">
    <ul>
    <li>
                          
                          <?php echo CHtml::ajaxLink(Yii::t('job','Add New Batch'),$this->createUrl('batches/Addnew'),array(
        'onclick'=>'$("#jobDialog").dialog("open"); return false;',
        'update'=>'#jobDialog','type' =>'GET','data' => array( 'val1' =>$batch->course_id ),'dataType' => 'text'),array('id'=>'showJobDialog1','class'=>'addbttn last')); ?></li>
                  </ul>
    <div class="clear"></div>
    </div>  
    				
                    	<div style="float:right; margin:10px;">
                    <?php $data1 = CHtml::listData(Batches::model()->findAll(array('order'=>'name ASC','condition'=>'course_id=:cid','params'=>array(':cid'=>$batch->course_id))),'id','name');
                          echo CHtml::dropDownList('batch_id','',$data1,array('prompt'=>'Select','id'=>'batch_id')); ?>
                          </div>
                    
                    <?php $this->endWidget(); ?>
                    
                   <div class="clear"></div>
                   </div>
   

 <div id="jobDialog">
    </div>
    
    
    
    </div>
    
    
    </div>
    
    </div>
    </div>
     <?php    	
                }
				else
				{
					 echo '<div class="emp_right" style="padding-left:20px; padding-top:50px;">';
					 echo '<div class="notifications nt_red"><i>Nothing Found!!</i></div>'; 
					 echo '</div>';
					
				}
                ?>
    </td>
  </tr>
</tbody></table>






