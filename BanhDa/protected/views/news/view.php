

<div id="tab-ctright" style="font-size: 20px;margin-bottom: 10px;"><?php echo $news->title; ?></div>

<div class="content-page">
	<!-- <div id="noidung-box-texct-td" style="font-size:16px; font-weight:bold; color:#599e01;"><?php //echo '<h1>'.$news->title.'</h1>'; ?></div> -->
	<p class="content-news">
		<?php echo $news->content; ?>
	</p>
<?php if(Yii::app()->user->isGuest): ?>
	<div class="share-button">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-like" data-href="https://banhda.com" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	<p></p>
	<p></p>

	<div style="font-size:14px; text-transform:uppercase; font-weight:bold; padding-top:20px">Tin khác</div>
	<div id="noidung-textnd1" style="width:700px">
		<?php
		if(isset($diffNews)) {
			foreach($diffNews as $diffNew) {
				if($diffNew->id != $news->id) {
					echo '<div id="noidung-textnd1-1" style="width:700px">';
					echo CHtml::link($diffNew->title, array('news/view', 'id'=>$diffNew->id));
					echo '</div>';
				}
			}
		}
		?>
	</div>
<?php endif; ?>
	<div class="clear"></div>
</div>

<?php
$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>