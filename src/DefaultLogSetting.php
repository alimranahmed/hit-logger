<?php


namespace AlImranAhmed\HitLogger;


use Illuminate\Http\Request;

class DefaultLogSetting implements LogSetting
{

    public function shouldLog(Request $request): bool
    {
        return true;
    }
}
