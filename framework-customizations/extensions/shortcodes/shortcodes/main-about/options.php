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
	'h2'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Заголовок', '{domain}'),
	],
//    'text'     => [
//        'type'  => 'wp-editor',
//        'value' => '',
//        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//        'label' => __('Текст', '{domain}'),
//        'desc'  => __('Description', '{domain}'),
//        'help'  => __('Help tip', '{domain}'),
//        'size' => 'small', // small, large
//        'editor_height' => 400,
//        'wpautop' => true,
//        'editor_type' => false,
//        'shortcodes' => false,
//    ],
    'text'     => [
        'type'  => 'textarea',
        'value' => '',
        'label' => __('Текст', '{domain}'),
    ],
    'images'     => [
        'type'  => 'multi-upload',
        'value' => '',
        'label' => __('Добавить картинки', '{domain}'),
        'images_only' => true,
    ],
//	'advantages' => [
//		'type' => 'addable-popup',
//		'label' => __('Добавить преимущество ', '{domain}'),
//		'template' => '{{- h2 }}',
//		'size' => 'large', // small, medium, large
//		'limit' => 0, // limit the number of popup`s that can be added
//		'add-button-text' => __('добавить', '{domain}'),
//		'sortable' => true,
//		'popup-options' => [
//			'img'     => [
//				'type'  => 'upload',
//				'value' => '',
//				'label' => __('Добавить картинку', '{domain}'),
//				'images_only' => true,
//			],
//			'h2'     => [
//				'type'  => 'text',
//				'value' => 'Results',
//				'label' => __('Заголовок', '{domain}'),
//			],
//			'text'     => [
//				'type'  => 'textarea',
//				'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidunt ut labore et dolore magna.',
//				'label' => __('Заголовок', '{domain}'),
//			],
//
//		]
//	],
	/*'title'     => [
		'type'  => 'text',
		'value' => 'наши результаты',
		'label' => __('Заголовок', '{domain}'),
	],
	'img'     => [
		'type'  => 'upload',
		'value' => '',
		'label' => __('Добавить картинку', '{domain}'),
		'images_only' => true,
	],
	'title2'     => [
		'type'  => 'text',
		'value' => 'Наша миссия - Ваша красота',
		'label' => __('Заголовок поста', '{domain}'),
	],*/
//	'house' => [
//		'type' => 'addable-popup',
//		'label' => __('Добавить информацию', '{domain}'),
//		'template' => '{{- h2 }}',
//		'size' => 'large', // small, medium, large
//		'limit' => 0, // limit the number of popup`s that can be added
//		'add-button-text' => __('добавить', '{domain}'),
//		'sortable' => true,
//		'popup-options' => [
////			'img'     => [
////				'type'  => 'upload',
////				'value' => '',
////				'label' => __('Добавить картинку здания', '{domain}'),
////				'images_only' => true,
////			],
////			'h2'     => [
////				'type'  => 'text',
////				'value' => '',
////				'label' => __('Заголовок', '{domain}'),
////			],
//			'price'     => [
//				'type'  => 'text',
//				'value' => 'от <span>2</span> млн. руб.',
//				'label' => __('Цена', '{domain}'),
//			],
//			'area'     => [
//				'type'  => 'text',
//				'value' => 'от 184 500 р./м<sup>2</sup>',
//				'label' => __('Цена за кв метр', '{domain}'),
//			],
//			'city'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Город', '{domain}'),
//			],
//			'md'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Микрорайон', '{domain}'),
//			],
//			'info'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Текст ссылки', '{domain}'),
//				'desc'  => __('Подробнее или еще или узнать больше...', '{domain}'),
//				'help'  => __('Введите текст', '{domain}'),
//			],
//			'href'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Ссылка', '{domain}'),
//				'desc'  => __('Введите адрес на который будет ссылаться страница', '{domain}'),
//				'help'  => __('Введите страницу', '{domain}'),
//			],
//		],
//	],
//
];