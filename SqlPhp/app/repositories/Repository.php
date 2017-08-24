<?php namespace App\Repositories;

abstract class Repository implements IRepository{

    protected static $dbHost;
    protected static $dbName;
    protected static $dbUser;
    protected static $dbPassword;
    protected static $dbPort;

    private static $initialized = false;

    protected $db;

    public static function init($dbHost, $dbPort, $dbName, $dbUser, $dbPassword){
        self::$dbHost = $dbHost;
        self::$dbPort = $dbPort;
        self::$dbName = $dbName;
        self::$dbUser = $dbUser;
        self::$dbPassword = $dbPassword;
        self::$initialized = true;
    }

    public function __construct(){
        if(self::$initialized == false){
            throw new \Exception("Repository is not initialized!");
        }

        $this->db = new \MySQLi();
    }
}