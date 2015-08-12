<?php
/**
 * alrifqi
 * reza.rifqi@yahoo.com
 * Date: 8/12/15
 * Time: 10:39
 */

require_once 'Mysql.php';
require_once 'Postgresql.php';
require_once 'Mariadb.php';

class DatabaseFactory {
    public $db;
    public $database;
    public function __construct($d){
        $this->db = $d;
    }
    public function setDatabase($h, $u, $p){
        if($this->db == 'mysql'){
            $database = new Mysql($h, $u, $p);
        }elseif($this->db == 'postgresql'){
            $database = new Postgresql($h, $u, $p);
        }else{
            $database = new Mariadb($h, $u, $p);
        }
        return $database;
    }
}
