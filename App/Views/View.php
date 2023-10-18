<?php

namespace App\Views;

use App\Config\Config;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

class View
{
    private Logger $logger;
    public function __construct()
    {
        $this->logger = new Logger(Config::$LOG_VIEW_NAME);
        $debugHandler = new StreamHandler(Config::$LOG_VIEW_PATH, Level::Debug);
        $formatter = new LineFormatter(
            null,
            null,
            true,
            true
        );
        $debugHandler->setFormatter($formatter);
        $this->logger->pushHandler($debugHandler);
    }

    public function getLogger(): Logger
    {
        return $this->logger;
    }
}