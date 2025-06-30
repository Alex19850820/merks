<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fasad-mk
 */
$contacts = fw_get_db_customizer_option();
$logo = fw_get_db_customizer_option()['img_logo']['url'];
$logo_text = fw_get_db_customizer_option()['img_text'];
?>
<footer id="colophon" class="site-footer">
    <section class="footer_d" style="display:none;">
        <div class="container">
            <div class="block_logo footer_logo">
                <div class="up_head_left_logo">
                    <?php if($logo):?>
                        <a href="/">
                            <img src="<?=$logo?>" title="<?=$logo_text?>">
                        </a>
                    <?php endif;?>
                </div>
                <div class="up_head_left_logo f_contacts">
                    <div class="footer_contacts">
                        <span><?=$contacts['address']?></span>
                        <span><a href="mailto:<?=$contacts['email'];?>" target="_blank"><?=$contacts['email']?></a></span>
                    </div>
                </div>
                <div class="up_head_left_logo f_contacts">
                    <div class="footer_contacts phones_footer">
                        <?if ($contacts['phone']):?>
                            <span><a href="tel:<?=preg_replace( '/[^0-9]/', '', $contacts['phone']);?>" target="_blank"><?=$contacts['phone']?></a></span>
                        <? endif;?></span>
                        <?if ($contacts['phone2']):?>
                            <span><a href="tel:<?=preg_replace( '/[^0-9]/', '', $contacts['phone2']);?>" target="_blank"><?=$contacts['phone2']?></a></span>
                        <? endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MODAL-->
    <!--[if lt IE 9]>
    <div class="popup__overlay popup__overlay_ie"></div><![endif]-->
    <div class="popup__overlay modal">
        <div class="popup">
            <div class="popup__close">X</div>
            <h2>Заказать тариф «Эконом»</h2>
            <!-- <p>Оставьте ваш телефон и с Вами свяжутся в ближайшее время!</p> -->
            <form id="send_call_back">
                <input name="name" type="number" placeholder="Номер ИНН">
                <input name="phone" type="tel" id="phone" placeholder="Телефон для связи">
                <input name="email" type="text" id="phone" placeholder="E-mail для связи">
                <div class="agree_block">
                    <div>
                        <input name="agree" id="agree" type="checkbox" placeholder="E-mail для связи">
                        <label>Согласен с обработкой персональных данных</label>
                    </div>
                </div>
                <div class="form-button">
                    <button id="send__form" class="green_button" data-form="send_call_back" type="submit">Заказать тариф «Эконом»</button>
                </div>
                <span class="form_error"></span>
                <span class="form_agree_message"></span>
            </form>
        </div>
        <!--[if lt IE 9]>
        <div class="popup__valignfix"></div><![endif]-->
    </div>
    <div class="popup__overlay modal_success">
        <div class="popup">
            <div class="popup__close">X</div>
            <h2>Поздравляем</h2>
            <p>Ваша заявка отправлена с Вами свяжутся в ближайшее время!</p>
        </div>
        <!--[if lt IE 9]>
        <div class="popup__valignfix"></div><![endif]-->
    </div>
    <!--END-MODAL-->
</footer>
<?php wp_footer(); ?>

</body>
</html>
