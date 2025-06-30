<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/
// параметры по умолчанию
global $post;
$contacts = fw_get_db_customizer_option();
function getPostsArray($slug) {
    $my_posts = get_posts( array(
        'numberposts' => 999,
//    'category'    => 3,
        'category_name'    => $slug,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );
    return $my_posts;
}
$zabori = getPostsArray('navesy');
$auto_vorota = getPostsArray('auto-vorota');
?>
<div class="baner-top" style="background-image: url(<?=$atts['img']['url']?>);">
    <div class="baner-top-ten">
        <header>
            <div class="container">
                <div class="col-md-3 he-top he-logo">
                    <a href="/"> <img src="<? bloginfo('template_url')?>/assets/img/otkatnie-vorota_.png" alt="otkatnie-vorota" style="width: 75%;"> </a>
                </div>
                <div class="col-md-3 he-top he-vrem">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p class="he-top-text"><b>Время работы:</b> <br>Пн-Пт с 08:00 до 21:00</p>
                </div>
                <div class="col-md-3 he-top he-adr">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p class="he-top-text"><b>Электронная почта:</b><br><?=$contacts['email']?></p>
                </div>
                <div class="col-md-3 he-top he-tel">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <p class="he-top-text2"><a href="tel:+<?=preg_replace("/[^0-9]+/",'', $contacts['phone'])?>" style="color: #FFC62D;"><?=$contacts['phone']?></a></p>
                    <a class="btn1s1" data-toggle="modal" data-target="#myModal">Заказать звонок</a> <br>
                    <a class="btn1s1 header__whatsapp" href="https://wa.me/<?=$contacts['phone']?>">Написать в WhatsApp</a>
                </div>
            </div>

        </header>

        <div class="clear"></div> <!-- Clear -->
        <div class="container textarik-top">
            <ul class="B_crumbBox">
                <li class="B_firstCrumb" itemscope="itemscope" itemtype="">
                    <a class="B_homeCrumb" itemprop="url" rel="Главная" href="/">
                        <span itemprop="title">Главная</span>
                    </a>
                </li>/
                <li class="B_lastCrumb" itemscope="itemscope" itemtype="">
                    <a class="B_currentCrumb" itemprop="url" rel="У нас Вы сможете заказать изготовление качественных откатных ворот в Москве недорого" href="<? the_permalink()?>">
                        <span itemprop="title"><? the_title()?></span>
                    </a>
                </li>
            </ul>
            <h1 class="zag-baner vn-zag"><? the_title()?></h1>
<!--            <p class="podzag-baner">Заборы, Автоматика, Калитки, Навесы, Ограждения</p>-->
<!--            <div class="knop-baner">-->
<!--                <a href="/vorota">Посмотреть каталог</a>-->
<!--            </div>-->
        </div>
    </div>
</div>
<div class="text-desk">
    <div class="container">

        <div class="col-md-6 contacy" itemscope="" itemtype="http://schema.org/Organization">
            <span itemprop="name" style="display:none;">otkatnie-vorota</span>
            <p><i class="fa fa-phone" aria-hidden="true"></i> <strong>ТЕЛЕФОННЫЕ НОМЕРА: </strong></p>
            <p itemprop="telephone"><a href="tel:+<?=preg_replace("/[^0-9]+/",'', $contacts['phone'])?>" style="color: #FFC62D;"><?=$contacts['phone']?></a></p>
            <hr>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> <strong>E-mail: </strong></p>
            <p itemprop="email"><?=$contacts['email']?></p>
            <hr>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>НАШ АДРЕС: </strong></p>
            <p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="addressLocality">Москва</span>, <span itemprop="streetAddress">Ленинградское шоссе, 360-Б</span></p>
            <!--<p> <i class="fa fa-instagram"></i> <strong>Мы в instagram: </strong></p>
            <p><a href="https://www.instagram.com/vorota_msk/">https://www.instagram.com/vorota_msk/</a></p>-->
            <hr>
            <p><i class="far fa-clock" aria-hidden="true"></i><strong>ВРЕМЯ РАБОТЫ:</strong></p>
            <p>с 09.00 до 21.00 без выходных</p>
            <hr>
        </div>
        <div class="col-md-6 karta">
            <?=$atts['code_map']?>
        </div>
    </div>
</div>