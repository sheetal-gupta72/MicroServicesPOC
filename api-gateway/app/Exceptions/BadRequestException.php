<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class BadRequestException extends Exception
{
    public function __construct($message = "Bad request", $code = 400, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function report()
    {
        Log::info('Exception Full Error:', [
            'message' => $this->getMessage(),
            'code' => $this->getCode(),
            'stack' => $this->getTraceAsString(),
        ]);
    }

    public function render($request)
    {
        // Customize the response for API consumers
        return response()->json(['error' => $this->getMessage()], $this->getCode());
    }
}
