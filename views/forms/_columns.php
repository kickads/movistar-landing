<?php

return [
    'id',
    'phone',
    'provider_id',
    'publisher_id',
    'ktoken',
    'ip',
    [
        'attribute' => 'created_at',
        'format' => ['datetime', 'php:d/m/Y H:i:s']
    ],
    [
        'class' => 'yii\grid\ActionColumn',
        'template' => '{view} ',
    ],

];
