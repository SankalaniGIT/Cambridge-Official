<?php
$this->breadcrumbs=array(
	'Fee Collection Particulars'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List feeCollectionParticulars', 'url'=>array('index')),
	array('label'=>'Create feeCollectionParticulars', 'url'=>array('create')),
	array('label'=>'Update feeCollectionParticulars', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete feeCollectionParticulars', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage feeCollectionParticulars', 'url'=>array('admin')),
);
?>

<h1>View feeCollectionParticulars #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'amount',
		'finance_fee_collection_id',
		'student_category_id',
		'admission_no',
		'student_id',
		'is_deleted',
		'created_at',
		'updated_at',
	),
)); ?>
