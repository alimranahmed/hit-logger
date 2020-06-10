<?php


namespace AlImranAhmed\HitLogger;


use Illuminate\Http\Request;

class DefaultLogSetting implements LogSetting
{

    protected $dontLogPaths;

    public function __construct()
    {
        $this->dontLogPaths = config('hit-logger.except.paths');
    }

    public function shouldLog(Request $request): bool
    {
        if (empty($this->dontLogPaths)) {
            return true;
        }

        foreach ($this->dontLogPaths as $dontLogPath) {
            if ($this->isMatched(ltrim($dontLogPath, '/'), $request->path())) {
                return false;
            }
        }
        return true;
    }

    protected function isMatched(string $pattern, string $value): bool
    {
        if ($pattern == $value) {
            return true;
        }

        $pattern = preg_quote($pattern, '#');

        $pattern = str_replace('\*', '.*', $pattern) . '\z';

        return (bool)preg_match('#^' . $pattern . '#', $value);
    }
}
