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
<section class="after_about">
    <div class="container">
        <div class="after_about_left_block">
            <div class="half_block">
                <span class="after_about_left_block_h2"><?=$atts['h2']?></span>
                <span class="label_region_move">Укажите регион передвижения</span>
                <select id="region_move">
                    <option data-val="0">Выберите регион</option>
                    <? $i=1; foreach ($atts['regions'] as $region):?><!--data-caption="Caption #1"-->
                        <option data-val="<?=$region['value']?>" name="<?=$region['title']?>" data-id="<?=$i?>" id="<?='region'.$i?>"><?=$region['title']?></option>
                    <? $i++; endforeach; ?>
                </select>
                <div class="range_block">
                    <span class="label_current_range">Прокачка</span>
                    <span id="current_range">0 тонн</span>
                </div>
                <input id="range_p" min="0" list="tickmarks0" type="range" max="0" step="1" value="0">
                <datalist  class="tickmarks" id="tickmarks0">
                    <option value="0" label="0">
                </datalist>
                <? $n=1; foreach ($atts['regions'] as $line):?>
                    <datalist  class="tickmarks" id="tickmarks<?=$n?>" style="display:none;">
                        <option value="0" label="0">
                        <option value="<?=($line['value']/2)?>" label="<?=($line['value']/2)?> тонн"><?=($line['value']/2)?></option>
                        <option value="<?=$line['value']?>" label="<?=$line['value']?> тонн"><?=$line['value']?></option>
                    </datalist>
                <? $n++; endforeach?>
                
                <div class="fuel_block">
                    <? foreach ($atts['fuel'] as $fuel):?>
                        <span class="fuel_block_item" data-brands="<?=$fuel['brands'];?>"; data-val="<?=$fuel['value']?>"><?=$fuel['title']?></span>
                    <? endforeach?>
                </div>
            </div>
            <div class="clear_block"></div>
            <div class="favorite_brand">
                <span>Укажите любимый бренд</span>
                <div class="favorite_brand_block">
                    <? $n=1; foreach ($atts['brands'] as $brand):?>
                        <div class="brand_item">
                            <div class="brand_item_img" style="background:<?=$brand['img_back'] ?? ''?>">
                                <img src="<?=$brand['img']['url']?>">
                            </div>
                            <span><?=$brand['title']?></span>
                        </div>
                    <? $n++; endforeach?>
                </div>
            </div>
            <div class="favorite_brand">
                <span>Дополнительные услуги</span>
                <div class="favorite_brand_block">
                    <? $n=1; foreach ($atts['services'] as $service):?>
                        <div class="service_item">
                            <div class="service_item_img" style="background:<?=$service['img_back'] ?? ''?>">
                                <img src="<?=$service['img']['url']?>">
                            </div>
                            <span><?=$service['title']?></span>
                        </div>
                    <? $n++; endforeach?>
                </div>
            </div>
          
        </div>
        <div class="after_about_right_block">
            <div class="half_block_right">
                <div class="right_block_title">
                    <span>Подходящий тариф</span>
                    <div>
                        <span>★</span>
                        <span class="name_tariff">Эконом</span>
                    </div>
                </div>
                <div class="card_img_block">
                    <img src="<?=$atts['img_right_card']['url'] ?? ''?>">
                    <span>
                        <img src="<? bloginfo("template_url")?>/assets/img/ico1.png">
                        <a href="#">Сеть АЗС на карте</a>
                    </span>
                </div>
            </div>
            <div class="promo_block_right">
                <span>Выберите промо-акцию:</span>
                <div class="promo_items">
                    <? foreach($atts['promo'] as $promo):?>
                        <div data-val="<?=preg_replace('/[^0-9]+/', '', $promo['value'])?>" class="promo_item" style="display:<?=(preg_replace('/[^0-9]+/', '', $promo['value']) <= 5) ? '':'none'?>;">
                            <div>
                                <span><?=$promo['value']?></span>
                            </div>
                            <span><?=$promo['title']?></span>
                        </div>
                    <? endforeach?>
                </div>
            </div>
            <div class="after_promo_block_right">
                <div class="text_after_promo_block_right">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text_after_promo_block_right_first">
                                <span>Вваша экономия:</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text_after_promo_block_right_second">
                                <span>экономия в год</span>
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-4 last">
                            <div class="text_after_promo_block_right_third">
                                <span>экономия в месяц</span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="order_button_block" id="popup__toggle3">
                        <span><span>Заказать тариф «Эконом»</span> <img src="<? bloginfo("template_url")?>/assets/img/arrow_right.png"></span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>