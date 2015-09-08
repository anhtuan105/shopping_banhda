<?php
/* @var $this ViewcountsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Viewcounts',
);

$this->menu=array(
	array('label'=>'Create Viewcounts', 'url'=>array('create')),
	array('label'=>'Manage Viewcounts', 'url'=>array('admin')),
);
?>

<h1>Viewcounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
