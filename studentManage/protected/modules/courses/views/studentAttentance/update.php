<?php
$this->breadcrumbs=array(
	'Student Attentances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentAttentance', 'url'=>array('index')),
	array('label'=>'Create StudentAttentance', 'url'=>array('create')),
	array('label'=>'View StudentAttentance', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StudentAttentance', 'url'=>array('admin')),
);
?>

<h1>Update StudentAttentance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>