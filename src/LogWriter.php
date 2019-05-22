<?php


namespace AlImranAhmed\HitLogger;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

interface LogWriter
{
    public function logRequest(Request $request);

    public function logResponse(Request $request, Response $response);
}
