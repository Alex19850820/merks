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
<section class="slider_main" style="background: url(<?=$atts['img']['url']?>)">
    <div class="container">
        <div class="block_slider">
            <div class="slick project_carousel">
                <?php foreach ($atts['slider'] as $slide):?>
                    <div class="slider_block">
                        <div class="in_slide">
                            <h1><?=$slide['h2']?></h1>
                            <div class="text_slide"><?=$slide['text']?></div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>