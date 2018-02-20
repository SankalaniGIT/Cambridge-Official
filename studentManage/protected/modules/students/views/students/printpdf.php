

<style>

.listbxtop_hdng
{
	font-size:15px;	
	color:#1a7701;
	/*text-shadow: 0.1em 0.1em #FFFFFF;*/
	font-weight:bold;
	text-align:left;
	
}
tr td, tr th {
border-left:1px solid #ccc;
border-top:1px solid #ccc;
border-right:1px solid #ccc;

}
td.listbx_subhdng
{
	color:#333333;
	font-size:12px;	
	font-weight:bold;
	
	
}

.odd
{
	background:#DFDFDF;
}
td.subhdng_nrmal
{
	color:#333333;
	font-size:12px;	
}
.table_listbx
{
	margin:0px;
	padding:0px;
	width:1061px;
	
}
.table_listbx td
{
	padding:10px 0px 10px 10px;
	margin:0px;
	
	
}
.table_listbxlast td
{
	border-bottom:none;
	
}


td.subhdng_nrmal
{
	color:#333333;
	font-size:12px;	
}
.last
{
	border-bottom:1px solid #ccc;
}
.first
{
	border:none;
}
</style>


<table class="table_listbx" align="center" width="1061" cellspacing="0" cellpadding="0">
  <tr>
    <td class="first" style="width:50px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="first"><img width="93" height="117" src="images/inner_logo.png"></td>
    <td align="center" valign="middle" class="first"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td class="listbxtop_hdng first" style="text-align:center;"></td>
  </tr>
  <tr>
    <td class="listbxtop_hdng first" style="text-align:center; "><?php $college=Configurations::model()->findByPk(1); ?><?php echo $college->config_value ; ?></td>
  </tr>
  
</table>
</td>
  </tr>
</table>

    
    </td>
    <td class="first"></td>
  </tr>
  
  <tr class="listbxtop_hdng">
    <td width="280" style="border:none;"><?php echo $model->first_name.'&nbsp;'.$model->last_name; ?></td>
    <td width="280" style="border:none;">&nbsp;</td>
    
  </tr>
    <tr>
    <td class="listbx_subhdng odd">Admission Number</td>
    <td class="subhdng_nrmal odd"><?php echo $model->admission_no; ?></td>
    
  </tr>

  <tr>
    <td class="listbx_subhdng">Admission Date</td>
    <td class="subhdng_nrmal"><?php echo $model->admission_date; ?></td>
    
  </tr>

  <tr>
    <td class="listbx_subhdng odd">Batch</td>
    <td class="subhdng_nrmal odd"><?php 
	$posts=Batches::model()->findByAttributes(array('id'=>$model->batch_id));
	echo $posts->name; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng"> Course </td>
    <td class="subhdng_nrmal"><?php echo $posts->course123->course_name; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng odd">Date of Birth</td>
    <td class="subhdng_nrmal odd"><?php echo $model->date_of_birth; ?></td>
   
  </tr>
  <tr>
    <td class="listbx_subhdng">Blood Group</td>
    <td class="subhdng_nrmal"><?php
	echo $model->blood_group;
	$natio_id=Countries::model()->findByAttributes(array('id'=>$model->nationality_id));
	//echo $natio_id->name;?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng odd"> Gender </td>
    <td class="subhdng_nrmal odd"><?php if($model->gender=='M')
											echo 'Male';
										else if($model->gender=='F')
										    echo 'Female';
										else
										     echo ''; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng"> Nationality </td>
    <td class="subhdng_nrmal"><?php $natio_id=Countries::model()->findByAttributes(array('id'=>$model->nationality_id));
	echo $natio_id->name; ?></td>
    
  </tr>
 <tr>
    <td class="listbx_subhdng odd">Language</td>
    <td class="subhdng_nrmal odd"><?php echo $model->language ; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng">Category</td>
    <td class="subhdng_nrmal"><?php $cat =StudentCategories::model()->findByAttributes(array('id'=>$model->student_category_id));
	 echo $cat->name;?></td>
   
  </tr>
  <tr>
    <td class="listbx_subhdng odd">Religion</td>
    <td class="subhdng_nrmal odd"><?php echo $model->religion; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng">Address</td>
    <td class="subhdng_nrmal"><?php echo $model->address_line1.'<br>'. $model->address_line2; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng odd">City</td>
    <td class="subhdng_nrmal odd"><?php echo $model->city; ?></td>
    
  </tr>
  
  <tr>
    <td class="listbx_subhdng ">State</td>
    <td class="subhdng_nrmal "><?php echo $model->state; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng odd">Country</td>
    <td class="subhdng_nrmal odd"><?php
	$posts=Countries::model()->findByAttributes(array('id'=>$model->country_id));
	 echo $posts->name; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng ">Phone</td>
    <td class="subhdng_nrmal "><?php echo $model->phone1; ?></td>
    
  </tr>
   <tr>
    <td class="listbx_subhdng odd">Mobile</td>
    <td class="subhdng_nrmal odd"><?php echo $model->phone2; ?></td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng ">Email</td>
    <td class="subhdng_nrmal "><?php echo $model->email; ?></td>
    
  </tr>
   <tr>
    <td class="listbx_subhdng odd">Group tutor</td>
    <td class="subhdng_nrmal odd">&nbsp;</td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng ">Immediate Contact</td>
    <td class="subhdng_nrmal last"><?php echo $model->immediate_contact_id; ?> 	</td>
    
  </tr>
  <!--<tr>
    <td class="listbx_subhdng odd">PASSPORT NO:</td>
    <td class="subhdng_nrmal odd">&nbsp;</td>
    
  </tr>
  <tr>
    <td class="listbx_subhdng last ">Previous Institution</td>
    <td class="subhdng_nrmal last ">&nbsp;</td>
    
  </tr>-->

  </table>
