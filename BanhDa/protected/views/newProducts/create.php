<?php
/* @var $this NewProductsController */
/* @var $model NewProducts */

$this->breadcrumbs=array(
	'New Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NewProducts', 'url'=>array('index')),
	array('label'=>'Manage NewProducts', 'url'=>array('admin')),
);
?>

<h1>Create NewProducts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>