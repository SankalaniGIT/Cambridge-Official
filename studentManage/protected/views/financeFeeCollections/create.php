<?php
$this->breadcrumbs=array(
	'Finance Fee Collections'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FinanceFeeCollections', 'url'=>array('index')),
	array('label'=>'Manage FinanceFeeCollections', 'url'=>array('admin')),
);
?>

<h1>Create FinanceFeeCollections</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>