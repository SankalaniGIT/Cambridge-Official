 <div class="emp_cont_left">
    <div class="empleftbx">
<div class="empimgbx" style="height:120px;">
    <ul>
    <li>
   <?php
   $employee=Employees::model()->findByAttributes(array('id'=>$_REQUEST['id']));
	 if($employee->photo_file_name){ 
    echo '<img class="imgbrder" src="'.$this->createUrl('DisplaySavedImage&id='.$employee->primaryKey).'" alt="'.$employee->photo_file_name.'" width="101" height="107" />';
	 }else{
		echo '<img class="imgbrder" src="images/super_avatar.png" alt='.$employee->first_name.' width="101" height="107" />'; 
	 }
	 ?>
     </li>
    <li class="img_text">
    	<?php echo $employee->first_name; ?><br>
        
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