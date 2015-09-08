<?php
/* @var $this IntroducesController */
/* @var $model Introduces */

$this->breadcrumbs=array(
	'Introduces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Introduces', 'url'=>array('index')),
	array('label'=>'Manage Introduces', 'url'=>array('admin')),
);
?>

<h1>Create Introduces</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>