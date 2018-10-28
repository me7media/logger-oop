<?php

namespace Vendor\Logger\Base;


interface LoggerInterface
{

    /**
     * @param string $data
     * @return mixed
     */
    public function log(string $data);
}