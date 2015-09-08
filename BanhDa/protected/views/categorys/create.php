<?php
/* @var $this CategorysController */
/* @var $model Categorys */

$this->breadcrumbs=array(
	'Categorys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Categorys', 'url'=>array('index')),
	array('label'=>'Manage Categorys', 'url'=>array('admin')),
);
?>

<h1>Create Categorys</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>