<?php


namespace Allenlinatoc\Tests;


class Console
{

    public static $count = 1;


    public static function title($title)
    {
        self::line();
        self::line();
        echo "  $title \n";
        self::line();
        self::line();
    }


    public static function heading1($msg)
    {
        echo " ##### $msg #####\n";
        self::line();
    }


    public static function heading2($msg)
    {
        echo " ## $msg\n";
        self::line();
    }


    public static function indented($msg, $addcount = false)
    {
        echo " " . ($addcount ? self::$count : "") . " => $msg\n";
        self::$count++;
    }


    public static function indentedX2($msg, $addcount = false)
    {
        echo " " . ($addcount ? self::$count : "") . " ====> $msg\n";
        self::$count++;
    }


    public static function line()
    {
        echo " =============================================== \n";
    }


    public static function resetCounter()
    {
        self::$count = 1;
    }

}