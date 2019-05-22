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
     * Request fields that should never be logged
     */
    'except' => [
        'password',
        'password_confirmation'
    ]
];
