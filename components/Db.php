<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 01.09.17
 * Time: 9:37
 */

class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT.'/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        //$db->query('SET NAMES UTF8');

        return $db;
    }
}