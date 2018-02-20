<?php
$this->breadcrumbs=array(
	'Guardians'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List Guardians', 'url'=>array('index')),
	array('label'=>'Create Guardians', 'url'=>array('create')),
	array('label'=>'View Guardians', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Guardians', 'url'=>array('admin')),
);*/
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <?php $this->renderPartial('/default/left_side');?>
    
    </td>
    <td valign="top">
    <div class="cont_right formWrapper">
<h1>Update Guardian <?php echo $model->first_name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 	</div>
    </td>
  </tr>
</table>