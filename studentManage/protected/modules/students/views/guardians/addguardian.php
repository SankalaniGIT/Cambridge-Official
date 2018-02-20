
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <?php $this->renderPartial('/default/left_side');?>
    
    </td>
    <td valign="top">
    <div class="cont_right formWrapper">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guardians-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php
 $posts=Guardians::model()->findAll("ward_id=:x", array(':x'=>$_REQUEST['id']));
 ?>
 <h1>New Admission</h1>
 <div class="wz-navWrapper">
	<ul>
    	<li class="fstep-Completed">1</li>
        <li class="sstep-Completed">2</li>
        <li class="tstep-Current">3</li>
        <li class="fostep">4</li>
        <li class="fistep">5</li>
    </ul>
<div class="clear"></div>
</div>
<div class="captionWrapper">
	<ul>
    	<li><h2>1.Student Details</h2><span>Admission Details</span></li>
        <li><h2>2.Parent Details</h2><span>Parent/Guardian Details</span></li>
        <li><h2 class="cur">3.Emergency Contact</h2><span>Contact Address</span></li>
        <li><h2>4.Previous Details</h2><span>Educational Details</span></li>
        <li class="last"><h2>5.Student Profile</h2><span>View Student Details</span></li>
    </ul>
</div>
<div class="formCon">
<h2><span>Step 3.</span> Emergency contact</h2>
<div class="formConInner">
 <table>
 <tr>
  <td>Guardian Name</td>
  <td>Relationship</td>
 </tr>
 <?php
  echo $form->hiddenField($model,'ward_id',array('value'=>$_REQUEST['id']));
 foreach($posts as $posts_1)
 {
	 echo '<tr>';
	 echo '<td>'.
	  $form->radioButton($model, 'radio',array($posts_1->id => CHtml::link($posts_1->first_name, array('guardians/view', 'id'=>$posts_1->id)))).
          '</td>';
	 echo '<td>'.$posts_1->relation.'</td>';
	 echo '</tr>';
 }

?>
</table>
<div style="padding:20px 0 0 0px; text-align:center">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Next Step »' : 'Save',array('class'=>'formbut')); ?></div>
<?php $this->endWidget(); ?>
</div>
 	</div>
     	</div>
    </td>
  </tr>
</table>