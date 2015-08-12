<?php
/**
 * alrifqi
 * reza.rifqi@yahoo.com
 * Date: 8/12/15
 * Time: 10:23
 */

/*
 * Interface untuk concrete class
 */
interface Database{
    public function getDB();
    public function getHost();
    public function query($q);
}