<br />
<div class="formCon">

<div class="formConInner">
<script language="javascript">
function course()
{
var id = document.getElementById('cou').value;
window.location= 'index.php?r=employees/employeesSubjects/create&cou='+id;	
}
function batch()
{
var id_1 = document.getElementById('cou').value;
var id = document.getElementById('sub').value;
window.location= 'index.php?r=employees/employeesSubjects/create&cou='+id_1+'&sub='+id;	
}
function departme()
{
var id_1 = document.getElementById('cou').value;
var id = document.getElementById('sub').value;
var dep = document.getElementById('depart').value;
window.location= 'index.php?r=employees/employeesSubjects/create&cou='+id_1+'&sub='+id+'&dept='+dep;		
}
</script>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employees-subjects-form',
	'enableAjaxValidation'=>false,
)); ?>

	



    
    <?php 

$data = CHtml::listData(Courses::model()->findAll(array('order'=>'course_name DESC')),'id','course_name');
if(isset($_REQUEST['cou']))
{
	$sel= $_REQUEST['cou'];
}
else
{
	$sel='';
}
echo '<span style="font-size:14px; font-weight:bold; color:#666;">Course</span>&nbsp;&nbsp;&nbsp;&nbsp;';
echo CHtml::dropDownList('id','',$data,array('prompt'=>'Select','onchange'=>'course()','id'=>'cou','options'=>array($sel=>array('selected'=>true)))); 
echo '<br/><br/>';
echo '<span style="font-size:14px; font-weight:bold; color:#666;">Subject</span>&nbsp;&nbsp;'; ?>


<?php 
$data_1= array();
if(isset($_REQUEST['cou']))
{
	$batches = Batches::model()->findAll("course_id=:x", array(':x'=>$_REQUEST['cou']));
	
	/*$data_1=Subjects::model()->findAll(array('join' => 'JOIN batches ON batch_id = batches.id','condition'=>'batches.course_id=:id', 
                  'params'=>array(':id'=>(int) $_REQUEST['cou'])));*/
	$data_1 = CHtml::listData(Subjects::model()->findAll(array('join' => 'JOIN batches ON batch_id = batches.id','condition'=>'batches.course_id=:id', 
                  'params'=>array(':id'=>(int) $_REQUEST['cou']))),'id','name');			  
				  
	 
}
if(isset($_REQUEST['sub']))
{
 $sel_1 = $_REQUEST['sub'];	
}
else
{
	$sel_1 ='';
}
echo CHtml::dropDownList('sub','',$data_1,array('prompt'=>'Select','onchange'=>'course()','id'=>'sub','onchange'=>'batch()','options'=>array($sel_1=>array('selected'=>true)))); 
 
echo '<br/>';

  
 ?>
    
<?php 
if(isset($_REQUEST['sub']))
{
	
$emp_sub = EmployeesSubjects::model()->findAll("subject_id=:x", array(':x'=>$_REQUEST['sub']));	

	if(count($emp_sub)==0)
	{
		echo '<br> <br><i>No Employee assigned yet.</i><br> <br>';
	}
	else
	{
	?>
  <h3>Currently Assigned:</h3>
  <div class="tableinnerlist">
    <table border="0" cellpadding="0" cellspacing="0" width="80%">
    <tr>
         <th>Employee Name</th>
         <th>Department</th>
         <th>Action</th>
      </tr>
    
   <?php if((!isset($_REQUEST['dept'])) or (isset($_REQUEST['dept']) and $_REQUEST['dept']==NULL))
   {
	   $_REQUEST['dept']='';
	   
   }
   foreach($emp_sub as $emp_sub_1)
   { 
   ?>
     <tr>
    <td><?php 
	 $emp_name = Employees::model()->findByAttributes(array('id'=>$emp_sub_1->employee_id));
	echo $emp_name->first_name.'  '.$emp_name->middle_name.'  '.$emp_name->last_name?></td>
    <?php $batc = EmployeeDepartments::model()->findByAttributes(array('id'=>$emp_name->employee_department_id)); 
	if($batc!=NULL)
	{
		 ?>
		<td><?php echo $batc->name; ?></td> 
	<?php }
	else{?> <td>-</td> <?php }?>
    <td><?php echo CHtml::link('Remove', array('deleterow', 'id'=>$emp_sub_1->id,'sub'=>$_REQUEST['sub'],'cou'=>$_REQUEST['cou'],'dept'=>$_REQUEST['dept'])); ?></td>
    </tr>
    <?php } ?>
    </table>
   </div>
    <?php
	
	}
	
	echo '<br><span style="font-size:14px; font-weight:bold; color:#666;">Departments</span>&nbsp;&nbsp;';

	if(isset($_REQUEST['dept']))
	{
		$sel_2 = $_REQUEST['dept'];	
	}
	else
	{
		$sel_2 = '';	
	}

echo CHtml::dropDownList('dep','',CHtml::listData(EmployeeDepartments::model()->findAll(),'id','name'),array('prompt'=>'Select','id'=>'depart','onchange'=>'departme()','options'=>array($sel_2=>array('selected'=>true))));
	

echo '<br>';
if(isset($_REQUEST['dept']) and $_REQUEST['dept']!=NULL)
{
	$employee = $model->Employeenotassigned($_REQUEST['dept'],$_REQUEST['sub']);
	
	//$employee_subjects = EmployeesSubjects::models()->findAll("employee_id=:x", array(':x'=>$_REQUEST['dept']));
	//echo count($employee);
	//exit;
	
	if(count($employee)!=0)
	{?>
    <h3>Assign New:</h3>
      <div class="tableinnerlist">
     <table width="80%" cellpadding="0" cellspacing="0">
     <tr>
         <th>Employee Name</th>
         <th>Action</th>
      </tr>

    <?php   
	foreach($employee as $employee_1)
	{
		echo '<tr>';
	    echo '<td>'.$employee_1['first_name'].'  '.$employee_1['middle_name'].'  '.$employee_1['last_name'].'</td>';
		echo '<td>'.CHtml::link('Assign', array('employeesSubjects/Assign', 'emp_id'=>$employee_1['id'],'sub'=>$_REQUEST['sub'],'cou'=>$_REQUEST['cou'],'dept'=>$_REQUEST['dept'])).'</td>'; 	
		echo '</tr>';
	}
	?>
    </table>
    </div>
    <?php }
	else
	{
		echo '<br> <br><i>Nothing Found.</i><br> <br>';
	}
}

}


?>



<?php $this->endWidget(); ?>
</div>
</div><!-- form -->