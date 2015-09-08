<?php
/* @var $this ViewcountsController */
/* @var $model Viewcounts */

$this->breadcrumbs=array(
	'Viewcounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Viewcounts', 'url'=>array('index')),
	array('label'=>'Create Viewcounts', 'url'=>array('create')),
	array('label'=>'Update Viewcounts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Viewcounts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Viewcounts', 'url'=>array('admin')),
);
?>

<h1>View Viewcounts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'total',
		'current',
	),
)); ?>
