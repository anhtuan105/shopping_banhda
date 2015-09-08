<?php
/* @var $this HotNewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hot News',
);

$this->menu=array(
	array('label'=>'Create HotNews', 'url'=>array('create')),
	array('label'=>'Manage HotNews', 'url'=>array('admin')),
);
?>

<h1>Tin tức mới</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
