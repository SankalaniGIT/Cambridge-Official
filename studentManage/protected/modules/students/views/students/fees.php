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
		echo '<img class="imgbrder" src="images/super_avatar.png" alt="'.$model->first_name.'" width="101" height="107" />'; 
	 }
	 ?>
   </li>
    <li class="img_text">
    	<?php echo $model->first_name.'&nbsp;'.$model->last_name; ?><br />
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
        
    <div class="edit_bttns">
    <ul>
    <li>
    <?php echo CHtml::link('Edit', array('update', 'id'=>$model->id),array('class'=>' edit last')); ?>
    </li>
    </ul>
    </div>
    
    
    <div class="clear"></div>
    <div class="emp_right_contner">
    <div class="emp_tabwrapper">
    <div class="emp_tab_nav">
    <ul style="width:730px;">
    <li>
     <?php echo CHtml::link('Profile', array('View', 'id'=>$model->id)); ?>
    <!--<a class="active" href="#">Profile</a>--></li>
    <li> <?php echo CHtml::link('Assessments', array('assesments', 'id'=>$model->id)); ?></li>
    <li><?php echo CHtml::link('Attendance', array('attentance', 'id'=>$model->id)); ?></li>
    <li>
      <?php echo CHtml::link('Fees', array('fees', 'id'=>$model->id),array('class'=>'active')); ?>
    <!--<a href="#">Fees</a>--></li>
    <?php /*?><li><a href="#">Additional Notes</a></li><?php */?>
    </ul>
    </div>
    <div class="clear"></div>
    <div class="emp_cntntbx">
    <div>
     <div class="formCon">
    <div class="formConInner">
    <h3>Pending Fees</h3>
     
    <?php 
	$res=FinanceFees::model()->findAll(array('condition'=>'student_id=:vwid AND is_paid=:vpid','params'=>array(':vwid'=>$_REQUEST['id'], ':vpid'=>0)));
	if(count($res)==0)
	{
	 echo "<i>No Pending Fees</i>";	
	}
	foreach($res as $res_1)
	{
		$posts = FinanceFeeCollections::model()->findByAttributes(array('id'=>$res_1->fee_collection_id));
		$cat = FinanceFeeCategories::model()->findByAttributes(array('id'=>$posts->fee_category_id));
		$particular = FinanceFeeParticulars::model()->findByAttributes(array('finance_fee_category_id'=>$posts->fee_category_id));
		if(!count($particular)==0)
		{
		?>
        <div class="tableinnerlist"> 
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <th>Category Name</th>
          <th>Collection Name</th>
           <th>Amount</th>
             <th>Action</th>
        </tr>
        <tr>
          <td><?php echo $cat->name ?></td>
           <td><?php echo $posts->name ?></td>
            <td><?php echo $particular->amount 	?></td>
            <td> <?php echo CHtml::link('Pay', array('payfees', 'id'=>$res_1->id)); ?></td>
        </tr>
        </table>
       </div><br />
        <?php }
		else
		{
		echo "No Pending Fees Found";
		break;	
		}
	}?> 
       
        <h3>Paid Fees</h3>
        
         <?php 
	$res=FinanceFees::model()->findAll(array('condition'=>'student_id=:vwid AND is_paid=:vpid','params'=>array(':vwid'=>$_REQUEST['id'], ':vpid'=>1)));
	foreach($res as $res_1)
	{
		$posts = FinanceFeeCollections::model()->findByAttributes(array('id'=>$res_1->fee_collection_id));
		$cat = FinanceFeeCategories::model()->findByAttributes(array('id'=>$posts->fee_category_id));
		$particular = FinanceFeeParticulars::model()->findByAttributes(array('finance_fee_category_id'=>$posts->fee_category_id));
		?>
        <div class="tableinnerlist"> 
        <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <th>Category Name</th>
          <th>Collection Name</th>
           <th>Amount</th>
             <th>Action</th>
        </tr>
        <tr>
          <td><?php echo $cat->name ?></td>
           <td><?php echo $posts->name ?></td>
            <td><?php echo $particular->amount 	?></td>
            <td> <?php //echo CHtml::link('Pay', array('payfees', 'id'=>$res_1->id)); ?></td>
        </tr>
        </table>
        </div><br />
        <?php }
		 ?>
    
</div>
  </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    <div class="cont_right" style="background:#FFF">

	</div>
    </td>
  </tr>
</table>