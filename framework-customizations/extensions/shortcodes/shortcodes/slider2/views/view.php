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
<section class="slider_main_next">
    <div class="block_slider_next">
        <div class="project_carousel_next">
            <?php foreach ($atts['slider'] as $slide):?>
                <div class="slide_block_next">
                    <div class="in_slide_next">
                        <div class="center_block_slide">
                            <span class="up_line_slider_next"></span>
                            <h2><?=$slide['h2']?></h2>
                            <p><?=$slide['text']?></p>
                        </div>
                    </div>
                    <div class="in_slide_next_img" style="background: url('<?=$slide['img']['url']?>') no-repeat right"></div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>