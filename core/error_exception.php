<?php

ini_set('display_errors', 1);

set_error_handler('errorHandler');
set_exception_handler('exceptionHandler');

/**
 * Print formatted errors
 *
 * @param $error
 * @param $errstr
 * @param $errfile
 * @param $errline
 */
function errorHandler($error, $errstr, $errfile, $errline) {
    echo "<pre>";
    echo "<b style='font-size: 18px;'>Error: {$errstr}</b>" . PHP_EOL;
    echo "================" . PHP_EOL;
    echo "<b>Message:</b> {$errstr}";
    echo "<br>";
    echo "<b>File:</b> {$errfile}";
    echo "<br>";
    echo "<b>Line:</b> {$errline}";
    echo "</pre>";
}

/**
 * Print formatted exceptions
 *
 * @param $exception
 */
function exceptionHandler($exception) {
    echo "<pre>";
    echo "<b style='font-size: 18px;'>Exception: {$exception->getMessage()}</b>" . PHP_EOL;
    echo "================" . PHP_EOL;
    echo "<b>Message:</b> {$exception->getMessage()}";
    echo "<br>";
    echo "<b>File:</b> {$exception->getFile()}";
    echo "<br>";
    echo "<b>Line:</b> {$exception->getLine()}";
    echo "<br>";
    echo "<b>TraceAsString:</b> {$exception->getTraceAsString()}";
    echo "</pre>";
}