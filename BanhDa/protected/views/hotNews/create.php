<?php
/* @var $this HotNewsController */
/* @var $model HotNews */

$this->breadcrumbs=array(
	'Hot News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HotNews', 'url'=>array('index')),
	array('label'=>'Manage HotNews', 'url'=>array('admin')),
);
?>

<h1>Create HotNews</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>