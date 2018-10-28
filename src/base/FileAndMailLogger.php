<?php

namespace Vendor\Me\Logger\Base;


class FileAndMailLogger extends AbstractFileAndMailLogger implements LoggerInterface
{
    /**
     * @param string $data
     * @return mixed|void
     */
     public function log(string $data)
    {
        $this->logToFileAndMail($data);
    }

}