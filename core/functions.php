<?php

/**
 * Get the data die and dump.
 *
 * @param  mixed
 *
 * @return mixed
 */
function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}
