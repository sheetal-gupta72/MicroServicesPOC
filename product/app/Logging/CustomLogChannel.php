<?php

namespace App\Logging;

use Monolog\Handler\RotatingFileHandler;
use Illuminate\Support\Facades\Log;

class CustomLogChannel
{
    public function __invoke($logger)
    {
        $logFileName = 'api-' . date('Y-m-d') . '.log';
        $logFilePath = storage_path('logs/api/' . $logFileName);

        if (file_exists($logFilePath)) {
            $logFileSize = filesize($logFilePath);
            Log::info("Current log file size: $logFileSize bytes");

            if ($logFileSize >= 1024) {
                Log::info('Log file size exceeds or is equal to 1kb, creating a new log file.');
                $logger->setHandlers([new RotatingFileHandler($logFilePath, 0, \Monolog\Logger::DEBUG)]);
            }
        } else {
            Log::info('Log file not found.');
        }
    }
}
