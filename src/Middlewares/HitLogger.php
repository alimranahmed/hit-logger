<?php

namespace AlImranAhmed\HitLogger\Middlewares;

use AlImranAhmed\HitLogger\LogSetting;
use AlImranAhmed\HitLogger\LogWriter;
use Closure;

class HitLogger
{
    protected $logSetting;
    protected $loggerWriter;

    public function __construct(LogSetting $logSetting, LogWriter $logWriter)
    {
        $this->logSetting = $logSetting;
        $this->loggerWriter = $logWriter;
    }

    public function handle($request, Closure $next)
    {
        if ($this->logSetting->shouldLog($request)) {
            $this->loggerWriter->logRequest($request);
        }
        return $next($request);
    }

    public function terminate($request, $response)
    {
        if ($this->logSetting->shouldLog($request)) {
            $this->loggerWriter->logResponse($request, $response);
        }
    }
}
