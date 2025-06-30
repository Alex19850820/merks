<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/

?>
<section class="after_about">
    <div class="container">
        <div class="after_about_left_block">
            <? foreach ($atts['images'] as $image):?><!--data-caption="Caption #1"-->
                <a class="fancybox" data-fancybox="gallery" href="<?=$image['url']?>">
                    <img src="<?=$image['url']?>">
                </a>
            <?endforeach;?>
        </div>
        <div class="after_about_right_block">
            <?=$atts['text']?>
        </div>
    </div>
</section>