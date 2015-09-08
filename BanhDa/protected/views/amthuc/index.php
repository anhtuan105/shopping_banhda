
<?php
$this->breadcrumbs=array(
	'Am thuc',
);

$this->menu=array(
	array('label'=>'Create Am thuc', 'url'=>array('create')),
	array('label'=>'Manage Amthuc', 'url'=>array('admin')),
);
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"></script>

<div id="tab-ctright" style="font-size: 20px;margin-bottom: 10px;">Ẩm thực</div>
<div class="content-page">
<?php //if(Yii::app()->user->isGuest) { ?>	
<div class="view">
		<?php if(isset($amthucs)): ?>
			<?php if(Yii::app()->user->isGuest) { ?>
				<?php foreach($amthucs as $new): ?>
				<div class="box-table-ima-home">
					<div class="table-ima-home">
						<?php
							if(strlen($new->title) > 20) {
								$newCut = substr($new->title, 0, 20);
								$newTitle = substr($newCut, 0, strrpos($newCut, ' '));
							} else {
								$newTitle = $new->title;
							}
							$imgLink = CHtml::image(Yii::app()->request->baseUrl.'/images/amthuc/'.$new->imageLink, $newTitle, array('width'=>'140', 'height'=>'100', 'border'=>'0', 'class'=>'bor2'));
							echo CHtml::link($imgLink, array('amthuc/view', 'id'=>$new->id));
						?>
					</div>
					<div class="table-ima-text-home">
						<?php echo CHtml::link($new->title, array('amthuc/view', 'id'=>$new->id), array('class'=>'text-amthucstieude')); ?>
						<p style="font-size:12px; line-height:18px">
							<?php
								if(strlen($new->content) < 400) {
									echo $new->content;
								} else {
									$newCut = substr($new->content, 0, 400);
									$amthucshort = substr($newCut, 0, strrpos($newCut, ' '));
									echo $amthucshort.' ...';
								}
							?>
						</p>
					</div>
				</div>
				<?php endforeach; ?>
			
				<?php 
					}else {
						foreach($amthucs as $new) {
							/*$imgLink = CHtml::image(Yii::app()->request->baseUrl.'/images/amthuc/'.$new->imageLink, $new->title, array('width'=>'140', 'height'=>'100', 'border'=>'0', 'class'=>'bor2'));
							echo CHtml::link($imgLink, array('amthuc/view', 'id'=>$new->id));
							echo '<br />';*/
							echo CHtml::link($new->title, array('amthuc/view', 'id'=>$new->id));
							echo '<br />';
						}
					} 
		 		?>
	 		<?php else: ?>
				<div class="table-ima-home"></div>
				<div class="table-ima-text-home">
					<?  echo "Hiện nay, chưa có tin tức. Tin tức sẽ được cập nhật sau"; ?>
				</div>
		<?php endif; ?>

	
	<div class="clear"></div>
	</div>
</div>