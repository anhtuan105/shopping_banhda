<?php
/* @var $this TuyendungController */
/* @var $model Tuyendung */

$this->breadcrumbs=array(
	'Tuyendungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tuyendung', 'url'=>array('index')),
	array('label'=>'Manage Tuyendung', 'url'=>array('admin')),
);
?>

<h1>Create Tuyendung</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>