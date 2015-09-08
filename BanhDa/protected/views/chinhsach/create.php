<?php
/* @var $this ChinhsachController */
/* @var $model Chinhsach */

$this->breadcrumbs=array(
	'Chinhsaches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Chinhsach', 'url'=>array('index')),
	array('label'=>'Manage Chinhsach', 'url'=>array('admin')),
);
?>

<h1>Create Chinhsach</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>