<?php
declare(strict_types = 1);
namespace core;

if(!defined('ROOT')) exit('Nope !');

class Error
{
    public static function trigger404(): never
    {
        http_response_code(404);
        die();
    }

    public static function printMessage(string $message): never
    {
        if(\app\Config::DEBUG_MODE)
            echo 'ERREUR : '.$message;

        die();
    }
}