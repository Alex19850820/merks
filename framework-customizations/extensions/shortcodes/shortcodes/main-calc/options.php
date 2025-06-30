<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    'images'     => [
        'type'  => 'multi-upload',
        'value' => '',
        'label' => __('Добавить картинки(2шт)', '{domain}'),
        'images_only' => true,
    ],
    'text'  =>[
                'type'  => 'wp-editor',
                'value' => '',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Текст', '{domain}'),
                'desc'  => __('Description', '{domain}'),
                'help'  => __('Help tip', '{domain}'),
                'size' => 'small', // small, large
                'editor_height' => 400,
                'wpautop' => true,
                'editor_type' => false, // tinymce, html
                'shortcodes' => false // true, array('button', map')
    ],
	'h2'     => [
		'type'  => 'text',
		'value' => 'Калькулятор тарифов',
		'label' => __('Заголовок', '{domain}'),
	],
    'regions' => [
		'type' => 'addable-popup',
		'label' => __('Добавить region ', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'title'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Название региона', '{domain}'),
			],
            'value'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Значенеие прокачки', '{domain}'),
			],
        ],
    ],
    'fuel' => [
		'type' => 'addable-popup',
		'label' => __('Добавить топливо', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'title'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Название топливо', '{domain}'),
			],
            'value'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Значенеие топливо', '{domain}'),
			],
        ],
    ],
	'brands' => [
		'type' => 'addable-popup',
		'label' => __('Добавить бренд', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'title'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Название бренда', '{domain}'),
			],
			'img'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинку бренда', '{domain}'),
				'images_only' => true,
			],
            'value'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Значенеие бренда', '{domain}'),
			],
			'img_back' => [
				'type'  => 'color-picker',
				'value' => '',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				// palette colors array
				'palettes' => array( '#0079C2', '#5FADE0', '#07DE44', '#FBCE07' ),
				'label' => __('Выберите цвет для фона бренда', '{domain}'),
				// 'desc'  => __('Description', '{domain}'),
				// 'help'  => __('Help tip', '{domain}'),
			],
        ],
    ],
	'services' => [
		'type' => 'addable-popup',
		'label' => __('Добавить услугу', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'title'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Название услуги', '{domain}'),
			],
			'img'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинку услуги', '{domain}'),
				'images_only' => true,
			],
            'value'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Значенеие услуги', '{domain}'),
			],
			'img_back' => [
				'type'  => 'color-picker',
				'value' => '',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				// palette colors array
				'palettes' => array( '#0079C2', '#5FADE0', '#07DE44' ),
				'label' => __('Выберите цвет для фона услуги', '{domain}'),
				// 'desc'  => __('Description', '{domain}'),
				// 'help'  => __('Help tip', '{domain}'),
			],
        ],
    ],
	'img_right_card' => [
		'type'  => 'upload',
		'value' => '',
		'label' => __('Добавить картинку с права карточка', '{domain}'),
		'images_only' => true,
		'template' => '<img src="{{- img_right_card.url }}>',
	],
	'promo' => [
		'type' => 'addable-popup',
		'label' => __('Добавить промо акцию', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'title'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Название акции', '{domain}'),
			],
			'img'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинку услуги', '{domain}'),
				'images_only' => true,
			],
            'value'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Значенеие услуги', '{domain}'),
			],
        ],
    ],


//	'accordion' => [
//		'type' => 'addable-popup',
//		'label' => __('Добавить акардион ', '{domain}'),
//		'template' => '{{- title }}',
//		'size' => 'large', // small, medium, large
//		'limit' => 0, // limit the number of popup`s that can be added
//		'add-button-text' => __('добавить', '{domain}'),
//		'sortable' => true,
//		'popup-options' => [
////			'img'     => [
////				'type'  => 'upload',
////				'value' => '',
////				'label' => __('Добавить картинку', '{domain}'),
////				'images_only' => true,
////			],
//			'title'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Заголовок', '{domain}'),
//			],
//            'text'  =>[
//                'type'  => 'wp-editor',
//                'value' => '',
//                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//                'label' => __('Текст', '{domain}'),
//                'desc'  => __('Description', '{domain}'),
//                'help'  => __('Help tip', '{domain}'),
//                'size' => 'small', // small, large
//                'editor_height' => 400,
//                'wpautop' => true,
//                'editor_type' => false, // tinymce, html
//                'shortcodes' => false // true, array('button', map')
//            ]
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