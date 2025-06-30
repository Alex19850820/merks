<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/***
  * Верстка шорткода
  * весь контент лежит в переменной $atts
 *@var $atts array
 *
 **/
$categories = get_categories( [
    'taxonomy'     => 'category',
    'type'         => 'post',
    'child_of'     => 0,
    'parent'       => '',
    'orderby'      => 'name',
    'order'        => 'DESC',
    'hide_empty'   => 1,
    'hierarchical' => 1,
    'exclude'      => '',
    'include'      => '',
    'number'       => 0,
    'pad_counts'   => false,
    // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
] );
$first_term_slug='';
$i=0; foreach ($categories as $category) {
    if($i==0) {
        $first_term_slug =$category->slug;
    }$i++;
}
function getPostsArray($slug) {
    $my_posts = get_posts( array(
        'numberposts' => 999,
//    'category'    => 3,
        'category_name'    => $slug,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );
    return $my_posts;
}
$posts = getPostsArray($first_term_slug);
?>
<section class="main_product">
    <div class="container">
        <div class="section_h2">
            <span class="up_line_h2"></span>
            <h2><?=$atts['h2']?></h2>
            <div class="row">
                <div class="center_items_category">
                <?php $i=0; foreach ($categories as $category):?>
                    <div class="item_category <? echo ( $i==0)? 'active':''?>" data-slug="<?=$category->slug;?>" data-action="getPostCat">
                        <?
                        // получим ID картинки из метаполя термина
                        $image_id = get_term_meta( $category->cat_ID,  '_thumbnail_id', 1 );
                        // ссылка на полный размер картинки по ID вложения
                        $image_url = wp_get_attachment_image_url( $image_id, 'full' );
//                        fw_print($category);?>
                        <div class="center_item_cat" >
                            <img src="<?=$image_url?>" title="<?=$category->name;?>">
                            <span><?=$category->name;?></span>
                        </div>
                    </div>
                <?php $i++; endforeach;?>
                </div>
                <div class="category_items" id="result">
                    <?php $i=0; $size = [360,240]; foreach($posts as $post):  if ($i<6):?>
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
                    <?php endif; $i++; endforeach;?>
                    <?php if($i > 5):?>
                        <div class="category_items hidden">
                            <?php $i=0; $size = [360,240]; foreach($posts as $post):  if ($i>5):?>
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
                            <?php endif; $i++; endforeach;?>
                        </div>
                        <div class="block_more_button">
                            <button class="more_item">Загрузить еще</button>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>