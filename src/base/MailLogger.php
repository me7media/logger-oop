<?php

namespace Vendor\Logger\Base;


class MailLogger extends AbstractMailLogger implements LoggerInterface
{
    /**
     * @param string $data
     * @return mixed|void
     */
    public function log(string $data)
    {
        $this->logToMail($data);
    }
}