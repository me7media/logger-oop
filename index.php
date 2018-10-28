<?php

require_once __DIR__ . '/vendor/autoload.php';

$logger = new Vendor\Me\Logger\Logger();

$strategy = new Vendor\Me\Logger\Base\FileAndMailLogger(__DIR__ . './log.log', 'support@site.com');

$strategy_to_email = new Vendor\Me\Logger\Base\MailLogger('support@site.com');
$strategy_to_file = new Vendor\Me\Logger\Base\FileLogger('./log.log');

$logger->writeLog('Error in OOP', $strategy);