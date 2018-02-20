<?php
$this->breadcrumbs=array(
	'Finance Fee Collections'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FinanceFeeCollections', 'url'=>array('index')),
	array('label'=>'Create FinanceFeeCollections', 'url'=>array('create')),
	array('label'=>'View FinanceFeeCollections', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FinanceFeeCollections', 'url'=>array('admin')),
);
?>

<h1>Update FinanceFeeCollections <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>