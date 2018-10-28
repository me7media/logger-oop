<?php

require_once __DIR__ . '/vendor/autoload.php';

$logger = new Me\Logger\Logger();

$strategy = new Me\Logger\Base\FileAndMailLogger(__DIR__ . './log.log', 'support@site.com');

$strategy_to_email = new Me\Logger\Base\MailLogger('support@mail.com');
$strategy_to_file = new Me\Logger\Base\FileLogger('./log.log');

$logger->writeLog('Error in OOP', $strategy);