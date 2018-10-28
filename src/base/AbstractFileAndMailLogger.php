<?php

namespace Me\Logger\Base;


 abstract class AbstractFileAndMailLogger
{
     /**
      * @var string
      */
     private $fileName;
     private $email;
     private $date;
     /**
      * @param string $fileName
      */
     public function __construct($fileName, $email)
     {
         $this->fileName = $fileName;
         $this->email = $email;
         $this->date = date('YYYY-dd-mm HH:mm:ss');
     }
     /**
      * @param string $data
      */
     protected function logToFileAndMail($data)
     {
         file_put_contents($this->fileName, $data);
         mail($this->email, 'An Error at:' . $this->date, $data);
         echo 'Logged!';
     }
}