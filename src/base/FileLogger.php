<?php

namespace Vendor\Me\Logger\Base;


class FileLogger extends AbstractFileLogger implements LoggerInterface
{
    /**
     * @param string $data
     * @return mixed|void
     */
    public function log(string $data)
    {
        $this->logToFile($data);
    }
}