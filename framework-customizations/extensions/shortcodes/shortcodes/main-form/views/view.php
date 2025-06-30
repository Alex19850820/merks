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
<section class="main_form">
    <div class="container">
        <div class="form_block">
            <form id="main_form" method="post">
                <span class="main_form_h2">Получить консультацию</span>
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="phone" name="phone" id="phone" placeholder="Номер телефона">
                <button id="send__form" data-form="main_form"><img src="<? bloginfo('template_url')?>/assets/img/Vector.png"></button>
            </form>
        </div>
    </div>
</section>