<?php

/**
 * Get the data die and dump.
 *
 * @param  $data
 *
 * @return mixed
 */
function dd(...$data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

/**
 * Get the data dump.
 *
 * @param  $data
 *
 * @return mixed
 */
function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

/**
 * Require the file and pass the data.
 *
 * @param  $file
 * @param  $data array
 *
 * @return file
 */
function view($file, $data = [])
{
    extract($data);

    return require "resources/views/$file.view.php";
}

/**
 * Re direct traffic to specified path.
 *
 * @param  $path
 *
 * @return location
 */
function redirect($path)
{
    header("Location: /{$path}");
}

/**
 * Application instance.
 */
function app()
{
    return require 'core/app.php';
}
