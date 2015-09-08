
<?php
$this->menu=array(
	array('label'=>'Create HotNews', 'url'=>array('create')),
	array('label'=>'Manage HotNews', 'url'=>array('admin')),
);
?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"></script>

<?php foreach($amthucs as $new): ?>

<div class="folder-topnews">
			<?php 
				if(strlen($new->title) > 40) {
						$newCut = substr($new->title, 0, 40);
						$newTitle = substr($newCut, 0, strrpos($newCut, ' '));
					} else {
						$newTitle = $new->title;
					}
					$imgLink = CHtml::image(Yii::app()->request->baseUrl.'/images/amthuc/'.$new->imageLink, $newTitle, array('width'=>'140', 'height'=>'100', 'border'=>'0', 'class'=>'bor2'));
					echo '<div style="position: relative;float: left;margin: 0px 3px 0px 0px;overflow: hidden;">';
					echo CHtml::link($imgLink, array('amthuc/view', 'id'=>$new->id));
					echo '</div>';
			?>
            <!-- <h2 class="h2Title"> -->
                <div  class="amthuc " >
                 <?php echo Chtml::link($newTitle,array('amthuc/view', 'id'=>$new->id)) ?>     
            	 </div>
          <!--   </h2> -->
                <h3 class="h3Lead" style="padding-left: 5px;">
                	<?php
						if(strlen($new->content) < 400) {
							echo $new->content;
						} else {
							$newCut = substr($new->content, 0, 400);
							$newShort = substr($newCut, 0, strrpos($newCut, ' '));
							echo $newShort.' ...';
						}
					?>
              	</h3>
</div>
<?php endforeach; ?>

<style type="text/css">
.amthuc {
	font-size: 18px;
	color: green;
	height: auto;
	width: 355px;
}
.amthuc a{
	position: relative;
	color: #00A64E;
/*	margin: 0px 10px 0px 0px;*/
	/*overflow: hidden;*/
	font-size: 14px;
	font-weight: bold;
}
.amthuc a:hover{
	color: #F18135;
}
.folder-topnews {
	display: block;
	width: 355px;
	margin: 0px 9px 9px 0px;
	float: left;
	font: 12px arial;
	color: #000;
	padding-top: 15px;
	padding-left: 10px;
	}

.aImg130 {
	height: 100px;
	position: relative;
	float: left;
	margin: 0px 10px 0px 0px;
	overflow: hidden;
}
.h3Lead{
	font: 12px arial;
	color: #000;
	/*padding-top: 2px;*/
	margin: 0px;
}

h2{
	display: block;
	font-size: 1.5em;
	/*-webkit-margin-before: 0.83em;
	-webkit-margin-after: 0.83em;*/
	/*-webkit-margin-start: 0px;
	-webkit-margin-end: 0px;*/
	font-weight: bold;
}
h3{
	display: block;
	font-size: 1.17em;
/*	-webkit-margin-before: 1em;
	-webkit-margin-after: 1em;
	-webkit-margin-start: 0px;
	-webkit-margin-end: 0px;*/
	font-weight: bold;
}
</style>
<!-- <br />
<br />
<br />
<div class="content-page">
<?php //if(Yii::app()->user->isGuest) { ?>	
<div class="view">
	<?php if(isset($amthucs)): ?>
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
 -->