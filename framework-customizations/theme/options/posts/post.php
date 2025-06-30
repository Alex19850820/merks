<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 14.03.2018
 * Time: 14:10
 */
if (!defined( 'FW' )) die('Forbidden');

$options = array(
	'main' => array(
		'type' => 'box',
		'title' => __('Текст для записи', '{domain}'),
		'options' => array(
//			'body-color' => array(
//				'type' => 'color-picker',
//				'label' => __('Body Color', '{domain}'),
//				'value' => '#ADFF2F',
//			),
//			'p1'=> [
//				'label' => __('Описание', '{domain}'),
//				'value' => '',
//                'type'  => 'wp-editor',
//                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//                'desc'  => __('Description', '{domain}'),
//                'help'  => __('Help tip', '{domain}'),
//                'size' => 'small', // small, large
//                'editor_height' => 400,
//                'wpautop' => true,
//                'editor_type' => false, // tinymce, html
//                'shortcodes' => false //
//			],
//            'city' =>[
//                'type' => 'text',
//                'label' => __('Город', '{domain}'),
//                'value' => '',
//            ],

			'price'=> [
				'type' => 'text',
				'label' => __('Цена', '{domain}'),
				'value' => '',
			],
          	'haracter' => [
                'type' => 'addable-popup',
                'label' => __('Добавить (х-ки) ', '{domain}'),
                'template' => '{{- col1 }}',
                'size' => 'large', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'col1'     => [
                        'type'  => 'text',
                        'value' => '',
                        'label' => __('Текст колонки1', '{domain}'),
                    ],
                    'col2'     => [
                        'type'  => 'text',
                        'value' => '',
                        'label' => __('Текст колонки2', '{domain}'),
                    ],
//                    'col3'     => [
//                        'type'  => 'text',
//                        'value' => '',
//                        'label' => __('Текст колонки3', '{domain}'),
//                    ],
//                        'img'     => [
//                            'type'  => 'upload',
//                            'value' => '',
//                            'label' => __('Добавить картинку услуги', '{domain}'),
//                            'images_only' => true,
//                        ],
//                        'h2'     => [
//                            'type'  => 'text',
//                            'value' => '',
//                            'label' => __('Текст услуги', '{domain}'),
//                        ],
                ]
            ],
            'desc'=> [
                'label' => __('Описание', '{domain}'),
                'value' => '',
                'type'  => 'textarea',
//                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'desc'  => __('Description', '{domain}'),
                'help'  => __('Help tip', '{domain}'),
                'size' => 'small', // small, large
                'editor_height' => 400,
//                'wpautop' => true,
                'editor_type' => false, // tinymce, html
                'shortcodes' => false //
            ],
//            'text_after_characters'     => [
//                'label' => __('Текст после таблицы(х-ки)', '{domain}'),
//                'value' => '',
//                'type'  => 'wp-editor',
//                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//                'desc'  => __('Description', '{domain}'),
//                'help'  => __('Help tip', '{domain}'),
//                'size' => 'small', // small, large
//                'editor_height' => 400,
//                'wpautop' => true,
//                'editor_type' => false, // tinymce, html
//                'shortcodes' => false //
//            ],
//            'text_after_button'=> [
//                'type' => 'textarea',
//                'label' => __('Текст под кнопкой', '{domain}'),
//                'value' => '',
//            ],
//            'text_adv'=> [
//                'label' => __('Текст преимущества', '{domain}'),
//                'value' => '',
//                'type'  => 'wp-editor',
//                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//                'desc'  => __('Description', '{domain}'),
//                'help'  => __('Help tip', '{domain}'),
//                'size' => 'small', // small, large
//                'editor_height' => 400,
//                'wpautop' => true,
//                'editor_type' => false, // tinymce, html
//                'shortcodes' => false //
//            ],
//            'text_price_h2'=> [
//                'type' => 'text',
//                'label' => __('Заголово стоимости товара', '{domain}'),
//                'value' => 'Стоимость откатных ворот с электроприводом',
//            ],
//            'text_price'=> [
//                'label' => __('Текст стоимости товара', '{domain}'),
//                'value' => '',
//                'type'  => 'wp-editor',
//                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//                'desc'  => __('Description', '{domain}'),
//                'help'  => __('Help tip', '{domain}'),
//                'size' => 'small', // small, large
//                'editor_height' => 400,
//                'wpautop' => true,
//                'editor_type' => false, // tinymce, html
//                'shortcodes' => false //
//            ],
//            'text_price2_h2'=> [
//                'type' => 'text',
//                'label' => __('Заголово стоимости товара', '{domain}'),
//                'value' => 'Цена на откатные ворота без электропривода',
//            ],
//            'text_price2'=> [
//                'label' => __('Текст цены на товар', '{domain}'),
//                'value' => '',
//                'type'  => 'wp-editor',
//                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//                'desc'  => __('Description', '{domain}'),
//                'help'  => __('Help tip', '{domain}'),
//                'size' => 'small', // small, large
//                'editor_height' => 400,
//                'wpautop' => true,
//                'editor_type' => false, // tinymce, html
//                'shortcodes' => false //
//            ],
//			'img'=> [
//				'type' => 'upload',
//				'images_only' => true,
//				'label' => __('Картинка', '{domain}'),
////				'value' => '',
//			],
//            'class_characters'     => [
//                'type'  => 'text',
//                'value' => '',
//                'label' => __('Класс таблицы(х-ки)', '{domain}'),
//            ],
//			'price_f'=> [
//				'type' => 'text',
//				'label' => __('Цена для фильтра', '{domain}'),
//				'value' => '',
//				'help'  => __('Указывать только если один объект - целое число', '{domain}'),
//				'desc'=>('Указывать только если один объект'),
//			],
//			'area_f'=> [
//				'type' => 'text',
//				'label' => __('Площадь для фильтра', '{domain}'),
//				'value' => '',
//				'help'  => __('Указывать только если один объект', '{domain}'),
//				'desc'=>('Указывать только если один объект'),
//			],
//			'flats_f'=> [
//				'type' => 'text',
//				'label' => __('Количество комнат для фильтра', '{domain}'),
//				'value' => '',
//				'help'  => __('Указывать только если один объект', '{domain}'),
//				'desc'=>('Указывать только если один объект'),
//			],
//			'city'=> [
//				'type' => 'text',
//				'label' => __('Город', '{domain}'),
//				'value' => '',
//			],
//			'landing_desc' => [
//				'type' => 'textarea',
//				'label' => __('Описание в шапке лендинг', '{domain}'),
//				'value' => '',
//			],
//			'md'=> [
//				'type' => 'text',
//				'label' => __('Микрарайон', '{domain}'),
//				'value' => '',
//			],
//			'text2'=> [
//				'type' => 'text',
//				'label' => __('Текст ссылки', '{domain}'),
//				'value' => '',
//			],
//			'period'=> [
//				'type' => 'text',
//				'label' => __('Срок сдачи', '{domain}'),
//				'value' => '',
//			],
//			'phone'=> [
//				'type' => 'text',
//				'label' => __('Телефон', '{domain}'),
//				'value' => '+7 (499) 390-55-71',
//			],
//			'hphone'=> [
//				'type' => 'text',
//				'label' => __('Сылка телефона', '{domain}'),
//				'value' => '+74993905571',
//			],
//			'mortgage'=> [
//				'type' => 'text',
//				'label' => __('Ипотека', '{domain}'),
//				'value' => 'Ипотека 6,98%',
//			],
//			'address'=> [
//				'type' => 'text',
//				'label' => __('Адрес', '{domain}'),
//				'value' => '',
//				'desc'=>('Введите адрес'),
//				'help'=>('Введите адрес например г. Москва, ул. Большая Лубянка 1'),
//			],
//			'tab_discounts' => [
//				'type'  => 'switch',
//				'value' => 'Скидки',
//				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//				'label' => __('Скидки', '{domain}'),
//				'desc'  => __('Description', '{domain}'),
//				'help'  => __('Help tip', '{domain}'),
//				'left-choice' => array(
//					'value' => '',
//					'label' => __('Не показывать', '{domain}'),
//				),
//				'right-choice' => array(
//					'value' => 'Скидки',
//					'label' => __('Показывать', '{domain}'),
//				),
//			],
//			'tab_start_sale' => [
//				'type'  => 'switch',
//				'value' => 'Старт продаж',
//				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//				'label' => __('Старт продаж', '{domain}'),
//				'desc'  => __('Description', '{domain}'),
//				'help'  => __('Help tip', '{domain}'),
//				'left-choice' => array(
//					'value' => '',
//					'label' => __('Не показывать', '{domain}'),
//				),
//				'right-choice' => array(
//					'value' => 'Старт продаж',
//					'label' => __('Показывать', '{domain}'),
//				),
//			],
//			'discount' => [
//				'type'  => 'switch',
//				'value' => '',
//				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//				'label' => __('На странице Скидки', '{domain}'),
//				'desc'  => __('Description', '{domain}'),
//				'help'  => __('Help tip', '{domain}'),
//				'left-choice' => array(
//					'value' => '',
//					'label' => __('Не показывать', '{domain}'),
//				),
//				'right-choice' => array(
//					'value' => 'Скидка',
//					'label' => __('Показывать', '{domain}'),
//				),
//			],
//			'discount_title' => [
//				'type' => 'text',
//				'value' => 'Акция "Кладовая в подарок!"',
//				'label' => __('Заголовок скидки', '{domain}'),
//				'desc'  => __('Оставьте описание', '{domain}'),
//				'help'  => __('Необходимо написать текст для скидки', '{domain}'),
//			],
//			'discount_text' => [
//				'type' => 'textarea',
//				'value' => 'Оформление собственности в подарок!',
//				'label' => __('Текст скидки', '{domain}'),
//				'desc'  => __('Оставьте описание', '{domain}'),
//				'help'  => __('Необходимо написать текст для скидки', '{domain}'),
//			],
//			'show_main' => [
//				'type'  => 'switch',
//				'value' => '',
//				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//				'label' => __('На странице Главная', '{domain}'),
//				'desc'  => __('Description', '{domain}'),
//				'help'  => __('Help tip', '{domain}'),
//				'left-choice' => array(
//					'value' => '',
//					'label' => __('Не показывать', '{domain}'),
//				),
//				'right-choice' => array(
//					'value' => 'Скидка',
//					'label' => __('Показывать', '{domain}'),
//				),
//			],
//			'landing_title_footer' => [
//				'type' => 'text',
//				'label' => __('Заголовок лендинг футер', '{domain}'),
//				'value' => '',
//			],
//			'landing_phone_footer' => [
//				'type' => 'text',
//				'label' => __('Телефон лендинг футер', '{domain}'),
//				'value' => '',
//			],
//			'landing_time_footer' => [
//				'type' => 'textarea',
//				'label' => __('Время работы лендинг футер', '{domain}'),
//				'value' => '',
//			],
//			'landing_email_footer' => [
//				'type' => 'text',
//				'label' => __('Email лендинг футер', '{domain}'),
//				'value' => '',
//			],
//			'landing_address_footer' => [
//				'type' => 'textarea',
//				'label' => __('Адрес лендинг футер', '{domain}'),
//				'value' => '',
//			],
		),
	),
);