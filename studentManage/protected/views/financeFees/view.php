<?php
$this->breadcrumbs=array(
	'Finance Fees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FinanceFees', 'url'=>array('index')),
	array('label'=>'Create FinanceFees', 'url'=>array('create')),
	array('label'=>'Update FinanceFees', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FinanceFees', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FinanceFees', 'url'=>array('admin')),
);
?>

<h1>View FinanceFees #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fee_collection_id',
		'transaction_id',
		'student_id',
		'is_paid',
	),
)); ?>
