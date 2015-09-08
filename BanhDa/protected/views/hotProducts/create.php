<?php
/* @var $this HotProductsController */
/* @var $model HotProducts */

$this->breadcrumbs=array(
	'Hot Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HotProducts', 'url'=>array('index')),
	array('label'=>'Manage HotProducts', 'url'=>array('admin')),
);
?>

<h1>Create HotProducts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>