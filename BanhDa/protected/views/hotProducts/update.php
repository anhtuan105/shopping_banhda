<?php
/* @var $this HotProductsController */
/* @var $model HotProducts */

$this->breadcrumbs=array(
	'Hot Products'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HotProducts', 'url'=>array('index')),
	array('label'=>'Create HotProducts', 'url'=>array('create')),
	array('label'=>'View HotProducts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HotProducts', 'url'=>array('admin')),
);
?>

<h1>Update HotProducts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>