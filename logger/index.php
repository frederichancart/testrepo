

<?php

/**
 * index.php
 * 
 * Start pagina applicatie
 * 
 */
require_once 'logger.php';
require_once 'klogger.php';

echo "test<br>";

echo "Logger class test<br>";
Logger::log($message);

Logger::log("testlog");

echo "Klogger class test<br>";

$log = new KLogger ( "log.txt" , KLogger::DEBUG );
 
$log->LogDebug("Program start");
// Do database work that throws an exception
$log->LogError("An exception was thrown in ThisFunction()");
 
// Print out some information
$log->LogInfo("Internal Query Time: $time_ms milliseconds");
 
// Print out the value of some variables
$User_Count = 3;
$log->LogDebug("User Count: $User_Count");

$log->LogDebug("Program end");
echo "done";