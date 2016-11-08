<?php
include("vendor/autoload.php");

$timeString = '12:15:59 AM';

$time = new \Fun\Time();

echo 'Time before: ' . $timeString . PHP_EOL;

echo 'Time after:  ' . $time->convert12hTimeTo24hTime($timeString) . PHP_EOL;
