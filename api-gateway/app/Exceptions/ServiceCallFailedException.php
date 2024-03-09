<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class ServiceCallFailedException extends Exception
{
    public function __construct($message = "Service call failed", $code = 0, Exception $previous = null)
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
        // Return a custom response for the exception
        return response()->json(['error' => $this->getMessage()], $this->getCode());
    }
}
