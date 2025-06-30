<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
//    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
    'img'     => [
        'type'  => 'upload',
        'value' => '',
        'label' => __('Добавить картинку баннер', '{domain}'),
        'images_only' => true,
    ],
    'code_map'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Код карты', '{domain}'),
	],
    'h2_service'     => [
        'type'  => 'text',
        'value' => '',
        'label' => __('Заголовок2', '{domain}'),
    ],
    'text_page'     => [
        'label' => __('Текст страницы', '{domain}'),
        'value' => '',
        'type'  => 'wp-editor',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'size' => 'small', // small, large
        'editor_height' => 400,
        'wpautop' => true,
        'editor_type' => false, // tinymce, html
        'shortcodes' => false //
    ],
    'objects' => [
        'type' => 'addable-popup',
        'label' => __('Добавить работы', '{domain}'),
        'template' => '{{- h2 }}',
        'size' => 'large', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('добавить', '{domain}'),
        'sortable' => true,
        'popup-options' => [
            'h2'     => [
                'type'  => 'text',
                'value' => '',
                'label' => __('Заголовок', '{domain}'),
            ],
            'obj' => [
                'type' => 'addable-popup',
                'label' => __('Добавить работы', '{domain}'),
                'template' => '{{- title }}',
                'size' => 'large', // small, medium, large
                'limit' => 0, // limit the number of popup`s that can be added
                'add-button-text' => __('добавить', '{domain}'),
                'sortable' => true,
                'popup-options' => [
                    'title'     => [
                        'type'  => 'text',
                        'value' => '',
                        'label' => __('Название работы', '{domain}'),
                    ],
                    'img'     => [
                        'type'  => 'upload',
                        'value' => '',
                        'label' => __('Добавить картинку работы', '{domain}'),
                        'images_only' => true,
                    ],
                ]
            ],

        ],
    ],
    'text_page2'     => [
        'label' => __('Текст страницы после картинок', '{domain}'),
        'value' => '',
        'type'  => 'wp-editor',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'size' => 'small', // small, large
        'editor_height' => 400,
        'wpautop' => true,
        'editor_type' => false, // tinymce, html
        'shortcodes' => false //
    ],
//	'service' => [
//		'type' => 'addable-popup',
//		'label' => __('Добавить работы', '{domain}'),
//		'template' => '{{- h2 }}',
//		'size' => 'large', // small, medium, large
//		'limit' => 0, // limit the number of popup`s that can be added
//		'add-button-text' => __('добавить', '{domain}'),
//		'sortable' => true,
//		'popup-options' => [
//			'h2'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Название работы', '{domain}'),
//			],
//			'price'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Цена', '{domain}'),
//			],
//			'val_all'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Все значение за период', '{domain}'),
//			],
//			'type' => ['type'  => 'select',
//			'value' => 'line',
//			'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//			'label' => __('Тип графика', '{domain}'),
//			'desc'  => __('Description', '{domain}'),
//			'help'  => __('Help tip', '{domain}'),
//			'choices' => array(
//				'' => '---',
//				'line' => __('Линейный', '{domain}'),
//				'bar' => __('Столбики', '{domain}'),
//			),
//			],
//			'color' => array(
//				'type'  => 'color-picker',
//				'value' => '#FF0000',
//				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//				// palette colors array
//				'palettes' => array( 'rgb(0,128,0)', 'rgb(255, 99, 132)', '#2489eb' ),
//				'label' => __('Цвет графика', '{domain}'),
//				'desc'  => __('Description', '{domain}'),
//				'help'  => __('Help tip', '{domain}'),
//			),
//		]
//	],
//    'service2' => [
//        'type' => 'addable-popup',
//        'label' => __('Добавить услуги', '{domain}'),
//        'template' => '{{- h2 }}',
//        'size' => 'large', // small, medium, large
//        'limit' => 0, // limit the number of popup`s that can be added
//        'add-button-text' => __('добавить', '{domain}'),
//        'sortable' => true,
//        'popup-options' => [
//            'h2'     => [
//                'type'  => 'text',
//                'value' => '',
//                'label' => __('Название услуги', '{domain}'),
//            ],
//            'price'     => [
//                'type'  => 'text',
//                'value' => '',
//                'label' => __('Цена', '{domain}'),
//            ],
//
//        ],
//    ]
];