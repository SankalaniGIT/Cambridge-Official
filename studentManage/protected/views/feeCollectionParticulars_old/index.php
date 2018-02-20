<?php
$this->breadcrumbs=array(
	'Fee Collection Particulars',
);

$this->menu=array(
	array('label'=>'Create feeCollectionParticulars', 'url'=>array('create')),
	array('label'=>'Manage feeCollectionParticulars', 'url'=>array('admin')),
);
?>

<h1>Fee Collection Particulars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
