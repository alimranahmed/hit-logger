<?php

return [
    /**
     * Should implement the interface `\AlImranAhmed\HitLogger\LogSetting`
     */
    'log_setting' => \AlImranAhmed\HitLogger\DefaultLogSetting::class,

    /**
     * Should implement the interface `\AlImranAhmed\HitLogger\LogWriter`
     */
    'log_writer' => \AlImranAhmed\HitLogger\DefaultLogWriter::class,

    /**
     * Request fields or path(wildcard supported) that should never be logged
     */
    'except' => [
        'fields' => [
            'password',
            'password_confirmation',
        ],

        'paths' => [

        ],
    ],
];
