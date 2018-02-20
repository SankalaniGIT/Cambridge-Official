<?php
$this->breadcrumbs=array(
	'Finance Fee Collections'=>array('index'),
	$model->name,
);

/**$this->menu=array(
	array('label'=>'List ', 'url'=>array('index')),
	array('label'=>'Create ', 'url'=>array('create')),
	array('label'=>'Update ', 'url'=>array('update', 'id'=>$model->)),
	array('label'=>'Delete ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ', 'url'=>array('admin')),
);*/
?>

<h1>View FinanceFeeCollections <?php echo $model->name; ?></h1>
<?php /*?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'start_date',
		'end_date',
		'due_date',
		'fee_category_id',
		'batch_id',
		'is_deleted',
	),
)); ?><?php */?>
<div class="tableinnerlist" style="padding-right:25px;">
<table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td>Name</td>
    <td><?php echo $model->name; ?></td>
  </tr>
    <tr>
    <td>start Date</td>
    <td><?php
	echo $model->start_date;
	?></td>
  </tr>
    <tr>
    <td>End Date</td>
    <td><?php echo $model->end_date; ?></td>
  </tr>
      <tr>
    <td>Fee Category</td>
    <td><?php 
	$ss = FinanceFeeCategories::model()->findByAttributes(array('id'=>$model->fee_category_id));
	echo $ss->name; ?></td>
  </tr>
  <tr>
    <td>Batch Name</td>
    <td><?php
    $posts=Batches::model()->findByAttributes(array('id'=>$model->batch_id));
	echo $posts->name;
	?></td>
  </tr>
</table>
</div>

