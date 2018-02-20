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
    <li> <?php echo CHtml::link('Assessments', array('assesments', 'id'=>$model->id)); ?></li>
  <li><?php echo CHtml::link('Attendance', array('attentance', 'id'=>$model->id),array('class'=>'active')); ?></li>
    <li>
    <?php echo CHtml::link('Fees', array('fees', 'id'=>$model->id)); ?>
    <!--<a href="#">Fees</a>--></li>
    <?php /*?><li><a href="#">Additional Notes</a></li><?php */?>
    </ul>
    </div>
    <div class="clear"></div>
    <div class="emp_cntntbx" >
    
    
        <?php

function getweek($date,$month,$year)
{
$date = mktime(0, 0, 0,$month,$date,$year); 
$week = date('w', $date); 
switch($week) {
case 0: 
return 'Su';
break;
case 1: 
return 'Mo';
break;
case 2: 
return 'Tu';
break;
case 3: 
return 'We';
break;
case 4: 
return 'Th';
break;
case 5: 
return 'Fr';
break;
case 6: 
return 'Sa';
break;
}
}
?>
<div style="position:relative">

<?php
$subjects=Subjects::model()->findAll("batch_id=:x", array(':x'=>$_REQUEST['id']));

//echo CHtml::dropDownList('batch_id','',CHtml::listData(Subjects::model()->findAll("batch_id=:x",array(':x'=>$_REQUEST['id'])), 'id', 'name'), array('empty'=>'Select Type'));

$model = new EmployeeAttendances;
  if(isset($_REQUEST['id']))
  {

	if(!isset($_REQUEST['mon']))
	{
		$mon = date('F');
		$mon_num = date('n');
	}
	else
	{
		$mon = $model->getMonthname($_REQUEST['mon']);
		$mon_num = $_REQUEST['mon'];
	}
	$num = cal_days_in_month(CAL_GREGORIAN, $mon_num, 2012); // 31
	?>

	<div align="center" class="atnd_tnav" style="top:10px">
	<?php 
	echo CHtml::link('<div class="atnd_arow_l"><img src="images/atnd_arrow-l.png" width="7" border="0"  height="13" /></div>', array('students/attentance', 'mon'=>date("m",strtotime("2011-".$mon_num."-01 -1 months")),'id'=>$_REQUEST['id'])); 
	 echo $mon; echo CHtml::link('<div class="atnd_arow_r"><img src="images/atnd_arrow.png" width="7" border="0"  height="13" /></div>', array('students/attentance', 'mon'=>date("m",strtotime("2011-".$mon_num."-01 +1 months")),'id'=>$_REQUEST['id']));?></div>
<br /><br />
<div class="atnd_Con">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <th>Name</th>
    <?php
    for($i=1;$i<=$num;$i++)
    {
        echo '<th>'.getweek($i,'3','2012').'<span>'.$i.'</span></th>';
    }
    ?>
</tr>
<?php $posts=Students::model()->findAll("id=:x", array(':x'=>$_REQUEST['id']));
$j=0;
foreach($posts as $posts_1)
{
	if($j%2==0)
	$class = 'class="odd"';	
	else
	$class = 'class="even"';	
	
 ?>
<tr <?php echo $class; ?> >
    <td class="name"><?php echo $posts_1->first_name; ?></td>
    <?php
    for($i=1;$i<=$num;$i++)
    {
        echo '<td style="cursor:default"><span  id="td'.$i.$posts_1->id.'">';
		echo  $this->renderPartial('ajax',array('day'=>$i,'month'=>$mon_num,'year'=>'2012','emp_id'=>$posts_1->id));
		/*echo CHtml::ajaxLink(Yii::t('job','ll'),$this->createUrl('EmployeeAttendances/addnew'),array(
        'onclick'=>'$("#jobDialog").dialog("open"); return false;',
        'update'=>'#jobDialog','type' =>'GET','data'=>array('day' =>$i,'month'=>$mon_num,'year'=>'2012','emp_id'=>$posts_1->id),
        ),array('id'=>'showJobDialog'));
		echo '<div id="jobDialog"></div>';*/
		
		echo '</span><div  id="jobDialog123'.$i.$posts_1->id.'"></div></td>';
    }
    ?>
</tr>
<?php $j++; }?>
</table>
<?php } ?>
</div>
<div class="ea_pdf" style="top:2px; ">
 <?php echo CHtml::link('<img src="images/pdf-but.png" border="0">', array('/courses/StudentAttentance/pdf1','id'=>$_REQUEST['id']),array('target'=>'_blank')); ?></div>
 
</div>
    </div>
    </div>
    
    </div>
    </div>
   
    </td>
  </tr>
</table>