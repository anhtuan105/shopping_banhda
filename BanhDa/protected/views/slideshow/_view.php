<?php
/* @var $this SlideshowController */
/* @var $data Slideshow */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('imageLink')); ?>:</b>
	<?php echo CHtml::encode($data->imageLink); ?>
	<br /> -->

	<?php echo CHtml::image($data->imageLink,"image",array("width"=>200)); ?>


</div>