<?php
/* @var $this TuyendungController */
/* @var $model Tuyendung */

$this->breadcrumbs=array(
	'Tuyendungs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tuyendung', 'url'=>array('index')),
	array('label'=>'Create Tuyendung', 'url'=>array('create')),
	array('label'=>'Update Tuyendung', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tuyendung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tuyendung', 'url'=>array('admin')),
);
?>

<h1>View Tuyendung #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'content',
	),
)); ?>
