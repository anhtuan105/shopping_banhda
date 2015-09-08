<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Store', 'url'=>array('index')),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>

<h1>Thêm thông tin đại lý</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>