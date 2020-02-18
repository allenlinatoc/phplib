<?php

return function($args = null)
{
    $dt = date_create();
    return [
        "title"                         => "This is a test for config",
        "year"                          => $dt->format("Y")
    ];
};