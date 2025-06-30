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
        'label' => __('Добавить фон', '{domain}'),
        'images_only' => true,
    ],
//    'h2'     => [
//		'type'  => 'text',
//		'value' => '',
//		'label' => __('Заголовок', '{domain}'),
//	],
//    'h2_service'     => [
//        'type'  => 'text',
//        'value' => '',
//        'label' => __('Заголовок2', '{domain}'),
//    ],
	'slider' => [
		'type' => 'addable-popup',
		'label' => __('Добавить слайд', '{domain}'),
		'template' => '{{- h2 }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
            'h2'     => [
                'type'  => 'text',
                'value' => '',
                'label' => __('Заголовок слайда', '{domain}'),
            ],
            'text'     => [
                'type'  => 'textarea',
                'value' => '',
                'label' => __('Текст слайда', '{domain}'),
            ],
		]
	],
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