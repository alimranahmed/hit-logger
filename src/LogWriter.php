<?php


namespace AlImranAhmed\HitLogger;


use Illuminate\Http\Request;

interface LogWriter
{
    public function logRequest(Request $request);

    public function logResponse(Request $request, $response);
}
