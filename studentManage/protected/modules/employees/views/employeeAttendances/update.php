<?php
$this->breadcrumbs=array(
	'Employee Attendances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmployeeAttendances', 'url'=>array('index')),
	array('label'=>'Create EmployeeAttendances', 'url'=>array('create')),
	array('label'=>'View EmployeeAttendances', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmployeeAttendances', 'url'=>array('admin')),
);
?>

<h1>Update EmployeeAttendances <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>