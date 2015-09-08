<?php
/* @var $this IntroducesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Introduces',
);

$this->menu=array(
	array('label'=>'Create Introduces', 'url'=>array('create')),
	array('label'=>'Manage Introduces', 'url'=>array('admin')),
);
?>

<h1>Giới thiệu về công ty</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
