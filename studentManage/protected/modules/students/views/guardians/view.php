<?php
$this->breadcrumbs=array(
	'Guardians'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Guardians', 'url'=>array('index')),
	array('label'=>'Create Guardians', 'url'=>array('create')),
	array('label'=>'Update Guardians', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Guardians', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Guardians', 'url'=>array('admin')),
);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="247" valign="top">
    
    <?php $this->renderPartial('/default/left_side');?>
    
    </td>
    <td valign="top">
    <div class="cont_right formWrapper">
<h1>View Guardians #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ward_id',
		'first_name',
		'last_name',
		'relation',
		'email',
		'office_phone1',
		'office_phone2',
		'mobile_phone',
		'office_address_line1',
		'office_address_line2',
		'city',
		'state',
		'country_id',
		'dob',
		'occupation',
		'income',
		'education',
		'created_at',
		'updated_at',
	),
)); ?>
</div>
    </td>
  </tr>
</table>