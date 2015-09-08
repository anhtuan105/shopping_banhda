<?php
$this->menu=array(
	array('label'=>'Create HotNews', 'url'=>array('create')),
	array('label'=>'Manage HotNews', 'url'=>array('admin')),
);
?>
<div id="tab-ctright" style="font-size: 20px;margin-bottom: 10px;">Tin tức</div>
<div class="content-page">
<?php //if(Yii::app()->user->isGuest) { ?>	
<div class="view">
	<?php if(isset($news)): ?>
		<?php if(Yii::app()->user->isGuest) { ?>
			<?php foreach($news as $new): ?>
			<div class="box-table-ima-home">
				<div class="table-ima-home">
					<?php
						if(strlen($new->title) > 20) {
							$newCut = substr($new->title, 0, 20);
							$newTitle = substr($newCut, 0, strrpos($newCut, ' '));
						} else {
							$newTitle = $new->title;
						}
						$imgLink = CHtml::image(Yii::app()->request->baseUrl.'/images/news/'.$new->imageLink, $newTitle, array('width'=>'140', 'height'=>'100', 'border'=>'0', 'class'=>'bor2'));
						echo CHtml::link($imgLink, array('news/view', 'id'=>$new->id));
					?>
				</div>
				 <div class="table-ima-text-home">
					<?php echo CHtml::link($new->title, array('news/view', 'id'=>$new->id), array('class'=>'text-newstieude')); ?>
					<p style="font-size:12px; line-height:18px">
						<?php
							if(strlen($new->content) < 400) {
								echo $new->content;
							} else {
								$newCut = substr($new->content, 0, 400);
								$newShort = substr($newCut, 0, strrpos($newCut, ' '));
								echo $newShort.' ...';
							}
						?>
					</p>
				</div>
			</div>
			<?php endforeach; ?>
		<?php 
			}else {
				foreach($news as $new) {
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
	<?php //} ?>
	<div class="clear"></div>
	</div>
</div>