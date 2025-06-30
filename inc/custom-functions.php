<?php
add_action( 'wp_ajax_sendForm', 'sendForm' );
add_action( 'wp_ajax_nopriv_sendForm', 'sendForm' );
add_action( 'wp_ajax_getPostCat', 'getPostCat' );
add_action( 'wp_ajax_nopriv_getPostCat', 'getPostCat' );
/*Обратный звонок*/
function sendForm() {
    if (isset($_POST )) {
        // обрабатываем запрос
        $adminEmail = get_option('admin_email').",test@mail.ru";
        /*если несколько*/
        $multiple_to_recipients = array(
            get_option('admin_email')
        );
//		add_filter( 'wp_mail_content_type', 'set_html_content_type' );
//		$adminEmail = '89261231522@mail.ru,
//globus_estate@mail.ru';
        $name = ($_POST['name'] == 'undefined') ? '' : $_POST['name'];
        $phone = ($_POST['phone'] == 'undefined' ) ? '' : $_POST['phone'];
        $email = ($_POST['email'] == 'undefined') ? '' : $_POST['email'];
        $site = ($_POST['site'] == 'undefined') ? '' : $_POST['site'];
        $text = ($_POST['mess'] == 'undefined') ? '' : $_POST['mess'];
        $percent = ($_POST['percent'] == 'undefined') ? '' : $_POST['percent'];
        $totalSumm = ($_POST['totalSumm'] == 'undefined') ? '' : $_POST['totalSumm'];
        $summMinusPersent = ($_POST['summMinusPersent'] == 'undefined') ? '' : $_POST['summMinusPersent'];
        $tarif = ($_POST['tarif'] == 'undefined') ? '' : $_POST['tarif'];
        $countFuel = ($_POST['countFuel'] == 'undefined') ? '' : $_POST['countFuel'];
        $selectedFuel = ($_POST['selectedFuel'] == 'undefined') ? '' : $_POST['selectedFuel'];
        $brandFuel = ($_POST['brandFuel'] == 'undefined') ? '' : $_POST['brandFuel'];
        $region = ($_POST['region'] == 'undefined') ? '' : $_POST['region'];
        $message = '<h2>Заявка с '.get_bloginfo('description').' '.get_bloginfo('url').'</h2><br>';
        if($name) {
            $message .= 'Номер ИНН: ' . $name . '<br>';
        }
        if($phone) {
            $message .= ($phone)? 'Телефон: ' . $phone . '<br>' : '';
        }
        if($email) {
            $message .= ($email)? 'E-mail: ' . $email . '<br>'  : '';
        }
        if($site) {
            $message .= ($site) ? 'Сайт: ' . $site . '<br>' : '';
        }
        if($text) {
            $message .= ($text) ? 'Сообщение: ' . $text . '<br>' : '';
        }
        if($percent) {
            $message .= ($percent) ? 'Скидка: ' . $percent . '% <br>' : '';
        }
        if($totalSumm) {
            $message .= ($totalSumm) ? 'На сумму: ' . $totalSumm . '<br>' : '';
        }
        if($summMinusPersent) {
            $message .= ($summMinusPersent) ? 'Сумма с вычетом скидки: ' . $summMinusPersent . '<br>' : '';
        }
        if($tarif) {
            $message .= ($tarif) ? ' Тариф: ' . $tarif . '<br>' : '';
        }
        if($selectedFuel) {
            $message .= ($selectedFuel) ? 'Вид топлива: ' . $selectedFuel . '<br>' : '';
        }
        if($brandFuel) {
            $message .= ($brandFuel) ? 'Бренд: ' . $brandFuel . '<br>' : '';
        }
        if($countFuel) {
            $message .= ($countFuel) ? 'Количество топлива: ' . $countFuel . '<br>' : '';
        }
        if($region) {
            $message .= ($region) ? 'Регион: ' . $region . '<br>' : '';
        }
        //$mailheaders = "From: mail@mail.ru \r\n";/*Указываем почтовый от кого письмо если на бегете*/

        if (wp_mail($multiple_to_recipients,'Заявка на обратный звонок c '.get_bloginfo('description').' '.get_bloginfo('url'), $message, 'content-type: text/html')) {
            $result = [
                'result' => 'success',
                'message' => 'Ваш запрос отправлен!'
            ];
        } else {
            $result = [
                'result' => 'error',
                'message' => 'Возникла ошибка при отправке запроса. Попробуйте позже!'
            ];
        }
        // возвращаем результат
        wp_send_json($result);
    }
    wp_die();
}
/*Получим посты категории*/
function getPostCat() {
    if (isset($_POST )) {
        $my_posts = get_posts( array(
            'numberposts' => 999,
//    'category'    => 3,
            'category_name'    => $_POST['slug'],
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );
        $i=0;$size = [360,240]; foreach($my_posts as $post):  if($i < 6):?>
        <div class="category_item">
            <a href="<?=get_permalink($post->ID)?>">
                <img src="<?=get_the_post_thumbnail_url( $post->ID, $size )?>">
                <span class="category_item_h2"><?=$post->post_title?></span>
                <div class="category_item_haracter">
                    <?php
                    foreach (fw_get_db_post_option($post->ID)['haracter'] as $item): ?>
                        <div class="category_item_haracter_col">
                            <span><?=$item['col1']?></span>
                        </div>
                        <div class="category_item_haracter_col">
                            <span><?=$item['col2']?></span>
                        </div>
                    <?php endforeach;?>
                </div>
                <span class="line_haracter"></span>
                <span class="price_haracter">
                    <?=fw_get_db_post_option($post->ID, 'price')?> руб/шт
                </span>
                <button class="button_haracter">Заказать</button>
            </a>
        </div>
        <?php endif;$i++; endforeach;?>
        <? if($i > 5):?>
        <div class="category_items hidden">
        <? $i=0;$size = [360,240]; foreach($my_posts as $post):  if($i > 5):?>
        <div class="category_item">
            <a href="<?=get_permalink($post->ID)?>">
                <img src="<?=get_the_post_thumbnail_url( $post->ID, $size )?>">
                <span class="category_item_h2"><?=$post->post_title?></span>
                <div class="category_item_haracter">
                    <?php
                    foreach (fw_get_db_post_option($post->ID)['haracter'] as $item): ?>
                        <div class="category_item_haracter_col">
                            <span><?=$item['col1']?></span>
                        </div>
                        <div class="category_item_haracter_col">
                            <span><?=$item['col2']?></span>
                        </div>
                    <?php endforeach;?>
                </div>
                <span class="line_haracter"></span>
                <span class="price_haracter">
                    <?=fw_get_db_post_option($post->ID, 'price')?> руб/шт
                </span>
                <button class="button_haracter">Заказать</button>
            </a>
        </div>
        <?endif;?>
        <?php $i++; endforeach;?>
        </div>
            <div class="block_more_button">
                <button class="more_item">Загрузить еще</button>
            </div>
        <?endif;?>
    <?php }
    wp_die();
}