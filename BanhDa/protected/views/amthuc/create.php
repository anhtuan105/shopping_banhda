<?php
/* @var $this AmthucController */
/* @var $model Amthuc */

$this->breadcrumbs=array(
	'Amthuc'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Amthuc', 'url'=>array('index')),
	array('label'=>'Manage Amthuc', 'url'=>array('admin')),
);
?>

<h1>Create Amthuc</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>