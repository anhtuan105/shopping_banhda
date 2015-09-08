
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"></script>

<div id="tab-ctright" style="font-size: 20px;margin-bottom: 10px;">Liên hệ</div>
<div class="contact-page" style="border-top-left-radius: 5px;border-top-right-radius: 5px;">
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Liên hệ';
$this->breadcrumbs=array(
	'Contact',
);
?>

<!-- <h1 style="border-bottom: 1px solid #ccc;">Liên hệ</h1> -->
<div class="company">
	<h2>Công ty TNHH thực phẩm Fresh Food Việt Nam</h2><br />
	<b>Địa chỉ:</b> 19B6 Khu chung cư Cầu diễn - Từ liêm - Hà nội <br />
	<b>Điện thoại:</b> 04.63.258.290 <br />
	<b>CSKH:</b>  0936.212.089  -<strong> Hotline:</strong> 0982093089<br />
	<b>Website:</b> freshfoodvina.vn<br />
	<b>Email:</b> freshfoodvina@gmail.com
</div>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Mọi thắc mắc về sản phẩm liên hệ bằng yahoo, skype hay gọi điện trực tiếp để được giải đáp cũng như tư vấn vế sản phẩm.<br />
Hoặc gửi email bằng form:
</p>

<div class="contact-form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Chú ý: <span class="required">*</span> là bắt buộc.</p>
	<table>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo '<tr><td width="70px">'.$form->labelEx($model,'Họ t&ecirc;n').'</td>'; ?>
		<?php echo '<td>'.$form->textField($model,'name').'</td></tr>'; ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo '<tr><td>'.$form->labelEx($model,'email').'</td>'; ?>
		<?php echo '<td>'.$form->textField($model,'email').'</td></tr>'; ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo '<tr><td>'.$form->labelEx($model,'Ti&ecirc;u đề').'</td>'; ?>
		<?php echo '<td>'.$form->textField($model,'subject',array('size'=>60,'maxlength'=>128)).'</td></tr>'; ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo '<tr><td>'.$form->labelEx($model,'Nội dung:').'</td>'; ?>
		<?php echo '<td>'.$form->textArea($model,'body', array('class'=>"noidung")).'</td></tr>'; ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<tr>
			<td></td>
			<td>
			<?php //echo $form->labelEx($model,'verifyCode'); ?>
			<?php $this->widget('CCaptcha'); ?>
			<?php echo $form->textField($model,'verifyCode'); ?>
			<div class="hint">(Để tránh spam xin vui lòng nhập đúng đoạn mã.)</div>
			<?php echo $form->error($model,'verifyCode'); ?>
		</td>
		</tr>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo '<tr style="text-align: center;"><td colspan="2">'.CHtml::submitButton('Gửi', array('class' => 'submit')).'</td></tr>'; ?>
	</div></table>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
</div>