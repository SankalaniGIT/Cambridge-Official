<script>
function course()
{
var id = document.getElementById('cou').value;
window.location= 'index.php?r=employees/employeeAttendances/index&id='+id;	
}
</script>
<?php
  // $this->widget('application.extensions.ETooltip.ETooltip', array("selector"=>"#demo span[title]",'image'=>'white_arrow.png','tooltip'=>array("opacity"=>1, 'effect'=>'slide')));
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <?php $this->renderPartial('/employees/left_side');?>
    
    </td>
    <td valign="top" width="96%" align="left">
    <div class="cont_right formWrapper" id="demo">
    
    

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

<h1>Employee Attendances</h1>

<br />
<div class="ea_droplist">
<?php

$data = CHtml::listData(EmployeeDepartments::model()->findAll(),'id','name');
if(isset($_REQUEST['id']))
{
	$sel= $_REQUEST['id'];
}
else
{
	$sel='';
}
echo CHtml::dropDownList('id','',$data,array('prompt'=>'Select','onchange'=>'course()','id'=>'cou','options'=>array($sel=>array('selected'=>true)))); 


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
 </div>
	<div align="center" class="atnd_tnav"><?php echo CHtml::link('<div class="atnd_arow_l"><img src="images/atnd_arrow-l.png" width="7" border="0"  height="13" /></div>', array('index', 'mon'=>$mon_num-1,'id'=>$_REQUEST['id']));  echo $mon; echo CHtml::link('<div class="atnd_arow_r"><img src="images/atnd_arrow.png" border="0" width="7"  height="13" /></div>', array('index', 'mon'=>$mon_num+1,'id'=>$_REQUEST['id']));?></div>
<br />
<div class="ea_pdf"><?php echo CHtml::link('<img src="images/pdf-but.png" border="0" />', array('employeeAttendances/pdf','id'=>$_REQUEST['id']),array('target'=>"_blank")); ?></div>
<div class="atnd_Con">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <th>Name</th>
    <?php
    for($i=1;$i<=$num;$i++)
    {
        echo '<th>'.getweek($i,$mon_num,'2012').'<span>'.$i.'</span></th>';
    }
    ?>
</tr>
<?php $posts=Employees::model()->findAll("employee_department_id=:x", array(':x'=>$_REQUEST['id']));
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
        echo '<td><span  id="td'.$i.$posts_1->id.'">';
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
    
    </div>
    </td>
  </tr>
</table>
