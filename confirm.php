<?php

$host = 'localhost';
$dbname2 = 'shareyourwork';
$user2 = 'root';
$pass2 = '';

$dbname = 'work';
$user = 'root';
$pass = 'root';

function connectDb($host, $dbname, $user, $pass){
	try{
	$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	return $db;
	}
	catch(Exception $e)
	{
		return false;
	    echo 'Erreur : '.$e->getMessage().'<br />';
	    echo 'N° : '.$e->getCode();
	}
}

$db = connectDb($host, $dbname, $user, $pass);
if($db === false)
	$db = connectDb($host, $dbname2, $user2, $pass2);
