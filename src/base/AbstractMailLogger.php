<?php

namespace Me\Logger\Base;


    abstract class AbstractMailLogger
{
        /**
         * @var
         */
    private $email;
    private $date;

        /**
         * AbstractMailLogger constructor.
         * @param $email
         */
    public function __construct($email)
    {
        $this->email = $email;
        $this->date = date('YYYY-dd-mm HH:mm:ss');
    }

        /**
         * @param $data
         * @return bool
         */
    protected function logToMail($data)
    {
        mail($this->email, 'An Error at:' . $this->date, $data);
    }
}