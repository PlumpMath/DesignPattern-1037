<?php
/**
 * alrifqi
 * reza.rifqi@yahoo.com
 * Date: 8/12/15
 * Time: 10:47
 */
require_once 'DatabaseFactory.php';

$db = new DatabaseFactory('mysql');
$database = $db->setDatabase('localhost','root','root');
echo $database->getHost();
echo $database->getDB();