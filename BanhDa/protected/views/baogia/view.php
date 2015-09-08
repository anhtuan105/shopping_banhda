<?php
/* @var $this BaogiaController */
/* @var $model Baogia */

$this->breadcrumbs=array(
	'Baogias'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Baogia', 'url'=>array('index')),
	array('label'=>'Create Baogia', 'url'=>array('create')),
	array('label'=>'Update Baogia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Baogia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Baogia', 'url'=>array('admin')),
);
?>

<h1>View Baogia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'content',
	),
)); ?>
