<?php
return [
    'id' => 'php-native',
    'basePath' => __DIR__,
    //'controllerNamespace' => 'micro\controllers',
    'aliases' => [
        '@native' => __DIR__,
    ],
    'modules' => [
        'core' => [
            'class' => 'native\modules\core\Module',
        ],
    ],
    'defaultRoute' => '/core/',
];