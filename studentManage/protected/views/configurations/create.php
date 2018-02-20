<?php
$this->breadcrumbs=array(
	'Configurations'=>array('index'),
	'Create',
);


?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <?php $this->renderPartial('//configurations/left_side');?>
    
    </td>
    <td valign="top">
    <div class="cont_right formWrapper">
<h1>School Configurations</h1><br />

<?php echo $this->renderPartial('_form', array('model'=>$model,'logo'=>$logo)); ?>
</div>
    </td>
  </tr>
</table>
