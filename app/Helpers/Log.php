<?php
namespace App\Helpers;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

class Log
{
    private $LOG;

    public function __construct($fileName)
    {
        $folder = date('Y-m', strtotime('now'));
        $prefix = date('Ymd', strtotime('now'));
        $this->LOG = new Logger($fileName);
        $this->LOG->pushHandler(new StreamHandler(storage_path()."/logs/{$fileName}/{$folder}/{$fileName}-{$prefix}.log", Logger::DEBUG));
        $this->LOG->pushHandler(new FirePHPHandler());
    }

    public function info($msg, $other = [])
    {
        $this->LOG->info($msg, $other);
    }
    
    public function critical($msg, $other = [])
    {
        $this->LOG->critical($msg, $other);
    }

    public function warning($msg, $other = [])
    {
        $this->LOG->warning($msg,$other);
    }

    public function notice($msg, $other = [])
    {
        $this->LOG->notice($msg, $other);
    }
    
    public function debug($msg, $other = [])
    {
        $this->LOG->debug($msg, $other);
    }

    public function errorMsg($e) {
        return [
            "Message" => $e->getMessage(),
            "File" => $e->getFile(),
            "Line" => $e->getLine(),
        ];
    }
}
