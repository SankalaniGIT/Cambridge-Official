<style>
.dd{
	color:#0F0;
}
table.list{
	border-right:1px #CCC solid;
	border-top:1px #CCC solid;
	font-size:12px;
}
tr.odd{
	background:#dfdfdf;
}
table.list td{
	padding:15px 10px;
	border-left:1px #CCC solid;
	border-bottom:1px #CCC solid;
}
</style>
<div style="margin:50px 50px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="280"><img width="93" height="117" src="images/inner_logo.png"></td>
    <td valign="middle" align="right" ><span style="color:#1a7701; font-weight:bold; font-size:18px; text-align:center;"><?php $college=Configurations::model()->findByPk(1); ?><?php echo $college->config_value ; ?></span></td>
  </tr>
</table>
<hr style="border:1px #666 solid;" />
<table width="800" cellpadding="0" cellspacing="0" class="list">
	 <tr class="odd">
        <td width="300"><strong>Employee Name</strong></td>
        
        <td width="270"><?php echo $model->first_name; ?></td>
    </tr>
    <tr>
        <td><strong>Joining Date</strong></td>
       
        <td><?php echo $model->joining_date; ?></td>
    </tr>
        <tr class="odd">
        <td ><strong>Category</strong></td>
       
        <td><?php
		$posts=EmployeeCategories::model()->findByAttributes(array('id'=>$model->employee_category_id));
		 echo $posts->name ; ?></td>
    </tr>
        <tr>
        <td><strong>Grade</strong> </td>
       
        <td><?php	
        $posts=EmployeeGrades::model()->findByAttributes(array('id'=>$model->employee_grade_id));
		 echo $posts->name; ?></td>
    </tr>
        <tr class="odd">
        <td><strong>Manager</strong></td>
       
        <td><?php
		//$ee = EmployeeGrades::model()->findByAttributes(array('id'=>$model->reporting_manager_id));
		 //echo $ee->name; ?></td>
    </tr>
        <tr >
        <td ><strong>Status</strong></td>
       
        <td><?php echo $model->status; ?></td>
    </tr>
        <tr class="odd">
        <td><strong>Total Experiance</strong> </td>
       
        <td><?php echo $model->experience_year; ?></td>
    </tr>
    <tr>
        <td><strong>Department</strong></td>
      
        <td><?php
		$dep  = EmployeeDepartments::model()->findByAttributes(array('id'=>$model->employee_department_id));
		 echo $dep->name; ?></td>
    </tr>
    <tr class="odd">
        <td><strong>Position</strong></td>
        
        <td><?php 
		$pos  = EmployeePositions::model()->findByAttributes(array('id'=>$model->employee_position_id));
		echo $pos->name ; ?></td>
    </tr>
    <tr>
        <td><strong>Job Title</strong></td>
      
        <td><?php echo $model->job_title; ?></td>
    </tr>
    <tr class="odd">
        <td><strong>Gender</strong></td>
       
        <td><?php if($model->gender=='M')
					echo 'Male';
				else 
					echo 'Female';	 ?>
        </td>
    </tr>
    <tr>
        <td><strong>Qualification</strong></td>
      
        <td><?php echo $model->qualification; ?></td>
    </tr>
     <tr class="odd">
        <td><strong>Experiance Info</strong></td>
       
        <td><?php echo $model->experience_detail; ?></td>
    </tr>
</table>
</div>