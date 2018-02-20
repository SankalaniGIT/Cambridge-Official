<?php
$this->breadcrumbs=array(
	'Fee Collection Particulars'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List feeCollectionParticulars', 'url'=>array('index')),
	array('label'=>'Create feeCollectionParticulars', 'url'=>array('create')),
	array('label'=>'View feeCollectionParticulars', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage feeCollectionParticulars', 'url'=>array('admin')),
);
?>

<h1>Update feeCollectionParticulars <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>