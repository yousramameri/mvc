<?php
declare(strict_types = 1);
namespace app;

if(!defined('ROOT')) exit('Nope !');

class Config
{
    /* Paramètres de l'application */
    public const DEFAULT_CONTROLLER = "page";
    public const DEFAULT_ACTION = "index";
    public const DEBUG_MODE = true;

    /* Base de données */
    public const SQL_HOST = "localhost";
    public const SQL_DATABASE = "mvc";
    public const SQL_USER = "root";
    public const SQL_PASSWORD = "";
}