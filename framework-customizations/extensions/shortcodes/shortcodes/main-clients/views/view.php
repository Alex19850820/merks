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
<div class="wp-block-cover alignfull is-light" style="background: unset;">
    <div class="wp-block-cover__inner-container">
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
        <h2 class="wp-block-heading has-text-align-center">
            <?=$atts['h2']?>
        </h2>
        <?=(isset($atts['shortcode'])&&$atts['shortcode']!='') ? do_shortcode($atts['shortcode']):'';?>
<!--        <div class="container">-->
<!--            <div class="logo_carousel">-->
<!--                --><?php //foreach ($atts['slider'] as $slider):?>
<!--                    <div>-->
<!--                            <span>-->
<!--                                <img src="--><?//=$slider['img']['url']?><!--" title="--><?//=$slider['title']?><!--">-->
<!--                            </span>-->
<!--                    </div>-->
<!--                --><?php //endforeach;?>
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>