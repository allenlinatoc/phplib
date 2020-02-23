<?php


namespace Allenlinatoc\CLI;


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


    /**
     * 
     * @param string $msg
     */
    public static function heading2($msg)
    {
        echo " ## $msg\n";
        self::line();
    }
    
    
    /**
     * 
     * @param string $msg
     */
    public static function log($msg) {
        echo $msg . "\n";
    }


    /**
     * 
     * @param string $msg
     * @param boolean $addcount
     */
    public static function indented($msg, $addcount = false)
    {
        echo " " . ($addcount ? self::$count : "") . " => $msg\n";
        if ($addcount) {
            self::$count++;
        }
    }


    /**
     * 
     * @param string $msg
     * @param boolean $addcount     [optional] Increment counter. Default is false.
     */
    public static function indentedX2($msg, $addcount = false)
    {
        echo " " . ($addcount ? self::$count : "") . " ====> $msg\n";
        if ($addcount) {
            self::$count++;
        }
    }


    /**
     * Add straight line to console output
     */
    public static function line()
    {
        echo " =============================================== \n";
    }


    /**
     * Reset counter
     */
    public static function resetCounter()
    {
        self::$count = 1;
    }

}