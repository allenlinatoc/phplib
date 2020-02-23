<?php

return function($args = null)
{
    $dt = date_create();
    if (is_array($args)) {
        extract($args);
    }
    return [
        "title"             => "This is a test for config",
        "year"              => $dt->format("Y"),
        "message"           => "Hi! I'm $name, and I work as a $position"
    ];
};