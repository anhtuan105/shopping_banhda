<?php
/* @var $this SlideshowController */
/* @var $model Slideshow */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slideshow-form',
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imageLink'); ?>
		<?php echo CHtml::activeFileField($model, 'imageLink'); ?>
		<?php echo $form->error($model,'imageLink'); ?>
	</div>

	<?php if($model->isNewRecord!='1'){ ?>
		<div class="row">
		     <?php echo CHtml::image($model->imageLink,"image",array("width"=>200)); ?>
		</div>
	<?php } ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::button('Cancel',array('submit' => array('slideshow/index')));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->