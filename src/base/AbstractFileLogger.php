<?php


namespace Me\Logger\Base;


    abstract class AbstractFileLogger
{
        /**
         * @var string
         */
    private $fileName;

        /**
         * AbstractFileLogger constructor.
         * @param $fileName
         */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }
        /**
         * @param $data
         */
    protected function logToFile($data)
    {
        file_put_contents($this->fileName, $data);
    }
}