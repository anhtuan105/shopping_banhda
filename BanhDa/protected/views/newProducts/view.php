<?php
/* @var $this NewProductsController */
/* @var $model NewProducts */

$this->breadcrumbs=array(
	'New Products'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NewProducts', 'url'=>array('index')),
	array('label'=>'Create NewProducts', 'url'=>array('create')),
	array('label'=>'Update NewProducts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NewProducts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewProducts', 'url'=>array('admin')),
);
?>

<h1>View NewProducts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
	),
)); ?>
