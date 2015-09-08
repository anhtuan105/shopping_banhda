<?php
/* @var $this IntroducesController */
/* @var $model Introduces */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/ckeditor/ckeditor.js"></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'introduces-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'introducecol'); ?>
		<?php echo $form->textField($model,'introducecol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'introducecol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6,'id'=>'noidung')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		<?php echo CHtml::button('Cancel',array('submit' => array('introduces/index')));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

  <script>
       CKEDITOR.replace('noidung');
  </script>  

