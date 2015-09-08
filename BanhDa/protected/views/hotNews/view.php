<?php
/* @var $this HotNewsController */
/* @var $model HotNews */

$this->breadcrumbs=array(
	'Hot News'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HotNews', 'url'=>array('index')),
	array('label'=>'Create HotNews', 'url'=>array('create')),
	array('label'=>'Update HotNews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HotNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HotNews', 'url'=>array('admin')),
);
?>

<h1>View HotNews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'news_id',
	),
)); ?>
