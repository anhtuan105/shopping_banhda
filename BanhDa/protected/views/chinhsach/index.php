<?php
/* @var $this ChinhsachController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Chinhsaches',
);

$this->menu=array(
	array('label'=>'Create Chinhsach', 'url'=>array('create')),
	array('label'=>'Manage Chinhsach', 'url'=>array('admin')),
);
?>

<h1>Chinh sach</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
