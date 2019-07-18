<?php


namespace AlImranAhmed\HitLogger;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultLogWriter implements LogWriter
{

    public function logRequest(Request $request): void
    {
        $method = strtoupper($request->getMethod());

        $uri = $request->getPathInfo();

        $headers = "- Header: ".json_encode($request->header());

        $body = "- Body: ".json_encode($request->except(config('hit-logger.except')));

        $files = array_map(function (UploadedFile $file) {
            return $file->getClientOriginalName();
        }, iterator_to_array($request->files));

        $files = "- Files: ".implode(', ', $files);

        $message = "[Request] {$method} {$uri}\n {$headers}\n $body \n {$files}";

        Log::info($message);
    }

    public function logResponse(Request $request, $response)
    {
        $method = strtoupper($request->getMethod());

        $uri = $request->getPathInfo();

        $headers = "- Headers: ".json_encode($response->headers->all());

        $body = "- Body: ".$response->getContent();

        $message = "[Response] {$method} {$uri}\n {$headers}\n {$body}";

        Log::info($message);
    }
}
