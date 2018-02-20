<?php
$find = EmployeeAttendances::model()->findAll("attendance_date=:x AND employee_id=:y", array(':x'=>'2012-'.$month.'-'.$day,':y'=>$emp_id));
if(count($find)==0)
{
echo CHtml::ajaxLink(Yii::t('job','ll'),$this->createUrl('employeeAttendances/Addnew'),array(
        'onclick'=>'$("#jobDialog'.$day.$emp_id.'").dialog("open"); return false;',
        'update'=>'#jobDialog123'.$day.$emp_id,'type' =>'GET','data'=>array('day' =>$day,'month'=>$month,'year'=>'2012','emp_id'=>$emp_id),
        ),array('id'=>'showJobDialog'.$day.$emp_id,'class'=>'at_abs','title'=>'add leave'));
		//echo '<div id="jobDialog'.$day.$emp_id.'"></div>';
}
else
{ ?>
<span class='abs' title="<?php echo '<b>Date : </b>'.$find['0']['attendance_date']?><br><?php echo '<b>Reason :</b> '.$find['0']['reason']?>"></span></div>
<?php 


}

?>