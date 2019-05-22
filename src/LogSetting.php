<?php


namespace AlImranAhmed\HitLogger;


use Illuminate\Http\Request;

interface LogSetting
{
    public function shouldLog(Request $request): bool;
}
