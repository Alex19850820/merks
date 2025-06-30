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
<section class="main_about">
    <div class="container">
        <div class="row">
            <div class="main_about_block">
                <div class="bac_img_about"></div>
                <div class="main_about_text">
                    <span class="about_up_line_h2"></span>
                    <h2><?=$atts['h2']?></h2>
                    <p><?=$atts['text']?></p>
                </div>
                <div class="main_about_photo">
                    <? foreach ($atts['images'] as $image):?><!--data-caption="Caption #1"-->
                        <a class="fancybox" data-fancybox="gallery" href="<?=$image['url']?>">
                            <img src="<?=$image['url']?>">
                        </a>
                    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>