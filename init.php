<?php 
/**
 * MySQL Connection */
$db = new PDO('mysql:host=localhost;dbname=irongutang', 'irongutang', 'Ironsadk0') or die('fuck!');
$db->query('SET NAMES utf8');


$settings = [
	'site_name' => 'Асимметричный Ответ',
	'site_slogan' => 'Точим кристаллы, меняем фракталлы',
];



