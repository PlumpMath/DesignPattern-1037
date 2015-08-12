<?php
/**
 * alrifqi
 * reza.rifqi@yahoo.com
 * Date: 8/12/15
 * Time: 10:46
 */
require_once 'Database.php';

class Mariadb implements Database{
    public $host, $username, $password;
    public function __construct($h, $u, $p){
        $this->host = $h;
        $this->username = $u;
        $this->password = $p;
    }
    public function getDB(){
        return "MariaDB";
    }
    public function getHost(){
        return $this->host;
    }
    public function query($q){
        echo "Query ";
    }
} 