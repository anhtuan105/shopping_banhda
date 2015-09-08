<?php
/**
 * Created by PhpStorm.
 * User: anh
 * Date: 2/26/14
 * Time: 9:02 AM
 */
?>

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>css/CSSreset.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/css/als_demo.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.als-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.alsEN-1.3.js"></script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $("#lista1").als({
            visible_items: 3,
            scrolling_items: 1,
            orientation: "horizontal",
            circular: "yes",
           /* autoscroll: "yes",*/
            interval: 5000,
            speed: 500,
            easing: "linear",
            direction: "left",
            start_from: 1
        });

        $("a[href^='http://']").attr("target","_blank");
        $("a[href^='http://als']").attr("target","_self");
    });
</script>

<div id="lista1" class="als-container">
    <span class="als-prev"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/thin_left_arrow_333.png" alt="prev" title="previous" /></span>
    <div class="als-viewport">
        <ul class="als-wrapper">
            <?php  if($newProduct) {
                foreach($newProduct as $value): ?>
                <li class="als-item">
                  
                    <?php $image = CHtml::image(Yii::app()->request->baseUrl.'/images/Product/'.$value->imageLink,"image",array("width"=>200)); ?>
                    <?php echo CHtml::link($image,array('products/view','id'=>$value->id),array('class'=>'title1')); ?>

                    <?php echo CHtml::link($value->name,array('products/view','id'=>$value->id),array('class'=>'title1')); ?> <br />
                    <strong>Gia ban:<?php echo Yii::app()->format->number($value->cost).' '.$value->unit ?> </strong>
                </li>
            <?php endforeach; 
            } ?>
        </ul>
    </div>
    <span class="als-next"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/thin_right_arrow_333.png" alt="next" title="next" /></span>
</div>