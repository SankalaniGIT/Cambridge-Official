<script>
function details(id)
{
	//alert("#dropwin"+id);
	var rr= document.getElementById("dropwin"+id).style.display;
	//alert(rr);
	 if(document.getElementById("dropwin"+id).style.display=="block")
	 {
		 document.getElementById("dropwin"+id).style.display="none"; 
	 }
	 if(  document.getElementById("dropwin"+id).style.display=="none")
	 {
		 document.getElementById("dropwin"+id).style.display="block"; 
	 }
	 //return false;
	/*if ($("#dropwin"+id).is(':hidden')){
		 $("#dropwin"+id).show();
	}
	else{
		$("#dropwin"+id).hide();
	}*/

}


/*function details(id) {
	alert(123);
	var ele = document.getElementById("dropwin"+id);
	//var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
		alert(1);
    		ele.style.display = "none";
		//text.innerHTML = "show";
  	}
	else {
		alert(2);
		ele.style.display = "block";
		//text.innerHTML = "hide";
	}
} */
$(document).ready(function() {
	
	
	/*function details()
	  {
		  alert(1);
		$("#batch1").click(function(){
            	if ($("#dropwin").is(':hidden')){
                	$("#dropwin").show();
				}
            	else{
                	$("#dropwin").hide();
            	}
            return false;
       			 });
				 
	  }*/
				 /*
				  $('#dropwin').click(function(e) {
            		e.stopPropagation();
					
        			});*/
        		/*$(document).click(function() {
					if (!$("#dropwin").is(':hidden')){
            		$('#dropwin').hide();
					}
        			});	*/
});	
</script>
<!--<script language="javascript">
$(document).ready(function() {
$('.cont_right').not('.drop').click(function() {
      $(".drop").hide();
});
});
</script>-->
<script language="javascript">
function hide(id)
{/*
	 $(".drop").click(function(e) {
            		e.stopPropagation();
					});
	$(document).click(function() {
					if (!$(".drop").is(':hidden')){
            		$('.drop').hide();
					}
        			});
if ($('#'+id).is(':hidden')){
                	$('#'+id).show();
				}
            	else{
                	$('#'+id).hide();
            	}*/
				 $(".drop").hide();
$('#'+id).toggle();	

}


</script>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
      <?php $this->renderPartial('/employees/left_side');?>
    
    </td>
    <td valign="top">
    <div class="cont_right formWrapper">
<h1>Manage Employees</h1>

                                                
   
    <div class="search_btnbx">
    	  <!--<div class="listsearchbx">
               <ul>
                   <li><input class="listsearchbar listsearchtxt" name="" type="text" onblur="clearText(this)" onfocus="clearText(this)" value="Search for Contacts"  /></li>
                   <li><input src="images/list_searchbtn.png" name="" type="image" /></li>
               </ul>
         </div>-->
         
         
       <?php $j=0; ?>
        
        <div id="jobDialog"></div>
        
    	  <div class="contrht_bttns">
          
    <ul>
    <li><?php echo CHtml::ajaxLink(Yii::t('job','Save Filter'),$this->createUrl('Savedsearches/Addnew'),array(
        'onclick'=>'$("#jobDialog").dialog("open"); return false;',
        'update'=>'#jobDialog',
		'type' =>'GET','data' => array( 'val1' => Yii::app()->request->getUrl(),'type'=>'2' ),'dataType' => 'text',
        ),array('id'=>'showJobDialog','class'=>'saveic')); ?></li>
    
    
    <li><a href="#" class="load_filter" onclick="hide('load')">Load Filter</a> 
 
    
    <div id="load" style="display:none; background:#fff; left:150px; top:40px" class="drop">
    <div class="droparrow"></div>
        <ul class="loaddrop">
        <?php $data=Savedsearches::model()->findAllByAttributes(array('user_id'=>Yii::app()->User->id,'type'=>'2'));
		if($data)
		{ 
			foreach ($data as $data1)
			{
				echo CHtml::link($data1->name, $data1->url,array('class'=>'vtip'));
			}
		}
		else
		{
			echo '<span style="color:#d30707"><i>No Saved Searches</i></span>';
		}
		?>
        </div></li>
    
    
      
    <li><?php echo CHtml::link('Clear All', array('manage'),array('class'=>'clear_all last')); ?></li>
    
    </ul>
    </div>
    <div class="bttns_imprtcntact">
    <ul>
    <li><a class=" import_contact last" href="">Import Contact</a></li>
    
      

    </ul>
    </div>
    
    <div class="bttns_addstudent ">
    <ul>
    <li><?php echo CHtml::link('Add Employee', array('create'),array('class'=>'addbttn last')); ?></li>
    </ul>
    </div>
    </div>
  
    <div class="clear"></div>
    <div class="filtercontner">
    <div class="filterbxcntnt">
   	<div class="filterbxcntnt_inner" style="border-bottom:#ddd solid 1px; height:60px;">
    <ul>
    <li style="font-size:16px">Filter Your Employees:</li>
    
    <?php $form=$this->beginWidget('CActiveForm', array(
	'method'=>'get',
	
)); ?>


<li><div onclick="hide('name')" style="cursor:pointer;">Name</div>
<div id="name" style="display:none;" class="drop" >
<div class="droparrow"></div>
<input type="search" placeholder="search" name="name" value="<?php echo isset($_GET['name']) ? CHtml::encode($_GET['name']) : '' ; ?>" />
<input type="submit" value="Apply" />
</div>
</li>


<li><div onclick="hide('admissionnumber')" style="cursor:pointer;">Employee number</div>
<div id="admissionnumber" style="display:none;" class="drop">
<div class="droparrow"></div>
<input type="search" placeholder="search" name="employeenumber" value="<?php echo isset($_GET['employeenumber']) ? CHtml::encode($_GET['employeenumber']) : '' ; ?>" />
<input type="submit" value="Apply" />
</div>
</li>

<li><div onclick="hide('batch')" style="cursor:pointer;">Department</div>
<div id="batch" style="display:none; " class="drop">
<div class="droparrow"></div>
<?php 

$data1 = CHtml::listData(EmployeeDepartments::model()->findAll(array('order'=>'name DESC')),'id','name');
echo CHtml::activeDropDownList($model,'employee_department_id',$data1,array('prompt'=>'Select','id'=>'employee_department_id')); ?>
<input type="submit" value="Apply" />
</div>
</li>

<li><div onclick="hide('cat')" style="cursor:pointer;">Category</div>
<div id="cat" style="display:none; " class="drop">
<div class="droparrow"></div>
<?php 

$data2 = CHtml::listData(EmployeeCategories::model()->findAll(array('order'=>'name DESC')),'id','name');
echo CHtml::activeDropDownList($model,'employee_category_id',$data2,array('prompt'=>'Select','id'=>'employee_category_id')); ?>
<input type="submit" value="Apply" />
</div>
</li>


<li><div onclick="hide('pos')" style="cursor:pointer;">Position</div>
<div id="pos" style="display:none; " class="drop">
<div class="droparrow"></div>
<?php 

$data3 = CHtml::listData(EmployeePositions::model()->findAll(array('order'=>'name DESC')),'id','name');
echo CHtml::activeDropDownList($model,'employee_position_id',$data3,array('prompt'=>'Select','id'=>'employee_position_id')); ?>
<input type="submit" value="Apply" />
</div>
</li>

<li><div onclick="hide('grd')" style="cursor:pointer;">Grade</div>
<div id="grd" style="display:none;" class="drop">
<div class="droparrow"></div>
<?php 

$data4 = CHtml::listData(EmployeeGrades::model()->findAll(array('order'=>'name DESC')),'id','name');
echo CHtml::activeDropDownList($model,'employee_grade_id',$data4,array('prompt'=>'Select','id'=>'employee_grade_id')); ?>
<input type="submit" value="Apply" />
</div>
</li>


<li><div onclick="hide('gender')" style="cursor:pointer;">Gender</div>
<div id="gender" style="display:none; width:150px; min-height:30px" class="drop">
<div class="droparrow"></div>
<?php 

echo CHtml::activeDropDownList($model,'gender',array('M' => 'Male', 'F' => 'Female'),array('prompt'=>'All')); 
 ?>
 <input type="submit" value="Apply" />
</div>
</li>

<li><div onclick="hide('marital')" style="cursor:pointer;">Marital Status</div>
<div id="marital" style="display:none; width:150px; min-height:30px" class="drop">
<div class="droparrow"></div>
<?php 

echo CHtml::activeDropDownList($model,'marital_status',array('Single'=>'Single','Married'=>'Married','Divorced'=>'Divorced'),array('prompt'=>'All')); 
 ?>
 <input type="submit" value="Apply" />
</div>
</li>

<li><div onclick="hide('bloodgroup')" style="cursor:pointer;">Blood Group</div>
<div id="bloodgroup" style="display:none;width:140px; min-height:30px" class="drop" >
<div class="droparrow"></div>
<?php echo CHtml::activeDropDownList($model,'blood_group',
		 							array('A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'O+' => 'O+', 'O-' => 'O-', 'AB+' => 'AB+', 'AB-' => 'AB-'),
									array('prompt' => 'select')); ?>
                                    <input type="submit" value="Apply" />
</div>
</li>
                                    


<li><div onclick="hide('nationality')" style="cursor:pointer;">Country</div>
<div id="nationality" style="display:none; width:225px; left:-180px;" class="drop">
<div class="droparrow" style="left:200px;"></div>
<?php echo CHtml::activeDropDownList($model,'nationality_id',CHtml::listData(Countries::model()->findAll(),'id','name'),array('prompt'=>'Select')); ?>
<input type="submit" value="Apply" />
</div>
</li>


<li><div onclick="hide('dob')" style="cursor:pointer;">Date Of Birth</div>
<div id="dob" style="display:none; width:280px; left:-210px;" class="drop">
<div class="droparrow" style=" left:240px"></div>
<?php echo CHtml::activeDropDownList($model,'dobrange',array('1' => 'born before', '2' => 'born in', '3' => 'born after'),array('prompt'=>'Option')); ?>
<?php 
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'name'=>'Employees[date_of_birth]',
								'model'=>$model,
								'value'=>$model->date_of_birth,
								
								'options'=>array(
									'showAnim'=>'fold',
									'dateFormat'=>'dd-mm-yy',
								),
								'htmlOptions'=>array(
									'style'=>'height:20px;'
								),
							));
		 ?>
         <input type="submit" value="Apply" />
</div>
</li>

<li><div onclick="hide('admission')" style="cursor:pointer;">Joining Date</div>
<div id="admission" style="display:none; width:280px; left:-190px" class="drop">
<div class="droparrow" style=" left:240px"></div>
<?php echo CHtml::activeDropDownList($model,'joinrange',array('1' => 'before', '2' => 'in', '3' => 'after'),array('prompt'=>'Option')); ?>
<?php 
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(
								'name'=>'Employees[joining_date]',
								'model'=>$model,
								'value'=>$model->joining_date,
								
								'options'=>array(
									'showAnim'=>'fold',
									'dateFormat'=>'dd-mm-yy',
								),
								'htmlOptions'=>array(
									'style'=>'height:20px;'
								),
							));
		 ?>
         <input type="submit" value="Apply" />
</div>
</li>

<li><div onclick="hide('status')" style="cursor:pointer;">Status</div>
<div id="status" style="display:none; width:150px; min-height:30px; left:-120px" class="drop">
<div class="droparrow"  style="left:140px"></div>

<?php 
echo CHtml::activeDropDownList($model,'status',array('1' => 'Present', '0' => 'Former'),array('selected'=>'selected','prompt'=>'All')); 
 ?>
 <input type="submit" value="Apply" />
</div>
</li>






<?php $this->endWidget(); ?>
    
    </ul>
    </div>
    <div class="clear"></div>
    <div class="filterbxcntnt_inner_bot" >
    <div class="filterbxcntnt_left"><strong>Active Filters:</strong></div>
    <div class="clear"></div>
    <div class="filterbxcntnt_right">
    <ul>
    
    
    <?php if(isset($_REQUEST['name']) and $_REQUEST['name']!=NULL)
	{
		$j++; ?>
    <li>Name : <?php echo $_REQUEST['name']?><a href="<?php echo Yii::app()->request->getUrl().'&name='?>"></a></li>
    <?php } ?>
    
    
    <?php if(isset($_REQUEST['employeenumber']) and $_REQUEST['employeenumber']!=NULL)
    { 
	    $j++; ?>
    <li>Admission number : <?php echo $_REQUEST['employeenumber']?><a href="<?php echo Yii::app()->request->getUrl().'&employeenumber='?>"></a></li>
    <?php } ?>
    
    
    <?php if(isset($_REQUEST['Employees']['employee_department_id']) and $_REQUEST['Employees']['employee_department_id']!=NULL)
    { 
	   $j++;
	?>
    <li>Department : <?php echo EmployeeDepartments::model()->findByAttributes(array('id'=>$_REQUEST['Employees']['employee_department_id']))->name?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[employee_department_id]='?>"></a></li>
    <?php } ?>
    
    
    <?php if(isset($_REQUEST['Employees']['employee_category_id']) and $_REQUEST['Employees']['employee_category_id']!=NULL)
    { 
	   $j++;
	?>
    <li>Category : <?php echo EmployeeCategories::model()->findByAttributes(array('id'=>$_REQUEST['Employees']['employee_category_id']))->name?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[employee_category_id]='?>"></a></li>
    <?php } ?>
    
    
    <?php if(isset($_REQUEST['Employees']['employee_position_id']) and $_REQUEST['Employees']['employee_position_id']!=NULL)
    { 
	   $j++;
	?>
    <li>Position : <?php echo EmployeePositions::model()->findByAttributes(array('id'=>$_REQUEST['Employees']['employee_position_id']))->name?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[employee_position_id]='?>"></a></li>
    <?php } ?>
    
    
    <?php if(isset($_REQUEST['Employees']['employee_grade_id']) and $_REQUEST['Employees']['employee_grade_id']!=NULL)
    { 
	   $j++;
	?>
    <li>Grade : <?php echo EmployeeGrades::model()->findByAttributes(array('id'=>$_REQUEST['Employees']['employee_grade_id']))->name?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[employee_grade_id]='?>"></a></li>
    <?php } ?>
    
    
    
    <?php if(isset($_REQUEST['Employees']['gender']) and $_REQUEST['Employees']['gender']!=NULL)
	{ $j++;
	if($_REQUEST['Employees']['gender']=='M')
	$gen='Male';
	else
	$gen='Female';
	?>
    <li>Gender : <?php echo $gen?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[gender]='?>"></a></li>
    <?php } ?>
    
    
    <?php if(isset($_REQUEST['Employees']['marital_status']) and $_REQUEST['Employees']['marital_status']!=NULL)
	{
		$j++; ?>
    <li>Marital Status : <?php echo $_REQUEST['Employees']['marital_status']?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[marital_status]='?>"></a></li>
    <?php } ?>
    
    
    <?php if(isset($_REQUEST['Employees']['blood_group']) and $_REQUEST['Employees']['blood_group']!=NULL)
	{ 
	   $j++; ?>
    <li>Blood Group : <?php echo $_REQUEST['Employees']['blood_group']?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[blood_group]='?>"></a></li>
    <?php } ?>
    
    
    <?php  if(isset($_REQUEST['Employees']['nationality_id']) and $_REQUEST['Employees']['nationality_id']!=NULL)
	{
	    $j++; ?>
    <li>Country : <?php echo Countries::model()->findByAttributes(array('id'=>$_REQUEST['Employees']['nationality_id']))->name?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[nationality_id]='?>"></a></li>
    <?php } ?>
    
    
    <?php  
	
	if(isset($_REQUEST['Employees']['dobrange']) and $_REQUEST['Employees']['dobrange']!=NULL)
	{
		if(isset($_REQUEST['Employees']['date_of_birth']) and $_REQUEST['Employees']['date_of_birth']!=NULL)
	    { $j++;
			      if($_REQUEST['Employees']['dobrange']=='1')
				  {
					  $range = 'born before';
				  }
				  if($_REQUEST['Employees']['dobrange']=='2')
				  {
					  $range = 'born in';
				  }
				  if($_REQUEST['Employees']['dobrange']=='3')
				  {
					  $range = 'born after';
				  }?>
    <li>Date Of Birth : <?php echo $range.' : '.$_REQUEST['Employees']['date_of_birth']?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[date_of_birth]='?>"></a></li>
    <?php }} 
	
	elseif(isset($_REQUEST['Employees']['dobrange']) and $_REQUEST['Employees']['dobrange']==NULL)
	{ 
	  if(isset($_REQUEST['Employees']['date_of_birth']) and $_REQUEST['Employees']['date_of_birth']!=NULL)
	  { $j++;
		        $range = 'born in';  
				  ?>
    <li>Date Of Birth : <?php echo $range.' : '.$_REQUEST['Employees']['date_of_birth']?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[date_of_birth]='?>"></a></li>
    <?php }} ?>
    
    
    
    
    <?php 
	if(isset($_REQUEST['Employees']['joinrange']) and $_REQUEST['Employees']['joinrange']!=NULL)
    {
		if(isset($_REQUEST['Employees']['joining_date']) and $_REQUEST['Employees']['joining_date']!=NULL)
			  { $j++;
				  if($_REQUEST['Employees']['joinrange']=='1')
				  {
					  $joinrange = 'before';
				  }
				  if($_REQUEST['Employees']['joinrange']=='2')
				  {
					  $joinrange = 'in';
				  }
				  if($_REQUEST['Employees']['joinrange']=='3')
				  {
					  $joinrange = 'after';
				  }
				  
				  ?>
     <li>Joining Date : <?php echo $joinrange.' : '.$_REQUEST['Employees']['joining_date']?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[joining_date]='?>"></a></li>
    <?php }} 
	elseif(isset($_REQUEST['Employees']['joinrange']) and $_REQUEST['Employees']['joinrange']==NULL)
		{
			  if(isset($_REQUEST['Employees']['joining_date']) and $_REQUEST['Employees']['joining_date']!=NULL)
			  { $j++;
			  
				   $joinrange = 'in'; ?>
     <li>Joining Date : <?php echo $joinrange.' : '.$_REQUEST['Employees']['joining_date']?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[joining_date]='?>"></a></li>
    <?php }}?> 
    
    
    <?php  if(isset($_REQUEST['Employees']['status']) and $_REQUEST['Employees']['status']!=NULL)
	{ $j++;
		  if($_REQUEST['Employees']['status']=='1')
		  {
			  $status='Present';
		  }
		  else
		  {
		      $status='Former';
		  }
		  ?>
		  <li>Status : <?php echo $status?><a href="<?php echo Yii::app()->request->getUrl().'&Employees[status]='?>"></a></li>
    <?php } ?> 
    <?php if($j==0)
	{
		echo '<div style="padding-top:5px;"><i>No Active Filters</i></div>';
	}?> 
   
    <div class="clear"></div>
    </ul>
    </div>
    <div class="clear"></div>
    </div>
    </div>
    </div>
    <div class="clear"></div>
    
      <div class="list_contner_hdng">
    <div class="letterNavCon" id="letterNavCon">
    
    
  
                    
<ul>
<?php if((isset($_REQUEST['val']) and $_REQUEST['val']==NULL) or (!isset($_REQUEST['val'])))
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>

<?php echo CHtml::link('All', Yii::app()->request->getUrl().'&val=',array('class'=>'vtip')); ?>                            
</li>


<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='A')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php echo CHtml::link('A', Yii::app()->request->getUrl().'&val=A',array('class'=>'vtip')); ?>                            
</li>


<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='B')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('B', Yii::app()->request->getUrl().'&val=B',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='C')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('C', Yii::app()->request->getUrl().'&val=C',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='D')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('D', Yii::app()->request->getUrl().'&val=D',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='E')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('E', Yii::app()->request->getUrl().'&val=E',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='F')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('F', Yii::app()->request->getUrl().'&val=F',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='G')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('G', Yii::app()->request->getUrl().'&val=G',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='H')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('H', Yii::app()->request->getUrl().'&val=H',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='I')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('I', Yii::app()->request->getUrl().'&val=I',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='J')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('J', Yii::app()->request->getUrl().'&val=J',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='K')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('K', Yii::app()->request->getUrl().'&val=K',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='L')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('L', Yii::app()->request->getUrl().'&val=L',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='M')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('M', Yii::app()->request->getUrl().'&val=M',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='N')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('N', Yii::app()->request->getUrl().'&val=N',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='O')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('O', Yii::app()->request->getUrl().'&val=O',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='P')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('P', Yii::app()->request->getUrl().'&val=P',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='Q')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('Q', Yii::app()->request->getUrl().'&val=Q',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='R')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('R', Yii::app()->request->getUrl().'&val=R',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='S')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('S', Yii::app()->request->getUrl().'&val=S',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='T')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('T', Yii::app()->request->getUrl().'&val=T',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='U')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('U', Yii::app()->request->getUrl().'&val=U',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='V')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('V', Yii::app()->request->getUrl().'&val=V',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='W')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('W', Yii::app()->request->getUrl().'&val=W',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='X')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('X', Yii::app()->request->getUrl().'&val=X',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='Y')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('Y', Yii::app()->request->getUrl().'&val=Y',array('class'=>'vtip')); ?>                            
</li>
<?php if(isset($_REQUEST['val']) and $_REQUEST['val']=='Z')
{
	echo '<li class="ln_active">';
}
else
{
	echo '<li>';
}
?>
<?php  echo CHtml::link('Z', Yii::app()->request->getUrl().'&val=Z',array('class'=>'vtip')); ?>                            
</li>
<div class="clear"></div>
</ul>
                    	<div class="clear"></div>
                    </div>
    
    </div>                                          
    <div class="list_contner">
    
    <div class="clear"></div>
                                                
    <?php if($list)
	{?>
        <div class="tablebx">  
         <div class="pagecon">
                                                 <?php 
	                                                  $this->widget('CLinkPager', array(
													  'currentPage'=>$pages->getCurrentPage(),
													  'itemCount'=>$item_count,
													  'pageSize'=>$page_size,
													  'maxButtonCount'=>5,
													  //'nextPageLabel'=>'My text >',
													  'header'=>'',
												  'htmlOptions'=>array('class'=>'pages'),
												  ));?>
                                                  </div>                                         
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    
  <tr class="tablebx_topbg">
    <td>Sl. No.</td>	
    <td>Employee Name</td>
    <td>Employee No.</td>
    <td>Department</td>
    <td>Gender</td>
    <!--<td style="border-right:none;">Task</td>-->
  </tr>
  <?php 
  if(isset($_REQUEST['page']))
  {
      $i=($pages->pageSize*$_REQUEST['page'])-9;
  }
  else
  {
	  $i=1;
  }
  
  $cls="even";
  ?>
  
  <?php foreach($list as $list_1)
	{ ?>
 <tr class=<?php echo $cls;?>>
    <td><?php echo $i; ?></td>
    <td><?php echo CHtml::link($list_1->first_name.'  '.$list_1->middle_name.'  '.$list_1->last_name,array('view','id'=>$list_1->id)) ?></td>
    <td><?php echo $list_1->employee_number ?></td>
	<?php $batc = EmployeeDepartments::model()->findByAttributes(array('id'=>$list_1->employee_department_id)); 
	if($batc!=NULL)
	{
		 ?>
		<td><?php echo $batc->name; ?></td> 
	<?php }
	else{?> <td>-</td> <?php }?>
    
    <td><?php if($list_1->gender=='M')
	{
		echo 'Male';
	}
	elseif($list_1->gender=='F')
	{
		echo 'Female';
	}?></td>
    <!--<td style="border-right:none;">Task</td>-->
  </tr><?php
  if($cls=="even")
  {
	 $cls="odd" ;
  }
  else
  {
	  $cls="even"; 
  }
	$i++;} ?>
</table>

<div class="pagecon">
    <?php                                          
	                                                  $this->widget('CLinkPager', array(
													  'currentPage'=>$pages->getCurrentPage(),
													  'itemCount'=>$item_count,
													  'pageSize'=>$page_size,
													  'maxButtonCount'=>5,
													  //'nextPageLabel'=>'My text >',
													  'header'=>'',
												  'htmlOptions'=>array('class'=>'pages'),
												  ));?>
                                                  </div>
<div class="clear"></div>
    </div>
    <?php }
	else
	{
	echo '<div class="listhdg" align="center">Nothing Found!!</div>';	
	}?>
    
    
    </div>
    
    

<br />

  </div>
  </div> 

</div>
    </td>
  </tr>
</table>
