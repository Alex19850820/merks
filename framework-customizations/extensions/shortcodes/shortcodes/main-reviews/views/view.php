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
<div class="wp-block-cover alignfull is-light" style="min-height:532px">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <img decoding="async" loading="lazy" class="wp-block-cover__image-background wp-image-223" alt="" src="/wp-content/uploads/2023/03/bg4.jpg" data-object-fit="cover" srcset="https://trud-24.ru/wp-content/uploads/2023/03/bg4.jpg 1923w, https://trud-24.ru/wp-content/uploads/2023/03/bg4-300x147.jpg 300w, https://trud-24.ru/wp-content/uploads/2023/03/bg4-1024x503.jpg 1024w, https://trud-24.ru/wp-content/uploads/2023/03/bg4-768x377.jpg 768w, https://trud-24.ru/wp-content/uploads/2023/03/bg4-1536x754.jpg 1536w" sizes="(max-width: 1923px) 100vw, 1923px" width="1923" height="944">
    <div class="wp-block-cover__inner-container">
        <div style="height:100px" aria-hidden="true" id="otzivi" class="wp-block-spacer"></div>
        <h2 class="wp-block-heading has-text-align-center"><?=$atts['h2']?></h2>
        <?=do_shortcode('[sp_testimonial id="232"]');?>
        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    </div>
</div>