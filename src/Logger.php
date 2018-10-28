<?php

namespace Vendor\Me\Logger;

use Vendor\Logger\Base\LoggerInterface;

class Logger
{
    /**
     * @var string
     */
    private $fileName;
    private $email;

    /**
     * Logger constructor.
     */
    public function __construct()
    {
        $this->fileName = 'error.log';
        $this->email = 'support@site.com';
    }

    /**
     * @param $data
     * @param LoggerInterface $logger
     */
    public function writeLog($data, LoggerInterface $logger){

        $preprocessedData = $this->preProcessData($data);
        $logger->log($preprocessedData);
    }

    /**
     * @param string $data
     * @return string
     */
    private function preProcessData(string $data)
    {
        return $data;
    }
}