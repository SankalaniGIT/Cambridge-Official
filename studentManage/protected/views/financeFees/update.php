<?php
$this->breadcrumbs=array(
	'Finance Fees'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FinanceFees', 'url'=>array('index')),
	array('label'=>'Create FinanceFees', 'url'=>array('create')),
	array('label'=>'View FinanceFees', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FinanceFees', 'url'=>array('admin')),
);
?>

<h1>Update FinanceFees <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>