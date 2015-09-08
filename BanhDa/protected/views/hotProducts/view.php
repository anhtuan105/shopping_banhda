<?php
/* @var $this HotProductsController */
/* @var $model HotProducts */

$this->breadcrumbs=array(
	'Hot Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HotProducts', 'url'=>array('index')),
	array('label'=>'Create HotProducts', 'url'=>array('create')),
	array('label'=>'Update HotProducts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HotProducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HotProducts', 'url'=>array('admin')),
);
?>

<h1>View HotProducts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
	),
)); ?>
