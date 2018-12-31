<?php

function get_results()
{
    $stuffJson = file_get_contents('results.json');
    $stuff = json_decode($stuffJson, true);
    return $stuff;
}
