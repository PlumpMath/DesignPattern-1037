<?php
/**
 * User: alrifqi
 * Date: 6/11/15
 * Time: 16:44
 */

class Database {
    private $dbHost = null;
    private $dbName = null;
    private $dbUser = null;
    private $dbPass = null;
    private static $instance = null;

    /**
     * @param array $db
     * Constructor for instance class
     */
    private function __construct($dbParam = array()){
        $this->dbHost = $db['db_host'];
        $this->dbName = $db['db_name'];
        $this->dbUser = $db['db_user'];
        $this->dbPass = $db['db_pass'];

        $this->db = new PDO('mysql:host='.$this->dbHost.';dbName='.$this->dbName,$this->dbUser,$this->dbPass);
    }

    /**
     * @param array $dbParam
     * Function for database connection
     */
    public static function connect($dbParam = array()){
        if(self::$instance == null){
            self::$instance = new Database($dbParam);
        }
        return self::$instance;
    }
} 