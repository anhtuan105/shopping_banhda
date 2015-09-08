<?php
/* @var $this BaogiaController */
/* @var $model Baogia */

$this->breadcrumbs=array(
	'Baogias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Baogia', 'url'=>array('index')),
	array('label'=>'Manage Baogia', 'url'=>array('admin')),
);
?>

<h1>Create Bao gia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>