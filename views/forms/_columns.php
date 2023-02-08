<?php

return [
    'id',
    'phone',
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
